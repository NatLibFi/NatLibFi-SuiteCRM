<?php
// created: 2017-03-26 14:39:25
$dictionary["nlfro_Roles"]["fields"]["nlfal_alliances_nlfro_roles_1"] = array (
  'name' => 'nlfal_alliances_nlfro_roles_1',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_nlfro_roles_1',
  'source' => 'non-db',
  'module' => 'nlfal_Alliances',
  'bean_name' => 'nlfal_Alliances',
  'vname' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_FROM_NLFAL_ALLIANCES_TITLE',
  'id_name' => 'nlfal_alliances_nlfro_roles_1nlfal_alliances_ida',
);
$dictionary["nlfro_Roles"]["fields"]["nlfal_alliances_nlfro_roles_1_name"] = array (
  'name' => 'nlfal_alliances_nlfro_roles_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_FROM_NLFAL_ALLIANCES_TITLE',
  'save' => true,
  'id_name' => 'nlfal_alliances_nlfro_roles_1nlfal_alliances_ida',
  'link' => 'nlfal_alliances_nlfro_roles_1',
  'table' => 'nlfal_alliances',
  'module' => 'nlfal_Alliances',
  'rname' => 'name',
);
$dictionary["nlfro_Roles"]["fields"]["nlfal_alliances_nlfro_roles_1nlfal_alliances_ida"] = array (
  'name' => 'nlfal_alliances_nlfro_roles_1nlfal_alliances_ida',
  'type' => 'link',
  'relationship' => 'nlfal_alliances_nlfro_roles_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_FROM_NLFRO_ROLES_TITLE',
);
