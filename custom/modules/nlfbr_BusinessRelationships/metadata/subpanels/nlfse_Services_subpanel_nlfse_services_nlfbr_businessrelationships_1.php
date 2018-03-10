<?php
// created: 2017-09-19 16:29:42
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '15%',
    'default' => true,
  ),
  'accounts_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
  ),
  'nlfbr_businessrelationships_account_alliances' => 
  array (
    'type' => 'multienum',
    'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_ACCOUNT_ALLIANCES',
    'width' => '15%',
    'default' => true,
  ),
  'asiakassuhde_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ASIAKASSUHDE',
    'width' => '5%',
  ),
  'sopimus_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_SOPIMUS',
    'id' => 'AOS_CONTRACTS_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Contracts',
    'target_record_key' => 'aos_contracts_id_c',
  ),
  'sopimus_kronodoc_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SOPIMUS_KRONODOC',
    'width' => '5%',
  ),
  'palvelu_liittymisen_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
    'width' => '5%',
  ),
  'production_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PRODUCTION_DATE',
    'width' => '5%',
  ),
  'finna_fimu_url_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_FINNA_FIMU_URL',
    'width' => '5%',
  ),
  'kohdennus_c' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_KOHDENNUS',
    'id' => 'USER_ID_C',
    'link' => true,
    'width' => '10%',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'user_id_c',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '5%',
    'default' => true,
  ),
);