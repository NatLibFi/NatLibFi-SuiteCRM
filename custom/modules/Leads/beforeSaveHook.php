<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/SugarEmailAddress/SugarEmailAddress.php';

class LeadBeforeSaveHook
{
    function saveAccountEmailAddresses($bean, $event, $arguments)
    {
        if (!isset($_REQUEST['action'])) {
            return;
        }

        if ($_REQUEST['action'] !== 'Save') {
            return;
        }

        if (!$bean->id) {
            return;
        }

        $emailAddress = new SugarEmailAddress();
        $emailAddress->saveEmail($bean->id, 'LeadAccount');
    }

    function createBusinessRelationship($bean, $event, $arguments)
    {
        if (!isset($_REQUEST['action'])) {
            return;
        }

        if ($_REQUEST['action'] !== 'ConvertLead') {
            return;
        }

        if ($bean->status !== 'Converted') {
            return;
        }

        $contactId = $bean->{'contact_id'};
        $accountId = $bean->{'account_id'};
        $serviceId = $bean->{'nlfse_services_leads_1nlfse_services_ida'};
        if (!$contactId || !$accountId || !$serviceId) {
            return;
        }

        require('include/modules.php');

        $accountBeanName = $beanList['Accounts'];
        require_once($beanFiles[$accountBeanName]);
        $account = new $accountBeanName();
        $account->retrieve($accountId);
        // TODO: check if exists and stop if not?

        if ($_REQUEST['newAccounts'] === 'yes') {
            $this->setAccountData($account, $bean, $_REQUEST);
        }

        $serviceBeanName = $beanList['nlfse_Services'];
        require_once($beanFiles[$serviceBeanName]);
        $service = new $serviceBeanName();
        $service->retrieve($serviceId);
        // TODO: check if exists and stop if not?

        $brBeanName = $beanList['nlfbr_BusinessRelationships'];
        require_once($beanFiles[$brBeanName]);

        $brBean = new $brBeanName();

        $brBean->{'accounts_nlfbr_businessrelationships_1_name'} = $account->name;
        $brBean->{'nlfse_services_nlfbr_businessrelationships_1_name'} = $service->name;

        $brBean->{'description'} = $bean->{'description'};
        $brBean->{'commercial'} = $bean->{'commercial_c'};
        $brBean->{'maksullisen_lisatiedot2_c'} = $bean->{'commercial_description_c'};

        $brBean->save();

        $brId = $brBean->{'id'};

        if (!$account->load_relationship('accounts_nlfbr_businessrelationships_1')) {
            return;
        }
        if (!$service->load_relationship('nlfse_services_nlfbr_businessrelationships_1')) {
            return;
        }

        $account->{'accounts_nlfbr_businessrelationships_1'}->get(true);
        $service->{'nlfse_services_nlfbr_businessrelationships_1'}->get(true);

        $account->{'accounts_nlfbr_businessrelationships_1'}->add($brId, array());
        $service->{'nlfse_services_nlfbr_businessrelationships_1'}->add($brId, array());

        $account->save();
        $service->save();

        $contactBeanName = $beanList['Contacts'];
        require_once($beanFiles[$contactBeanName]);
        $contact = new $contactBeanName();
        $contact->retrieve($contactId);
        // TODO: check if exists and stop if not?

        if (!$brBean->load_relationship('nlfbr_businessrelationships_contacts_1')) {
             return;
        }

        $brBean->{'nlfbr_businessrelationships_contacts_1'}->get(true);

        $brBean->{'nlfbr_businessrelationships_contacts_1'}->add($contactId, array('role' => encodeMultienumValue(array('br_yhteyshenkilo'))));

        $brAlliances = '';
        if (isset($_REQUEST['Accountsalliances_c']) && $_REQUEST['Accountsalliances_c']) {
            $brAlliances = encodeMultienumValue($_REQUEST['Accountsalliances_c']);
        }
        $brBean->{'nlfbr_businessrelationships_account_alliances'} = $brAlliances;

        $brBean->save();

        $accountRole = 'account_ei_tiedossa';
        if (isset($_REQUEST['Contactscontact_account_role_c']) && $_REQUEST['Contactscontact_account_role_c']) {
            $accountRole = $_REQUEST['Contactscontact_account_role_c'];
        }

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.
        $db = $GLOBALS['db'];

        $query = 'SELECT id, role FROM accounts_contacts ' .
            'WHERE account_id="' . $db->quote($accountId) . '" AND ' .
            'contact_id="' . $db->quote($contactId) . '" AND ' .
            'deleted=0';

        $result = $db->query($query);

        $relId = $row['id'];
        $roleString = $row['role'];

        if (!$relId) {
            //$account->retrieve($accountId);
            if (!$account->load_relationship('contacts')) {
                return;
            }

            $account->{'contacts'}->get(true);

            $account->{'contacts'}->add($contactId, array('role' => encodeMultienumValue(array($accountRole))));
            $account->save();
            return;
        }

        $roles = unencodeMultienum($roleString);

        $row = $db->fetchByAssoc($result);

        if (in_array($accountRole, $roles)) {
            return;
        }

        $newRoles = $roles;
        $newRoles[] = $accountRole;
        $newRolesEncoded = encodeMultienumValue($newRoles);

        $query = 'UPDATE accounts_contacts ' .
            'SET role="' . $db->quote($newRolesEncoded) . '" ' .
            'WHERE id="' . $db->quote($relId) . '"';
        $result = $db->query($query);
         /*$roleBeanName = $beanList['nlfro_Roles'];
        require_once($beanFiles[$roleBeanName]);
        $role = new $roleBeanName();

        $role->{'role_c'} = 'br_yhteyshenkilo';

        $role->save();
        $roleId = $role->{'id'};

        if (!$brBean->load_relationship('nlfbr_businessrelationships_nlfro_roles_1')) {
            return;
        }

        $brBean->{'nlfbr_businessrelationships_nlfro_roles_1'}->get(true);

        $brBean->{'nlfbr_businessrelationships_nlfro_roles_1'}->add($roleId, array());
        $brBean->save();

        if (!$contact->load_relationship('contacts_nlfro_roles_1')) {
            return;
        } 

        $contact->{'contacts_nlfro_roles_1'}->get(true);

        $contact->{'contacts_nlfro_roles_1'}->add($roleId, array());
        $contact->save();*/
       
    }

    private function setAccountData(&$account, $lead, array $postData) {
        $account->{'account_type'} = 'Customer';
        $account->{'organisaatio_status_c'} = 'toiminnassa';

        $this->saveAccountEmailAddressesAfterConversion($account, $postData);
        $this->setAccountBackendSystemData($account, $postData);
    }

    private function setAccountBackendSystemData(&$account, array $postData) {
        if (!isset($_REQUEST['Accountsaccount_backend_systems_c'])) {
            return;
        }

        $systemIds = $_REQUEST['Accountsaccount_backend_systems_c'];
        if (empty($systemIds)) {
            return;
        }

        if (!$account->load_relationship('accounts_nlfbs_backendsystems_1')) {
            return;
        }

        $account->{'accounts_nlfbs_backendsystems_1'}->get(true);

        foreach ($systemIds as $systemId) {
            $account->{'accounts_nlfbs_backendsystems_1'}->add($systemId, array());
        }
    }

    private function saveAccountEmailAddressesAfterConversion(&$account, array $postData) {
        $fieldAdded = false;
        $newFields = array();

        foreach ($postData as $field => $value) {
            if (substr($field, 0, strlen('LeadAccount')) !== 'LeadAccount') {
                continue;
            }

            if ($field === 'LeadAccount_email_widget_id') {
                $_REQUEST['Accounts_email_widget_id'] = $value;
                $newFields[] = 'Accounts_email_widget_id';
            }

            if (substr($field, 0, strlen('LeadAccount0emailAddress')) !== 'LeadAccount0emailAddress') {
                continue;
            }
            $newFieldName = 'Accounts0' . substr($field, strlen('LeadAccount0'));
            $newValue = $value;
            if ($field === 'LeadAccount0emailAddressPrimaryFlag') {
                $newValue = 'Accounts0' . substr($value, strlen('LeadAccount0'));
            }
            elseif ($field === 'LeadAccount0emailAddressOptOutFlag' || $field === 'LeadAccount0emailAddressInvalidFlag') {
                $newValue = array();
                foreach ($value as $name) {
                    $newValue[] = 'Accounts0' . substr($name, strlen('LeadAccount0'));
                }
            }

            // TODO: this is hacky but how to do it better if SugarEmailAddress reads data from $_REQUEST?
            $_REQUEST[$newFieldName] = $newValue;
            $newFields[] = $newFieldName;
            $fieldAdded = true;
        }

        if (!$fieldAdded) {
            return;
        }

        // Clean all possible old email data that might have been copied over from Lead's contact data
        $account->email1 = null;
        $account->email2 = null;
        $account->email_opt_out = null;
        $account->invalid_email = null;
        $account->emailAddress->addresses = array();

        // Hack: SugarEmailAddress:populateAddresses changes passed module to 'Leads'
        // if action is ConvertLead. This is OK, but in this case we want to jump over it
        $action = $_REQUEST['action'];
        $_REQUEST['action'] = 'ConvertLead-AccountEmail';
        $emailAddress = new SugarEmailAddress();
        $emailAddress->saveEmail($account->id, 'Accounts');
        $_REQUEST['action'] = $action;
        foreach ($newFields as $field) {
            unset($_REQUEST[$field]);
        }
    }

}
