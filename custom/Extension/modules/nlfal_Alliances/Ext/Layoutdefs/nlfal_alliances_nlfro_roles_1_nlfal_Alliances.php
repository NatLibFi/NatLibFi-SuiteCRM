<?php
 // created: 2017-03-26 14:39:25
/*$layout_defs["nlfal_Alliances"]["subpanel_setup"]['nlfal_alliances_nlfro_roles_1'] = '';
$layout_defs["nlfal_Alliances"]["subpanel_setup"]['alliances_roles_contacts'] = array (
  'order' => 100,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'ForAlliances',
  'sort_order' => 'asc',
  'sort_by' => 'contacts_nlfro_roles_1_name',
  'title_key' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_CONTACTS_WITH_ROLES_TITLE',
  //'get_subpanel_data' => 'nlfal_alliances_nlfro_roles_1',
  'get_subpanel_data' => 'function:getAllianceRolesForAllianceSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFRoles.php',
      'alliance_id' => $this->_focus->id,
  ),
  'generate_select' => true,
  'set_subpanel_data' => 'nlfal_alliances_nlfro_roles_1',
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
