<?php

// Hack: open_only prefix in field name makes bool field to be displayed as a checkbox not a drop down in the search form
// Found at: http://sugarmods.co.uk/adding-a-custom-search-filter-to-the-listview/
$dictionary["Contact"]["fields"]['open_only_has_active_contract'] = array(
  'name' => 'open_only_has_active_contract',
  'vname' => 'LBL_HAS_ACTIVE_CONTRACT',
  'type' => 'bool',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);
$dictionary["Contact"]["fields"]['related_active_contract'] = array(
  'name' => 'related_active_contract',
  'vname' => 'LBL_RELATED_ACTIVE_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllActiveContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);

$dictionary["Contact"]["fields"]['related_contract'] = array(
  'name' => 'related_contract',
  'vname' => 'LBL_RELATED_CONTRACT',
  'type' => 'enum',
  'function' => 'getAllContractsForAllServices',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);

$dictionary["Contact"]["fields"]['contract_year'] = array(
  'name' => 'contract_year',
  'vname' => 'LBL_CONTRACT_YEAR',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'massupdate' => false,
);
