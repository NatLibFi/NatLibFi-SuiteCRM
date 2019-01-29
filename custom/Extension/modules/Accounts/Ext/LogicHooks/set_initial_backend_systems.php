<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_save']) || !is_array($hook_array['before_save'])) {
    $hook_array['before_save'] = array();
}

$hook_array['before_save'][] = array(
    2,
    'Set Backend systems relationship with the newly created Account',
    'custom/modules/Accounts/beforeSaveHook.php',
    'AccountBeforeSaveHook',
    'setInitialBackendSystems'
);
