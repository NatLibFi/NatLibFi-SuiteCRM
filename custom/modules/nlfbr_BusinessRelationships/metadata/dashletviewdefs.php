<?php
$dashletData['nlfbr_BusinessRelationshipsDashlet']['searchFields'] = array (
  'accounts_nlfbr_businessrelationships_1_name' => 
  array (
    'default' => '',
  ),
  'nlfse_services_nlfbr_businessrelationships_1_name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['nlfbr_BusinessRelationshipsDashlet']['columns'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'width' => '40%',
    'label' => 'LBL_NAME',
    'default' => true,
    'name' => 'name',
  ),
  'accounts_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_nlfbr_businessrelationships_1_name',
  ),
  'nlfse_services_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
