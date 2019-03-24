<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfal_Alliances';
$subpanel_layout = array(
	'top_buttons' => array(
		//array('widget_class' => 'SubPanelTopButtonQuickCreate' ),
		array('widget_class' => 'SubPanelTopButtonContactRoleAdd' ),
	),

	'where' => '',

	'list_fields' => array(
		'name'=>array(
			'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '35%',
		),
		'contact_role_fields' => array(
			'usage' => 'query_only',
		),
		'nlfal_alliances_contacts_1_role' => array(
			'name' => 'nlfal_alliances_contacts_1_role',
			'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
			'sortable' => false,
			'width' => '20%',
		),
		'nlfal_alliances_contacts_1_description' => array(
			'name' => 'nlfal_alliances_contacts_1_description',
			'vname' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_DESCRIPTION',
			'sortable' => false,
			'width' => '20%',
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
