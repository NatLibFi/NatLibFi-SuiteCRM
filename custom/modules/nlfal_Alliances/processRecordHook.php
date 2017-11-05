<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';
require_once 'modules/nlfse_Services/nlfse_Services.php';
class AllianceProcessRecordHook
{
    const LEADER_ID_FIELD = 'kimpan_vetaja_c';
    const LEADER_NAME_FIELD = 'alliance_leader_name';
    const LEADER_ROLE_FIELD = 'alliance_leader_role';
    const SERVICE_REL_FIELD = 'nlfal_alliances_nlfse_services_1';
    const SERVICE_NAMES_FIELD = 'alliance_service_names';

    function setAllianceLeaderName($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $bean->retrieve(); // Load data from DB, including custom table

        $accountId = $bean->{self::LEADER_ID_FIELD};
        if (!$accountId) {
            // TODO: this is only for case there no leader for whatever reason
            $bean->{self::LEADER_ROLE_FIELD} = translate('LBL_ALLIANCE_ORGANISATION_ROLE_MEMBER');
            return;
        }

        $accountBean = new Account();
        $accountBean->retrieve($accountId);

        if (!$accountBean) {
            return;
        }

        $bean->{self::LEADER_NAME_FIELD} = $accountBean->name;

        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'Accounts') {
            return;
        }
        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'DetailView') {
            return;
        }
        if (!isset($_REQUEST['record'])) {
            return;
        }
        // We are in the subpanel in Accounts View.
        if ($accountId === $_REQUEST['record']) {
            $bean->{self::LEADER_ROLE_FIELD} = translate('LBL_ALLIANCE_ORGANISATION_ROLE_LEADER');
        } else {
            $bean->{self::LEADER_ROLE_FIELD} = translate('LBL_ALLIANCE_ORGANISATION_ROLE_MEMBER');
        }
    }

    function setAllianceMemberCount($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $bean->member_count = geMemberCountForAlliance($id);
    }

    function setAllianceServiceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

    //    $bean->retrieve(); // Load data from DB, including custom table

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
