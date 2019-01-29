<?php

define('sugarEntry',TRUE);

require_once __DIR__ . '/../include/entryPoint.php';
$GLOBALS['mod_strings'] = return_module_language($GLOBALS['current_language'], 'Administration');

require_once __DIR__ . '/../modules/Administration/QuickRepairAndRebuild.php';

$from_sync_client = true; // To skip is_admin checks

$randc = new RepairAndClear();
$randc->repairAndClearAll(array('clearAll'),array(translate('LBL_ALL_MODULES')), false,true);
