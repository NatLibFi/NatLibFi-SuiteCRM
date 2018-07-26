<?php
// created: 2018-07-11 16:07:52
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_ACCOUNT_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'parent_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MEMBER_OF',
    'id' => 'PARENT_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'parent_id',
  ),
  'billing_address_city' => 
  array (
    'vname' => 'LBL_LIST_CITY',
    'width' => '20%',
    'default' => true,
  ),
  'account_type' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_TYPE',
    'width' => '10%',
    'default' => true,
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_INDUSTRY',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
    'width' => '4%',
    'default' => true,
  ),
);