<?php
 // created: 2017-03-09 12:43:47
/*$layout_defs["Accounts"]["subpanel_setup"]['accounts_nlfro_roles_1'] = '';
$layout_defs["Accounts"]["subpanel_setup"]['accounts_roles_contacts'] = array (
  'order' => 5,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'contacts_nlfro_roles_1_name',
  'title_key' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_CONTACTS_WITH_ROLES_TITLE',
  //'get_subpanel_data' => 'accounts_nlfro_roles_1',
  'get_subpanel_data' => 'function:getAccountRolesForAccountSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFRoles.php',
      'account_id' => $this->_focus->id,
      //'return_as_array' => 'true'
  ),
  'set_subpanel_data' => 'accounts_nlfro_roles_1',
  'generate_select' => true,
  /*'top_buttons' => 
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
  ),*/
//);
