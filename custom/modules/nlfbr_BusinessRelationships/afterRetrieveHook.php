<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

//require_once 'modules/nlfro_Roles/nlfro_Roles.php';

class BusinessRelationshipAfterRetrieveHook
{
//    const FIELD_ROLE_REL = 'nlfbr_businessrelationships_nlfro_roles_1';

    function setContactRoleFields($bean, $event, $arguments)
    {
   /*     if (!$bean->load_relationship(self::FIELD_ROLE_REL)) {
            return;
        }

        $roles = $bean->{self::FIELD_ROLE_REL}->get(true);

        foreach ($roles as $roleId) {
            $role = new nlfro_Roles();
            $role->retrieve($roleId);
            if ($role->{role_c} === 'tekninenyhteyshenkilo') { // TODO: put to consts
                 $bean->{dummy_role_field} = $roleId;
                 $bean->{contact_id1_c} = $roleId;
                 $bean->{tekninen_kontakti_c} = $role->{contacts_nlfro_roles_1_name};
            }
        }*/
    }

}
