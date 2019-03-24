<?php
 // created: 2017-05-14 18:54:48
$layout_defs["Contacts"]["subpanel_setup"]['nlfbr_businessrelationships_contacts_1'] = array (
  'order' => 100,
  'module' => 'nlfbr_BusinessRelationships',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
  'get_subpanel_data' => 'nlfbr_businessrelationships_contacts_1',
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
