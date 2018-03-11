<?php
// created: 2017-03-07 23:06:24
$dictionary["accounts_aos_contracts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_aos_contracts_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Contracts',
      'rhs_table' => 'aos_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_aos_contracts_1_c',
      'join_key_lhs' => 'accounts_aos_contracts_1accounts_ida',
      'join_key_rhs' => 'accounts_aos_contracts_1aos_contracts_idb',
    ),
  ),
  'table' => 'accounts_aos_contracts_1_c',
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
      'name' => 'accounts_aos_contracts_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_aos_contracts_1aos_contracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_aos_contracts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_aos_contracts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_aos_contracts_1accounts_ida',
        1 => 'accounts_aos_contracts_1aos_contracts_idb',
      ),
    ),
  ),
);