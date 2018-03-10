<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContractProcessRecordHook
{
    const TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS = 'nlfbr_businessrelationships_aos_contracts_1_c';
    const FIELD_CONTRACT_ID = 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb';
    const FIELD_BUSINESS_RELATIONSHIP_COUNT = 'businessrelationship_count_c';

    function setBusinessRelationshipCount($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];
        $query = 'select count(id) from ' . self::TABLE_BUSINESS_RELATIONSHIPS_CONTRACTS .
            ' WHERE ' . self::FIELD_CONTRACT_ID . '="' . $db->quote($id) . '" ' .
            ' AND deleted=0';

        $count = $db->getOne($query);

        $bean->{self::FIELD_BUSINESS_RELATIONSHIP_COUNT} = $count;
    }

}
