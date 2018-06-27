<?php

$layout_defs["nlfbs_BackendSystems"]["subpanel_setup"]['services'] = array (
  'order' => 110,
  'module' => 'nlfse_Services',
  'subpanel_name' => 'ForBackendSystems',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SERVICES_SUBPANEL',
  'get_subpanel_data' => 'function:getServicesForBackendSystemSubpanelQueryParts',
  'function_parameters' => array(
    'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFBackEndSystems.php',
    'system_id' => $_REQUEST['record'],
  ),
  'generate_select' => true,
  'top_buttons' => ''
);
