<?php

// Added 2017-04-04 (LM); Based on modules/Accounts/metadata/subpaneldefs.php
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['activities'] = array (
    'order' => 10,
    'sort_order' => 'desc',
    'sort_by' => 'date_start',
    'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
    'type' => 'collection',
    'subpanel_name' => 'activities',   //this values is not associated with a physical file.
    'header_definition_from_subpanel' => 'tasks',
    'module' => 'Activities',

    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateTaskButton'),
        array('widget_class' => 'SubPanelTopScheduleMeetingButton'),
        array('widget_class' => 'SubPanelTopScheduleCallButton'),
        //array('widget_class' => 'SubPanelTopComposeEmailButton'),
        array('widget_class' => 'SubPanelTopComposeGroupEmailButton'),
    ),

    'collection_list' => array(
        'tasks' => array(
            'module' => 'Tasks',
            'subpanel_name' => 'ForActivities',
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
            'subpanel_name' => 'ForActivities',
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
            'subpanel_name' => 'ForActivities',
            //'get_subpanel_data' => 'calls',
            'get_subpanel_data' => 'function:getCallsForWorkingGroupActivitySubpanelQueryParts',
            'function_parameters' => array(
                'import_function_file' => 'custom/Extension/application/Ext/Utils/NLFWorkingGroups.php', 
                'group_id' => $this->_focus->id,
            ),
            'generate_select' => true,
            'set_subpanel_data' => 'calls',
        ),
    )
);
