<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    2,
    'Set a number of the Account members of the alliance',
    'custom/modules/nlfal_Alliances/processRecordHook.php',
    'AllianceProcessRecordHook',
    'setAllianceMemberCount'
);
