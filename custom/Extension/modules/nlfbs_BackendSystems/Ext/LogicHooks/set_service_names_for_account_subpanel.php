<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    1,
    'List names of Services related to the Back End System and the Account (only relevant in the Account view subpanel)',
    'custom/modules/nlfbs_BackendSystems/processRecordHook.php',
    'BackendSystemProcessRecordHook',
    'setServiceNamesForAccount'
);
