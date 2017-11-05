<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

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

}
