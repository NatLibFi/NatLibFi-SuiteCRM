<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_save']) || !is_array($hook_array['before_save'])) {
    $hook_array['before_save'] = array();
}

$hook_array['before_save'][] = array(
    1, 
    'Set Contracts related to Business Relationship', 
    'custom/modules/nlfbr_BusinessRelationships/beforeSaveHook.php', 
    'BusinessRelationshipBeforeSaveHook', 
    'setContracts'
);
