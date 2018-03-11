<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (!isset($_REQUEST['return_module']) || empty($_REQUEST['return_module'])) {
    exit;
}
if (!isset($_REQUEST['relate_to']) || empty($_REQUEST['relate_to'])) {
    exit;
}
if (!isset($_REQUEST['relate_id']) || empty($_REQUEST['relate_id'])) {
    exit;
}

$beanId = $_REQUEST['relate_id'];
$relationship = $_REQUEST['relate_to'];
$relatedModule = $_REQUEST['return_module'];

$relatedIdField = null;
if ($relationship === 'accounts_contacts'){
     $relationship = $relatedModule === 'Contacts' ? 'accounts' : 'contacts';
     $relatedIdField = $relatedModule === 'Contacts' ? 'account_id' : 'contact_id';
}
if ($relationship === 'nlfbr_businessrelationships_contacts_1'){
     $relatedIdField = $relatedModule === 'Contacts' ? 'nlfbr_busic409onships_ida' : 'nlfbr_businessrelationships_contacts_1contacts_idb';
}
if ($relationship === 'nlfwg_workinggroups_contacts_1'){
     $relatedIdField = $relatedModule === 'Contacts' ? 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida' : 'nlfwg_workinggroups_contacts_1contacts_idb';
}
if ($relationship === 'nlfal_alliances_contacts_1'){
     $relatedIdField = $relatedModule === 'Contacts' ? 'nlfal_alliances_contacts_1nlfal_alliances_ida' : 'nlfal_alliances_contacts_1contacts_idb';
}

if ($relatedIdField === null) {
    return;
}

if (!isset($_REQUEST[$relatedIdField]) || empty($_REQUEST[$relatedIdField])) {
    exit;
}

$relatedId = $_REQUEST[$relatedIdField];

$additionalFields = array();
if (isset($_REQUEST['role'])) {
    $additionalFields['role'] = encodeMultienumValue($_REQUEST['role']);
}

require('include/modules.php');

$beanName = $beanList[$relatedModule];
require_once($beanFiles[$beanName]);
$bean = new $beanName();
$bean->retrieve($beanId);

if (!$bean) {
    exit;
}

if (!$bean->load_relationship($relationship)) {
    exit;
}

$bean->{$relationship}->get(true);

$bean->{$relationship}->add($relatedId, $additionalFields);

$bean->save();
