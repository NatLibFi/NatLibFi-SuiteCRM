<?php
$popupMeta = array (
    'moduleMain' => 'nlfbr_BusinessRelationships',
    'varName' => 'nlfbr_BusinessRelationships',
    'orderBy' => 'nlfbr_businessrelationships.name',
    'whereClauses' => array (
  'accounts_nlfbr_businessrelationships_1_name' => 'nlfbr_businessrelationships.accounts_nlfbr_businessrelationships_1_name',
  'nlfse_services_nlfbr_businessrelationships_1_name' => 'nlfbr_businessrelationships.nlfse_services_nlfbr_businessrelationships_1_name',
  'assigned_user_id' => 'nlfbr_businessrelationships.assigned_user_id',
),
    'searchInputs' => array (
  4 => 'accounts_nlfbr_businessrelationships_1_name',
  5 => 'nlfse_services_nlfbr_businessrelationships_1_name',
  6 => 'assigned_user_id',
),
    'searchdefs' => array (
  'accounts_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_nlfbr_businessrelationships_1_name',
  ),
  'nlfse_services_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
