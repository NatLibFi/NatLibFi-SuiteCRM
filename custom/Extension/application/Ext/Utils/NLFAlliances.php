<?php

function getActiveAlliancesHtml2($focus, $name, $value, $view) {
    $activeAlliances = array();

    if ($view !== 'DetailView') {
        $activeAlliances = getAllActiveAlliances(); // TODO: move here from NLFRoles utils
    }

    return makeHtmlOfEnumOptions($activeAlliances, array(), $view);
}

function getAllianceRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedAlliances = array();

    $allianceId = null;

    if ($view !== 'DetailView') {
        $activeAlliances = getAllActiveAlliances(); // TODO: move here from NLFRoles utils
        if (!empty($activeAlliances)) {
            $allianceId = reset(array_keys($activeAlliances));
        }
    }

    if ($allianceId !== null) { 
        $contactId = getContactIdForAddAllianceRoleForm($_REQUEST);
        if ($contactId !== null) {
            $selectedAlliances = getAllianceRolesForContact($contactId, $allianceId);
        }
    }

    return makeHtmlOfEnumOptions($app_list_strings['contact_alliance_role_list'], $selectedAlliances, $view);
}

function getAllianceRolesForContact($contactId = null, $allianceId = null) {
    if ($contactId === null) {
        return array();
    }

    if ($allianceId === null) {
        return array();
    }

    $roles = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT roles.role FROM nlfal_alliances_contacts_1_c roles ' .
        'WHERE roles.deleted=0 AND ' .
        'roles.nlfal_alliances_contacts_1nlfal_alliances_ida="' . $db->quote($allianceId) . '" AND ' .
        'roles.nlfal_alliances_contacts_1contacts_idb="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $roles = unencodeMultienum($row['role']);
        $roles = array_flip($roles); // Could also do array_flip($roles) probably
    }

    return $roles;
}

function getContactIdForAddAllianceRoleForm($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'nlfal_Alliances') {
        return null;
    }
    if (!isset($requestData['return_module']) || $requestData['return_module'] !== 'Contacts') {
        return null;
    }
    if (!isset($requestData['target_action']) || $requestData['target_action'] !== 'QuickCreate') {
        return null;
    }
    if (!isset($requestData['contact_id']) || empty($requestData['contact_id'])) {
        return null;
    }

    return $requestData['contact_id'];
}

function getActiveAllianceMembersHtml($focus, $name, $value, $view) {
    $leaderFieldName = 'kimpan_vetaja_c';
    $activeMembers = array();
    $selectedAccountId = isset($focus->{$leaderFieldName}) ? $focus->{$leaderFieldName} : null;

    $id = $focus->id;

    //if ($view !== 'DetailView') {
        $activeMembers = getAllActiveAllianceMembers($id);
    //}

    $selected = array();

    if (array_key_exists($selectedAccountId, $activeMembers)) {
        $selected = array( $selectedAccountId => $activeMembers[$selectedAccountId] );
    }

    return makeHtmlOfMultiEnumOptions($activeMembers, $selected, $view, array('link' => true, 'module' => 'Accounts', 'singleSelectOnly' => true));
}

function getAllActiveAllianceMembers($allianceId) {
    if ($allianceId === null) {
        return getAllActiveAccounts();
    }

    $members = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT rel.nlfal_alliances_accounts_1accounts_idb AS account_id, acc.name AS account_name '.
        'FROM nlfal_alliances_accounts_1_c rel ' .
        'JOIN accounts acc ' .
        'ON acc.id=rel.nlfal_alliances_accounts_1accounts_idb ' .
        'WHERE rel.deleted=0 AND acc.deleted=0 AND ' .
        'rel.nlfal_alliances_accounts_1nlfal_alliances_ida="' . $db->quote($allianceId) . '"';
    $result = $db->query($query);

    while ($row = $db->fetchByAssoc($result)) {
        $members[$row['account_id']] = $row['account_name'];
    }

    return $members;
}



function getAllianceMemberCount($focus, $name, $value, $view) {
    $id = $focus->id;

    if (!$id) {
        return 0;
    }

    return geMemberCountForAlliance($id);
}

function geMemberCountForAlliance($id) {
    if (!$id) {
        return 0;
    }

    $db = $GLOBALS['db'];
    $query = 'select count(id) from nlfal_alliances_accounts_1_c ' .
        ' WHERE nlfal_alliances_accounts_1nlfal_alliances_ida="' . $db->quote($id) . '" ' .
        ' AND deleted=0';

    $count = $db->getOne($query);

    return $count;
}
