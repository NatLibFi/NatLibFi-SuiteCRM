<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_save']) || !is_array($hook_array['before_save'])) {
    $hook_array['before_save'] = array();
}

$hook_array['before_save'][] = array(
    3, 
    'Add member account industries to Alliance industry list', 
    'custom/modules/nlfal_Alliances/beforeSaveHook.php', 
    'AllianceBeforeSaveHook', 
    'addMemberIndustryData'
);
