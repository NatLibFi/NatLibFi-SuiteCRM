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
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilön tunnus',
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle',
    'LBL_ID' => 'Tunnus',
    'LBL_DATE_ENTERED' => 'Luontipvm',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_CREATED' => 'Tekijä',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DELETED' => 'Poistettu',
    'LBL_NAME' => 'Nimi',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_EDIT_BUTTON' => 'Muokkaa',
    'LBL_REMOVE' => 'Poista',
    'LBL_LIST_FORM_TITLE' => 'Tapahtumalista',
    'LBL_MODULE_NAME' => 'Tapahtuma',
    'LBL_MODULE_TITLE' => 'Tapahtuma',
    'LBL_HOMEPAGE_TITLE' => 'Tapahtumani',
    'LNK_NEW_RECORD' => 'Luo tapahtuma',
    'LNK_LIST' => 'Katso tapahtumat',
    'LBL_SEARCH_FORM_TITLE' => 'Hae tapahtuma',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_NEW_FORM_TITLE' => 'Uusi tapahtuma',
    'LBL_LOCATION' => 'Sijainti',
    'LBL_START_DATE' => 'aloitus pvm',
    'LBL_END_DATE' => 'Loppu pvm/aika',
    'LBL_BUDGET' => 'Budjetti',
    'LBL_DATE' => 'Aloitus pvm',
    'LBL_DATE_END' => 'Lopetus pvm',
    'LBL_DURATION' => 'Kesto',
    'LBL_INVITE_TEMPLATES' => 'Sähköpostikutsun malli',
    'LBL_INVITE_PDF' => 'Lähetä kutsut',
    'LBL_EDITVIEW_PANEL1' => 'Tapahtuman yksityiskohdat',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Edustajat',
    'LBL_ACCEPT_REDIRECT' => 'Hyväksynnän uudelleenohjauksen URL',
    'LBL_DECLINE_REDIRECT' => 'Kieltäytymisen uudelleenohjauksen URL',
    'LBL_SELECT_DELEGATES' => 'Valitse edustajat',
    'LBL_SELECT_DELEGATES_TITLE' => 'Valitse edustajat:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Prospektilista',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Prospektit',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontaktit',
    'LBL_SELECT_DELEGATES_LEADS' => 'Liidit',
    'LBL_MANAGE_DELEGATES' => 'Hallinnoi edustajia',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Hallinnoi edustajia:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Hallinnoi hyväksymisiä',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Hallinnoi hyväksymisiä:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Hyväksytty',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Kieltäytynyt',
    'LBL_MANAGE_POPUP_ERROR' => 'Valittuna ei ole yhtään edustajaa.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Kutsuttu',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Ei kutsuttu',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Osallistui',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Ei osallistunut',
    'LBL_SUCCESS_MSG' => 'Kaikki kutsut on lähetetty.',
    'LBL_ERROR_MSG_1' => 'Kaikki linkitetyt kontaktit on jo kutsuttu.',
    'LBL_ERROR_MSG_2' => 'Kutsusähköpostien lähetys epäonnistui; tarkista sähköpostiasetuksesi.',
    'LBL_ERROR_MSG_3' => 'Yli 10 sähköpostia on jäänyt lähettämättä. Tarkista, että kaikilla kutsuttavilla kontakteilla on validi sähköpostiosoite. (ks. myös suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' sähköpostia on jäänyt lähettämättä. Tarkista, että kaikilla kutsuttavilla kontakteilla on validi sähköpostiosoite. (ks. myös suitecrm.log)', //LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Kelpaamaton sähköpostimalli',
    'LBL_EMAIL_INVITE' => 'Sähköpostikutsu',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontaktit',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Sijainnit',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Liidit',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Prospektit',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Edustajat',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nimi',
    'LBL_ACCOUNT_NAME' => 'Yritys',
    'LBL_SIGNATURE' => 'Allekirjoitus',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Kutsuttu',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Tila',

    'LBL_ACTIVITY_STATUS' => 'Aktiviteetin tila',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Tapahtuman paikat tapahtuman nimestä',
    // Email links
    'LBL_ACCEPT_LINK' => 'Hyväksy',
    'LBL_DECLINE_LINK' => 'Hylkää',

);
