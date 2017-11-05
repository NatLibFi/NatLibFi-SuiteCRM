<?php
// created: 2017-05-14 18:54:48
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1_name"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'nlfbr_businessrelationships_contacts_1nlfbr_busic409onships_ida',
  'link' => 'nlfbr_businessrelationships_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
//  array (
//    0 => 'first_name',
//    1 => 'last_name',
//  ),
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1nlfbr_busic409onships_ida"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1nlfbr_busic409onships_ida',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]['contact_role_fields'] = array(
  'name' => 'contact_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfbr_businessrelationships_contacts_1_id', 'role' => 'nlfbr_businessrelationships_contacts_1_role'),
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
  'type' => 'relate',
  //'link' => 'contacts',
  'link' => 'nlfbr_businessrelationships_contacts_1',
  'link_type' => 'relationship_info',
  'join_link_name' => 'nlfbr_businessrelationships_contacts_1',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
//TODO: maybe not needed?
$dictionary["nlfbr_BusinessRelationships"]["fields"]['nlfbr_businessrelationships_contacts_1_id'] = array(
  'name' => 'nlfbr_businessrelationships_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1_role"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1_role',
  'type' => 'multienum',
  'options' => 'contact_business_relationship_role_list',
  //'function' => array( 'name' => 'getBusinessRelationshipRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
  //'save' => true,
  //'id_name' => 'role',
//  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  //'link' => 'nlfbr_businessrelationships_contacts_1',
  //'table' => 'contacts',
//  'module' => 'Contacts',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1_role_enum"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1_role_enum',
  'type' => 'multienum',
  //'options' => 'contact_business_relationship_role_list',
  'function' => array( 'name' => 'getBusinessRelationshipRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
  //'save' => true,
  //'id_name' => 'role',
//  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  //'link' => 'nlfbr_businessrelationships_contacts_1',
  //'table' => 'contacts',
//  'module' => 'Contacts',
);


$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1_businessrelationships_enum"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1_businessrelationships_enum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveBusinessRelationshipsHtml2', 'returns' => 'html' ),
  //'options' => 'contact_businessrelationship_role_default_list',
  //'function' => array( 'name' => 'getDefaultBusinessRelationshipContactsHtml', 'returns' => 'html' ),
  //'relationship' => 'nlfbr_businessrelationships_contacts_1_role',
  'source' => 'non-db',
  //'module' => 'nlfbr_BusinessRelationships',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_BUSINESS_RELATIONSHIP_TITLE',
  'id_name' => 'nlfbr_busic409onships_ida',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1_accounts_enum"] = array(
  'name' => 'nlfbr_businessrelationships_contacts_1_accounts_enum',
  'type' => 'enum',
  //'options' => 'finna_contact_role_list',
  'function' => array( 'name' => 'getAllActiveAccountsInBusinessRelationshipsHtml2', 'returns' => 'html' ),
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ACCOUNT_TITLE',
  //'id_name' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
  'source' => 'non-db',
);
