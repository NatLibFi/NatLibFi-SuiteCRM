<?php
$module_name = 'nlfro_Roles';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'role_c',
            'studio' => 'visible',
            'label' => 'LBL_ROLES_ROLE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'contacts_nlfro_roles_1_name',
          ),
          1 => 
          array (
            'name' => 'nlfro_roles_nlfwg_working_groups_enum',
            'label' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
            'displayParams' => 
            array (
              'idName' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nlfro_roles_accounts_enum',
            'label' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
            'displayParams' => 
            array (
              'idName' => 'accounts_nlfro_roles_1accounts_ida',
            ),
          ),
          1 => 
          array (
            'name' => 'nlfbr_businessrelationships_nlfro_roles_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nlfal_alliances_nlfro_roles_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
