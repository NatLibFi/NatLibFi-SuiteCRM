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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Valuutat',
  'LBL_LIST_FORM_TITLE' => 'Valuutat',
  'LBL_CURRENCY' => 'Valuutta',
  'LBL_ADD' => 'Lisää',
  'LBL_MERGE' => 'Yhdistä',
  'LBL_MERGE_TXT' => 'Valitse valuutat jotka haluat yhdistää valittuun valuuttaan. Tämä poistaa kaikki valitut valuutat ja määrittää niihin liittyvät valitun valuutan arvo.',
  'LBL_US_DOLLAR' => 'US Dollari',
  'LBL_DELETE' => 'Poista',
  'LBL_LIST_SYMBOL' => 'Valuutan symboli',
  'LBL_LIST_NAME' => 'Valuutan nimi',
  'LBL_LIST_ISO4217' => 'ISO 4217-koodi',
  'LBL_LIST_ISO4217_HELP' => 'Kirjoita kolmikirjaiminen ISO 4217-koodi, joka määrittää valuutan nimen ja merkin.',
  'LBL_UPDATE' => 'Päivitä',
  'LBL_LIST_RATE' => 'Valuuttakurssi',
  'LBL_LIST_RATE_HELP' => 'Muuntokurssi 0.5 € tarkoittaa 10 USD = 5 €.',
  'LBL_LIST_STATUS' => 'Tila',
  'LNK_NEW_CONTACT' => 'Uusi kontakti',
  'LNK_NEW_ACCOUNT' => 'Uusi asiakas',
  'LNK_NEW_OPPORTUNITY' => 'Uusi myyntimahdollisuus',
  'LNK_NEW_CASE' => 'Uusi palvelupyyntö',
  'LNK_NEW_NOTE' => 'Luo muistio tai liite',
  'LNK_NEW_CALL' => 'Uusi soitto',
  'LNK_NEW_EMAIL' => 'Uusi sähköposti',
  'LNK_NEW_MEETING' => 'Uusi tapaaminen',
  'LNK_NEW_TASK' => 'Luo tehtävä',
  'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record? Any record using this currency will be converted to the system default currency when they are accessed. It may be better to set the status to inactive.',
  'LBL_BELOW_MIN' => 'Valuuttakurssin pitää olla >0',
  'currency_status_dom' => 
  array (
    'Active' => 'Aktiivinen',
    'Inactive' => 'Ei aktiivinen',
  ),
  'LBL_CREATED_BY' => 'Tekijä',
	'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);


?>