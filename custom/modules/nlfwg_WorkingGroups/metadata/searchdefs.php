<?php
$module_name = 'nlfwg_WorkingGroups';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'working_group_service_names' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'detailview' => false,
          'editview' => false,
        ),
        'label' => 'LBL_WORKING_GROUP_SERVICES_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'working_group_service_names',
      ),
      'workinggroup_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_WORKINGGROUP_STATUS',
        'width' => '10%',
        'name' => 'workinggroup_status_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'working_group_service_names' => 
      array (
        'type' => 'varchar',
        'studio' => 
        array (
          'detailview' => false,
          'editview' => false,
        ),
        'label' => 'LBL_WORKING_GROUP_SERVICES_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'working_group_service_names',
      ),
      'workinggroup_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_WORKINGGROUP_STATUS',
        'width' => '10%',
        'name' => 'workinggroup_status_c',
      ),
      'wg_tyyppi_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_WG_TYYPPI',
        'width' => '10%',
        'name' => 'wg_tyyppi_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'working_group_roles' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_WORKING_GROUP_ROLES',
        'width' => '10%',
        'default' => true,
        'name' => 'working_group_roles',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
