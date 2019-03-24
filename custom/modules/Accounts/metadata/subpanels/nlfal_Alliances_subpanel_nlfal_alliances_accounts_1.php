<?php
// created: 2018-04-23 16:02:04
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
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
  'account_backend_system_names' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ACCOUNT_BACKEND_SYSTEMS_TITLE',
    'width' => '10%',
    'default' => true,
    'sortable' => false,
  ),
  'industry' => 
  array (
    'type' => 'enum',
    'vname' => 'LBL_INDUSTRY',
    'width' => '10%',
    'default' => true,
  ),
  'hallinnonala_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_HALLINNONALA',
    'width' => '10%',
  ),
  'organisaatio_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ORGANISAATIO_STATUS',
    'width' => '10%',
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