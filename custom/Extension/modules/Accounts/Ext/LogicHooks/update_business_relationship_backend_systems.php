<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = array(
    1, 
    'Update Back End System data of the Business Relationships, to keep it in sync with the Account', 
    'custom/modules/Accounts/afterSaveHook.php', 
    'AccountAfterSaveHook', 
    'updateBRBackendSystemData'
);
