<?php
 // created: 2017-03-09 12:43:05
$layout_defs["Contacts"]["subpanel_setup"]['contacts_nlfro_roles_1'] = array (
  'order' => 100,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
  'get_subpanel_data' => 'contacts_nlfro_roles_1',
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
