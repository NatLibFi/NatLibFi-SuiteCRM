<?php
$module_name = 'nlfbs_BackendSystems';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ohjelmistotoimittaja_c',
            'label' => 'LBL_OHJELMISTOTOIMITTAJA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tyyppi_c',
            'studio' => 'visible',
            'label' => 'LBL_TYYPPI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'contact_c',
            'label' => 'LBL_CONTACT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'puhelin_c',
            'label' => 'LBL_PUHELIN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'yhteystiedot_tek_c',
            'studio' => 'visible',
            'label' => 'LBL_YHTEYSTIEDOT_TEK',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'www_c',
            'label' => 'LBL_WWW',
          ),
        ),
      ),
    ),
  ),
);
?>
