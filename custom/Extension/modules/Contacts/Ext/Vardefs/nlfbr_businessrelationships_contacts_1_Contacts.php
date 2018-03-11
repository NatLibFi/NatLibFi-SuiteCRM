<?php
// created: 2017-05-14 18:54:48
$dictionary["Contact"]["fields"]["nlfbr_businessrelationships_contacts_1"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  'source' => 'non-db',
  'module' => 'nlfbr_BusinessRelationships',
  'bean_name' => 'nlfbr_BusinessRelationships',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
);

$dictionary["Contact"]["fields"]["nlfbr_businessrelationships_contacts_1_contact_name"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'nlfbr_businessrelationships_contacts_1contacts_idb',
  'link' => 'nlfbr_businessrelationships_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
//  array (
//    0 => 'first_name',
//    1 => 'last_name',
//  ),
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_contacts_1contacts_idb"] = array (
  'name' => 'nlfbr_businessrelationships_contacts_1contacts_idb',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_CONTACT_TITLE',
);


$dictionary["Contact"]["fields"]['contact_role_fields'] = array(
  'name' => 'contact_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfbr_businessrelationships_contacts_1_id', 'role' => 'nlfbr_businessrelationships_contacts_1_role'),
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_FROM_CONTACTS_TITLE',
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
$dictionary["Contact"]["fields"]['nlfbr_businessrelationships_contacts_1_id'] = array(
  'name' => 'nlfbr_businessrelationships_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);

$dictionary["Contact"]["fields"]["nlfbr_businessrelationships_contacts_1_role"] = array (
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

$dictionary["Contact"]["fields"]["nlfbr_businessrelationships_contacts_1_role_enum"] = array (
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

