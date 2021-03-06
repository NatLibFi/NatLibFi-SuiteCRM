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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Edistynyt',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 valuutan koodi',
    'DEFAULT_CURRENCY_NAME' => 'Valuutan nimi',
    'DEFAULT_CURRENCY_SYMBOL' => 'Valuutan symboli',
    'DEFAULT_DATE_FORMAT' => 'Päivämäärän oletusmuoto',
    'DEFAULT_DECIMAL_SEP' => 'Desimaalin symboli',
    'DEFAULT_LANGUAGE' => 'Oletuskieli',
    'DEFAULT_SYSTEM_SETTINGS' => 'Käyttöliittymä',
    'DEFAULT_THEME' => 'Oletusteema',
    'DEFAULT_TIME_FORMAT' => 'Ajan oletusmuotoilu',
    'DISPLAY_RESPONSE_TIME' => 'Näytä palvelimen vasteajat',
    'IMAGES' => 'Logot',
    'LBL_ALLOW_USER_TABS' => 'Salli käyttäjien piilottaa välilehtiä',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Järjestelmäasetukset',
    'LBL_LOGVIEW' => 'Näytä loki',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Käytä SMTP autentikointia?',
    'LBL_MAIL_SMTPPASS' => 'SMTP salasana:',
    'LBL_MAIL_SMTPPORT' => 'SMTP portti:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP palvelin:',
    'LBL_MAIL_SMTPUSER' => 'SMTP käyttäjätunnus:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP palvelimen asetukset',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Valitse sähköpostipalvelun tarjoajasi:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! salasana:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! käyttäjätunnus:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail salasana:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail sähköpostiosoite:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange salasana:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange käyttäjätunnus:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange palvelimen portti:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange palvelin:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Anna käyttäjille oikeus käyttää tätä tiliä lähteville posteille:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kun tämä on valittu, kaikki käyttäjät voivat lähettää sähköposteja käyttäen samaa lähtevän postin palvelinta, jota käytetään järjestelmän luomien viestien ja hälytyksien lähetykseen.  Vaikka tämä ei ole valittuna voivat käyt�jät silti lähettää sähköpostinsa tämän palvelimen kautta annettuaan henkiläkohtaiset tilitietonsa sähköpostiasetuksissa.',
    'LBL_MAILMERGE' => 'Sulauta sähköpostiin',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet Auto-Refresh Interval',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'This is the minimum value one can choose to have dashlets auto-refresh. Setting to \'Never\' disables auto-refreshing of dashlets entirely.',
    'LBL_MODULE_FAVICON' => 'Display module icon as favicon',
    'LBL_MODULE_FAVICON_HELP' => 'If you are in a module with an icon, use the module\'s icon as the favicon, instead of the theme\'s favicon, in the browser tab.',
    'LBL_MODULE_NAME' => 'Järjestelmäasetukset',
    'LBL_MODULE_ID' => 'Asetusohjelma',
    'LBL_MODULE_TITLE' => 'Käyttöliittymä',
    'LBL_NOTIFY_FROMADDRESS' => '"Lähettäjä" osoite:',
    'LBL_NOTIFY_SUBJECT' => 'Sähköpostin otsikko:',
    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Configure proxy server address and authentication settings',
    'LBL_PROXY_ON' => 'Use proxy server?',
    'LBL_PROXY_PASSWORD' => 'Salasana',
    'LBL_PROXY_PORT' => 'Portti',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'Käyttäjänimi',
    'LBL_RESTORE_BUTTON_LABEL' => 'Palauta',
    'LBL_SYSTEM_SETTINGS' => 'Järjestelmäasetukset',
    'LBL_SKYPEOUT_ON_DESC' => 'Allows users to click on phone numbers to call using the phone dialer on your mobile device, or a telephony app on your computer (SkypeOut&reg;, etc.). The numbers must be formatted properly to make use of this feature. That is, it must be "+"  "The Country Code" "The Number", like +1 (555) 555-1234.',
    'LBL_SKYPEOUT_ON' => 'Enable click-to-call for phone numbers',
    'LBL_SKYPEOUT_TITLE' => 'Click-To-Call',
    'LBL_USE_REAL_NAMES' => 'Näytä koko nimi',
    'LBL_USE_REAL_NAMES_DESC' => 'Näytä käyttäjän koko nimi pelkän käyttäjätunnuksen sijaan siihen liittyvissä kentissä',
    'LBL_DISALBE_CONVERT_LEAD' => 'Disable convert lead action for converted leads',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'If a lead has already been converted, enabling this option will remove the convert lead action.',
    'LBL_ENABLE_ACTION_MENU' => 'Display actions within menus',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Select to display DetailView and subpanel actions within a dropdown menu. If un-selected, the actions will display as separate buttons.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listview items per page',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanel items per page',
    'LOG_MEMORY_USAGE' => 'Kirjaa muistin käyttö lokiin',
    'LOG_SLOW_QUERIES' => 'Kirjaa hitaat kyselyt lokiin',
    'CURRENT_LOGO' => 'Nykyinen logo:',
    'CURRENT_LOGO_HELP' => 'Tämä logo näkyy SuiteCRM-sovelluksen alatunnisteen vasemmassa kulmassa.',
    'NEW_LOGO' => 'Valitse logo:',
    'NEW_LOGO_HELP' => 'Tiedostomuoto voi olla .png tai .jpg. Maksimikorkeus on 170px, ja maksimileveys 450px. Suurempi tiedosto skaalataan näihin maksimimittoihin.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Tiedostomuoto voi olla .png tai .jpg. Enimmäiskorkeus on 170px, ja enimmäisleveys 450px. Suurempi tiedosto skaalataan näihin mittoihin. Kuvatiedoston nimessä ei sallita välejä.',
    'SLOW_QUERY_TIME_MSEC' => 'Slow query time threshold (msec)',
    'STACK_TRACE_ERRORS' => 'Display stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximum upload size',
    'VERIFY_CLIENT_IP' => 'Validate user IP address',
    'LOCK_HOMEPAGE' => 'Prevent user customizable Homepage layout',
    'LOCK_SUBPANELS' => 'Prevent user customizable subpanel layout',
    'MAX_DASHLETS' => 'Maximum number of SuiteCRM Dashlets on Homepage',
    'SYSTEM_NAME' => 'System Name:',
    'SYSTEM_NAME_WIZARD' => 'Nimi:',
    'SYSTEM_NAME_HELP' => 'Tämä nimi näkyy selaimen otsikkorivillä',
    'LBL_LDAP_TITLE' => 'LDAP Authentication Support',
    'LBL_LDAP_ENABLE' => 'Enable LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'Käyttäjätunnus:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Used to search for the LDAP user. This may need to be fully qualified.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Salasana:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Bind to the LDAP server using a specific users credentials. It will bind anonymously if not provided.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Example: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Example: <em>389 or 636 for SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Ryhmän nimi:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Example: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Developer Mode',

    'SHOW_DOWNLOADS_TAB' => 'Display Downloads Tab',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'For SOAP authentication when using LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt extension must be enabled in your php.ini file.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Kaikki',
    'LBL_MARK_POINT' => 'Mark Point',
    'LBL_NEXT_' => 'Next>>',
    'LBL_REFRESH_FROM_MARK' => 'Refresh From Mark',
    'LBL_SEARCH' => 'Hae:',
    'LBL_REG_EXP' => 'Reg Exp:',
    'LBL_IGNORE_SELF' => 'Ignore Self:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Marking Where To Start Logging From',
    'LBL_DISPLAYING_LOG' => 'Displaying Log',
    'LBL_YOUR_PROCESS_ID' => 'Your process ID',
    'LBL_YOUR_IP_ADDRESS' => 'IP-osoitteesi on',
    'LBL_IT_WILL_BE_IGNORED' => ' It will be ignored ',
    'LBL_LOG_NOT_CHANGED' => 'Log has not changed',
    'LBL_ALERT_JPG_IMAGE' => 'The file format of the image must be JPEG. Upload a new file with the file extension .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'The file format of the image must be JPEG or PNG. Upload a new file with the file extension .jpg or .png.',
    'LBL_ALERT_SIZE_RATIO' => 'The aspect ratio of the image should be between 1:1 and 10:1. The image will be resized.',
    'ERR_ALERT_FILE_UPLOAD' => 'Error during the upload of the image.',
    'LBL_LOGGER' => 'Logger Settings',
    'LBL_LOGGER_FILENAME' => 'Log File Name',
    'LBL_LOGGER_FILE_EXTENSION' => 'Extension',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximum log size',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Päivämäärän oletusmuoto',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Level',
    'LBL_LEAD_CONV_OPTION' => 'Lead Conversion Options',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'Muokkaa AJAX-käyttöiittymää',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Maximum number of logs (before rolling)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Append after filename',
    'LBL_VCAL_PERIOD' => 'vCal Updates Time Period:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximum Number of Rows:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Specify how many rows are allowed within import files.<br>If the number of rows in an import file exceeds this number, the user will be alerted.<br>If no number is entered, an unlimited number of rows are allowed.',
    'vCAL_HELP' => 'Use this setting to determine the number of months in advance of the current date that Free/Busy information for calls and meetings is published.<BR>To turn Free/Busy publishing off, enter "0". The minimum is 1 month; the maximum is 12 months.',
    'LBL_PDFMODULE_NAME' => 'PDF-asetukset',
    'SUGARPDF_BASIC_SETTINGS' => 'Document Properties',
    'SUGARPDF_ADVANCED_SETTINGS' => 'Advanced Settings',
    'SUGARPDF_LOGO_SETTINGS' => 'Images',

    'PDF_AUTHOR' => 'Tekijä',
    'PDF_AUTHOR_INFO' => 'The Author appears in the document properties.',

    'PDF_HEADER_LOGO' => 'For Quotes PDF Documents',
    'PDF_HEADER_LOGO_INFO' => 'This image appears in the default Header in Quotes PDF Documents.',

    'PDF_NEW_HEADER_LOGO' => 'Select New Image for Quotes',
    'PDF_NEW_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 867x60 px.',

    'PDF_SMALL_HEADER_LOGO' => 'For Reports PDF Documents',
    'PDF_SMALL_HEADER_LOGO_INFO' => 'This image appears in the default Header in Reports PDF Documents.<br> This image also appears in the top left-hand corner of the SuiteCRM application.',

    'PDF_NEW_SMALL_HEADER_LOGO' => 'Select New Image for Reports',
    'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'The file format can be either .jpg or .png. (Only .jpg for EZPDF)<BR>The recommended size is 212x40 px.',

    'PDF_FILENAME' => 'Default Filename',
    'PDF_FILENAME_INFO' => 'Default filename for the generated PDF files',

    'PDF_TITLE' => 'Otsikko',
    'PDF_TITLE_INFO' => 'The Title appears in the document properties.',

    'PDF_SUBJECT' => 'Aihe',
    'PDF_SUBJECT_INFO' => 'The Subject appears in the document properties.',

    'PDF_KEYWORDS' => 'Keyword(s)',
    'PDF_KEYWORDS_INFO' => 'Associate Keywords with the document, generally in the form "keyword1 keyword2..."',

    'PDF_COMPRESSION' => 'Compression',
    'PDF_COMPRESSION_INFO' => 'Activates or deactivates page compression. <br>When activated, the internal representation of each page is compressed, which leads to a compression ratio of about 2 for the resulting document.',

    'PDF_JPEG_QUALITY' => 'JPEG Laatu (1-100)',
    'PDF_JPEG_QUALITY_INFO' => 'Set the default JPEG compression quality (1-100)',

    'PDF_PDF_VERSION' => 'PDF Versio',
    'PDF_PDF_VERSION_INFO' => 'Set the PDF version (check PDF reference for valid values).',

    'PDF_PROTECTION' => 'Document Protection',
    'PDF_PROTECTION_INFO' => 'Set document protection<br>- copy: copy text and images to the clipboard<br>- print: print the document<br>- modify: modify it (except for annotations and forms)<br>- annot-forms: add annotations and forms<br>Note: the protection against modification is for people who have the full Acrobat product.',

    'PDF_USER_PASSWORD' => 'User Password',
    'PDF_USER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_OWNER_PASSWORD' => 'Omistajan salasana',
    'PDF_OWNER_PASSWORD_INFO' => 'If you don\\\'t set any password, the document will open as usual. <br>If you set a user password, the PDF viewer will ask for it before displaying the document. <br>The master password, if different from the user one, can be used to get full access.',

    'PDF_ACL_ACCESS' => 'Access Control',
    'PDF_ACL_ACCESS_INFO' => 'Default Access Control for the PDF generation.',

    'K_CELL_HEIGHT_RATIO' => 'Cell Height Ratio',
    'K_CELL_HEIGHT_RATIO_INFO' => 'If the height of a cell is smaller than (Font Height x Cell Height Ratio), then (Font Height x Cell Height Ratio) is used as the cell height.<br>(Font Height x Cell Height Ratio) is also used as the height of the cell when no height is define.',

    'K_SMALL_RATIO' => 'Small Font Factor',
    'K_SMALL_RATIO_INFO' => 'Reduction factor for small font.',

    'PDF_IMAGE_SCALE_RATIO' => 'Image scale ratio',
    'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ratio used to scale the images',

    'PDF_UNIT' => 'Unit',
    'PDF_UNIT_INFO' => 'document unit of measure',
    'PDF_GD_WARNING' => 'You do not have the GD library installed for PHP. Without the GD library installed, only JPEG logos can be displayed in PDF documents.',
    'ERR_EZPDF_DISABLE' => 'Warning : The EZPDF class is disabled from the config table and it set as the PDF class. Please "Save" this form to set TCPDF as the PDF Class and return in a stable state.',
    'LBL_IMG_RESIZED' => "(resized for display)",


    'LBL_FONTMANAGER_BUTTON' => 'PDF Font Manager',
    'LBL_FONTMANAGER_TITLE' => 'PDF Font Manager',
    'LBL_FONT_BOLD' => 'Lihavoitu',
    'LBL_FONT_ITALIC' => 'Italic',
    'LBL_FONT_BOLDITALIC' => 'Bold/Italic',
    'LBL_FONT_REGULAR' => 'Regular',

    'LBL_FONT_TYPE_CID0' => 'CID-0',
    'LBL_FONT_TYPE_CORE' => 'Core',
    'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
    'LBL_FONT_TYPE_TYPE1' => 'Type1',
    'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',

    'LBL_FONT_LIST_NAME' => 'Nimi',
    'LBL_FONT_LIST_FILENAME' => 'Tiedostonimi',
    'LBL_FONT_LIST_TYPE' => 'Tyyppi',
    'LBL_FONT_LIST_STYLE' => 'Tyyli',
    'LBL_FONT_LIST_STYLE_INFO' => 'Style of the font',
    'LBL_FONT_LIST_ENC' => 'Encoding',
    'LBL_FONT_LIST_EMBEDDED' => 'Embedded',
    'LBL_FONT_LIST_EMBEDDED_INFO' => 'Check to embed the font into the PDF file',
    'LBL_FONT_LIST_CIDINFO' => 'CID Information',
    'LBL_FONT_LIST_CIDINFO_INFO' => 'For examples and more help : www.tcpdf.org',
    'LBL_FONT_LIST_FILESIZE' => 'Font Size (KB)',
    'LBL_ADD_FONT' => 'Add a font',
    'LBL_BACK' => 'Takaisin',
    'LBL_REMOVE' => 'Poista', // PR 5451
    'LBL_JS_CONFIRM_DELETE_FONT' => 'Are you sure that you want to delete this font?',

    'LBL_ADDFONT_TITLE' => 'Add a PDF Font',
    'LBL_PDF_ENCODING_TABLE' => 'Encoding Table',
    'LBL_PDF_ENCODING_TABLE_INFO' => 'Name of the encoding table.<br>This option is ignored for TrueType Unicode, OpenType Unicode and symbolic fonts.<br>The encoding defines the association between a code (from 0 to 255) and a character contained in the font.<br>The first 128 are fixed and correspond to ASCII.',
    'LBL_PDF_FONT_FILE' => 'Font File',
    'LBL_PDF_FONT_FILE_INFO' => '.ttf or .otf or .pfb file',
    'LBL_PDF_METRIC_FILE' => 'Metric File',
    'LBL_PDF_METRIC_FILE_INFO' => '.afm or .ufm file',
    'LBL_ADD_FONT_BUTTON' => 'Lisää',
    'JS_ALERT_PDF_WRONG_EXTENSION' => 'This file do not have a good file extension.',

    'ERR_MISSING_CIDINFO' => 'The field CID Information cannot be empty.',
    'LBL_ADDFONTRESULT_TITLE' => 'Result of the add font process',
    'LBL_STATUS_FONT_SUCCESS' => 'SUCCESS : The font has been added to SuiteCRM.',
    'LBL_STATUS_FONT_ERROR' => 'ERROR : The font has not been added. Look at the log below.',

// Font manager
    'ERR_PDF_NO_UPLOAD' => 'Error during the upload of the font or metric file.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Your Scenarios',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'No scenarios have been configured',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Choose which scenarios are appropriate for your installation. These options can be changed post-install.',

    'LBL_WIZARD_TITLE' => 'Admin welho',
    'LBL_WIZARD_WELCOME_TAB' => 'Tervetuloa',
    'LBL_WIZARD_WELCOME_TITLE' => 'Tervetuloa SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Seuraaava >',
    'LBL_WIZARD_BACK_BUTTON' => '< Takaisin',
    'LBL_WIZARD_SKIP_BUTTON' => 'Ohita',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Continue',
    'LBL_WIZARD_FINISH_TITLE' => 'Basic system configuration is complete',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Anna organisaatiosi nimi ja logo, niin voit brändätä SuiteCRM:ää organisaatiosi mukaisesti',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Ladataan...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Tervetuloa' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);