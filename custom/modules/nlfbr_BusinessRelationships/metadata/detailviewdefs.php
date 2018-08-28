<?php
$module_name = 'nlfbr_BusinessRelationships';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL9' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL5' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL6' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL7' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
        'LBL_EDITVIEW_PANEL8' => 
        array (
          'newTab' => false,
          'panelDefault' => 'collapsed',
        ),
      ),
      'includes' => 
      array (
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
          1 => 'date_entered',
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
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
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
      'lbl_editview_panel9' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'data_source1',
            'studio' => false,
            'label' => 'LBL_DATA_SOURCE_TITLE',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'finna_view1',
            'studio' => false,
            'label' => 'LBL_FINNA_VIEW_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'finna_link1',
            'studio' => false,
            'label' => 'LBL_FINNA_LINK_TITLE',
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
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ip_osoitteet_c',
            'label' => 'LBL_IP_OSOITTEET',
          ),
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'melinda_liittymismalli_c',
            'studio' => 'visible',
            'label' => 'LBL_MELINDA_LIITTYMISMALLI',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'luetteloijatunnuksen_etuliit_c',
            'studio' => 'visible',
            'label' => 'LBL_LUETTELOIJATUNNUKSEN_ETULIIT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'replikoinnin_domain_c',
            'label' => 'LBL_REPLIKOINNIN_DOMAIN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ip_alueet_melinda_c',
            'studio' => 'visible',
            'label' => 'LBL_IP_ALUEET_MELINDA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'low_tag_c',
            'label' => 'LBL_LOW_TAG',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'liittyvat_tiketit_melinda_c',
            'label' => 'LBL_LIITTYVAT_TIKETIT_MELINDA',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'melinda_mukaantulo_doc_c',
            'label' => 'LBL_MELINDA_MUKAANTULO_DOC',
          ),
        ),
      ),
    ),
  ),
);
?>
