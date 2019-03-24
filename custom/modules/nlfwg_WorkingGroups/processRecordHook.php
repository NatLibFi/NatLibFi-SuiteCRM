<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfse_Services/nlfse_Services.php';
class WorkingGroupProcessRecordHook
{
    const SERVICE_REL_FIELD = 'nlfwg_workinggroups_nlfse_services_1';
    const SERVICE_NAMES_FIELD = 'working_group_service_names';

    function setWorkingGroupServiceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        // Only load data from DB if in Working Group's own view (i.e. not in other module's subpanel)
        if (isset($_REQUEST['module']) && $_REQUEST['module'] === 'nlfwg_WorkingGroups') {
            $bean->retrieve(); // Load data from DB, including custom table
        }

        if (!$bean->load_relationship(self::SERVICE_REL_FIELD)) {
            return;
        }

        $serviceIds = $bean->{self::SERVICE_REL_FIELD}->get(true);

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
