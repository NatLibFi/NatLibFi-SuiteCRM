<?php
// created: 2018-04-21 21:11:05
$searchFields['nlfbr_BusinessRelationships'] = array (
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
  'range_nfl_business_relation_begins' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_nfl_business_relation_begins' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_nfl_business_relation_begins' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_finna_sopimus_solmimisvuosi' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_finna_sopimus_solmimisvuosi' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_finna_sopimus_solmimisvuosi' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_finna_sopimus_paattyy' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_finna_sopimus_paattyy' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_finna_sopimus_paattyy' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_finna_sopimus_paattyy_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_finna_sopimus_paattyy_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_finna_sopimus_paattyy_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_finna_sopimus_solmimisvuosi_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_finna_sopimus_solmimisvuosi_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_finna_sopimus_solmimisvuosi_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'range_nfl_business_relation_begins_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_nfl_business_relation_begins_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_nfl_business_relation_begins_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'business_relationship_roles' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br JOIN nlfbr_businessrelationships_contacts_1_c br_rel ON br.id=br_rel.nlfbr_busic409onships_ida WHERE br.deleted=0 AND br_rel.deleted=0 AND br_rel.role REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_BUSINESS_RELATIONSHIP_ROLES',
  ),
  'open_only_has_active_contract' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br LEFT JOIN nlfbr_businessrelationships_aos_contracts_1_c br_rel ON br.id=br_rel.nlfbr_busi9351onships_ida WHERE br.deleted=0 AND ((br_rel.deleted=0 AND br_rel.active=1) OR NOT {0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
  ),
  'active_contract' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br LEFT JOIN nlfbr_businessrelationships_aos_contracts_1_c br_rel ON br.id=br_rel.nlfbr_busi9351onships_ida JOIN aos_contracts c ON c.id=br_rel.nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb WHERE br.deleted=0 AND c.deleted=0 AND br_rel.deleted=0 AND br_rel.active=1 AND c.id IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ACTIVE_CONTRACT_TITLE',
  ),
  'br_contract' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br LEFT JOIN nlfbr_businessrelationships_aos_contracts_1_c br_rel ON br.id=br_rel.nlfbr_busi9351onships_ida JOIN aos_contracts c ON c.id=br_rel.nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb WHERE br.deleted=0 AND c.deleted=0 AND br_rel.deleted=0 AND c.id IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_BR_CONTRACT_TITLE',
  ),
  'nlfbr_businessrelationships_account_alliances' =>
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br WHERE br.deleted=0 AND br.nlfbr_businessrelationships_account_alliances REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_ACCOUNT_ALLIANCES',
  ),
  'finnanakyma_c' =>
  array(
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br JOIN nlfbr_businessrelationships_finna_views brv ON br.id=brv.businessrelationship_id WHERE br.deleted=0 AND brv.view_status IN ({0})',
    'db_field' => 
    array (
      0 => 'nlfbr_businessrelationships.id',
    ),
    'vname' => 'LBL_FINNANAKYMA',
  ),
  'account_industry' =>
  array(
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br JOIN accounts_nlfbr_businessrelationships_1_c br_acc ON br.id=br_acc.accounts_n824donships_idb JOIN accounts acc ON br_acc.accounts_nlfbr_businessrelationships_1accounts_ida=acc.id WHERE br.deleted=0 AND br_acc.deleted=0 AND acc.deleted=0 AND acc.industry IN ({0})',
    'db_field' => 
    array (
      0 => 'nlfbr_businessrelationships.id',
    ),
    'vname' => 'LBL_ACCOUNT_INDUSTRY',
  ),
  'account_administration' =>
  array(
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT br.id FROM nlfbr_businessrelationships br JOIN accounts_nlfbr_businessrelationships_1_c br_acc ON br.id=br_acc.accounts_n824donships_idb JOIN accounts acc ON br_acc.accounts_nlfbr_businessrelationships_1accounts_ida=acc.id JOIN accounts_cstm acc_cstm ON acc.id=acc_cstm.id_c WHERE br.deleted=0 AND br_acc.deleted=0 AND acc.deleted=0 AND acc_cstm.hallinnonala_c IN ({0})',
    'db_field' => 
    array (
      0 => 'nlfbr_businessrelationships.id',
    ),
    'vname' => 'LBL_ACCOUNT_ADMINISTRATION',
  ),
  'range_production_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_production_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_production_date_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
);
