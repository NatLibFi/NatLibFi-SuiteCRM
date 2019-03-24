<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    3,
    'List names of Backend Systems related to the Account',
    'custom/modules/Accounts/processRecordHook.php',
    'AccountProcessRecordHook',
    'setAccountBackendSystemNames'
);
