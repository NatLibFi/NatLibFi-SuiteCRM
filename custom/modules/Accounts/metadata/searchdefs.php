<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'parent_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MEMBER_OF',
        'id' => 'PARENT_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'parent_name',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'related_alliance' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_ALLIANCE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_alliance',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'industry' => 
      array (
        'name' => 'industry',
        'default' => true,
        'width' => '10%',
      ),
      'open_only_has_active_contract' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
        'width' => '10%',
        'name' => 'open_only_has_active_contract',
      ),
      'related_service' => 
      array (
        'type' => 'enum',
        'label' => 'RELATED_SERVICE_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_service',
      ),
      'production_status' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_PRODUCTION_STATUS',
        'width' => '10%',
        'default' => true,
        'name' => 'production_status',
      ),
      'hallinnonala_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_HALLINNONALA',
        'width' => '10%',
        'name' => 'hallinnonala_c',
      ),
      'account_roles' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_ACCOUNT_ROLES',
        'width' => '10%',
        'default' => true,
        'name' => 'account_roles',
      ),
      'accounts_nlfbs_backendsystems_enum' => 
      array (
        'type' => 'relatemultienum',
        'label' => 'LBL_ACCOUNTS_NLFBS_BACKENDSYSTEMS_1_FROM_NLFBS_BACKENDSYSTEMS_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'accounts_nlfbs_backendsystems_enum',
      ),
      'organisaatio_status_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ORGANISAATIO_STATUS',
        'width' => '10%',
        'name' => 'organisaatio_status_c',
      ),
      'br_service_start_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_BR_SERVICE_START_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'br_service_start_date',
      ),
      'br_production_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_BR_PRODUCTION_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'br_production_date',
      ),
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
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
