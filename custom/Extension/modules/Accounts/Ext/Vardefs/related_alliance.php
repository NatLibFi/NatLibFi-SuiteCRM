<?php

$dictionary["Account"]["fields"]['related_alliance'] = array(
  'name' => 'related_alliance',
  'vname' => 'LBL_RELATED_ALLIANCE',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'id_name' => 'nlfal_alliances_accounts_1nlfal_alliances_ida',
  'function' => 'getAllActiveAlliances',
  'massupdate' => false,
);
