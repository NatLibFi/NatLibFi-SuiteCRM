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
    'ERR_DELETE_RECORD' => 'Poista kontakti antamalla tietueen numero.',
    'LBL_ACCOUNT_ID' => 'Asiakastunnus:',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_ADD_BUSINESSCARD' => 'Syötä Käyntikortti',
    'LBL_ADDMORE_BUSINESSCARD' => 'Lisää toinen käyntikortti',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ALT_ADDRESS_CITY' => 'Muu osoite Kaupunki',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Muu osoite Maa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Muu osoite Postinumero',
    'LBL_ALT_ADDRESS_STATE' => 'Muu osoite Maakunta/lääni',
    'LBL_ALT_ADDRESS_STREET_2' => 'Muu osoite Katuosoite 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Muu osoite Katuosoite 3:',
    'LBL_ALT_ADDRESS_STREET' => 'Vaihtoehtoinen katuosoite:',
    'LBL_ALTERNATE_ADDRESS' => 'Vaihtoehtoinen osoite:',
    'LBL_ALT_ADDRESS' => 'Vaihtoehtoinen osoite:',
    'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
    'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle:',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö',
    'LBL_ASSISTANT_PHONE' => 'Assistentin puhelin',
    'LBL_ASSISTANT' => 'Avustaja:',
    'LBL_BIRTHDATE' => 'Syntymäpäivä:',
    'LBL_BUSINESSCARD' => 'Käyntikortti',
    'LBL_CITY' => 'Kaupunki/kunta:',
    'LBL_CAMPAIGN_ID' => 'Kampanja ID',
    'LBL_CONTACT_INFORMATION' => 'Muistion esikatselu',  //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CONTACT_NAME' => 'Nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakti-Myyntimahdollisuus:',
    'LBL_CONTACT_ROLE' => 'Rooli:',
    'LBL_CONTACT' => 'Kontakti:',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATED_ACCOUNT' => 'Luotu uusi asiakas',
    'LBL_CREATED_CALL' => 'Luotu uusi puhelu',
    'LBL_CREATED_CONTACT' => 'Luotu uusi kontakti',
    'LBL_CREATED_MEETING' => 'Luotu uusi kokous',
    'LBL_CREATED_OPPORTUNITY' => 'Luotu uusi myyntimahdollisuus',
    'LBL_DATE_MODIFIED' => 'Muokkauspvm:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Suorat raportit',
    'LBL_DO_NOT_CALL' => 'Ei saa soittaa:',
    'LBL_DUPLICATE' => 'Mahdollinen duplikaatti kontakti',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_EMAIL_OPT_OUT' => 'Estä viestit:',
    'LBL_EXISTING_ACCOUNT' => 'Käytettiin olemassa olevaaa asiakasta',
    'LBL_EXISTING_CONTACT' => 'Käytettiin olemassa olevaa kontaktia',
    'LBL_EXISTING_OPPORTUNITY' => 'Käytettiin olemassa olevaa myyntimahdollisuutta',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Koti:',
    'LBL_ID' => 'Tunnus:',
    'LBL_IMPORT_VCARD' => 'Tuo vCard',
    'LBL_VCARD' => 'Käyntikortti',
    'LBL_IMPORT_VCARDTEXT' => 'Luo uusi kontakti automaattisesti tuomalla vCard.',
    'LBL_INVALID_EMAIL' => 'Virheellinen sähköpostiosoite:',
    'LBL_INVITEE' => 'Suorat raportit',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Rooli',
    'LBL_LIST_EMAIL_ADDRESS' => 'Sähköposti',
    'LBL_LIST_FIRST_NAME' => 'Etunimi',
    'LBL_LIST_FORM_TITLE' => 'Kontaktilista',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Toimiston puhelin',
    'LBL_LIST_TITLE' => 'Titteli',
    'LBL_MOBILE_PHONE' => 'Gsm:',
    'LBL_MODIFIED' => 'Muokkaaja: ',
    'LBL_MODULE_NAME' => 'Kontaktit',
    'LBL_MODULE_TITLE' => 'Kontaktit',
    'LBL_NAME' => 'Nimi:',
    'LBL_NEW_FORM_TITLE' => 'Uusi kontakti',
    'LBL_NOTE_SUBJECT' => 'Muistion aihe:',
    'LBL_OFFICE_PHONE' => 'toimiston puhelin:',
    'LBL_OPP_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Myyntimahdollisuus rooli ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Myyntimahdollisuuden rooli',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Toinen sähköpostiosoite:',
    'LBL_OTHER_PHONE' => 'Toinen puhelin:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_PORTAL_APP' => 'Portaalisovellus',
    'LBL_PORTAL_INFORMATION' => 'Portaalin tiedot',
    'LBL_PORTAL_NAME' => 'Portaali nimi:',
    'LBL_STREET' => 'Katuosoite',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki/kunta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Maakunta/lääni:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Katuosoite 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Katuosoite 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_PRODUCTS_TITLE' => 'Tuotteet',
    'LBL_REPORTS_TO_ID' => 'Raportoi hlölle ID:',
    'LBL_REPORTS_TO' => 'Raportit:',
    'LBL_RESOURCE_NAME' => 'Resurssi nimi',
    'LBL_SALUTATION' => 'Tervehdys',
    'LBL_SAVE_CONTACT' => 'Tallenna kontakti',
    'LBL_SEARCH_FORM_TITLE' => 'Hae kontakti',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Valitse merkityt kontaktit',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Valitse merkityt kontaktit',
    'LBL_STATE' => 'Alue tai osavaltio:', //For address fields
    'LBL_SYNC_CONTACT' => 'Synkronoi Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
    'LBL_TITLE' => 'Titteli:',
    'LNK_CONTACT_LIST' => 'Kontaktit',
    'LNK_IMPORT_VCARD' => 'Luo kontakti vCard tiedostosta',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_EMAIL' => 'Arkistoi viesti',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_NOTE' => 'Luo muistio',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_SELECT_ACCOUNT' => "Valitse asiakas",
    'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Myyntimahdollisuuden luonti vaatii asiakkaan.\n Ole hyvä ja luo asiakas, tai valitse olemassa oleva.',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko poistaa tämän kontaktin Palvelupyynnöstä?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentit',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Kopioi ensisijaiseen osoitteeseen',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Kopioi muuhun osoitteeseen',

    'LBL_CASES_SUBPANEL_TITLE' => 'Palvelupyynnöt',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugien seuranta',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektit',
    'LBL_PROJECTS_RESOURCES' => 'Projektin resurssit',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_LIST_CITY' => 'Kaupunki/kunta',
    'LBL_LIST_STATE' => 'Maakunta/lääni',
    'LBL_HOMEPAGE_TITLE' => 'Omat kontaktit',
    'LBL_OPPORTUNITIES' => 'Myyntimahdollisuudet',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LNK_IMPORT_CONTACTS' => 'Tuo kontakteja',

    // SNIP
    'LBL_USER_SYNC' => 'Käyttäjän synkronointi',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Tapahtumat',

    'LBL_AOP_CASE_UPDATES' => 'Palvelupyyntöpäivitykset',
    'LBL_CREATE_PORTAL_USER' => 'Luo käyttäjä portaaliin',
    'LBL_ENABLE_PORTAL_USER' => 'Aktivoi portaalin käyttäjä',
    'LBL_DISABLE_PORTAL_USER' => 'Passivoi portaalin käyttäjä',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Käyttäjän luonti portaaliin ei onnistunut',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Käyttäjän aktivointi ei onnistunut',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Käyttäjän passivointi ei onnistunut',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Luotu portaalin käyttäjä',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Aktivoitu portaalin käyttäjä',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Passivoitu portaalin käyttäjä',
    'LBL_NO_JOOMLA_URL' => 'Portaalin URL:ää ei ole määritelty',
    'LBL_PORTAL_USER_TYPE' => 'Portaalin käyttäjän tyyppi',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Tili passivoitu',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla-tilin tunnus',
   
    'LBL_ERROR_NO_PORTAL_SELECTED' => 'Portaalia ei ole valittuna', // escaped single quotes required. PR 5426
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_ERROR' => 'Yhtä useampi portaali-URL on asetettuna mutta useampia portaaleja ei tueta. Päivitä portaalikomponentti: ',
    'LBL_PLEASE_UPDATE_DEPRECATED_PORTAL_WARNING' => 'Portaalikomponentti on vanhentunut; päivitä portaalikomponentti: ',

    'LBL_INVALID_USER_DATA' => 'Yritetään luoda portaalikäyttäjä ilman nimeä tai sähköpostiosoitetta. Tarkista yhteystiedot',
    'LBL_NO_RELATED_JACCOUNT' => 'Yritetään poistaa käytöstä CRM-käyttäjä ilman liitettyä Joomla Portal -tiliä',
    'LBL_UNABLE_READ_PORTAL_VERSION' => 'Ei onnistuttu lukemaan AOP-versiota portaalista', // PR 5426
 
    'LBL_AOS_CONTRACTS' => 'Sopimukset',
    'LBL_AOS_INVOICES' => 'Laskut',
    'LBL_AOS_QUOTES' => 'Tarjouspyynnöt',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projektin kontaktit projektin nimestä',
    'LBL_LANGUAGE' => 'Kieli', // PR 5721
);