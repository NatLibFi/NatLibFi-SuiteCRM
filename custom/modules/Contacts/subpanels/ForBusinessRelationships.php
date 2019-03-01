<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='Contacts';
$subpanel_layout = array(
        'top_buttons' => array(
                //array('widget_class' => 'SubPanelTopButtonQuickCreate' ),
                //array('widget_class' => 'SubPanelTopButtonQuickCreateSubpanelSpecific' ),
                array('widget_class' => 'SubPanelTopButtonQuickCreateNlfRole' ),
        ),

        'where' => '',

        'list_fields' => array(
            'nlfbr_businessrelationships_contacts_1_name' => 
            array (
                'type' => 'relate',
                'link' => true,
                'vname' => 'nlfbr_businessrelationships_contacts_1_name',
                'id' => 'NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1CONTACTS_IDB',
                'width' => '45%',
                'default' => true,
                'widget_class' => 'SubPanelDetailViewLink',
                'target_module' => 'Contacts',
                'target_record_key' => 'nlfbr_businessrelationships_contacts_1contacts_idb',
            ),
/*            'nlfbr_businessrelationships_nlfro_roles_1_name' => 
            array (
                'type' => 'relate',
                'link' => true,
                'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
                'id' => 'NLFBR_BUSI78F6ONSHIPS_IDA',
                'width' => '45%',
                'default' => true,
                'widget_class' => 'SubPanelDetailViewLink',
                'target_module' => 'nlfbr_BusinessRelationships',
                'target_record_key' => 'nlfbr_busi78f6onships_ida',
            ),*/
//            'role_c' => 
//            array (
//                'type' => 'enum',
//                'default' => true,
//                'studio' => 'visible',
//                'vname' => 'LBL_ROLES_ROLE',
//                'width' => '45%',
//            ),
/*                'date_modified'=>array(
                        'vname' => 'LBL_DATE_MODIFIED',
                        'width' => '45%',
                ),
                'edit_button'=>array(
            'vname' => 'LBL_EDIT_BUTTON',
                        'widget_class' => 'SubPanelEditButton',
                        'module' => $module_name,
                        'width' => '4%',
                ),*/
                'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
                        'widget_class' => 'SubPanelRemoveButton',
                        //'widget_class' => 'SubPanelDeleteButton',
                        'module' => $module_name,
                        'width' => '5%',
                ),
        ),
);
