<?php
// created: 2017-04-21 17:16:51
$dictionary["Meeting"]["fields"]["nlfwg_workinggroups_meetings_1"] = array (
  'name' => 'nlfwg_workinggroups_meetings_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_meetings_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'bean_name' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_MEETINGS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'id_name' => 'nlfwg_workinggroups_meetings_1nlfwg_workinggroups_ida',
);
$dictionary["Meeting"]["fields"]["nlfwg_workinggroups_meetings_1_name"] = array (
  'name' => 'nlfwg_workinggroups_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_MEETINGS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'save' => true,
  'id_name' => 'nlfwg_workinggroups_meetings_1nlfwg_workinggroups_ida',
  'link' => 'nlfwg_workinggroups_meetings_1',
  'table' => 'nlfwg_workinggroups',
  'module' => 'nlfwg_WorkingGroups',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["nlfwg_workinggroups_meetings_1nlfwg_workinggroups_ida"] = array (
  'name' => 'nlfwg_workinggroups_meetings_1nlfwg_workinggroups_ida',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_MEETINGS_1_FROM_MEETINGS_TITLE',
);
