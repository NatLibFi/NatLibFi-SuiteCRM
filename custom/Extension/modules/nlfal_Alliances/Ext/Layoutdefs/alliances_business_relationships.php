<?php

$layout_defs["nlfal_Alliances"]["subpanel_setup"]['nlfbr_businessrelationships'] = array(
    'order' => 110,
    'module' => 'nlfbr_BusinessRelationships',
    'subpanel_name' => 'ForAlliances',
    'sort_order' => 'asc',
    'sort_by' => 'accounts_nlfbr_businessrelationships_1_name',
    'title_key' => 'LBL_ALLIANCES_BUSINESS_RELATIONSHIPS_SUBPANEL_TITLE',
    'get_subpanel_data' => 'function:getBusinessRelationshipForAllianceSubpanelQueryParts',
    'function_parameters' => array(
        'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFAlliances.php',
        'alliance_id' => $this->_focus->id,
        ),
    'generate_select' => true,
    'set_subpanel_data' => 'nlfbr_businessrelationships',
    'top_buttons' => '',
);

$layout_defs["nlfal_Alliances"]["subpanel_setup"]['member_account_nlfbr_businessrelationships'] = array(
    'order' => 111,
    'module' => 'nlfbr_BusinessRelationships',
    'subpanel_name' => 'ForAlliances',
    'sort_order' => 'asc',
    'sort_by' => 'accounts_nlfbr_businessrelationships_1_name',
    'title_key' => 'LBL_ALLIANCES_BUSINESS_RELATIONSHIPS_FOR_MEMBER_ACCOUNTS_SUBPANEL_TITLE',
    'get_subpanel_data' => 'function:getBusinessRelationshipForAllianceMembersSubpanelQueryParts',
    'function_parameters' => array(
        'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFAlliances.php',
        'alliance_id' => $this->_focus->id,
        ),
    'generate_select' => true,
    'set_subpanel_data' => 'nlfbr_businessrelationships',
    'top_buttons' => '',
);
