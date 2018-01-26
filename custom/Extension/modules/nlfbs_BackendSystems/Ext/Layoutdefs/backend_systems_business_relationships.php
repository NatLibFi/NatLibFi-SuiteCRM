<?php

$layout_defs["nlfbs_BackendSystems"]["subpanel_setup"]['backend_systems_business_relationships'] = array(
    'order' => 100,
    'module' => 'nlfbr_BusinessRelationships',
    'subpanel_name' => 'ForBackendSystems',
    'sort_order' => 'asc',
    'sort_by' => 'name',
    'title_key' => 'LBL_BACKEND_SYSTEMS_BUSINESS_RELATIONSHIPS_SUBPANEL_TITLE',
    'get_subpanel_data' => 'function:getBusinessRelationshipForBackendSystemSubpanelQueryParts',
    'function_parameters' => array(
        'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFBackEndSystems.php',
        'system_id' => $this->_focus->id,
        ),
    'generate_select' => true,
    'set_subpanel_data' => 'nlfbr_businessrelationships',
    'top_buttons' => '',
);
