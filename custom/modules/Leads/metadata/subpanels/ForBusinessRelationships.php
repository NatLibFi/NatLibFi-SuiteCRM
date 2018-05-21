<?php
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'sort_order' => 'asc',
    'sort_by' => 'last_name',
    'module' => 'Leads',
    'width' => '30%',
    'default' => true,
  ),
  'service_mail_link_urls' =>
  array(
    'type' => 'varchar',
    'vname' => 'LBL_SERVICE_MAIL_LINK_URLS_TITLE',
    'width' => '30%',
    'default' => true,
    'sortable' => false,
  ),
  'date_converted_c' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_CONVERTED',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'Leads',
    'width' => '4%',
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);
