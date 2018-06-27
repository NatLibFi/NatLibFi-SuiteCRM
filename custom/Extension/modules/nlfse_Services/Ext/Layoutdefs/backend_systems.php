<?php

$layout_defs["nlfse_Services"]["subpanel_setup"]['backend_systems'] = array (
  'order' => 110,
  'module' => 'nlfbs_BackendSystems',
  'subpanel_name' => 'ForServices',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_BACKEND_SYSTEMS_SUBPANEL',
  'get_subpanel_data' => 'function:getBackEndSystemsForServiceSubpanelQueryParts',
  'function_parameters' => array(
    'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFBackEndSystems.php',
    'service_id' => $_REQUEST['record'],
  ),
  'generate_select' => true,
  'top_buttons' => '',
); 
