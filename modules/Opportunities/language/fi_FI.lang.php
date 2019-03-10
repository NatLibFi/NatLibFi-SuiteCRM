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
    'LBL_MODULE_NAME' => 'Myyntimahdollisuudet',
    'LBL_MODULE_TITLE' => 'Myyntimahdollisuudet: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Hae myyntimahdollisuuksia',
    'LBL_LIST_FORM_TITLE' => 'Myyntimahdollisuudet',
    'LBL_OPPORTUNITY_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_OPPORTUNITY' => 'Myyntimahdollisuus:',
    'LBL_NAME' => 'Myyntimahdollisuuden nimi',
    'LBL_INVITEE' => 'Kontaktit',
    'LBL_CURRENCIES' => 'Valuutat',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nimi',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_AMOUNT' => 'Myyntimahdollisuuden summa',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Summa',
    'LBL_LIST_DATE_CLOSED' => 'Sulje',
    'LBL_LIST_SALES_STAGE' => 'Myyntivaihe',
    'LBL_ACCOUNT_ID' => 'Asiakastunnus',
    'LBL_CURRENCY_NAME' => 'Valuutan nimi',
    'LBL_CURRENCY_SYMBOL' => 'Valuutan symboli',

    'UPDATE' => 'Myyntimahdollisuus - valuutan päivitys',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_AMOUNT' => 'Myyntimahdollisuuden summa:',
    'LBL_AMOUNT_USDOLLAR' => 'Summa:',
    'LBL_CURRENCY' => 'Valuutta:',
    'LBL_DATE_CLOSED' => 'Odotettu päätös pvm:',
    'LBL_TYPE' => 'Tyyppi:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_NEXT_STEP' => 'Seuraava askel:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde:',
    'LBL_SALES_STAGE' => 'Myyntivaihe:',
    'LBL_PROBABILITY' => 'Todennäköisyys (%):',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DUPLICATE' => 'Mahdollinen duplikaatti',
    'MSG_DUPLICATE' => 'Myyntimahdollisuus jota olet luomassa voi olla kaksoiskappale jo olemassa olevalle. Saman nimisite myyntimahdollisuudet on listattu alla.<br>Peru toiminto napsauttamalla Peru-painiketta tai luo uusi myyntimahdollisuus napsauttamalla Tallenna-painiketta.',
    'LBL_NEW_FORM_TITLE' => 'Luo myyntimahdollisuus',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_OPPORTUNITY_LIST' => 'Myyntimahdollisuudet',
    'ERR_DELETE_RECORD' => 'Jotta myyntimahdollisuuden voi poistaa, on määritettävä tietuenumero.',
    'LBL_TOP_OPPORTUNITIES' => 'Parhaat myyntimahdollisuuteni',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Haluatko varmasti poistaa myyntimahdollisuuden projektista?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentit',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektit',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Suljetut myyntimahdollisuuteni',
    'LBL_TOTAL_OPPORTUNITIES' => 'Myyntimahdollisuudet',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Suljetut-voitetut myyntimahdollisuudet',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö:',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjat',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LNK_IMPORT_OPPORTUNITIES' => 'Tuo myyntimahdollisuuksia',
    'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Sopimukset',
    'LBL_AOS_QUOTES' => 'Tarjouspyynnöt',
);
