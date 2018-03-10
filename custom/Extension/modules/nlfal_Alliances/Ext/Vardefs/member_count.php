<?php

$dictionary["nlfal_Alliances"]["fields"]["member_count"] = array (
    'name' => 'member_count',
    'type' => 'int',
    'source' => 'non-db',
    'vname' => 'LBL_MEMBER_COUNT',
    'function' => array(
        'name' => 'getAllianceMemberCount',
        //'returns' => 'html',
    ),
    'studio' => array('editview' => false, 'detailview'=>true),
    'inline_edit' => false,
);


