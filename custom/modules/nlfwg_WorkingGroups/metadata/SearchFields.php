<?php
// created: 2017-09-07 13:56:10
$searchFields['nlfwg_WorkingGroups'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'working_group_roles' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT wg.id FROM nlfwg_workinggroups wg JOIN nlfwg_workinggroups_contacts_1_c wg_rel ON wg.id=wg_rel.nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida WHERE wg.deleted=0 AND wg_rel.deleted=0 AND wg_rel.role REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_WORKING_GROUP_ROLES',
  ),
);