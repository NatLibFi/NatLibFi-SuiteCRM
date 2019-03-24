<?php
$module_name = 'nlfal_Alliances';
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
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sektorit_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEKTORIT',
        'width' => '10%',
        'name' => 'sektorit_c',
      ),
      'nlfal_alliances_accounts_1_name' => 
      array (
        'type' => 'relate',
        'default' => true,
        'label' => 'LBL_NLFAL_ALLIANCES_ACCOUNTS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
        'id' => 'NLFAL_ALLIANCES_ACCOUNTS_1ACCOUNTS_IDB',
        'link' => true,
        'width' => '10%',
        'name' => 'nlfal_alliances_accounts_1_name',
      ),
      'contact_roles' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ROLES',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_roles',
      ),
      'related_service' =>
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_SERVICE',
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
      'open_only_has_active_contract' =>
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HAS_ACTIVE_CONTRACT',
        'width' => '10%',
        'name' => 'open_only_has_active_contract',
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
