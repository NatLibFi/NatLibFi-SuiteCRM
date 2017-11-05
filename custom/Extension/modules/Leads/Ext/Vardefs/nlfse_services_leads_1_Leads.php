<?php
// created: 2017-03-20 20:26:51
$dictionary["Lead"]["fields"]["nlfse_services_leads_1"] = array (
  'name' => 'nlfse_services_leads_1',
  'type' => 'link',
  'relationship' => 'nlfse_services_leads_1',
  'source' => 'non-db',
  'module' => 'nlfse_Services',
  'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE',
  'id_name' => 'nlfse_services_leads_1nlfse_services_ida',
);
$dictionary["Lead"]["fields"]["nlfse_services_leads_1_name"] = array (
  'name' => 'nlfse_services_leads_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  //'vname' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE',
  'vname' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
  'save' => true,
  'id_name' => 'nlfse_services_leads_1nlfse_services_ida',
  'link' => 'nlfse_services_leads_1',
  'table' => 'nlfse_services',
  'module' => 'nlfse_Services',
  'rname' => 'name',
  'required' => true,
  'help' => 'Palvelu, josta liidi on kiinnostunut',
);
$dictionary["Lead"]["fields"]["nlfse_services_leads_1nlfse_services_ida"] = array (
  'name' => 'nlfse_services_leads_1nlfse_services_ida',
  'type' => 'link',
  'relationship' => 'nlfse_services_leads_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_LEADS_TITLE',
);
