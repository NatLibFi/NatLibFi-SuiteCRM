<?php
$module_name = 'nlfro_Roles';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ROLE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ROLES_ROLE',
    'width' => '10%',
  ),
  'CONTACTS_NLFRO_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_NLFRO_ROLES_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
    'id' => 'NLFWG_WORKINGGROUPS_NLFRO_ROLES_1NLFWG_WORKINGGROUPS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_NLFRO_ROLES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_NLFRO_ROLES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
