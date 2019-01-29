<?php
 // created: 2017-03-07 23:06:24
$layout_defs["Accounts"]["subpanel_setup"]['accounts_aos_contracts_1'] = array (
  'order' => 100,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
  'get_subpanel_data' => 'accounts_aos_contracts_1',
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
