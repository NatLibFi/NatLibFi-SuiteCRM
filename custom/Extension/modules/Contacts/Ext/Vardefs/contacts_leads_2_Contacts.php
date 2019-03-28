<?php
// created: 2018-07-21 19:35:41
$dictionary["Contact"]["fields"]["contacts_leads_2"] = array (
  'name' => 'contacts_leads_2',
  'type' => 'link',
  'relationship' => 'contacts_leads_2',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_CONTACTS_LEADS_2_FROM_LEADS_TITLE',
);

$dictionary["Contact"]["fields"]["contacts_leads_2_contact_name"] = array (
  'name' => 'contacts_leads_2_contact_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_2_CONTACT_NAME',
  'save' => true,
  'id_name' => 'contacts_leads_2contacts_ida',
  'link' => 'contacts_leads_2',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'massupdate' => false,
  'massupdate' => false,
);

$dictionary["Contact"]["fields"]['contact_lead_br_role_fields'] = array(
  'name' => 'contact_lead_br_role_fields',
  'rname' => 'id',
  'relationship_fields' => array('id' => 'contacts_leads_2_id', 'role' => 'contacts_leads_2_role'),
  'vname' => 'LBL_CONTACTS_LEADS_2_FROM_LEADS_TITLE',
  'type' => 'relate',
  'link' => 'contacts_leads_2',
  'link_type' => 'relationship_info',
  'join_link_name' => 'contacts_leads_2',
  'source' => 'non-db',
  'importable' => 'false',
  'duplicate_merge' => 'disabled',
  'studio' => false,
  'join_primary' => false,
);
$dictionary["Contact"]["fields"]['contacts_leads_2_id'] = array(
  'name' => 'contacts_leads_2_id',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_2_ID',
  'studio' => array('listview' => false),
);

$dictionary["Contact"]["fields"]["contacts_leads_2_role"] = array (
  'name' => 'contacts_leads_2_role',
  'type' => 'multienum',
  'options' => 'contact_lead_role_list',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_2_ROLE',
  'massupdate' => false,
);

$dictionary["Contact"]["fields"]["contacts_leads_2_role_enum"] = array (
  'name' => 'contacts_leads_2_role_enum',
  'type' => 'multienum',
  'function' => array( 'name' => 'getLeadRolesForContactHtml', 'returns' => 'html' ),
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_LEADS_2_ROLE',
  'massupdate' => false,
);

