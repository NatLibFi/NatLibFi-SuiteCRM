<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfbs_BackendSystems';
$subpanel_layout = array(
    'top_buttons' => array(),

    'where' => '',

    'list_fields' => array(
        'name'=>array(
            'name'=>'name',         
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '25%',
        ),

        'ohjelmistotoimittaja_c'=>array(
            'vname' => 'LBL_OHJELMISTOTOIMITTAJA',
            'width' => '15%',
        ),

        'account_count_for_service' => array(
            'vname' => 'LBL_ACCOUNT_COUNT_FOR_SERVICE',
            'width' => '15%',
            'sortable' => false,
        ),

        'date_modified'=>array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '10%',
        ),
    ),
);
