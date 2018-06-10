<?php
$module_name = 'nlfal_Alliances';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SEKTORIT_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEKTORIT',
    'width' => '10%',
  ),
  'ALLIANCE_LEADER_NAME' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'detailview' => false,
      'editview' => false,
    ),
    'label' => 'LBL_ALLIANCE_LEADER_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'MEMBER_COUNT' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_MEMBER_COUNT',
    'width' => '10%',
  ),
  'ALLIANCE_SERVICE_NAMES' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'detailview' => false,
      'editview' => false,
      'listview' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_ALLIANCE_SERVICES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'width' => '10%',
  ),
);
?>
