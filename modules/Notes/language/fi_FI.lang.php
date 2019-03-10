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
    'LBL_ACCOUNT_ID' => 'Asiakastunnus:',
    'LBL_CASE_ID' => 'Palvelupyynnön ID:',
    'LBL_CLOSE' => 'Sulje:',
    'LBL_CONTACT_ID' => 'Kontaktin ID:',
    'LBL_CONTACT_NAME' => 'Kontakti:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Muistiot',
    'LBL_DESCRIPTION' => 'Muistio',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_EMAIL_ATTACHMENT' => 'Sähköpostin liite',
    'LBL_FILE_MIME_TYPE' => 'Mime tyyppi',
    'LBL_FILE_URL' => 'Tiedoston URL',
    'LBL_FILENAME' => 'Liite:',
    'LBL_LEAD_ID' => 'Liidin ID:',
    'LBL_LIST_CONTACT_NAME' => 'Kontakti',
    'LBL_LIST_DATE_MODIFIED' => 'Muokattu viimeksi',
    'LBL_LIST_FILENAME' => 'Liite',
    'LBL_LIST_FORM_TITLE' => 'Muistiot',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_SUBJECT' => 'Aihe',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_MODULE_NAME' => 'Muistiot',
    'LBL_MODULE_TITLE' => 'Muistiot: Etusivu',
    'LBL_NEW_FORM_TITLE' => 'Luo muistio, tai lisää liite',
    'LBL_NOTE_STATUS' => 'Muistio',
    'LBL_NOTE_SUBJECT' => 'Muistion aihe:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Liitteet',
    'LBL_NOTE' => 'Muistio:',
    'LBL_OPPORTUNITY_ID' => 'Myyntimahdollisuus ID:',
    'LBL_PARENT_ID' => 'Ylätason ID:',
    'LBL_PARENT_TYPE' => 'Päätyyppi',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_PORTAL_FLAG' => 'Näytä portaalissa?',
    'LBL_EMBED_FLAG' => 'Pohjusta sähköpostiin?',
    'LBL_PRODUCT_ID' => 'Tuote ID:',
    'LBL_QUOTE_ID' => 'Tarjouspyynnön ID:',
    'LBL_RELATED_TO' => 'Liittyen:',
    'LBL_SEARCH_FORM_TITLE' => 'Muistioiden haku',
    'LBL_STATUS' => 'Tila',
    'LBL_SUBJECT' => 'Aihe:',
    'LNK_IMPORT_NOTES' => 'Tuo muistioita',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NOTE_LIST' => 'Muistiot',
    'LBL_MEMBER_OF' => 'Jäsen:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_REMOVING_ATTACHMENT' => 'Poistetaan liitettä...',
    'ERR_REMOVING_ATTACHMENT' => 'Liitteen postaminen epäonnistui...',
    'LBL_CREATED_BY' => 'Tekijä',
    'LBL_MODIFIED_BY' => 'Muokkaaja',
    'LBL_SEND_ANYWAYS' => 'Viestillä ei ole aihetta.  Lähetä/Tallenna silti?',
    'LBL_NOTE_INFORMATION' => 'Muistion esikatselu', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
    'LBL_EDITLAYOUT' => 'Muuta layoutia' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Etunimi',
    'LBL_LAST_NAME' => 'Sukunimi',
    'LBL_DATE_ENTERED' => 'Luontipvm',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_DELETED' => 'Poistettu',
);
