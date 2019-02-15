<?php

$dictionary["Account"]["fields"]['related_contract'] = array(
  'name' => 'related_contract',
  'vname' => 'LBL_RELATED_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);
