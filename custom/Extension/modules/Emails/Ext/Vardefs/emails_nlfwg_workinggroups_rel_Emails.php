<?php

//$dictionary['Email']['fields']['emails_nlfwg_workinggroups'] = array(
$dictionary['Email']['fields']['nlfwg_workinggroups_activities_emails'] = array(
    //'name' => 'emails_nlfwg_workinggroups',
    'name' => 'nlfwg_workinggroups_activities_emails',
    'vname' => 'LBL_EMAILS_NLFWG_WORKINGGROUPS_REL_NLFWG_WORKINGGROUPS_TITLE',
    'type' => 'link',
    //'relationship' => 'emails_nlfwg_workinggroups_rel',
    'relationship' => 'nlfwg_workinggroups_activities_emails',
    'module' => 'nlfwg_WorkingGroups',
    'bean_name' => 'nlfwg_WorkingGroups',
    'source' => 'non-db',
);

//$dictionary['Email']['relationships']['emails_nlfwg_workinggroups_rel'] = array(
$dictionary['Email']['relationships']['nlfwg_workinggroups_activities_emails'] = array(
    'lhs_module' => 'Emails',
    'lhs_table' => 'emails',
    'lhs_key' => 'id',
    'rhs_module' => 'nlfwg_WorkingGroups',
    'rhs_table' => 'nlfwg_workinggroups',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'emails_beans',
    'join_key_lhs' => 'email_id',
    'join_key_rhs' => 'bean_id',
    'relationship_role_column' => 'bean_module',
    'relationship_role_column_value' => 'nlfwg_WorkingGroups', 
);
