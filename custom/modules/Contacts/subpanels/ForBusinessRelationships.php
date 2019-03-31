<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$module_name='Contacts';
$subpanel_layout = array(
        'top_buttons' => array(
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
                'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
                        'widget_class' => 'SubPanelRemoveButton',
                        'module' => $module_name,
                        'width' => '5%',
                ),
        ),
);
