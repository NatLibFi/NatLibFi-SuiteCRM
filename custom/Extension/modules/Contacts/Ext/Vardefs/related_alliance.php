<?php

$dictionary["Contact"]["fields"]['related_alliance'] = array(
  'name' => 'related_alliance',
  'vname' => 'LBL_RELATED_ALLIANCE',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'function' => 'getAllActiveAlliances',
  'massupdate' => false,
);

