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
  'LBL_MODULE_NAME' => 'Historia',
  'LBL_MODULE_TITLE' => 'Historia: Etusivu',
  'LBL_SEARCH_FORM_TITLE' => 'Historian haku',
  'LBL_LIST_FORM_TITLE' => 'Historia',
  'LBL_LIST_SUBJECT' => 'Aihe',
  'LBL_LIST_CONTACT' => 'Kontakti',
  'LBL_LIST_RELATED_TO' => 'Liittyen',
  'LBL_LIST_DATE' => 'Pvm',
  'LBL_LIST_TIME' => 'Aloitusaika',
  'LBL_LIST_CLOSE' => 'Sulje',
  'LBL_SUBJECT' => 'Aihe:',
  'LBL_STATUS' => 'Tila:',
  'LBL_LOCATION' => 'Sijainti:',
  'LBL_DATE_TIME' => 'Aloitus pvm & aika:',
  'LBL_DATE' => 'Aloitus pvm:',
  'LBL_TIME' => 'Aloitusaika:',
  'LBL_DURATION' => 'Kesto:',
  'LBL_HOURS_MINS' => '(tunnit/minuutit)',
  'LBL_CONTACT_NAME' => 'Kontaktin nimi: ',
  'LBL_MEETING' => 'Kokous:',
  'LBL_DESCRIPTION_INFORMATION' => 'Kuvaus',
  'LBL_DESCRIPTION' => 'Kuvaus:',
  'LBL_COLON' => ':',
  'LBL_DEFAULT_STATUS' => 'Suunniteltu',
  'LNK_NEW_CALL' => 'Kirjaa puhelu',
  'LNK_NEW_MEETING' => 'Ajoita kokous',
  'LNK_NEW_TASK' => 'Luo tehtävä',
  'LNK_NEW_NOTE' => 'Luo muistio tai liite',
  'LNK_NEW_EMAIL' => 'Arkistoi sähköposti',
  'LNK_CALL_LIST' => 'Puhelut',
  'LNK_MEETING_LIST' => 'Tapaamiset',
  'LNK_TASK_LIST' => 'Tehtävät',
  'LNK_NOTE_LIST' => 'Muistiot',
  'LNK_EMAIL_LIST' => 'Sähköpostit',
  'ERR_DELETE_RECORD' => 'Anna tietueen numero poistaaksesi asiakkaan.',
  'NTC_REMOVE_INVITEE' => 'Haluatko varmasti poistaa osallistujan kokouksesta?',
  'LBL_INVITEE' => 'Kutsutut',
  'LBL_LIST_DIRECTION' => 'Suunta',
  'LBL_DIRECTION' => 'Suunta',
  'LNK_NEW_APPOINTMENT' => 'Uusi tapaaminen',
  'LNK_VIEW_CALENDAR' => 'Tänään',
  'LBL_OPEN_ACTIVITIES' => 'Avaa aktiviteetit',
  'LBL_HISTORY' => 'Historia',
  'LBL_UPCOMING' => 'Tulevat tapaamiseni',
  'LBL_TODAY' => 'saakka ',
  'LBL_NEW_TASK_BUTTON_TITLE' => 'Luo tehtävä',
  'LBL_NEW_TASK_BUTTON_LABEL' => 'Luo tehtävä',
  'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Ajoita kokous',
  'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Ajoita kokous',
  'LBL_SCHEDULE_CALL_BUTTON_TITLE' => 'Kirjaa puhelu',
  'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Kirjaa puhelu',
  'LBL_NEW_NOTE_BUTTON_TITLE' => 'Luo muistio tai liite',
  'LBL_NEW_NOTE_BUTTON_LABEL' => 'Luo muistio tai liite',
  'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkistoi sähköposti',
  'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkistoi sähköposti',
  'LBL_LIST_STATUS' => 'Tila',
  'LBL_LIST_DUE_DATE' => 'Viimeistään pvm',
  'LBL_LIST_LAST_MODIFIED' => 'Muokattu viimeksi',
  'NTC_NONE_SCHEDULED' => 'Ei löydetty.',
  'appointment_filter_dom' => array(
  	 'today' => 'tänään'
  	,'tomorrow' => 'huomenna'
  	,'this Saturday' => 'tämä viikko'
  	,'next Saturday' => 'ensiviikko'
  	,'last this_month' => 'tämä kuukausi'
  	,'last next_month' => 'seuraava kuukausi'
  ),
  'LNK_IMPORT_NOTES'=>'Tuo muistioita',
  'NTC_NONE'=>'Ei mitään',
	'LBL_ACCEPT_THIS'=>'Hyväksy?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Historia',
);

?>