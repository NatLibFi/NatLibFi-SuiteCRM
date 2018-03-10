<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// Mostly copied from include/generic/DeleteRelationship.php

require_once('include/formbase.php');

global $beanFiles,$beanList;
$bean_name = $beanList[$_REQUEST['module']];
require_once($beanFiles[$bean_name]);
$focus = new $bean_name();
if (  empty($_REQUEST['linked_id']) || empty($_REQUEST['linked_field'])  || empty($_REQUEST['record']))
{
       die("need linked_field, linked_id and record fields");
}
$linked_field = $_REQUEST['linked_field'];
$record = $_REQUEST['record'];
$linked_id = $_REQUEST['linked_id'];

if ($linked_field === 'tasks' || $linked_field === 'meetings' || $linked_field === 'calls' || $linked_field === 'emails') {
        // This is WorkingGroups-specific part, handle other relationships in a standard way
        // Remove both relationship (not indentified as 'tasks'!), and the parent fields in the task record
        if ($linked_field === 'tasks') {
                $relatedModule = 'Tasks';
                $relationshipField = 'nlfwg_workinggroups_tasks_1';
        }
        if ($linked_field === 'meetings') {
                $relatedModule = 'Meetings';
                $relationshipField = 'nlfwg_workinggroups_meetings_1';
        }
        if ($linked_field === 'calls') {
                $relatedModule = 'Calls';
                $relationshipField = 'nlfwg_workinggroups_calls_1';
        }
        if ($linked_field === 'emails') {
                $relatedModule = 'Emails';
                $relationshipField = 'nlfwg_workinggroups_activities_emails';
        }
        $focus->load_relationship($relationshipField);
        $focus->{$relationshipField}->delete($record,$linked_id);
        $taskBeanName = $beanList[$relatedModule];
        require_once($beanFiles[$taskBeanName]);
        $task = new $taskBeanName();
        $task->retrieve($linked_id);
        $task->parent_id = '';
        $task->save();
} else {
        $focus->load_relationship($linked_field);
        $focus->$linked_field->delete($record,$linked_id);
}


if(!empty($_REQUEST['return_url'])){
        $_REQUEST['return_url'] =urldecode($_REQUEST['return_url']);
}
$GLOBALS['log']->debug("deleted relationship: bean: $bean_name, linked_field: $linked_field, linked_id:$linked_id" );
if(empty($_REQUEST['refresh_page'])){
        handleRedirect();
}
