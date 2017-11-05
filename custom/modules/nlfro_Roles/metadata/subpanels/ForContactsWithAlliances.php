<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='nlfro_Roles';
$subpanel_layout = array(
        'top_buttons' => array(
                //array('widget_class' => 'SubPanelTopCreateButton'),
                //array('widget_class' => 'SubPanelTopButtonQuickCreate' ),
                //array('widget_class' => 'SubPanelTopButtonQuickCreateFunctionRelated' ),
//                array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name),
                array('widget_class' => 'SubPanelTopButtonQuickCreateNlfRole' ),
        ),

        'where' => '',

        'list_fields' => array(
/*            'contacts_nlfro_roles_1_name' => 
            array (
                'type' => 'relate',
                'link' => true,
                'vname' => 'LBL_CONTACTS_NLFRO_ROLES_1_FROM_CONTACTS_TITLE',
                'id' => 'CONTACTS_NLFRO_ROLES_1CONTACTS_IDA',
                'width' => '45%',
                'default' => true,
                'widget_class' => 'SubPanelDetailViewLink',
                'target_module' => 'Contacts',
                'target_record_key' => 'contacts_nlfro_roles_1contacts_ida',
            ),*/
            'nlfal_alliances_nlfro_roles_1_name' => 
            array (
                'type' => 'relate',
                'link' => true,
                'vname' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_FROM_NLFAL_ALLIANCES_TITLE',
                'id' => 'NLFAL_ALLIANCES_NLFRO_ROLES_1NLFAL_ALLIANCES_IDA',
                'width' => '45%',
                'default' => true,
                'widget_class' => 'SubPanelDetailViewLink',
                'target_module' => 'nlfal_Alliances',
                'target_record_key' => 'nlfal_alliances_nlfro_roles_1nlfal_alliances_ida',
            ),
            'role_c' => 
            array (
                'type' => 'enum',
                'default' => true,
                'studio' => 'visible',
                'vname' => 'LBL_ROLES_ROLE',
                'width' => '45%',
            ),
                'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
                        //'widget_class' => 'SubPanelRemoveButton',
                        'widget_class' => 'SubPanelDeleteButton',
                        'module' => $module_name,
                        'width' => '5%',
                ),
        ),
);
