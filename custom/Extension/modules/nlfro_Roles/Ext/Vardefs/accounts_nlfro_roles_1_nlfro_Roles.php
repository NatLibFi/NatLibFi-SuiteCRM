<?php
// created: 2017-03-09 12:43:47
$dictionary["nlfro_Roles"]["fields"]["accounts_nlfro_roles_1"] = array (
  'name' => 'accounts_nlfro_roles_1',
  'type' => 'link',
  'relationship' => 'accounts_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_nlfro_roles_1accounts_ida',
);
$dictionary["nlfro_Roles"]["fields"]["accounts_nlfro_roles_1_name"] = array (
  'name' => 'accounts_nlfro_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_nlfro_roles_1accounts_ida',
  'link' => 'accounts_nlfro_roles_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["nlfro_Roles"]["fields"]["accounts_nlfro_roles_1accounts_ida"] = array (
  'name' => 'accounts_nlfro_roles_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_nlfro_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
);

// added 2017-03-17 (LM)
$dictionary["nlfro_Roles"]["fields"]["nlfro_roles_accounts_enum"] = array (
  'name' => 'nlfro_roles_accounts_enum',
  //'type' => 'relateenum',
  'type' => 'enum',
  'function' => array( 'name' => 'getActiveAccountsHtml', 'returns' => 'html' ),
  'relationship' => 'accounts_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'vname' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_nlfro_roles_1accounts_ida',
);
