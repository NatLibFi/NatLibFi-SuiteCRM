<?php

function getActiveBackEndSystemsHtml($focus, $name, $value, $view) {
    $activeSystems = array();
    $linkedSystems = array();

    $id = $focus->id;
    $moduleName = $focus->module_name;

    if ($view !== 'DetailView') {
        $activeSystems = getAllActiveBackEndSystems();
    }

    if ($id && $moduleName) {
        $linkedSystems = getSelectedBackEndSystems($id, $moduleName);
    }

    $options = array(
        'link' => true,
        'module' => 'nlfbs_BackendSystems',
    );

    return makeHtmlOfMultiEnumOptions($activeSystems, $linkedSystems, $view, $options);
}

function getAllActiveBackEndSystems() {
    $db = $GLOBALS['db'];
    $query = 'SELECT system.id, system.name FROM nlfbs_backendsystems system ' .
        'WHERE system.deleted=0 ' .
        'ORDER BY system.name ASC';
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getSelectedBackEndSystems($id, $moduleName) {
    if ($moduleName === 'Accounts') {
        return getSelectedBackEndSystemsForAccount($id);
    }
 
    if ($moduleName === 'nlfbr_BusinessRelationships') {
        return getSelectedBackEndSystemsForBusinessRelationship($id);
    }

    return array();
}

function getSelectedBackEndSystemsForAccount($id) {
    $db = $GLOBALS['db'];
    $query = 'SELECT system.id, system.name ' .
        'FROM nlfbs_backendsystems system ' .
        'JOIN accounts_nlfbs_backendsystems_1_c rel ' .
        'ON system.id=rel.accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb ' .
        'WHERE rel.accounts_nlfbs_backendsystems_1accounts_ida="' . $db->quote($id) . '" AND ' .
        'system.deleted=0 AND rel.deleted=0 '.
        'ORDER BY system.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}

function getSelectedBackEndSystemsForBusinessRelationship($id) {
    $db = $GLOBALS['db'];
    $query = 'SELECT system.id, system.name ' .
        'FROM nlfbs_backendsystems system ' .
        'JOIN nlfbr_businessrelationships_nlfbs_backendsystems_1_c rel ' .
        'ON system.id=rel.nlfbr_busi06f0systems_idb ' .
        'WHERE rel.nlfbr_busib52fonships_ida="' . $db->quote($id) . '" AND ' .
        'system.deleted=0 AND rel.deleted=0 '.
        'ORDER BY system.name ASC';

    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}



function getBackEndSystemsForAccountSubpanelQueryParts($params) {
    $accountId = $params['account_id'];

    $query = array(
        'select' => 'SELECT nlfbs_backendsystems.*',
        'from' => 'FROM nlfbs_backendsystems',
        'where' => 'WHERE nlfbs_backendsystems.deleted=0 AND br_rel.deleted=0 AND acc_rel.deleted=0 AND acc_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $GLOBALS['db']->quote($accountId) . '"',
        'join' => ' JOIN nlfbr_businessrelationships_nlfbs_backendsystems_1_c br_rel ' .
        'ON br_rel.nlfbr_busi06f0systems_idb=nlfbs_backendsystems.id ' .
        'JOIN accounts_nlfbr_businessrelationships_1_c acc_rel ' .
        'ON acc_rel.accounts_n824donships_idb=br_rel.nlfbr_busib52fonships_ida',
        'join_tables' => '',
    );

    return $query;
}
