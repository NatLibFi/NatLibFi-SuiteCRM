<?php

$dictionary["Contact"]["fields"]['related_system'] = array(
  'name' => 'related_system',
  'vname' => 'LBL_RELATED_SYSTEM',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'function' => 'getAllActiveBackEndSystems',
  'massupdate' => false,
);

