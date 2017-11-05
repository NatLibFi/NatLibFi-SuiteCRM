<?php

// Hack: open_only prefix in field name makes bool field to be displayed as a checkbox not a drop down in the search form
// Found at: http://sugarmods.co.uk/adding-a-custom-search-filter-to-the-listview/
$dictionary["Account"]["fields"]['open_only_has_active_contract'] = array(
  'name' => 'open_only_has_active_contract',
  'vname' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
  'type' => 'bool',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
);

