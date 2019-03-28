<?php
// created: 2018-05-16 00:05:30
$dictionary["Lead"]["fields"]["nlfbr_businessrelationships_leads_1"] = array (
  'name' => 'nlfbr_businessrelationships_leads_1',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_leads_1',
  'source' => 'non-db',
  'module' => 'nlfbr_BusinessRelationships',
  'bean_name' => 'nlfbr_BusinessRelationships',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_LEADS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'id_name' => 'nlfbr_busif7d0onships_ida',
);
$dictionary["Lead"]["fields"]["nlfbr_businessrelationships_leads_1_name"] = array (
  'name' => 'nlfbr_businessrelationships_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_LEADS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'save' => true,
  'id_name' => 'nlfbr_busif7d0onships_ida',
  'link' => 'nlfbr_businessrelationships_leads_1',
  'table' => 'nlfbr_businessrelationships',
  'module' => 'nlfbr_BusinessRelationships',
  'rname' => 'name',
  'massupdate' => false,
);
$dictionary["Lead"]["fields"]["nlfbr_busif7d0onships_ida"] = array (
  'name' => 'nlfbr_busif7d0onships_ida',
  'type' => 'link',
  'relationship' => 'nlfbr_businessrelationships_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_LEADS_1_FROM_LEADS_TITLE',
);
