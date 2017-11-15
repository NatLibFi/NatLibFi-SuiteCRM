<?php

$dictionary["nlfal_Alliances"]["fields"]['related_service'] = array(
  'name' => 'related_service',
  'vname' => 'LBL_RELATED_SERVICE',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  //'id_name' => 'nlfse_services_accounts_1nlfse_services_ida',
  'id_name' => 'related_service',
  'function' => 'getActiveServices',
);

