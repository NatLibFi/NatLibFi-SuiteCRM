<?php

$dictionary["Account"]["fields"]['related_active_contract'] = array(
  'name' => 'related_active_contract',
  'vname' => 'LBL_RELATED_ACTIVE_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllActiveContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);

$dictionary["Account"]["fields"]['related_contract'] = array(
  'name' => 'related_contract',
  'vname' => 'LBL_RELATED_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);

$dictionary["Account"]["fields"]['contract_year'] = array(
  'name' => 'contract_year',
  'vname' => 'LBL_CONTRACT_YEAR',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);
