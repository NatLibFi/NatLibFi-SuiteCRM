<?php
 // created: 2017-04-05 00:38:29
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['nlfwg_workinggroups_tasks_1'] = array (
  'order' => 100,
  'module' => 'Tasks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFWG_WORKINGGROUPS_TASKS_1_FROM_TASKS_TITLE',
  'get_subpanel_data' => 'nlfwg_workinggroups_tasks_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
