<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfal_Alliances/nlfal_Alliances.php';
require_once 'modules/nlfse_Services/nlfse_Services.php';
require_once 'modules/nlfbs_BackendSystems/nlfbs_BackendSystems.php';

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
        $serviceIds = array_unique($serviceIds);

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

    const FIELD_ACCOUNT_BACKEND_SYSTEM_REL = 'accounts_nlfbs_backendsystems_1';
    const FIELD_BACKEND_SYSTEM_NAMES = 'account_backend_system_names';

    function setAccountBackendSystemNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        if (!$bean->load_relationship(self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL)) {
            return;
        }

        $systemIds = $bean->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->get(true);

        $systemNames = '';
        foreach ($systemIds as $systemId) {
            $system = new nlfbs_BackendSystems();
            $system->retrieve($systemId);

            if (!$system) {
                continue;
            }

            if (!$system->name) {
                continue;
            }

            if ($systemNames !== '') {
                $systemNames .= ', '; // TODO: i18n this
            }
            $systemNames .= $system->name;
        }

        $bean->{self::FIELD_BACKEND_SYSTEM_NAMES} = $systemNames;
    }

    const FIELD_ACCOUNT_ALLIANCE_REL = 'nlfal_alliances_accounts_1';
    const FIELD_ALLIANCE_NAMES = 'account_alliance_names';

    function setAccountAllianceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        if (!$bean->load_relationship(self::FIELD_ACCOUNT_ALLIANCE_REL)) {
            return;
        }

        $allianceIds = $bean->{self::FIELD_ACCOUNT_ALLIANCE_REL}->get(true);

        $allianceNames = '';
        foreach ($allianceIds as $allianceId) {
            $alliance = new nlfal_Alliances();
            $alliance->retrieve($allianceId);

            if (!$alliance) {
                continue;
            }

            if (!$alliance->name) {
                continue;
            }

            if ($allianceNames !== '') {
                $allianceNames .= ', '; // TODO: i18n this
            }
            $allianceNames .= $alliance->name;

        }

        $bean->{self::FIELD_ALLIANCE_NAMES} = $allianceNames;
    }

}
