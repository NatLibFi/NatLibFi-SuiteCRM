<?php
$module_name = 'nlfro_Roles';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'accounts_nlfro_roles_1_name',
          ),
          1 => 
          array (
            'name' => 'nlfwg_workinggroups_nlfro_roles_1_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nlfbr_businessrelationships_nlfro_roles_1_name',
          ),
          1 => 
          array (
            'name' => 'nlfal_alliances_nlfro_roles_1_name',
          ),
        ),
      ),
    ),
  ),
);
?>
