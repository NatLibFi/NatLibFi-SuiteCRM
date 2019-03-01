<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    2,
    'List names of Services related to the working group',
    'custom/modules/nlfwg_WorkingGroups/processRecordHook.php',
    'WorkingGroupProcessRecordHook',
    'setWorkingGroupServiceNames'
);
