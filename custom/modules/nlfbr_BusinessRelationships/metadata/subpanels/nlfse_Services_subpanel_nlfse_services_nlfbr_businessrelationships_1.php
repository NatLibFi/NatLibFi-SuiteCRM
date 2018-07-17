<?php
// created: 2018-07-03 11:53:55
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
  'active_contract_names' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACTIVE_CONTRACT_NAMES',
    'width' => '10%',
    'sortable' => false,
  ),
  'backend_system_names' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_BACKEND_SYSTEM_NAMES',
    'width' => '5%',
    'sortable' => false,
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
