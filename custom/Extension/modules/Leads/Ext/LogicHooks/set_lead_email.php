<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    3, 
    'Set the email address of the Lead for the list view', 
    'custom/modules/Leads/processRecordHook.php', 
    'LeadProcessRecordHook', 
    'setLeadEmail'
);
