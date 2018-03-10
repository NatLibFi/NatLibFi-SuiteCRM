<?php
// created: 2016-09-28 13:35:03
$dictionary["nlfse_services_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfse_services_accounts_1' => 
    array (
      'lhs_module' => 'nlfse_Services',
      'lhs_table' => 'nlfse_services',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfse_services_accounts_1_c',
      'join_key_lhs' => 'nlfse_services_accounts_1nlfse_services_ida',
      'join_key_rhs' => 'nlfse_services_accounts_1accounts_idb',
    ),
  ),
  'table' => 'nlfse_services_accounts_1_c',
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
      'name' => 'nlfse_services_accounts_1nlfse_services_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfse_services_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfse_services_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfse_services_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfse_services_accounts_1nlfse_services_ida',
        1 => 'nlfse_services_accounts_1accounts_idb',
      ),
    ),
  ),
);