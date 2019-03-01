<?php
// created: 2017-03-09 12:44:28
$dictionary["nlfwg_workinggroups_nlfro_roles_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'nlfwg_workinggroups_nlfro_roles_1' => 
    array (
      'lhs_module' => 'nlfwg_WorkingGroups',
      'lhs_table' => 'nlfwg_workinggroups',
      'lhs_key' => 'id',
      'rhs_module' => 'nlfro_Roles',
      'rhs_table' => 'nlfro_roles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'nlfwg_workinggroups_nlfro_roles_1_c',
      'join_key_lhs' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
      'join_key_rhs' => 'nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb',
    ),
  ),
  'table' => 'nlfwg_workinggroups_nlfro_roles_1_c',
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
      'name' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'nlfwg_workinggroups_nlfro_roles_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'nlfwg_workinggroups_nlfro_roles_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'nlfwg_workinggroups_nlfro_roles_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'nlfwg_workinggroups_nlfro_roles_1nlfro_roles_idb',
      ),
    ),
  ),
);