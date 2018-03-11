<?php
 // created: 2017-04-22 23:49:14
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['nlfwg_workinggroups_emails_1'] = array (
  'order' => 100,
  'module' => 'Emails',
  'subpanel_name' => 'ForQueues',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFWG_WORKINGGROUPS_EMAILS_1_FROM_EMAILS_TITLE',
  'get_subpanel_data' => 'nlfwg_workinggroups_emails_1',
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
