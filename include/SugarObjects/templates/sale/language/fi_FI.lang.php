<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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
 
 $mod_strings = array (
  'LBL_MODULE_NAME' => 'Myyntimahdollisuudet',
  'LBL_MODULE_TITLE' => 'Myyntimahdollisuudet: Etusivu',
  'LBL_SEARCH_FORM_TITLE' => 'Myyntimahdollisuuksien haku',
  'LBL_VIEW_FORM_TITLE' => 'Myyntimahdollisuusnäkymä',
  'LBL_LIST_FORM_TITLE' => 'Myyntimahdollisuudet',
  'LBL_SALE_NAME' => 'Myyntimahdollisuuden nimi:',
  'LBL_SALE' => 'Myyntimahdollisuus:',
  'LBL_NAME' => 'Myyntimahdollisuuden nimi',
  'LBL_LIST_SALE_NAME' => 'Nimi',
  'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
  'LBL_LIST_AMOUNT' => 'Summa',
  'LBL_LIST_DATE_CLOSED' => 'Sulje',
  'LBL_LIST_SALE_STAGE' => 'Myyntivaihe',
  'LBL_ACCOUNT_ID'=>'Asiakkaan ID',
   'LBL_CURRENCY_ID'=>'Valuutan ID',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Myynti - Valuutan päivitys',
  'UPDATE_DOLLARAMOUNTS' => 'Päivitä U.S. Dollarien summat',
  'UPDATE_VERIFY' => 'Tarkasta summat',
  'UPDATE_VERIFY_TXT' => 'Tarkastaa, että myynnin summatiedot ovat oikeellisia desimaalilukuja siältäen ainoastaan numeroarvoja(0-9) ja desimaalierottimen(.)',
  'UPDATE_FIX' => 'Korjaa summat',
  'UPDATE_FIX_TXT' => 'Attempts to fix any invalid amounts by creating a valid decimal from the current amount. Any modified amount is backed up in the amount_backup database field. If you run this and notice bugs, do not rerun it without restoring from the backup as it may overwrite the backup with new invalid data.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Update the U.S. Dollar amounts for sales based on the current set currency rates. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Luodaan uusi valuutta:',
  'UPDATE_VERIFY_FAIL' => 'Tietue ei läpäissyt tarkistusta:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Nykyinen summa:',
  'UPDATE_VERIFY_FIX' => 'Korjaus antaa arvoksi',
  'UPDATE_INCLUDE_CLOSE' => 'Sisällytä suljetut tietueet',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Uusi summa:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Uusi valuutta:',
  'UPDATE_DONE' => 'Valmis',
  'UPDATE_BUG_COUNT' => 'Bugeja löydetty ja yritetty ratkaista:',
  'UPDATE_BUGFOUND_COUNT' => 'Bugeja löydetty:',
  'UPDATE_COUNT' => 'Tietueita päivitetty:',
  'UPDATE_RESTORE_COUNT' => 'Tietueiden summat palautettu:',
  'UPDATE_RESTORE' => 'Palauta summat',
  'UPDATE_RESTORE_TXT' => 'Palauttaa summat varmuuskopiosta, joka luotiin päivityksen yhteydessä.',
  'UPDATE_FAIL' => 'Päivitys ei onnistunut - ',
  'UPDATE_NULL_VALUE' => 'Summa on NULL asetetaan arvoon 0 -',
  'UPDATE_MERGE' => 'Yhdistä valuutat',
  'UPDATE_MERGE_TXT' => 'Merge multiple currencies into a single currency. If there are multiple currency records for the same currency, you merge them together. This will also merge the currencies for all other modules.',
  'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
  'LBL_AMOUNT' => 'Summa:',
  'LBL_AMOUNT_USDOLLAR' => 'Summa USD:',
  'LBL_CURRENCY' => 'Valuutta:',
  'LBL_DATE_CLOSED' => 'Odotettu päätöspäivä:',
  'LBL_TYPE' => 'Tyyppi:',
  'LBL_CAMPAIGN' => 'Kampanja:',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektit',  
  'LBL_NEXT_STEP' => 'Seuraava askel:',
  'LBL_LEAD_SOURCE' => 'Liidin lähde:',
  'LBL_SALES_STAGE' => 'Myyntivaihe:',
  'LBL_PROBABILITY' => 'Todennäköisyys (%):',
  'LBL_DESCRIPTION' => 'Kuvaus:',
  'LBL_DUPLICATE' => 'Mahdollinen duplikaatti',
  'MSG_DUPLICATE' => 'Myynti jota olet luomassa, saattaa olla duplikaatti olemassa olevan myyntitietueen kanssa. Myyntitietueet samanlaisella nimellä on listattu alla.<br>Paina Tallenna jatkaaksesi luomista tai Peruuta, jolloin myyntitietuetta ei luoda.',
  'LBL_NEW_FORM_TITLE' => 'Luo myyntitapahtuma',
  'LNK_NEW_SALE' => 'Luo myyntitapahtuma',
  'LNK_SALE_LIST' => 'Myyntitapahtumat',
  'ERR_DELETE_RECORD' => 'Tietueen numero tulee antaa, jotta tämä myyntitapahtuma voidaan poistaa.',
  'LBL_TOP_SALES' => 'Parhaat myyntitapahtumani',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Haluatko varmasti poistaa kontaktin tästä myyntitapahtumasta?',
	'SALE_REMOVE_PROJECT_CONFIRM' => 'Haluatko varmasti poistaaa myyntitapahtuman projektista?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Myynti',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteetit',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia',
    'LBL_RAW_AMOUNT'=>'Raakasumma',


    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
	'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
  'LBL_MY_CLOSED_SALES' => 'Suljetut myyntitapahtumani',
  'LBL_TOTAL_SALES' => 'Kokonaismyynti',
  'LBL_CLOSED_WON_SALES' => 'Suljetut voitetut myyntimahdollisuudet',
  'LBL_ASSIGNED_TO_ID' =>'Osoitettu käyttäjälle ID',
  'LBL_CREATED_ID'=>'Tekijä',
  'LBL_MODIFIED_ID'=>'Muokkaaja',
  'LBL_MODIFIED_NAME'=>'Muokkaaja',
  'LBL_SALE_INFORMATION'=>'Myyntimahdollisuuden tiedot',
  'LBL_CURRENCY_NAME'=>'Valuutan nimi',
  'LBL_CURRENCY_SYMBOL'=>'Valuutan symboli',
  'LBL_EDIT_BUTTON' => 'Muokkaa',
   'LBL_REMOVE' => 'Poista',


);

?>
