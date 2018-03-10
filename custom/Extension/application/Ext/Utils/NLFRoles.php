<?php

function getAccountRolesForContactSubpanelQueryParts($params) {
    $contactId = $params['contact_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE contacts.id="' . $contactId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN accounts_nlfro_roles_1_c acc_role_rel ON ' .
            'acc_role_rel.accounts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND acc_role_rel.deleted=0 ' .
            'JOIN contacts ON contacts.id=contact_role_rel.contacts_nlfro_roles_1contacts_ida AND contacts.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}

function getAccountRolesForAccountSubpanelQueryParts($params) {
    $accountId = $params['account_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE accounts.id="' . $accountId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN accounts_nlfro_roles_1_c acc_role_rel ON ' .
            'acc_role_rel.accounts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND acc_role_rel.deleted=0 ' .
            'JOIN accounts ON accounts.id=acc_role_rel.accounts_nlfro_roles_1accounts_ida AND accounts.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}


function getActiveAccountsHtml($focus, $name, $value, $view) {
    $activeAccounts = array();
    $linkedAccounts = array();

    //$id = $focus->id;

    if ($view !== 'DetailView') {
        $activeAccounts = getAllActiveAccounts();
    }

    /*if ($id) {
        $linkedAccounts = getActiveAccountsForRole($id);
    }*/
    $accountId = getAccountIdForRoleQuickCreate($_REQUEST);
    if ($accountId !== null) {
        $linkedAccounts = array($accountId => '');
    }

/*$contactId = getContactIdForRoleQuickCreate($_REQUEST);
    $accountId = null;

    if ($contactId !== null) {
        $accountId = getAccountIdForContact($contactId);
    }
if ($accountId !== null) {
$linkedAccounts = array($accountId => '');
}*/

    return makeHtmlOfEnumOptions($activeAccounts, $linkedAccounts, $view);
}

function getAllActiveAccounts() {
    $db = $GLOBALS['db'];
    $query = 'SELECT acc.id, acc.name FROM accounts acc ' .
        'WHERE acc.deleted=0 ' .
        'ORDER BY acc.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getActiveAccountsForRole($id) {
    $db = $GLOBALS['db'];
    $query = 'SELECT acc.id, acc.name ' .
        'FROM accounts acc ' .
        'JOIN accounts_nlfro_roles_1_c rel ' .
        'ON acc.id=rel.accounts_nlfro_roles_1accounts_ida ' .
        'WHERE rel.accounts_nlfro_roles_1nlfro_roles_idb="' . $db->quote($id) . '" AND ' .
        'acc.deleted=0 AND rel.deleted=0 '.
        'ORDER BY acc.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}



function getWorkingGroupRolesForContactSubpanelQueryParts($params) {
    $contactId = $params['contact_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE contacts.id="' . $contactId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfwg_workinggroups_nlfro_roles_1_c wg_role_rel ON ' .
            'wg_role_rel.nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND wg_role_rel.deleted=0 ' .
            'JOIN contacts ON contacts.id=contact_role_rel.contacts_nlfro_roles_1contacts_ida AND contacts.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}

function getWorkingGroupRolesForWorkingGroupSubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE groups.id="' . $groupId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfwg_workinggroups_nlfro_roles_1_c wg_role_rel ON ' .
            'wg_role_rel.nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND wg_role_rel.deleted=0 ' .
            'JOIN nlfwg_workinggroups groups ON groups.id=wg_role_rel.nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida AND groups.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}


function getActiveWorkingGroupsHtml($focus, $name, $value, $view) {
    $activeGroups = array();
    $linkedGroups = array();

    $id = $focus->id;

    /*$serviceId = null;
    $serviceIdField = 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida';
    if (isset($focus->$serviceIdField)) {
        $serviceId = $focus->$serviceIdField;
    }*/

    if ($view !== 'DetailView') {
        $activeGroups = getAllActiveWorkingGroups(/*$serviceId*/);
    }

    if ($id) {
        $linkedGroups = getActiveWorkingGroupsForRole($id/*, $serviceId*/);
    }

    return makeHtmlOfEnumOptions($activeGroups, $linkedGroups, $view);
}

function getAllActiveWorkingGroups(/*$serviceId = null*/) {
    $db = $GLOBALS['db'];
    /*$serviceJoin = '';
    $serviceWhere = '';
    if ($serviceId !== null) {
        $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
            'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
        $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
            'AND rel_services.deleted=0 ';
    }*/
    $query = 'SELECT gr.id, gr.name FROM nlfwg_workinggroups gr ' .
        //$serviceJoin .
        'WHERE gr.deleted=0 ' .
        //$serviceWhere .
        'ORDER BY gr.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getActiveWorkingGroupsForRole($id/*, $serviceId = null*/) {
    $db = $GLOBALS['db'];
    /*$serviceJoin = '';
    $serviceWhere = '';
    if ($serviceId !== null) {
        $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
            'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
        $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
            'AND rel_services.deleted=0 ';
    }*/
    $query = 'SELECT gr.id, gr.name ' .
        'FROM nlfwg_workinggroups gr ' .
        'JOIN nlfwg_workinggroups_nlfro_roles_1_c rel ' .
        'ON gr.id=rel.nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida ' .
        //$serviceJoin .
        'WHERE rel.nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb="' . $db->quote($id) . '" AND ' .
        'gr.deleted=0 AND rel.deleted=0 '.
        //$serviceWhere .
        'ORDER BY gr.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}


function getBusinessRelationshipRolesForContactSubpanelQueryParts($params) {
    $contactId = $params['contact_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE contacts.id="' . $contactId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfbr_businessrelationships_nlfro_roles_1_c br_role_rel ON ' .
            'br_role_rel.nlfbr_businessrelationships_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND br_role_rel.deleted=0 ' .
            'JOIN contacts ON contacts.id=contact_role_rel.contacts_nlfro_roles_1contacts_ida AND contacts.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}

function getBusinessRelationshipRolesForBusinessRelationshipSubpanelQueryParts($params) {
    $brId = $params['br_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE br.id="' . $brId . '"',
        'join' => //JOIN nlfro_roles_cstm ON nlfro_roles_cstm.id_c=roles.id ' .
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfbr_businessrelationships_nlfro_roles_1_c br_role_rel ON ' .
            'br_role_rel.nlfbr_businessrelationships_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND br_role_rel.deleted=0 ' .
            'JOIN nlfbr_businessrelationships br ON br.id=br_role_rel.nlfbr_busi78f6onships_ida AND br.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}

// TODO: no longer needed?
function getActiveBusinessRelationshipsHtml($focus, $name, $value, $view) {
    $activeBRs = array();

    $accountId = getAccountIdForRoleQuickCreate($_REQUEST);

    if ($view !== 'DetailView') {
        $activeBRs = getAllActiveBusinessRelationships($accountId);
    }

    return makeHtmlOfEnumOptions($activeBRs, array(), $view);
}

// TODO: make accountId non nullable?
// TODO: can be moved to ajax action file?
function getAllActiveBusinessRelationships($accountId = null) {
    $db = $GLOBALS['db'];
    $accountJoin = '';
    $accountWhere = '';
    if ($accountId !== null) {
        $accountJoin = 'JOIN accounts_nlfbr_businessrelationships_1_c rel_accounts ' .
            'ON br.id=rel_accounts.accounts_n824donships_idb ';
        $accountWhere = 'AND rel_accounts.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($accountId) . '" ' .
            'AND rel_accounts.deleted=0 ';
    }
    $query = 'SELECT br.id, br.name FROM nlfbr_businessrelationships br ' .
        $accountJoin .
        'WHERE br.deleted=0 ' .
        $accountWhere .
        'ORDER BY br.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

// TODO: this no longer needed?
function getActiveBusinessRelationshipsForRole($id, $accountId = null) {
    $db = $GLOBALS['db'];
    $accountJoin = '';
    $accountWhere = '';
    if ($accountId !== null) {
        $accountJoin = 'JOIN accounts_nlfbr_businessrelationships_1_c rel_accounts ' .
            'ON br.id=rel_accounts.accounts_n824donships_idb ';
        $accountWhere = 'AND rel_accounts.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($accountId) . '" ' .
            'AND rel_accounts.deleted=0 ';
    }
    $query = 'SELECT br.id, br.name ' .
        'FROM nlfbr_businessrelationships br ' .
        'JOIN nlfbr_businessrelationships_nlfro_roles_1_c rel ' .
        'ON br.id=rel.nlfbr_busi78f6onships_ida ' .
        $accountJoin .
        'WHERE rel.nlfbr_businessrelationships_nlfro_roles_1nlfro_roles_idb="' . $db->quote($id) . '" AND ' .
        'br.deleted=0 AND rel.deleted=0 '.
        $accountWhere .
        'ORDER BY br.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getDefaultBusinessRelationshipContactsHtml($focus, $name, $value, $view) {
    return makeHtmlOfEnumOptions(
        array( '' => translate('LBL_CONTACT_ROLE_BUSINESS_RELATIONSHIP_SELECT_ACCOUNT', 'nlfro_Roles') ),
        array(),
        $view
    );
}

function getAllActiveAccountsInBusinessRelationshipsHtml($focus, $name, $value, $view) {
/*    $contactId = getContactIdForRoleQuickCreate($_REQUEST);
    $accountId = null;

    if ($contactId !== null) {
        $accountId = getAccountIdForContact($contactId);
    }*/
    $accountId = getAccountIdForRoleQuickCreate($_REQUEST);

    //$options = getAllActiveAccountsInBusinessRelationships();
    $options = getAllActiveAccounts();
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


function getAllActiveAccountsInBusinessRelationships() {
    $db = $GLOBALS['db'];
    $query = 'SELECT acc.id, acc.name FROM accounts acc ' .
        'WHERE acc.deleted=0 ' .
        'AND EXISTS(' .
        'SELECT * FROM accounts_nlfbr_businessrelationships_1_c rel ' .
        'WHERE rel.accounts_nlfbr_businessrelationships_1accounts_ida=acc.id AND rel.deleted=0 ' .
        ') ' .
        'ORDER BY acc.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getContactIdForRoleQuickCreate($requestData) {
    if (!isset($requestData['module']) || $requestData['module'] !== 'Contacts') {
        return null;
    }
    if (!isset($requestData['action']) || $requestData['action'] !== 'DetailView') {
        return null;
    }
    if (!isset($requestData['forQuickCreate']) || !$requestData['forQuickCreate']) {
        return null;
    }
    if (!isset($requestData['record']) || !$requestData['record']) {
        return null;
    }

    return $requestData['record'];
}

function getAccountIdForContact($contactId) {
    require('include/modules.php');

    $contactBeanName = $beanList['Contacts'];
    require_once($beanFiles[$contactBeanName]);
    $contact = new $contactBeanName();
    $contact->retrieve($contactId);

    if (isset($contact->account_id)) {
        return $contact->account_id;
    }

    return null;
}

function getAccountIdForRoleQuickCreate($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'nlfro_Roles') {
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




function getAllianceRolesForContactSubpanelQueryParts($params) {
    $contactId = $params['contact_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE contacts.id="' . $contactId . '"',
        'join' =>
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfal_alliances_nlfro_roles_1_c all_role_rel ON ' .
            'all_role_rel.nlfal_alliances_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND all_role_rel.deleted=0 ' .
            'JOIN contacts ON contacts.id=contact_role_rel.contacts_nlfro_roles_1contacts_ida AND contacts.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}

function getAllianceRolesForAllianceSubpanelQueryParts($params) {
    $allianceId = $params['alliance_id'];
    
    $query = array(
        'select' => 'SELECT roles.*',
        'from' => 'FROM nlfro_roles',
        'where' => 'WHERE alliance.id="' . $allianceId . '"',
        'join' =>
            ' JOIN contacts_nlfro_roles_1_c contact_role_rel ON ' .
            'contact_role_rel.contacts_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND contact_role_rel.deleted=0 ' .
            'JOIN nlfal_alliances_nlfro_roles_1_c all_role_rel ON ' .
            'all_role_rel.nlfal_alliances_nlfro_roles_1nlfro_roles_idb=nlfro_roles.id AND all_role_rel.deleted=0 ' .
            'JOIN nlfal_alliances alliance ON alliance.id=all_role_rel.nlfal_alliances_nlfro_roles_1nlfal_alliances_ida AND alliance.deleted=0',
        'join_tables' => '',
    );
    
    return $query;
}


function getActiveAlliancesHtml($focus, $name, $value, $view) {
    $activeAlliances = array();
    $linkedAlliances = array();

    $id = $focus->id;

    if ($view !== 'DetailView') {
        $activeAlliances = getAllActiveAlliances();
    }

    if ($id) {
        $linkedAlliances = getActiveAlliancesForRole($id);
    }

    return makeHtmlOfEnumOptions($activeAlliances, $linkedAlliances, $view);
}

function getAllActiveAlliances() {
    $db = $GLOBALS['db'];
    $query = 'SELECT al.id, al.name FROM nlfal_alliances al ' .
        'WHERE al.deleted=0 ' .
        'ORDER BY al.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getActiveAlliancesForRole($id) {
    $db = $GLOBALS['db'];
    $query = 'SELECT al.id, al.name ' .
        'FROM nlfal_alliances al ' .
        'JOIN nlfal_alliances_nlfro_roles_1_c rel ' .
        'ON al.id=rel.nlfal_alliances_nlfro_roles_1nlfal_alliances_ida ' .
        'WHERE rel.nlfal_alliances_nlfro_roles_1nlfro_roles_idb="' . $db->quote($id) . '" AND ' .
        'al.deleted=0 AND rel.deleted=0 '.
        'ORDER BY al.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}








function getAllContactRoles()
{
    global $app_list_strings, $app_strings;

    return array_merge(
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_WORKING_GROUP'] . ')'; },
            $app_list_strings['contact_working_group_role_list']
        ),
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_ACCOUNT'] . ')'; },
            $app_list_strings['contact_account_role_list']
        ),
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_ALLIANCE'] . ')'; },
            $app_list_strings['contact_alliance_role_list']
        ),
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_BUSINESS_RELATIONSHIP'] . ')'; },
            $app_list_strings['contact_business_relationship_role_list']
        )
    );
}
