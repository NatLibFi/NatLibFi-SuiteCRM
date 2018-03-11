<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['br_id']) || empty($_REQUEST['contact_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'roles' => $app_list_strings['contact_business_relationship_role_list'],
        'selected' => getBusinessRelationshipRolesForContact($_REQUEST['contact_id'], $_REQUEST['br_id']),
    ));
}
