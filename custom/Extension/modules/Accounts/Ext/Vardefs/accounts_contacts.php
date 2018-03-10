<?php

$dictionary["Account"]["fields"]['contact_role_fields'] = array(
  'name' => 'contact_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'accounts_contacts_id', 'role' => 'accounts_contacts_role'),
  'vname' => 'LBL_ACCOUNTS_CONTACTS_CONTACT_TITLE',// TODO: rename! LBL_CONTACTS or something else?
  'type' => 'relate',
  //'link' => 'accounts_contacts',
  'link' => 'contacts',
  'link_type' => 'relationship_info',
  'join_link_name' => 'accounts_contacts',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
//TODO: maybe not needed?
$dictionary["Account"]["fields"]['accounts_contacts_id'] = array(
  'name' => 'accounts_contacts_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ID',
  'studio' => array('listview' => false),
);
$dictionary["Account"]["fields"]["accounts_contacts_role"] = array (
  'name' => 'accounts_contacts_role',
  'type' => 'multienum',
  'options' => 'contact_account_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
);

$dictionary["Account"]["fields"]["accounts_contacts_role_enum"] = array (
  'name' => 'accounts_contacts_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getAccountRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
);

$dictionary["Account"]["fields"]["accounts_contacts_account_enum"] = array (
  'name' => 'accounts_contacts_account_enum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveAccountsHtml2', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CONTACTS_ACCOUNT_TITLE',
  'id_name' => 'account_id',
);
