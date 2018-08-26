<?php
$module_name = 'nlfbs_BackendSystems';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'related_service_enum' => 
      array (
        'type' => 'enum',
        'studio' => 
        array (
          'detailview' => false,
          'editview' => false,
          'listview' => false,
          'searchview' => true,
        ),
        'label' => 'LBL_RELATED_SERVICE_ENUM',
        'width' => '10%',
        'default' => true,
        'name' => 'related_service_enum',
      ),
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'tyyppi_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TYYPPI',
        'width' => '10%',
        'name' => 'tyyppi_c',
      ),
      'ohjelmistotoimittaja_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_OHJELMISTOTOIMITTAJA',
        'width' => '10%',
        'name' => 'ohjelmistotoimittaja_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
