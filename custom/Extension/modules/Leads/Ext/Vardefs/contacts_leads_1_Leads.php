<?php
// created: 2017-08-25 20:52:36
$dictionary["Lead"]["fields"]["contacts_leads_1"] = array (
  'name' => 'contacts_leads_1',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_leads_1contacts_ida',
);
$dictionary["Lead"]["fields"]["contacts_leads_1_name"] = array (
  'name' => 'contacts_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Lead"]["fields"]["contacts_leads_1contacts_ida"] = array (
  'name' => 'contacts_leads_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_LEADS_TITLE',
);

$dictionary["Lead"]["fields"]["contacts_leads_1_first_name"] = array (
  'name' => 'contacts_leads_1_first_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE_FIRST_NAME',
  'save' => true,
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'first_name',
  'studio' => array('visible' => false),
);
$dictionary["Lead"]["fields"]["contacts_leads_1_last_name"] = array (
  'name' => 'contacts_leads_1_last_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_1_FROM_CONTACTS_TITLE_LAST_NAME',
  'save' => true,
  'id_name' => 'contacts_leads_1contacts_ida',
  'link' => 'contacts_leads_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'last_name',
  'studio' => array('visible' => false),
);

