<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    4,
    'Name of the Business Relationship but with Account name first',
    'custom/modules/nlfbr_BusinessRelationships/processRecordHook.php',
    'BusinessRelationshipProcessRecordHook',
    'setNameWithAccountNameFirst'
);
