<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/nlfal_Alliances/nlfal_Alliances.php';
require_once 'modules/nlfbs_BackendSystems/nlfbs_BackendSystems.php';
require_once 'modules/AOS_Contracts/AOS_Contracts.php';
class BusinessRelationshipProcessRecordHook
{
    const TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS = 'nlfbr_businessrelationships_aos_contracts_1_c';
    const FIELD_BUSINESS_RELATIONSHIP_ID = 'nlfbr_busi9351onships_ida';
    const FIELD_CONTRACT_COUNT = 'contract_count_c';

    function setContractCount($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];
        $query = 'select count(id) from ' . self::TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS .
            ' WHERE ' . self::FIELD_BUSINESS_RELATIONSHIP_ID . '="' . $db->quote($id) . '" ' .
            ' AND deleted=0';

        $count = $db->getOne($query);

        $bean->{self::FIELD_CONTRACT_COUNT} = $count;
    }

    function setHasActiveContract($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];
        $query = 'select id from ' . self::TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS .
            ' WHERE ' . self::FIELD_BUSINESS_RELATIONSHIP_ID . '="' . $db->quote($id) . '" ' .
            ' AND active=1 ' .
            ' AND deleted=0 '.
            ' LIMIT 1';

        $result = $db->query($query);

        if ($db->fetchByAssoc($result)) {
            $bean->{'open_only_has_active_contract'} = true;
        }

    }

    const FIELD_ALLIANCE_IDS = 'nlfbr_businessrelationships_account_alliances';
    const FIELD_ALLIANCE_NAMES = 'alliance_names';
    function setAllianceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $contactRoles = null;
        // When in Contact's view, keep contact role (needed for Contact subpanel)
        if (isset($_REQUEST['module']) && $_REQUEST['module'] === 'Contacts') {
            $contactRoles = $bean->{'nlfbr_businessrelationships_contacts_1_role'};
        }

        $bean->retrieve();

        if ($contactRoles) {
            $bean->{'nlfbr_businessrelationships_contacts_1_role'} = $contactRoles;
        }

        $allianceIds = $bean->{self::FIELD_ALLIANCE_IDS};
        if (!$allianceIds) {
            return;
        }

        $allianceIds = unencodeMultienum($allianceIds);

        $allianceNames = '';

        foreach ($allianceIds as $allianceId) {
            $alliance = new nlfal_Alliances();
            $alliance->retrieve($allianceId);

            if (!$alliance) {
                continue;
            }

            if (!$alliance->name) {
                continue;
            }

            if ($allianceNames !== '') {
                $allianceNames .= ', '; // TODO: i18n this
            }
            $allianceLink = 'index.php?module=nlfal_Alliances&action=DetailView&record=' . htmlentities($allianceId);
            $allianceNames .= '<a href="' . ajaxLink($allianceLink) . '">' . $alliance->name . '</a>';
        }

        $bean->{self::FIELD_ALLIANCE_NAMES} = $allianceNames;
    }

    const FIELD_ACCOUNT_NAME = 'accounts_nlfbr_businessrelationships_1_name';
    const FIELD_SERVICE_NAME = 'nlfse_services_nlfbr_businessrelationships_1_name';
    const NAME_PART_SEPARATOR = '-';

    function setNameWithAccountNameFirst($bean, $event, $arguments)
    {
        $name = $bean->{self::FIELD_ACCOUNT_NAME} . self::NAME_PART_SEPARATOR . $bean->{self::FIELD_SERVICE_NAME};
        $bean->{'name_account_name_first'} = $name;
    }

    const FIELD_BACKEND_SYSTEMS_NAMES = 'backend_system_names';
    function setBackendSystemNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT backend_system ' .
            'FROM nlfbr_businessrelationships_data_sources ' .
            'WHERE businessrelationship_id="' . $db->quote($id) . '" ' .
            'AND deleted=0';

        $result = $db->query($query);

        $systemIds = array();
        while ($row = $db->fetchByAssoc($result) ) {
            $systemIds = array_merge($systemIds, unencodeMultienum($row['backend_system']));
        }
        $systemIds = array_unique($systemIds);

        $systemNames = '';

        foreach ($systemIds as $systemId) {
            $system = new nlfbs_BackendSystems();
            $system->retrieve($systemId);

            if (!$system) {
                continue;
            }

            if (!$system->name) {
                continue;
            }

            if ($systemNames !== '') {
                $systemNames .= ', '; // TODO: i18n this
            }
            $systemNames .= $system->name;
        }

        $bean->{self::FIELD_BACKEND_SYSTEMS_NAMES} = $systemNames;
    }

    const FIELD_ACTIVE_CONTRACT_NAMES = 'active_contract_names';
    public function setActiveContractNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];
        $query = 'SELECT nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb AS contract_id from ' . self::TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS .
            ' WHERE ' . self::FIELD_BUSINESS_RELATIONSHIP_ID . '="' . $db->quote($id) . '" ' .
            ' AND active=1 ' .
            ' AND deleted=0 ';

        $result = $db->query($query);

        $contractIds = array();
        while ($row = $db->fetchByAssoc($result)) {
            $contractIds[] = $row['contract_id'];
        }

        $contractNames = '';
        foreach ($contractIds as $contractId) {
            $contract = new AOS_Contracts();
            $contract->retrieve($contractId);

            if (!$contract) {
                continue;
            }

            if (!$contract->name) {
                continue;
            }

            if ($contractNames !== '') {
                $contractNames .= ', '; // TODO: i18n this
            }
            $contractNames .= $contract->name;
        }

        $bean->{self::FIELD_ACTIVE_CONTRACT_NAMES} = $contractNames;
    }


}
