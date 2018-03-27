<?php

$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_data_source1'] = array(
  'name' => 'finna_data_source1',
  'vname' => 'LBL_FINNA_DATA_SOURCE',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getBRFinnaDataSourceWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_data_source'] = array(
  'name' => 'finna_data_source',
  'vname' => 'LBL_FINNA_DATA_SOURCE_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_source_backend_system'] = array(
  'name' => 'finna_source_backend_system',
  'vname' => 'LBL_FINNA_SOURCE_BACKEND_SYSTEM_TITLE',
  'type' => 'enum',
  'function' => array(
    'name' => 'getAllActiveBackEndSystems',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_source_harvesting_format'] = array(
  'name' => 'finna_source_harvesting_format',
  'vname' => 'LBL_FINNA_SOURCE_HARVESTING_FORMAT_TITLE',
  'type' => 'enum',
  'options' => 'haravointiformaatti_list',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_source_contact_email'] = array(
  'name' => 'finna_source_contact_email',
  'vname' => 'LBL_FINNA_SOURCE_CONTACT_EMAIL_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_source_restricted_metadata'] = array(
  'name' => 'finna_source_restricted_metadata',
  'vname' => 'LBL_FINNA_SOURCE_RESTRICTED_METADATA_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['finna_source_description'] = array(
  'name' => 'finna_source_description',
  'vname' => 'LBL_FINNA_SOURCE_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
