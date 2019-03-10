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

    'LBL_SHAREDWEEK' => 'Jaettu viikko',
    'LBL_SHAREDMONTH' => 'Jaettu kuukausi',

    'LBL_MODULE_NAME' => 'Kalenteri',
    'LBL_MODULE_TITLE' => 'Kalenteri',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_CALL_LIST' => 'Puhelut',
    'LNK_MEETING_LIST' => 'Katso kokouksia',
    'LNK_TASK_LIST' => 'Katso tehtäviä',
    'LNK_TASK' => 'Tehtävä',
    'LNK_TASK_VIEW' => 'Näytä tehtävä',
    'LNK_EVENT' => 'Tapahtuma',
    'LNK_EVENT_VIEW' => 'Näytä tapahtuma',
    'LNK_VIEW_CALENDAR' => 'Tänään',
    'LNK_IMPORT_CALLS' => 'Tuo puheluita',
    'LNK_IMPORT_MEETINGS' => 'Tuo kokouksia',
    'LNK_IMPORT_TASKS' => 'Tuo tehtäviä',
    'LBL_MONTH' => 'Kuukausi',
    'LBL_AGENDADAY' => 'Päivä',
    'LBL_YEAR' => 'Vuosi',

    'LBL_AGENDAWEEK' => 'Viikko',
    'LBL_PREVIOUS_MONTH' => 'Edellinen kuukausi',
    'LBL_PREVIOUS_DAY' => 'Edellinen päivä',
    'LBL_PREVIOUS_YEAR' => 'Edellinen vuosi',
    'LBL_PREVIOUS_WEEK' => 'Edellinen viikko',
    'LBL_NEXT_MONTH' => 'Seuraava kuukausi',
    'LBL_NEXT_DAY' => 'Seuraava päivä',
    'LBL_NEXT_YEAR' => 'Seuraava vuosi',
    'LBL_NEXT_WEEK' => 'Seuraava viikko',
    'LBL_AM' => 'Aamupäivä',
    'LBL_PM' => 'Iltapäivä',
    'LBL_SCHEDULED' => 'Ajoitettu',
    'LBL_BUSY' => 'Varattu',
    'LBL_CONFLICT' => 'Ristiriita',
    'LBL_USER_CALENDARS' => 'Käyttäjän kalenterit',
    'LBL_SHARED' => 'Jaettu',
    'LBL_PREVIOUS_SHARED' => 'Edellinen',
    'LBL_NEXT_SHARED' => 'Seuraava',
    'LBL_SHARED_CAL_TITLE' => 'Jaettu kalenteri',
    'LBL_USERS' => 'Käyttäjä',
    'LBL_REFRESH' => 'Päivitä',
    'LBL_EDIT_USERLIST' => 'Käyttäjälista',
    'LBL_SELECT_USERS' => 'Valitse kalenterissa näytettävät käyttäjät',
    'LBL_FILTER_BY_TEAM' => 'Suodata tiimin mukaan:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuhenkilö',
    'LBL_DATE' => 'Aloitus pvm & aika',
    'LBL_CREATE_MEETING' => 'Ajoita kokous',
    'LBL_CREATE_CALL' => 'Kirjaa puhelu',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'min',


    'LBL_YES' => 'Kyllä',
    'LBL_NO' => 'Ei',
    'LBL_SETTINGS' => 'Asetukset',
    'LBL_CREATE_NEW_RECORD' => 'Luo tehtävä',
    'LBL_LOADING' => 'Ladataan...',
    'LBL_SAVING' => 'Tallentaa...',
    'LBL_SENDING_INVITES' => 'Kutsujen tallennus ja lähetys...',
    'LBL_CONFIRM_REMOVE' => 'Haluatko varmasti poistaa tämän tietueen?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Haluatko varmasti poistaa kaikki toistuvat tietueet?',
    'LBL_EDIT_RECORD' => 'Muokkaa tehtävää',
    'LBL_ERROR_SAVING' => 'Virhe tallennettaessa',
    'LBL_ERROR_LOADING' => 'Virhe ladattaessa',
    'LBL_GOTO_DATE' => 'Siirry päivämäärään',
    'NOTICE_DURATION_TIME' => 'Keston tulee olla yli 0',
    'LBL_STYLE_BASIC' => 'Oletus', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_STYLE_ADVANCED' => 'Edistynyt', //Can be translated in all caps. This string will be used by SuiteP template menu actions

    'LBL_NO_USER' => 'Ei vastaavuutta tietokentälle: Kohdistettu käyttäjälle',
    'LBL_SUBJECT' => 'Aihe',
    'LBL_DURATION' => 'Kesto',
    'LBL_STATUS' => 'Tila',
    'LBL_PRIORITY' => 'Prioriteetti',

    'LBL_SETTINGS_TITLE' => 'Asetukset',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Näytä aikavälit päivä- ja viikkonäkymissä:',
    'LBL_SETTINGS_TIME_STARTS' => 'Ensimmäinen aika:',
    'LBL_SETTINGS_TIME_ENDS' => 'Viimeinen aika:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Näytä puhelut:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Näytä tehtävät:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Näytä tapahtuneet tapaamiset, puhelut ja tehtävät:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Erillinen jaettu kalenteri:',

    'LBL_SAVE_BUTTON' => 'Tallenna',
    'LBL_DELETE_BUTTON' => 'Poista',
    'LBL_APPLY_BUTTON' => 'Hyväksy',
    'LBL_SEND_INVITES' => 'Lähetä kutsut',
    'LBL_CANCEL_BUTTON' => 'Peruuta',
    'LBL_CLOSE_BUTTON' => 'Sulje',

    'LBL_GENERAL_TAB' => 'Yksityiskohdat',
    'LBL_PARTICIPANTS_TAB' => 'Kutsutut',
    'LBL_REPEAT_TAB' => 'Toistuvuus',

    'LBL_REPEAT_TYPE' => 'Toista',
    'LBL_REPEAT_INTERVAL' => 'Kuinka usein?',
    'LBL_REPEAT_END' => 'Toisto loppuu',
    'LBL_REPEAT_END_AFTER' => '&nbsp;',
    'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
    'LBL_REPEAT_END_BY' => 'tänä päivänä:',
    'LBL_REPEAT_DOW' => 'Viikonpäivinä',
    'LBL_REPEAT_UNTIL' => 'Toista kunnes',
    'LBL_REPEAT_COUNT' => 'Toistumiskertoja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Pyyntösi aikoi luoda yli $limit tapaamista.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Muokkaa kaikkia toistoja',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Poista kaikki toistumiset',

    'LBL_DATE_END_ERROR' => 'Lopetus pvm on ennen aloitus pvm',
    'ERR_YEAR_BETWEEN' => 'Kalenteri ei pysty käsittelemään pyydettyä vuotta.<br>Vuoden pitää olla välillä 1970–2037.',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: määrittelemättä tässä näkymässä',
    'LBL_NO_ITEMS_MOBILE' => 'Tällä viikolla kalenterissasi ei ole mitään.',
    'LBL_GENERAL_SETTINGS' => 'Yleisasetukset',
    'LBL_COLOR_SETTINGS' => 'Väriasetukset',
    'LBL_MODULE' => 'Moduuli',
    'LBL_BODY' => 'Kuvaus',
    'LBL_BORDER' => 'Reuna',
    'LBL_TEXT' => 'Teksti',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Su",
            '1' => "ma",
            '2' => "ti",
            '3' => "ke",
            '4' => "to",
            '5' => "pe",
            '6' => "la",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunnuntai",
            '1' => "Maanantai",
            '2' => "Tiistai",
            '3' => "Keskiviikko",
            '4' => "Torstai",
            '5' => "Perjantai",
            '6' => "Lauantai",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Tammi",
            '2' => "Helmi",
            '3' => "Maalis",
            '4' => "Huhti",
            '5' => "Touko",
            '6' => "Kesä",
            '7' => "Heinä",
            '8' => "Elo",
            '9' => "Syys",
            '10' => "Loka",
            '11' => "Marras",
            '12' => "Joulu",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Tammikuu",
            '2' => "Helmikuu",
            '3' => "Maaliskuu",
            '4' => "Huhtikuu",
            '5' => "Touko",
            '6' => "Kesäkuu",
            '7' => "Heinäkuu",
            '8' => "Elokuu",
            '9' => "Syyskuu",
            '10' => "Lokakuu",
            '11' => "Marraskuu",
            '12' => "Joulukuu",
        ),
);