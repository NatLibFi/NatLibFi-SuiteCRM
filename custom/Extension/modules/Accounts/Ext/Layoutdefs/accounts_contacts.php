<?php

/*$layout_defs["Accounts"]["subpanel_setup"]['contacts'] = array(
  'order' => 5,
  'module' => 'Contacts',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'last_name, first_name',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNT_CONTACTS_SUBPANEL_TITLE',
  'get_subpanel_data' => 'contacts',
);*/

/*$layout_defs["Accounts"]["subpanel_setup"]['contacts'] = array(
  'order' => 5,
  'module' => 'Contacts',
  'subpanel_name' => 'ForAccountsWithBusinessRelationshipContactData',
  'sort_order' => 'last_name, first_name',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNT_CONTACTS_SUBPANEL_TITLE',
  'get_subpanel_data' => 'function:getAccountAndBRRolesForAccountContactsSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/Accounts.php',
      'account_id' => $this->_focus->id,
  ),
  'generate_select' => true,
  'set_subpanel_data' => 'contacts',
);*/

$layout_defs["Accounts"]["subpanel_setup"]['contacts'] = array(
  'order' => 5,
  'module' => 'Contacts',
  'subpanel_name' => 'accounts_contacts', // this value is not associated with a physical file
  'sort_order' => 'last_name, first_name',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNT_CONTACTS_SUBPANEL_TITLE',

  'type' => 'collection',
  'header_definition_from_subpanel' => 'contacts',

  // TODO: add top buttons z Contacts/ForAccounts subpanela!

  'collection_list' =>
  array(
    'account_contacts' => array(
      'module' => 'Contacts',
      'subpanel_name' => 'ForAccountsWithBusinessRelationshipContactData',
      'get_subpanel_data' => 'contacts',
    ),
    'business_relationsip_contacts' => array(
      'module' => 'Contacts',
      'subpanel_name' => 'ForBusinessRelationshipsOfAccount',
      //'get_subpanel_data' => 'nlfbr_businessrelationships_contacts_1',
      'get_subpanel_data' => 'function:getBRContactsForAccountContactsSubpanelQueryParts',
      'function_parameters' => array(
        'import_function_file' => 'custom/Extension/application/Ext/Utils/Accounts.php', 
        'account_id' => $this->_focus->id,
      ),
      'generate_select' => true,
      'set_subpanel_data' => 'nlfbr_businessrelationships_contacts_1',
    ),
  ),
);
