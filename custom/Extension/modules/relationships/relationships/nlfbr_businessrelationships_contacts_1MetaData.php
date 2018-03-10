<?php
// created: 2017-05-14 18:54:48
$dictionary["nlfbr_businessrelationships_contacts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfbr_businessrelationships_contacts_1' => 
    array (
      'lhs_module' => 'nlfbr_BusinessRelationships',
      'lhs_table' => 'nlfbr_businessrelationships',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfbr_businessrelationships_contacts_1_c',
      'join_key_lhs' => 'nlfbr_busic409onships_ida',
      'join_key_rhs' => 'nlfbr_businessrelationships_contacts_1contacts_idb',
    ),
  ),
  'table' => 'nlfbr_businessrelationships_contacts_1_c',
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
      'name' => 'nlfbr_busic409onships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfbr_businessrelationships_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfbr_businessrelationships_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfbr_businessrelationships_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfbr_busic409onships_ida',
        1 => 'nlfbr_businessrelationships_contacts_1contacts_idb',
      ),
    ),
  ),
);