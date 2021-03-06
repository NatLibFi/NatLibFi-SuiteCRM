<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
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
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_ID' => 'Kohdistettu käyttäjätunnukselle',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuhenkilö',
    'LBL_SECURITYGROUPS' => 'Turvaryhmät',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Turvaryhmät',
    'LBL_ID' => 'Tunnus',
    'LBL_DATE_ENTERED' => 'Luontipäiväys:',
    'LBL_DATE_MODIFIED' => 'Muokkauspäivämäärä',
    'LBL_MODIFIED' => 'Muokkaaja:',
    'LBL_MODIFIED_NAME' => 'Muokkaaja:',
    'LBL_CREATED' => 'Tekijä',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DELETED' => 'Poistetti',
    'LBL_NAME' => 'Nimi',
    'LBL_CREATED_USER' => 'Tekijä:',
    'LBL_MODIFIED_USER' => 'Muokkaaja:',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_EDIT_BUTTON' => 'Muokkaa',
    'LBL_REMOVE' => 'Poista',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Create Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Search Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Katso historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'View Spots',
    'LNK_SPOT_CREATE' => 'Create Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Nimi',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Asiakastyyppi',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industry',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Billing Country',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Vastuuhenkilö',
    'LBL_AN_LEADS_STATUS' => 'Tila',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Kampanjan nimi',
    'LBL_AN_LEADS_YEAR' => 'Vuosi',
    'LBL_AN_LEADS_QUARTER' => 'Quarter',
    'LBL_AN_LEADS_MONTH' => 'Kuukausi',
    'LBL_AN_LEADS_WEEK' => 'Viikko',
    'LBL_AN_LEADS_DAY' => 'Päivä',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Myyntimahdollisuus',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Vastuuhenkilö',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'OpportunityType',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_AN_SALES_AMOUNT' => 'Summa',
    'LBL_AN_SALES_STAGE' => 'Myyntivaihe',
    'LBL_AN_SALES_PROBABILITY' => 'Probability',
    'LBL_AN_SALES_DATE' => 'Sales Date',
    'LBL_AN_SALES_QUARTER' => 'Sales Quarter',
    'LBL_AN_SALES_MONTH' => 'Sales Month',
    'LBL_AN_SALES_WEEK' => 'Sales Week',
    'LBL_AN_SALES_DAY' => 'Sales Day',
    'LBL_AN_SALES_YEAR' => 'Sales Year',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanja',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_AN_SERVICE_STATE' => 'Tila',
    'LBL_AN_SERVICE_STATUS' => 'Tila',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioriteetti',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Created Day',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Created Week',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Created Month',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Created Quarter',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Created Year',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Vastuuhenkilö',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tyyppi',
    'LBL_AN_ACTIVITIES_NAME' => 'Nimi',
    'LBL_AN_ACTIVITIES_STATUS' => 'Tila',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Vastuuhenkilö',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Tila',
    'LBL_AN_MARKETING_TYPE' => 'Tyyppi',
    'LBL_AN_MARKETING_BUDGET' => 'Budjetti',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Expected Cost',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Arvioitu tuotto',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Myyntimahdollisuus',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Myyntimahdollisuuden summa',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Opportunity Assigned To',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Asiakkaan nimi',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Kampanjan nimi',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Aktiviteetin pvm',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Aktiviteettityyppi',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Liittyen Tyyppi',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'Related ID',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Myyntimahdollisuus',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Myyntimahdollisuuden tyyppi',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Opportunity Lead Source',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Opportunity Sales Stage',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Item Name',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Item Type',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Item Category',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Qty',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Item List Price',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Item Sale Price',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Item Cost Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Item Discount Price',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Alennus',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Item Total',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Kokonaissumma',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Vastuuhenkilö',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Luontipäiväys:',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Day Created',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Week Created',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Month Created',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Quarter Created',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Year Created',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Error ascertaining the label for the pivot sub-area',

    //Added to allow for the UI of the pivot to be language agnostic
    'LBL_RENDERERS_TABLE' =>'Table',
    'LBL_RENDERERS_TABLE_BARCHART' =>'Table Barchart',
    'LBL_RENDERERS_HEATMAP' =>'Heatmap',
    'LBL_RENDERERS_ROW_HEATMAP' =>'Row Heatmap',
    'LBL_RENDERERS_COL_HEATMAP' =>'Col Heatmap',
    'LBL_RENDERERS_LINE_CHART' =>'Viivakaavio',
    'LBL_RENDERERS_BAR_CHART' =>'Pylväskaavio',
    'LBL_RENDERERS_STACKED_BAR_CHART' =>'Stacked Bar',
    'LBL_RENDERERS_AREA_CHART' =>'Area Chart',
    'LBL_RENDERERS_SCATTER_CHART' =>'Scatter Chart',

    'LBL_AGGREGATORS_COUNT' => 'Lukumäärä',
    'LBL_AGGREGATORS_COUNT_UNIQUE_VALUES' => 'Count Unique Values',
    'LBL_AGGREGATORS_LIST_UNIQUE_VALUES' => 'List Unique Values',
    'LBL_AGGREGATORS_SUM' => 'Summa',
    'LBL_AGGREGATORS_INTEGER_SUM' => 'Integer Sum',
    'LBL_AGGREGATORS_AVERAGE' => 'Keskiarvo',
    'LBL_AGGREGATORS_MINIMUM' => 'Vähintään',
    'LBL_AGGREGATORS_MAXIMUM' => 'Enintään',
    'LBL_AGGREGATORS_SUM_OVER_SUM' => 'Sum over Sum',
    'LBL_AGGREGATORS_80%_UPPER_BOUND' => '80% Upper Bound',
    'LBL_AGGREGATORS_80%_LOWER_BOUND' => '80% Lower Bound',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_TOTAL' => 'Sum as Fraction of Total',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_ROWS' => 'Sum as Fraction of Rows',
    'LBL_AGGREGATORS_SUM_AS_FRACTION_OF_COLUMNS' => 'Sum as Fraction of Columns',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_TOTAL' => 'Count as Fraction of Total',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_ROWS' => 'Count as Fraction of Rows',
    'LBL_AGGREGATORS_COUNT_AS_FRACTION_OF_COLUMNS' => 'Count as Fraction of Columns',

    'LBL_LOCALE_STRINGS_RENDER_ERROR' => 'An error occurred rendering the PivotTable results.',
    'LBL_LOCALE_STRINGS_COMPUTING_ERROR' => 'An error occurred computing the PivotTable results.',
    'LBL_LOCALE_STRINGS_UI_RENDER_ERROR' => 'An error occurred rendering the PivotTable UI.',
    'LBL_LOCALE_STRINGS_SELECT_ALL' => 'Valitse kaikki',
    'LBL_LOCALE_STRINGS_SELECT_NONE' => 'Select None',
    'LBL_LOCALE_STRINGS_TOO_MANY' => '(too many to list)',
    'LBL_LOCALE_STRINGS_FILTER_RESULTS' => 'Filter results',
    'LBL_LOCALE_STRINGS_TOTALS' => 'Totals',
    'LBL_LOCALE_STRINGS_VS' => 'vs',
    'LBL_LOCALE_STRINGS_BY' => '-',
    'LBL_LOCALE_STRINGS_OK' => 'OK',

    'LBL_ACTIVITIES_CALL'=>'Puhelu',
    'LBL_ACTIVITIES_MEETING'=>'Tapaaminen',
    'LBL_ACTIVITIES_TASK'=>'Tehtävä',
);
