<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (empty($_REQUEST['account_id'])) {
    echo ('Bad request');
} else {
    echo json_encode(array(
        'records' => getAllActiveBusinessRelationships($_REQUEST['account_id']),
    ));
}
