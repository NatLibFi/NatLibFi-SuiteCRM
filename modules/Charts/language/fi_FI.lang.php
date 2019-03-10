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
    'ERR_NO_OPPS' => 'Luo uusia myyntimahdollisuuksia, jotta kaaviossa voidaan esittää tietoja.',
    'LBL_ALL_OPPORTUNITIES' => 'Myyntimahdollisuuksien kokonaissumma on ',
    'LBL_CHART_TYPE' => 'Kaavion tyyppi:',
    'LBL_CREATED_ON' => 'Viimeksi ajettu ',
    'LBL_CLOSE_DATE_START' => 'Odotettu päätös pvm - alkaen:',
    'LBL_CLOSE_DATE_END' => 'Odotettu päätös pvm - loppuen:',
    'LBL_DATE_END' => 'Lopetus pvm:',
    'LBL_DATE_RANGE_TO' => ' - ',
    'LBL_DATE_RANGE' => 'Aikajakso on',
    'LBL_DATE_START' => 'Aloituspäivä:',
    'LBL_EDIT' => 'Muokkaa',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'Näyttää kumulatiiviset myyntimahdollisuus summat valitun liidin lähteen, valittujen käyttäjien ja toteuman mukaan.  Toteuman jaottelu perustuu myynnin tiloihin suljettu - voitettu, suljettu-hävitty, tai muihin arvoihin.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'Kaikki myyntimahdollisuudet liidin lähteen ja toteuman mukaan',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'Näyttää kumulatiiviset myyntimahdollisuuksien summat valitun liidin lähteen ja käyttäjien mukaan.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'Kaikki myyntimahdollisuudet liidin lähteen mukaan',
    'LBL_LEAD_SOURCE_OTHER' => 'Muu',
    'LBL_LEAD_SOURCES' => 'Liidin lähteet:',
    'LBL_MODULE_NAME' => 'Tietopaneeli',
    'LBL_MODULE_TITLE' => 'Tietopaneeli: Etusivu',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'Näyttää kumulatiiviset myyntimahdollisuuksien summat kuukausittain toteuman ja valittujen käyttäjien mukaan annetulla aikavälillä.  Toteuma perustuu ja on jaoteltu myyynnin  vaiheiden mukaan.',
    'LBL_OPP_SIZE' => 'Myyntimahdollisuuksien koko',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'myyntimahdollisuudet, joissa liidin lähde on',
    'LBL_OPPS_IN_STAGE' => ' joissa myyntivaihe on',
    'LBL_OPPS_OUTCOME' => ' Joissa toteuma on',
    'LBL_OPPS_WORTH' => 'myyntimahdollisuuksien arvo',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'Näyttää kasautuvat summat valittujen myyntivaiheiden mukaan, joiden oletetut eräpäivät ovat annetun aikavälin sisällä.',
    'LBL_REFRESH' => 'Päivitä',
    'LBL_ROLLOVER_DETAILS' => 'Vie hiiren kohdistin kaavion päälle nähdäksesi lisätietoja.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Vie hiiren kohdistin reunan päälle nähdäksesi lisätietoja.',
    'LBL_SALES_STAGE_FORM_DESC' => 'Näyttää kumulatiiviset myyntimahdollisuuksien summat valittujen myyntivaiheiden ja käyttäjien mukaan, jotka ovat annetun aikajakson sisällä.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'Pipeline myyntivaiheen mukaan',
    'LBL_SALES_STAGES' => 'Myyntivaiheet:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline yhteensä ',
    'LBL_USERS' => 'Käyttäjät:',
    'LBL_YEAR_BY_OUTCOME' => 'Pipeline kuukausittaisen tuloksen mukaan',
    'LBL_YEAR' => 'Vuosi:',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_MEETING' => 'Ajoita tapaaminen',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'NTC_NO_LEGENDS' => 'Ei mitään',

    'LBL_TITLE' => 'Otsikko: ',
    'LBL_MY_MODULES_USED_SIZE' => 'Access Count',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline myyntivaiheen mukaan',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'Lead Source By Outcome',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'Tulos kuukausittain',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'Pipeline liidin lähteen mukaan',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'Oma pipeline myyntivaiheen mukaan',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'My Modules Used (Last 30 Days)',
);
