<?php
$searchdefs ['Leads'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'search_account_name' => 
      array (
        'name' => 'search_account_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sektori_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SEKTORI',
        'width' => '10%',
        'name' => 'sektori_c',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'open_only' => 
      array (
        'name' => 'open_only',
        'label' => 'LBL_OPEN_ITEMS',
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
      'search_account_name' => 
      array (
        'name' => 'search_account_name',
        'label' => 'LBL_SEARCH_ACCOUNT_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'search_contact_last_name' => 
      array (
        'name' => 'search_contact_last_name',
        'label' => 'LBL_SEARCH_CONTACT_LAST_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'search_contact_first_name' => 
      array (
        'name' => 'search_contact_first_name',
        'label' => 'LBL_SEARCH_CONTACT_FIRST_NAME',
        'default' => true,
        'width' => '10%',
      ),
      'nlfse_services_leads_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_NLFSE_SERVICES_LEADS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
        'id' => 'NLFSE_SERVICES_LEADS_1NLFSE_SERVICES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfse_services_leads_1_name',
      ),
      'lead_source' => 
      array (
        'name' => 'lead_source',
        'default' => true,
        'width' => '10%',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_SEARCH_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
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
