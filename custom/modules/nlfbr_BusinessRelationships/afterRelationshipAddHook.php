<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfbr_BusinessRelationships/nlfbr_BusinessRelationships.php';

class BusinessRelationshipAfterRelationshipAddHook
{
    public function setContactRole($bean, $event, $arguments)
    {
        if (!isset($arguments['relationship']) || !isset($arguments['module']) || !isset($arguments['id']) || !isset($arguments['related_module']) || !isset($arguments['related_id'])) {
            return;
        }
        if ($arguments['module'] !== 'nlfbr_BusinessRelationships') {
            return;
        }
        if ($arguments['related_module'] !== 'Contacts') {
            return;
        }
        if ($arguments['relationship'] !== 'nlfbr_businessrelationships_contacts_1') {
            return;
        }

        $brId = $arguments['id'];
        $contactId = $arguments['related_id'];

        $brBean = new nlfbr_BusinessRelationships();
        $brBean->retrieve($brId);
        if (!$brBean) {
            return;
        }

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.

        $db = $GLOBALS['db'];

        $query = 'SELECT id, role FROM nlfbr_businessrelationships_contacts_1_c ' .
            'WHERE nlfbr_busic409onships_ida="' . $db->quote($brId) . '" AND ' .
            'nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($contactId) . '" AND ' .
            'deleted=0';

        $result = $db->query($query);

        $row = $db->fetchByAssoc($result);
        if (!$row) {
            return;
        }

        $relId = $row['id'];
        $roleString = $row['role'];

        $roles = unencodeMultienum($roleString);

        if (!empty($roles) && !in_array('', $roles)) {
             return;
        }

        // No role selected, set the "fallback" role
        $defaultRole = 'br_ei_tiedossa'; // TODO: how to generalize this?
        $defaultRoleEncoded = encodeMultienumValue(array( $defaultRole ));

        $query = 'UPDATE nlfbr_businessrelationships_contacts_1_c ' .
            'SET role="' . $db->quote($defaultRoleEncoded) . '" ' .
            'WHERE id="' . $db->quote($relId) . '"';

        $result = $db->query($query);

    }
}
