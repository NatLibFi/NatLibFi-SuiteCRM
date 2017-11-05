<?php
$listViewDefs ['Accounts'] = 
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
    'width' => '10%',
    'default' => false,
  ),
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
  ),
  'PARENT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => true,
  ),
  'INDUSTRY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_INDUSTRY',
    'default' => true,
  ),
  'ACCOUNT_TYPE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_TYPE',
    'default' => true,
  ),
  'HALLINNONALA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_HALLINNONALA',
    'width' => '10%',
  ),
  'ACCOUNT_SERVICE_NAMES' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'detailview' => false,
      'editview' => false,
      'listview' => true,
      'searchview' => false,
    ),
    'label' => 'LBL_ACCOUNT_SERVICES_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_NLFBS_BACKENDSYSTEMS_ENUM' => 
  array (
    'type' => 'relatemultienum',
    'label' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
    'width' => '10%',
    'default' => false,
  ),
  'SOPIMUS_FINNA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SOPIMUS_FINNA',
    'width' => '10%',
  ),
  'TUOTANNOSSA_FINNA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_TUOTANNOSSA_FINNA',
    'width' => '10%',
  ),
  'MUKAANTULO_JIRASSA_FINNA_C' => 
  array (
    'type' => 'url',
    'default' => false,
    'label' => 'LBL_MUKAANTULO_JIRASSA_FINNA',
    'width' => '10%',
  ),
  'SOPIMUS_FORMULA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_SOPIMUS_FORMULA',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => false,
  ),
  'TUOTANNOSSA_FORMULA_C' => 
  array (
    'type' => 'bool',
    'default' => false,
    'label' => 'LBL_TUOTANNOSSA_FORMULA',
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
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'default' => false,
  ),
  'WEBSITE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_WEBSITE',
    'default' => false,
  ),
  'ISIL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ISIL',
    'width' => '10%',
  ),
  'SIC_CODE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_SIC_CODE',
    'default' => false,
  ),
  'EMAIL1' => 
  array (
    'width' => '15%',
    'label' => 'LBL_EMAIL_ADDRESS',
    'sortable' => false,
    'link' => true,
    'customCode' => '{$EMAIL1_LINK}{$EMAIL1}</a>',
    'default' => false,
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_PHONE',
    'default' => false,
  ),
  'PHONE_ALTERNATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_OTHER_PHONE',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED',
    'default' => false,
  ),
  'DATE_ENTERED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
  ),
  'DATE_MODIFIED' => 
  array (
    'width' => '5%',
    'label' => 'LBL_DATE_MODIFIED',
    'default' => false,
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_CREATED',
    'default' => false,
  ),
);
?>
