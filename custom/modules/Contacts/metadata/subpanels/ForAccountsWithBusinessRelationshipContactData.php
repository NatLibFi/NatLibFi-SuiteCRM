<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='Contacts';
$subpanel_layout = array(
	'top_buttons' => array(
                //array('widget_class' => 'SubPanelTopButtonQuickCreate' ),
		array('widget_class' => 'SubPanelTopButtonContactRoleAdd' ),
	),

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
/*                'contact_account_role_fields' => array(
                        'usage' => 'query_only',
                ),
                //'nlfbr_businessrelationships_contacts_1_id' => array(
                //        'usage' => 'query_only',
                //),
                'accounts_contacts_role' => array(
                        'name' => 'accounts_contacts_role',
	 		'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
			'sortable' => false,
                 //       'type' => 'enum',
	 		'width' => '20%',
                ),*/
        'email1'=>array(
            'name'=>'email1',               
            'vname' => 'LBL_LIST_EMAIL',
            'widget_class' => 'SubPanelEmailLink',
            'width' => '15%',
            'sortable' => false,
         ),
        'accounts_contacts_role_incl_businessrelationships' => array(
            'name' => 'accounts_contacts_role_incl_businessrelationships',
            'vname' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
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


