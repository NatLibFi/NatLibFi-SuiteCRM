<?php
 // created: 2016-09-29 17:09:53
$layout_defs["nlfal_Alliances"]["subpanel_setup"]['nlfal_alliances_nlfse_services_1'] = array (
  'order' => 100,
  'module' => 'nlfse_Services',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_NLFAL_ALLIANCES_NLFSE_SERVICES_1_FROM_NLFSE_SERVICES_TITLE',
  'get_subpanel_data' => 'nlfal_alliances_nlfse_services_1',
  'top_buttons' => // Changed 2017-03-26 (LM)
  array (
    /*0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => */
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
