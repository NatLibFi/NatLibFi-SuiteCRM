<?php
 // created: 2016-09-29 12:54:42
$layout_defs["nlfwg_WorkingGroups"]["subpanel_setup"]['nlfwg_workinggroups_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'nlfwg_workinggroups_contacts_1',
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
