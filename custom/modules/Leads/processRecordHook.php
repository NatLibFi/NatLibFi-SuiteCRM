<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Leads/Lead.php';
require_once 'modules/Contacts/Contact.php';

class LeadProcessRecordHook
{
    const CONVERTED_CONTACT_ID_FIELD = 'contact_id';
    const CONVERTED_CONTACT_NAME_FIELD = 'contact_name';
    const CONTACT_NAME_FIELD = 'lead_contact_name';

    function setContactName($bean, $event, $arguments)
    {
        global $locale;

        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $bean->retrieve(); // Load data from DB, including custom table
        $bean->get_contact();

        if ($bean->{self::CONVERTED_CONTACT_NAME_FIELD}) {
            $target = '';
            $name = $bean->{self::CONVERTED_CONTACT_NAME_FIELD};
            if (isset($bean->{self::CONVERTED_CONTACT_ID_FIELD}) && $bean->{self::CONVERTED_CONTACT_ID_FIELD}) {
                $target = 'index.php?module=Contacts&action=DetailView&record=' . htmlentities($bean->{self::CONVERTED_CONTACT_ID_FIELD});
            }
            $bean->{self::CONTACT_NAME_FIELD} = $name;
            if ($target) {
                $bean->{self::CONTACT_NAME_FIELD} = '<a href="' . ajaxLink($target) . '">' . $name . '</a>';
            }
            return;
        }

        $firstName = $bean->first_name;
        $lastName = $bean->last_name;
        $salutation = $bean->salutation;

        if ($firstName || $lastName) {
            $bean->{self::CONTACT_NAME_FIELD} = $locale->getLocaleFormattedName($firstName, $lastName, $salutation);
            return;
        }

        if (!$bean->load_relationship('contacts_leads_2')) {
            return;
        }

        $contactIds = $bean->{'contacts_leads_2'}->get(true);

        if ($contactIds) {
            $contactId = reset($contactIds);
            $contact = new Contact();
            $contact->retrieve($contactId);
            if (!$contact) {
                return;
            }

            $firstName = $contact->first_name;
            $lastName = $contact->last_name;
            $salutation = $contact->salutation;
            if ($firstName || $lastName) {
                $target = 'index.php?module=Contacts&action=DetailView&record=' . htmlentities($contactId);
                $name = $locale->getLocaleFormattedName($firstName, $lastName, $salutation);
                $bean->{self::CONTACT_NAME_FIELD} = '<a href="' . ajaxLink($target) . '">' . $name . '</a>';
            }
        }

    }

    function setServiceMailLinkUrls($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT link_url FROM lead_service_mail_links ' .
            'WHERE lead_id="' . $db->quote($id) . '" ' .
            'AND deleted = 0';

        $result = $db->query($query);

        $linkString = '';
        while ($row = $db->fetchByAssoc($result) ) {
            if ($linkString) {
                $linkString .= ', '; // TODO: i18n this
            }
            $linkString .= '<a href="' . $row['link_url'] . '">' . $row['link_url'] . '</a>';
        }

        $bean->{service_mail_link_urls} = $linkString;
    }

}
