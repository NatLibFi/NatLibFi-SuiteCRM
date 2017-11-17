<?php

function getActiveAccountsHtml2($focus, $name, $value, $view) {
    $activeAccounts = array();
    $selected = array();

    $displayParams = array();
    if (isset($focus->field_defs[$name])) {
        if (isset($focus->field_defs[$name]['id_name'])) {
            $displayParams['name'] = $focus->field_defs[$name]['id_name'];
        } elseif (isset($focus->field_defs[$name]['name'])) {
            $displayParams['name'] = $focus->field_defs[$name]['name'];
        }
    }

    if ($view !== 'DetailView') {
        $activeAccounts = getAllActiveAccounts(); // TODO: move here from NLFRoles utils
    }

    $contactId = getContactIdForAddAccountRoleForm($_REQUEST);
    if ($contactId !== null) {
        $relatedAccounts = getAccountsForContact($contactId);
        if (!empty($relatedAccounts)) {
            $selected = array($relatedAccounts[0] => 1);
        }
    }

    return makeHtmlOfEnumOptions($activeAccounts, $selected, $view, $displayParams);
}

function getAccountRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedRoles = array();

    $accountId = null;
    $contactId = null;

    if ($view !== 'DetailView') {
        $activeAccounts = getAllActiveAccounts(); // TODO: move here from NLFRoles utils
        if (!empty($activeAccounts)) {
            $accountId = reset(array_keys($activeAccounts));
        }
    }
    $contactId = getContactIdForAddAccountRoleForm($_REQUEST);
    if ($contactId !== null) {
        $relatedAccounts = getAccountsForContact($contactId);
        if (!empty($relatedAccounts)) {
            $accountId = $relatedAccounts[0];
        }
    }
    if ($accountId !== null && $accountId !== null) {
        $selectedRoles = getAccountRolesForContact($contactId, $accountId);
    }

    return makeHtmlOfEnumOptions($app_list_strings['contact_account_role_list'], $selectedRoles, $view);
}

function getAccountRolesForContact($contactId = null, $accountId = null) {
    if ($contactId === null) {
        return array();
    }

    if ($accountId === null) {
        return array();
    }

    $roles = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT rel.role FROM accounts_contacts rel ' .
        'WHERE rel.deleted=0 AND ' .
        'rel.account_id="' . $db->quote($accountId) . '" AND ' .
        'rel.contact_id="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $roles = unencodeMultienum($row['role']);
        $roles = array_flip($roles); // Could also do array_flip($roles) probably
    }

    return $roles;
}

function getAccountsForContact($contactId = null) {
    if ($contactId === null) {
        return array();
    }

    $accountIds = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT rel.account_id FROM accounts_contacts rel ' .
        'WHERE rel.deleted=0 AND ' .
        'rel.contact_id="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $accountIds[] = $row['account_id'];
    }

    return $accountIds;
}

function getContactIdForAddAccountRoleForm($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'Accounts') {
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



function getBRContactsForAccountContactsSubpanelQueryParts($params) {
    $accountId = $params['account_id'];

    $query = array(
        'select' => 'SELECT contacts.*',
        'from' => 'FROM contacts',
        'where' => 'WHERE contacts.deleted=0 AND br_rel.deleted=0 AND acc_rel.deleted=0 AND acc_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $GLOBALS['db']->quote($accountId) . '"',
        'join' => ' JOIN nlfbr_businessrelationships_contacts_1_c br_rel ' .
            'ON br_rel.nlfbr_businessrelationships_contacts_1contacts_idb=contacts.id ' .
            'JOIN accounts_nlfbr_businessrelationships_1_c acc_rel ' .
            'ON acc_rel.accounts_n824donships_idb=br_rel.nlfbr_busic409onships_ida',
        'join_tables' => '',
        );

    return $query;
}

function getAccountAndBRRolesForContactSubpanelHtml($contactId) {
    // TODO: return if not expected stuff in $_REQUEST

    $accountId = $_REQUEST['record'];
    $roles = getAccountAndBRRolesForContact($contactId, $accountId);

    return implode(', ', $roles); // TODO: i18n and fiksumpaa!!
}

function getAccountAndBRRolesForContact($contactId, $accountId) {
    global $app_list_strings;

    if (!$contactId || !$accountId) {
        return array();
    }

    $db = $GLOBALS['db'];

    $query = 'SELECT role FROM accounts_contacts ' .
        'WHERE deleted=0 AND contact_id="' . $db->quote($contactId) . '" AND account_id="' . $db->quote($accountId) . '"';

    $result = $db->query($query);

    $accRoles = array();
    if ($row = $db->fetchByAssoc($result)) {
        $rawRoles = unencodeMultienum($row['role']);
        foreach ($rawRoles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_account_role_list'])) {
                $accRoles[] = $app_list_strings['contact_account_role_list'][$role];
            } else {
                $accRoles[] = $role;
            }
        }
    }

    $query = 'SELECT br.name AS br_name, br_rel.role AS role FROM nlfbr_businessrelationships br ' .
        'JOIN nlfbr_businessrelationships_contacts_1_c br_rel ' .
        'ON br_rel.nlfbr_busic409onships_ida=br.id ' .
        'JOIN accounts_nlfbr_businessrelationships_1_c acc_rel ' .
        'ON acc_rel.accounts_n824donships_idb=br.id ' .
        'WHERE br.deleted=0 AND br_rel.deleted=0 AND acc_rel.deleted=0 ' .
        'AND acc_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($accountId) . '" ' .
        'AND br_rel.nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $brRoles = array();
    while ($row = $db->fetchByAssoc($result)) {
        $brRoles[$row['br_name']] = unencodeMultienum($row['role']);
    }

    $allRoles = $accRoles;

    foreach ($brRoles as $brName => $roles) {
        foreach ($roles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_business_relationship_role_list'])) {
                $allRoles[] = $app_list_strings['contact_business_relationship_role_list'][$role] . ' ' . translate('LBL_ROLE_IN_BUSINESSRELATIONSHIP_INFIX') . ': ' . $brName;
            } else {
            $allRoles[] = $role . ' ' . translate('LBL_ROLE_IN_BUSINESSRELATIONSHIP_INFIX') . ': ' . $brName;
            }
        }
    }

    return $allRoles;
}
