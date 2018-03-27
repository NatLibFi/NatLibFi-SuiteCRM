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
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_url'] = array(
  'name' => 'finna_view_url',
  'vname' => 'LBL_FINNA_VIEW_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_data_access'] = array(
  'name' => 'finna_view_data_access',
  'vname' => 'LBL_FINNA_VIEW_ADMIN_ACCESS_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_status'] = array(
  'name' => 'finna_view_status',
  'vname' => 'LBL_FINNA_VIEW_STATUS_TITLE',
  'options' => 'finnanakyma_status_list',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_view_description'] = array(
  'name' => 'finna_view_description',
  'vname' => 'LBL_FINNA_VIEW_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
