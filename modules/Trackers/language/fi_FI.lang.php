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
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Näytä aktiiviset käyttäjät',
		  'ShowLastModifiedRecords' => 'viimeiset 10 muokattua tietuetta',
		  'ShowTopUser' => 'Parhaat käyttäjät',
		  'ShowMyModuleUsage' => 'Oman moduulin käyttö',
		  'ShowMyWeeklyActivities' => 'Viikottaiset aktiviteettini',
		  'ShowTop3ModulesUsed' => '3 eniten käyttämääni moduulia',
		  'ShowLoggedInUserCount' => 'Aktiivisten käyttäjien lkm',
		  'ShowMyCumulativeLoggedInTime' => 'Kumulatiivinen kirjautumisaikani (Tällä viikolla)',
		  'ShowUsersCumulativeLoggedInTime' => 'Käyttäjien kumulatiivinen kirjautumisaika (Tällä viikolla)',
		  
		  //Column header mapping
		  'action' => 'toiminto',
		  'active_users' => 'Aktiivisten köyttäjien lkm',
		  'date_modified' => 'Viimeisen tapahtuman pvm',
		  'different_modules_accessed' => 'Käytettyjen moduulien lkm.',
		  'first_name' => 'Etunimi',
		  'item_id' => 'Tunnus',
		  'item_summary' => 'Nimi',
		  'last_action' => 'Viimeisen tapahtuman aika',
		  'last_name' => 'Sukunimi',
		  'module_name' => 'Moduulin nimi',
		  'records_modified' => 'Muokattujen tietueiden lkm',
		  'top_module' => 'Useimmin käytetty moduuli',
		  'total_count' => 'Käytettyjen sivujen lkm',
		  'total_login_time' => 'Aika (tt:mm:ss)',
		  'user_name' => 'Käyttäjätunnus',
		  'users' => 'Käyttäjät',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Käytössä',
		  'LBL_MODULE_NAME_TITLE' => 'Seurantakoodit',
		  'LBL_MODULE_NAME' => 'Seurantakoodit',
		  'LBL_TRACKER_SETTINGS' => 'Seurantakoodien asetukset',
		  'LBL_TRACKER_QUERIES_DESC' => 'Seurantakoodien kyselyt',
		  'LBL_TRACKER_QUERIES_HELP' => 'Kirjaa "hitaat" SQL kyselyt on käytössä kun queryn suoritusaika ylittää arvon "Slow query time threshold"',
		  'LBL_TRACKER_PERF_DESC' => 'Suorituskyvyn seuranta',
		  'LBL_TRACKER_PERF_HELP' => 'Kirjaa tietokannan "roundtrips", käytetyt tiedostot ja muistinkäyttö',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Seurantakoodien istunnot',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Track active users and users&rsquo; session information',
		  'LBL_TRACKER_DESC' => 'Tracker Actions',
		  'LBL_TRACKER_HELP' => 'Track user&rsquo;s page views (modules and records accessed) and record saves',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Number of days of Tracker data to store when Scheduler prunes the tables',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Number of days',
);
?>