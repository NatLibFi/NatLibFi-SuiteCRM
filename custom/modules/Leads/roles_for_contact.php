<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['lead_id']) || empty($_REQUEST['contact_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'roles' => getLeadContactRoles(),
        'selected' => getLeadRolesForContact($_REQUEST['contact_id'], $_REQUEST['lead_id']),
    ));
}
