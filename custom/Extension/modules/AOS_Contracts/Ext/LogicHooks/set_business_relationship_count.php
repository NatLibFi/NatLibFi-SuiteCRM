<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    1,
    'Set number of Business Relationships related to the Contract',
    'custom/modules/AOS_Contracts/processRecordHook.php',
    'ContractProcessRecordHook',
    'setBusinessRelationshipCount'
);
