<?php
$module_name = 'nlfbr_BusinessRelationships';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'open_only_has_active_contract' => 
      array (
        'type' => 'bool',
        'studio' => 
        array (
          'listview' => false,
          'detailview' => false,
          'editview' => false,
          'searchview' => true,
        ),
        'default' => true,
        'label' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
        'width' => '10%',
        'name' => 'open_only_has_active_contract',
      ),
      'accounts_nlfbr_businessrelationships_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
        'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_nlfbr_businessrelationships_1_name',
      ),
      'nlfse_services_nlfbr_businessrelationships_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
        'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'accounts_nlfbr_businessrelationships_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
        'width' => '10%',
        'default' => true,
        'id' => 'ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1ACCOUNTS_IDA',
        'name' => 'accounts_nlfbr_businessrelationships_1_name',
      ),
      'nlfse_services_nlfbr_businessrelationships_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
        'width' => '10%',
        'default' => true,
        'id' => 'NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1NLFSE_SERVICES_IDA',
        'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
      ),
      'open_only_has_active_contract' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
        'width' => '10%',
        'name' => 'open_only_has_active_contract',
      ),
      'active_contract' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_ACTIVE_CONTRACT_TITLE',
        'width' => '10%',
        'name' => 'active_contract',
      ),
      'br_contract' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_BR_CONTRACT_TITLE',
        'width' => '10%',
        'name' => 'br_contract',
      ),
       'nlfbr_businessrelationships_account_alliances' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_ACCOUNT_ALLIANCES',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfbr_businessrelationships_account_alliances',
      ),
      'account_industry' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ACCOUNT_INDUSTRY',
        'width' => '10%',
        'name' => 'account_industry',
      ),
      'account_administration' => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_ACCOUNT_ADMINISTRATION',
        'width' => '10%',
        'name' => 'account_administration',
      ),
      'business_relationship_roles' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_BUSINESS_RELATIONSHIP_ROLES',
        'width' => '10%',
        'default' => true,
        'name' => 'business_relationship_roles',
      ),
      'asiakassuhde_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ASIAKASSUHDE',
        'width' => '10%',
        'name' => 'asiakassuhde_c',
      ),
      'palvelu_liittymisen_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_PALVELU_LIITTYMISEN_STATUS',
        'width' => '10%',
        'name' => 'palvelu_liittymisen_status_c',
      ),
      'production_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_PRODUCTION_DATE',
        'width' => '10%',
        'name' => 'production_date_c',
      ),
      'finnanakyma_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FINNANAKYMA',
        'width' => '10%',
        'name' => 'finnanakyma_c',
      ),
      'nfl_business_relation_begins_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_NFL_BUSINESS_RELATION_BEGINS',
        'width' => '10%',
        'name' => 'nfl_business_relation_begins_c',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'commercial' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_COMMERCIAL',
        'width' => '10%',
        'name' => 'commercial',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
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
