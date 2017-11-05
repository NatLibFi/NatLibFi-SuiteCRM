<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['alliance_id']) || empty($_REQUEST['contact_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'roles' => $app_list_strings['contact_alliance_role_list'],
        'selected' => getAllianceRolesForContact($_REQUEST['contact_id'], $_REQUEST['alliance_id']),
    ));
}
