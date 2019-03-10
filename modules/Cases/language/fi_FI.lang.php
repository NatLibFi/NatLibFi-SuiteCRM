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
    'ERR_DELETE_RECORD' => 'Anna tietuenumero poistaaksesi tilin.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Tietopankin ehdotuksia',
    'LBL_TOOL_TIP_TITLE' => 'Otsikko: ',
    'LBL_TOOL_TIP_BODY' => 'Viesti: ',
    'LBL_TOOL_TIP_INFO' => 'Lisätieto:',
    'LBL_TOOL_TIP_USE' => 'Käyttö: ',
    'LBL_SUGGESTION_BOX' => 'Suositus',
    'LBL_NO_SUGGESTIONS' => 'Ei suositusta',
    'LBL_RESOLUTION_BUTTON' => 'Ratkaisu',
    'LBL_SUGGESTION_BOX_STATUS' => 'Tila',
    'LBL_SUGGESTION_BOX_TITLE' => 'Nimi',
    'LBL_SUGGESTION_BOX_REL' => 'Asiaankuuluvuus',

    'LBL_ACCOUNT_ID' => 'Asiakastunnus',
    'LBL_ACCOUNT_NAME' => 'Asiakkaan nimi:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugien seuranta',
    'LBL_CASE_NUMBER' => 'Palvelupyynnön numero:',
    'LBL_CASE' => 'Palvelupyyntö:',
    'LBL_CONTACT_NAME' => 'Nimi:',
    'LBL_CONTACT_ROLE' => 'Rooli:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Palvelupyynnöt',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_INVITEE' => 'Kontaktit',
    'LBL_MEMBER_OF' => 'Asiakas',
    'LBL_MODULE_NAME' => 'Palvelupyynnöt',
    'LBL_MODULE_TITLE' => 'Palvelupyynnöt: Etusivu',
    'LBL_NEW_FORM_TITLE' => 'Uusi palvelupyyntö',
    'LBL_NUMBER' => 'Numero:',
    'LBL_PRIORITY' => 'Prioriteetti:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektit',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentit',
    'LBL_RESOLUTION' => 'Ratkaisu:',
    'LBL_SEARCH_FORM_TITLE' => 'Palvelupyyntö haku',
    'LBL_STATUS' => 'Tila',
    'LBL_SUBJECT' => 'Aihe:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_ASSIGNED' => 'Vastuuhenkilö',
    'LBL_LIST_CLOSE' => 'Sulje',
    'LBL_LIST_FORM_TITLE' => 'Palvelupyyntölista',
    'LBL_LIST_LAST_MODIFIED' => 'Muokattu viimeksi',
    'LBL_LIST_MY_CASES' => 'Avoimet Palvelupyyntöni',
    'LBL_LIST_NUMBER' => 'Nro.',
    'LBL_LIST_PRIORITY' => 'Prioriteetti',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_SUBJECT' => 'Aihe',

    'LNK_CASE_LIST' => 'Näytä Palvelupyynnöt',
    'LNK_NEW_CASE' => 'Luo Palvelupyyntö',
    'LBL_LIST_DATE_CREATED' => 'Luontipvm',
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle',
    'LBL_TYPE' => 'Tyyppi',
    'LBL_WORK_LOG' => 'Työloki',
    'LNK_IMPORT_CASES' => 'Tuo Palvelupyyntöjä',

    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LBL_CASE_INFORMATION' => 'Muistion esikatselu',  //Can be translated in all caps. This string will be used by SuiteP template menu actions

    // SNIP
    'LBL_UPDATE_TEXT' => 'Päivitä teksti', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Sisäinen päivitys',
    'LBL_AOP_CASE_UPDATES' => 'Palvelupyyntöpäivitykset',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Palvelupyyntöjen ketjut',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Supista kaikki',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Laajenna kaikki',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Liitteet:',

    'LBL_AOP_CASE_EVENTS' => 'Palvelupyyntötapahtumat',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Palvelupyynnön liitteet:',
    'LBL_ADD_CASE_FILE' => 'Lisää tiedosto',
    'LBL_REMOVE_CASE_FILE' => 'Poista tiedosto',
    'LBL_SELECT_CASE_DOCUMENT' => 'Valitse dokumentti',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Tyhjennä asiakirja',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Sisäinen CRM-asiakirja',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Ulkoinen tiedosto',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Tekijä (kontakti)',
    'LBL_CONTACT_CREATED_BY' => 'Tekijä',
    'LBL_CASE_UPDATE_FORM' => 'Päivitä liitelomake', //Form for attachments on case updates
    'LBL_CREATOR_PORTAL' => 'Portaalin URL', //PR 5426
    'LBL_SUGGESTION' => 'Ehdotus', //PR 5426
);