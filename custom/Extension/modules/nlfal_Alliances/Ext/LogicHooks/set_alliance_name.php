<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_save']) || !is_array($hook_array['before_save'])) {
    $hook_array['before_save'] = array();
}

$hook_array['before_save'][] = array(
    1, 
    'Update Alliance name field to be in sync with the current default language name', 
    'custom/modules/nlfal_Alliances/beforeSaveHook.php', 
    'AllianceBeforeSaveHook', 
    'setAllianceName'
);
