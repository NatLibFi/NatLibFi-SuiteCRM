<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/SugarEmailAddress/SugarEmailAddress.php';
require_once 'custom/modules/Leads/ServiceMailLinkHelper.php';
require_once 'custom/modules/Audit/CustomAudit.php';
require_once 'include/TimeDate.php';

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

    public function setServiceMailLinkData($bean, $event, $arguments) {
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'Leads') {
            return;
        }

        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'Save') {
            return;
        }

        $helper = new ServiceMailLinkHelper();
        $existingLinks = $helper->getLinkData($bean->id);

        $newLinks = array();
        $updatedLinks = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('service_mail_link_id')) === 'service_mail_link_id') {
                $index = substr($field, strlen('service_mail_link_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['service_mail_link_id' . $index]) || !array_key_exists('service_mail_link_url' . $index, $_REQUEST)) {
                continue;
            }

            $id = $_REQUEST['service_mail_link_id' . $index];
            $linkUrl = '';
            $description = '';
            if (isset($_REQUEST['service_mail_link_url' . $index])) {
                $linkUrl = $_REQUEST['service_mail_link_url' . $index];
            }
            if (isset($_REQUEST['service_mail_link_description' . $index])) {
                $description = $_REQUEST['service_mail_link_description' . $index];
            }
            if ($id) {
                $updatedLinks[$id] = array(
                    'record_id' => $id,
                    'link_url' => $linkUrl,
                    'description' => $description,
                );
            } else {
                $newLinks[] = array(
                    'link_url' => $linkUrl,
                    'description' => $description,
                );
            }
        }

        $toUpdate = array();
        $toDelete = array();
        foreach ($existingLinks as $oldData) {
            $key = $oldData['record_id'];
            if (!array_key_exists($key, $updatedLinks)) {
                $toDelete[] = array(
                    'id' => $oldData['record_id'],
                    'link_url' => $oldData['link_url'],
                );
                continue;
            }
            $newData = $updatedLinks[$key];
            if (
                $oldData['link_url'] !== $newData['link_url'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = array(
                    'new' => $newData,
                    'old' => $oldData,
                );
            }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $data) {
            $query = 'DELETE FROM lead_service_mail_links WHERE id="' . $db->quote($data['id']) . '"';

            $auditData = array(
                'field_name' => 'service_mail_link',
                'data_type' => 'varchar',
                'before' => $data['link_url'],
                'after' => '',
            );

            $result = $db->query($query);
            $db->save_audit_records($bean, $auditData);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE lead_service_mail_links ' .
                'SET link_url="' . $db->quote($data['new']['link_url']) . '", ' .
                'description="' . $db->quote($data['new']['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['new']['record_id']) . '"';

            $auditData = array();
            if ($data['old']['link_url'] !== $data['new']['link_url']) {
                $auditData[] = array(
                    'field_name' => 'service_mail_link',
                    'data_type' => 'varchar',
                    'before' => $data['old']['link_url'],
                    'after' => $data['new']['link_url'],
                );
            }
            if ($data['old']['description'] !== $data['new']['description']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'service_mail_link|' . $data['new']['link_url'] . '|service_mail_link_description',
                    'data_type' => 'text',
                    'before' => $data['old']['description'],
                    'after' => $data['new']['description'],
                );
            }

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

       foreach ($newLinks as $data) {
            $query = 'INSERT INTO lead_service_mail_links ' .
                '(id, lead_id, link_url, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                '"' . $db->quote($data['link_url']) . '", ' .
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            $auditData = array(
                array(
                    'field_name' => 'service_mail_link',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['link_url'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'service_mail_link|' . $data['link_url'] . '|service_mail_link_description',
                    'data_type' => 'text',
                    'before' => '',
                    'after' => $data['description'],
                ),
            );

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }
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

        $bean->{'date_converted_c'} = TimeDate::getInstance()->nowDb();

        $accountId = $bean->{'account_id'};
        $serviceId = $bean->{'nlfse_services_leads_1nlfse_services_ida'};
        if (!$accountId || !$serviceId) {
            return;
        }

        if (!$bean->load_relationship('nlfbr_businessrelationships_leads_1')) {
                return;
        }
        $brIds = $bean->{'nlfbr_businessrelationships_leads_1'}->get(true);

        // TODO: maybe not reset. the last ID needed
        $brId = reset($brIds);
        if (!$brId) {
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
        $brBean->retrieve($brId);

        $brBean->{'accounts_nlfbr_businessrelationships_1_name'} = $account->name;
        $brBean->{'nlfse_services_nlfbr_businessrelationships_1_name'} = $service->name;

        $this->setBusinessRelationshipData($brBean, $bean, $_REQUEST);

        $brBean->save();

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

        if (!$brBean->load_relationship('nlfbr_businessrelationships_contacts_1')) {
             return;
        }

        if (!$brBean->load_relationship('nlfbr_businessrelationships_leads_1')) {
             return;
        }

        $brBean->{'nlfbr_businessrelationships_leads_1'}->add($bean->id, array());

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.
        $db = $GLOBALS['db'];

        $query = 'SELECT contacts_leads_2contacts_ida AS contact_id, role FROM contacts_leads_2_c ' .
            'WHERE deleted=0 AND contacts_leads_2leads_idb="' . $db->quote($bean->id) . '"';

        $result = $db->query($query);

        while ($row = $db->fetchByAssoc($result)) {
            $id = $row['contact_id'];
            $additionalContactRoles = unencodeMultienum($row['role']);
            $additionalContactRoles = array_map(
                function($x) { return substr($x, strlen('lead_')); },
                $additionalContactRoles
            );

            $brBean->{'nlfbr_businessrelationships_contacts_1'}->add($id, array('role' => encodeMultienumValue($additionalContactRoles)));
        }

        $brBean->save();

        // as of ASKI-274, contact/account roles are expected to be set before conversion
        return;

        $accountRole = 'account_ei_tiedossa';
        if (isset($_REQUEST['Contactscontact_account_role_c']) && $_REQUEST['Contactscontact_account_role_c']) {
            $accountRole = $_REQUEST['Contactscontact_account_role_c'];
        }

        $contactDepartment = '';
        $contactAddress = '';
        if (isset($_REQUEST['Contactsdepartment']) && $_REQUEST['Contactsdepartment']) {
            $contactDepartment = $_REQUEST['Contactsdepartment'];
        }
        if (isset($_REQUEST['Contactslead_address']) && $_REQUEST['Contactslead_address']) {
            $contactAddress = $_REQUEST['Contactslead_address'];
        }

        $query = 'SELECT id, role FROM accounts_contacts ' .
            'WHERE account_id="' . $db->quote($accountId) . '" AND ' .
            'contact_id="' . $db->quote($contactId) . '" AND ' .
            'deleted=0';

        $result = $db->query($query);

        $row = $db->fetchByAssoc($result);

        $relId = $row['id'];
        $roleString = $row['role'];

        if (!$relId) {
            //$account->retrieve($accountId);
            if (!$account->load_relationship('contacts')) {
                return;
            }

            $account->{'contacts'}->get(true);

            $account->{'contacts'}->add(
                $contactId,
                array(
                    'department' => $contactDepartment,
                    'address' => $contactAddress,
                    'role' => encodeMultienumValue(array($accountRole))
                )
            );
            $account->save();
            // TODO: also need to do the same for additional contact ids? What role to use?
            return;
        }

        $roles = unencodeMultienum($roleString);

        if (in_array($accountRole, $roles)) {
            return;
        }

        $newRoles = $roles;
        $newRoles[] = $accountRole;
        $newRolesEncoded = encodeMultienumValue($newRoles);
        // TODO: also need to do the same for additional contact ids? What role to use?

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

    private function setBusinessRelationshipData(&$br, $lead, array $postData) {
        $br->{'asiakassuhde_c'} = 'aktiivinen';
        $br->{'palvelu_liittymisen_status_c'} = 'ilmoittautunut';
        $br->{'nfl_business_relation_begins_c'} = $this->formatDate(date('d.m.Y'));

        if (isset($postData['nlfbr_BusinessRelationshipslead_description'])) {
            $br->description = $postData['nlfbr_BusinessRelationshipslead_description'];
        }

        if (isset($postData['nlfbr_BusinessRelationshipslead_commercial'])) {
            $br->{'commercial'} = $postData['nlfbr_BusinessRelationshipslead_commercial'];
        }

        if (isset($postData['nlfbr_BusinessRelationshipslead_commercial_description'])) {
            $br->{'maksullisen_lisatiedot2_c'} = $postData['nlfbr_BusinessRelationshipslead_commercial_description'];
        }

        $brAlliances = '';
        if (isset($postData['nlfbr_BusinessRelationshipsnlfbr_businessrelationships_account_alliances']) && $postData['nlfbr_BusinessRelationshipsnlfbr_businessrelationships_account_alliances']) {
            $brAlliances = encodeMultienumValue($postData['nlfbr_BusinessRelationshipsnlfbr_businessrelationships_account_alliances']);
        }
        $br->{'nlfbr_businessrelationships_account_alliances'} = $brAlliances;
    }

    // Copied from SugarFieldDatetime::save
    private function formatDate($date) {
        global $timedate;

        if (!$date) {
            return '';
        }

        $offset = strlen(trim($date)) < 11 ? false : true;
        if ($timedate->check_matching_format($date, TimeDate::DB_DATE_FORMAT)) {
            return $date;
        } else {
            return $timedate->to_db_date($date, $offset);
        }
    }

}
