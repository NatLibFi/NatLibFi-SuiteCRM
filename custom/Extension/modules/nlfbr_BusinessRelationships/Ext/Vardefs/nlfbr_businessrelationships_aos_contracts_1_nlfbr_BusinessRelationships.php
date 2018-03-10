<?php
// created: 2017-02-21 22:28:24
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_aos_contracts_1"] = array (
  'name' => 'nlfbr_businessrelationships_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'nlfbr_busi9351onships_ida', // added: 2017-02-21 (LM)
);
// added: 2017-02-21 LM
/*$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_aos_contracts_1_name"] = array (
  'name' => 'nlfbr_businessrelationships_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'nlfbr_busi9351onships_ida',
  'link' => 'nlfbr_businessrelationships_aos_contracts_1',
  'table' => 'AOS_Contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);*/
// added: 2017-02-21 LM
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb"] = array (
  'name' => 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);
/*$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_aos_contracts_enum"] = array (
  'name' => 'nlfbr_businessrelationships_aos_contracts_enum',
  'type' => 'enum',
  //'function' => 'getActiveServices',
//'options' => 'Finna_palvelusopimus_liitteet_list',
  'function' => 'getAccountAlliances',
  //'relationship' => 'nlfbr_businessrelationships_aos_contracts_1',
  'source' => 'non-db',
  'save' => true,
  'link' => 'nlfbr_businessrelationships_aos_contracts_1',
  'table' => 'AOS_Contracts',
  'module' => 'AOS_Contracts',
  //'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_AOS_CONTRACTS_ENUM',
  //'id_name' => 'nlfbr_businessrelationships_aos_contracts_enum',
  'id_name' => 'nlfbr_businessrelationships_aos_contracts_foo',
);*/
$dictionary["nlfbr_BusinessRelationships"]["fields"]["nlfbr_businessrelationships_aos_contracts_enum"] = array (
  'name' => 'nlfbr_businessrelationships_aos_contracts_enum',
  /*'name' => 'nlfse_services_aos_contracts_1nlfse_services_ida',*/
  'type' => 'relatemultienum',
//  'function' => 'getActiveContracts', // TODO: FIME: filter by service
  'function' => array( 'name' => 'getActiveContractsHtml', 'returns' => 'html' ),
  'relationship' => 'nlfbr_businessrelationships_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
/*  'bean_name' => 'AOS_Contracts',*/
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
/*  //'id_name' => 'nlfbr_businessrelationships_aos_contracts_1_name',*/
  'id_name' => 'nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb',
/*  'save' => true,*/
/*  'link' => 'nlfbr_businessrelationships_aos_contracts_1',*/
/*  'rname' => 'name',*/
//  'valueFunction' => 'getActiveContractsForBusinessRelationship',
);

$dictionary["nlfbr_BusinessRelationships"]["fields"]['contract1'] = array(
  'name' => 'contract1',
  'vname' => 'LBL_CONTRACTS_TITLE',
  'group' => 'contract1',
  'type' => 'varchar',
  'function' => array(
      'name' => 'getBRContractWidget',
      'returns' => 'html',
      ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

// Hack: open_only prefix in field name makes bool field to be displayed as a checkbox not a drop down in the search form
// Found at: http://sugarmods.co.uk/adding-a-custom-search-filter-to-the-listview/
$dictionary["nlfbr_BusinessRelationships"]["fields"]['open_only_has_active_contract'] = array(
  'name' => 'open_only_has_active_contract',
  'vname' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
  'type' => 'bool',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
);

