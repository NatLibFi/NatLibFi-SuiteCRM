<?php
// created: 2017-11-14 21:45:59
$searchFields['nlfal_Alliances'] = array (
  'name' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT nlfal_alliances.id FROM nlfal_alliances JOIN nlfal_alliances_cstm ON nlfal_alliances.id=nlfal_alliances_cstm.id_c WHERE nlfal_alliances_cstm.name_fin_c LIKE "%{0}%" OR nlfal_alliances_cstm.name_swe_c LIKE "%{0}%" OR nlfal_alliances_cstm.name_eng_c LIKE "%{0}%" OR nlfal_alliances_cstm.name_other_c LIKE "%{0}%"',
    'db_field' => 
    array (
      0 => 'id',
    ),
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
  'alliance_roles' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT al.id FROM nlfal_alliances al JOIN nlfal_alliances_contacts_1_c al_rel ON al.id=al_rel.nlfal_alliances_contacts_1nlfal_alliances_ida WHERE al.deleted=0 AND al_rel.deleted=0 AND al_rel.role REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ALLIANCE_ROLES',
  ),
  'related_service' =>
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT al.id FROM nlfal_alliances al JOIN nlfal_alliances_nlfse_services_1_c rel ON al.id=rel.nlfal_alliances_nlfse_services_1nlfal_alliances_ida WHERE al.deleted=0 AND rel.deleted=0 AND rel.nlfal_alliances_nlfse_services_1nlfse_services_idb IN ({0})',
    'db_field' =>
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_RELATED_SERVICE',
  ),
  'production_status' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT al.id FROM nlfal_alliances al JOIN nlfal_alliances_accounts_1_c a_rel ON al.id=a_rel.nlfal_alliances_accounts_1nlfal_alliances_ida JOIN accounts_nlfbr_businessrelationships_1_c abr_rel ON a_rel.nlfal_alliances_accounts_1accounts_idb=abr_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfse_services_nlfbr_businessrelationships_1_c sbr_rel ON abr_rel.accounts_n824donships_idb=sbr_rel.nlfse_serva51aonships_idb JOIN nlfal_alliances_nlfse_services_1_c s_rel ON (s_rel.nlfal_alliances_nlfse_services_1nlfse_services_idb=sbr_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AND s_rel.nlfal_alliances_nlfse_services_1nlfal_alliances_ida=al.id) JOIN nlfbr_businessrelationships_cstm br_cstm ON br_cstm.id_c=abr_rel.accounts_n824donships_idb WHERE al.deleted=0 AND a_rel.deleted=0 AND s_rel.deleted=0 AND abr_rel.deleted=0 AND sbr_rel.deleted=0 AND br_cstm.palvelu_liittymisen_status_c IN ({0}) {related_subquery.service_where}',
    'related_subquery_parts' => array(
      'related_service' => array(
        'service_where' => 'AND s_rel.nlfal_alliances_nlfse_services_1nlfse_services_idb IN ({0})',
      ),
    ),
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_PRODUCTION_STATUS',
  ),
  'open_only_has_active_contract' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT nlfal_alliances.id FROM nlfal_alliances WHERE nlfal_alliances.id IN (SELECT al.id FROM nlfal_alliances al JOIN nlfal_alliances_accounts_1_c a_rel ON al.id=a_rel.nlfal_alliances_accounts_1nlfal_alliances_ida JOIN accounts_nlfbr_businessrelationships_1_c abr_rel ON a_rel.nlfal_alliances_accounts_1accounts_idb=abr_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfse_services_nlfbr_businessrelationships_1_c sbr_rel ON abr_rel.accounts_n824donships_idb=sbr_rel.nlfse_serva51aonships_idb JOIN nlfal_alliances_nlfse_services_1_c s_rel ON (s_rel.nlfal_alliances_nlfse_services_1nlfse_services_idb=sbr_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AND s_rel.nlfal_alliances_nlfse_services_1nlfal_alliances_ida=al.id) JOIN nlfbr_businessrelationships_aos_contracts_1_c contract_rel ON sbr_rel.nlfse_serva51aonships_idb=contract_rel.nlfbr_busi9351onships_ida WHERE al.deleted=0 AND a_rel.deleted=0 AND s_rel.deleted=0 AND abr_rel.deleted=0 AND sbr_rel.deleted=0 AND contract_rel.deleted=0 AND (contract_rel.active=1) {related_subquery.service_where}) OR NOT {0}',
    'related_subquery_parts' => array(
      'related_service' => array(
        'service_where' => 'AND s_rel.nlfal_alliances_nlfse_services_1nlfse_services_idb IN ({0})',
      ),
    ),
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_HAS_ACTIVE_CONTRACT',
  ),

);
