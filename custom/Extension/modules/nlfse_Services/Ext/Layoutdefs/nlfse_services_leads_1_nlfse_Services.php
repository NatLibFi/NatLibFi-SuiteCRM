<?php
 // created: 2017-03-20 20:26:51
$layout_defs["nlfse_Services"]["subpanel_setup"]['nlfse_services_leads_1'] = array (
  'order' => 100,
  'module' => 'Leads',
  'subpanel_name' => 'ForServices',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_LEADS_TITLE',
  'get_subpanel_data' => 'nlfse_services_leads_1',
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
