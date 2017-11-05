<?php
$viewdefs ['Accounts'] = 
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
          'AOS_GENLET' => 
          array (
            'customCode' => '<input type="button" class="button" onClick="showPopup();" value="{$APP.LBL_GENERATE_LETTER}">',
          ),
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_PARENT_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name_swe_c',
            'label' => 'LBL_NAME_SWE',
          ),
          1 => 
          array (
            'name' => 'name_eng_c',
            'label' => 'LBL_NAME_ENG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sic_code',
            'comment' => 'SIC code of the account',
            'label' => 'LBL_SIC_CODE',
          ),
          1 => 
          array (
            'name' => 'isil_c',
            'label' => 'LBL_ISIL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'toimitusosoite_postilokero_c',
            'label' => 'LBL_TOIMITUSOSOITE_POSTILOKERO',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_postalcode',
            'comment' => 'The zip code used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_city',
            'comment' => 'The city used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'shipping_address_country',
            'comment' => 'The country used for the shipping address',
            'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'comment' => 'The postal code used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_city',
            'comment' => 'The city used for billing address',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'comment' => 'The country used for the billing address',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_info_c',
            'label' => 'LBL_BILLING_INFO',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'industry',
            'comment' => 'The company belongs in this industry',
            'label' => 'LBL_INDUSTRY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'hallinnonala_c',
            'studio' => 'visible',
            'label' => 'LBL_HALLINNONALA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'organisaatio_status_c',
            'studio' => 'visible',
            'label' => 'LBL_ORGANISAATIO_STATUS',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'organisaatio_status_info_c',
            'label' => 'LBL_ORGANISAATIO_STATUS_INFO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'accounts_nlfbs_backendsystems_enum',
            'label' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
            'studio' => 'visible',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
?>
