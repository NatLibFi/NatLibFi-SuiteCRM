<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = array(
    2, 
    'Update Alliance industry list to keep it in sync with the Account', 
    'custom/modules/Accounts/afterSaveHook.php', 
    'AccountAfterSaveHook', 
    'updateAllianceIndustryData'
);
