<?php
// created: 2017-03-21 23:27:40
$dictionary["nlfro_Roles"]["fields"]["nlfbr_businessrelationships_nlfro_roles_1"] = array (
  'name' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'nlfbr_BusinessRelationships',
  'bean_name' => 'nlfbr_BusinessRelationships',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'id_name' => 'nlfbr_busi78f6onships_ida',
);
$dictionary["nlfro_Roles"]["fields"]["nlfbr_businessrelationships_nlfro_roles_1_name"] = array (
  'name' => 'nlfbr_businessrelationships_nlfro_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'save' => true,
  'id_name' => 'nlfbr_busi78f6onships_ida',
  'link' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'table' => 'nlfbr_businessrelationships',
  'module' => 'nlfbr_BusinessRelationships',
  'rname' => 'name',
);
$dictionary["nlfro_Roles"]["fields"]["nlfbr_busi78f6onships_ida"] = array (
  'name' => 'nlfbr_busi78f6onships_ida',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
);


// added 2017-03-21 (LM)
$dictionary["nlfro_Roles"]["fields"]["nlfro_roles_nlfbr_businessrelationships_enum"] = array (
  'name' => 'nlfro_roles_nlfbr_businessrelationships_enum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveBusinessRelationshipsHtml', 'returns' => 'html' ),
  //'options' => 'contact_businessrelationship_role_default_list',
  //'function' => array( 'name' => 'getDefaultBusinessRelationshipContactsHtml', 'returns' => 'html' ),
  'relationship' => 'nlfbr_businessrelationships_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'nlfbr_BusinessRelationships',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'id_name' => 'nlfbr_busi78f6onships_ida',
);

$dictionary["nlfro_Roles"]["fields"]["nlfro_roles_nlfbr_businessrelationships_accounts_enum"] = array(
  'name' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
  'type' => 'enum',
  //'options' => 'finna_contact_role_list',
  'function' => array( 'name' => 'getAllActiveAccountsInBusinessRelationshipsHtml', 'returns' => 'html' ),
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_ACCOUNTS_TITLE',
  //'id_name' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
);
