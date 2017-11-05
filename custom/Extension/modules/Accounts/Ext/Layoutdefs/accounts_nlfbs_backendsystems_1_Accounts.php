<?php
 // created: 2017-05-12 11:38:09
$layout_defs["Accounts"]["subpanel_setup"]['accounts_nlfbs_backendsystems_1'] = array(
  'order' => 100,
  'module' => 'nlfbs_BackendSystems',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
  'get_subpanel_data' => 'accounts_nlfbs_backendsystems_1',
  /*'get_subpanel_data' => 'function:getBackEndSystemsForAccountSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFBackEndSystems.php', 
      'account_id' => $this->_focus->id,
      ),
  'generate_select' => true,*/
  //'set_subpanel_data' => 'accounts_nlfbs_backendsystems_1',
  'top_buttons' => 
  array (
    /*0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),*/
  ),
);
