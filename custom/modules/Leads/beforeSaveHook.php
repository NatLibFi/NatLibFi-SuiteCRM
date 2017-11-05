<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class LeadBeforeSaveHook
{
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
        if (!isset($contactId) || !isset($accountId) || !isset($serviceId)) {
            return;
        }

        require('include/modules.php');

        $accountBeanName = $beanList['Accounts'];
        require_once($beanFiles[$accountBeanName]);
        $account = new $accountBeanName();
        $account->retrieve($accountId);
        // TODO: check if exists and stop if not?

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

}
