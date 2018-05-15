<?php
 // created: 2018-05-16 00:05:29
$layout_defs["nlfbr_BusinessRelationships"]["subpanel_setup"]['nlfbr_businessrelationships_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'nlfbr_businessrelationships_leads_1',
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
