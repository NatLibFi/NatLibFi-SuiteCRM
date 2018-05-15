<?php
// created: 2018-05-16 00:05:29
$dictionary["nlfbr_businessrelationships_leads_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfbr_businessrelationships_leads_1' => 
    array (
      'lhs_module' => 'nlfbr_BusinessRelationships',
      'lhs_table' => 'nlfbr_businessrelationships',
      'lhs_key' => 'id',
      'rhs_module' => 'Leads',
      'rhs_table' => 'leads',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfbr_businessrelationships_leads_1_c',
      'join_key_lhs' => 'nlfbr_busif7d0onships_ida',
      'join_key_rhs' => 'nlfbr_businessrelationships_leads_1leads_idb',
    ),
  ),
  'table' => 'nlfbr_businessrelationships_leads_1_c',
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
      'name' => 'nlfbr_busif7d0onships_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfbr_businessrelationships_leads_1leads_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfbr_businessrelationships_leads_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfbr_businessrelationships_leads_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'nlfbr_busif7d0onships_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'nlfbr_businessrelationships_leads_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfbr_businessrelationships_leads_1leads_idb',
      ),
    ),
  ),
);