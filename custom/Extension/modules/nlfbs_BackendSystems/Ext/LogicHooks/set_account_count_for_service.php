<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    2,
    'Number of Account related to the Back End System and the Service (only relevant in the Services view subpanel)',
    'custom/modules/nlfbs_BackendSystems/processRecordHook.php',
    'BackendSystemProcessRecordHook',
    'setAccountCountForService'
);
