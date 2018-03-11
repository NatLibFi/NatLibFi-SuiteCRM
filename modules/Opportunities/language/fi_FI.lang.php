<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2016 Salesagility Ltd.
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
 ********************************************************************************/

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Myyntimahdollisuudet',
    'LBL_MODULE_TITLE' => 'Myyntimahdollisuudet: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Hae myyntimahdollisuuksia',
    'LBL_VIEW_FORM_TITLE' => 'Myyntimahdollisuudet',
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
    'LBL_ACCOUNT_ID' => 'Asiakas ID',
    'LBL_CURRENCY_ID' => 'Valuutta ID',
    'LBL_CURRENCY_NAME' => 'Valuutan nimi',
    'LBL_CURRENCY_SYMBOL' => 'Valuutan symboli',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Myyntimahdollisuus - valuutan päivitys',
    'UPDATE_DOLLARAMOUNTS' => 'Päivitä U.S. dollarien summat',
    'UPDATE_VERIFY' => 'Vahvista summat',
    'UPDATE_VERIFY_TXT' => 'Verifies that the amount values in opportunities are valid decimal numbers with only numeric characters(0-9) and decimals(.)',
    'UPDATE_FIX' => 'Korjaa summat',
    'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for opportunities based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
    'UPDATE_CREATE_CURRENCY' => 'Luodaan uusi valuutta:',
    'UPDATE_VERIFY_FAIL' => 'Tietue ei läpäissyt tarkistusta:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Nykyiset summat:',
    'UPDATE_VERIFY_FIX' => 'Korjauksen suorittaminen antaa',
    'UPDATE_INCLUDE_CLOSE' => 'Sisällytä suljetut tietueet',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Uusi summa:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Uusi valuutta:',
    'UPDATE_DONE' => 'Valmis',
    'UPDATE_BUG_COUNT' => 'Bugeja löydetty ja yritetty ratkaista:',
    'UPDATE_BUGFOUND_COUNT' => 'Bugeja löydetty:',
    'UPDATE_COUNT' => 'Tietueet päivitetty:',
    'UPDATE_RESTORE_COUNT' => 'Tietueen summat palautettu:',
    'UPDATE_RESTORE' => 'Palauta summat',
    'UPDATE_RESTORE_TXT' => 'Palauttaa korjauksen yhteydessä muutetut summat.',
    'UPDATE_FAIL' => 'Ei voitu päivittää - ',
    'UPDATE_NULL_VALUE' => 'Summa on NULL asetetaan 0:ksi -',
    'UPDATE_MERGE' => 'Yhdistä valuutat',
    'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
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
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the opportunity.',
    'LBL_TOP_OPPORTUNITIES' => 'Parhaat myyntimahdollisuuteni',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Haluatko varmasti poistaa kontaktin myyntimahdollisuudesta?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Haluatko varmasti poistaa myyntimahdollisuuden projektista?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_RAW_AMOUNT' => 'Raakasumma',

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
    'LBL_CREATED_ID' => 'Tekijä ID',
    'LBL_MODIFIED_ID' => 'Muokkaaja ID',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Kampanjat',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LABEL_PANEL_ASSIGNMENT' => 'Tehtävänannot',
    'LNK_IMPORT_OPPORTUNITIES' => 'Tuo myyntimahdollisuuksia',
    'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Kampanja ID',
    'LBL_OPPORTUNITY_TYPE' => 'Myyntimahdollisuuden tyyppi',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Kohdistettu käyttäjänimi',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Kohdistettu ID:lle',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokannut ID',
    'LBL_EXPORT_CREATED_BY' => 'Luonut ID',
    'LBL_EXPORT_NAME' => 'Nimi',

    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Liitetyt kontaktin sähköpostit',
    'TWITTER_USER_C' => 'Twitter käyttäjä',

    'LBL_AOS_CONTRACTS' => 'Sopimukset',
    'LBL_AOS_QUOTES' => 'Tarjoukset',
);

?>
