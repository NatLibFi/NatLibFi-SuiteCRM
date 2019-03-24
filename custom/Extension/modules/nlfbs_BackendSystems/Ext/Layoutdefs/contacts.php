<?php

$layout_defs["nlfbs_BackendSystems"]["subpanel_setup"]['contacts'] = array (
  'order' => 111,
  'module' => 'Contacts',
  'subpanel_name' => 'ForBackendSystems',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CONTACTS_SUBPANEL',
  'get_subpanel_data' => 'function:getContactsForBackendSystemSubpanelQueryParts',
  'function_parameters' => array(
    'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFBackEndSystems.php',
    'system_id' => $_REQUEST['record'],
  ),
  'generate_select' => true,
  'top_buttons' => ''
);
