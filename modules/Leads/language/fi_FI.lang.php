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

/*********************************************************************************
 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_first_name' => 'LBL_LIST_FIRST_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_title' => 'LBL_LIST_TITLE', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME', //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS', //DON'T CONVERT THESE THEY ARE MAPPINGS

    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Asiakkaan kuvaus',
    'LBL_ACCOUNT_ID' => 'Asiakkaan ID',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_ADD_BUSINESSCARD' => 'Uusi käyntikortti',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ALT_ADDRESS_CITY' => 'Vaihtoehtoinen osoite Kaupunki/kunta',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Vaihtoehtoinen osoite Maa',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Vaihtoehtoinen osoite Postinumero',
    'LBL_ALT_ADDRESS_STATE' => 'Vaihtoehtoinen osoite Maakunta/lääni',
    'LBL_ALT_ADDRESS_STREET_2' => 'Katuosoite 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Katuosoite 3',
    'LBL_ALT_ADDRESS_STREET' => 'Vaihtoehtoinen katuosoite',
    'LBL_ALTERNATE_ADDRESS' => 'Toinen osoite:',
    'LBL_ALT_ADDRESS' => 'Toinen osoite:',
    'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
    'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö:',
    'LBL_BACKTOLEADS' => 'Takaisin liideihin',
    'LBL_BUSINESSCARD' => 'Muunna liidi',
    'LBL_CITY' => 'Kaupunki/kunta:',
    'LBL_CONTACT_ID' => 'Contact ID',
    'LBL_CONTACT_INFORMATION' => 'Liidin esikatselu',
    'LBL_CONTACT_NAME' => 'Liidin nimi:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Liidi-Myyntimahdollisuus:',
    'LBL_CONTACT_ROLE' => 'Rooli:',
    'LBL_CONTACT' => 'Liidi:',
    'LBL_CONVERTED_ACCOUNT' => 'Muunnettu asiakas:',
    'LBL_CONVERTED_CONTACT' => 'Muunnettu kontakti:',
    'LBL_CONVERTED_OPP' => 'Muunnettu myyntimahdollisuus:',
    'LBL_CONVERTED' => 'Muunnettu',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Muunna liidi',
    'LBL_CONVERTLEAD' => 'Muunna liidi',
    'LBL_CONVERTLEAD_WARNING' => 'Varoitus: Liidin tila jota olet muuntamassa on "muunnettu". Kontakti ja/tai asiakastietueet voivat olla jo luotuna. Jos haluat jatkaa valitse "Tallenna". Muutoin paina "Peruuta".',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Mahdollinen kontakti: ',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATED_NEW' => 'Luotu uusi ',
    'LBL_CREATED_ACCOUNT' => 'Luotu uusi asiakas',
    'LBL_CREATED_CALL' => 'Luotu uusi puhelu',
    'LBL_CREATED_CONTACT' => 'Luotu uusi kontakti',
    'LBL_CREATED_MEETING' => 'Luotu uusi kokous',
    'LBL_CREATED_OPPORTUNITY' => 'Luotu uusi myyntimahdollisuus',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Liidit',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_DESCRIPTION_INFORMATION' => 'Kuvaus',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_DO_NOT_CALL' => 'Ei saa soittaa:',
    'LBL_DUPLICATE' => 'Samankaltaiset liidit',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_EMAIL_OPT_OUT' => 'Estä viestit:',
    'LBL_EXISTING_ACCOUNT' => 'Käytettiin olemassa olevaaa asiakasta',
    'LBL_EXISTING_CONTACT' => 'Käytettiin olemassa olevaa kontaktia',
    'LBL_EXISTING_OPPORTUNITY' => 'Käytettiin olemassa olevaa myyntimahdollisuutta',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_FULL_NAME' => 'Koko nimi:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_HOME_PHONE' => 'Puhelin koti:',
    'LBL_IMPORT_VCARD' => 'Tuo vCard',
    'LBL_VCARD' => 'Käyntikortti/vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Luo uusi liidi automaattisesti tuomalla vCard.',
    'LBL_INVALID_EMAIL' => 'Virheellinen sähköpostiosoite:',
    'LBL_INVITEE' => 'Raportointi',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus:',
    'LBL_LEAD_SOURCE' => 'Liidin lähde:',
    'LBL_LIST_ACCEPT_STATUS' => 'Hyväksynnän tila',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakas',
    'LBL_LIST_CONTACT_NAME' => 'Liidi',
    'LBL_LIST_CONTACT_ROLE' => 'Rooli',
    'LBL_LIST_DATE_ENTERED' => 'Luonti pvm',
    'LBL_LIST_EMAIL_ADDRESS' => 'Sähköposti',
    'LBL_LIST_FIRST_NAME' => 'Etunimi',
    'LBL_VIEW_FORM_TITLE' => 'Liidi',
    'LBL_LIST_FORM_TITLE' => 'Liidit',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Liidin lähteen kuvaus',
    'LBL_LIST_LEAD_SOURCE' => 'Liidin lähde',
    'LBL_LIST_MY_LEADS' => 'Omat liidit',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_PHONE' => 'Toimiston puhelin',
    'LBL_LIST_REFERED_BY' => 'Suosittelija',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_TITLE' => 'Titteli',
    'LBL_MOBILE_PHONE' => 'Gsm:',
    'LBL_MODULE_NAME' => 'Liidit',
    'LBL_MODULE_TITLE' => 'Liidit: Etusivu',
    'LBL_NAME' => 'Nimi:',
    'LBL_NEW_FORM_TITLE' => 'Uusi liidi',
    'LBL_NEW_PORTAL_PASSWORD' => 'Uusi portaalin salasana:',
    'LBL_OFFICE_PHONE' => 'toimiston puhelin:',
    'LBL_OPP_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Myyntimahdollisuuden summa:',
    'LBL_OPPORTUNITY_ID' => 'Myyntimahdollisuuden ID',
    'LBL_OPPORTUNITY_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Toinen sähköpostiosoite:',
    'LBL_OTHER_PHONE' => 'Toinen puhelin:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_PORTAL_ACTIVE' => 'Portaali aktiivisena:',
    'LBL_PORTAL_APP' => 'Portaalisovellus',
    'LBL_PORTAL_INFORMATION' => 'Portaalin tiedot',
    'LBL_PORTAL_NAME' => 'Portaali nimi:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Portaalin salasana asetettu:',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_STREET' => 'Katuosoite',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ensisijainen osoite Kaupunki/kunta',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Ensisijainen osoite Maa',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Ensisijainen osoite Postinumero',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Ensisijainen osoite Maakunta/lääni',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ensisijainen osoite Katuosoite 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ensisijainen osoite Katuosoite 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ensisijainen osoite Katuosoite',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_REFERED_BY' => 'Suosittelija:',
    'LBL_REPORTS_TO_ID' => 'Raportit ID',
    'LBL_REPORTS_TO' => 'Raportit:',
    'LBL_REPORTS_FROM' => 'Raportin lähettäjä:',
    'LBL_SALUTATION' => 'Tervehdys',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_ID' => 'Muokkaaja',
    'LBL_CREATED' => 'Tekijä',
    'LBL_CREATED_ID' => 'Tekijä',
    'LBL_SEARCH_FORM_TITLE' => 'Liidien haku',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Valitse merkityt liidit',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Valitse merkityt liidit',
    'LBL_STATE' => 'Maakunta/lääni:',
    'LBL_STATUS_DESCRIPTION' => 'Tila:',
    'LBL_STATUS' => 'Tila:',
    'LBL_TITLE' => 'Titteli:',
    'LNK_IMPORT_VCARD' => 'Luotiin liidi vCard:sta',
    'LNK_LEAD_LIST' => 'Liidit',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_APPOINTMENT' => 'Luo kokous',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_NOTE' => 'Luo muistio',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Ajoita tapaaminen',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_SELECT_ACCOUNTS' => ' <b>TAI</b> valitse asiakas',
    'LNK_SELECT_CONTACTS' => ' <b>TAI</b> valitse kontakti',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopioi vaihtoehtoinen osoite ensisijaiseen osoitteeseen',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopioi ensisijainen osoite vaihtoehtoiseen osoitteeseen',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Myyntimahdollisuuden luonti vaatii asiakkaan.\n Ole hyvä ja luo asiakas, tai valitse olemassa oleva.',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko varmasti poistaa tämän liidin tästä Palvelupyynnöstä?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Oletko varma että haluat tämän tietueen suorana raporttina?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_TARGET_OF_CAMPAIGNS' => 'Onnistunut kampanja:',
    'LBL_TARGET_BUTTON_LABEL' => 'Kohdennettu',
    'LBL_TARGET_BUTTON_TITLE' => 'Kohdennettu',
    'LBL_TARGET_BUTTON_KEY' => 'T',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
    'LBL_CAMPAIGN_LEAD' => 'Kampanjat',
    'LBL_BIRTHDATE' => 'Syntymäpäivä:',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Kiitos liidin kirjauksestanne.',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Valitettavasti palvelin on tällä hetkellä saavuttamattomissa. Olkaa hyvä ja yrittäkää uudestaan myöhemmin.',
    'LBL_ASSISTANT_PHONE' => 'Assistentin puhelin',
    'LBL_ASSISTANT' => 'Assistentti',
    'LBL_REGISTRATION' => 'Rekisteröinti',
    'LBL_MESSAGE' => 'Anna allaolevat tiedot. Tiedot ja/tai tili luodaan varmistuspyynnön mukaisesti.',
    'LBL_SAVED' => 'Kiitos rekisteröinnistä. Tilisi luodaan, ja joku ottaa sinuun pian yhteyttä.',
    'LBL_CLICK_TO_RETURN' => 'Palaa portaaliin',
    'LBL_CREATED_USER' => 'Luotiin käyttäjä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_CONVERT_MODULE_NAME' => 'Moduuli',
    'LBL_CONVERT_REQUIRED' => 'Vaadittu',
    'LBL_CONVERT_SELECT' => 'Salli valinta',
    'LBL_CONVERT_COPY' => 'Kopioi data',
    'LBL_CONVERT_EDIT' => 'Muokkaa',
    'LBL_CONVERT_DELETE' => 'Poista',
    'LBL_CONVERT_ADD_MODULE' => 'Lisää moduuli',
    'LBL_CREATE' => 'Luo',
    'LBL_SELECT' => ' <b>TAI</b> valitse',
    'LBL_WEBSITE' => 'Www',
    'LNK_IMPORT_LEADS' => 'Tuo liidejä',
    'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Notice: The current Convert Lead screen contains custom fields. When you customize the Convert Lead screen in Studio for the first time, you will need to add custom fields to the layout, as necessary. The custom fields will not automatically appear in the layout, as they did previously.',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Moduuli, johon uusi tietue luodaan.',
    'LBL_REQUIRED_TIP' => 'Vaaditut moduulit tulee luoda tai valita ennen kuin liidi voidaan muuntaa.',
    'LBL_COPY_TIP' => 'Merkityt kentät kopioidaan uusiin tietueisiin.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Siirrä aktiviteetit kohteeseen',
    'LBL_ACTIVITIES_COPY' => 'Kopio aktiviteetit kohteeseen',
    'LBL_ACTIVITIES_MOVE_HELP' => "Valitse tietue myyntimahdollisuuden aktiviteettien siirtämiseksi. Tehtävät, soitot, tapaamiset ja sähköpostit siirretään valitsemaasi tietueeseen (tietueisiin).",
    'LBL_ACTIVITIES_COPY_HELP' => "Valitse tietue (tietueet) johon kopioit myyntimahdollisuuden aktiviteetit. Uudet tehtävät, soitot, tapaamiset ja muistiot luodaan valitsemiisi tietueisiin (). Sähköpostit liitetään valittuihin tietueisiin ().",
    //For export labels
    'LBL_PHONE_HOME' => 'Kotipuhelin',
    'LBL_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_PHONE_WORK' => 'Työpuhelin',
    'LBL_PHONE_OTHER' => 'Muu puhelin',
    'LBL_PHONE_FAX' => 'Faksi:',
    'LBL_CAMPAIGN_ID' => 'Kampanja ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Kohdistettu käyttäjänimi',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Kohdistettu ID:lle',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokannut ID',
    'LBL_EXPORT_CREATED_BY' => 'Luonut ID',
    'LBL_EXPORT_PHONE_MOBILE' => 'GSM',
    'LBL_EXPORT_EMAIL2' => 'Muu sähköpostiosoite',
    'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Anna pvm' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Ladataan' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Muokkaa' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Tapahtumat',
    'LBL_WWW' => 'WWW',
);
?>
