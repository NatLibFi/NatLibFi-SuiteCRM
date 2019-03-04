<?php

$dictionary["Contact"]["fields"]['related_active_contract'] = array(
  'name' => 'related_active_contract',
  'vname' => 'LBL_RELATED_ACTIVE_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllActiveContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);
