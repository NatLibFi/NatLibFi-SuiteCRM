<?php
// created: 2017-04-22 23:49:55
$dictionary["emails_nlfwg_workinggroups_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'emails_nlfwg_workinggroups_1' => 
    array (
      'lhs_module' => 'Emails',
      'lhs_table' => 'emails',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfwg_WorkingGroups',
      'rhs_table' => 'nlfwg_workinggroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'emails_nlfwg_workinggroups_1_c',
      'join_key_lhs' => 'emails_nlfwg_workinggroups_1emails_ida',
      'join_key_rhs' => 'emails_nlfwg_workinggroups_1nlfwg_workinggroups_idb',
    ),
  ),
  'table' => 'emails_nlfwg_workinggroups_1_c',
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
      'name' => 'emails_nlfwg_workinggroups_1emails_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'emails_nlfwg_workinggroups_1nlfwg_workinggroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'emails_nlfwg_workinggroups_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'emails_nlfwg_workinggroups_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'emails_nlfwg_workinggroups_1emails_ida',
        1 => 'emails_nlfwg_workinggroups_1nlfwg_workinggroups_idb',
      ),
    ),
  ),
);