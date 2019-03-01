<?php
$dashletData['AOS_ContractsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'contract_type' => 
  array (
    'default' => '',
  ),
  'nlfse_services_aos_contracts_1_name' => 
  array (
    'default' => '',
  ),
  'status' => 
  array (
    'default' => '',
  ),
  'end_date' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['AOS_ContractsDashlet']['columns'] = array (
  'name' => 
  array (
    'type' => 'name',
    'width' => '25%',
    'label' => 'LBL_SERVICE_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'nlfse_services_aos_contracts_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SERVICE_NAME',
    'id' => 'NLFSE_SERVICES_AOS_CONTRACTS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'nlfse_services_aos_contracts_1_name',
  ),
  'status' => 
  array (
    'width' => '12%',
    'label' => 'LBL_STATUS',
    'default' => true,
    'name' => 'status',
  ),
  'assigned_user_name' => 
  array (
    'width' => '12%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'end_date' => 
  array (
    'width' => '12%',
    'label' => 'LBL_END_DATE',
    'default' => true,
    'name' => 'end_date',
  ),
  'start_date' => 
  array (
    'width' => '12%',
    'label' => 'LBL_START_DATE',
    'name' => 'start_date',
    'default' => false,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'name' => 'date_entered',
    'default' => false,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'contract_type' => 
  array (
    'type' => 'enum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_CONTRACT_TYPE',
    'width' => '10%',
    'name' => 'contract_type',
  ),
  'sovellettavat_liitteet_c' => 
  array (
    'type' => 'multienum',
    'default' => false,
    'studio' => 'visible',
    'label' => 'LBL_SOVELLETTAVAT_LIITTEET',
    'width' => '10%',
    'name' => 'sovellettavat_liitteet_c',
  ),
  'renewal_reminder_date' => 
  array (
    'width' => '15%',
    'label' => 'LBL_RENEWAL_REMINDER_DATE',
    'name' => 'renewal_reminder_date',
    'default' => false,
  ),
);
