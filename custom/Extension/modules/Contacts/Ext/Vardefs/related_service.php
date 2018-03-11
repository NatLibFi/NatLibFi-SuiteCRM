<?php

$dictionary["Contact"]["fields"]['related_service'] = array(
  'name' => 'related_service',
  'vname' => 'LBL_RELATED_SERVICE_TITLE',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'function' => 'getActiveServices',
);

