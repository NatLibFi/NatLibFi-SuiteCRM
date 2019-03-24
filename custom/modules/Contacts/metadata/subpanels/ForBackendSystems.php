<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='Contacts';
$subpanel_layout = array(
	'where' => '',

	'list_fields' => array(
		'first_name'=>array(
			'name'=>'first_name',
			'usage' => 'query_only',
		),
		'last_name'=>array(
			'name'=>'last_name',
		 	'usage' => 'query_only',
		),
		'salutation'=>array(
			'name'=>'salutation',
		 	'usage' => 'query_only',
		),
		'name'=>array(
			'name'=>'name',		
			'vname' => 'LBL_LIST_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
		 	'module' => 'Contacts',
			'width' => '20%',
		),
        'email1'=>array(
            'name'=>'email1',               
            'vname' => 'LBL_LIST_EMAIL',
            'widget_class' => 'SubPanelEmailLink',
            'width' => '15%',
            'sortable' => false,
         ),
        'account_name'=>array(
            'name' => 'account_name',
            'vname' => 'LBL_ACCOUNT_NAME',
            'width' => '15%',
            'widget_class' => 'SubPanelDetailViewLink',
            'target_record_key' => 'account_id',
            'target_module' => 'Accounts',
            'sortable' => false,
        ),
        'contact_all_role_names' => array(
            'name' => 'contact_all_role_names',
	 		'vname' => 'LBL_CONTACT_ALL_ROLE_NAMES',
			'sortable' => false,
	 		'width' => '45%',
        ),
		'date_modified'=>array(
	 		'vname' => 'LBL_DATE_MODIFIED',
	 		'width' => '15%',
		),
		'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButton',
		 	'module' => $module_name,
			'width' => '5%',
		),
	),
);


