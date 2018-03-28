<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContactBeforeSaveHook
{
    const FIELD_ACCOUNT_RELATIONSHIP = 'accounts';

    function setAccounts($bean, $event, $arguments)
    {
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'Contacts') {
            return;
        }

        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'Save') {
            return;
        }

        if (!$bean->load_relationship(self::FIELD_ACCOUNT_RELATIONSHIP)) {
            return;
        }

        $accountIds = $bean->{self::FIELD_ACCOUNT_RELATIONSHIP}->get(true);

        $newAccountIds = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('account_id')) === 'account_id') {
                $index = substr($field, strlen('account_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['account_id' . $index]) || !isset($_REQUEST['account_name' . $index])) {
                continue;
            }

            $id = $_REQUEST['account_id' . $index];
            $name = $_REQUEST['account_name' . $index];
            $department = '';
            $address = '';
            $description = '';
            if ($id && $name) {
                if (isset($_REQUEST['account_department' . $index])) {
                    $department = $_REQUEST['account_department' . $index];
                }
                if (isset($_REQUEST['account_address' . $index])) {
                    $address = $_REQUEST['account_address' . $index];
                }
                if (isset($_REQUEST['account_description' . $index])) {
                    $description = $_REQUEST['account_description' . $index];
                }
                $newAccountIds[$id] = array(
                    'id' => $id,
                    'name' => $name,
                    'department' => $department,
                    'address' => $address,
                    'description' => $description,
                );
            }
        }

        foreach ($accountIds as $id) {
            if (!array_key_exists($id, $newAccountIds)) {
                $bean->{self::FIELD_ACCOUNT_RELATIONSHIP}->delete($id);
            }
        }

        foreach ($newAccountIds as $id => $accountData) {
            if (!in_array($id, $accountIds)) {
                $bean->{self::FIELD_ACCOUNT_RELATIONSHIP}->add(
                    $id,
                    array(
                        'department' => $accountData['department'],
                        'address' => $accountData['address'],
                        'description' => $accountData['description'],
                    )
                );
            } else{
                $db = $GLOBALS['db'];
                $query = 'UPDATE accounts_contacts ' .
                    'SET department="' . $db->quote($accountData['department']) . '", ' .
                    'address="' . $db->quote($accountData['address']) . '", ' .
                    'description="' . $db->quote($accountData['description']) . '" ' .
                    'WHERE account_id="' . $db->quote($id) . '"';

                $result = $db->query($query);
                // TODO: update only relevant fields, e.g. keep role unchanged
            }
        }
    }

}
