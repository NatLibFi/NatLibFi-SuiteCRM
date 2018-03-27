<?php
// created: 2017-05-12 11:38:09
$dictionary["Account"]["fields"]["accounts_nlfbs_backendsystems_1"] = array (
  'name' => 'accounts_nlfbs_backendsystems_1',
  'type' => 'link',
  'relationship' => 'accounts_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'module' => 'nlfbs_BackendSystems',
  'bean_name' => 'nlfbs_BackendSystems',
  'vname' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
);

$dictionary["Account"]["fields"]["accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb"] = array (
  'name' => 'accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb',
  'type' => 'link',
  'relationship' => 'accounts_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
);
$dictionary["Account"]["fields"]["accounts_nlfbs_backendsystems_enum"] = array (
  'name' => 'accounts_nlfbs_backendsystems_enum',
  'type' => 'relatemultienum',
  'function' => array( 'name' => 'getActiveBackEndSystemsHtml', 'returns' => 'html' ),
  'relationship' => 'accounts_nlfbs_backendsystems_1',
  'source' => 'non-db',
  'module' => 'nlfbs_BackendSystems',
  //'bean_name' => 'nlfbs_BackendSystems',
  'vname' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
  'id_name' => 'accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb',
  'audited' => true,
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Account"]["fields"]['backend_system_id'] = array(
  'name' => 'backend_system_id',
  'vname' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);


