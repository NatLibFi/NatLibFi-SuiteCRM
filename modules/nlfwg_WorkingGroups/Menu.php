<?php
  // http://support.sugarcrm.com/Knowledge_Base/Developers/Customization/Enabling_Importing_for_Custom_Modules/
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('nlfwg_WorkingGroups', 'edit', true))
  $module_menu[]=Array(
		       "index.php?module=nlfwg_WorkingGroups&action=EditView&return_module=nlfwg_WorkingGroups&return_action=DetailView", 
		       $mod_strings['LNK_NEW_RECORD'], 
		       "Createnlfwg_WorkingGroups", 
   'nlfwg_WorkingGroups'
		       );
if(ACLController::checkAccess('nlfwg_WorkingGroups', 'list', true))
  $module_menu[]=Array(
		       "index.php?module=nlfwg_WorkingGroups&action=index&return_module=nlfwg_WorkingGroups&return_action=DetailView", 
		       $mod_strings['LNK_LIST'], 
		       "nlfwg_WorkingGroups", 
   'nlfwg_WorkingGroups' 
		       );
if(ACLController::checkAccess('nlfwg_WorkingGroups', 'import', true))
  $module_menu[]=Array(
		       "index.php?module=Import&action=Step1&import_module=nlfwg_WorkingGroups&return_module=nlfwg_WorkingGroups&return_action=index", 
		       $app_strings['LBL_IMPORT'], 
		       "Import", 
   'nlfwg_WorkingGroups' 
		       );