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
    //module
    'LBL_MODULE_NAME' => 'Dokumentit',
    'LBL_MODULE_TITLE' => 'Dokumentit: Etusivu',
    'LNK_NEW_DOCUMENT' => 'Luo dokumentti',
    'LNK_DOCUMENT_LIST' => 'Dokumentit',
    'LBL_DOC_REV_HEADER' => 'Dokumenttiversiot',
    'LBL_SEARCH_FORM_TITLE' => 'Dokumentin haku',
    //vardef labels
    'LBL_NAME' => 'Dokumentin nimi',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY' => 'Alakategoria',
    'LBL_STATUS' => 'Tila',
    'LBL_CREATED_BY' => 'Tekijä',
    'LBL_DATE_ENTERED' => 'Luonti pvm',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_DELETED' => 'Poistettu',
    'LBL_MODIFIED' => 'Muokkaaja ID',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_CREATED' => 'Tekijä',
    'LBL_REVISIONS' => 'Versiot',
    'LBL_RELATED_DOCUMENT_ID' => 'Liittyvän dokumentin ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Liittyvän dokumentin versio ID',
    'LBL_IS_TEMPLATE' => 'Mallipohja',
    'LBL_TEMPLATE_TYPE' => 'Dokumentin tyyppi',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
    'LBL_REVISION_NAME' => 'Versionumero',
    'LBL_MIME' => 'Mime Tyyppi',
    'LBL_REVISION' => 'Versio',
    'LBL_DOCUMENT' => 'Liittyvä dokumentti',
    'LBL_LATEST_REVISION' => 'Viimeisin versio',
    'LBL_CHANGE_LOG' => 'Muutoshistoria',
    'LBL_ACTIVE_DATE' => 'Julkaisu pvm',
    'LBL_EXPIRATION_DATE' => 'Vanhentumis pvm',
    'LBL_FILE_EXTENSION' => 'Tiedostopääte',
    'LBL_LAST_REV_MIME_TYPE' => 'Viimeisen version MIME tyyppi',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Määrittelemätön',
    'LBL_HOMEPAGE_TITLE' => 'Tiedostot',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'Uusi dokumentti',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Dokumentin nimi:',
    'LBL_FILENAME' => 'Tiedoston nimi:',
    'LBL_LIST_FILENAME' => 'Tiedostonimi',
    'LBL_DOC_VERSION' => 'Versio:',
    'LBL_FILE_UPLOAD' => 'Tiedostonimi',

    'LBL_CATEGORY_VALUE' => 'Kategoria:',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'LBL_SUBCATEGORY_VALUE' => 'Alakategoria:',
    'LBL_DOC_STATUS' => 'Tila:',
    'LBL_LAST_REV_CREATOR' => 'Version tekijä:',
    'LBL_LASTEST_REVISION_NAME' => 'Viimeisimmän version nimi:',
    'LBL_SELECTED_REVISION_NAME' => 'Valitun version nimi:',
    'LBL_CONTRACT_STATUS' => 'Sopimuksen tila:',
    'LBL_CONTRACT_NAME' => 'Sopimuksen nimi:',
    'LBL_DET_RELATED_DOCUMENT' => 'Liittyvä dokumentti:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Liittyvän dokumentin versio:",
    'LBL_DET_IS_TEMPLATE' => 'Mallipohja? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Dokumentin tyyppi:',
    'LBL_DOC_DESCRIPTION' => 'Kuvaus:',
    'LBL_DOC_ACTIVE_DATE' => 'Julkaisu pvm:',
    'LBL_DOC_EXP_DATE' => 'Vanhentumis pvm:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Dokumentit',
    'LBL_LIST_DOCUMENT' => 'Dokumentti',
    'LBL_LIST_SUBCATEGORY' => 'Alakategoria',
    'LBL_LIST_REVISION' => 'Versio',
    'LBL_LIST_LAST_REV_CREATOR' => 'Julkaisija',
    'LBL_LIST_LAST_REV_DATE' => 'Version pvm',
    'LBL_LIST_VIEW_DOCUMENT' => 'Katso dokumenttia',
    'LBL_LIST_ACTIVE_DATE' => 'Julkaisu pvm',
    'LBL_LIST_EXP_DATE' => 'Vanhentumis pvm',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LINKED_ID' => 'Linkitetty id',
    'LBL_SELECTED_REVISION_ID' => 'Valitun version id',
    'LBL_LATEST_REVISION_ID' => 'Uusimman version id',
    'LBL_SELECTED_REVISION_FILENAME' => 'Valitun version tiedostonimi',
    'LBL_FILE_URL' => 'Tiedoston url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Kategoria:',
    'LBL_SF_SUBCATEGORY' => 'Alakategoria:',

    'DEF_CREATE_LOG' => 'Dokumentti luotu',

    //error messages
    'ERR_DOC_NAME' => 'Dokumentin nimi',
    'ERR_DOC_ACTIVE_DATE' => 'Julkaisu pvm',
    'ERR_FILENAME' => 'Tiedostonimi',
    'ERR_DOC_VERSION' => 'Dokumentin versio',
    'ERR_DELETE_CONFIRM' => 'Haluatko poistaa valitun version?',
    'ERR_DELETE_LATEST_VERSION' => 'Sinulla ei ole oikeuksia poistaa dokumentin viimeisintä versiota.',
    'LNK_NEW_MAIL_MERGE' => 'Joukkopostitus',
    'ERR_MISSING_FILE' => 'Tästä dokumenttitietueesta puuttuu tiedosto, todennäköisesti johtuen järjestelmäänlatauksen aikaisesta virheestä. Yritä latausta uudelleen tai ota yhteys ylläpitäjään.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Nimi',
    'LBL_LIST_IS_TEMPLATE' => 'Mallipohja?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Dokumentin tyyppi',
    'LBL_LAST_REV_CREATE_DATE' => 'Viimeisimmän version luonti pvm',
    'LBL_CONTRACTS' => 'Sopimukset',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_DOCUMENT_INFORMATION' => 'Dokumentin yhteenveto', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_DOC_ID' => 'Dokumentin lähteen tunnus',
    'LBL_DOC_TYPE' => 'Lähde',
    'LBL_DOC_TYPE_POPUP' => 'Valitse lähde, johon tämä dokumentti ladataan, ja mistä se on saatavilla.',
    'LBL_DOC_URL' => 'Dokumentin lähteen osoite',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Tiedostonimi',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '20 viimeksi muutetuinta tiedostoa näytetään allaolevassa listassa. Käytä hakutoimintoa muiden tiedostojen löytämiseen.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Tiedostonimi',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Käyttäjä yritti pääsyä kelpaamattomaan ulkoiseen APIin ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ulkoisen APIn tunnistautuminen epäonnistui ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_CASES_SUBPANEL_TITLE' => 'Palvelupyynnöt',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugien seuranta',

    'LBL_AOS_CONTRACTS' => 'Sopimukset',
);