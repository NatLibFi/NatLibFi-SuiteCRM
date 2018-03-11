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

        'service_names_for_account' => array(
            'vname' => 'LBL_SERVICE_NAMES_FOR_ACCOUNT',
            'width' => '25%',
        ),

        'tyyppi_c'=>array(
            'vname' => 'LBL_TYYPPI',
            'width' => '15%',
        ),

        'ohjelmistotoimittaja_c'=>array(
            'vname' => 'LBL_OHJELMISTOTOIMITTAJA',
            'width' => '15%',
        ),

        'date_modified'=>array(
            'vname' => 'LBL_DATE_MODIFIED',
            'width' => '10%',
        ),

        'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
