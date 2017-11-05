<?php
// created: 2016-09-28 13:35:03
$dictionary["Account"]["fields"]["nlfse_services_accounts_1"] = array (
  'name' => 'nlfse_services_accounts_1',
  'type' => 'link',
  'relationship' => 'nlfse_services_accounts_1',
  'source' => 'non-db',
  'module' => 'nlfse_Services',
  'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_1_FROM_NLFSE_SERVICES_TITLE',
  'id_name' => 'nlfse_services_accounts_1nlfse_services_ida', // added: 2016-11-25 LM
);
// added: 2016-11-25 LM
$dictionary["Account"]["fields"]["nlfse_services_accounts_1_name"] = array (
  'name' => 'nlfse_services_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_1_FROM_NLFSE_SERVICES_TITLE',
  'save' => true,
  'id_name' => 'nlfse_services_accounts_1nlfse_services_ida',
  'link' => 'nlfse_services_accounts_1',
  'table' => 'nlfse_services',
  'module' => 'nlfse_Services',
  'rname' => 'name',
);
// added: 2016-11-25 LM
$dictionary["Account"]["fields"]["nlfse_services_accounts_1nlfse_services_ida"] = array (
  'name' => 'nlfse_services_accounts_1nlfse_services_ida',
  'type' => 'link',
  'relationship' => 'nlfse_services_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_1_FROM_NLFSE_SERVICES_TITLE',
);

// added: 2016-12-04 LM
$dictionary["Account"]["fields"]["nlfse_services_accounts_enum"] = array (
  'name' => 'nlfse_services_accounts_enum',
  'type' => 'enum',
  'function' => 'getActiveServices',
  'relationship' => 'nlfse_services_accounts_1',
  'source' => 'non-db',
  'module' => 'nlfse_Services',
  'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_ENUM',
  'id_name' => 'nlfse_services_accounts_enum',
);
