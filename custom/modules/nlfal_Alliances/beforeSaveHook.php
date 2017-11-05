<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AllianceBeforeSaveHook
{
    const FIELD_MEMBER_RELATIONSHIP = 'nlfal_alliances_accounts_1';
    const FIELD_LEADER_ID = 'kimpan_vetaja_c';

    function addLeaderAsMember($bean, $event, $arguments)
    {
        $leaderId = $bean->{self::FIELD_LEADER_ID};
        if (!$leaderId) {
            return;
        }

        if (!$bean->load_relationship(self::FIELD_MEMBER_RELATIONSHIP)) {
            return;
        }

        $memberIds = $bean->{self::FIELD_MEMBER_RELATIONSHIP}->get(true);

        if (!in_array($leaderId, $memberIds)) {
            $bean->{self::FIELD_MEMBER_RELATIONSHIP}->add($leaderId, array());
        }
    }

}
