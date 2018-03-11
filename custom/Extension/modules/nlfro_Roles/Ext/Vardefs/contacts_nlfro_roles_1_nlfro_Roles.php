<?php
// created: 2017-03-09 12:43:05
$dictionary["nlfro_Roles"]["fields"]["contacts_nlfro_roles_1"] = array (
  'name' => 'contacts_nlfro_roles_1',
  'type' => 'link',
  'relationship' => 'contacts_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_nlfro_roles_1contacts_ida',
);
$dictionary["nlfro_Roles"]["fields"]["contacts_nlfro_roles_1_name"] = array (
  'name' => 'contacts_nlfro_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_nlfro_roles_1contacts_ida',
  'link' => 'contacts_nlfro_roles_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["nlfro_Roles"]["fields"]["contacts_nlfro_roles_1contacts_ida"] = array (
  'name' => 'contacts_nlfro_roles_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_nlfro_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
);
