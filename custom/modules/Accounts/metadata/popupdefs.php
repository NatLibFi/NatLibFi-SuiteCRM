<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'account_type' => 'accounts.account_type',
  'industry' => 'accounts.industry',
),
    'searchInputs' => array (
  0 => 'name',
  3 => 'account_type',
  4 => 'industry',
),
    'create' => '',/*array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),*/
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'name' => 'account_type',
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_INDUSTRY',
    'width' => '10%',
    'name' => 'industry',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'type' => 'multienum',
    'label' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
    'name' => 'account_type',
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'billing_address_city',
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => '7%',
    'label' => 'LBL_STATE',
    'default' => true,
    'name' => 'billing_address_state',
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_COUNTRY',
    'default' => true,
    'name' => 'billing_address_country',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
