<?php
 // created: 2017-04-22 23:49:55
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['emails_nlfwg_workinggroups_1'] = array (
  'order' => 100,
  'module' => 'Emails',
  'subpanel_name' => 'ForQueues',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_EMAILS_NLFWG_WORKINGGROUPS_1_FROM_EMAILS_TITLE',
  'get_subpanel_data' => 'emails_nlfwg_workinggroups_1',
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
