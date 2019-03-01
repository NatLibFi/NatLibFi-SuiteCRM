<?php
$listViewDefs ['AOS_Contracts'] = 
array (
  'NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_CONTRACT_NAME',
    'default' => true,
    'link' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_STATUS',
    'sortable' => false,
    'width' => '10%',
  ),
  'NLFSE_SERVICES_AOS_CONTRACTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SERVICE_NAME',
    'id' => 'NLFSE_SERVICES_AOS_CONTRACTS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'BUSINESSRELATIONSHIP_COUNT_C' => 
  array (
    'type' => 'int',
    'default' => true,
    'label' => 'LBL_BUSINESSRELATIONSHIP_COUNT_C',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'default' => true,
    'module' => 'Users',
    'id' => 'ASSIGNED_USER_ID',
    'link' => true,
  ),
  'START_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_START_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'END_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_END_DATE',
    'width' => '10%',
    'default' => true,
  ),
  'CONTRACT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT_TYPE',
    'width' => '10%',
  ),
  'SOVELLETTAVAT_LIITTEET_C' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SOVELLETTAVAT_LIITTEET',
    'width' => '10%',
  ),
  'RENEWAL_REMINDER_DATE' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_RENEWAL_REMINDER_DATE',
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
);
?>
