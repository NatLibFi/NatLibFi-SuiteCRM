<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';

class AccountAfterRelationshipAddHook
{
    public function setContactRole($bean, $event, $arguments)
    {
        if (!isset($arguments['relationship']) || !isset($arguments['module']) || !isset($arguments['id']) || !isset($arguments['related_module']) || !isset($arguments['related_id'])) {
            return;
        }
        if ($arguments['module'] !== 'Accounts') {
            return;
        }
        if ($arguments['related_module'] !== 'Contacts') {
            return;
        }
        if ($arguments['relationship'] !== 'accounts_contacts') {
            return;
        }

        $accountId = $arguments['id'];
        $contactId = $arguments['related_id'];

        $accountBean = new Account();
        $accountBean->retrieve($accountId);
        if (!$accountBean) {
            return;
        }

        // Additional relationship fields cannot be accessed and edited using beans,
        // so let's do this directly to the database.

        $db = $GLOBALS['db'];

        $query = 'SELECT id, role FROM accounts_contacts ' .
            'WHERE account_id="' . $db->quote($accountId) . '" AND ' .
            'contact_id="' . $db->quote($contactId) . '" AND ' .
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
        $defaultRole = 'account_ei_tiedossa'; // TODO: how to generalize this?
        $defaultRoleEncoded = encodeMultienumValue(array( $defaultRole ));

        $query = 'UPDATE accounts_contacts ' .
            'SET role="' . $db->quote($defaultRoleEncoded) . '" ' .
            'WHERE id="' . $db->quote($relId) . '"';

        $result = $db->query($query);

    }
}
