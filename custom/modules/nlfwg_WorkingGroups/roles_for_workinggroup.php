<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['wg_id']) || empty($_REQUEST['contact_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'roles' => $app_list_strings['contact_working_group_role_list'],
        'selected' => getWorkingGroupRolesForContact($_REQUEST['contact_id'], $_REQUEST['wg_id']),
    ));
}
