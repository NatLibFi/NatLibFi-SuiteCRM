<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfbr_BusinessRelationships';
$subpanel_layout = array(
	'where' => '',

    'list_fields' => array (
        'name_account_name_first' => 
        array (
            'sortable' => false,
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
            'default' => true,
        ),
        'accounts_nlfbr_businessrelationships_1_name' => 
        array (
            'type' => 'relate',
            'link' => true,
            'vname' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
            'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
            'width' => '10%',
            'default' => true,
            'widget_class' => 'SubPanelDetailViewLink',
            'target_module' => 'Accounts',
            'target_record_key' => 'accounts_nlfbr_businessrelationships_1accounts_ida',
        ),
         'nlfse_services_nlfbr_businessrelationships_1_name' => 
        array (
            'type' => 'relate',
            'link' => true,
            'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
            'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
            'width' => '10%',
            'default' => true,
            'widget_class' => 'SubPanelDetailViewLink',
            'target_module' => 'nlfse_Services',
            'target_record_key' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
        ),
        'alliance_names' => 
        array (
            'type' => 'varchar',
            'vname' => 'LBL_ALLIANCE_NAMES',
            'width' => '10%',
            'default' => true,
            'sortable' => false,
        ),
        'asiakassuhde_c' => 
        array (
            'type' => 'multienum',
            'default' => true,
            'studio' => 'visible',
            'vname' => 'LBL_ASIAKASSUHDE',
            'width' => '5%',
        ),
        'open_only_has_active_contract' => 
        array (
            'type' => 'bool',
            'vname' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
            'width' => '5%',
            'default' => true,
            'sortable' => false,
        ),
        'commercial' => 
        array (
            'type' => 'bool',
            'default' => true,
            'vname' => 'LBL_COMMERCIAL',
            'width' => '5%',
        ),
        'palvelu_liittymisen_status_c' => 
        array (
            'type' => 'enum',
            'default' => true,
            'studio' => 'visible',
            'vname' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
            'width' => '10%',
        ),
        'nfl_business_relation_begins_c' => 
        array (
            'type' => 'date',
            'default' => true,
            'vname' => 'LBL_NFL_BUSINESS_RELATION_BEGINS',
            'width' => '5%',
        ),
        'production_date_c' => 
        array (
            'type' => 'date',
            'default' => true,
            'vname' => 'LBL_PRODUCTION_DATE',
            'width' => '10%',
        ),
        'edit_button' => 
        array (
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => 'nlfbr_BusinessRelationships',
            'width' => '10%',
            'default' => true,
        ),
    )
);
