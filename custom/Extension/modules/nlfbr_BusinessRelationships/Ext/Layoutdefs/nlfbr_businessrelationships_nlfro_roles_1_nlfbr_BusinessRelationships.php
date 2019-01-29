<?php
 // created: 2017-03-21 23:27:40
/*$layout_defs["nlfbr_BusinessRelationships"]["subpanel_setup"]['nlfbr_businessrelationships_nlfro_roles_1'] = '';
$layout_defs["nlfbr_BusinessRelationships"]["subpanel_setup"]['business_relationships_roles_contacts'] = array (
  'order' => 100,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'ForBusinessRelationships',
  'sort_order' => 'asc',
  'sort_by' => 'contacts_nlfro_roles_1_name',
  'title_key' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_CONTACTS_WITH_ROLES_TITLE',
  //'get_subpanel_data' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'get_subpanel_data' => 'function:getBusinessRelationshipRolesForBusinessRelationshipSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFRoles.php',
      'br_id' => $this->_focus->id,
      //'return_as_array' => 'true'
  ),
  'set_subpanel_data' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'generate_select' => true,
  /*'top_buttons' => 
  array (
    0 => 
    array (
      //'widget_class' => 'SubPanelTopButtonQuickCreate',
      'widget_class' => 'SubPanelTopButtonQuickCreateNlfRole',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),*/
//);
