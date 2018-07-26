<?php
// created: 2016-09-29 17:08:42
$dictionary["Account"]["fields"]["nlfal_alliances_accounts_1"] = array (
  'name' => 'nlfal_alliances_accounts_1',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_accounts_1',
  'source' => 'non-db',
  'module' => 'nlfal_Alliances',
  'bean_name' => 'nlfal_Alliances',
  'vname' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_NLFAL_ALLIANCES_TITLE',
);

$dictionary["Account"]["fields"]["related_alliance_enum"] = array (
  'name' => 'related_alliance_enum',
  'type' => 'enum',
  'function' => 'getAllActiveAlliances',
  'source' => 'non-db',
  'vname' => 'LBL_RELATED_ALLIANCE_ENUM',
  'studio' => array('detailview' => false, 'editview' => false, 'listview' => false, 'searchview' => true),
  'massupdate' => false,
);
