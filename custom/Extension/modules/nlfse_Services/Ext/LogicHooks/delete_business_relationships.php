<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['before_delete']) || !is_array($hook_array['before_delete'])) {
    $hook_array['before_delete'] = array();
}

$hook_array['before_delete'][] = array(
    1, 
    'Deletes related Business Relationships when the Service has been deleted',
    'custom/modules/nlfse_Services/beforeDeleteHook.php', 
    'ServiceBeforeDeleteHook', 
    'deleteBusinessRelationships'
);
