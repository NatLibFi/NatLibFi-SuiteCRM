<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$searchFields['Contacts'] = array (
  'first_name' => 
  array (
    'query_type' => 'default',
  ),
  'last_name' => 
  array (
    'query_type' => 'default',
  ),
  'search_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
    ),
    'force_unifiedsearch' => true,
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'accounts.name',
    ),
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'do_not_call' => 
  array (
    'query_type' => 'default',
    'input_type' => 'checkbox',
    'operator' => '=',
  ),
  'phone' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'phone_mobile',
      1 => 'phone_work',
      2 => 'phone_other',
      3 => 'phone_fax',
      4 => 'assistant_phone',
    ),
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
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Contacts\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'assistant' => 
  array (
    'query_type' => 'default',
  ),
  'address_street' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_street',
      1 => 'alt_address_street',
    ),
  ),
  'address_city' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_city',
      1 => 'alt_address_city',
    ),
  ),
  'address_state' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_state',
      1 => 'alt_address_state',
    ),
  ),
  'address_postalcode' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_postalcode',
      1 => 'alt_address_postalcode',
    ),
  ),
  'address_country' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'primary_address_country',
      1 => 'alt_address_country',
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
  'account_id' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'accounts.id',
    ),
  ),
  'campaign_name' => 
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
  'phone_work' => 
  array (
    'query_type' => 'default',
  ),
  'phone_other' => 
  array (
    'query_type' => 'default',
  ),
  'date_entered' => 
  array (
    'query_type' => 'default',
  ),
  'date_modified' => 
  array (
    'query_type' => 'default',
  ),
  'salutation' => 
  array (
    'query_type' => 'default',
  ),
  'portal_user_type' => 
  array (
    'query_type' => 'default',
  ),
  'contact_roles_all' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT contacts.id FROM contacts JOIN accounts_contacts acc_rel ON contacts.id=acc_rel.contact_id {related_subquery.industry_join} {related_subquery.service_join_acc} WHERE contacts.deleted=0 AND acc_rel.deleted=0 {related_subquery.industry_where} {related_subquery.service_where} AND acc_rel.role REGEXP {0} UNION SELECT contacts.id FROM contacts JOIN nlfbr_businessrelationships_contacts_1_c br_rel ON contacts.id=br_rel.nlfbr_businessrelationships_contacts_1contacts_idb {related_subquery.service_join_br} WHERE contacts.deleted=0 AND br_rel.deleted=0 {related_subquery.service_where} AND br_rel.role REGEXP {0} UNION SELECT contacts.id FROM contacts JOIN nlfwg_workinggroups_contacts_1_c wg_rel ON contacts.id=wg_rel.nlfwg_workinggroups_contacts_1contacts_idb WHERE contacts.deleted=0 AND wg_rel.deleted=0 AND wg_rel.role REGEXP {0} UNION SELECT contacts.id FROM contacts JOIN nlfal_alliances_contacts_1_c all_rel ON contacts.id=all_rel.nlfal_alliances_contacts_1contacts_idb WHERE contacts.deleted=0 AND all_rel.deleted=0 AND all_rel.role REGEXP {0} ',
    'related_subquery_parts' => 
    array (
      'account_industry' => 
      array (
        'industry_join' => 'JOIN accounts acc ON acc_rel.account_id=acc.id',
        'industry_where' => 'AND acc.deleted=0 AND acc.industry IN ({0})',
      ),
      'related_service' => 
      array (
        'service_join_acc' => 'JOIN accounts_nlfbr_businessrelationships_1_c acc_br_rel ON (acc_br_rel.accounts_nlfbr_businessrelationships_1accounts_ida=acc_rel.account_id AND acc_br_rel.deleted=0) JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON acc_br_rel.accounts_n824donships_idb=s_rel.nlfse_serva51aonships_idb',
        'service_join_br' => 'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON br_rel.nlfbr_busic409onships_ida=s_rel.nlfse_serva51aonships_idb',
        'service_where' => 'AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida IN ({0})',
      ),
    ),
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_CONTACT_ROLES_ALL',
  ),
  'account_industry' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT contacts.id FROM contacts JOIN accounts_contacts acc_rel ON contacts.id=acc_rel.contact_id JOIN accounts acc ON acc.id=acc_rel.account_id WHERE contacts.deleted=0 AND acc_rel.deleted=0 AND acc.deleted=0 AND acc.industry IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_CONTACT_ACCOUNT_INDUSTRY',
  ),
  'related_service' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT contacts.id FROM contacts JOIN nlfbr_businessrelationships_contacts_1_c c_rel ON contacts.id=c_rel.nlfbr_businessrelationships_contacts_1contacts_idb JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ON c_rel.nlfbr_busic409onships_ida=s_rel.nlfse_serva51aonships_idb WHERE contacts.deleted=0 AND c_rel.deleted=0 AND s_rel.deleted=0 AND s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida IN ({0})',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_RELATED_SERVICE_TITLE',
  ),
  'related_system' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT contacts.id FROM contacts JOIN accounts_contacts acc_rel ON contacts.id=acc_rel.contact_id JOIN accounts_nlfbs_backendsystems_1_c bs_rel ON bs_rel.accounts_nlfbs_backendsystems_1accounts_ida=acc_rel.account_id WHERE contacts.deleted=0 AND acc_rel.deleted=0 AND bs_rel.deleted=0 AND bs_rel.accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb IN ({0}) ' .
        'UNION ' .
        'SELECT contacts.id FROM contacts JOIN nlfbr_businessrelationships_contacts_1_c br_rel ON contacts.id=br_rel.nlfbr_businessrelationships_contacts_1contacts_idb JOIN nlfbr_businessrelationships_data_sources bs_rel ON bs_rel.businessrelationship_id=br_rel.nlfbr_busic409onships_ida WHERE contacts.deleted=0 AND br_rel.deleted=0 AND bs_rel.deleted=0 AND bs_rel.backend_system LIKE CONCAT("%^", {0}, "^%")',
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_RELATED_SYSTEM',
  ),
  'lead_br_role' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT contacts.id FROM contacts JOIN contacts_leads_2_c lead_rel ON contacts.id=lead_rel.contacts_leads_2contacts_ida WHERE contacts.deleted=0 AND lead_rel.deleted=0 AND lead_rel.role REGEXP {0}',
    'subquery_with_multienum_regexp' => true,
    'db_field' => 
    array (
      0 => 'id',
    ),
    'vname' => 'LBL_LEAD_BR_ROLE',
  ),
  'description' => 
  array (
    'query_type' => 'default',
  ),
  'title' => 
  array (
    'query_type' => 'default',
  ),
  'email1' => 
  array (
    'query_type' => 'default',
  ),
);
