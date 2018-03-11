<?php

$dictionary["nlfal_Alliances"]["fields"]["alliance_leader_enum"] = array (
    'name' => 'alliance_leader_enum',
    'type' => 'enum',
    'function' => array( 'name' => 'getActiveAllianceMembersHtml', 'returns' => 'html' ),
    //'relationship' => 'accounts_nlfbs_backendsystems_1',
    'source' => 'non-db',
    //'module' => 'nlfbs_BackendSystems',
    //'bean_name' => 'nlfbs_BackendSystems',
    'vname' => 'LBL_ALLIANCE_LEADER_TITLE',
    'id_name' => 'kimpan_vetaja_c',
);

$dictionary["nlfal_Alliances"]["fields"]["alliance_leader_name"] = array (
    'name' => 'alliance_leader_name',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_ALLIANCE_LEADER_TITLE',
    'studio' => array('detailview' => false, 'editview' => false),
);

$dictionary["nlfal_Alliances"]["fields"]["alliance_leader_role"] = array (
    'name' => 'alliance_leader_role',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_ALLIANCE_ROLE_TITLE',
    'studio' => array('detailview' => false, 'editview' => false),
);

