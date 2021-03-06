<?php
// created: 2016-12-27 15:00:02
$dictionary["nlfse_services_nlfbr_businessrelationships_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfse_services_nlfbr_businessrelationships_1' => 
    array (
      'lhs_module' => 'nlfse_Services',
      'lhs_table' => 'nlfse_services',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfbr_BusinessRelationships',
      'rhs_table' => 'nlfbr_businessrelationships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfse_services_nlfbr_businessrelationships_1_c',
      'join_key_lhs' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
      'join_key_rhs' => 'nlfse_serva51aonships_idb',
    ),
  ),
  'table' => 'nlfse_services_nlfbr_businessrelationships_1_c',
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
      'name' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfse_serva51aonships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfse_services_nlfbr_businessrelationships_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfse_services_nlfbr_businessrelationships_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'nlfse_services_nlfbr_businessrelationships_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfse_serva51aonships_idb',
      ),
    ),
  ),
);