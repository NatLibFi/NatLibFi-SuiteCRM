<?php
$module_name = 'AOS_Contracts';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'label' => 'LBL_CONTRACT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'nlfse_services_aos_contracts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SERVICE_NAME',
        'id' => 'NLFSE_SERVICES_AOS_CONTRACTS_1NLFSE_SERVICES_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'nlfse_services_aos_contracts_1_name',
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
        'type' => 'name',
        'label' => 'LBL_CONTRACT_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'nlfse_services_aos_contracts_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SERVICE_NAME',
        'width' => '10%',
        'default' => true,
        'id' => 'NLFSE_SERVICES_AOS_CONTRACTS_1NLFSE_SERVICES_IDA',
        'name' => 'nlfse_services_aos_contracts_1_name',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'contract_type' => 
      array (
        'name' => 'contract_type',
        'default' => true,
        'width' => '10%',
      ),
      'start_date' => 
      array (
        'name' => 'start_date',
        'default' => true,
        'width' => '10%',
      ),
      'end_date' => 
      array (
        'name' => 'end_date',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO_NAME',
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
      'sovellettavat_liitteet_c' => 
      array (
        'type' => 'multienum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_SOVELLETTAVAT_LIITTEET',
        'width' => '10%',
        'name' => 'sovellettavat_liitteet_c',
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
