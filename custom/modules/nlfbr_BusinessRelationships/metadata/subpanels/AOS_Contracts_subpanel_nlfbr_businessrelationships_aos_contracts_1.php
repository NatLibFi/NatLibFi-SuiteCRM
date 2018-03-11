<?php
// created: 2017-09-19 16:35:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
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
  'palvelu_liittymisen_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
    'width' => '10%',
  ),
  'sopimus_kronodoc_url_c' => 
  array (
    'type' => 'url',
    'default' => true,
    'vname' => 'LBL_SOPIMUS_KRONODOC_URL',
    'width' => '10%',
  ),
  'finna_sopimus_valtuutukset_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_FINNA_SOPIMUS_VALTUUTUKSET',
    'width' => '10%',
  ),
  'sopimus_solmittu_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_SOPIMUS_SOLMITTU',
    'width' => '10%',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'nlfbr_BusinessRelationships',
    'width' => '4%',
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