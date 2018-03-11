<?php
$module_name = 'nlfwg_WorkingGroups';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '30%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'WORKING_GROUP_SERVICE_NAMES' => 
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
  ),
  'WG_TYYPPI_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WG_TYYPPI',
    'width' => '10%',
  ),
  'WORKINGGROUP_STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_WORKINGGROUP_STATUS',
    'width' => '10%',
  ),
  'ALKU_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_ALKU',
    'width' => '10%',
  ),
  'LOPPU_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_LOPPU',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'link' => true,
    'type' => 'relate',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => false,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'URL_C' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_URL',
    'width' => '10%',
  ),
);
?>
