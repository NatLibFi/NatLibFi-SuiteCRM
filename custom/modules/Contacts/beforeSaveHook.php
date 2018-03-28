<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'custom/modules/Audit/CustomAudit.php';

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
                $auditData = array(
                    'field_name' => 'account_id',
                    'data_type' => 'relate',
                    'before' => $id,
                    'after' => '',
                );
                $bean->db->save_audit_records($bean, $auditData);
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
                $auditData = array(
                    array(
                        'field_name' => 'account_id',
                        'data_type' => 'relate',
                        'before' => '',
                        'after' => $id,
                    ),
                    array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_department',
                        'data_type' => 'varchar',
                        'before' => '',
                        'after' => $accountData['department'],
                    ),
                    array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_address',
                        'data_type' => 'varchar',
                        'before' => '',
                        'after' => $accountData['address'],
                    ),
                    array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_description',
                        'data_type' => 'text',
                        'before' => '',
                        'after' => $accountData['description'],
                    ),
                );
                foreach ($auditData as $auditRow) {
                    $bean->db->save_audit_records($bean, $auditRow);
                }
            } else{
                $db = $GLOBALS['db'];

                $oldData = $this->getContactAccountData($db, $bean->id, $id);

                if (!$oldData) {
                    continue;
                }

                $query = 'UPDATE accounts_contacts ' .
                    'SET department="' . $db->quote($accountData['department']) . '", ' .
                    'address="' . $db->quote($accountData['address']) . '", ' .
                    'description="' . $db->quote($accountData['description']) . '" ' .
                    'WHERE account_id="' . $db->quote($id) . '"';

                $auditData = array(
                );
                if ($oldData['department'] !== $accountData['department']) {
                    $auditData[] = array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_department',
                        'data_type' => 'varchar',
                        'before' => $oldData['department'],
                        'after' => $accountData['department'],
                    );
                }
                if ($oldData['address'] !== $accountData['address']) {
                    $auditData[] = array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_address',
                        'data_type' => 'varchar',
                        'before' => $oldData['address'],
                        'after' => $accountData['address'],
                    );
                }
                if ($oldData['description'] !== $accountData['description']) {
                    $auditData[] = array(
                        'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'account_id|' . $id . '|account_description',
                        'data_type' => 'text',
                        'before' => $oldData['description'],
                        'after' => $accountData['description'],
                    );
                }

                $result = $db->query($query);
                // TODO: update only relevant fields, e.g. keep role unchanged

                foreach ($auditData as $auditRow) {
                    $bean->db->save_audit_records($bean, $auditRow);
                }
            }
        }
    }

    private function getContactAccountData($db, $contactId, $accountId) {
        $query = 'SELECT department, address, description FROM accounts_contacts ' .
            'WHERE contact_id="' . $db->quote($contactId) . '" AND account_id="' . $db->quote($accountId) . '" AND deleted=0';

        $data = array();

        $result = $db->query($query);

        if ($row = $db->fetchByAssoc($result)) {
            $data['department'] = $row['department'];
            $data['address'] = $row['address'];
            $data['description'] = $row['description'];
        }

        return $data;
     }

}
