<?php
$module_name = 'nlfbr_BusinessRelationships';
$listViewDefs [$module_name] = 
array (
  'OPEN_ONLY_HAS_ACTIVE_CONTRACT' => 
  array (
    'type' => 'bool',
    'studio' => 
    array (
      'listview' => false,
      'detailview' => false,
      'editview' => false,
      'searchview' => true,
    ),
    'label' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
    'width' => '5%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ALLIANCE_NAMES' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_ALLIANCE_NAMES',
    'width' => '10%',
    'default' => true,
  ),
  'ASIAKASSUHDE_C' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_ASIAKASSUHDE',
    'width' => '10%',
  ),
  'PALVELU_LIITTYMISEN_STATUS_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
    'width' => '10%',
  ),
  'PRODUCTION_DATE_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_PRODUCTION_DATE',
    'width' => '10%',
  ),
  'KOHDENNUS_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_KOHDENNUS',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'NFL_BUSINESS_RELATION_BEGINS_C' => 
  array (
    'type' => 'date',
    'default' => false,
    'label' => 'LBL_NFL_BUSINESS_RELATION_BEGINS',
    'width' => '10%',
  ),
  'COMMERCIAL' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_COMMERCIAL',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
);
?>
