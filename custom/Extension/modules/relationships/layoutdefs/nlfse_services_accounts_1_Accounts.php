<?php
 // created: 2016-09-28 13:35:03
$layout_defs["Accounts"]["subpanel_setup"]['nlfse_services_accounts_1'] = array (
  'order' => 100,
  'module' => 'nlfse_Services',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFSE_SERVICES_ACCOUNTS_1_FROM_NLFSE_SERVICES_TITLE',
  'get_subpanel_data' => 'nlfse_services_accounts_1',
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
