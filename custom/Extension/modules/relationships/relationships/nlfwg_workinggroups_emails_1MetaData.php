<?php
// created: 2017-04-22 23:49:14
$dictionary["nlfwg_workinggroups_emails_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfwg_workinggroups_emails_1' => 
    array (
      'lhs_module' => 'nlfwg_WorkingGroups',
      'lhs_table' => 'nlfwg_workinggroups',
      'lhs_key' => 'id',
      'rhs_module' => 'Emails',
      'rhs_table' => 'emails',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfwg_workinggroups_emails_1_c',
      'join_key_lhs' => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
      'join_key_rhs' => 'nlfwg_workinggroups_emails_1emails_idb',
    ),
  ),
  'table' => 'nlfwg_workinggroups_emails_1_c',
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
      'name' => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfwg_workinggroups_emails_1emails_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfwg_workinggroups_emails_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfwg_workinggroups_emails_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'nlfwg_workinggroups_emails_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfwg_workinggroups_emails_1emails_idb',
      ),
    ),
  ),
);