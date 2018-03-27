<?php

if (!array_key_exists('nlfbr_BusinessRelationships', $moduleAssocFieldsArray)) {
    $moduleAssocFieldsArray['nlfbr_BusinessRelationships'] = array();
}

$moduleAssocFieldsArray['nlfbr_BusinessRelationships']['contract_id'] = array(
    'table_name' => 'aos_contracts',
    'select_field_name' => 'name',
    'select_field_join'  => 'id',
);
