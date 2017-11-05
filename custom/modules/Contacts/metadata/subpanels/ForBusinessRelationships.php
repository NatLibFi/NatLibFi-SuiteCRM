<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='Contacts';
$subpanel_layout = array(
	'top_buttons' => array(
		//array('widget_class' => 'SubPanelTopCreateButton'),
                //array('widget_class' => 'SubPanelTopButtonQuickCreate' ),
		//array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
                //array('widget_class' => 'SubPanelTopButtonQuickCreateNlfRole' ),
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
		/*'name'=>array(
	 		'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
	 		'width' => '45%',
		),*/
                'contact_role_fields' => array(
                        'usage' => 'query_only',
                ),
                //'nlfbr_businessrelationships_contacts_1_id' => array(
                //        'usage' => 'query_only',
                //),
        'email1'=>array(
            'name'=>'email1',               
            'vname' => 'LBL_LIST_EMAIL',
            'widget_class' => 'SubPanelEmailLink',
            'width' => '15%',
            'sortable' => false,
         ),
                'nlfbr_businessrelationships_contacts_1_role' => array(
                        'name' => 'nlfbr_businessrelationships_contacts_1_role',
	 		'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
			'sortable' => false,
                 //       'type' => 'enum',
	 		'width' => '45%',
                ),
		'date_modified'=>array(
	 		'vname' => 'LBL_DATE_MODIFIED',
	 		'width' => '15%',
		),
		/*'edit_button'=>array(
            'vname' => 'LBL_EDIT_BUTTON',
			'widget_class' => 'SubPanelEditButton',
		 	'module' => $module_name,
	 		'width' => '4%',
		),*/
		'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButton',
		 	'module' => $module_name,
			'width' => '5%',
		),
	),
);


