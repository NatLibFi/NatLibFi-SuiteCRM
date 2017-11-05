<?php
 // created: 2016-09-29 17:08:42
$layout_defs["nlfal_Alliances"]["subpanel_setup"]['nlfal_alliances_accounts_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'nlfal_alliances_accounts_1',
  'top_buttons' => // Changed 2017-02-28 (LM)
  array (
    /*0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 =>*/ 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
