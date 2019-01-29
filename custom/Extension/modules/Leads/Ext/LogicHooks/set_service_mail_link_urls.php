<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    2, 
    'Set service email links related to the Lead', 
    'custom/modules/Leads/processRecordHook.php', 
    'LeadProcessRecordHook', 
    'setServiceMailLinkUrls'
);
