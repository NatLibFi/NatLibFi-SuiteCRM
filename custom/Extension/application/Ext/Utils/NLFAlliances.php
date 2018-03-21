<?php

function getActiveAlliancesHtml2($focus, $name, $value, $view) {
    $activeAlliances = array();
    $selected = array();

    if ($view !== 'DetailView') {
        $activeAlliances = getAllActiveAlliances(); // TODO: move here from NLFRoles utils
    }

    $contactId = getContactIdForAddAllianceRoleForm($_REQUEST);
    if ($contactId !== null) {
        $relatedAlliances = getAlliancesForContact($contactId);
        if (!empty($relatedAlliances)) {
            $selected = array($relatedAlliances[0] => 1);
        }
    }

    return makeHtmlOfEnumOptions($activeAlliances, $selected, $view);
}

function getAllianceRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedRoles = array();

    $allianceId = null;
    $contactId = null;

    if ($view !== 'DetailView') {
        $activeAlliances = getAllActiveAlliances(); // TODO: move here from NLFRoles utils
        if (!empty($activeAlliances)) {
            $allianceId = reset(array_keys($activeAlliances));
        }
    }

    $contactId = getContactIdForAddAllianceRoleForm($_REQUEST);
    if ($contactId !== null) {
        $relatedAlliances = getAlliancesForContact($contactId);
        if (!empty($relatedAlliances)) {
            $allianceId = $relatedAlliances[0];
        }
    }
    if ($allianceId !== null && $allianceId !== null) {
        $selectedRoles = getAllianceRolesForContact($contactId, $allianceId);
    }

    return makeHtmlOfEnumOptions($app_list_strings['contact_alliance_role_list'], $selectedRoles, $view);
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

function getAlliancesForContact($contactId = null) {
    if ($contactId === null) {
        return array();
    }

    $allianceIds = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT rel.nlfal_alliances_contacts_1nlfal_alliances_ida AS alliance_id FROM nlfal_alliances_contacts_1_c rel ' .
        'WHERE rel.deleted=0 AND ' .
        'rel.nlfal_alliances_contacts_1contacts_idb="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $allianceIds[] = $row['alliance_id'];
    }

    return $allianceIds;
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
    $noLeaderOptionAndAllAcounts = array_merge(
        array('' => translate('LBL_NO_ALLIANCE_LEADER', 'nlfal_Alliances')),
        getAllActiveAccounts()
    );
    if ($allianceId === null) {
        return $noLeaderOptionAndAllAcounts;
    }

    $members = array('' => translate('LBL_NO_ALLIANCE_LEADER', 'nlfal_Alliances'));

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

    if (count($members) === 1) {
        return $noLeaderOptionAndAllAcounts;
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



function getBusinessRelationshipForAllianceSubpanelQueryParts($params) {
    $allianceId = $params['alliance_id'];

    $query = array(
        'select' => 'SELECT nlfbr_businessrelationships.*',
        'from' => 'FROM nlfbr_businessrelationships',
        'where' => 'WHERE nlfbr_businessrelationships.deleted=0 AND acc_br_rel.deleted=0 AND acc_rel.deleted=0 AND ser_br_rel.deleted=0 AND ser_rel.deleted=0 ' .
            'AND acc_rel.nlfal_alliances_accounts_1nlfal_alliances_ida="' . $GLOBALS['db']->quote($allianceId) . '" ' .
            'AND ser_rel.nlfal_alliances_nlfse_services_1nlfal_alliances_ida="' . $GLOBALS['db']->quote($allianceId) . '" ' .
            'AND (' .
            'nlfbr_businessrelationships.nlfbr_businessrelationships_account_alliances IS NULL ' .
            'OR nlfbr_businessrelationships.nlfbr_businessrelationships_account_alliances="0" ' .
            'OR nlfbr_businessrelationships.nlfbr_businessrelationships_account_alliances LIKE "%\\\\^' . $GLOBALS['db']->quote($allianceId) . '\\\\^%" ' .
            ')',
        'join' => ' JOIN accounts_nlfbr_businessrelationships_1_c acc_br_rel ' .
            'ON acc_br_rel.accounts_n824donships_idb=nlfbr_businessrelationships.id ' .
            'JOIN nlfal_alliances_accounts_1_c acc_rel ' .
            'ON acc_rel.nlfal_alliances_accounts_1accounts_idb=acc_br_rel.accounts_nlfbr_businessrelationships_1accounts_ida ' .
            'JOIN nlfse_services_nlfbr_businessrelationships_1_c ser_br_rel ' .
            'ON ser_br_rel.nlfse_serva51aonships_idb=nlfbr_businessrelationships.id ' .
            'JOIN nlfal_alliances_nlfse_services_1_c ser_rel ' .
            'ON ser_rel.nlfal_alliances_nlfse_services_1nlfse_services_idb=ser_br_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
        'join_tables' => '',
        );

    return $query;
}

function getBusinessRelationshipForAllianceMembersSubpanelQueryParts($params) {
    $allianceId = $params['alliance_id'];

    $query = array(
        'select' => 'SELECT nlfbr_businessrelationships.*',
        'from' => 'FROM nlfbr_businessrelationships',
        'where' => 'WHERE nlfbr_businessrelationships.deleted=0 AND br_rel.deleted=0 AND acc_rel.deleted=0 AND acc_rel.nlfal_alliances_accounts_1nlfal_alliances_ida="' . $GLOBALS['db']->quote($allianceId) . '"',
        'join' => ' JOIN accounts_nlfbr_businessrelationships_1_c br_rel ' .
            'ON br_rel.accounts_n824donships_idb=nlfbr_businessrelationships.id ' .
            'JOIN nlfal_alliances_accounts_1_c acc_rel ' .
            'ON acc_rel.nlfal_alliances_accounts_1accounts_idb=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida',
        'join_tables' => '',
        );

    return $query;
}


