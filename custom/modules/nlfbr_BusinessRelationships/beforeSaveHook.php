<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipContractHelper.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaViewHelper.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaDataSourceHelper.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaLinkHelper.php';
require_once 'custom/modules/Audit/CustomAudit.php';

class BusinessRelationshipBeforeSaveHook
{
    const NAME_PART_SEPARATOR = '-';

    const FIELD_ACCOUNT_NAME = 'accounts_nlfbr_businessrelationships_1_name';
    const FIELD_SERVICE_NAME = 'nlfse_services_nlfbr_businessrelationships_1_name';
    const FIELD_BUSINESS_RELATIONSHIP_NAME = 'name';

    function setName($bean, $event, $arguments)
    {
        if ($bean->{self::FIELD_BUSINESS_RELATIONSHIP_NAME} !== null) {
            $GLOBALS['log']->debug(
                'Business relationship name present: "' . $bean->{self::FIELD_BUSINESS_RELATIONSHIP_NAME} . '". Will be overwritten'
            );
        }

        $name = $bean->{self::FIELD_SERVICE_NAME} . self::NAME_PART_SEPARATOR . $bean->{self::FIELD_ACCOUNT_NAME};
        $bean->{self::FIELD_BUSINESS_RELATIONSHIP_NAME} = $name;
        if (isset($GLOBALS['log'])) {
            $GLOBALS['log']->debug('Business relationship name set to: "' . $name . '"');
        }
    }

    const FIELD_CONTRACT_RELATIONSHIP = 'nlfbr_businessrelationships_aos_contracts_1'; //TODO: that needed in the end?

    function setContracts($bean, $event, $arguments) {
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'nlfbr_BusinessRelationships') {
            return;
        }

        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'Save') {
            return;
        }

        if (!$bean->load_relationship(self::FIELD_CONTRACT_RELATIONSHIP)) {
            return;
        }

        $serviceId = $bean->{'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida'};

        if (!$serviceId) {
            return;
        }
//$GLOBALS['log']->fatal(print_r($_REQUEST, true));
        /*$accountIds = $bean->{self::FIELD_ACCOUNT_RELATIONSHIP}->get(true);*/
        $helper = new BusinessRelationshipContractHelper();
        $existingContracts = $helper->getContractData($bean->id, $serviceId, true);

        $newContracts = array();
        $updatedContracts = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('contract_id')) === 'contract_id') {
                $index = substr($field, strlen('contract_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['contract_id' . $index]) || !array_key_exists('contract_rel_id' . $index, $_REQUEST)) {
                continue;
            }

            $id = $_REQUEST['contract_id' . $index];
            $relId = $_REQUEST['contract_rel_id' . $index];
            $active = false;
            $kronodocId = '';
            $bindYear = '';
            $endDate = '';
            $description = '';
            if ($id) {
                if (isset($_REQUEST['contract_active' . $index])) {
                    $active = true;
                }
                if (isset($_REQUEST['contract_kronodoc_id' . $index])) {
                    $kronodocId = $_REQUEST['contract_kronodoc_id' . $index];
                }
                if (isset($_REQUEST['contract_bind_year' . $index])) {
                    $bindYear = $_REQUEST['contract_bind_year' . $index];
                }
                if (isset($_REQUEST['contract_end_date' . $index])) {
                    $endDate = $this->formatDate($_REQUEST['contract_end_date' . $index]);
                }
                if (isset($_REQUEST['contract_description' . $index])) {
                    $description = $_REQUEST['contract_description' . $index];
                }
                if ($relId) {
                    $updatedContracts[$relId] = array(
                        'record_id' => $relId,
                        'contract_id' => $id,
                        'active' => $active,
                        'kronodoc_id' => $kronodocId,
                        'bind_year' => $bindYear,
                        'end_date' => $endDate,
                        'description' => $description,
                    );
                } else {
                    $newContracts[] = array(
                        'contract_id' => $id,
                        'active' => $active,
                        'kronodoc_id' => $kronodocId,
                        'bind_year' => $bindYear,
                        'end_date' => $endDate,
                        'description' => $description,
                    );
                }
            }
        }

/*$GLOBALS['log']->fatal('old: ' . print_r($existingContracts, true));
$GLOBALS['log']->fatal('upd: ' . print_r($updatedContracts, true));
$GLOBALS['log']->fatal('new: ' . print_r($newContracts, true));*/
        $toUpdate = array();
        $toDelete = array();
        foreach ($existingContracts as $oldData) {
            $key = $oldData['record_id'];
            if (!array_key_exists($key, $updatedContracts)) {
                $toDelete[] = array(
                    'id' => $oldData['record_id'],
                    'contract_id' => $oldData['contract_id'],
                );
                continue;
            }
            $newData = $updatedContracts[$key];
            if (
                $oldData['contract_id'] !== $newData['contract_id']
            ) {
                // Contract was changed, do not reuse the old relation record,insert new instead
                $toDelete[] = array(
                    'id' => $oldData['record_id'],
                    'contract_id' => $oldData['contract_id'],
                );
                $newContracts[] = $newData;
            } elseif (
                $oldData['active'] !== $newData['active'] ||
                $oldData['kronodoc_id'] !== $newData['kronodoc_id'] ||
                $oldData['bind_year'] !== $newData['bind_year'] ||
                $oldData['end_date'] !== $newData['end_date'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = array(
                    'new' => $newData,
                    'old' => $oldData,
                );
            }
            //else { $GLOBALS['log']->fatal('unchanged: ' . print_r($newData, true)); }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $data) {
            $query = 'DELETE FROM nlfbr_businessrelationships_aos_contracts_1_c WHERE id="' . $db->quote($data['id']) . '"';

            $auditData = array(
                'field_name' => 'contract_id',
                'data_type' => 'relate',
                'before' => $data['contract_id'],
                'after' => '',
            );

            //$GLOBALS['log']->fatal('delrun: ' . $query);
            $result = $db->query($query);
            $db->save_audit_records($bean, $auditData);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE nlfbr_businessrelationships_aos_contracts_1_c ' .
                'SET active=' . ($data['new']['active'] ? '1' : '0') . ', ' .
                'kronodoc_id="' . $db->quote($data['new']['kronodoc_id']) . '", ' .
                'year="' . $db->quote($data['new']['bind_year']) . '", ' .
                ($data['new']['end_date'] ? ('end_date="' . $db->quote($data['new']['end_date']) . '"') : 'end_date=NULL') . ', ' . 
                'description="' . $db->quote($data['new']['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['new']['record_id']) . '"';

            $auditData = array();
            if ($data['old']['active'] !== $data['new']['active']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['old']['contract_id'] . '|contract_active',
                    'data_type' => 'bool',
                    'before' => $data['old']['active'] ? '1' : '0',
                    'after' => $data['new']['active'] ? '1' : '0',
                );
            }
            if ($data['old']['kronodoc_id'] !== $data['new']['kronodoc_id']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['old']['contract_id'] . '|contract_kronodoc_id',
                    'data_type' => 'varchar',
                    'before' => $data['old']['kronodoc_id'],
                    'after' => $data['new']['kronodoc_id'],
                );
            }
            if ($data['old']['bind_year'] !== $data['new']['bind_year']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['old']['contract_id'] . '|contract_bind_year',
                    'data_type' => 'varchar',
                    'before' => $data['old']['bind_year'],
                    'after' => $data['new']['bind_year'],
                );
            }
            if ($data['old']['end_date'] !== $data['new']['end_date']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['old']['contract_id'] . '|contract_end_date',
                    'data_type' => 'varchar',
                    'before' => $data['old']['end_date'] ? $data['old']['end_date'] : 'NULL',
                    'after' => $data['new']['end_date'] ? $data['new']['end_date'] : 'NULL',
                );
            }
            if ($data['old']['description'] !== $data['new']['description']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['old']['contract_id'] . '|contract_description',
                    'data_type' => 'varchar',
                    'before' => $data['old']['description'],
                    'after' => $data['new']['description'],
                );
            }

            //$GLOBALS['log']->fatal('updrun: ' . $query);
            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

       foreach ($newContracts as $data) {
            $query = 'INSERT INTO nlfbr_businessrelationships_aos_contracts_1_c ' .
                '(id, nlfbr_busi9351onships_ida, nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb, active, kronodoc_id, year, end_date, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                '"' . $db->quote($data['contract_id']) . '", ' .
                ($data['active'] ? '1' : '0') . ', ' .
                '"' . $db->quote($data['kronodoc_id']) . '", ' .
                '"' . $db->quote($data['bind_year']) . '", ' .
                ($data['end_date'] ? ('"' . $db->quote($data['end_date']) . '"') : 'NULL') . ', ' . 
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            $auditData = array(
                array(
                    'field_name' => 'contract_id',
                    'data_type' => 'relate',
                    'before' => '',
                    'after' => $data['contract_id'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['contract_id'] . '|contract_active',
                    'data_type' => 'bool',
                    'before' => '',
                    'after' => $data['active'] ? '1' : '0',
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['contract_id'] . '|contract_kronodoc_id',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['kronodoc_id'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['contract_id'] . '|contract_bind_year',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['bind_year'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['contract_id'] . '|contract_end_date',
                    'data_type' => 'date',
                    'before' => '',
                    'after' => $data['end_date'] ? $data['end_date'] : 'NULL',
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'contract_id|' . $data['contract_id'] . '|contract_description',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['description'],
                ),
            );

            //$GLOBALS['log']->fatal('insrun: ' . $query);
            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

    }

    // Copied from SugarFieldDatetime::save
    private function formatDate($date) {
        global $timedate;

        if (!$date) {
            return '';
        }

        $offset = strlen(trim($date)) < 11 ? false : true;
        if ($timedate->check_matching_format($date, TimeDate::DB_DATE_FORMAT)) {
            return $date;
        } else {
            return $timedate->to_db_date($date, $offset);
        }
    }

    function setFinnaData($bean, $event, $arguments) {
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'nlfbr_BusinessRelationships') {
            return;
        }

        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'Save') {
            return;
        }

        $this->setFinnaViewData($bean);
        $this->setFinnaDataSourceData($bean);
        $this->setFinnaLinkData($bean);
    }

    private function setFinnaViewData($bean) {
        $helper = new BusinessRelationshipFinnaViewHelper();
        $existingViews = $helper->getViewData($bean->id);

        $newViews = array();
        $updatedViews = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('finna_view_id')) === 'finna_view_id') {
                $index = substr($field, strlen('finna_view_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['finna_view_id' . $index]) || !array_key_exists('finna_view_status' . $index, $_REQUEST)) {
                continue;
            }

            $id = $_REQUEST['finna_view_id' . $index];
            $hasAdminAccess = false;
            $viewStatus = '';
            $viewUrl = '';
            $description = '';
            if (isset($_REQUEST['finna_view_admin_access' . $index])) {
                $hasAdminAccess = true;
            }
            if (isset($_REQUEST['finna_view_status' . $index])) {
                $viewStatus = $_REQUEST['finna_view_status' . $index];
            }
            if (isset($_REQUEST['finna_view_url' . $index])) {
                $viewUrl = $_REQUEST['finna_view_url' . $index];
            }
            if (isset($_REQUEST['finna_view_description' . $index])) {
                $description = $_REQUEST['finna_view_description' . $index];
            }
            if ($id) {
                $updatedViews[$id] = array(
                    'record_id' => $id,
                    'admin_access' => $hasAdminAccess,
                    'view_status' => $viewStatus,
                    'view_url' => $viewUrl,
                    'description' => $description,
                );
            } else {
                $newViews[] = array(
                    'admin_access' => $hasAdminAccess,
                    'view_status' => $viewStatus,
                    'view_url' => $viewUrl,
                    'description' => $description,
                );
            }
        }

        $toUpdate = array();
        $toDelete = array();
        foreach ($existingViews as $oldData) {
            $key = $oldData['record_id'];
            if (!array_key_exists($key, $updatedViews)) {
                $toDelete[] = array(
                    'id' => $oldData['record_id'],
                    'view_url' => $oldData['view_url'],
                );
                continue;
            }
            $newData = $updatedViews[$key];
            if (
                $oldData['admin_access'] !== $newData['admin_access'] ||
                $oldData['view_status'] !== $newData['view_status'] ||
                $oldData['view_url'] !== $newData['view_url'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = array(
                    'new' => $newData,
                    'old' => $oldData
                );
            }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $data) {
            $query = 'DELETE FROM nlfbr_businessrelationships_finna_views WHERE id="' . $db->quote($data['id']) . '"';

            $auditData = array(
                'field_name' => 'finna_view_url',
                'data_type' => 'varchar',
                'before' => $data['view_url'],
                'after' => '',
            );

            $result = $db->query($query);
            $db->save_audit_records($bean, $auditData);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE nlfbr_businessrelationships_finna_views ' .
                'SET admin_access=' . ($data['new']['admin_access'] ? '1' : '0') . ', ' .
                'view_status="' . $db->quote($data['new']['view_status']) . '", ' .
                'view_url="' . $db->quote($data['new']['view_url']) . '", ' .
                'description="' . $db->quote($data['new']['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['new']['record_id']) . '"';

            $auditData = array();
            if ($data['old']['view_url'] !== $data['new']['view_url']) {
                $auditData[] = array(
                    'field_name' => 'finna_view_url',
                    'data_type' => 'varchar',
                    'before' => $data['old']['view_url'],
                    'after' => $data['new']['view_url'],
                );
            }
            if ($data['old']['admin_access'] !== $data['new']['admin_access']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['old']['view_url'] . '|finna_view_data_access',
                    'data_type' => 'bool',
                    'before' => $data['old']['admin_access'] ? '1' : '0',
                    'after' => $data['new']['admin_access'] ? '1' : '0',
                );
            }
            if ($data['old']['view_status'] !== $data['new']['view_status']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['old']['view_url'] . '|finna_view_status',
                    'data_type' => 'enum',
                    'before' => $data['old']['view_status'],
                    'after' => $data['new']['view_status'],
                );
            }
            if ($data['old']['description'] !== $data['new']['description']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['old']['view_url'] . '|finna_view_description',
                    'data_type' => 'text',
                    'before' => $data['old']['description'],
                    'after' => $data['new']['description'],
                );
            }

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

       foreach ($newViews as $data) {
            $query = 'INSERT INTO nlfbr_businessrelationships_finna_views ' .
                '(id, businessrelationship_id, admin_access, view_status, view_url, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                ($data['admin_access'] ? '1' : '0') . ', ' .
                '"' . $db->quote($data['view_status']) . '", ' .
                '"' . $db->quote($data['view_url']) . '", ' .
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            $auditData = array(
                array(
                    'field_name' => 'finna_view_url',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['view_url'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['view_url'] . '|finna_view_data_access',
                    'data_type' => 'bool',
                    'before' => '',
                    'after' => $data['admin_access'] ? '1' : '0',
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['view_url'] . '|finna_view_status',
                    'data_type' => 'enum',
                    'before' => '',
                    'after' => $data['view_status'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_view_url|' . $data['view_url'] . '|finna_view_description',
                    'data_type' => 'text',
                    'before' => '',
                    'after' => $data['description'],
                ),
            );

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

    }

    private function setFinnaDataSourceData($bean) {
        $helper = new BusinessRelationshipFinnaDataSourceHelper();
        $existingSources = $helper->getSourceData($bean->id);

        $newSources = array();
        $updatedSources = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('finna_data_source_id')) === 'finna_data_source_id') {
                $index = substr($field, strlen('finna_data_source_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['finna_data_source_id' . $index]) || !array_key_exists('finna_data_source_name' . $index, $_REQUEST)) {
                continue;
            }

            $id = $_REQUEST['finna_data_source_id' . $index];
            $hasRestrictedMetadata = false;
            $name = '';
            $email = '';
            $description = '';
            $systems = array();
            $formats = array();
            if (isset($_REQUEST['finna_data_source_restricted_metadata' . $index])) {
                $hasRestrictedMetadata = true;
            }
            if (isset($_REQUEST['finna_data_source_name' . $index])) {
                $name = $_REQUEST['finna_data_source_name' . $index];
            }
            if (isset($_REQUEST['finna_data_source_backend_system' . $index])) {
                $systems = $_REQUEST['finna_data_source_backend_system' . $index];
            }
            if (isset($_REQUEST['finna_data_source_harvesting_format' . $index])) {
                $formats = $_REQUEST['finna_data_source_harvesting_format' . $index];
            }
            if (isset($_REQUEST['finna_data_source_contact_email' . $index])) {
                $email = $_REQUEST['finna_data_source_contact_email' . $index];
            }
            if (isset($_REQUEST['finna_data_source_description' . $index])) {
                $description = $_REQUEST['finna_data_source_description' . $index];
            }
            if (!$name) {
                continue;
            }

            if ($id) {
                $updatedSources[$id] = array(
                    'record_id' => $id,
                    'name' => $name,
                    'backend_system' => encodeMultienumValue($systems),
                    'harvesting_format' => encodeMultienumValue($formats),
                    'contact_email' => $email,
                    'restricted_metadata' => $hasRestrictedMetadata,
                    'description' => $description,
                );
            } else {
                $newSources[] = array(
                    'name' => $name,
                    'backend_system' => encodeMultienumValue($systems),
                    'harvesting_format' => encodeMultienumValue($formats),
                    'contact_email' => $email,
                    'restricted_metadata' => $hasRestrictedMetadata,
                    'description' => $description,
                );
            }
        }

        $toUpdate = array();
        $toDelete = array();
        foreach ($existingSources as $oldData) {
            $key = $oldData['record_id'];
            if (!array_key_exists($key, $updatedSources)) {
                $toDelete[] = array(
                    'id' => $oldData['record_id'],
                    'name' => $oldData['source_name'],
                );
                continue;
            }
            $newData = $updatedSources[$key];
            if (
                $oldData['source_name'] !== $newData['name'] ||
                encodeMultienumValue($oldData['backend_system']) !== $newData['backend_system'] ||
                encodeMultienumValue($oldData['harvesting_format']) !== $newData['harvesting_format'] ||
                $oldData['contact_email'] !== $newData['contact_email'] ||
                $oldData['restricted_metadata'] !== $newData['restricted_metadata'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = array(
                    'new' => $newData,
                    'old' => $oldData,
                );
            }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $data) {
            $query = 'DELETE FROM nlfbr_businessrelationships_finna_sources WHERE id="' . $db->quote($data['id']) . '"';

            $auditData = array(
                'field_name' => 'finna_data_source',
                'data_type' => 'varchar',
                'before' => $data['name'],
                'after' => '',
            );

            $result = $db->query($query);
            $db->save_audit_records($bean, $auditData);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE nlfbr_businessrelationships_finna_sources ' .
                'SET source_name="' . $db->quote($data['new']['name']) . '", ' .
                'backend_system="' . $db->quote($data['new']['backend_system']) . '", ' .
                'harvesting_format="' . $db->quote($data['new']['harvesting_format']) . '", ' .
                'contact_email="' . $db->quote($data['new']['contact_email']) . '", ' .
                'restricted_metadata=' . ($data['new']['restricted_metadata'] ? '1' : '0') . ', ' .
                'description="' . $db->quote($data['new']['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['new']['record_id']) . '"';

            $auditData = array();
            if ($data['old']['source_name'] !== $data['new']['name']) {
                $auditData[] = array(
                    'field_name' => 'finna_data_source',
                    'data_type' => 'varchar',
                    'before' => $data['old']['source_name'],
                    'after' => $data['new']['name'],
                );
            }
            if (encodeMultienumValue($data['old']['backend_system']) !== $data['new']['backend_system']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['new']['name'] . '|finna_source_backend_system',
                    'data_type' => 'enum',
                    'before' => encodeMultienumValue($data['old']['backend_system']),
                    'after' => $data['new']['backend_system'],
                );
            }
            if (encodeMultienumValue($data['old']['harvesting_format']) !== $data['new']['harvesting_format']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['new']['name'] . '|finna_source_harvesting_format',
                    'data_type' => 'enum',
                    'before' => encodeMultienumValue($data['old']['harvesting_format']),
                    'after' => $data['new']['harvesting_format'],
                );
            }
            if ($data['old']['contact_email'] !== $data['new']['contact_email']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['new']['name'] . '|finna_source_contact_email',
                    'data_type' => 'varchar',
                    'before' => $data['old']['contact_email'],
                    'after' => $data['new']['contact_email'],
                );
            }
            if ($data['old']['restricted_metadata'] !== $data['new']['restricted_metadata']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['new']['name'] . '|finna_source_restricted_metadata',
                    'data_type' => 'bool',
                    'before' => $data['old']['restricted_metadata'] ? '1' : '0',
                    'after' => $data['new']['restricted_metadata'] ? '1' : '0',
                );
            }
            if ($data['old']['description'] !== $data['new']['description']) {
                $auditData[] = array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['new']['name'] . '|finna_source_description',
                    'data_type' => 'text',
                    'before' => $data['old']['description'],
                    'after' => $data['new']['description'],
                );
            }

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }

        }

       foreach ($newSources as $data) {
            $query = 'INSERT INTO nlfbr_businessrelationships_finna_sources ' .
                '(id, businessrelationship_id, source_name, backend_system, harvesting_format, contact_email, restricted_metadata, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                '"' . $db->quote($data['name']) . '", ' .
                '"' . $db->quote($data['backend_system']) . '", ' .
                '"' . $db->quote($data['harvesting_format']) . '", ' .
                '"' . $db->quote($data['contact_email']) . '", ' .
                ($data['restricted_metadata'] ? '1' : '0') . ', ' .
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            $auditData = array(
                array(
                    'field_name' => 'finna_data_source',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['name'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['name'] . '|finna_source_backend_system',
                    'data_type' => 'enum',
                    'before' => '',
                    'after' => $data['backend_system'],
                ),
                 array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['name'] . '|finna_source_harvesting_format',
                    'data_type' => 'enum',
                    'before' => '',
                    'after' => $data['harvesting_format'],
                ),
                 array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['name'] . '|finna_source_contact_email',
                    'data_type' => 'varchar',
                    'before' => '',
                    'after' => $data['contact_email'],
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['name'] . '|finna_source_restricted_metadata',
                    'data_type' => 'bool',
                    'before' => '',
                    'after' => $data['restricted_metadata'] ? '1' : '0',
                ),
                array(
                    'field_name' => CustomAudit::COMPOSITE_FIELD_PREFIX . 'finna_data_source|' . $data['name'] . '|finna_source_description',
                    'data_type' => 'text',
                    'before' => '',
                    'after' => $data['description'],
                ),
            );

            $result = $db->query($query);
            foreach ($auditData as $auditRow) {
                $db->save_audit_records($bean, $auditRow);
            }
        }

        $this->updateAccountBackendSystemData($bean);
    }

    const FIELD_ACCOUNT_ID = 'accounts_nlfbr_businessrelationships_1accounts_ida';
    const FIELD_ACCOUNT_BACKEND_SYSTEM_REL = 'accounts_nlfbs_backendsystems_1';

    private function updateAccountBackendSystemData($bean)
    {
       /*if (!$bean->load_relationship(self::FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL)) {
           return;
       }

       $brSystems = $bean->{self::FIELD_BUSINESS_RELATIONSHIP_BACKEND_SYSTEM_REL}->get(true);
       */
       $brSystems = getBackendSystemsRelatedToBusinessRelationship($bean->id);

       if (empty($brSystems)) {
           return;
       }

       $accountId = $bean->{self::FIELD_ACCOUNT_ID};
       $account = new Account();
       $account->retrieve($accountId);
       if ($account === null) {
           if (isset($GLOBALS['log'])) {
               $GLOBALS['log']->debug('No account related to business relationship: ' . $bean->id);
           }
           return;
       }

       if (!$account->load_relationship(self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL)) {
           return;
       }

       $accountSystems = $account->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->get(true);

       foreach ($brSystems as $systemId) {
           if (!in_array($systemId, $accountSystems)) {
               $account->{self::FIELD_ACCOUNT_BACKEND_SYSTEM_REL}->add($systemId, array());
           }
       }

    }

    private function setFinnaLinkData($bean) {
        $helper = new BusinessRelationshipFinnaLinkHelper();
        $existingLinks = $helper->getLinkData($bean->id);

        $newLinks = array();
        $updatedLinks = array();
        foreach (array_keys($_REQUEST) as $field) {
            $index = '';
            if (substr($field, 0, strlen('finna_link_id')) === 'finna_link_id') {
                $index = substr($field, strlen('finna_link_id'));

            }
            if ($index === '') {
                continue;
            }

            if (!isset($_REQUEST['finna_link_id' . $index]) || !array_key_exists('finna_link_url' . $index, $_REQUEST)) {
                continue;
            }

            $id = $_REQUEST['finna_link_id' . $index];
            $linkUrl = '';
            $description = '';
            if (isset($_REQUEST['finna_link_url' . $index])) {
                $linkUrl = $_REQUEST['finna_link_url' . $index];
            }
            if (isset($_REQUEST['finna_link_description' . $index])) {
                $description = $_REQUEST['finna_link_description' . $index];
            }
            if ($id) {
                $updatedLinks[$id] = array(
                    'record_id' => $id,
                    'link_url' => $linkUrl,
                    'description' => $description,
                );
            } else {
                $newLinks[] = array(
                    'link_url' => $linkUrl,
                    'description' => $description,
                );
            }
        }

        $toUpdate = array();
        $toDelete = array();
        foreach ($existingLinks as $oldData) {
            $key = $oldData['record_id'];
            if (!array_key_exists($key, $updatedLinks)) {
                $toDelete[] = $oldData['record_id'];
                continue;
            }
            $newData = $updatedLinks[$key];
            if (
                $oldData['link_url'] !== $newData['link_url'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = $newData;
            }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $id) {
            $query = 'DELETE FROM nlfbr_businessrelationships_finna_links WHERE id="' . $db->quote($id) . '"';

            $result = $db->query($query);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE nlfbr_businessrelationships_finna_links ' .
                'SET link_url="' . $db->quote($data['link_url']) . '", ' .
                'description="' . $db->quote($data['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['record_id']) . '"';

            $result = $db->query($query);
        }

       foreach ($newLinks as $data) {
            $query = 'INSERT INTO nlfbr_businessrelationships_finna_links ' .
                '(id, businessrelationship_id, link_url, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                '"' . $db->quote($data['link_url']) . '", ' .
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            $result = $db->query($query);
        }

    }

}
