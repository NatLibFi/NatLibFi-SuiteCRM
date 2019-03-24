<?php
$module_name = 'nlfbs_BackendSystems';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'OHJELMISTOTOIMITTAJA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OHJELMISTOTOIMITTAJA',
    'width' => '10%',
  ),
  'TYYPPI_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TYYPPI',
    'width' => '10%',
  ),
  'WWW_C' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_WWW',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
);
?>
