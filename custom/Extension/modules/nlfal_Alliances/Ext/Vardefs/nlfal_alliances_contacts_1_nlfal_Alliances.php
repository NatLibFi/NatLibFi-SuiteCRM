<?php
// created: 2016-12-29 11:03:50
$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_contacts_1"] = array (
  'name' => 'nlfal_alliances_contacts_1',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_FROM_CONTACTS_TITLE',
);

$dictionary["nlfal_Alliances"]["fields"]['contact_role_fields'] = array(
  'name' => 'contact_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'nlfal_alliances_contacts_1_id', 'role' => 'nlfal_alliances_contacts_1_role'),
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_CONTACT_TITLE',
  'type' => 'relate',
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
$dictionary["nlfal_Alliances"]["fields"]['nlfal_alliances_contacts_1_id'] = array(
  'name' => 'nlfal_alliances_contacts_1_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ID',
  'studio' => array('listview' => false),
);
$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_contacts_1_role"] = array (
  'name' => 'nlfal_alliances_contacts_1_role',
  'type' => 'multienum',
  'options' => 'contact_alliance_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
);

$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_contacts_1_role_enum"] = array (
  'name' => 'nlfal_alliances_contacts_1_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getAllianceRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
);

$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_contacts_1_alliance_enum"] = array (
  'name' => 'nlfal_alliances_contacts_1_alliance_enum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveAlliancesHtml2', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ALLIANCE_TITLE',
  'id_name' => 'nlfal_alliances_contacts_1nlfal_alliances_ida',
);
