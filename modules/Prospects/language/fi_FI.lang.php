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
    'LBL_MODULE_NAME' => 'Prospektit',
    'LBL_MODULE_ID' => 'Prospektit',
    'LBL_INVITEE' => 'Suorat raportit',
    'LBL_MODULE_TITLE' => 'Prospektit: etusivu',
    'LBL_SEARCH_FORM_TITLE' => 'Prospektien haku',
    'LBL_LIST_FORM_TITLE' => 'Prospektilista',
    'LBL_NEW_FORM_TITLE' => 'Uusi prospekti',
    'LBL_PROSPECT' => 'Prospekti:',
    'LBL_BUSINESSCARD' => 'Käyntikortti',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_LIST_PROSPECT_NAME' => 'Prospektin nimi',
    'LBL_LIST_TITLE' => 'Otsikko',
    'LBL_LIST_EMAIL_ADDRESS' => 'Sähköposti',
    'LBL_LIST_OTHER_EMAIL_ADDRESS' => 'Muu sähköpostiosoite:',
    'LBL_LIST_PHONE' => 'Puhelin',
    'LBL_LIST_PROSPECT_ROLE' => 'Rooli',
    'LBL_LIST_FIRST_NAME' => 'Etunimi',
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle',
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö:',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_email2' => 'Muu sähköposti',
//END DON'T CONVERT
    'LBL_CAMPAIGN_ID' => 'Kampanja ID',
    'LBL_EXISTING_PROSPECT' => 'Käytettiin olemassa olevaa kontaktia',
    'LBL_CREATED_PROSPECT' => 'Luotu uusi kontakti',
    'LBL_EXISTING_ACCOUNT' => 'Käytettiin olemassa olevaaa asiakasta',
    'LBL_CREATED_ACCOUNT' => 'Luotu uusi asiakas',
    'LBL_CREATED_CALL' => 'Luotu uusi puhelu',
    'LBL_CREATED_MEETING' => 'Luotu uusi kokous',
    'LBL_ADDMORE_BUSINESSCARD' => 'Lisää toinen käyntikortti',
    'LBL_ADD_BUSINESSCARD' => 'Syötä Käyntikortti',
    'LBL_NAME' => 'Nimi:',
    'LBL_FULL_NAME' => 'Nimi',
    'LBL_PROSPECT_NAME' => 'Prospektin nimi',
    'LBL_PROSPECT_INFORMATION' => 'Muistion esikatselu',
    'LBL_MORE_INFORMATION' => 'Lisätietoja',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_OFFICE_PHONE' => 'toimiston puhelin:',
    'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_MOBILE_PHONE' => 'Gsm:',
    'LBL_HOME_PHONE' => 'Koti:',
    'LBL_OTHER_PHONE' => 'Toinen puhelin:',
    'LBL_FAX_PHONE' => 'Faksi:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki/kunta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Maakunta/lääni:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
    'LBL_ALT_ADDRESS_STREET' => 'Vaihtoehtoinen katuosoite:',
    'LBL_ALT_ADDRESS_CITY' => 'Muu osoite Kaupunki',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Muu osoite Maa',
    'LBL_ALT_ADDRESS_STATE' => 'Vaihtoehtoinen osoite Maakunta/lääni',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Muu osoite Postinumero',
    'LBL_TITLE' => 'Titteli:',
    'LBL_DEPARTMENT' => 'Osasto:',
    'LBL_BIRTHDATE' => 'Syntymäpäivä:',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Toinen sähköpostiosoite:',
    'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_ASSISTANT' => 'Avustaja:',
    'LBL_ASSISTANT_PHONE' => 'Assistentin puhelin',
    'LBL_DO_NOT_CALL' => 'Ei saa soittaa:',
    'LBL_EMAIL_OPT_OUT' => 'Estä viestit:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',
    'LBL_ALTERNATE_ADDRESS' => 'Vaihtoehtoinen osoite:',
    'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
    'LBL_CITY' => 'Kaupunki/kunta:',
    'LBL_STATE' => 'Maakunta/lääni:',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_DESCRIPTION_INFORMATION' => 'Kuvaus',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_PROSPECT_ROLE' => 'Rooli:',
    'LBL_OPP_NAME' => 'Myyntimahdollisuuden nimi:',
    'LBL_IMPORT_VCARD' => 'Tuo käyntikortti',
    'LBL_IMPORT_VCARDTEXT' => 'Luo uusi kontakti automaattisesti tuomalla vCard.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Create Target to continue creating this new target, or select an existing target listed below.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'Luo käyntikortista',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_NEW_CASE' => 'Luo Palvelupyyntö',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_EMAIL' => 'Arkistoi sähköposti',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_APPOINTMENT' => 'Luo tapaaminen',
    'LNK_IMPORT_PROSPECTS' => 'Tuo prospektit',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko poistaa tämän kontaktin Palvelupyynnöstä?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Oletko varma että haluat tämän tietueen suorana raporttina?',
    'ERR_DELETE_RECORD' => 'Tietueen numero on annettava kontaktin poistamiseksi.',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Kopioi ensisijainen osoite vaihtoehtoiseen osoitteeseen',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Kopioi vaihtoehtoinen osoite ensisijaiseen osoitteeseen',
    'LBL_SALUTATION' => 'Nimen etuliite',
    'LBL_SAVE_PROSPECT' => 'Tallenna prospekti',
    'LBL_CREATED_OPPORTUNITY' => 'Luotu uusi myyntimahdollisuus',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Myyntimahdollisuuden luonti vaatii asiakkaan.\n Ole hyvä ja luo asiakas, tai valitse olemassa oleva.',
    'LNK_SELECT_ACCOUNT' => "Valitse asiakas",
    'LNK_NEW_PROSPECT' => 'Luo prospekti',
    'LNK_PROSPECT_LIST' => 'Prospektit',
    'LNK_NEW_CAMPAIGN' => 'Luo kampanja',
    'LNK_CAMPAIGN_LIST' => 'Kampanjat',
    'LNK_NEW_PROSPECT_LIST' => 'Luo prospektilista',
    'LNK_PROSPECT_LIST_LIST' => 'Prospektilistat',
    'LNK_IMPORT_PROSPECT' => 'Tuo prospektit',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Valitse merkityt prospektit',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Valitse merkityt prospektit',
    'LBL_INVALID_EMAIL' => 'Virheellinen sähköpostiosoite:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospektit',
    'LBL_PROSPECT_LIST' => 'Prospektilista',
    'LBL_CONVERT_BUTTON_KEY' => 'V',
    'LBL_CONVERT_BUTTON_TITLE' => 'Muunna prospekti',
    'LBL_CONVERT_BUTTON_LABEL' => 'Muunna prospekti',
    'LBL_CONVERTPROSPECT' => 'Muunna prospekti',
    'LNK_NEW_CONTACT' => 'Uusi kontakti',
    'LBL_CREATED_CONTACT' => "Luotu uusi kontakti",
    'LBL_BACKTO_PROSPECTS' => 'Takaisin prospekteihin',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanjaloki',
    'LBL_TRACKER_KEY' => 'Seurantakoodin avain',
    'LBL_LEAD_ID' => 'Liidin tunnus',
    'LBL_CONVERTED_LEAD' => 'Muunna liidi',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_EDIT_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Kampanjat',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    //For export labels
    'LBL_PHONE_HOME' => 'Kotipuhelin',
    'LBL_PHONE_MOBILE' => 'Matkapuhelin',
    'LBL_PHONE_WORK' => 'Työpuhelin',
    'LBL_PHONE_OTHER' => 'Muu puhelin',
    'LBL_PHONE_FAX' => 'Faksi:',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Kohdistettu käyttäjänimi',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Kohdistettu ID:lle',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Muokannut ID',
    'LBL_EXPORT_CREATED_BY' => 'Luonut ID',
    'LBL_EXPORT_EMAIL2' => 'Muu sähköpostiosoite',

    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Tapahtumat',
);
?>
