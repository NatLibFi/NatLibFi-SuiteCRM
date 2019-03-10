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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Puhelut',
    'LBL_MODULE_TITLE' => 'Puhelut: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Puhelujen haku',
    'LBL_LIST_FORM_TITLE' => 'Puhelut lista',
    'LBL_NEW_FORM_TITLE' => 'Luo tapaaminen',
    'LBL_LIST_CLOSE' => 'Sulje',
    'LBL_LIST_SUBJECT' => 'Aihe',
    'LBL_LIST_CONTACT' => 'Kontaktit',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_RELATED_TO_ID' => 'Liittyen ID',
    'LBL_LIST_DATE' => 'Aloitus pvm',
    'LBL_LIST_DIRECTION' => 'Suunta',
    'LBL_SUBJECT' => 'Aihe:',
    'LBL_REMINDER' => 'Muistutus:',
    'LBL_CONTACT_NAME' => 'Kontakti:',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_STATUS' => 'Tila:',
    'LBL_DIRECTION' => 'Suunta:',
    'LBL_DATE' => 'Aloitus pvm:',
    'LBL_DURATION' => 'Kesto:',
    'LBL_DURATION_HOURS' => 'Kesto, tuntia:',
    'LBL_DURATION_MINUTES' => 'Kesto, minuuttia:',
    'LBL_HOURS_MINUTES' => '(tunnit/minuutit)',
    'LBL_DATE_TIME' => 'Aloitus pvm & aika:',
    'LBL_TIME' => 'Aloitusaika:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'min',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Ajoita tapaaminen',
    'LNK_CALL_LIST' => 'Katso puheluita',
    'LNK_IMPORT_CALLS' => 'Tuo puheluita',
    'ERR_DELETE_RECORD' => 'Anna tietueen numero poistaaksesi asiakkaan.',
    'LBL_INVITEE' => 'Kutsutut',
    'LBL_RELATED_TO' => 'Liittyen:',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ajoitus',
    'LBL_ADD_INVITEE' => 'Lisää osallistujia',
    'LBL_NAME' => 'Nimi',
    'LBL_FIRST_NAME' => 'Etunimi',
    'LBL_LAST_NAME' => 'Sukunimi',
    'LBL_EMAIL' => 'Sähköpostiosoite',
    'LBL_PHONE' => 'Puhelin',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Lähetä kaikille kutsutuille',
    'LBL_EMAIL_REMINDER' => 'Sähköposti muistutus',
    'LBL_EMAIL_REMINDER_TIME' => 'Sähköposti muistutus aika',
    'LBL_SEND_BUTTON_TITLE' => 'Lähetä kutsut',
    'LBL_SEND_BUTTON_LABEL' => 'Tallenna & Lähetä kutsut',
    'LBL_DATE_END' => 'Lopetus pvm',
    'LBL_REMINDER_TIME' => 'Muistutuksen aika',
    'LBL_EMAIL_REMINDER_SENT' => 'Sähköposti muistutus lähetetty',
    'LBL_SEARCH_BUTTON' => 'Hae',
    'LBL_ADD_BUTTON' => 'Lisää',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Puhelut',
    'LNK_SELECT_ACCOUNT' => 'Valitse asiakas',
    'LNK_NEW_ACCOUNT' => 'Uusi asiakas',
    'LNK_NEW_OPPORTUNITY' => 'Uusi myyntimahdollisuus',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
    'LBL_OUTLOOK_ID' => 'Outlook-tunnus',
    'LBL_MEMBER_OF' => 'Jäsen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Muistiot',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_LIST_MY_CALLS' => 'Omat puhelut',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö',
    'NOTICE_DURATION_TIME' => 'Keston tulee olla suurempi kuin 0',
    'LBL_CALL_INFORMATION' => 'Puhelun tietoja', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_REMOVE' => 'Poista', // PR 6017  commit/30577ae27759c5f4782a530b3d5b4ebd688394d8
    'LBL_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_ACCEPT_LINK' => 'Hyväksy linkki',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Luo Kutsuttu',
    'LBL_CREATE_CONTACT' => 'Kontaktina',
    'LBL_CREATE_LEAD' => 'Liidinä',
    'LBL_CREATE_AND_ADD' => 'Luo & lisää',
    'LBL_CANCEL_CREATE_INVITEE' => 'Peruuta',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ei hakutuloksia, luo kutsuttava alapuolella.',
    'LBL_NO_ACCESS' => 'Sinulla ei ole oikeuksia luoda $module',

    'LBL_REPEAT_TYPE' => 'Toista',
    'LBL_REPEAT_INTERVAL' => 'Toistumisen aikaväli',
    'LBL_REPEAT_DOW' => 'Toista viikonpäivänä',
    'LBL_REPEAT_UNTIL' => 'Toista asti',
    'LBL_REPEAT_COUNT' => 'Toista kertaa',
    'LBL_REPEAT_PARENT_ID' => 'Toista ylätason tunnus',
    'LBL_RECURRING_SOURCE' => 'Toistuva lähde',

    'LBL_SYNCED_RECURRING_MSG' => 'Tämä puhelu tuli toisesta järjestelmästä ja synkronoitiin SuiteCRMään. Tehdäksesi muutoksia, muuta puhelun tietoja toisessa järjestelmässä; sinne tehdyt muutokset voidaan synkronoida tähän tietueeseen.',

    // for reminders
    'LBL_REMINDERS' => 'Muistutukset',
    'LBL_REMINDERS_ACTIONS' => 'Toiminnot:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Sähköpostikutsut',
    'LBL_REMINDERS_WHEN' => 'Milloin:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Poista muistutus',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Lisää kaikki kutsutut',
    'LBL_REMINDERS_ADD_REMINDER' => 'Lisää muistutus',

    'LBL_RESCHEDULE' => 'Valitse uusi ajankohta',
    'LBL_RESCHEDULE_COUNT' => 'Soittoyritykset',
    'LBL_RESCHEDULE_DATE' => 'Pvm',
    'LBL_RESCHEDULE_REASON' => 'Syy',
    'LBL_RESCHEDULE_ERROR1' => 'Syötä päivämäärä oikein',
    'LBL_RESCHEDULE_ERROR2' => 'Valitse syy',
    'LBL_RESCHEDULE_PANEL' => 'Valitse uusi ajankohta',
    'LBL_RESCHEDULE_HISTORY' => 'Soitto yritysten historia',
    'LBL_CANCEL' => 'Peruuta',
    'LBL_SAVE' => 'Tallenna',

    'LBL_CALLS_RESCHEDULE' => 'Soittojen uudelleenaikataulutus',
    'LBL_LIST_STATUS'=>'Tila',
    'LBL_LIST_DATE_MODIFIED'=>'Muokkauspvm',
    'LBL_LIST_DUE_DATE'=>'Eräpäivä',
);