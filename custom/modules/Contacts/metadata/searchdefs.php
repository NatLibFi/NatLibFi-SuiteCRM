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
      'account_name' => 
      array (
        'label' => 'LBL_ACCOUNT_NAME',
        'type' => 'relate',
        'default' => true,
        'width' => '10%',
        'name' => 'account_name',
      ),
      'contact_roles_all' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ROLES_ALL',
        'width' => '10%',
        'default' => true,
        'name' => 'contact_roles_all',
      ),
      'title' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TITLE',
        'width' => '10%',
        'default' => true,
        'name' => 'title',
      ),
      'account_industry' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_CONTACT_ACCOUNT_INDUSTRY',
        'width' => '10%',
        'default' => true,
        'name' => 'account_industry',
      ),
      'nlfal_alliances_contacts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfal_alliances_contacts_1_name',
        'id' => 'NLFAL_ALLIANCES_CONTACTS_1_NLFAL_ALLIANCES_IDA',
      ),
      'related_system' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_RELATED_SYSTEM',
        'width' => '10%',
        'default' => true,
        'name' => 'related_system',
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
