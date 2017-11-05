<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfal_Alliances';
$subpanel_layout = array(
	'top_buttons' => array(
    /*array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),*/
      array (
        'widget_class' => 'SubPanelTopSelectButton',
        'mode' => 'MultiSelect',
      ),
	),

	'where' => '',

	'list_fields' => array(
		'name'=>array(
			'vname' => 'LBL_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'width' => '45%',
		),
		'alliance_leader_role' => array(
			'name' => 'alliance_leader_role',
			'vname' => 'LBL_ALLIANCE_ROLE_TITLE',
			'sortable' => false,
			'width' => '20%',
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
