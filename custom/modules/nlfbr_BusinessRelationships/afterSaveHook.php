<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';
require_once 'modules/nlfal_Alliances/nlfal_Alliances.php';

class BusinessRelationshipAfterSaveHook
{
    const FIELD_ID = 'id';
    const FIELD_ACCOUNT_ID = 'accounts_nlfbr_businessrelationships_1accounts_ida';
    const FIELD_SERVICE_ID = 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida';
    const FIELD_ACCOUNT_CONTRACT_REL = 'accounts_aos_contracts_1';
    const FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL = 'nlfbr_businessrelationships_nlfbs_backendsystems_1';
    const FIELD_ACCOUNT_BACKEND_SYSTEM_REL = 'accounts_nlfbs_backendsystems_1';

    function updateAccountContractData($bean, $event, $arguments)
    {
       $id = $bean->{self::FIELD_ID};

       $serviceId = $bean->{self::FIELD_SERVICE_ID};
       if (!isset($serviceId)) {
           return;
       }

       $contracts = getActiveContractsForBusinessRelationship($id, $serviceId);
       $contractIds = array_keys($contracts);

       $accountId = $bean->{self::FIELD_ACCOUNT_ID};
       $account = new Account();
       $account->retrieve($accountId);
       if ($account === null) {
           if (isset($GLOBALS['log'])) {
               $GLOBALS['log']->debug('No account related to business relationship: ' . $bean->id);
           }
           return;
       }

       if (!$account->load_relationship(self::FIELD_ACCOUNT_CONTRACT_REL)) {
           return;
       }

       $oldContracts = $account->{self::FIELD_ACCOUNT_CONTRACT_REL}->get(true);

       foreach ($contractIds as $id) {
           $account->{self::FIELD_ACCOUNT_CONTRACT_REL}->add($id, array());
       }

       foreach ($oldContracts as $id) {
           if (!in_array($id, $contractIds)) {
               $account->{self::FIELD_ACCOUNT_CONTRACT_REL}->delete($account, $id);
           }
       }

    }

    function updateAccountBackendSystemData($bean, $event, $arguments)
    {
       $id = $bean->{self::FIELD_ID};

       if (!$bean->load_relationship(self::FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL)) {
           return;
       }

       $brSystems = $bean->{self::FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL}->get(true);

       if (empty($brSystems)) {
           return;
       }

       $accountId = $bean->{self::FIELD_ACCOUNT_ID};
       $account = new Account();
       $account->retrieve($accountId);
       if ($account === null) {
           if (isset($GLOBALS['log'])) {
               $GLOBALS['log']->debug('No account related to business relationship: ' . $bean->id);
           }
           return;
       }

       if (!$account->load_relationship(self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL)) {
           return;
       }

       $accountSystems = $account->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->get(true);

       foreach ($brSystems as $systemId) {
           if (!in_array($systemId, $accountSystems)) {
               $account->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->add($systemId, array());
           }
       }

    }

    const FIELD_ACCOUNT_ALLIANCE = 'nlfbr_businessrelationships_account_alliances';

    function updateAccountAllianceData($bean, $event, $arguments)
    {
        $accountId = $bean->{self::FIELD_ACCOUNT_ID};
        if (!isset($accountId)) {
            return;
        }

        $allianceIds = $bean->{self::FIELD_ACCOUNT_ALLIANCE};
        if (!$allianceIds) {
            return;
       }

        $allianceIds = unencodeMultienum($allianceIds);

        $account = new Account();
        $account->retrieve($accountId);
        if ($account === null) {
            return;
        }

        $accountAllianceRelField = 'nlfal_alliances_accounts_1';
        if (!$account->load_relationship($accountAllianceRelField)) {
            return;
        }

        $alliances = $account->{$accountAllianceRelField}->get(true);

        foreach ($allianceIds as $allianceId) {
            if (!in_array($allianceId, $alliances)) {
                $account->{$accountAllianceRelField}->add($allianceId, array());
            }
        }
        
    }

}
