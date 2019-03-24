<?php
 // created: 2017-04-24 20:43:20
$layout_defs["Accounts"]["subpanel_setup"]['accounts_leads_1'] = array (
  'order' => 80,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'function:getLeadsForAccountSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/Leads.php',
      'account_id' => $_REQUEST['record'],
      ),
  'generate_select' => true,
  'set_subpanel_data' => 'accounts_leads_1',
  'top_buttons' => '',
);
