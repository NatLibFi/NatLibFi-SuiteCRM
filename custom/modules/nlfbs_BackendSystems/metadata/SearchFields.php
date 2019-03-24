<?php
// created: 2018-07-24 23:54:24
$searchFields['nlfbs_BackendSystems'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'related_service_enum' =>
  array(
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT nlfbs_backendsystems.id FROM nlfbs_backendsystems ' .
        'WHERE nlfbs_backendsystems.id IN (' .
        'SELECT nlfbs_backendsystems.id FROM nlfbs_backendsystems ' .
        'JOIN nlfbr_businessrelationships_data_sources br_rel ' .
        'ON br_rel.backend_system REGEXP CONCAT("\\\\^", nlfbs_backendsystems.id, "\\\\^") ' .
        'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
        'ON s_rel.nlfse_serva51aonships_idb=br_rel.businessrelationship_id ' .
        'WHERE nlfbs_backendsystems.deleted=0 AND br_rel.deleted=0 AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida={0}' .
        ')',
    'db_field' =>
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_RELATED_SERVICE_ENUM',
  ),
);
