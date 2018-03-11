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
