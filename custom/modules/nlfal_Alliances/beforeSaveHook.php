<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';

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

    function setAllianceName($bean, $event, $arguments)
    {
        $bean->name = $bean->name_fin_c;

        if ($bean->name_default_lang_c === 'swe') {
            $bean->name = $bean->name_swe_c;
        } elseif ($bean->name_default_lang_c === 'eng') {
            $bean->name = $bean->name_eng_c;
        } elseif ($bean->name_default_lang_c === 'other') {
            $bean->name = $bean->name_other_c;
        }
    }

    const FIELD_INDUSTRY = 'sektorit_c';

    function addMemberIndustryData($bean, $event, $arguments)
    {
        if (!$bean->load_relationship(self::FIELD_MEMBER_RELATIONSHIP)) {
            return;
        }

        $allianceIndustryList = unencodeMultienum($bean->{self::FIELD_INDUSTRY});

        $memberIds = $bean->{self::FIELD_MEMBER_RELATIONSHIP}->get(true);
        foreach ($memberIds as $accountId) {
            $account = new Account();
            $account->retrieve($accountId);
            if (!$account) {
                continue;
            }

            if (!$account->industry) {
                continue;
            }

            if (!in_array($account->industry, $allianceIndustryList)) {
                $allianceIndustryList[] = $account->industry;
            }
        }

        $bean->{self::FIELD_INDUSTRY} = encodeMultienumValue($allianceIndustryList);
    }

}
