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
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ID' => 'Tunnus',
    'LBL_DATE_ENTERED' => 'Luonti pvm',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_CREATED' => 'Tekijä',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DELETED' => 'Poistettu',
    'LBL_NAME' => 'Nimi',
    'LBL_NUMBER' => 'Numero', //PR 3296
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_LIST_FORM_TITLE' => 'Tuotteet,Tarjoukset',
    'LBL_MODULE_NAME' => 'Tuotetarjoukset',
    'LBL_MODULE_TITLE' => 'Tuotetarjoukset',
    'LBL_HOMEPAGE_TITLE' => 'Omat tuotetarjoukset',
    'LNK_NEW_RECORD' => 'Luo tuotetarjous',
    'LNK_LIST' => 'Tarjoukset',
    'LBL_SEARCH_FORM_TITLE' => 'Search Products Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_NEW_FORM_TITLE' => 'New Product Quote',
    'LBL_PRODUCT_NAME' => 'Nimi',
    'LBL_PRODUCT_NUMBER' => 'Numero', //PR 3296
    'LBL_PRODUCT_QTY' => 'Määrä',
    'LBL_PRODUCT_COST_PRICE' => 'Kustannushinta',
    'LBL_PRODUCT_LIST_PRICE' => 'Listahinta',
    'LBL_PRODUCT_UNIT_PRICE' => 'Yksikköhinta',
    'LBL_PRODUCT_DISCOUNT' => 'Alennus',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'Alennus',
    'LBL_PART_NUMBER' => 'Osanumero',
    'LBL_PRODUCT_DESCRIPTION' => 'Kuvaus',
    'LBL_DISCOUNT' => 'Alennuksen tyyppi',
    'LBL_VAT_AMT' => 'Alv:n summa',
    'LBL_VAT' => 'Alv',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Kokonaishinta',
    'LBL_PRODUCT_NOTE' => 'Huomiot',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'Liittyen',
    'LBL_PRODUCT' => 'Tuote',

    'LBL_SERVICE_MODULE_NAME' => 'Palvelut',
    'LBL_SERVICE_NUMBER' => 'Numero', //PR 3296
    'LBL_LIST_NUM' => 'Num.',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_GROUP_NAME' => 'Ryhmä',
    'LBL_GROUP_DESCRIPTION' => 'Kuvaus', //PR 3296
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Cost Price (Default Currency)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Listahinta (Oletusvaluutta)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Yksikköhinta (Oletusvaluutta)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Hinta yhteensä (Oletusvaluutta)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'Alennus (oletus valuutta)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'Alennuksen määrä (Oletusvaluutta)',
    'LBL_VAT_AMT_USDOLLAR' => 'Veron määrä (Oletusvaluutta)',
    'LBL_PRODUCTS_SERVICES' => 'Tuote / Palvelu',
    'LBL_PRODUCT_ID' => 'Product ID',

    'LBL_AOS_CONTRACTS' => 'Sopimukset',
    'LBL_AOS_INVOICES' => 'Laskut',
    'LBL_AOS_PRODUCTS' => 'Tuotteet',
    'LBL_AOS_QUOTES' => 'Tarjouspyynnöt',
);