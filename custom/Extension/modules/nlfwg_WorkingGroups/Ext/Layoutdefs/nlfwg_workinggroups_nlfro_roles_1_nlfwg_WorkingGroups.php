<?php
 // created: 2017-03-09 12:44:28
/*$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['nlfwg_workinggroups_nlfro_roles_1'] = '';
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['working_groups_roles_contacts'] = array (
  'order' => 100,
  'module' => 'nlfro_Roles',
  'subpanel_name' => 'ForWorkingGroups',
  'sort_order' => 'asc',
  //'sort_by' => 'name',
  'sort_by' => 'contacts_nlfro_roles_1_name',
  'title_key' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_CONTACTS_WITH_ROLES_TITLE',
  //'get_subpanel_data' => 'nlfwg_workinggroups_nlfro_roles_1',
  'get_subpanel_data' => 'function:getWorkingGroupRolesForWorkingGroupSubpanelQueryParts',
  'function_parameters' => array(
      'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFRoles.php',
      'group_id' => $this->_focus->id,
      //'return_as_array' => 'true'
  ),
  'set_subpanel_data' => 'nlfwg_workinggroups_nlfro_roles_1',
  'generate_select' => true,
  /*'top_buttons' => '',
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
