<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfse_Services/nlfse_Services.php';
class AccountProcessRecordHook
{
    const SERVICE_REL_FIELD = 'nlfwg_workinggroups_nlfse_services_1';
    const SERVICE_NAMES_FIELD = 'account_service_names';

    function setAccountServiceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        //$bean->retrieve(); // Load data from DB, including custom table

        //if (!$bean->load_relationship(self::SERVICE_REL_FIELD)) {
        //    return;
        //}

        //$serviceIds = $bean->{self::SERVICE_REL_FIELD}->get(true);

        $db = $GLOBALS['db'];

        $query = 'SELECT s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AS service_id ' .
            'FROM nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'JOIN accounts_nlfbr_businessrelationships_1_c a_rel ' .
            'ON s_rel.nlfse_serva51aonships_idb=a_rel.accounts_n824donships_idb ' .
            'WHERE s_rel.deleted=0 AND a_rel.deleted=0 AND a_rel.accounts_nlfbr_businessrelationships_1accounts_ida="' . $db->quote($id) . '"';

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
