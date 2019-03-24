<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['account_id']) || empty($_REQUEST['contact_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'roles' => $app_list_strings['contact_account_role_list'],
        'selected' => getAccountRolesForContact($_REQUEST['contact_id'], $_REQUEST['account_id']),
    ));
}
