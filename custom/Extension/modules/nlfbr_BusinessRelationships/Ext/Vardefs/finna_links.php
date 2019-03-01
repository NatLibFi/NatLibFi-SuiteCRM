<?php

$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_link1'] = array(
  'name' => 'finna_link1',
  'vname' => 'LBL_FINNA_LINK',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getBRFinnaLinkWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_link'] = array(
  'name' => 'finna_link',
  'vname' => 'LBL_FINNA_LINK_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_link_description'] = array(
  'name' => 'finna_link_description',
  'vname' => 'LBL_FINNA_LINK_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
