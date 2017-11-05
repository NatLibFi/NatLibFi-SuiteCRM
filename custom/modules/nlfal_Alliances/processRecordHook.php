<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';
class AllianceProcessRecordHook
{
    const LEADER_ID_FIELD = 'kimpan_vetaja_c';
    const LEADER_NAME_FIELD = 'alliance_leader_name';
    const LEADER_ROLE_FIELD = 'alliance_leader_role';

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


}
