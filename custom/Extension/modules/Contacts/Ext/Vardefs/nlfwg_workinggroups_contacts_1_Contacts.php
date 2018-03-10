<?php
// created: 2016-09-29 12:54:42
$dictionary["Contact"]["fields"]["nlfwg_workinggroups_contacts_1"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfwg_workinggroups_contacts_1',
  'source' => 'non-db',
  'module' => 'nlfwg_WorkingGroups',
  'bean_name' => 'nlfwg_WorkingGroups',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
);

$dictionary["Contact"]["fields"]["nlfwg_workinggroups_contacts_1_contact_name"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'nlfwg_workinggroups_contacts_1contacts_idb',
  'link' => 'nlfwg_workinggroups_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
//  array (
//    0 => 'first_name',
//    1 => 'last_name',
//  ),
);


$dictionary["Contact"]["fields"]['contact_wg_role_fields'] = array(
  'name' => 'contact_wg_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfwg_workinggroups_contacts_1_id', 'role' => 'nlfwg_workinggroups_contacts_1_role'),
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_CONTACT_TITLE',
  'type' => 'relate',
  //'link' => 'contacts',
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
$dictionary["Contact"]["fields"]['nlfwg_workinggroups_contacts_1_id'] = array(
  'name' => 'nlfwg_workinggroups_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);

$dictionary["Contact"]["fields"]["nlfwg_workinggroups_contacts_1_role"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_role',
  'type' => 'multienum',
  'options' => 'contact_working_group_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
);
$dictionary["Contact"]["fields"]["nlfwg_workinggroups_contacts_1_role_enum"] = array (
  'name' => 'nlfwg_workinggroups_contacts_1_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getWorkingGroupRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
);
