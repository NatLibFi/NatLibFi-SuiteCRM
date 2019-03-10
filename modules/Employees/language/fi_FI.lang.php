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
    'LBL_MODULE_NAME' => 'Työntekijät',
    'LBL_MODULE_TITLE' => 'Työntekijät: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Hae työntekijää',
    'LBL_LIST_FORM_TITLE' => 'Työntekijät',
    'LBL_NEW_FORM_TITLE' => 'Uusi työntekijä',
    'LBL_LOGIN' => 'Kirjaudu',
    'LBL_RESET_PREFERENCES' => 'Palauta oletukset',
    'LBL_TIME_FORMAT' => 'Ajan esitysmuoto:',
    'LBL_DATE_FORMAT' => 'Pvm:n esitysmuoto:',
    'LBL_TIMEZONE' => 'Nykyinen aika:',
    'LBL_CURRENCY' => 'Valuutta:',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nimi',
    'LBL_LIST_DEPARTMENT' => 'Osasto',
    'LBL_LIST_REPORTS_TO_NAME' => 'Raportoi käyttäjälle',
    'LBL_LIST_EMAIL' => 'Sähköposti',
    'LBL_LIST_USER_NAME' => 'Käyttäjätunnus',
    'LBL_ERROR' => 'Virhe:',
    'LBL_PASSWORD' => 'Salasana:',
    'LBL_USER_NAME' => 'Käyttäjätunnus:',
    'LBL_USER_TYPE' => 'Käyttäjätyyppi',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_THEME' => 'Teema:',
    'LBL_LANGUAGE' => 'Kieli:',
    'LBL_ADMIN' => 'Ylläpitäjä:',
    'LBL_EMPLOYEE_INFORMATION' => 'Työntekijän tiedot',
    'LBL_OFFICE_PHONE' => 'Toimiston puhelin:',
    'LBL_REPORTS_TO' => 'Raportit hlölle Id:',
    'LBL_REPORTS_TO_NAME' => 'Raportit hlölle',
    'LBL_OTHER_PHONE' => 'Toinen puhelin:',
    'LBL_NOTES' => 'Muistios:',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_TITLE' => 'Asema:',
    'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
    'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
    'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_ADDRESS' => 'Osoite:',
    'LBL_CITY' => 'Kaupunki/kunta:',
    'LBL_STATE' => 'Alue tai osavaltio:', //For address fields
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_NAME' => 'Nimi:',
    'LBL_MOBILE_PHONE' => 'GSM:',
    'LBL_FAX' => 'Faksi:',
    'LBL_EMAIL' => 'Sähköpostiosoite:',
    'LBL_EMAIL_LINK_TYPE' => 'Sähköpostiohjelma',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM -sähköposti:</b> Lähetä sähköpostit SuiteCRM:n sähköpostisovelluksen avulla.<br><b>Ulkoinen sähköpostiohjelma:</b> Lähetä sähköpostit SuiteCRM-sovelluksen ulkopuolisella sovelluksella, kuten esimerkiksi Microsoft Outlookilla.',
    'LBL_HOME_PHONE' => 'Kotipuhelin:',
    'LBL_WORK_PHONE' => 'Työpuhelin:',
    'LBL_EMPLOYEE_STATUS' => 'Tila:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_SAVED_SEARCH' => 'Ulkoasun asetukset',
    'LBL_MESSENGER_ID' => 'IM nimi:',
    'LBL_MESSENGER_TYPE' => 'IM Tyyppi:',
    'ERR_LAST_ADMIN_1' => 'Työntekijä "',
    'ERR_LAST_ADMIN_2' => '" on uusin työntekijä, jolle on myönnetty ylläpitäjän oikeudet. Ainakin yhden työntekijän tulee olla ylläpitäjä.',
    'LNK_NEW_EMPLOYEE' => 'Luo työntekijä',
    'LNK_EMPLOYEE_LIST' => 'Työntekijät',
    'ERR_DELETE_RECORD' => 'Anna tietuenumero poistaaksesi tilin.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Tila',

    'LBL_SUGAR_LOGIN' => 'Is User',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Ilmoita kohdennuksista/toimeksiannoista',
    'LBL_IS_ADMIN' => 'On ylläpitäjä',
    'LBL_GROUP' => 'Ryhmä käyttäjä',
    'LBL_PHOTO' => 'Kuva',
    'LBL_DELETE_USER_CONFIRM' => 'Työntekijä on myös käyttäjä. Työntekijän poistaminen poistaa myös käyttäjätiedot ja -tilin. Haluatko varmasti jatkaa?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Haluatko varmasti poistaa tämän työntekijän?',
    'LBL_ONLY_ACTIVE' => 'Active Employees',
    'LBL_SELECT' => 'Valitse' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Autentikointi tunnus',
    'LBL_EXT_AUTHENTICATE' => 'Ulkoinen autentikaatio',
    'LBL_GROUP_USER' => 'Ryhmä käyttäjä',
    'LBL_LIST_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_MODIFIED_BY' => 'Muokkaaja',
    'LBL_MODIFIED_BY_ID' => 'Muokkaaja',
    'LBL_CREATED_BY_NAME' => 'Tekijä', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API -käyttäjä',
    'LBL_PSW_MODIFIED' => 'Salasana muutettu viimeksi',
    'LBL_SHOW_ON_EMPLOYEES' => 'Näytä työntekijätietue',
    'LBL_USER_HASH' => 'Salasana',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Järjestelmän luoma salasana',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_FAX_PHONE' => 'Faksi',
    'LBL_STATUS' => 'Tila',
    'LBL_ADDRESS_CITY' => 'Osoite (postitoimipaikka)',
    'LBL_ADDRESS_COUNTRY' => 'Maa',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ADDRESS_POSTALCODE' => 'Postinumero',
    'LBL_ADDRESS_STATE' => 'Maakunta/lääni:',
    'LBL_ADDRESS_STREET' => 'Katuosoite',

    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_DATE_ENTERED' => 'Luonti pvm',
    'LBL_DELETED' => 'Poistettu',

    'LBL_BUTTON_SELECT' => 'Valitse',
    'LBL_BUTTON_CLEAR' => 'Tyhjennä',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth valtuudet',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Rooli',
    'LBL_SECURITYGROUPS' => 'Turvaryhmät',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
);
