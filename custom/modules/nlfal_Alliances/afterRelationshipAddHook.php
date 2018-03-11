<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfal_Alliances/nlfal_Alliances.php';

class AllianceAfterRelationshipAddHook
{
    public function setContactRole($bean, $event, $arguments)
    {
        if (!isset($arguments['relationship']) || !isset($arguments['module']) || !isset($arguments['id']) || !isset($arguments['related_module']) || !isset($arguments['related_id'])) {
            return;
        }
        if ($arguments['module'] !== 'nlfal_Alliances') {
            return;
        }
        if ($arguments['related_module'] !== 'Contacts') {
            return;
        }
        if ($arguments['relationship'] !== 'nlfal_alliances_contacts_1') {
            return;
        }

        $allianceId = $arguments['id'];
        $contactId = $arguments['related_id'];

        $allianceBean = new nlfal_Alliances();
        $allianceBean->retrieve($allianceId);
        if (!$allianceBean) {
            return;
        }

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.

        $db = $GLOBALS['db'];

        $query = 'SELECT id, role FROM nlfal_alliances_contacts_1_c ' .
            'WHERE nlfal_alliances_contacts_1nlfal_alliances_ida="' . $db->quote($allianceId) . '" AND ' .
            'nlfal_alliances_contacts_1contacts_idb="' . $db->quote($contactId) . '" AND ' .
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
        $defaultRole = 'alliance_ei_tiedossa'; // TODO: how to generalize this?
        $defaultRoleEncoded = encodeMultienumValue(array( $defaultRole ));

        $query = 'UPDATE nlfal_alliances_contacts_1_c ' .
            'SET role="' . $db->quote($defaultRoleEncoded) . '" ' .
            'WHERE id="' . $db->quote($relId) . '"';

        $result = $db->query($query);

    }
}
