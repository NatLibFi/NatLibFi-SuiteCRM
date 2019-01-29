<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
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

 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Dokumentit',
	'LBL_MODULE_TITLE' => 'Dokumentit: Etusivu',
	'LNK_NEW_DOCUMENT' => 'Luo dokumentti',
	'LNK_DOCUMENT_LIST'=> 'Dokumentit lista',
	'LBL_SEARCH_FORM_TITLE'=> 'Dokumenttien haku',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'Dokumentin ID',
	'LBL_NAME' => 'Dokumentin nimi',
	'LBL_DESCRIPTION' => 'Kuvaus',
	'LBL_ASSIGNED_TO' => 'Kohdennettu hlölle:',
	'LBL_CATEGORY' => 'Kategoria',
	'LBL_SUBCATEGORY' => 'Alakategoria',
	'LBL_STATUS' => 'Tila',
	'LBL_IS_TEMPLATE'=>'On mallipohja',
	'LBL_TEMPLATE_TYPE'=>'Dokumentin tyyppi',
	'LBL_REVISION_NAME' => 'Versionumero',
	'LBL_MIME' => 'Mime Tyyppi',
	'LBL_REVISION' => 'Versio',
	'LBL_DOCUMENT' => 'Liittyvä dokumentti',
	'LBL_LATEST_REVISION' => 'Viimeisin versio',
	'LBL_CHANGE_LOG'=> 'Muutoshistoria',
	'LBL_ACTIVE_DATE'=> 'Julkaisu pvm',
	'LBL_EXPIRATION_DATE' => 'Vanhentumis pvm',
	'LBL_FILE_EXTENSION'  => 'Tiedostopääte',

	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Määrittelemätön',
	//quick search
	'LBL_NEW_FORM_TITLE' => 'Uusi dokumentti',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Dokumentin nimi:',
	'LBL_FILENAME' => 'Tiedoston nimi:',
	'LBL_FILE_UPLOAD' => 'Tiedostonimi',
	'LBL_DOC_VERSION' => 'Versio:',
	'LBL_CATEGORY_VALUE' => 'Kategoria:',
	'LBL_SUBCATEGORY_VALUE'=> 'Alakategoria:',
	'LBL_DOC_STATUS'=> 'Tila:',
	'LBL_DET_TEMPLATE_TYPE'=>'Dokumentin tyyppi:',
	'LBL_DOC_DESCRIPTION'=>'Kuvaus:',
	'LBL_DOC_ACTIVE_DATE'=> 'Julkaisupäivä:',
	'LBL_DOC_EXP_DATE'=> 'Vanhentumispäivä:',

	//document list view.
	'LBL_LIST_FORM_TITLE' => 'Dokumentit lista',
	'LBL_LIST_DOCUMENT' => 'Dokumentti',
	'LBL_LIST_CATEGORY' => 'Kategoria',
	'LBL_LIST_SUBCATEGORY' => 'Alakategoria',
	'LBL_LIST_REVISION' => 'Versio',
	'LBL_LIST_LAST_REV_CREATOR' => 'Julkaisija',
	'LBL_LIST_LAST_REV_DATE' => 'Version pvm',
	'LBL_LIST_VIEW_DOCUMENT'=>'Katso',
    'LBL_LIST_DOWNLOAD'=> 'Lataa',
	'LBL_LIST_ACTIVE_DATE' => 'Julkaisupäivä',
	'LBL_LIST_EXP_DATE' => 'Vanhentumispäivä',
	'LBL_LIST_STATUS'=>'Tila',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Dokumentin nimi:',
	'LBL_SF_CATEGORY' => 'Kategoria:',
	'LBL_SF_SUBCATEGORY'=> 'Alakategoria:',
	'LBL_SF_ACTIVE_DATE' => 'Julkaisupäivä:',
	'LBL_SF_EXP_DATE'=> 'Vanhentumispäivä:',

	'DEF_CREATE_LOG' => 'Dokumentti luotu',

	//error messages
	'ERR_DOC_NAME'=>'Dokumentin nimi',
	'ERR_DOC_ACTIVE_DATE'=>'Julkaisupäivä',
	'ERR_DOC_EXP_DATE'=> 'Vanhentumispäivä',
	'ERR_FILENAME'=> 'Tiedoston nimi',

	'LBL_TREE_TITLE' => 'Dokumentit',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Dokumentin nimi',

    'LBL_EDIT_BUTTON' => 'Muokkaa',
    'LBL_REMOVE' => 'Poista',

);


?>