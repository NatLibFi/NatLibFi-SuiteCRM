<?php
$searchdefs ['Contacts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_name' => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
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
      'account_industry' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ACCOUNT_INDUSTRY',
        'width' => '10%',
        'default' => true,
        'name' => 'account_industry',
      ),
      'contact_roles_all' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ROLES_ALL',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_roles_all',
      ),
      'related_service' => 
      array (
        'type' => 'enum',
        'studio' => 
        array (
          'listview' => false,
          'detailview' => false,
          'editview' => false,
          'searchview' => true,
        ),
        'label' => 'LBL_RELATED_SERVICE_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_service',
      ),
    ),
    'advanced_search' => 
    array (
      'related_service' => 
      array (
        'type' => 'enum',
        'studio' => 
        array (
          'listview' => false,
          'detailview' => false,
          'editview' => false,
          'searchview' => true,
        ),
        'label' => 'LBL_RELATED_SERVICE_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_service',
      ),
      'search_name' => 
      array (
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
        'name' => 'search_name',
      ),
      'contact_roles_all' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ROLES_ALL',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_roles_all',
      ),
      'account_name' => 
      array (
        'label' => 'LBL_ACCOUNT_NAME',
        'type' => 'relate',
        'default' => true,
        'width' => '10%',
        'name' => 'account_name',
      ),
      'related_alliance' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_ALLIANCE',
        'width' => '10%',
        'default' => true,
        'name' => 'related_alliance',
      ),
      'related_system' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_SYSTEM',
        'width' => '10%',
        'default' => true,
        'name' => 'related_system',
      ),
      'open_only_has_active_contract' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_HAS_ACTIVE_CONTRACT',
        'width' => '10%',
        'name' => 'open_only_has_active_contract',
      ),
      'related_active_contract' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_ACTIVE_CONTRACT',
        'width' => '10%',
        'default' => true,
        'name' => 'related_active_contract',
      ),
      'related_contract' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_CONTRACT',
        'width' => '10%',
        'default' => true,
        'name' => 'related_contract',
      ),
      'contract_year' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CONTRACT_YEAR',
        'width' => '10%',
        'default' => true,
        'name' => 'contract_year',
      ),
      'account_industry' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ACCOUNT_INDUSTRY',
        'width' => '10%',
        'default' => true,
        'name' => 'account_industry',
      ),
      'nlfwg_workinggroups_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfwg_workinggroups_contacts_1_name',
        'id' => 'NLFWG_WORKINGGROUPS_CONTACTS_1_NLFWG_WORKINGGROUPS_IDA',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'no_mailing_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_NO_MAILING',
        'width' => '10%',
        'name' => 'no_mailing_c',
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
