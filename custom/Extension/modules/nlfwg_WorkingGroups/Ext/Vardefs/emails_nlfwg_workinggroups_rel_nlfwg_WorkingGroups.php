<?php

// Email code apparently requires the field/relationship to be called 'nlfwg_workinggroups_activities_emails'
//$dictionary['nlfwg_WorkingGroups']['fields']['emails'] = array(
$dictionary['nlfwg_WorkingGroups']['fields']['nlfwg_workinggroups_activities_emails'] = array(
    //'name' => 'emails',
    'name' => 'nlfwg_workinggroups_activities_emails',
    'vname' => 'LBL_EMAILS_NLFWG_WORKINGGROUPS_REL_EMAILS_TITLE',
    'type' => 'link',
    //'relationship' => 'emails_nlfwg_workinggroups_rel',
    'relationship' => 'nlfwg_workinggroups_activities_emails',
    'module' => 'Emails',
    'bean_name' => 'Email',
    'source' => 'non-db',
);
