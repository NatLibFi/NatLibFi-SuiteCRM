<?php

$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view1'] = array(
  'name' => 'finna_view1',
  'vname' => 'LBL_FINNA_VIEW',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getBRFinnaViewWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
  'massupdate' => false,
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_moved_to_production_date'] = array(
  'name' => 'finna_view_moved_to_production_date',
  'vname' => 'LBL_FINNA_VIEW_PRODUCTION_DATE_TITLE',
  'type' => 'date',
  'source' => 'non-db',
  'studio' => array('detailview' => false, 'editview' => false, 'listview' => false, 'searchview' => true),
  'enable_range_search' => true,
  'options' => 'date_range_search_dom',
  'massupdate' => false,
);


// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_url'] = array(
  'name' => 'finna_view_url',
  'vname' => 'LBL_FINNA_VIEW_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
  'massupdate' => false,
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_status'] = array(
  'name' => 'finna_view_status',
  'vname' => 'LBL_FINNA_VIEW_STATUS_TITLE',
  'options' => 'finnanakyma_status_list',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('visible' => false),
  'massupdate' => false,
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_production_date'] = array(
  'name' => 'finna_view_production_date',
  'vname' => 'LBL_FINNA_VIEW_PRODUCTION_DATE_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
  'massupdate' => false,
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_description'] = array(
  'name' => 'finna_view_description',
  'vname' => 'LBL_FINNA_VIEW_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
  'massupdate' => false,
);
