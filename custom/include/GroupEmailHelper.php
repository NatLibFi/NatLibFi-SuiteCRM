<?php

class GroupEmailHelper
{
     const MODULE_ACCOUNTS = 'Accounts';
     const MODULE_WORKING_GROUPS = 'nlfwg_WorkingGroups';

    /**
     * Based on EmailUI::generateComposePackageForQuickCreate. Difference is,
     * this goes through Contact records related to $bean, and uses their
     * email address(es) as a recipient.
     *
     * @see EmailUI::generateComposePackageForQuickCreate
     */
    function generateComposePackageForQuickCreate($composeData,$fullLinkUrl)
    {
        // TODO: is this needed?
        $_REQUEST['forQuickCreate'] = true;

	if (!isset($composeData['parent_type']) || !isset($composeData['parent_id'])) {
            // Invalid data, shouldn't it rather die instead of returning dummy result?
            return json_encode(array('fullComposeUrl' => $fullLinkUrl,'composePackage' => $composeData));
        }
        if ($composeData['parent_type'] !== self::MODULE_WORKING_GROUPS && $composeData['parent_type'] !== self::MODULE_ACCOUNTS) {
            // Invalid data, shouldn't it rather die instead of returning dummy result?
            return json_encode(array('fullComposeUrl' => $fullLinkUrl,'composePackage' => $composeData));
        }

        /*$class = $beanList[$composeData['parent_type']];
        require_once($beanFiles[$class]);

        $bean = new $class();
        $bean->retrieve($composeData['parent_id']);*/
  	
        $mainData = array('parent_id' => $composeData['parent_id'], 'parent_type' => $composeData['parent_type']);
	require_once('modules/Emails/EmailUI.php');
	$emailUI = new EmailUI();
	$mainComposeOptions = $emailUI->generateComposePackageForQuickCreate($mainData, http_build_query($mainData), false);

        $mainComposeOptionsDecoded = json_decode($mainComposeOptions, true);

        $mainPackage = $mainComposeOptionsDecoded['composePackage'];
        $mainPackage['to_email_addrs'] = '';

        /*$relationshipField = 'nlfwg_workinggroups_contacts_1';
	$bean->load_relationship($relationshipField);
	$contactIds = $bean->{$relationshipField}->get();*/

        // Version with roles stored in the contacts relationship below ($bean used when no specific roles are used)
	$contactIds = $this->getRecipientIds($composeData['parent_type'], $composeData['parent_id']);
        // End of Version with roles stored in the contacts relationship below

        foreach ($contactIds as $id) {
            // TODO: skip contacts with no email address?
            require_once('modules/Emails/Compose.php');
            $partPackage = generateComposeDataPackage(array('parent_type' => 'Contacts', 'parent_id' => $id), false);
            if ($mainPackage['to_email_addrs'] !== '') {
                $mainPackage['to_email_addrs'] .= ', ';
            }
            $mainPackage['to_email_addrs'] .= from_html($partPackage['to_email_addrs']);
        }

    	// JSON object is passed into the function defined within the a href onclick event
    	// which is delimeted by '.  Need to escape all single quotes and &, <, >
    	// but not double quotes since json would escape them
    	foreach ($mainPackage as $key => $singleCompose)
    	{
    	   if (is_string($singleCompose))
    	       $mainPackage[$key] = str_replace("&nbsp;", " ", from_html($singleCompose));
    	}

    	$quickComposeOptions = array(
            'fullComposeUrl' => $mainComposeOptionsDecoded['fullComposeUrl'],
            'composePackage' => $mainPackage
        );

    	return json_encode($quickComposeOptions);
    }

    private function getRecipientIds($parentType, $parentId) {
        $contactPersonRoles = $this->getContactPersonRoles($parentType);
        if (empty($contactPersonRoles)) {
            return $this->getAllContactIds($parentType, $parentId);
        }
        return $this->getContactIdsForRoles($parentType, $parentId, $contactPersonRoles);   
    }

    private function getContactPersonRoles($parentType) {
        $contactPersonRoles = array(); // Note: currently there is a single role to be used in emails but let's make it generic
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            // Note: no dedicated contact person role for Working group emails - send to all
        }
        if ($parentType === self::MODULE_ACCOUNTS) {
            // Note: no dedicated contact person role for Account group emails - send to all
        }
        return $contactPersonRoles;
    }

    private function getAllContactIds($parentType, $parentId) {
        // TODO: read modules list instead of using globals?
        global $beanList;
        global $beanFiles;

        $class = $beanList[$parentType];
        require_once($beanFiles[$class]);

        $bean = new $class();
        $bean->retrieve($parentId);

        $relationshipField = $this->getRelationshipField($parentType);
        $bean->load_relationship($relationshipField);
        $allContactIds = $bean->{$relationshipField}->get();

        $contactIds = array();
        foreach ($allContactIds as $id) {
            $contact = new Contact();
            $contact->retrieve($id);

            if ($contact === null) {
                continue;
            }
            if ($contact->{'no_mailing_c'}) {
                continue;
            }

            $contactIds[] = $id;
        }

        return $contactIds;
    }

    private function getRelationshipField($parentType) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return 'contacts';
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1';
        }
        return null;
    }

    private function getContactIdsForRoles($parentType, $parentId, $contactPersonRoles) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return $this->getAccountContactsForRoles($contactPersonRoles);
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return $this->getWorkingGroupContactsForRoles($contactPersonRoles);
        }
        return array();
    }

    // TODO: should this also get acount id as param?
    // TODO no mailing flag not handled yet!
    private function getAccountContactsForRoles($roles) {
        $ids = array();

        $roleRegexp = implode(
            '|',
            array_map(
                function($x) { return '\^' . $x . '\^'; },
                $roles
            )
        );

        $db = $GLOBALS['db'];

        $query = 'SELECT contact_id FROM accounts_contacts ' .
            'WHERE deleted=0 AND ' .
            'role REGEXP "' . $db->quote($roleRegexp) . '"';

        $result = $db->query($query);

        if ($row = $db->fetchByAssoc($result)) {
            $ids[] = $row['contact_id'];
        }

        return $ids;
    }

    // TODO: should this also get acount id as param?
    // TODO no mailing flag not handled yet!
    private function getWorkingGroupContactsForRoles($roles) {
        $ids = array();

        $roleRegexp = implode(
            '|',
            array_map(
                function($x) { return '\^' . $x . '\^'; },
                $roles
            )
        );

        $db = $GLOBALS['db'];

        $query = 'SELECT rel.nlfwg_workinggroups_contacts_1contacts_idb AS contact_id FROM nlfwg_workinggroups_contacts_1_c rel ' .
            'WHERE rel.deleted=0 AND ' .
            'rel.role REGEXP "' . $db->quote($roleRegexp) . '"';

        $result = $db->query($query);

        if ($row = $db->fetchByAssoc($result)) {
            $ids[] = $row['contact_id'];
        }

        return $ids;
    }

    public function getRecipientNamesAndAddresses($parentType, $parentId, $contactRoleString = '') {
        $contactPersonRoles = array();
        if (!empty($contactRoleString)) {
            $contactPersonRoles = unencodeMultienum($contactRoleString);
        }
        return $this->getAllContactNamesAndAddresses($parentType, $parentId, $contactPersonRoles);
    }

    private function getAllContactNamesAndAddresses($parentType, $parentId, array $contactPersonRoles = array()) {
        $items = array();

        $db = $GLOBALS['db'];

        $relationshipTable = $this->getRelationshipTable($parentType);
        $parentTable = $this->getParentTable($parentType);
        $contactColumn = $this->getContactColumn($parentType);
        $parentColumn = $this->getParentColumn($parentType);
        $noMailingColumnm = $this->getNoMailingContactColumn();

        $roleCond = '';

        if (!empty($contactPersonRoles)) {
            $roleCond = implode(
                '|',
                array_map(
                    function($x) { return '\^' . $x . '\^'; },
                    $contactPersonRoles
                )
            );
        }

        $query = 'SELECT contacts.first_name, contacts.last_name, contacts.salutation, contacts.title, ea.email_address ' .
            'FROM contacts ' .
            "JOIN contacts_cstm cstm ON (cstm.id_c=contacts.id AND cstm.{$noMailingColumnm}=0) " .
            "JOIN {$relationshipTable} rel ON (rel.{$contactColumn}=contacts.id AND rel.deleted=0) " . 
            "JOIN {$parentTable} parent ON (rel.{$parentColumn}=parent.id AND parent.deleted=0) " .
            'JOIN email_addr_bean_rel eabr ON (contacts.id = eabr.bean_id AND eabr.deleted=0) ' .
            'JOIN email_addresses ea ON eabr.email_address_id = ea.id ' .
            'WHERE parent.id="' . $db->quote($parentId) . '" AND contacts.deleted=0 ' .
            'AND eabr.primary_address = 1 ';

        if ($roleCond) {
            $query .= ' AND rel.role REGEXP "' . $db->quote($roleCond) . '"';
        }

        $result = $db->query($query);

        while ($row = $db->fetchByAssoc($result)) {
            $items[] = array(
                'first_name' => $row['first_name'],
                'last_name' => $row['last_name'],
                'title' => $row['title'],
                'salutation' => $row['salutation'],
                'email_address' => $row['email_address'],
            );
        }

        return $items;
    }

   private function getRelationshipTable($parentType) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return 'accounts_contacts';
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1_c';
        }
        return null;
    }

   private function getParentTable($parentType) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return 'accounts';
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups';
        }
        return null;
    }

   private function getParentColumn($parentType) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return 'account_id';
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida';
        }
        return null;
    }

   private function getContactColumn($parentType) {
        if ($parentType === self::MODULE_ACCOUNTS) {
            return 'contact_id';
        }
        if ($parentType === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1contacts_idb';
        }
        return null;
    }

    private function getNoMailingContactColumn() {
        return 'no_mailing_c';
    }

}
