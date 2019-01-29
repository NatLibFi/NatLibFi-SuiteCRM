<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_save']) || !is_array($hook_array['after_save'])) {
    $hook_array['after_save'] = array();
}

$hook_array['after_save'][] = array(
    1, 
    'Update Contract data of the Account', 
    'custom/modules/nlfbr_BusinessRelationships/afterSaveHook.php', 
    'BusinessRelationshipAfterSaveHook', 
    'updateAccountContractData'
);
