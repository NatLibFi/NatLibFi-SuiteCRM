<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfal_Alliances';
$subpanel_layout = array(
	'top_buttons' => array(
	),

	'where' => '',

	'list_fields' => array(
		'name'=>array(
			'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '35%',
		),
		'alliance_leader_name' => array(
			'name' => 'alliance_leader_name',
			'vname' => 'LBL_ALLIANCE_LEADER_TITLE',
			'sortable' => false,
			'width' => '20%',
		),
		'members_amount_c' => array(
			'name' => 'members_amount_c',
			'vname' => 'LBL_MEMBERS_AMOUNT',
			'sortable' => false,
			'width' => '10%',
		),
		'date_modified'=>array(
			'vname' => 'LBL_DATE_MODIFIED',
			'width' => '20%',
		),
        'edit_button' => array (
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '4%',
            'default' => true,
        ),
		'remove_button'=>array(
			'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButton',
			'module' => $module_name,
			'width' => '5%',
		),
	),
);
