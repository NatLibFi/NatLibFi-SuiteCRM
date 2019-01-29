<?php
// created: 2016-09-29 17:08:42
$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_accounts_1"] = array (
  'name' => 'nlfal_alliances_accounts_1',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);

$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_accounts_1_name"] = array (
  'name' => 'nlfal_alliances_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
  'save' => true,
  'id_name' => 'nlfal_alliances_accounts_1accounts_idb',
  'link' => 'nlfal_alliances_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
  'studio' => array('detailview' => false, 'editview' => false, 'listview' => false, 'searchview' => true),
);

$dictionary["nlfal_Alliances"]["fields"]["nlfal_alliances_accounts_1accounts_idb"] = array (
  'name' => 'nlfal_alliances_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
