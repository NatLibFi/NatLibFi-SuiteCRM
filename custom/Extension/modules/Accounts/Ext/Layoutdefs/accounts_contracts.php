<?php
 // created: 2017-03-07 23:06:24
$layout_defs["Accounts"]["subpanel_setup"]['accounts_contracts'] = array (
  'order' => 4,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  //'title_key' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
  'title_key' => 'AOS_Contracts',
  'get_subpanel_data' => 'function:getActiveContractsRelatedToAccountForSubpanelQueryParts',
  'function_parameters' => array(
    'import_function_file' => 'custom/Extension/application/Ext/Utils/Accounts.php',
    'account_id' => $_REQUEST['record'],
  ),
  'generate_select' => true,
  'top_buttons' => '',
  /*array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),*/
);
