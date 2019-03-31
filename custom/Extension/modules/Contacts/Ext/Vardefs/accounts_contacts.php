<?php

$dictionary["Contact"]["fields"]["accounts_contacts_contact_name"] = array (
  'name' => 'accounts_contacts_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'contact_id',
  'link' => 'accounts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'massupdate' => false,
);

$dictionary["Contact"]["fields"]['contact_account_role_fields'] = array(
  'name' => 'contact_account_role_fields',
  'rname' => 'id',
  'relationship_fields' => array(
    'id' => 'accounts_contacts_id',
    'role' => 'accounts_contacts_role'
  ),
  'vname' => 'LBL_ACCOUNTS_CONTACTS_CONTACT_TITLE',
  'type' => 'relate',
  'link' => 'accounts',
  'link_type' => 'relationship_info',
  'join_link_name' => 'accounts_contacts',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
//TODO: maybe not needed?
$dictionary["Contact"]["fields"]['accounts_contacts_id'] = array(
  'name' => 'accounts_contacts_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ID',
  'studio' => array('listview' => false),
);

$dictionary["Contact"]["fields"]["accounts_contacts_role"] = array (
  'name' => 'accounts_contacts_role',
  'type' => 'multienum',
  'options' => 'contact_account_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
  'massupdate' => false,
);
$dictionary["Contact"]["fields"]["accounts_contacts_role_enum"] = array (
  'name' => 'accounts_contacts_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getAccountRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
  'massupdate' => false,
);


$dictionary["Contact"]["fields"]["accounts_contacts_role_incl_businessrelationships"] = array (
  'name' => 'accounts_contacts_role_incl_businessrelationships',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
  'studio' => array('detailview' => false, 'editview' => false),
  'sortable' => false,
);


$dictionary["Contact"]["fields"]['account1'] = array(
  'name' => 'account1',
  'vname' => 'LBL_TODO_ACCOUNT_IS_ALREADY',
  'group' => 'account1',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getContactAccountWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('editField' => true, 'searchview' => false),
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Contact"]["fields"]['account_department'] = array(
  'name' => 'account_department',
  'vname' => 'LBL_CONTACT_ACCOUNT_DEPT_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Contact"]["fields"]['account_address'] = array(
  'name' => 'account_address',
  'vname' => 'LBL_CONTACT_ACCOUNT_ADDRESS_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Contact"]["fields"]['account_description'] = array(
  'name' => 'account_description',
  'vname' => 'LBL_CONTACT_ACCOUNT_DESC_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

$dictionary["Contact"]["fields"]["contact_account_names"] = array (
    'name' => 'contact_account_names',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_CONTACT_ACCOUNT_NAMES',
    'studio' => array('detailview' => false, 'editview' => false, 'listview' => true, 'searchview' => false),
    'sortable' => false,
  'massupdate' => false,
);
