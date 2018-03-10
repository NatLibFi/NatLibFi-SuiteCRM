<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*function getBusinessRelationshipRolesForContactSubpanelQueryParts($params) {
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

function getActiveBusinessRelationshipsHtml($focus, $name, $value, $view) {
    $activeBRs = array();
    $linkedBRs = array();

    $id = $focus->id;

    $accountId = null;
    $accountIdField = 'account_id';
    if (isset($focus->$accountIdField)) {
        $accountId = $focus->$accountIdField;
//$GLOBALS['log']->fatal('account id: ' . $accountId);
    }
//else {
//$GLOBALS['log']->fatal('no account id: ');
//}

    if ($view !== 'DetailView') {
        $activeBRs = getAllActiveBusinessRelationships($accountId);
    }

    if ($id) {
        $linkedBRs = getActiveBusinessRelationshipsForRole($id, $accountId);
    }

    return makeHtmlOfEnumOptions($activeBRs, $linkedBRs, $view);
}

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
}*/

/*function getActiveBusinessRelationshipsForRole($id, $accountId = null) {
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
}*/


function getFoo($accountId) {
    $data = array();

    if (empty($accountId)) {
        return $data;
    }

    $data = getAllActiveBusinessRelationships($accountId);

    return $data;
}

if (empty($_REQUEST['account_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'records' => getAllActiveBusinessRelationships($_REQUEST['account_id']),
    ));
}
