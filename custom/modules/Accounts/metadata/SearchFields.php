<?php
// created: 2017-09-19 15:59:10
$searchFields['Accounts'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_type' => 
  array (
    'query_type' => 'default',
    'options' => 'account_type_dom',
    'template_var' => 'ACCOUNT_TYPE_OPTIONS',
  ),
  'industry' => 
  array (
    'query_type' => 'default',
    'options' => 'industry_dom',
    'template_var' => 'INDUSTRY_OPTIONS',
  ),
  'annual_revenue' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_street',
      1 => 'shipping_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_city',
      1 => 'shipping_address_city',
    ),
    'vname' => 'LBL_CITY',
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_state',
      1 => 'shipping_address_state',
    ),
    'vname' => 'LBL_STATE',
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_postalcode',
      1 => 'shipping_address_postalcode',
    ),
    'vname' => 'LBL_POSTAL_CODE',
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'billing_address_country',
      1 => 'shipping_address_country',
    ),
    'vname' => 'LBL_COUNTRY',
  ),
  'rating' => 
  array (
    'query_type' => 'default',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_office',
    ),
    'vname' => 'LBL_ANY_PHONE',
  ),
  'email' => 
  array (
    'query_type' => 'default',
    'operator' => 'subquery',
    'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ANY_EMAIL',
  ),
  'website' => 
  array (
    'query_type' => 'default',
  ),
  'ownership' => 
  array (
    'query_type' => 'default',
  ),
  'employees' => 
  array (
    'query_type' => 'default',
  ),
  'sic_code' => 
  array (
    'query_type' => 'default',
  ),
  'ticker_symbol' => 
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
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Accounts\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'nlfse_services_accounts_namedesc' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT services_accounts.nlfse_services_accounts_1accounts_idb FROM nlfse_services_accounts_1_c services_accounts JOIN nlfse_services services ON services_accounts.nlfse_services_accounts_1nlfse_services_ida=services.id WHERE services_accounts.deleted=0 AND (services.name LIKE \'%{0}%\' OR services.description LIKE \'%{0}%\')',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_NAMEDESC',
  ),
  'nlfse_services_accounts_enum' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT services_accounts.nlfse_services_accounts_1accounts_idb FROM nlfse_services_accounts_1_c services_accounts WHERE services_accounts.deleted=0 AND services_accounts.nlfse_services_accounts_1nlfse_services_ida IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_NLFSE_SERVICES_ACCOUNTS_ENUM',
  ),
  'phone_office' => 
  array (
    'query_type' => 'default',
  ),
  'range_ilmoittanut_kiinnostuksen' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_ilmoittanut_kiinnostuksen' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_ilmoittanut_kiinnostuksen' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_hyvaksytty' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_hyvaksytty' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_hyvaksytty' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_ilmoittanut_kiinnostuksen_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_ilmoittanut_kiinnostuksen_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_ilmoittanut_kiinnostuksen_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'shipping_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'billing_address_country' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_postalcode' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_city' => 
  array (
    'query_type' => 'default',
  ),
  'shipping_address_street' => 
  array (
    'query_type' => 'default',
  ),
  'range_hyvaksytty_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_hyvaksytty_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_hyvaksytty_c' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'billing_address_state' => 
  array (
    'query_type' => 'default',
  ),
  'date_modified' => 
  array (
    'query_type' => 'default',
  ),
  'account_roles' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT accounts.id FROM accounts JOIN accounts_contacts acc_rel ON accounts.id=acc_rel.account_id WHERE accounts.deleted=0 AND acc_rel.deleted=0 AND acc_rel.role REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_ACCOUNT_ROLES',
  ),
  'open_only_has_active_contract' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    //'subquery' => 'SELECT accounts.id FROM accounts WHERE accounts.id IN (SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c br_rel ON accounts.id=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfbr_businessrelationships_aos_contracts_1_c contract_rel ON br_rel.accounts_n824donships_idb=contract_rel.nlfbr_busi9351onships_ida WHERE accounts.deleted=0 AND contract_rel.deleted=0 AND (contract_rel.active=1)) OR NOT {0}',
    'subquery' => 'SELECT accounts.id FROM accounts WHERE accounts.id IN (SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c br_rel ON accounts.id=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfbr_businessrelationships_aos_contracts_1_c contract_rel ON br_rel.accounts_n824donships_idb=contract_rel.nlfbr_busi9351onships_ida {related_subquery.service_join} WHERE accounts.deleted=0 AND contract_rel.deleted=0 AND (contract_rel.active=1) {related_subquery.service_where}) OR NOT {0}',
    'related_subquery_parts' => array(
      'related_service' => array(
        'service_join' => 'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON br_rel.accounts_n824donships_idb=s_rel.nlfse_serva51aonships_idb',
        'service_where' => 'AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida IN ({0})',
      ),
    ),
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_HAS_ACTIVE_CONTRACT_TITLE',
  ),
  'related_service' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c a_rel ON accounts.id=a_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON a_rel.accounts_n824donships_idb=s_rel.nlfse_serva51aonships_idb WHERE accounts.deleted=0 AND a_rel.deleted=0 AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'RELATED_SERVICE_TITLE',
  ),
  'production_status' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    //'subquery' => 'SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c br_rel ON accounts.id=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfbr_businessrelationships_cstm br_cstm ON br_cstm.id_c=br_rel.accounts_n824donships_idb WHERE accounts.deleted=0 AND br_rel.deleted=0 AND br_cstm.palvelu_liittymisen_status_c IN ({0})',
    'subquery' => 'SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c br_rel ON accounts.id=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfbr_businessrelationships_cstm br_cstm ON br_cstm.id_c=br_rel.accounts_n824donships_idb {related_subquery.service_join} WHERE accounts.deleted=0 AND br_rel.deleted=0 AND br_cstm.palvelu_liittymisen_status_c IN ({0}) {related_subquery.service_where}',
    'related_subquery_parts' => array(
      'related_service' => array(
        'service_join' => 'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON br_rel.accounts_n824donships_idb=s_rel.nlfse_serva51aonships_idb',
        'service_where' => 'AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida IN ({0})',
      ),
    ),
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_PRODUCTION_STATUS_TITLE',
  ),
  'service_production_usage_year' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT accounts.id FROM accounts JOIN accounts_nlfbr_businessrelationships_1_c br_rel ON accounts.id=br_rel.accounts_nlfbr_businessrelationships_1accounts_ida JOIN nlfbr_businessrelationships_cstm br_cstm ON br_cstm.id_c=br_rel.accounts_n824donships_idb WHERE accounts.deleted=0 AND br_rel.deleted=0 AND br_cstm.finna_production_year_c LIKE "%{0}%"',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_SERVICE_PRODUCTION_USAGE_YEAR',
  ),
);
