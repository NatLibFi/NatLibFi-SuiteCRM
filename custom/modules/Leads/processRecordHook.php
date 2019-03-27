<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Leads/Lead.php';
require_once 'modules/Contacts/Contact.php';
require_once 'custom/include/EmailRecipientProvider.php';

class LeadProcessRecordHook
{
    const CONVERTED_CONTACT_ID_FIELD = 'contact_id';
    const CONVERTED_CONTACT_NAME_FIELD = 'contact_name';
    const CONTACT_NAME_FIELD = 'lead_contact_name';
    const EMAIL_FIELD = 'lead_email';
    const SERVICE_MAIL_URL_LINKS_FIELD = 'service_mail_link_urls';

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

    function setLeadEmail($bean, $event, $arguments)
    {
        global $locale, $current_user;
        $db = DBManagerFactory::getInstance();

        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $recipientProvider = new EmailRecipientProvider($db, $locale);
        $emailData = $recipientProvider->getRecipientNamesAndAddresses('Leads', [ $bean->id ]);

        $emailLink = '';
        if ($emailData) {
            $email = $emailData[0]['email_address'];
            //This is basically duplicating logic from EmailUI::createEmailLink. Would be nice to have this extracted
            if ($current_user->getEmailClient() == 'sugar') {
                $emailLink = '<a class="email-link"' .
                    ' onclick="$(document).openComposeViewModal(this);"' .
                    ' data-module="' . 'Contacts' .
                    '" data-record-id="' . $emailData[0]['id'] .
                    '" data-module-name="' . $emailData[0]['name'] .
                    '" data-email-address="' . $email  . '">' .
                    $email . '</a>'; 
            } else {
                $emailLink = '<a class="email-link"' .
                    ' href="mailto:' .  $email . '">' .
                    $email . '</a>';
            }
        }

        $bean->{self::EMAIL_FIELD} = $emailLink;
    }

    function setServiceMailLinkUrls($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = DBManagerFactory::getInstance();

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

        $bean->{self::SERVICE_MAIL_URL_LINKS_FIELD} = $linkString;
    }

}
