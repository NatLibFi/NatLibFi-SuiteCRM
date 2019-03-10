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
    'LBL_ALL_MODULES' => 'Kaikki',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilön tunnus',
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle',
    'LBL_ID' => 'Tunnus',
    'LBL_DATE_ENTERED' => 'Luontipvm',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_CREATED' => 'Tekijä',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DELETED' => 'Poistettu',
    'LBL_NONINHERITABLE' => 'Periytymätön',
    'LBL_LIST_NONINHERITABLE' => 'Ei periydy',
    'LBL_NAME' => 'Nimi',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_LIST_FORM_TITLE' => 'Turvaryhmät',
    'LBL_MODULE_NAME' => 'Security Suite Management',
    'LBL_MODULE_TITLE' => 'Security Suite Management',
    'LNK_NEW_RECORD' => 'Create a Security Group',
    'LNK_LIST' => 'Lista näkymä',
    'LBL_SEARCH_FORM_TITLE' => 'Search Security Suite Management',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Suite Management',
    'LBL_USERS' => 'Käyttäjät',
    'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Roolit',
    'LBL_ROLES' => 'Rooli',

    'LBL_CONFIGURE_SETTINGS' => 'Configure',
    'LBL_ADDITIVE' => 'Additive Rights',
    'LBL_ADDITIVE_DESC' => "User gets greatest rights of all roles assigned to the user or the user's group(s)",
    'LBL_STRICT_RIGHTS' => 'Strict Rights',
    'LBL_STRICT_RIGHTS_DESC' => "If a user is a member of several groups only the respective rights from the group assigned to the current record are used.",
    'LBL_USER_ROLE_PRECEDENCE' => 'User Role Precedence',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'If any role is assigned directly to a user that role should take precedence over any group roles.',
    'LBL_INHERIT_TITLE' => 'Group Inheritance Rules',
    'LBL_INHERIT_CREATOR' => 'Inherit from Created By User',
    'LBL_INHERIT_CREATOR_DESC' => 'The record will inherit all the groups assigned to the user who created it.',
    'LBL_INHERIT_PARENT' => 'Inherit from Parent Record',
    'LBL_INHERIT_PARENT_DESC' => 'e.g. If a case is created for a contact the case will inherit the groups associated with the contact.',
    'LBL_USER_POPUP' => 'New User Group Popup',
    'LBL_USER_POPUP_DESC' => 'When creating a new user show the SecurityGroups popup to assign the user to a group(s).',
    'LBL_INHERIT_ASSIGNED' => 'Peri Vastuuhenkilöltä',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Tietue perii kaikki sen käyttäjälle määritetyt ryhmät. Muut tietueelle määritetyt ryhmät EIVÄT poistu.',
    'LBL_POPUP_SELECT' => 'Use Creator Group Select',
    'LBL_POPUP_SELECT_DESC' => 'When a record is created by a user in more than one group show a group selection panel on the create screen. Otherwise inherit that one group.',
    'LBL_FILTER_USER_LIST' => 'Filter User List',
    'LBL_FILTER_USER_LIST_DESC' => "Non-admin users can only assign to users in the same group(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'Default Groups for New Records',
    'LBL_ADD_BUTTON_LABEL' => 'Lisää',
    'LBL_REMOVE_BUTTON_LABEL' => 'Poista',
    'LBL_GROUP' => 'Group:',
    'LBL_MODULE' => 'Module:',

    'LBL_MASS_ASSIGN' => 'Security Groups: Mass Assign',
    'LBL_ASSIGN' => 'Osoita',
    'LBL_REMOVE' => 'Poista',
    'LBL_ASSIGN_CONFIRM' => 'Are you sure that you want to add this group to the ',
    'LBL_REMOVE_CONFIRM' => 'Are you sure that you want to remove this group from the ',
    'LBL_CONFIRM_END' => ' Valitut tietueet?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'SecurityGroup/User',
    'LBL_USER_NAME' => 'Käyttäjänimi',
    'LBL_SECURITYGROUP_NAME' => 'SecurityGroup Name',
    'LBL_HOMEPAGE_TITLE' => 'Group Messages',
    'LBL_TITLE' => 'Otsikko',
    'LBL_ROWS' => 'Rivit',
    'LBL_POST' => 'Post',
    'LBL_SELECT_GROUP_ERROR' => 'Please select a group and try again.',

    'LBL_GROUP_SELECT' => 'Select which groups should have access to this record',
    'LBL_ERROR_DUPLICATE' => 'Due to a possible duplicate detected by SuiteCRM you will have to manually add Security Groups to your newly created record.',

    'LBL_INBOUND_EMAIL' => 'Inbound email account',
    'LBL_INBOUND_EMAIL_DESC' => 'Salli pääsyoikeus sähköpostitilille vain jos käyttäjä kuuluu tilille kohdistettuun ryhmään.',
    'LBL_PRIMARY_GROUP' => 'Ensisijainen ryhmä',
    'LBL_CHECKMARK' => 'Tarkistusmerkki',
);
