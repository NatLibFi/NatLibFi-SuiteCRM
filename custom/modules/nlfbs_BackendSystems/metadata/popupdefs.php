<?php
$popupMeta = array (
    'moduleMain' => 'nlfbs_BackendSystems',
    'varName' => 'nlfbs_BackendSystems',
    'orderBy' => 'nlfbs_backendsystems.name',
    'whereClauses' => array (
  'name' => 'nlfbs_backendsystems.name',
  'ohjelmistotoimittaja_c' => 'nlfbs_backendsystems_cstm.ohjelmistotoimittaja_c',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ohjelmistotoimittaja_c',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ohjelmistotoimittaja_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_OHJELMISTOTOIMITTAJA',
    'width' => '10%',
    'name' => 'ohjelmistotoimittaja_c',
  ),
),
);
