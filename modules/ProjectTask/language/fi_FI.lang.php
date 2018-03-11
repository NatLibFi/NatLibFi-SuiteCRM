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




$mod_strings = array (
	'LBL_MODULE_NAME' => 'Projektitehtävät',
	'LBL_MODULE_TITLE' => 'Projektitehtäät: Etusivu',
	'LBL_SEARCH_FORM_TITLE' => 'Projektitehtävien haku',
	'LBL_LIST_FORM_TITLE'=> 'Projektitehtävät',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Muokkaa tehtävää ruudukossa',    
	
	'LBL_ID' => 'Tunnus:',
    'LBL_PROJECT_TASK_ID' => 'Projektitehtävä:',
    'LBL_PROJECT_ID' => 'Projekti:',
	'LBL_DATE_ENTERED' => 'Luonti pvm:',
	'LBL_DATE_MODIFIED' => 'Muokkaus pvm:',
	'LBL_ASSIGNED_USER_ID' => 'Vastuuhenkilö:',
	'LBL_MODIFIED_USER_ID' => 'Muokkaaja:',
	'LBL_CREATED_BY' => 'Tekijä:',
	'LBL_TEAM_ID' => 'Tiimi:',
	'LBL_NAME' => 'Nimi:',
	'LBL_STATUS' => 'Tila:',
	'LBL_DATE_DUE' => 'Viimeistään pvm:',
	'LBL_TIME_DUE' => 'Viimeistään aika:',
    'LBL_RESOURCE' => 'Resurssi:',
    'LBL_PREDECESSORS' => 'Edeljtäjät:',
	'LBL_DATE_START' => 'Aloitus pvm:',
    'LBL_DATE_FINISH' => 'Lopetus pvm:',    
	'LBL_TIME_START' => 'Aloitusaika:',
    'LBL_TIME_FINISH' => 'Lopetusaika:',
    'LBL_DURATION' => 'Kesto:',
    'LBL_DURATION_UNIT' => 'Keston yksikkö:',
    'LBL_ACTUAL_DURATION' => 'todellinen kesto:',
	'LBL_PARENT_ID' => 'Projekti:',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',    
    'LBL_PERCENT_COMPLETE' => '% valmiina:',
	'LBL_PRIORITY' => 'Prioriteetti:',
	'LBL_DESCRIPTION' => 'Muistios:',
	'LBL_ORDER_NUMBER' => 'Järjestys:',
	'LBL_TASK_NUMBER' => 'Tehtävän numero:',
    'LBL_TASK_ID' => 'Tehtävä ID:',
	'LBL_DEPENDS_ON_ID' => 'riippuen:',
	'LBL_MILESTONE_FLAG' => 'Virstanpylväs:',
	'LBL_ESTIMATED_EFFORT' => 'Arvioitu kesto (tuntia):',
	'LBL_ACTUAL_EFFORT' => 'Todellinen kesto (tuntia):',
	'LBL_UTILIZATION' => 'Kuormitus (%):',
	'LBL_DELETED' => 'Poistettu:',

	'LBL_LIST_ORDER_NUMBER' => 'Järjestys',
	'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_DAYS' => 'päivää',
	'LBL_LIST_PARENT_NAME' => 'Projekti',
	'LBL_LIST_PERCENT_COMPLETE' => '% valmiina',
	'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_DURATION' => 'Kesto',
    'LBL_LIST_ACTUAL_DURATION' => 'Todellinen kesto',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
	'LBL_LIST_DATE_DUE' => 'Viimeistään pvm',
	'LBL_LIST_DATE_START' => 'Aloitus pvm',
    'LBL_LIST_DATE_FINISH' => 'Lopetus pvm',    
	'LBL_LIST_PRIORITY' => 'Prioriteetti',
	'LBL_LIST_CLOSE' => 'Sulje',
	'LBL_PROJECT_NAME' => 'Projektin nimi',

	'LNK_NEW_PROJECT'	=> 'Luo projekti',
	'LNK_PROJECT_LIST'	=> 'Projektit',
	'LNK_NEW_PROJECT_TASK'	=> 'Luo projektitehtävä',
	'LNK_PROJECT_TASK_LIST'	=> 'Projektitehtävät',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Omat projektitehtävät',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektitehtävät',
	'LBL_NEW_FORM_TITLE' => 'uusi projektitehtävä',

	'LBL_ACTIVITIES_TITLE'=>'Aktiviteetit',
	'LBL_HISTORY_TITLE'=>'Historia',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteetit',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Historia', 
	'DATE_JS_ERROR' => 'Anna päivämäämrä, joka vastaa kirjaus päivää',

    'LBL_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
    'LBL_PARENT_NAME' => 'Projektin nimi',
    'LBL_LIST_PROJECT_NAME' => 'Projektit',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Timeline',
	
	'LBL_SUBTASK' => 'Alitehtävä',
	'LBL_LAG' => 'Viive',
	'LBL_DAYS' => 'Päivää',
	'LBL_HOURS' => 'Tuntia',
	'LBL_RELATIONSHIP_TYPE' => 'Relaation tyyppi',
);

?>