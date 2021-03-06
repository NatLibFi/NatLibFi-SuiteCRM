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
        $linkedSystems = getSelectedBackEndSystems($focus, $moduleName);
    }

    $options = array(
        'link' => true,
        'module' => 'nlfbs_BackendSystems',
    );

    return makeHtmlOfMultiEnumOptions($activeSystems, $linkedSystems, $view, $options);
}

function getAllActiveBackEndSystems() {
    $db = DBManagerFactory::getInstance();
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

function getSelectedBackEndSystems($bean, $moduleName) {
    if ($moduleName === 'Accounts') {
        return getSelectedBackEndSystemsForAccount($bean->id);
    }
 
    if ($moduleName === 'nlfbr_BusinessRelationships') {
        return getSelectedBackEndSystemsForBusinessRelationship($bean->id);
    }

    if ($moduleName === 'Leads') {
        return getSelectedBackEndSystemsForLead($bean);
    }

    return array();
}

function getSelectedBackEndSystemsForAccount($id) {
    $db = DBManagerFactory::getInstance();
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
    $db = DBManagerFactory::getInstance();
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

function getSelectedBackEndSystemsForLead($bean) {
    if (!$bean->{'account_backend_systems_c'}) {
        return array();
    }

    $systemIds = unencodeMultienum($bean->{'account_backend_systems_c'});
    $allSystems = getAllActiveBackEndSystems();

    $result = array();
    foreach ($systemIds as $id) {
        if (!array_key_exists($id, $allSystems)) {
            continue;
        }
        $result[$id] = $allSystems[$id];
    }
    return $result;
}



function getBackEndSystemsForAccountSubpanelQueryParts($params) {
    $accountId = $params['account_id'];

    $db = DBManagerFactory::getInstance();

    $query = array(
        'select' => 'SELECT nlfbs_backendsystems.*',
        'from' => 'FROM nlfbs_backendsystems',
        'where' => 'WHERE nlfbs_backendsystems.deleted=0 AND br_rel.deleted=0 AND acc_rel.deleted=0 AND acc_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($accountId) . '"',
        'join' => ' JOIN nlfbr_businessrelationships_nlfbs_backendsystems_1_c br_rel ' .
        'ON br_rel.nlfbr_busi06f0systems_idb=nlfbs_backendsystems.id ' .
        'JOIN accounts_nlfbr_businessrelationships_1_c acc_rel ' .
        'ON acc_rel.accounts_n824donships_idb=br_rel.nlfbr_busib52fonships_ida',
        'join_tables' => '',
    );

    return $query;
}


function getBusinessRelationshipForBackendSystemSubpanelQueryParts($params) {
    $systemId = $params['system_id'];

    $db = DBManagerFactory::getInstance();

    $query = array(
        'select' => 'SELECT nlfbr_businessrelationships.*',
        'from' => 'FROM nlfbr_businessrelationships',
        'where' => 'WHERE nlfbr_businessrelationships.deleted=0 AND bs_rel.deleted=0 AND bs_rel.backend_system REGEXP "\\\\^' . $db->quote($systemId) . '\\\\^"',
        'join' => ' JOIN nlfbr_businessrelationships_data_sources bs_rel ' .
            'ON bs_rel.businessrelationship_id=nlfbr_businessrelationships.id',
        'join_tables' => '',
        );

    return $query;
}

function getBackEndSystemsForServiceSubpanelQueryParts($params) {
    $serviceId = $params['service_id'];

    $db = DBManagerFactory::getInstance();

    $query = array(
        'select' => 'SELECT nlfbs_backendsystems.id',
        'from' => 'FROM nlfbs_backendsystems',
        'where' => 'WHERE nlfbs_backendsystems.id IN (' .
            'SELECT nlfbs_backendsystems.id FROM nlfbs_backendsystems ' .
            'JOIN nlfbr_businessrelationships_data_sources br_rel ' .
            'ON br_rel.backend_system REGEXP CONCAT("\\\\^", nlfbs_backendsystems.id, "\\\\^") ' .
            'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'ON s_rel.nlfse_serva51aonships_idb=br_rel.businessrelationship_id ' .
            'WHERE nlfbs_backendsystems.deleted=0 AND br_rel.deleted=0 AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
            ')',
        'join' => '',
        'join_tables' => '',
    );

    return $query;
}

function getServicesForBackendSystemSubpanelQueryParts($params) {
    $systemId = $params['system_id'];

    $db = DBManagerFactory::getInstance();

    $query = array(
        'select' => 'SELECT nlfse_services.*',
        'from' => 'FROM nlfse_services',
        'where' => 'WHERE nlfse_services.id IN (' .
            'SELECT nlfse_services.id FROM nlfse_services ' .
            ' JOIN nlfse_services_nlfbr_businessrelationships_1_c br_rel ' .
            'ON nlfse_services.id=br_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida ' .
            'JOIN nlfbr_businessrelationships_data_sources bs_rel ' .
            'ON bs_rel.businessrelationship_id=br_rel.nlfse_serva51aonships_idb ' .
            'WHERE nlfse_services.deleted=0 AND bs_rel.deleted=0 AND bs_rel.backend_system REGEXP "\\\\^' . $db->quote($systemId) . '\\\\^" AND br_rel.deleted=0 ' .
            ')',
        'join' => '',
        'join_tables' => '',
        );

    return $query;

}

function getContactsForBackendSystemSubpanelQueryParts($params) {
    $systemId = $params['system_id'];

    $db = DBManagerFactory::getInstance();

    $query = array(
        'select' => 'SELECT contacts.*',
        'from' => 'FROM contacts',
        'where' => 'WHERE contacts.id IN (' .
            'SELECT contacts.id FROM contacts ' .
            ' JOIN nlfbr_businessrelationships_contacts_1_c br_rel ' .
            'ON contacts.id=br_rel.nlfbr_businessrelationships_contacts_1contacts_idb ' .
            'JOIN nlfbr_businessrelationships_data_sources bs_rel ' .
            'ON bs_rel.businessrelationship_id=br_rel.nlfbr_busic409onships_ida ' .
            'WHERE contacts.deleted=0 AND bs_rel.deleted=0 AND bs_rel.backend_system REGEXP "\\\\^' . $db->quote($systemId) . '\\\\^" AND br_rel.deleted=0 ' .
            'UNION ' .
            'SELECT contacts.id FROM contacts ' .
            'JOIN accounts_contacts ac ' .
            'ON contacts.id=ac.contact_id ' .
            'JOIN accounts_nlfbs_backendsystems_1_c abs_rel ' .
            'ON ac.account_id=abs_rel.accounts_nlfbs_backendsystems_1accounts_ida ' .
            'WHERE contacts.deleted=0 AND ac.deleted=0 AND abs_rel.deleted=0 AND abs_rel.accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb="' . $db->quote($systemId) . '" ' .
            ')',
        'join' => '',
        'join_tables' => '',
        );

    return $query;

}
