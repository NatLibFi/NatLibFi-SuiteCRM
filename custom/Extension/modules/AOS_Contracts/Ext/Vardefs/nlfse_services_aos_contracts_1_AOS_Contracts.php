<?php
// created: 2017-02-25 00:30:42
$dictionary["AOS_Contracts"]["fields"]["nlfse_services_aos_contracts_1"] = array (
  'name' => 'nlfse_services_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'nlfse_services_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'nlfse_Services',
  'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_NLFSE_SERVICES_AOS_CONTRACTS_1_FROM_NLFSE_SERVICES_TITLE',
  'id_name' => 'nlfse_services_aos_contracts_1nlfse_services_ida',
);
$dictionary["AOS_Contracts"]["fields"]["nlfse_services_aos_contracts_1_name"] = array (
  'name' => 'nlfse_services_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  //'vname' => 'LBL_NLFSE_SERVICES_AOS_CONTRACTS_1_FROM_NLFSE_SERVICES_TITLE',
  //changed: 2017-02-26 (LM)
  'vname' => 'LBL_SERVICE_NAME',
  'save' => true,
  'id_name' => 'nlfse_services_aos_contracts_1nlfse_services_ida',
  'link' => 'nlfse_services_aos_contracts_1',
  'table' => 'nlfse_services',
  'module' => 'nlfse_Services',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["nlfse_services_aos_contracts_1nlfse_services_ida"] = array (
  'name' => 'nlfse_services_aos_contracts_1nlfse_services_ida',
  'type' => 'link',
  'relationship' => 'nlfse_services_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFSE_SERVICES_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);
