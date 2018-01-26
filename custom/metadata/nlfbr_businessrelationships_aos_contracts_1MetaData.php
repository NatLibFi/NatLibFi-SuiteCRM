<?php
// created: 2017-02-21 22:28:24
$dictionary["nlfbr_businessrelationships_aos_contracts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfbr_businessrelationships_aos_contracts_1' => 
    array (
      'lhs_module' => 'nlfbr_BusinessRelationships',
      'lhs_table' => 'nlfbr_businessrelationships',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Contracts',
      'rhs_table' => 'aos_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfbr_businessrelationships_aos_contracts_1_c',
      'join_key_lhs' => 'nlfbr_busi9351onships_ida',
      'join_key_rhs' => 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb',
    ),
  ),
  'table' => 'nlfbr_businessrelationships_aos_contracts_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'nlfbr_busi9351onships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    /*5 => 
    array (
      'name' => 'details',
      'type' => 'varchar',
      'len' => 200,
    ),*/
    5 =>
    array(
      'name' => 'active',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
    ),
    6 =>
    array (
      'name' => 'kronodoc_id',
      'type' => 'varchar',
      'len' => 200,
    ),
    7 =>
    array (
      'name' => 'year',
      'type' => 'varchar',
      'len' => 50,
    ),
    8 =>
    array(
      'name' => 'end_date',
      'type' => 'datetime',
    ),
    9 =>
    array (
      'name' => 'description',
      'type' => 'text',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfbr_businessrelationships_aos_contracts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfbr_businessrelationships_aos_contracts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfbr_busi9351onships_ida',
        1 => 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb',
      ),
    ),
  ),
);
