<?php
// created: 2016-12-27 15:00:02
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfse_services_nlfbr_businessrelationships_1"] = array (
  'name' => 'nlfse_services_nlfbr_businessrelationships_1',
  'type' => 'link',
  'relationship' => 'nlfse_services_nlfbr_businessrelationships_1',
  'source' => 'non-db',
  'module' => 'nlfse_Services',
  'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE',
  'id_name' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfse_services_nlfbr_businessrelationships_1_name"] = array (
  'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE',
  'save' => true,
  'id_name' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
  'link' => 'nlfse_services_nlfbr_businessrelationships_1',
  'table' => 'nlfse_services',
  'module' => 'nlfse_Services',
  'rname' => 'name',
);
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida"] = array (
  'name' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
  'type' => 'link',
  'relationship' => 'nlfse_services_nlfbr_businessrelationships_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
);
