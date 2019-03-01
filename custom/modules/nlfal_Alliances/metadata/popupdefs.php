<?php
$popupMeta = array (
    'moduleMain' => 'nlfal_Alliances',
    'varName' => 'nlfal_Alliances',
    'orderBy' => 'nlfal_alliances.name',
    'whereClauses' => array (
  'name' => 'nlfal_alliances.name',
  'sektorit_c' => 'nlfal_alliances_cstm.sektorit_c',
  'nlfal_alliances_accounts_1_name' => 'nlfal_alliances.nlfal_alliances_accounts_1_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sektorit_c',
  5 => 'nlfal_alliances_accounts_1_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sektorit_c' => 
  array (
    'type' => 'multienum',
    'studio' => 'visible',
    'label' => 'LBL_SEKTORIT',
    'width' => '10%',
    'name' => 'sektorit_c',
  ),
  'nlfal_alliances_accounts_1_name' => 
  array (
    'type' => 'relate',
    'label' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    'id' => 'NLFAL_ALLIANCES_ACCOUNTS_1ACCOUNTS_IDB',
    'link' => true,
    'width' => '10%',
    'name' => 'nlfal_alliances_accounts_1_name',
  ),
),
);
