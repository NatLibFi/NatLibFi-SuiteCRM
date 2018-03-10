<?php
// created: 2016-12-29 11:03:50
$dictionary["Contact"]["fields"]["nlfal_alliances_contacts_1"] = array (
  'name' => 'nlfal_alliances_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_contacts_1',
  'source' => 'non-db',
  'module' => 'nlfal_Alliances',
  'bean_name' => 'nlfal_Alliances',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_FROM_NLFAL_ALLIANCES_TITLE',
);

$dictionary["Contact"]["fields"]["nlfal_alliances_contacts_1_contact_name"] = array (
  'name' => 'nlfal_alliances_contacts_1_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_CONTACT_TITLE',
  'save' => true,
  'id_name' => 'nlfal_alliances_contacts_1contacts_idb',
  'link' => 'nlfal_alliances_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
//  array (
//    0 => 'first_name',
//    1 => 'last_name',
//  ),
);

$dictionary["Contact"]["fields"]['contact_alliance_role_fields'] = array(
  'name' => 'contact_alliance_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfal_alliances_contacts_1_id', 'role' => 'nlfal_alliances_contacts_1_role'),
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_CONTACT_TITLE',
  'type' => 'relate',
  //'link' => 'contacts',
  'link' => 'nlfal_alliances_contacts_1',
  'link_type' => 'relationship_info',
  'join_link_name' => 'nlfal_alliances_contacts_1',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
//TODO: maybe not needed?
$dictionary["Contact"]["fields"]['nlfal_alliances_contacts_1_id'] = array(
  'name' => 'nlfal_alliances_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);

$dictionary["Contact"]["fields"]["nlfal_alliances_contacts_1_role"] = array (
  'name' => 'nlfal_alliances_contacts_1_role',
  'type' => 'multienum',
  'options' => 'contact_alliance_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
);
$dictionary["Contact"]["fields"]["nlfal_alliances_contacts_1_role_enum"] = array (
  'name' => 'nlfal_alliances_contacts_1_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getAllianceRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
);
