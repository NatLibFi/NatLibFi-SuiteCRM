<?php
// created: 2016-12-27 14:48:00
$dictionary["nlfbr_BusinessRelationships"]["fields"]["accounts_nlfbr_businessrelationships_1"] = array (
  'name' => 'accounts_nlfbr_businessrelationships_1',
  'type' => 'link',
  'relationship' => 'accounts_nlfbr_businessrelationships_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["accounts_nlfbr_businessrelationships_1_name"] = array (
  'name' => 'accounts_nlfbr_businessrelationships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  //'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE',
  'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
  'save' => true,
  'id_name' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
  'link' => 'accounts_nlfbr_businessrelationships_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
  'required' => true, // Added: 2016-12-27 (LM)
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["accounts_nlfbr_businessrelationships_1accounts_ida"] = array (
  'name' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_nlfbr_businessrelationships_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
);


// Added: 2017-02-19 (LM)
$dictionary["Account"]["fields"]["nlfbr_businessrelationships_account_alliances"] = array (
  'name' => 'nlfbr_businessrelationships_account_alliances',
  'type' => 'enum',
  'function' => 'getAccountAlliances',
  'relationship' => 'accounts_nlfbr_businessrelationships_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_ACCOUNT_ALLIANCES',
  'id_name' => 'nlfbr_businessrelationships_account_alliances',
);
