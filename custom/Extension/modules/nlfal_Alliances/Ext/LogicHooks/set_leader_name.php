<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    1,
    'Set a name of the Account that is a "leader" of the alliance',
    'custom/modules/nlfal_Alliances/processRecordHook.php',
    'AllianceProcessRecordHook',
    'setAllianceLeaderName'
);
