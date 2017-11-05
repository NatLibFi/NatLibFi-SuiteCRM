<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Leads/Lead.php';
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
            $bean->{self::CONTACT_NAME_FIELD} = $bean->{self::CONVERTED_CONTACT_NAME_FIELD};
            return;
        }

        $firstName = $bean->first_name;
        $lastName = $bean->last_name;
        $salutation = $bean->salutation;

        if ($firstName || $lastName) {
            $bean->{self::CONTACT_NAME_FIELD} = $locale->getLocaleFormattedName($firstName, $lastName, $salutation);
        }

    }

}
