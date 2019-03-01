<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings;

if (ACLController::checkAccess('nlfbr_BusinessRelationships', 'edit', true)) {
    $module_menu[]=Array(
        "index.php?module=nlfbr_BusinessRelationships&action=EditView&return_module=nlfbr_BusinessRelationships&return_action=index", 
        $mod_strings['LNK_NEW_RECORD'], 
        "Create", 
        'nlfbr_BusinessRelationships'
    );
}
if (ACLController::checkAccess('nlfbr_BusinessRelationships', 'list', true)) {
    $module_menu[]=Array(
        "index.php?module=nlfbr_BusinessRelationships&action=index&return_module=nlfbr_BusinessRelationships&return_action=DetailView", 
        $mod_strings['LNK_LIST'], 
        "List", 
        'nlfbr_BusinessRelationships' 
    );
}
if (ACLController::checkAccess('nlfbr_BusinessRelationships', 'import', true)) {
    $module_menu[]=Array(
        "index.php?module=Import&action=Step1&import_module=nlfbr_BusinessRelationships&return_module=nlfbr_BusinessRelationships&return_action=index", 
        $mod_strings['LNK_IMPORT'], 
        "Import", 
        'nlfbr_BusinessRelationships' 
    );
}
