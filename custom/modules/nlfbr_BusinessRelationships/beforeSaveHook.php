<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Accounts/Account.php';
require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipContractHelper.php';

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
            $authorizations = '';
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
                if (isset($_REQUEST['contract_authorizations' . $index])) {
                    $authorizations = $_REQUEST['contract_authorizations' . $index];
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
                        'authorizations' => $authorizations,
                        'bind_year' => $bindYear,
                        'end_date' => $endDate,
                        'description' => $description,
                    );
                } else {
                    $newContracts[] = array(
                        'contract_id' => $id,
                        'active' => $active,
                        'kronodoc_id' => $kronodocId,
                        'authorizations' => $authorizations,
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
                $toDelete[] = $oldData['record_id'];
                continue;
            }
            $newData = $updatedContracts[$key];
            if (
                $oldData['contract_id'] !== $newData['contract_id']
            ) {
                // Contract was changed, do not reuse the old relation record,insert new instead
                $toDelete[] = $oldData['record_id'];
                $newContracts[] = $newData;
            } elseif (
                $oldData['active'] !== $newData['active'] ||
                $oldData['kronodoc_id'] !== $newData['kronodoc_id'] ||
                $oldData['authorizations'] !== $newData['authorizations'] ||
                $oldData['bind_year'] !== $newData['bind_year'] ||
                $oldData['end_date'] !== $newData['end_date'] ||
                $oldData['description'] !== $newData['description']
            ) {
                $toUpdate[] = $newData;
            }
            //else { $GLOBALS['log']->fatal('unchanged: ' . print_r($newData, true)); }
        }

        $db = $GLOBALS['db'];

        foreach ($toDelete as $id) {
            $query = 'DELETE FROM nlfbr_businessrelationships_aos_contracts_1_c WHERE id="' . $db->quote($id) . '"';

            //$GLOBALS['log']->fatal('delrun: ' . $query);
            $result = $db->query($query);
        }

        foreach ($toUpdate as $data) {
            $query = 'UPDATE nlfbr_businessrelationships_aos_contracts_1_c ' .
                'SET active=' . ($data['active'] ? '1' : '0') . ', ' .
                'kronodoc_id="' . $db->quote($data['kronodoc_id']) . '", ' .
                'authorizations="' . $db->quote($data['authorizations']) . '", ' .
                'year="' . $db->quote($data['bind_year']) . '", ' .
                ($data['end_date'] ? ('end_date="' . $db->quote($data['end_date']) . '"') : 'end_date=NULL') . ', ' . 
                'description="' . $db->quote($data['description']) . '", ' .
                'date_modified=NOW() ' .
                'WHERE id="' . $db->quote($data['record_id']) . '"';

            //$GLOBALS['log']->fatal('updrun: ' . $query);
            $result = $db->query($query);
        }

       foreach ($newContracts as $data) {
            $query = 'INSERT INTO nlfbr_businessrelationships_aos_contracts_1_c ' .
                '(id, nlfbr_busi9351onships_ida, nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb, active, kronodoc_id, authorizations, year, end_date, description, date_modified) ' .
                'VALUES(' .
                '"' . $db->quote(create_guid()) . '", ' .
                '"' . $db->quote($bean->id) . '", ' .
                '"' . $db->quote($data['contract_id']) . '", ' .
                ($data['active'] ? '1' : '0') . ', ' .
                '"' . $db->quote($data['kronodoc_id']) . '", ' .
                '"' . $db->quote($data['authorizations']) . '", ' .
                '"' . $db->quote($data['bind_year']) . '", ' .
                ($data['end_date'] ? ('"' . $db->quote($data['end_date']) . '"') : 'NULL') . ', ' . 
                '"' . $db->quote($data['description']) . '", ' .
                'NOW() )';

            //$GLOBALS['log']->fatal('insrun: ' . $query);
            $result = $db->query($query);
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

}
