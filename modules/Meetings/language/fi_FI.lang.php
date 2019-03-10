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
    'LBL_ACCEPT_THIS' => 'Hyväksy?',
    'LBL_ADD_BUTTON' => 'Lisää',
    'LBL_ADD_INVITEE' => 'Lisää osallistujia',
    'LBL_CONTACT_NAME' => 'Kontakti:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_CREATED_BY' => 'Tekijä',
    'LBL_DATE_END' => 'Lopetus pvm',
    'LBL_DATE_TIME' => 'Aloitus pvm & aika:',
    'LBL_DATE' => 'Aloitus pvm:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kokoukset',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DIRECTION' => 'Suunta:',
    'LBL_DURATION_HOURS' => 'Kesto tuntia:',
    'LBL_DURATION_MINUTES' => 'Kesto minuuttia:',
    'LBL_DURATION' => 'Kesto:',
    'LBL_EMAIL' => 'Sähköposti',
    'LBL_FIRST_NAME' => 'Etunimi',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Muistiot',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(tunnit/minuutit)',
    'LBL_INVITEE' => 'Kutsutut',
    'LBL_LAST_NAME' => 'Sukunimi',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_LIST_CLOSE' => 'Sulje',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_LIST_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_LIST_DATE' => 'Aloitus pvm',
    'LBL_LIST_DIRECTION' => 'Suunta',
    'LBL_LIST_DUE_DATE' => 'Viimeistään pvm',
    'LBL_LIST_FORM_TITLE' => 'Kokoukset',
    'LBL_LIST_MY_MEETINGS' => 'Omat kokoukset',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_SUBJECT' => 'Aihe',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_LOCATION' => 'Sijainti:',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_MODIFIED_BY' => 'Muokkaaja',
    'LBL_MODULE_NAME' => 'Kokoukset',
    'LBL_MODULE_TITLE' => 'Kokoukset: Etusivu',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_FORM_TITLE' => 'Luo tapaaminen',
    'LBL_OUTLOOK_ID' => 'Outlook-tunnus',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Toimiston puhelin:',
    'LBL_REMINDER_TIME' => 'Muistutuksen aika',
    'LBL_EMAIL_REMINDER_SENT' => 'Sähköposti muistutus lähetetty',
    'LBL_REMINDER' => 'Muistutus:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Lähetä kaikille kutsutuille',
    'LBL_EMAIL_REMINDER' => 'Sähköposti muistutus',
    'LBL_EMAIL_REMINDER_TIME' => 'Sähköposti muistutus aika',
    'LBL_REMOVE' => 'Poista', // PR 5451
    'LBL_SCHEDULING_FORM_TITLE' => 'Suunnittelu',
    'LBL_SEARCH_BUTTON' => 'Hae',
    'LBL_SEARCH_FORM_TITLE' => 'Hae kokouksia',
    'LBL_SEND_BUTTON_LABEL' => 'Lähetä kutsut',
    'LBL_SEND_BUTTON_TITLE' => 'Lähetä kutsut',
    'LBL_STATUS' => 'Tila:',
    'LBL_TYPE' => 'Meeting Type',
    'LBL_PASSWORD' => 'Meeting Password',
    'LBL_URL' => 'Start/Join Meeting',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Meeting Creator',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Aihe:',
    'LBL_TIME' => 'Aloitus aika:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
    'LBL_PARENT_TYPE' => 'Päätyyppi',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LNK_MEETING_LIST' => 'Kokoukset',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_IMPORT_MEETINGS' => 'Tuo kokouksia',

    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'NOTICE_DURATION_TIME' => 'Keston tulee olla yli 0',
    'LBL_MEETING_INFORMATION' => 'Kokouksen esikatselu', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_LIST_JOIN_MEETING' => 'Join Meeting',
    'LBL_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_ACCEPT_LINK' => 'Hyväksy linkki',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'View Meeting',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'You cannot start this meeting because you are not an Administrator or the owner of the meeting.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Luo Kutsuttu',
    'LBL_CREATE_CONTACT' => 'Kontaktina',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Liidinä', // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Luo & lisää', // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Peruuta',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ei hakutuloksia, luo kutsuttava alapuolella.',
    'LBL_NO_ACCESS' => 'Sinulla ei ole oikeuksia luoda $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Toista',
    'LBL_REPEAT_INTERVAL' => 'Toistumisen aikaväli',
    'LBL_REPEAT_DOW' => 'Toista viikonpäivänä',
    'LBL_REPEAT_UNTIL' => 'Toista asti',
    'LBL_REPEAT_COUNT' => 'Toista kertaa',
    'LBL_REPEAT_PARENT_ID' => 'Toista ylätason tunnus',
    'LBL_RECURRING_SOURCE' => 'Toistuva lähde',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Liittyen:',

    // for reminders
    'LBL_REMINDERS' => 'Muistutukset',
    'LBL_REMINDERS_ACTIONS' => 'Toiminnot:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Sähköpostikutsut',
    'LBL_REMINDERS_WHEN' => 'Milloin:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Poista muistutus',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lisää kaikki kutsutut',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lisää muistutus',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID', // PR 6146
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp', // PR 6146
);
