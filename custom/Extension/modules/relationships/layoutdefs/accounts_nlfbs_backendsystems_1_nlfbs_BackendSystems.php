<?php
 // created: 2017-05-12 11:38:09
$layout_defs["nlfbs_BackendSystems"]["subpanel_setup"]['accounts_nlfbs_backendsystems_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'accounts_nlfbs_backendsystems_1',
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
