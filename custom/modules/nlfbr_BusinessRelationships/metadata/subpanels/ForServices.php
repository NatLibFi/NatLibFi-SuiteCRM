<?php
// created: 2016-12-27 15:43:22
$subpanel_layout['list_fields'] = array (
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
  'nlfse_services_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'nlfse_Services',
    'target_record_key' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '4%',
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
