<?php
// created: 2017-07-07 18:01:23
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_nlfbs_backendsystems_1"] = array (
  'name' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'module' => 'nlfbs_BackendSystems',
  'bean_name' => 'nlfbs_BackendSystems',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_busi06f0systems_idb"] = array (
  'name' => 'nlfbr_busi06f0systems_idb',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_nlfbs_backendsystems_enum"] = array (
  'name' => 'nlfbr_businessrelationships_nlfbs_backendsystems_enum',
  'type' => 'relatemultienum',
  'function' => array( 'name' => 'getActiveBackEndSystemsHtml', 'returns' => 'html' ),
  'relationship' => 'nlfbr_businessrelationships_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'module' => 'nlfbs_BackendSystems',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
  'id_name' => 'nlfbr_busi06f0systems_idb',
);
