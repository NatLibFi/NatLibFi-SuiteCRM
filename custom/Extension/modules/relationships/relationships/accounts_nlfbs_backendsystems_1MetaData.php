<?php
// created: 2017-05-12 11:38:08
$dictionary["accounts_nlfbs_backendsystems_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_nlfbs_backendsystems_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfbs_BackendSystems',
      'rhs_table' => 'nlfbs_backendsystems',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_nlfbs_backendsystems_1_c',
      'join_key_lhs' => 'accounts_nlfbs_backendsystems_1accounts_ida',
      'join_key_rhs' => 'accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb',
    ),
  ),
  'table' => 'accounts_nlfbs_backendsystems_1_c',
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
      'name' => 'accounts_nlfbs_backendsystems_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_nlfbs_backendsystems_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_nlfbs_backendsystems_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_nlfbs_backendsystems_1accounts_ida',
        1 => 'accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb',
      ),
    ),
  ),
);