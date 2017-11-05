<?php

function getAccountAlliances($focus, $name, $value, $view) {
    $accountId = null;

    $accountIdField = 'accounts_nlfbr_businessrelationships_1accounts_ida';
    if (isset($focus->$accountIdField)) {
        $accountId = $focus->$accountIdField;
    }

    return getAlliancesForAccount($accountId);
}

function getAlliancesForAccount($accountId) {
    $db = $GLOBALS['db'];
    $accountJoin = '';
    $accountWhere = '';
    if ($accountId !== null) {
        $accountJoin = 'JOIN nlfal_alliances_accounts_1_c acc_all ' .
            'ON alliance.id=acc_all.nlfal_alliances_accounts_1nlfal_alliances_ida ';
        $accountWhere = 'AND acc_all.nlfal_alliances_accounts_1accounts_idb="' . $db->quote($accountId) . '" ' .
            'AND acc_all.deleted=0 ';
    }

    $query = 'SELECT alliance.id, alliance.name ' .
        'FROM nlfal_alliances alliance ' .
        $accountJoin .
        'WHERE alliance.deleted=0 ' .
        $accountWhere .
        'ORDER BY alliance.name ASC';

    $result = $db->query($query);

    // No alliances associated to the given account, display all existing alliances so that user has something to choose from
    if ($accountId !== null && $db->getRowCount($result) === 0) {
        return getAlliancesForAccount(null);
    }

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}




function getActiveContractsHtml($focus, $name, $value, $view) {
    $activeContracts = array();
    $linkedContracts = array();

    $id = $focus->id;

    $serviceId = null;
    $serviceIdField = 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida';
    if (isset($focus->$serviceIdField)) {
        $serviceId = $focus->$serviceIdField;
    }

    if ($view !== 'DetailView') {
        $activeContracts = getAllActiveContracts($serviceId);
    }

    if ($id) {
        $linkedContracts = getActiveContractsForBusinessRelationship($id, $serviceId);
    }

    return makeHtmlOfMultiEnumOptions($activeContracts, $linkedContracts, $view);
}

function getAllActiveContracts($serviceId = null) {
    $db = $GLOBALS['db'];
    $serviceJoin = '';
    $serviceWhere = '';
    if ($serviceId !== null) {
        $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
            'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
        $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
            'AND rel_services.deleted=0 ';
    }
    $query = 'SELECT contract.id, contract.name FROM aos_contracts contract ' .
        $serviceJoin .
        'WHERE contract.deleted=0 AND contract.status!="paattynyt" ' .
        $serviceWhere .
        'ORDER BY contract.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getActiveContractsForBusinessRelationship($id, $serviceId = null) {
    $db = $GLOBALS['db'];
    $serviceJoin = '';
    $serviceWhere = '';
    if ($serviceId !== null) {
        $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
            'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
        $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
            'AND rel_services.deleted=0 ';
    }
    $query = 'SELECT contract.id, contract.name ' .
        'FROM aos_contracts contract ' .
        'JOIN nlfbr_businessrelationships_aos_contracts_1_c rel ' .
        'ON contract.id=rel.nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb ' .
        $serviceJoin .
        'WHERE rel.nlfbr_busi9351onships_ida="' . $db->quote($id) . '" AND ' .
        'contract.deleted=0 AND contract.status!="paattynyt" AND rel.deleted=0 '.
        $serviceWhere .
        'ORDER BY contract.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

// Roles

function getAllActiveAccountsInBusinessRelationshipsHtml2($focus, $name, $value, $view) {
    $accountId = getAccountIdForAddRoleForm($_REQUEST);

    $options = getAllActiveAccounts(); // TODO: move here from NLFRoles utls
    $selectedOptions = array();

    if ($accountId === null) {
        $options[''] = translate('LBL_CONTACT_ROLE_SELECT_ACCOUNT', 'nlfro_Roles');
    }

    if ($accountId !== null) {
        $selectedOptions = array($accountId => '');
    }

    return makeHtmlOfEnumOptions(
        $options,
        $selectedOptions,
        $view
    );
}

function getActiveBusinessRelationshipsHtml2($focus, $name, $value, $view) {
    $activeBRs = array();

    $accountId = getAccountIdForAddRoleForm($_REQUEST);

    if ($view !== 'DetailView') {
        if (!$accountId) {
            $allAccounts = getAllActiveAccounts();
            $accountId = reset(array_keys($allAccounts));
        }
        $activeBRs = getAllActiveBusinessRelationships($accountId); // // TODO: move here from NLFRoles utils
    }

    return makeHtmlOfEnumOptions($activeBRs, array(), $view);
}

function getBusinessRelationshipRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedRoles = array();

    $brId = null;

    $accountId = getAccountIdForAddRoleForm($_REQUEST);
    if ($view !== 'DetailView') {
        $activeBRs = getAllActiveBusinessRelationships($accountId); // // TODO: move here from NLFRoles utils
        if (!empty($activeBRs)) {
            $brId = reset(array_keys($activeBRs));
        }
    }

    if ($brId !== null) { 
        $contactId = getContactIdForAddRoleForm($_REQUEST);
        if ($contactId !== null) {
            $selectedRoles = getBusinessRelationshipRolesForContact($contactId, $brId);
        }
    }

    return makeHtmlOfEnumOptions($app_list_strings['contact_business_relationship_role_list'], $selectedRoles, $view);
}

function getBusinessRelationshipRolesForContact($contactId = null, $brId = null) {
    if ($contactId === null) {
        return array();
    }

    if ($brId === null) {
        return array();
    }

    $roles = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT roles.role FROM nlfbr_businessrelationships_contacts_1_c roles ' .
        'WHERE roles.deleted=0 AND ' .
        'roles.nlfbr_busic409onships_ida="' . $db->quote($brId) . '" AND ' .
        'roles.nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $roles = unencodeMultienum($row['role']);
        $roles = array_flip($roles); // Could also do array_flip($roles) probably
    }

    return $roles;
}

function getAccountIdForAddRoleForm($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'nlfbr_BusinessRelationships') {
        return null;
    }
    if (!isset($requestData['return_module']) || $requestData['return_module'] !== 'Contacts') {
        return null;
    }
    if (!isset($requestData['target_action']) || $requestData['target_action'] !== 'QuickCreate') {
        return null;
    }
    if (!isset($requestData['account_id']) || empty($requestData['account_id'])) {
        return null;
    }

    return $requestData['account_id'];
}

function getContactIdForAddRoleForm($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'nlfbr_BusinessRelationships') {
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
