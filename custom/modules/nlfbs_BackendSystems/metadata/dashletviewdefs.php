<?php
$dashletData['nlfbs_BackendSystemsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'ohjelmistotoimittaja_c' => 
  array (
    'default' => '',
  ),
);
$dashletData['nlfbs_BackendSystemsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ohjelmistotoimittaja_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OHJELMISTOTOIMITTAJA',
    'width' => '10%',
    'name' => 'ohjelmistotoimittaja_c',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
    'name' => 'description',
  ),
);
