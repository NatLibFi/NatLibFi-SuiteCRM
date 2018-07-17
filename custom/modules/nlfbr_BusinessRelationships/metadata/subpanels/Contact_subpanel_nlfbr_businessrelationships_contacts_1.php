<?php
// created: 2017-09-19 16:25:29
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '20%',
    'default' => true,
  ),
  'nlfbr_businessrelationships_contacts_1_role' => 
  array (
    'name' => 'nlfbr_businessrelationships_contacts_1_role',
    'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
    'sortable' => false,
    'width' => '20%',
    'default' => true,
  ),
  'asiakassuhde_c' => 
  array (
    'type' => 'multienum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_ASIAKASSUHDE',
    'width' => '10%',
  ),
  'alliance_names' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_ALLIANCE_NAMES',
    'width' => '20%',
    'default' => true,
    'sortable' => false,
  ),
  'palvelu_liittymisen_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
    'width' => '10%',
  ),
  'commercial' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_COMMERCIAL',
    'width' => '10%',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '5%',
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
  'contact_role_fields' => 
  array (
    'usage' => 'query_only',
  ),
);
