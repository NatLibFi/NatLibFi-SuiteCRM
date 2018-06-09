<?php

$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source1'] = array(
  'name' => 'data_source1',
  'vname' => 'LBL_DATA_SOURCE',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getBRDataSourceWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source'] = array(
  'name' => 'data_source',
  'vname' => 'LBL_DATA_SOURCE_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source_backend_system'] = array(
  'name' => 'data_source_backend_system',
  'vname' => 'LBL_DATA_SOURCE_BACKEND_SYSTEM_TITLE',
  'type' => 'enum',
  'function' => array(
    'name' => 'getAllActiveBackEndSystems',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source_harvesting_format'] = array(
  'name' => 'data_source_harvesting_format',
  'vname' => 'LBL_DATA_SOURCE_HARVESTING_FORMAT_TITLE',
  'type' => 'enum',
  'options' => 'haravointiformaatti_list',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source_contact_email'] = array(
  'name' => 'data_source_contact_email',
  'vname' => 'LBL_DATA_SOURCE_CONTACT_EMAIL_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source_restricted_metadata'] = array(
  'name' => 'data_source_restricted_metadata',
  'vname' => 'LBL_DATA_SOURCE_RESTRICTED_METADATA_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["nlfbr_BusinessRelationships"]["fields"]['data_source_description'] = array(
  'name' => 'data_source_description',
  'vname' => 'LBL_DATA_SOURCE_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
