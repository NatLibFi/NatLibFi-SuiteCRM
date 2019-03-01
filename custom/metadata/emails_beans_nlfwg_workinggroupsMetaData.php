<?php

// Adds linking of Emails to Working Group beans, using email_beans table
// as it is done with other beans (e.g. Accounts).

//$dictionary['emails_beans']['relationships']['emails_nlfwg_workinggroups_rel'] = array(
$dictionary['emails_beans']['relationships']['nlfwg_workinggroups_activities_emails'] = array(
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
