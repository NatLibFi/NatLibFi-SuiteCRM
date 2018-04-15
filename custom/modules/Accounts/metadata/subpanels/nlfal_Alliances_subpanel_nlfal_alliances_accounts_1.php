<?php
// created: 2017-05-03 16:34:37
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
  //  'type' => 'name',
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
  ),
  'account_backend_system_names' =>
  array(
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_BACKEND_SYSTEMS_TITLE',
    'width' => '10%',
    'default' => true,
    'sortable' => false,
  ),
  'edit_button' => 
  array (
    'width' => '4%',
    'default' => true,
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
  ),
  'remove_button' => 
  array (
    'width' => '4%',
    'default' => true,
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButtonAccount',
  ),
);
