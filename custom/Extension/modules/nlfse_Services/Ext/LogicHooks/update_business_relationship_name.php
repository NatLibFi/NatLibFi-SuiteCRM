<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = array(
    1, 
    'Update name of the Business Relationships, to keep it in sync with the Service', 
    'custom/modules/nlfse_Services/afterSaveHook.php', 
    'ServiceAfterSaveHook', 
    'updateBRName'
);
