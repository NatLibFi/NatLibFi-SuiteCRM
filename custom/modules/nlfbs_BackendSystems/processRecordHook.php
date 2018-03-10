<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfse_Services/nlfse_Services.php';
class BackendSystemProcessRecordHook
{
    const SERVICE_NAMES_FIELD = 'service_names_for_account';

    function setServiceNamesForAccount($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        // Do nothing if this is not fired in the Account DetailView subpanel
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'Accounts') {
            return;
        }
        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'DetailView') {
            return;
        }
        if (!isset($_REQUEST['record']) || $_REQUEST['record'] === '') {
            return;
        }
        //$bean->retrieve(); // Load data from DB, including custom table

        //if (!$bean->load_relationship(self::SERVICE_REL_FIELD)) {
        //    return;
        //}

        //$serviceIds = $bean->{self::SERVICE_REL_FIELD}->get(true);

        $accountId = $_REQUEST['record'];

        $db = $GLOBALS['db'];

        $query = 'SELECT s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AS service_id ' .
            'FROM nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'JOIN nlfbr_businessrelationships_nlfbs_backendsystems_1_c br_rel ' .
            'ON s_rel.nlfse_serva51aonships_idb=br_rel.nlfbr_busib52fonships_ida ' .
            'JOIN accounts_nlfbr_businessrelationships_1_c a_rel ' .
            'ON a_rel.accounts_n824donships_idb=br_rel.nlfbr_busib52fonships_ida ' .
            'WHERE s_rel.deleted=0 AND br_rel.deleted=0 AND a_rel.deleted=0 ' .
            'AND a_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($accountId) . '" ' .
            'AND br_rel.nlfbr_busi06f0systems_idb="' . $db->quote($id) . '"';

        $result = $db->query($query);

        $serviceIds = array();
        while ($row = $db->fetchByAssoc($result) ) {
            $serviceIds[] = $row['service_id'];
        }

        $serviceNames = '';
        foreach ($serviceIds as $serviceId) {
            $service = new nlfse_Services();
            $service->retrieve($serviceId);

            if (!$service) {
                continue;
            }

            if (!$service->name) {
                continue;
            }

            if ($serviceNames !== '') {
                $serviceNames .= ', '; // TODO: i18n this
            }
            $serviceNames .= $service->name;
        }

        $bean->{self::SERVICE_NAMES_FIELD} = $serviceNames;
    }

}
