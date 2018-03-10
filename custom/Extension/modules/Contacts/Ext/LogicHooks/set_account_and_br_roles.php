<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['process_record']) || !is_array($hook_array['process_record'])) {
    $hook_array['process_record'] = array();
}

$hook_array['process_record'][] = array(
    1,
    'Set roles of the Contact in the Account and Business Relationships related to the Account',
    'custom/modules/Contacts/processRecordHook.php',
    'ContactProcessRecordHook',
    'setAccountAndBusinessRelationshipRole'
);
