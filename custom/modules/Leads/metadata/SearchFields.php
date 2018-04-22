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


$searchFields['Leads'] = array (
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
      0 => 'leads.account_name',
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
    'operator' => '=',
    'input_type' => 'checkbox',
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
      4 => 'phone_home',
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
			                        and favorites.parent_type = \'Leads\'
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
  'website' => 
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
  'status' => 
  array (
    'query_type' => 'default',
    'options' => 'lead_status_dom',
    'template_var' => 'STATUS_OPTIONS',
  ),
  'open_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'status',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Dead',
      1 => 'Recycled',
      2 => 'Converted',
    ),
    'type' => 'bool',
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
  'account_description' => 
  array (
    'query_type' => 'default',
  ),
  'lead_source_description' => 
  array (
    'query_type' => 'default',
  ),
  'title' => 
  array (
    'query_type' => 'default',
  ),
  'status_description' => 
  array (
    'query_type' => 'default',
  ),
  'search_account_name' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT leads.id FROM leads JOIN accounts ON leads.account_id=accounts.id WHERE leads.converted=1 AND accounts.deleted=0 AND accounts.name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads WHERE leads.converted=0 AND leads.account_name IS NOT NULL AND leads.account_name!=\'\' AND leads.account_name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads JOIN accounts_leads_1_c acc_rel ON leads.id=acc_rel.accounts_leads_1leads_idb JOIN accounts ON accounts.id=acc_rel.accounts_leads_1accounts_ida WHERE leads.converted=0 AND (leads.account_name IS NULL OR leads.account_name=\'\') AND acc_rel.deleted=0 AND accounts.deleted=0 AND accounts.name LIKE \'%{0}%\' ',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'search_contact_last_name' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT leads.id FROM leads JOIN contacts ON leads.contact_id=contacts.id WHERE leads.converted=1 AND contacts.deleted=0 AND contacts.last_name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads WHERE leads.converted=0 AND leads.last_name IS NOT NULL AND leads.first_name IS NOT NULL AND leads.last_name!=\'\' AND leads.first_name!=\'\' AND leads.last_name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads JOIN contacts_leads_1_c acc_rel ON leads.id=acc_rel.contacts_leads_1leads_idb JOIN contacts ON contacts.id=acc_rel.contacts_leads_1contacts_ida WHERE leads.converted=0 AND ((leads.last_name IS NULL AND leads.first_name IS NULL) OR (leads.last_name=\'\' AND leads.first_name=\'\')) AND acc_rel.deleted=0 AND contacts.deleted=0 AND contacts.last_name LIKE \'%{0}%\' ',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'search_contact_first_name' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT leads.id FROM leads JOIN contacts ON leads.contact_id=contacts.id WHERE leads.converted=1 AND contacts.deleted=0 AND contacts.first_name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads WHERE leads.converted=0 AND leads.last_name IS NOT NULL AND leads.first_name IS NOT NULL AND leads.last_name!=\'\' AND leads.first_name!=\'\' AND leads.first_name LIKE \'%{0}%\' UNION SELECT leads.id FROM leads JOIN contacts_leads_1_c acc_rel ON leads.id=acc_rel.contacts_leads_1leads_idb JOIN contacts ON contacts.id=acc_rel.contacts_leads_1contacts_ida WHERE leads.converted=0 AND ((leads.last_name IS NULL AND leads.first_name IS NULL) OR (leads.last_name=\'\' AND leads.first_name=\'\')) AND acc_rel.deleted=0 AND contacts.deleted=0 AND contacts.first_name LIKE \'%{0}%\' ',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'description' => 
  array (
    'query_type' => 'default',
  ),
  'salutation' => 
  array (
    'query_type' => 'default',
  ),
  'department' => 
  array (
    'query_type' => 'default',
  ),
  'phone_other' => 
  array (
    'query_type' => 'default',
  ),
  'email1' => 
  array (
    'query_type' => 'default',
  ),
  'lead_industry' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => 'SELECT leads.id FROM leads JOIN accounts ON leads.account_id=accounts.id WHERE leads.converted=1 AND accounts.deleted=0 AND leads.deleted=0 AND accounts.industry IN ({0}) UNION SELECT leads.id FROM leads JOIN leads_cstm on leads.id=leads_cstm.id_c WHERE leads.converted=0 AND leads.account_name IS NOT NULL AND leads.account_name!=\'\' AND leads_cstm.sektori_c IN ({0}) UNION SELECT leads.id FROM leads JOIN accounts_leads_1_c acc_rel ON leads.id=acc_rel.accounts_leads_1leads_idb JOIN accounts ON accounts.id=acc_rel.accounts_leads_1accounts_ida WHERE leads.converted=0 AND (leads.account_name IS NULL OR leads.account_name=\'\') AND acc_rel.deleted=0 AND accounts.deleted=0 AND leads.deleted=0 AND accounts.industry IN ({0}) ',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
);
