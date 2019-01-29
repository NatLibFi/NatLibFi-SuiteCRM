<?php
  // http://support.sugarcrm.com/Knowledge_Base/Developers/Customization/Enabling_Importing_for_Custom_Modules/
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings, $app_strings, $sugar_config;

if(ACLController::checkAccess('nlfal_Alliances', 'edit', true))
  $module_menu[]=Array(
		       "index.php?module=nlfal_Alliances&action=EditView&return_module=nlfal_Alliances&return_action=DetailView", 
		       $mod_strings['LNK_NEW_RECORD'], 
		       "Createnlfal_Alliances", 
   'nlfal_Alliances'
		       );
if(ACLController::checkAccess('nlfal_Alliances', 'list', true))
  $module_menu[]=Array(
		       "index.php?module=nlfal_Alliances&action=index&return_module=nlfal_Alliances&return_action=DetailView", 
		       $mod_strings['LNK_LIST'], 
		       "nlfal_Alliances", 
   'nlfal_Alliances' 
		       );
if(ACLController::checkAccess('nlfal_Alliances', 'import', true))
  $module_menu[]=Array(
		       "index.php?module=Import&action=Step1&import_module=nlfal_Alliances&return_module=nlfal_Alliances&return_action=index", 
		       $app_strings['LBL_IMPORT'], 
		       "Import", 
   'nlfal_Alliances' 
		       );