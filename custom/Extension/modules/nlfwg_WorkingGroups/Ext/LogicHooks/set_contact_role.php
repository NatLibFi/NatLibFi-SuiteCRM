<?php

if (!isset($hook_array) || !is_array($hook_array)) {
    $hook_array = array();
}
if (!isset($hook_array['after_relationship_add']) || !is_array($hook_array['after_relationship_add'])) {
    $hook_array['after_relationship_add'] = array();
}

$hook_array['after_relationship_add'][] = Array(
    1,
    'Always set valid contact role',
    'custom/modules/nlfwg_WorkingGroups/afterRelationshipAddHook.php',
    'WorkingGroupAfterRelationshipAddHook',
    'setContactRole',
);
