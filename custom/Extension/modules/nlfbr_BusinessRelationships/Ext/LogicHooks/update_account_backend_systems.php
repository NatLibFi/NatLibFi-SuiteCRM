<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = array(
    2, 
    'Update Back End System data of the Account, to keep it in sync with Business Relationship', 
    'custom/modules/nlfbr_BusinessRelationships/afterSaveHook.php', 
    'BusinessRelationshipAfterSaveHook', 
    'updateAccountBackendSystemData'
);
