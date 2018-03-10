<?php
// created: 2016-09-29 17:08:42
$dictionary["nlfal_alliances_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfal_alliances_accounts_1' => 
    array (
      'lhs_module' => 'nlfal_Alliances',
      'lhs_table' => 'nlfal_alliances',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfal_alliances_accounts_1_c',
      'join_key_lhs' => 'nlfal_alliances_accounts_1nlfal_alliances_ida',
      'join_key_rhs' => 'nlfal_alliances_accounts_1accounts_idb',
    ),
  ),
  'table' => 'nlfal_alliances_accounts_1_c',
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
      'name' => 'nlfal_alliances_accounts_1nlfal_alliances_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfal_alliances_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfal_alliances_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfal_alliances_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfal_alliances_accounts_1nlfal_alliances_ida',
        1 => 'nlfal_alliances_accounts_1accounts_idb',
      ),
    ),
  ),
);