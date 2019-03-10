<?php

class EmailRecipientProvider
{
    const MODULE_ACCOUNTS = 'Accounts';
    const MODULE_CONTACTS = 'Contacts';
    const MODULE_LEADS = 'Leads';
    const MODULE_ALLIANCES = 'nlfal_Alliances';
    const MODULE_WORKING_GROUPS = 'nlfwg_WorkingGroups';

    const COLUMN_NO_MAILING = 'no_mailing_c';

    private $db;

    private $locale;

    public function __construct($db, $locale)
    {
        $this->db = $db;
        $this->locale = $locale;
    }

    public function getRecipientNamesAndAddresses($relatedModule, $relatedIds, $contactRoleString = '') {
        $contactPersonRoles = array();
        if (!empty($contactRoleString)) {
            $contactPersonRoles = unencodeMultienum($contactRoleString);
        }
        if ($relatedModule === self::MODULE_CONTACTS) {
            return $this->getContactNamesAndAddresses($relatedIds, $contactPersonRoles);
        }
        return $this->getRelatedContactNamesAndAddresses($relatedModule, $relatedIds, $contactPersonRoles);
    }

    private function getContactNamesAndAddresses($contactIds, array $contactPersonRoles = array()) {
        $items = array();

        $noMailingColumn = self::COLUMN_NO_MAILING;

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

        $idString = implode(
            ',',
            array_map(
                function($id) { return "'" . $this->db->quote($id) . "'"; },
                $contactIds
            )
        );

        $query = 'SELECT contacts.id, contacts.first_name, contacts.last_name, contacts.salutation, contacts.title, ea.email_address ' .
            'FROM contacts ' .
            "JOIN contacts_cstm cstm ON (cstm.id_c=contacts.id AND cstm.{$noMailingColumn}=0) " .
            'JOIN email_addr_bean_rel eabr ON (contacts.id = eabr.bean_id AND eabr.deleted=0) ' .
            'JOIN email_addresses ea ON eabr.email_address_id = ea.id ' .
            'WHERE contacts.id IN (' . $idString . ') AND contacts.deleted=0 ' .
            'AND eabr.primary_address = 1 ';

        if ($roleCond) {
            $query .= ' AND rel.role REGEXP "' . $this->db->quote($roleCond) . '"';
        }

        $result = $this->db->query($query);

        while ($row = $this->db->fetchByAssoc($result)) {
            $items[] = array(
                'id' => $row['id'],
                'name' => $this->formatContactName(
                    $row['first_name'],
                    $row['last_name'],
                    $row['salutation'],
                    $row['title']
                ),
                'email_address' => $row['email_address'],
            );
        }

        return $items;
    }

    private function getRelatedContactNamesAndAddresses($relatedModule, $relatedIds, array $contactPersonRoles = array()) {
        $items = array();

        $relationshipTable = $this->getRelationshipTable($relatedModule);
        $relatedTable = $this->getRelatedModuleTable($relatedModule);
        $contactColumn = $this->getContactColumn($relatedModule);
        $relatedColumn = $this->getRelatedModuleColumn($relatedModule);
        $noMailingColumn = self::COLUMN_NO_MAILING;

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

        $idString = implode(
            ',',
            array_map(
                function($id) { return "'" . $this->db->quote($id) . "'"; },
                $relatedIds
            )
        );

        $query = 'SELECT related.id AS related_id, contacts.id AS contact_id, contacts.first_name, contacts.last_name, contacts.salutation, contacts.title, ea.email_address ' .
            'FROM contacts ' .
            "JOIN contacts_cstm cstm ON (cstm.id_c=contacts.id AND cstm.{$noMailingColumn}=0) " .
            "JOIN {$relationshipTable} rel ON (rel.{$contactColumn}=contacts.id AND rel.deleted=0) " . 
            "JOIN {$relatedTable} related ON (rel.{$relatedColumn}=related.id AND related.deleted=0) " .
            'JOIN email_addr_bean_rel eabr ON (contacts.id = eabr.bean_id AND eabr.deleted=0) ' .
            'JOIN email_addresses ea ON eabr.email_address_id = ea.id ' .
            'WHERE related.id IN (' . $idString . ') AND contacts.deleted=0 ' .
            'AND eabr.primary_address = 1 ';

        if ($roleCond) {
            $query .= ' AND rel.role REGEXP "' . $this->db->quote($roleCond) . '"';
        }

        $result = $this->db->query($query);

        while ($row = $this->db->fetchByAssoc($result)) {
            $items[] = array(
                'id' => $row['contact_id'],
                'name' => $this->formatContactName(
                    $row['first_name'],
                    $row['last_name'],
                    $row['salutation'],
                    $row['title']
                ),
                'email_address' => $row['email_address'],
            );
        }

        return $items;
    }

   private function getRelationshipTable($relatedModule) {
        if ($relatedModule === self::MODULE_ACCOUNTS) {
            return 'accounts_contacts';
        }
        if ($relatedModule === self::MODULE_LEADS) {
            return 'contacts_leads_2_c';
        }
        if ($relatedModule === self::MODULE_ALLIANCES) {
            return 'nlfal_alliances_contacts_1_c';
        }
        if ($relatedModule === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1_c';
        }
        return null;
    }

   private function getRelatedModuleTable($relatedModule) {
        if ($relatedModule === self::MODULE_ACCOUNTS) {
            return 'accounts';
        }
        if ($relatedModule === self::MODULE_LEADS) {
            return 'leads';
        }
        if ($relatedModule === self::MODULE_ALLIANCES) {
            return 'nlfal_alliances';
        }
        if ($relatedModule === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups';
        }
        return null;
    }

   private function getRelatedModuleColumn($relatedModule) {
        if ($relatedModule === self::MODULE_ACCOUNTS) {
            return 'account_id';
        }
        if ($relatedModule === self::MODULE_LEADS) {
            return 'contacts_leads_2leads_idb';
        }
        if ($relatedModule === self::MODULE_ALLIANCES) {
            return 'nlfal_alliances_contacts_1nlfal_alliances_ida';
        }
        if ($relatedModule === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida';
        }
        return null;
    }

   private function getContactColumn($relatedModule) {
        if ($relatedModule === self::MODULE_ACCOUNTS) {
            return 'contact_id';
        }
        if ($relatedModule === self::MODULE_LEADS) {
            return 'contacts_leads_2contacts_ida';
        }
        if ($relatedModule === self::MODULE_ALLIANCES) {
            return 'nlfal_alliances_contacts_1contacts_idb';
        }
        if ($relatedModule === self::MODULE_WORKING_GROUPS) {
            return 'nlfwg_workinggroups_contacts_1contacts_idb';
        }
        return null;
    }

    private function formatContactName($firstName, $lastName, $salutation, $title) {
        return $this->locale->getLocaleFormattedName($firstName, $lastName, $salutation, $title);
    }

}
