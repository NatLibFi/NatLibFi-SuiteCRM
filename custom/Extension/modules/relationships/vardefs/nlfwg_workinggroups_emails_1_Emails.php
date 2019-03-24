<?php
// created: 2017-04-22 23:49:14
$dictionary["Email"]["fields"]["nlfwg_workinggroups_emails_1"] = array (
  'name' => 'nlfwg_workinggroups_emails_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_emails_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'bean_name' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_EMAILS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'id_name' => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
);
$dictionary["Email"]["fields"]["nlfwg_workinggroups_emails_1_name"] = array (
  'name' => 'nlfwg_workinggroups_emails_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_EMAILS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'save' => true,
  'id_name' => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
  'link' => 'nlfwg_workinggroups_emails_1',
  'table' => 'nlfwg_workinggroups',
  'module' => 'nlfwg_WorkingGroups',
  'rname' => 'name',
);
$dictionary["Email"]["fields"]["nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida"] = array (
  'name' => 'nlfwg_workinggroups_emails_1nlfwg_workinggroups_ida',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_emails_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_EMAILS_1_FROM_EMAILS_TITLE',
);
