<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_delete']) || !is_array($hook_array['before_delete'])) {
    $hook_array['before_delete'] = array();
}

$hook_array['before_delete'][] = array(
    1, 
    'Deletes related Business Relationships when the Account has been deleted',
    'custom/modules/Accounts/beforeDeleteHook.php', 
    'AccountBeforeDeleteHook', 
    'deleteBusinessRelationships'
);
