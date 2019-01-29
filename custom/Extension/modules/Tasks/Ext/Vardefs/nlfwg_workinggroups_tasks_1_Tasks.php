<?php
// created: 2017-04-05 00:38:29
$dictionary["Task"]["fields"]["nlfwg_workinggroups_tasks_1"] = array (
  'name' => 'nlfwg_workinggroups_tasks_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_tasks_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'bean_name' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_TASKS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'id_name' => 'nlfwg_workinggroups_tasks_1nlfwg_workinggroups_ida',
);
$dictionary["Task"]["fields"]["nlfwg_workinggroups_tasks_1_name"] = array (
  'name' => 'nlfwg_workinggroups_tasks_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_TASKS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'save' => true,
  'id_name' => 'nlfwg_workinggroups_tasks_1nlfwg_workinggroups_ida',
  'link' => 'nlfwg_workinggroups_tasks_1',
  'table' => 'nlfwg_workinggroups',
  'module' => 'nlfwg_WorkingGroups',
  'rname' => 'name',
);
$dictionary["Task"]["fields"]["nlfwg_workinggroups_tasks_1nlfwg_workinggroups_ida"] = array (
  'name' => 'nlfwg_workinggroups_tasks_1nlfwg_workinggroups_ida',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_tasks_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_TASKS_1_FROM_TASKS_TITLE',
);
