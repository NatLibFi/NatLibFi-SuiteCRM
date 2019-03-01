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


$mod_strings = array(
    'LBL_MODULE_NAME' => 'Projektit',
    'LBL_MODULE_TITLE' => 'Projektit: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Projektien haku',
    'LBL_LIST_FORM_TITLE' => 'Projektit',
    'LBL_HISTORY_TITLE' => 'Historia',
    'LBL_ID' => 'Tunnus:',
    'LBL_DATE_ENTERED' => 'Luonti pvm:',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm:',
    'LBL_ASSIGNED_USER_ID' => 'Vastuuhenkilö:',
    'LBL_ASSIGNED_USER_NAME' => 'Projektipäällikkö:',
    'LBL_MODIFIED_USER_ID' => 'Muokkaaja:',
    'LBL_CREATED_BY' => 'Tekijä:',
    'LBL_TEAM_ID' => 'Tiimi:',
    'LBL_NAME' => 'Nimi:',
    'LBL_PDF_PROJECT_NAME' => 'Projektin Nimi:',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DELETED' => 'Poistetti:',
    'LBL_DATE' => 'Pvm:',
    'LBL_DATE_START' => 'Aloitus pvm:',
    'LBL_DATE_END' => 'Lopetus pvm:',
    'LBL_PRIORITY' => 'Prioriteetti:',
    'LBL_MY_PROJECTS' => 'Omat projektit',
    'LBL_MY_PROJECT_TASKS' => 'Omat projektitehtävät',
    'LBL_TOTAL_ESTIMATED_EFFORT' => 'Arvioidut kokonaistunnit:',
    'LBL_TOTAL_ACTUAL_EFFORT' => 'Toteutuneet kokonaistunnit:',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_DAYS' => 'päivää',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Arvioidut kokonaistunnit',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Toteutuneet kokonaistunnit',
    'LBL_LIST_UPCOMING_TASKS' => 'Tulevat tehtävät (1 viikko)',
    'LBL_LIST_OVERDUE_TASKS' => 'Myöhästyneet tehtävät',
    'LBL_LIST_OPEN_CASES' => 'Avoimet palvelupyynnöt',
    'LBL_LIST_END_DATE' => 'Lopetus pvm',
    'LBL_LIST_TEAM_ID' => 'Tiimi',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektitehtävät',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_QUOTE_SUBPANEL_TITLE' => 'Tarjouspyynnöt',
	'LBL_PROJECT_PREDECESSOR_NONE' => 'Ei mitään',
	'LBL_ALL_PROJECTS' => 'All Projects',
	'LBL_ALL_USERS' => 'All Users',
	'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Uusi projekti',
    'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Haluatko varmasti poistaa kontaktin projektista?',
    'LNK_NEW_PROJECT' => 'Luo projekti',
    'LNK_PROJECT_LIST' => 'Projektit',
    'LNK_NEW_PROJECT_TASK' => 'Luo projektitehtävä',
    'LNK_PROJECT_TASK_LIST' => 'Projektitehtävät',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektit',
    'LBL_ACTIVITIES_TITLE' => 'Aktiviteetit',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_QUICK_NEW_PROJECT' => 'Uusi projekti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_CASES_SUBPANEL_TITLE' => 'Palvelupyynnöt',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugit',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Tuotteet',
    'LBL_TASK_ID' => 'Tunnus',
    'LBL_TASK_NAME' => 'Tehtävän nimi',
    'LBL_DURATION' => 'Kesto',
    'LBL_ACTUAL_DURATION' => 'Todellinen kesto',
    'LBL_START' => 'Aloita',
    'LBL_FINISH' => 'Lopeta',
    'LBL_PREDECESSORS' => 'Edeltäjät',
    'LBL_PERCENT_COMPLETE' => '% valmiina',
    'LBL_MORE' => 'lisää...',
    'LBL_PERCENT_BUSY' => '% varattu',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'kuvaus',
    'LBL_DURATION_WIDGET' => 'kesto',
    'LBL_START_WIDGET' => 'aloitus pvm',
    'LBL_FINISH_WIDGET' => 'lopetus pvm',
    'LBL_PREDECESSORS_WIDGET' => 'edeltäjät_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'prosenttia valmiina',
    'LBL_EDIT_PROJECT_TASKS_TITLE' => 'Muokkaa projektitehtävää',
    'LBL_OPPORTUNITIES' => 'Myyntimahdollisuudet',
    'LBL_LAST_WEEK' => 'Edellinen',
    'LBL_NEXT_WEEK' => 'Seuraava',
    'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projektin resurssit',
    'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projektitehtävä',
    'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Loma-ajat',
    'LBL_PROJECT_INFORMATION' => 'Projektin esikatselu',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_INSERTROWS' => 'Insert Rows' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projektitehtävät',
    'LBL_VIEW_GANTT_TITLE' => 'Katso Gantt-kaavio',
    'LBL_VIEW_GANTT_DURATION' => 'Kesto',
    'LBL_TASK_TITLE' => 'Muokkaa tehtävää',
    'LBL_PREDECESSOR_TITLE' => 'Muokkaa edeltäjää',
    'LBL_START_DATE_TITLE' => 'Valitse aloitus pvm',
    'LBL_END_DATE_TITLE' => 'Valitse loppupäivä',
    'LBL_DURATION_TITLE' => 'Muokkaa kestoa',
    'LBL_PERCENTAGE_COMPLETE_TITLE' => 'Muokkaa %valmiusastetta',
    'LBL_ACTUAL_DURATION_TITLE' => 'Muokkaa todellista kestoa',
    'LBL_LAG' => 'Viive',
    'LBL_DAYS' => 'Päivää',
    'LBL_HOURS' => 'Tuntia',
    'LBL_MONTHS' => 'Kuukautta',
    'LBL_SUBTASK' => 'Tehtävät',
    'LBL_MILESTONE_FLAG' => 'Välietappi',
    'LBL_ADD_NEW_TASK' => 'Lisää uusi tehtävä',
    'LBL_DELETE_TASK' => 'Poista tehtävä',
    'LBL_EDIT_TASK_PROPERTIES' => 'Muokkaa tehtävän ominaisuuksia.',
    'LBL_PARENT_TASK_ID' => 'Ylemmän tehtävän Id',
    'LBL_RESOURCE_CHART' => 'Resurssikalenteri',
    'LBL_RESOURCE_CHART_START' => 'Alkupvm:',
    'LBL_RESOURCE_CHART_END' => 'Loppupvm:',
    'LBL_RESOURCES' => 'Valitse resurssit:',
    'LBL_RELATIONSHIP_TYPE' => 'Relaation tyyppi',
    'LBL_ASSIGNED_TO' => 'Projektipäällikkö',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Projektipohja',
    'LBL_STATUS' => 'Tila:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Projektipäällikkö',
    'LBL_AM_PROJECTHOLIDAYS_PROJECT_FROM_AM_PROJECTHOLIDAYS_TITLE' => 'Projektin lomapäivät',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projektit',
    'LBL_TOOLTIP_TASK_NAME' => 'Tehtävän nimi',
    'LBL_TOOLTIP_TITLE' => 'Tämän päivän tehtävät',
    'LBL_TOOLTIP_TASK_DURATION' => 'Kesto',
    'LBL_PROJECT_TITLE_HOVER' => 'Projektin yksityiskohtainen näkymä',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resurssi on käyttäjä',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resurssi on yhteystieto',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Edellinen kuukausi',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Seuraava kuukausi',
    'LBL_RESOURCE_CHART_WEEK' => 'Viikko',
    'LBL_RESOURCE_CHART_DAY' => 'Päivä',
    'LBL_RESOURCE_CHART_WARNING' => 'Projektille ei ole määritelty resursseja.',
    'LBL_PROJECT_DELETE_MSG' => 'Haluatko varmasti poistaa tämän projektin ja siihen liittyvät tehtävät?',
    'LBL_LIST_MY_PROJECT' => 'Omat projektit',
    'LBL_LIST_ASSIGNED_USER' => 'Projektipäällikkö',
    'LBL_UNASSIGNED' => 'Ei kohdistettu',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resurssit',

	'LBL_EMAIL' => 'Sähköpostit',
	'LBL_PHONE' => 'Toimiston puhelin:',
	'LBL_ADD_BUTTON'=> 'Lisää',
	'LBL_ADD_INVITEE' => 'Add Resource',
	'LBL_FIRST_NAME' => 'Etunimi',
	'LBL_LAST_NAME' => 'Sukunimi',
	'LBL_SEARCH_BUTTON'=> 'Hae',
	'LBL_EMPTY_SEARCH_RESULT' => 'Ei hakutuloksia, luo kutsuttava alapuolella.',
	'LBL_CREATE_INVITEE' => 'Create an Resource',
	'LBL_CREATE_CONTACT' => 'Kontaktina',
	'LBL_CREATE_AND_ADD' => 'Luo & lisää',
	'LBL_CANCEL_CREATE_INVITEE' => 'Peruuta',
	'LBL_NO_ACCESS' => 'Sinulla ei ole oikeuksia luoda $module',
	'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
	'LBL_REMOVE' => 'poista',
	'LBL_VIEW_DETAIL' => 'View Details',
	'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

	'LBL_PROJECTS_SEARCH' => 'Search Projects',
	'LBL_USERS_SEARCH' => 'Search Users',
	'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
	'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts : Contacts',
	'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Hae',
	
	'LBL_CHART_TYPE' => 'Tyyppi',
	'LBL_CHART_WEEKLY' => 'Viikoittain',
	'LBL_CHART_MONTHLY' => 'Kuukausittain',	
	'LBL_CHART_QUARTERLY' => 'Kvartaaleittain',

	'LBL_RESOURCE_CHART_MONTH' => 'Kuukausi',
	'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',
 	'LBL_ALL_RESOURCES' => 'All Resources',
	'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project templates',
	'LBL_AOS_QUOTES_PROJECT' => 'Quotes project',

);
?>
