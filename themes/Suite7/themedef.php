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

 
$themedef = array(
    'name'  => "Suite 7",
    'description' => "SuiteCRM 7.0 Theme",
    'version' => array(
        'regex_matches' => array('.+'),
        ),
    'group_tabs' => true,
    'classic' => true,
    'configurable' => true,
    'config_options' => array(

        'menu' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BASE',
            'type' => 'colour',
            'default' => '#121212'
        ),
        'menuto' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUTOP',
            'type' => 'colour',
            'default' => '#121212'
        ),
        'menufrom' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUBOTTOM',
            'type' => 'colour',
            'default' => '#333333'
        ),
        'menubrd' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUBRD',
            'type' => 'colour',
            'default' => '#f10202'
        ),
        'modlink' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUFONT',
            'type' => 'colour',
            'default' => '#cccccc'
        ),
        'modlinkhover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENULNKHVR',
            'type' => 'colour',
            'default' => '#cccccc'
        ),
        'modlisthover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_MENUHOVER',
            'type' => 'colour',
            'default' => '#565656'
        ),
        'cssmenu' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DDMENU',
            'type' => 'colour',
            'default' => '#333333'
        ),
        'cssmenulink' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DDLINK',
            'type' => 'colour',
            'default' => '#cccccc'
        ),

        'button' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNTOP',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'button_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNHOVER',
            'type' => 'colour',
            'default' => '#ffffff'
        ),
        'button_link' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNLNK',
            'type' => 'colour',
            'default' => '#121212'
        ),
        'button_link_hover' => array(
            'vname' => 'LBL_COLOUR_ADMIN_BTNLNKHOVER',
            'type' => 'colour',
            'default' => '#ffffff'
        ),

        'pageheader' => array(
            'vname' => 'LBL_COLOUR_ADMIN_PAGEHEADER',
            'type' => 'colour',
            'default' => '#f10202'
        ),
        'page_link' => array(
            'vname' => 'LBL_COLOUR_ADMIN_PAGELINK',
            'type' => 'colour',
            'default' => '#f10202'
        ),

        'dashlet' => array(
            'vname' => 'LBL_COLOUR_ADMIN_DASHHEAD',
            'type' => 'colour',
            'default' => '#777777'
        ),

        'suggestion_popup_from' => array(
            'vname' => 'LBL_SUGGESTION_POPUP_FROM',
            'type' => 'colour',
            'default' => '#333333'
        ),
        'suggestion_popup_to' => array(
            'vname' => 'LBL_SUGGESTION_POPUP_TO',
            'type' => 'colour',
            'default' => '#222222'
        ),
    )

);
