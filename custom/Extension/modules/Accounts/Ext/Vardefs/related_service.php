<?php

$dictionary["Account"]["fields"]['related_service'] = array(
  'name' => 'related_service',
  'vname' => 'LBL_RELATED_SERVICE_TITLE',
  //'type' => 'relate',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  //'save' => true,
  'id_name' => 'nlfse_services_accounts_1nlfse_services_ida',
  /*'link' => 'nlfse_services_accounts_1',
  'table' => 'nlfse_services',
  'module' => 'nlfse_Services',
  'rname' => 'name',*/
  'function' => 'getActiveServices',
);

