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
