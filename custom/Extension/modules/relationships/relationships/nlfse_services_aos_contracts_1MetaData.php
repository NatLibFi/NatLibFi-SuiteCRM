<?php
// created: 2017-02-25 00:30:42
$dictionary["nlfse_services_aos_contracts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfse_services_aos_contracts_1' => 
    array (
      'lhs_module' => 'nlfse_Services',
      'lhs_table' => 'nlfse_services',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Contracts',
      'rhs_table' => 'aos_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfse_services_aos_contracts_1_c',
      'join_key_lhs' => 'nlfse_services_aos_contracts_1nlfse_services_ida',
      'join_key_rhs' => 'nlfse_services_aos_contracts_1aos_contracts_idb',
    ),
  ),
  'table' => 'nlfse_services_aos_contracts_1_c',
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
      'name' => 'nlfse_services_aos_contracts_1nlfse_services_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfse_services_aos_contracts_1aos_contracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfse_services_aos_contracts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfse_services_aos_contracts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'nlfse_services_aos_contracts_1nlfse_services_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'nlfse_services_aos_contracts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfse_services_aos_contracts_1aos_contracts_idb',
      ),
    ),
  ),
);