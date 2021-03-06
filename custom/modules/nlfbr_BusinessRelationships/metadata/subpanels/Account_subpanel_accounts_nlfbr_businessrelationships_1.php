<?php
// created: 2017-09-20 11:58:06
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'nlfse_services_nlfbr_businessrelationships_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'nlfse_Services',
    'target_record_key' => 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida',
  ),
  'alliance_names' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ALLIANCE_NAMES',
    'width' => '10%',
    'default' => true,
    'sortable' => false,
  ),
  'asiakassuhde_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ASIAKASSUHDE',
    'width' => '5%',
  ),
  'palvelu_liittymisen_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
    'width' => '10%',
  ),
  'nfl_business_relation_begins_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_NFL_BUSINESS_RELATION_BEGINS',
    'width' => '5%',
  ),
  'production_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_PRODUCTION_DATE',
    'width' => '10%',
  ),
  'commercial' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_COMMERCIAL',
    'width' => '5%',
  ),
  'sopimus_kronodoc_url_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_SOPIMUS_KRONODOC_URL',
    'width' => '10%',
  ),
  'finna_sopimus_paattyy_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_FINNA_SOPIMUS_PAATTYY',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '10%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '5%',
    'default' => true,
  ),
);
