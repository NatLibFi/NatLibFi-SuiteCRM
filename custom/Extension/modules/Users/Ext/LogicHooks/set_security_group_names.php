<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    5,
    'List names of Security Groups related to the User',
    'custom/modules/Users/processRecordHook.php',
    'UserProcessRecordHook',
    'setSecurityGroupNames'
);
