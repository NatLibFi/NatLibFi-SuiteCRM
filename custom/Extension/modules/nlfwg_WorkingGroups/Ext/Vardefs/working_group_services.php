<?php

$dictionary["nlfwg_WorkingGroups"]["fields"]["working_group_service_names"] = array (
    'name' => 'working_group_service_names',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_WORKING_GROUP_SERVICES_TITLE',
    'studio' => array('detailview' => false, 'editview' => false, 'listview' => true, 'searchview' => false,),
    'sortable' => false,
);

$dictionary["nlfwg_WorkingGroups"]["fields"]['related_service'] = array(
  'name' => 'related_service',
  'vname' => 'LBL_RELATED_SERVICE_TITLE',
  'type' => 'enum',
  'source' => 'non-db',
  'studio' => array('listview' => false, 'detailview' => false, 'editview' => false, 'searchview' => true),
  'function' => 'getActiveServices',
  'massupdate' => false,
);
