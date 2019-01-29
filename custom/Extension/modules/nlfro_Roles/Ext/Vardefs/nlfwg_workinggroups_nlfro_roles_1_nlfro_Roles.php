<?php
// created: 2017-03-09 12:44:28
$dictionary["nlfro_Roles"]["fields"]["nlfwg_workinggroups_nlfro_roles_1"] = array (
  'name' => 'nlfwg_workinggroups_nlfro_roles_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'bean_name' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'id_name' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
);
$dictionary["nlfro_Roles"]["fields"]["nlfwg_workinggroups_nlfro_roles_1_name"] = array (
  'name' => 'nlfwg_workinggroups_nlfro_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'save' => true,
  'id_name' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
  'link' => 'nlfwg_workinggroups_nlfro_roles_1',
  'table' => 'nlfwg_workinggroups',
  'module' => 'nlfwg_WorkingGroups',
  'rname' => 'name',
);
$dictionary["nlfro_Roles"]["fields"]["nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida"] = array (
  'name' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_nlfro_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
);

// added 2017-03-10 (LM)
$dictionary["nlfro_Roles"]["fields"]["nlfro_roles_nlfwg_working_groups_enum"] = array (
  'name' => 'nlfro_roles_nlfwg_working_groups_enum',
  //'type' => 'relateenum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveWorkingGroupsHtml', 'returns' => 'html' ),
  'relationship' => 'nlfwg_workinggroups_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
  'id_name' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
);
