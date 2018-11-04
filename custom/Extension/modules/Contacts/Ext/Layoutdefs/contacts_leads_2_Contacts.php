<?php
 // created: 2018-07-21 19:35:41
$layout_defs["Contacts"]["subpanel_setup"]['contacts_leads_2'] = array (
  'order' => 18,
  'module' => 'Leads',
  'subpanel_name' => 'ForContacts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_LEADS_2_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'function:getLeadsForContactSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/Leads.php',
      'contact_id' => $_REQUEST['record'],
      ),
  'generate_select' => true,
  'set_subpanel_data' => 'contacts_leads_2',
  'top_buttons' => '',
);
