<?php
// created: 2016-12-27 14:48:00
$dictionary["accounts_nlfbr_businessrelationships_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_nlfbr_businessrelationships_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfbr_BusinessRelationships',
      'rhs_table' => 'nlfbr_businessrelationships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_nlfbr_businessrelationships_1_c',
      'join_key_lhs' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
      'join_key_rhs' => 'accounts_n824donships_idb',
    ),
  ),
  'table' => 'accounts_nlfbr_businessrelationships_1_c',
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
      'name' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_n824donships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_nlfbr_businessrelationships_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_nlfbr_businessrelationships_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_nlfbr_businessrelationships_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_nlfbr_businessrelationships_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_n824donships_idb',
      ),
    ),
  ),
);