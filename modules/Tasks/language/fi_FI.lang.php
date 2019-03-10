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
    'LBL_MODULE_NAME' => 'Tehtävät',
    'LBL_MODULE_TITLE' => ' Tehtävät: Etusivu',
    'LBL_SEARCH_FORM_TITLE' => ' Tehtävien haku',
    'LBL_LIST_FORM_TITLE' => ' Tehtävät',
    'LBL_NEW_FORM_TITLE' => ' Luo tehtävä',
    'LBL_LIST_CLOSE' => 'Sulje',
    'LBL_LIST_SUBJECT' => 'Aihe',
    'LBL_LIST_CONTACT' => 'Kontakti',
    'LBL_LIST_PRIORITY' => 'Prioriteetti',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_DUE_DATE' => 'Viimeistään pvm',
    'LBL_LIST_DUE_TIME' => 'Viimeistään aika',
    'LBL_SUBJECT' => 'Aihe:',
    'LBL_STATUS' => 'Tila:',
    'LBL_DUE_DATE' => 'Viimeistään pvm:',
    'LBL_DUE_TIME' => 'Viimeistään aika:',
    'LBL_PRIORITY' => 'Prioriteetti:',
    'LBL_DUE_DATE_AND_TIME' => 'Viimeistään pvm & aika:',
    'LBL_START_DATE_AND_TIME' => 'Aloitus pvm & aika:',
    'LBL_START_DATE' => 'Aloitus pvm:',
    'LBL_LIST_START_DATE' => 'Aloitus pvm',
    'LBL_START_TIME' => 'Aloitusaika:',
    'DATE_FORMAT' => '(vvvv-kk-pp)',
    'LBL_NONE' => 'Ei mitään',
    'LBL_CONTACT' => 'Kontakti:',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_EMAIL' => 'Sähköpostiosoite:',
    'LBL_DESCRIPTION' => 'Kuvaus:',
    'LBL_NAME' => 'Nimi:',
    'LBL_CONTACT_NAME' => 'Kontaktin nimi ',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_DATE_DUE_FLAG' => 'Ei viimeistään päivää',
    'LBL_DATE_START_FLAG' => 'Ei aloituspäivää',
    'LBL_LIST_MY_TASKS' => 'Avoimet tehtäväni',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_TASK_LIST' => 'Tehtävät',
    'LNK_IMPORT_TASKS' => 'Tuo tehtäviä',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
    'LBL_LIST_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_CONTACT_ID' => 'Kontakti ID:',
    'LBL_PARENT_ID' => 'Ylätason ID:',
    'LBL_CONTACT_PHONE' => 'Kontaktin puhelin:',
    'LBL_PARENT_TYPE' => 'Päätyyppi:',
    'LBL_TASK_INFORMATION' => 'Tehtävän esikatselu', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_EDITLAYOUT' => 'Muokkaa asettelua' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Muistiot',
    //For export labels
    'LBL_DATE_DUE' => 'Viimeistään pvm',
    'LBL_RELATED_TO' => 'Liittyen:',
);
