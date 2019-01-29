<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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


$mod_strings = array (

	'LBL_MODULE_NAME' => 'Kalenteri',
	'LBL_AGENDADAY' => 'Päivä',
	'LBL_AGENDAWEEK' => 'Viikko',
	'LBL_SHAREDWEEK' => 'Shared Week',
	'LBL_SHAREDMONTH' => 'Shared Month',


	'LBL_MODULE_NAME' => 'Kalenteri',
	'LBL_MODULE_TITLE' => 'Kalenteri',
	'LNK_NEW_CALL' => 'Kirjaa puhelu',
	'LNK_NEW_MEETING' => 'Ajoita kokous',
	'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
	'LNK_NEW_TASK' => 'Luo tehtävä',
	'LNK_CALL_LIST' => 'Katso puheluita',
	'LNK_MEETING_LIST' => 'Katso kokouksia',
	'LNK_TASK_LIST' => 'Katso tehtäviä',
	'LNK_TASK' => 'Tehtävät',
	'LNK_TASK_VIEW' => 'View Task',
	'LNK_EVENT' => 'Tapahtuma',
	'LNK_EVENT_VIEW' => 'View Event',
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
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Kyllä',
	'LBL_NO' => 'Ei',
	'LBL_SETTINGS' => 'Asetukset',
	'LBL_CREATE_NEW_RECORD' => 'Create Activity',
	'LBL_LOADING' => 'Loading ......',
	'LBL_SAVING' => 'Saving ......',
	'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
	'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
	'LBL_EDIT_RECORD' => 'Edit Activity',
	'LBL_ERROR_SAVING' => 'Error while saving',
	'LBL_ERROR_LOADING' => 'Error while loading',
	'LBL_GOTO_DATE' => 'Goto Date',
	'NOTICE_DURATION_TIME' => 'Keston tulee olla yli 0',
	'LBL_STYLE_BASIC' => 'Oletus',
	'LBL_STYLE_ADVANCED' => 'Edistynyt',

	'LBL_INFO_TITLE' => 'Lisätiedot',
	'LBL_INFO_DESC' => 'Kuvaus',
	'LBL_INFO_START_DT' => 'Aloitus pvm',
	'LBL_INFO_DUE_DT' => 'Due Date & Time',
	'LBL_INFO_DURATION' => 'Kesto',
	'LBL_INFO_NAME' => 'Aihe',
	'LBL_INFO_RELATED_TO' => 'Liittyen',

	'LBL_NO_USER' => 'Ei vastaavuutta tietokentälle: Kohdistettu käyttäjälle',
	'LBL_SUBJECT' => 'Aihe',
	'LBL_DURATION' => 'Kesto',
	'LBL_STATUS' => 'Tila',
	'LBL_PRIORITY' => 'Prioriteetti',
	'LBL_DATE_TIME' => 'Date and Time',


	'LBL_SETTINGS_TITLE' => 'Asetukset',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
	'LBL_SETTINGS_TIME_STARTS'=>'Start time:',
	'LBL_SETTINGS_TIME_ENDS'=>'End time:',
	'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

	'LBL_SAVE_BUTTON' => 'Tallenna',
	'LBL_DELETE_BUTTON' => 'Poista',
	'LBL_APPLY_BUTTON' => 'Apply',
	'LBL_SEND_INVITES' => 'Lähetä kutsut',
	'LBL_CANCEL_BUTTON' => 'Peruuta',
	'LBL_CLOSE_BUTTON' => 'Sulje',

	'LBL_GENERAL_TAB' => 'Yksityiskohdat',
	'LBL_PARTICIPANTS_TAB' => 'Kutsutut',
	'LBL_REPEAT_TAB' => 'Recurrence',
	
	'LBL_REPEAT_TYPE' => 'Repeat',
	'LBL_REPEAT_INTERVAL' => 'Every',
	'LBL_REPEAT_END' => 'Loppuun',
	'LBL_REPEAT_END_AFTER' => 'Jälkeen',
	'LBL_REPEAT_OCCURRENCES' => 'recurrences',
	'LBL_REPEAT_END_BY' => 'By',
	'LBL_REPEAT_DOW' => 'On',
	'LBL_REPEAT_UNTIL' => 'Toista asti',
	'LBL_REPEAT_COUNT' => 'Number of recurrences',
	'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

	'LBL_DATE_END_ERROR' => 'Lopetus pvm on ennen aloitus pvm',
	'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
	'LBL_MODULE' => 'Moduuli',
	'LBL_BODY' => 'Kuvaus',
	'LBL_BORDER' => 'Border',
	'LBL_TEXT' => 'Text',
);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"su",
			"ma",
			"ti",
			"ke",
			"to",
			"pe",
			"la",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunnuntai",
			"Maanantai",
			"Tiistai",
			"Keskiviikko",
			"Torstai",
			"Perjantai",
			"Lauantai",
		),
	'dom_cal_month'=>
		array(
			"",
			"Tammi",
			"Helmi",
			"Maalis",
			"Huhti",
			"Toukokuu",
			"Kesä",
			"Heinä",
			"Elo",
			"Syys",
			"Loka",
			"Marras",
			"Joulu",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"Tammikuu",
			"Helmikuu",
			"Maaliskuu",
			"Huhtikuu",
			"Toukokuu",
			"Kesäkuu",
			"Heinäkuu",
			"Elokuu",
			"Syyskuu",
			"Lokakuu",
			"Marraskuu",
			"Joulukuu",
		),
);
?>
