<?php

$dictionary["Account"]["fields"]["production_status"] = array (
    'name' => 'production_status',
    'type' => 'enum',
    'options' => 'palvelu_liittymisen_status_list',
    'source' => 'non-db',
    'vname' => 'LBL_PRODUCTION_STATUS_TITLE',
    'studio' => array('detailview' => false, 'editview' => false, 'listview' => false, 'searchview' => true),
);

$dictionary["Account"]["fields"]["service_production_usage_year"] = array (
    'name' => 'service_production_usage_year',
    'type' => 'varchar',
    'source' => 'non-db',
    'vname' => 'LBL_SERVICE_PRODUCTION_USAGE_YEAR_TITLE',
    'studio' => array('detailview' => false, 'editview' => false, 'listview' => false, 'searchview' => true),
);

