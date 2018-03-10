<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfbr_BusinessRelationships/nlfbr_BusinessRelationships.php';

class AccountAfterSaveHook
{
    const FIELD_ID = 'id';
    const FIELD_ACCOUNT_BUSINESS_RELATIONSHIP_REL = 'accounts_nlfbr_businessrelationships_1';
    const FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL = 'nlfbr_businessrelationships_nlfbs_backendsystems_1';
    const FIELD_ACCOUNT_BACKEND_SYSTEM_REL = 'accounts_nlfbs_backendsystems_1';

    function updateBRBackendSystemData($bean, $event, $arguments)
    {
       $id = $bean->{self::FIELD_ID};

       if (!$bean->load_relationship(self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL)) {
           return;
       }

       $accSystems = $bean->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->get(true);

       if (!$bean->load_relationship(self::FIELD_ACCOUNT_BUSINESS_RELATIONSHIP_REL)) {
           if (isset($GLOBALS['log'])) {
               $GLOBALS['log']->debug('No business relationship related to the account: ' . $bean->id);
           }
           return;
       }

       $brIds = $bean->{self::FIELD_ACCOUNT_BUSINESS_RELATIONSHIP_REL}->get(true);

       $db = $GLOBALS['db'];
       foreach($brIds as $brId) {
          $br = new nlfbr_BusinessRelationships();
          $br->retrieve($brId);
          if (!$br) {
             return;
          }

          $brSystems = getBackendSystemsRelatedToBusinessRelationship($brId);

          foreach ($brSystems as $systemId) {
              if (!in_array($systemId, $accSystems)) {
                  $query = 'DELETE FROM nlfbr_businessrelationships_finna_sources ' .
                    'WHERE businessrelationship_id="' . $db->quote($brId) .'" AND ' .
                    'backend_system REGEXP "\\\\^' . $db->quote($systemId) . '\\\\^"';
                  $db->query($query);
              }
          }
       }
    }


}
