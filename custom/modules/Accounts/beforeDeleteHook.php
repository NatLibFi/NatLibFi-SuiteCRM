<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfbr_BusinessRelationships/nlfbr_BusinessRelationships.php';

class AccountBeforeDeleteHook
{

    const FIELD_ID = 'id';
    const FIELD_BUSINESS_RELATIONSHIP_REL = 'accounts_nlfbr_businessrelationships_1';

    public function deleteBusinessRelationships($bean, $event, $arguments)
    {
        $id = $bean->{self::FIELD_ID};

        if (!$bean->load_relationship(self::FIELD_BUSINESS_RELATIONSHIP_REL)) {
            if (isset($GLOBALS['log'])) {
                $GLOBALS['log']->debug('No business relationship related to the account: ' . $bean->id);
            }
            return;
        }

        $brIds = $bean->{self::FIELD_BUSINESS_RELATIONSHIP_REL}->get(true);

        foreach($brIds as $brId) {
            $br = new nlfbr_BusinessRelationships();
            $br->retrieve($brId);
            if (!$br) {
                continue;
            }

            $br->mark_deleted($brId);
        }
    }

}
