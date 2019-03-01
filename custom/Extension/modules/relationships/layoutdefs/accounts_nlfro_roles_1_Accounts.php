<?php
 // created: 2017-03-09 12:43:47
$layout_defs["Accounts"]["subpanel_setup"]['accounts_nlfro_roles_1'] = array (
  'order' => 100,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
  'get_subpanel_data' => 'accounts_nlfro_roles_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
