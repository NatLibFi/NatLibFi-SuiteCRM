<?php
$module_name = 'nlfal_Alliances';
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
          0 => array(
            'name' => 'name1',
            'studio' => false,
            'label' => 'LBL_NAME_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status_c',
            'studio' => 'visible',
            'label' => 'LBL_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sektorit_c',
            'studio' => 'visible',
            'label' => 'LBL_SEKTORIT',
          ),
          1 => 'date_entered',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'alliance_leader_enum',
            'label' => 'LBL_ALLIANCE_LEADER_TITLE',
          ),
          1 => 'date_modified',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'member_count',
            'label' => 'LBL_MEMBER_COUNT',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
