<?php
$module_name='AOS_Contracts';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'AOS_Contracts',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '25%',
      'default' => true,
    ),
    'contract_account' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_CONTRACT_ACCOUNT_TITLE',
      'width' => '20%',
      'default' => true,
    ),
    'status' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_STATUS',
      'width' => '15%',
      'default' => true,
    ),
    'assigned_user_name' => 
    array (
      'link' => 'assigned_user_link',
      'type' => 'relate',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'width' => '15%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'widget_class' => 'SubPanelEditButton',
      'module' => 'AOS_Contracts',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'AOS_Contracts',
      'width' => '5%',
      'default' => true,
    ),
  ),
);
