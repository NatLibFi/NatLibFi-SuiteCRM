<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContactProcessRecordHook
{
    const FIELD_ROLE = 'accounts_contacts_role_incl_businessrelationships';

    // TODO: this could be made function called from vardef instead of using a hook?
    function setAccountAndBusinessRelationshipRole($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $roleString = getAccountAndBRRolesForContactSubpanelHtml($id);
        if ($roleString) {
            $bean->{self::FIELD_ROLE} = $roleString;
        }
    }

}
