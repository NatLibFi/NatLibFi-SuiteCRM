<?php
$module_name = 'nlfbr_BusinessRelationships';
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
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL6' => 
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
          0 => 
          array (
            'name' => 'accounts_nlfbr_businessrelationships_1_name',
            'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
          ),
          1 => 
          array (
            'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
            'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nlfbr_businessrelationships_account_alliances',
            'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_ACCOUNT_ALLIANCES',
          ),
          1 => 
          array (
            'name' => 'kohdennus_c',
            'studio' => 'visible',
            'label' => 'LBL_KOHDENNUS',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 'assigned_user_name',
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'asiakassuhde_c',
            'studio' => 'visible',
            'label' => 'LBL_ASIAKASSUHDE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nfl_business_relation_begins_c',
            'label' => 'LBL_NFL_BUSINESS_RELATION_BEGINS',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'palvelu_liittymisen_status_c',
            'studio' => 'visible',
            'label' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
          ),
          1 => 
          array (
            'name' => 'production_date_c',
            'label' => 'LBL_PRODUCTION_DATE',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'commercial',
            'label' => 'LBL_COMMERCIAL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'maksullisen_lisatiedot2_c',
            'studio' => 'visible',
            'label' => 'LBL_MAKSULLISEN_LISATIEDOT2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'contract1',
            'studio' => false,
            'label' => 'LBL_CONTRACTS_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'finna_fimu_url_c',
            'label' => 'LBL_FINNA_FIMU_URL',
          ),
          1 => 
          array (
            'name' => 'aineisto_palaute_c',
            'label' => 'LBL_AINEISTO_PALAUTE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'finnanakyma_c',
            'studio' => 'visible',
            'label' => 'LBL_FINNANAKYMA',
          ),
          1 => 
          array (
            'name' => 'finnanakyma_url_c',
            'label' => 'LBL_FINNANAKYMA_URL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nlfbr_businessrelationships_nlfbs_backendsystems_enum',
            'studio' => 'visible',
            'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
            'displayParams' => 
            array (
              'idName' => 'nlfbr_busi06f0systems_idb',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'harvesting_format_c',
            'studio' => 'visible',
            'label' => 'LBL_HARVESTING_FORMAT',
          ),
          1 => 
          array (
            'name' => 'kayttorajoitettu_metatieto_c',
            'label' => 'LBL_KAYTTORAJOITETTU_METATIETO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'paasy_hallintaliittymaan_c',
            'label' => 'LBL_PAASY_HALLINTALIITTYMAAN',
          ),
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
