<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


$mod_strings = array(

    'LBL_ADD_MODULE' => 'Lisää',
    'LBL_ADDRCITY' => 'Kaupunki',
    'LBL_ADDRCOUNTRY' => 'Maa',
    'LBL_ADDRCOUNTRY_ID' => 'Maa Id',
    'LBL_ADDRSTATEPROV' => 'Maakunta/lääni',
    'LBL_ADMINISTRATION' => 'Konnektorin ylläpito',
    'LBL_ADMINISTRATION_MAIN' => 'Konnektorin asetukset',
    'LBL_AVAILABLE' => 'Saatavilla',
    'LBL_BACK' => '< Takaisin',
    'LBL_COMPANY_ID' => 'Yhtiön Id',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Joitakin vaadittavia kenttiä on jäänyt tyhjäksi. Tallennetaanko muutokset?',
    'LBL_CONNECTOR' => 'Konnektori',
    'LBL_CONNECTOR_FIELDS' => 'Konnektorin kentät',
    'LBL_DATA' => 'Data',
    'LBL_DEFAULT' => 'Oletus',
    'LBL_DELETE_MAPPING_ENTRY' => 'Haluatko poistaa tämän tietueen?',
    'LBL_DISABLED' => 'Ei käytössä',
    'LBL_DUNS' => 'DUNS',
    'LBL_EMPTY_BEANS' => 'Haku ei tuottanut tuloksia.',
    'LBL_ENABLED' => 'Käytössä',
    'LBL_EXTERNAL' => 'Salli käyttäjien luoda ulkoisia tilitietueita tälle konnektorille.',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Jotta voit käyttää tätä konnektoria, ominaisuudet täytyy määritellä Konnektorin asetukset-sivulla',

    'LBL_MARKET_CAP' => 'Markkina-arvo',
    'LBL_MERGE' => 'Yhdistä',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Ota konnektorit käyttöön',
    'LBL_MODIFY_DISPLAY_DESC' => 'Määritä, mitkä moduulit ovat käytössä kullekin konnektorille.',
    'LBL_MODIFY_DISPLAY_PAGE_TITLE' => 'Konnektorin asetukset: Ota konnektorit käyttöön',
    'LBL_MODULE_FIELDS' => 'Moduulin kentät',
    'LBL_MODIFY_MAPPING_TITLE' => 'Karttakonnektorin kentät',
    'LBL_MODIFY_MAPPING_DESC' => 'Yhdistä konnektorin kentät moduulin kenttiin muokataksesi minkä konnektorin dataa voidaan katsoa ja yhdistää moduulin tietueisiin.',
    'LBL_MODIFY_MAPPING_PAGE_TITLE' => 'Konnektorin asetukset: Yhdistä konnektorin kentät',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Määritä konnektorin asetukset',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Määritä kunkin konnektorin asetukset, kuten URL:t ja API-avaimet.',
    'LBL_MODIFY_PROPERTIES_PAGE_TITLE' => 'Konnektorin asetukset: Aseta konnektorin ominaisuudet',
    'LBL_MODIFY_SEARCH_TITLE' => 'Määritä konnektorin haku',
    'LBL_MODIFY_SEARCH' => 'Hae',
    'LBL_MODIFY_SEARCH_DESC' => 'Valitse kullekin moduulille haussa käytettävät konnektorin kentät.',
    'LBL_MODIFY_SEARCH_PAGE_TITLE' => 'Konnektorin asetukset: Määritä konnektorin haku',
    'LBL_MODULE_NAME' => 'Konnektorit',
    'LBL_NO_PROPERTIES' => 'Tällä konnektorilla ei ole muutettavia asetuksia.',
    'LBL_PARENT_DUNS' => 'Parent DUNS',
    'LBL_PREVIOUS' => '< Takaisin',
    'LBL_QUOTE' => 'Tarjous',
    'LBL_RECNAME' => 'Company Name',
    'LBL_RESET_TO_DEFAULT' => 'Reset to Default',
    'LBL_RESET_TO_DEFAULT_CONFIRM' => 'Are you sure you want to reset to the default configuration?',
    'LBL_RESET_BUTTON_TITLE' => 'Reset',
    'LBL_RESULT_LIST' => 'Data List',
    'LBL_RUN_WIZARD' => 'Run Wizard',
    'LBL_SAVE' => 'Tallenna',
    'LBL_SEARCHING_BUTTON_LABEL' => 'Haetaan...',
    'LBL_SHOW_IN_LISTVIEW' => 'Show In Merge Listview',
    'LBL_SMART_COPY' => 'Smart Copy',
    'LBL_SUMMARY' => 'Yhteenveto',
    'LBL_STEP1' => 'Search and View Data',
    'LBL_STEP2' => 'Merge Records with',
    'LBL_TEST_SOURCE' => 'Testaa konnektoria',
    'LBL_TEST_SOURCE_FAILED' => 'Testi epäonnistui',
    'LBL_TEST_SOURCE_RUNNING' => 'Testiä suoritetaan...',
    'LBL_TEST_SOURCE_SUCCESS' => 'Testi onnistui',
    'LBL_TITLE' => 'Datan yhdistäminen',
    'LBL_ULTIMATE_PARENT_DUNS' => 'Ultimate Parent DUNS',

    'ERROR_RECORD_NOT_SELECTED' => 'Error: Please select a record from the list before proceeding.',
    'ERROR_EMPTY_WRAPPER' => 'Error: Unable to retrieve wrapper instance for the source [{$source_id}]',
    'ERROR_EMPTY_SOURCE_ID' => 'Error: Source Id not specified or empty.',
    'ERROR_EMPTY_RECORD_ID' => 'Error: Record Id not specified or empty.',
    'ERROR_NO_ADDITIONAL_DETAIL' => 'Error: No additional details were found for the record.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Tälle konnektorille ei ole määritelty moduuleja. Valitse moduuli tälle konnektorille Ota konnektorit käyttöön -sivulla.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Error: There are no connectors enabled that have search fields defined.',
    'ERROR_NO_SOURCEDEFS_FILE' => 'Virhe: sourcedefs.php -tiedostoa ei löytynyt.',
    'ERROR_NO_SOURCEDEFS_SPECIFIED' => 'Virhe: haettavan datan lähteitä ei ole määritelty.',
    'ERROR_NO_CONNECTOR_DISPLAY_CONFIG_FILE' => 'Error: There are no connectors mapped to this module.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Error: There are no search fields defined for the module and connector.  Please contact the system administrator.',
    'ERROR_NO_FIELDS_MAPPED' => 'Liitä ainakin yksi konnektori jokaisen moduulin tietueelle.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Error: There are no module fields that have been mapped for display in the results.  Please contact the system administrator.',
    'LBL_TWITTER_USER' => 'Twitter käyttäjä',
    'LBL_FACEBOOK_USER' => 'Facebook-käyttäjä',
    'LBL_INFO_INLINE' => 'Info' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Sulje' /*for 508 compliance fix*/,

);

?>