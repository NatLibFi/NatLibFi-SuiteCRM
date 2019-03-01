<?php
// created: 2016-09-29 12:54:42
$dictionary["nlfwg_WorkingGroups"]["fields"]["nlfwg_workinggroups_contacts_1"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_FROM_CONTACTS_TITLE',
);

$dictionary["nlfwg_WorkingGroups"]["fields"]['contact_role_fields'] = array(
  'name' => 'contact_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfwg_workinggroups_contacts_1_id', 'role' => 'nlfwg_workinggroups_contacts_1_role'),
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_CONTACT_TITLE',
  'type' => 'relate',
  'link' => 'nlfwg_workinggroups_contacts_1',
  'link_type' => 'relationship_info',
  'join_link_name' => 'nlfwg_workinggroups_contacts_1',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
//TODO: maybe not needed?
$dictionary["nlfwg_WorkingGroups"]["fields"]['nlfwg_workinggroups_contacts_1_id'] = array(
  'name' => 'nlfwg_workinggroups_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);
$dictionary["nlfwg_WorkingGroups"]["fields"]["nlfwg_workinggroups_contacts_1_role"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_role',
  'type' => 'multienum',
  'options' => 'contact_working_group_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
);

$dictionary["nlfwg_WorkingGroups"]["fields"]["nlfwg_workinggroups_contacts_1_role_enum"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getWorkingGroupRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
);

$dictionary["nlfwg_WorkingGroups"]["fields"]["nlfwg_workinggroups_contacts_1_workinggroup_enum"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_workinggroup_enum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveWorkingGroupsHtml2', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_WORKING_GROUP_TITLE',
  'id_name' => 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida',
);
