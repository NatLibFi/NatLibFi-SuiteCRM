<?php
// created: 2017-07-18 14:48:16
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_INDUSTRY',
    'width' => '10%',
    'default' => true,
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'sic_code' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SIC_CODE',
    'width' => '10%',
    'default' => true,
  ),
  'isil_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ISIL',
    'width' => '10%',
  ),
  'billing_address_city' => 
  array (
    'vname' => 'LBL_LIST_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'website' => 
  array (
    'type' => 'url',
    'vname' => 'LBL_WEBSITE',
    'width' => '20%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '5%',
    'default' => true,
  ),
);