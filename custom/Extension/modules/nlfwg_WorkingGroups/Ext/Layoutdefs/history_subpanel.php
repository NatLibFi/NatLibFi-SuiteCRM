<?php

// Based on modules/Accounts/metadata/subpaneldefs.php

// If Notes modules is not shown in the module list in the Menu,
// notes would not be visible in the History panel.
// Make them always shown, regardles of Notes module visibility
global $modListHeader;
global $modules_exempt_from_availability_check;
if (!array_key_exists ('Notes', $modListHeader) || !array_key_exists('Notes', $modules_exempt_from_availability_check)) {
    $modules_exempt_from_availability_check['Notes'] = 'Notes';
}

$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['history'] = array (
    'order' => 20,
    'sort_order' => 'desc',
    'sort_by' => 'date_entered',
    'title_key' => 'LBL_HISTORY_SUBPANEL_TITLE',
    'type' => 'collection',
    'subpanel_name' => 'history',   //this values is not associated with a physical file.
    'header_definition_from_subpanel' => 'meetings',
    'module' => 'History',

    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateNoteButton'),
        array('widget_class' => 'SubPanelTopArchiveEmailButton'),
        array('widget_class' => 'SubPanelTopSummaryButton'),
        array('widget_class' => 'SubPanelTopFilterButton'),
    ),

    'collection_list' => array(
        'tasks' => array(
            'module' => 'Tasks',
            'subpanel_name' => 'ForHistory',
            //'get_subpanel_data' => 'tasks',
            'get_subpanel_data' => 'function:getTasksForWorkingGroupActivitySubpanelQueryParts',
            'function_parameters' => array(
                'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'tasks',
            //'set_subpanel_data' => 'nlfwg_workinggroups_tasks_1',
        ),
        'meetings' => array(
            'module' => 'Meetings',
            'subpanel_name' => 'ForHistory',
            //'get_subpanel_data' => 'meetings',
            'get_subpanel_data' => 'function:getMeetingsForWorkingGroupActivitySubpanelQueryParts',
            'function_parameters' => array(
                'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'meetings',
        ),
        'calls' => array(
            'module' => 'Calls',
            'subpanel_name' => 'ForHistory',
            //'get_subpanel_data' => 'calls',
            'get_subpanel_data' => 'function:getCallsForWorkingGroupActivitySubpanelQueryParts',
            'function_parameters' => array(
                'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'calls',
        ),
        'notes' => array(
            'module' => 'Notes',
            'subpanel_name' => 'ForHistory',
            //'get_subpanel_data' => 'notes',
            'get_subpanel_data' => 'function:getNotesForWorkingGroupSubpanelQueryParts',
            'function_parameters' => array(
               'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGaroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'notes',
        ),
        'emails' => array(
            'module' => 'Emails',
            //'subpanel_name' => 'ForUnlinkedEmailHistory',
            'subpanel_name' => 'ForHistory',
            /*'get_subpanel_data' => 'function:get_emails_by_assign_or_link',
            'function_parameters' => array('import_function_file' => 'include/utils.php', 'link' => 'contacts'),
            'generate_select' => true,
            'get_distinct_data' => true,*/
            'get_subpanel_data' => 'function:getEmailsForWorkingGroupHistorySubpanelQueryParts',
            'function_parameters' => array(
                'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'emails',
         ),
    ),

    'searchdefs' => array(
        'collection' =>
            array(
                'name' => 'collection',
                'label' => 'LBL_COLLECTION_TYPE',
                'type' => 'enum',
                'options' => $GLOBALS['app_list_strings']['collection_temp_list'],
                'default' => true,
                'width' => '10%',
            ),
        'name' =>
            array(
                'name' => 'name',
                'default' => true,
                'width' => '10%',
            ),
        'current_user_only' =>
            array(
                'name' => 'current_user_only',
                'label' => 'LBL_CURRENT_USER_FILTER',
                'type' => 'bool',
                'default' => true,
                'width' => '10%',
            ),
        'date_modified' =>
            array(
                'name' => 'date_modified',
                'default' => true,
                'width' => '10%',
            ),
    ),
);
