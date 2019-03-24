<?php
$module_name = 'nlfwg_WorkingGroups';
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
            'name' => 'workinggroup_status_c',
            'studio' => 'visible',
            'label' => 'LBL_WORKINGGROUP_STATUS',
          ),
        ),
        2 => 
        array (
          1 => 
          array (
            'name' => 'wg_tyyppi_c',
            'studio' => 'visible',
            'label' => 'LBL_WG_TYYPPI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'url_c',
            'label' => 'LBL_URL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'alku_c',
            'label' => 'LBL_ALKU',
          ),
          1 => 
          array (
            'name' => 'loppu_c',
            'label' => 'LBL_LOPPU',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
?>
