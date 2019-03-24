<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfwg_WorkingGroups/nlfwg_WorkingGroups.php';

class WorkingGroupAfterRelationshipAddHook
{
    public function setContactRole($bean, $event, $arguments)
    {
        if (!isset($arguments['relationship']) || !isset($arguments['module']) || !isset($arguments['id']) || !isset($arguments['related_module']) || !isset($arguments['related_id'])) {
            return;
        }
        if ($arguments['module'] !== 'nlfwg_WorkingGroups') {
            return;
        }
        if ($arguments['related_module'] !== 'Contacts') {
            return;
        }
        if ($arguments['relationship'] !== 'nlfwg_workinggroups_contacts_1') {
            return;
        }

        $wgId = $arguments['id'];
        $contactId = $arguments['related_id'];

        $wgBean = new nlfwg_WorkingGroups();
        $wgBean->retrieve($wgId);
        if (!$wgBean) {
            return;
        }

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.

        $db = $GLOBALS['db'];

        $query = 'SELECT id, role FROM nlfwg_workinggroups_contacts_1_c ' .
            'WHERE nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida="' . $db->quote($wgId) . '" AND ' .
            'nlfwg_workinggroups_contacts_1contacts_idb="' . $db->quote($contactId) . '" AND ' .
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
        $defaultRole = 'wg_ei_tiedossa'; // TODO: how to generalize this?
        $defaultRoleEncoded = encodeMultienumValue(array( $defaultRole ));

        $query = 'UPDATE nlfwg_workinggroups_contacts_1_c ' .
            'SET role="' . $db->quote($defaultRoleEncoded) . '" ' .
            'WHERE id="' . $db->quote($relId) . '"';

        $result = $db->query($query);

    }
}
