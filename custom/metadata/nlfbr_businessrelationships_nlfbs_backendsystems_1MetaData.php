<?php
// created: 2017-07-07 18:01:23
$dictionary["nlfbr_businessrelationships_nlfbs_backendsystems_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfbr_businessrelationships_nlfbs_backendsystems_1' => 
    array (
      'lhs_module' => 'nlfbr_BusinessRelationships',
      'lhs_table' => 'nlfbr_businessrelationships',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfbs_BackendSystems',
      'rhs_table' => 'nlfbs_backendsystems',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1_c',
      'join_key_lhs' => 'nlfbr_busib52fonships_ida',
      'join_key_rhs' => 'nlfbr_busi06f0systems_idb',
    ),
  ),
  'table' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1_c',
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
      'name' => 'nlfbr_busib52fonships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfbr_busi06f0systems_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfbr_busib52fonships_ida',
        1 => 'nlfbr_busi06f0systems_idb',
      ),
    ),
  ),
);