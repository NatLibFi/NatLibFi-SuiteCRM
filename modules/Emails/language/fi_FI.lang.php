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
    'LBL_EMAIL_INFORMATION' => 'EMAIL',
    'LBL_FW' => 'Ed. Lähetys:',
    'LBL_RE' => 'VS:',

    'LBL_BUTTON_CREATE' => 'Luo uusi',
    'LBL_BUTTON_EDIT' => 'Muokkaa',
    'LBL_BUTTON_EDIT_EDIT_DRAFT' => 'Edit Draft',
    'LBL_QS_DISABLED' => '(Pikahaku ei ole käytettävissä tälle moduulille. Käytä valitse-painiketta.)',
    'LBL_SIGNATURE_PREPEND' => 'Allekirjoitus vastauksen yläpuolelle',
    'LBL_IMPORT' => 'Tuo',
    'LBL_LOADING' => 'Ladataan',
    'LBL_MARKING' => 'Marking',

    'LBL_CONFIRM_DELETE_EMAIL' => 'Are you sure you want to delete this email?',
    'LBL_ENTER_FOLDER_NAME' => 'Ole hyvä ja nimeä kansio',

    'LBL_ERROR_SELECT_MODULE' => 'Valitse moduuli "liittyy" kenttään',

    'ERR_ARCHIVE_EMAIL' => 'Virhe: Valitse arkistoitavat sähköpostit.',
    'ERR_DELETE_RECORD' => 'Virhe: Anna tietuenumero poistaaksesi tilin.',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_ADD_DASHLETS' => 'Lisätään SuiteCRM paneli',
    'LBL_ADD_DOCUMENT' => 'Lisää dokumentti',
    'LBL_ADD_ENTRIES' => 'Add Entries',
    'LBL_ADD_FILE' => 'Lisää tiedostoja',
    'LBL_ATTACHMENTS' => 'Liitteet:',
    'LBL_ATTACH_FILES' => 'Attach Files',
    'LBL_ATTACH_DOCUMENTS' => 'Attach Documents',
    'LBL_HAS_ATTACHMENT' => 'Has Attachment?:',
    'LBL_BCC' => 'Piilokopio:',
    'LBL_BODY' => 'Viesti:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugien seuranta',
    'LBL_CC' => 'Kopio:',
    'LBL_COMPOSE_MODULE_NAME' => 'Luo viesti',
    'LBL_CONTACT_NAME' => 'Kontakti:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_CREATED_BY' => 'Tekijä',
    'LBL_DATE_SENT_RECEIVED' => 'Date Sent/Received:', // PR 6728
    'LBL_DATE' => 'Date Sent:',
    'LBL_DELETE_FROM_SERVER' => 'Delete message from server',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_EDIT_ALT_TEXT' => 'Muokkaa vain tekstinä',
    'LBL_SEND_IN_PLAIN_TEXT' => 'Send in Plain Text',
    'LBL_SEND_CONFIRM_OPT_IN' => 'Send Opt In Email',
    'LBL_EMAIL_ATTACHMENT' => 'Sähköpostin liite',
    'LBL_EMAIL_SELECTOR_SELECT' => 'Valitse',
    'LBL_EMAIL_SELECTOR_CLEAR' => 'Tyhjennä',
    'LBL_EMAIL' => 'Sähköpostiosoite:',
    'LBL_EMAILS_ACCOUNTS_REL' => 'Emails:Accounts',
    'LBL_EMAILS_BUGS_REL' => 'Emails:Bugs',
    'LBL_EMAILS_CASES_REL' => 'Viestit:Palvelupyynnöt',
    'LBL_EMAILS_CONTACTS_REL' => 'Emails:Contacts',
    'LBL_EMAILS_LEADS_REL' => 'Emails:Leads',
    'LBL_EMAILS_OPPORTUNITIES_REL' => 'Emails:Opportunities',
    'LBL_EMAILS_NOTES_REL' => 'Emails:Notes',
    'LBL_EMAILS_PROJECT_REL' => 'Emails:Project',
    'LBL_EMAILS_PROJECT_TASK_REL' => 'Emails:ProjectTask',
    'LBL_EMAILS_PROSPECT_REL' => 'Emails:Prospect',
    'LBL_EMAILS_CONTRACTS_REL' => 'Emails:Contract',
    'LBL_EMAILS_TASKS_REL' => 'Emails:Tasks',
    'LBL_EMAILS_USERS_REL' => 'Emails:Users',
    'LBL_EMPTY_FOLDER' => 'No Emails to display',
    'LBL_SELECT_FOLDER' => 'Select Folder',
    'LBL_ERROR_SENDING_EMAIL' => 'Error Sending email',
    'LBL_ERROR_SAVING_DRAFT' => 'Virhe tallennettaessa luonnosta',
    'LBL_FROM_NAME' => 'Lähettäjä',
    'LBL_FROM' => 'From:',
    'LBL_REPLY_TO' => 'Reply To:',
    'LBL_HTML_BODY' => 'HTML viesti',
    'LBL_INVITEE' => 'Recipients',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Liidit',
    'LBL_MESSAGE_SENT' => 'Message Sent',
    'LBL_MODIFIED_BY' => 'Muokkaaja',
    'LBL_MODULE_NAME' => 'Kaikki viestit',
    'LBL_MODULE_TITLE' => 'Sähköpostit:',
    'LBL_MY_EMAILS' => 'Sähköpostit',
    'LBL_NEW_FORM_TITLE' => 'Arkistoi viesti',
    'LBL_NONE' => 'Ei mitään',
    'LBL_NOT_SENT' => 'Lähetysvirhe',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Liitteet',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Myyntimahdollisuudet',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektit',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projektitehtävät',
    'LBL_RAW' => 'Raw Email',
    'LBL_SAVE_AS_DRAFT_BUTTON_TITLE' => 'Tallenna luonnos',
    'LBL_DISREGARD_DRAFT_BUTTON_TITLE' => 'Disregard Draft',
    'LBL_SEARCH_FORM_TITLE' => 'Email Search',
    'LBL_SEND_ANYWAYS' => 'Viestillä ei ole aihetta.  Lähetä/Tallenna silti?',
    'LBL_SEND_BUTTON_LABEL' => 'Lähetä',
    'LBL_SEND_BUTTON_TITLE' => 'Lähetä',
    'LBL_SEND' => 'SEND',
    'LBL_SENT_MODULE_NAME' => 'Lähetetyt viestit',
    'LBL_SHOW_ALT_TEXT' => 'Pelkkä teksti',
    'LBL_SIGNATURE' => 'Allekirjoitus',
    'LBL_SUBJECT' => 'Aihe:',
    'LBL_TEXT_BODY' => 'Tekstirunko',
    'LBL_TIME' => 'Time Sent:',
    'LBL_TO_ADDRS' => 'Vastaanottaja',
    'LBL_USERS_SUBPANEL_TITLE' => 'Käyttäjät',
    'LBL_USERS' => 'Käyttäjät',

    'LNK_CALL_LIST' => 'Puhelut',
    'LBL_EMAIL_RELATE' => 'Liittyen',
    'LNK_EMAIL_TEMPLATE_LIST' => 'Viestipohjat',
    'LNK_MEETING_LIST' => 'Tapaamiset',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_EMAIL_TEMPLATE' => 'Luo viestipohja',
    'LNK_NEW_EMAIL' => 'Lähetä sähköposti',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NEW_SEND_EMAIL' => 'Luo viesti',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NOTE_LIST' => 'Muistiot',
    'LNK_SENT_EMAIL_LIST' => 'Lähetetyt viestit',
    'LNK_TASK_LIST' => 'Tehtävät',
    'LNK_VIEW_CALENDAR' => 'Tänään',

    'LBL_LIST_ASSIGNED' => 'Vastuuhenkilö valittu',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_LIST_DATE_SENT' => 'Date Sent',
    'LBL_LIST_DATE_SENT_RECEIVED' => 'Date Sent/Received', // PR 6728
    'LBL_LIST_FORM_DRAFTS_TITLE' => 'Luonnos',
    'LBL_LIST_FORM_SENT_TITLE' => 'Lähetetyt viestit',
    'LBL_LIST_FORM_TITLE' => 'Email List',
    'LBL_LIST_FROM_ADDR' => 'Lähettäjä',
    'LBL_LIST_RELATED_TO' => 'Recipient Type',
    'LBL_LIST_SUBJECT' => 'Aihe',
    'LBL_LIST_TO_ADDR' => 'Vastaanottaja',
    'LBL_LIST_TYPE' => 'Tyyppi',

    'WARNING_SETTINGS_NOT_CONF' => 'Warning: Your email settings are not configured to send email.',

    // for All emails
    'LBL_BUTTON_RAW_LABEL' => 'Show Raw',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Hide Raw',

    // for InboundEmail
    'LBL_BUTTON_CHECK' => 'Tarkasta viestit',
    'LBL_BUTTON_CHECK_TITLE' => 'Check For New Email',
    'LBL_BUTTON_FORWARD' => 'Lähetä edelleen',
    'LBL_BUTTON_REPLY_TITLE' => 'Vastaa',
    'LBL_BUTTON_REPLY_ALL' => 'Vastaa kaikille',
    'LBL_CASES_SUBPANEL_TITLE' => 'Palvelupyynnöt',
    'LBL_INBOUND_TITLE' => 'Saapuneet sähköpostit',
    'LBL_INTENT' => 'Intent',
    'LBL_MESSAGE_ID' => 'Message ID',
    'LBL_REPLY_HEADER_1' => 'On ',
    'LBL_REPLY_HEADER_2' => 'wrote:',
    'LBL_REPLY_TO_ADDRESS' => 'Reply-to Address',
    'LBL_REPLY_TO_NAME' => 'Reply-to Name',

    'LBL_LIST_BUG' => 'Bugien seuranta',
    'LBL_LIST_CASE' => 'Palvelupyynnöt',
    'LBL_LIST_CONTACT' => 'Kontaktit',
    'LBL_LIST_LEAD' => 'Liidit',
    'LBL_LIST_TASK' => 'Tehtävät',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Vastuuhenkilö',

    // for Inbox
    'LBL_ALL' => 'Kaikki',
    'LBL_ASSIGN_WARN' => 'Ensure that all 2 options are selected.',
    'LBL_BACK_TO_GROUP' => 'Back to Group Inbox',
    'LBL_BUTTON_DISTRIBUTE_TITLE' => 'Osoita',
    'LBL_BUTTON_DISTRIBUTE' => 'Osoita',
    'LBL_BUTTON_GRAB_TITLE' => 'Take from Group',
    'LBL_BUTTON_GRAB' => 'Take from Group',
    'LBL_CREATE_BUG' => 'Luo bugi',
    'LBL_CREATE_CASE' => 'Luo Palvelupyyntö',
    'LBL_CREATE_CONTACT' => 'Luo kontakti',
    'LBL_CREATE_LEAD' => 'Luo liidi',
    'LBL_CREATE_TASK' => 'Luo tehtävä',
    'LBL_DIST_TITLE' => 'Toimeksianto',
    'LBL_LOCK_FAIL_DESC' => 'The chosen item is unavailable currently.',
    'LBL_LOCK_FAIL_USER' => ' has taken ownership.',
    'LBL_MASS_DELETE_ERROR' => 'No checked items were passed for deletion.',
    'LBL_NEW' => 'Uusi',
    'LBL_NEXT_EMAIL' => 'Next Free Item',
    'LBL_REPLIED' => 'Vastattu',
    'LBL_TO' => 'Vastaanottaja:',
    'LBL_TOGGLE_ALL' => 'Toggle All',
    'LBL_UNKNOWN' => 'Tuntematon',
    'LBL_USE' => 'Assign:',
    'LBL_ASSIGN_SELECTED_RESULTS_TO' => 'Assign Selected Results To: ',
    'LBL_USER_SELECT' => 'Select Users',
    'LBL_USING_RULES' => 'Using Rules:',
    'LBL_WARN_NO_DIST' => 'No Distribution Method Selected',
    'LBL_WARN_NO_USERS' => 'No Users are selected',
    'LBL_IMPORT_STATUS_TITLE' => 'Tila',
    'LBL_INDICATOR' => 'Indicator',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LIST_TITLE_GROUP_INBOX' => 'Ryhmän saapuneet',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sähköposti lähetetty',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkistoidut viestit',

    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Sähköposti',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Vastaa',
    'LBL_EMAILS_NO_PRIMARY_TEAM_SPECIFIED' => 'No Primary Team specified',
    'LBL_INSERT_CONTACT_EMAIL' => 'Insert Email Address from a Contact',
    'LBL_INSERT_ACCOUNT_EMAIL' => 'Insert Email Address from an Account',
    'LBL_INSERT_TARGET_EMAIL' => 'Insert Email Address from a Target',
    'LBL_INSERT_USER_EMAIL' => 'Insert Email Address from an User',
    'LBL_INSERT_LEAD_EMAIL' => 'Insert Email Address from a Lead',
    'LBL_INSERT_ERROR_BLANK_EMAIL' => 'Invalid email address',

    // advanced search
    'LBL_ASSIGNED_TO' => 'Vastuuhenkilö:',
    'LBL_MEMBER_OF' => 'Parent',
    'LBL_QUICK_CREATE' => 'Luo',
    'LBL_CREATE' => 'Luo', // PR 5651
    'LBL_STATUS' => 'Email Status:',
    'LBL_EMAIL_FLAGGED' => 'Flagged:',
    'LBL_EMAIL_REPLY_TO_STATUS' => 'Reply To Status:',
    'LBL_TYPE' => 'Tyyppi:',
    //#20680 EmialTemplate Ext.Message.show;
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_TITLE' => 'Please check!',
    'LBL_EMAILTEMPLATE_MESSAGE_SHOW_MSG' => 'Selecting this template will overwrite any data already entered within the email body. Do you wish to continue?',
    'LBL_EMAILTEMPLATE_MESSAGE_CLEAR_MSG' => 'Selecting "--None--" will clear any data already entered within the email body. Do you wish to continue?',
    'LBL_EMAILTEMPLATE_MESSAGE_WARNING_TITLE' => 'Varoitus',
    'LBL_EMAILTEMPLATE_MESSAGE_MULTIPLE_RECIPIENTS' => 'Using an email template containing contact variables, such as the contact name, to send emails to multiple recipients may have unexpected results. It is recommended that you use an email campaign for mass mailings.',
    'LBL_CHECK_ATTACHMENTS' => 'Please Check Attachments!',
    'LBL_HAS_ATTACHMENTS' => 'This email already has attachment(s). Would you like to keep the attachment(s)?',
    'LBL_HAS_ATTACHMENT_INDICATOR' => 'Sisältää liitteitä',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Pakollinen kenttä puuttuu',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Invalid required field',
    'LBL_FILTER_BY_RELATED_BEAN' => 'Only show recipients related to',
    'LBL_ADD_INBOUND_ACCOUNT' => 'Lisää',
    'LBL_ADD_OUTBOUND_ACCOUNT' => 'Lisää',
    'LBL_EMAIL_ACCOUNTS_INBOUND' => 'Mail Account Properties',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNT' => 'Outgoing SMTP Mail Server',
    'LBL_EMAIL_SETTINGS_OUTBOUND_ACCOUNTS' => 'SMTP postipalvelimet',
    'LBL_EMAIL_SETTINGS_INBOUND_ACCOUNTS' => 'Sähköpostitilit',
    'LBL_EMAIL_SETTINGS_INBOUND' => 'Saapuva sähköposti',
    'LBL_EMAIL_SETTINGS_OUTBOUND' => 'Lähtevä sähköposti',
    'LBL_ADD_CC' => 'Add Cc',
    'LBL_ADD_BCC' => 'Add Bcc',
    'LBL_MOVE_TO_BCC' => 'Move To Bcc',
    'LBL_ADD_TO_ADDR' => 'Add To',
    'LBL_SELECTED_ADDR' => 'Valittu: ',
    'LBL_ADD_CC_BCC_SEP' => '|',
    'LBL_SEND_EMAIL_FAIL_TITLE' => 'Error Sending Email',
    'LBL_EMAIL_DETAIL_VIEW_SHOW' => 'show ',
    'LBL_EMAIL_DETAIL_VIEW_MORE' => ' more',
    'LBL_MORE_OPTIONS' => 'lisää',
    'LBL_LESS_OPTIONS' => 'Less',
    'LBL_MAILBOX_TYPE_PERSONAL' => 'Personal',
    'LBL_MAILBOX_TYPE_GROUP' => 'Ryhmä',
    'LBL_MAILBOX_TYPE_GROUP_FOLDER' => 'Group - Auto-Import',
    'LBL_SEARCH_FOR' => 'Search For',
    'LBL_EMAIL_INBOUND_TYPE_HELP' => '<b>Personal</b>: Email account accessible by you. Only you can manage and import emails from this account.<br><b>Group</b>: Email account accessible by members of specified teams. Team members can manage and import emails from this account.<br><b>Group - auto-import</b>: Email account accessible by members of specified teams. Emails are automatically imported as records.',
    'LBL_ADDRESS_BOOK_SEARCH_HELP' => 'Enter an email address, First Name, Last Name or Account Name to find recipients.',
    'LBL_TEST_SETTINGS' => 'Testaa asetuksia',
    'LBL_EMPTY_EMAIL_BODY' => '<p><span style="color: #888888;"><em>This Message Has No Content</em></span></p>',
    'LBL_HAS_EMPTY_EMAIL_SUBJECT' => 'Please specify the subject',
    'LBL_HAS_EMPTY_EMAIL_BODY' => 'Please specify your message in the body',
    'LBL_HAS_INVALID_EMAIL_CC' => 'The address(es) in the Cc field are invalid',
    'LBL_HAS_INVALID_EMAIL_BCC' => 'The address(es) in the Bcc field are invalid',
    'LBL_HAS_INVALID_EMAIL_TO' => 'The address(es) in the To field are invalid',
    'LBL_TEST_EMAIL_SUBJECT' => 'Test Email from SuiteCRM',
    'LBL_NO_SUBJECT' => '(ei aihetta)',
    'LBL_CHECKING_ACCOUNT' => 'Checking Account',
    'LBL_OF' => 'sta',
    'LBL_TEST_EMAIL_BODY' => 'This email was sent in order to test the outgoing mail server information provided in the SuiteCRM application. A successful receipt of this email indicates that the outgoing mail server information provided is valid.',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Ylläpitäjä ei ole vielä määritellyt lähtevän postin oletustiliä. Testisähköpostia ei voida lähettää.',
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

    'LBL_EDIT_LAYOUT' => 'Muuta layoutia' /*for 508 compliance fix*/,
    'LBL_ATTACHMENT' => 'Liite' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_CREATE_CASES' => 'Luo Palvelupyyntö' /*for 508 compliance fix*/,
    'LBL_CREATE_LEADS' => 'Create Leads' /*for 508 compliance fix*/,
    'LBL_CREATE_CONTACTS' => 'Luo kontakteja' /*for 508 compliance fix*/,
    'LBL_CREATE_BUGS' => 'Create Bugs' /*for 508 compliance fix*/,
    'LBL_CREATE_TASKS' => 'Create Tasks' /*for 508 compliance fix*/,
    'LBL_CHECK_INLINE' => 'Correct' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Sulje' /*for 508 compliance fix*/,
    'LBL_HELP' => 'Apua' /*for 508 compliance fix*/,
    'LBL_WAIT' => 'Odota' /*for 508 compliance fix*/,
    'LBL_CHECKEMAIL' => 'Nouda viestit' /*for 508 compliance fix*/,
    'LBL_COMPOSEEMAIL' => 'Luo viesti' /*for 508 compliance fix*/,
    'LBL_EMAILSETTINGS' => 'Sähköpostiasetukset' /*for 508 compliance fix*/,

    // SNIP
    'LBL_EMAILS_MEETINGS_REL' => 'Emails:Meetings',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',

    'LBL_CATEGORY' => 'Kategoria',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'LBL_EMAIL_TEMPLATE' => 'Viestipohja',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Poista luonnos',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Tämä toiminto poistaa tämän sähköpostiviestin, haluatko jatkaa?',
    'LBL_EMAIL_DRAFT_DELETED' => 'Draft has been deleted',
    'LBL_EMAIL_DRAFT_ERROR_DELETING' => 'An error has occurred while trying to delete draft.',

    'LBL_QUICK_CREATE_SUCCESS1' => 'The record has been successfully created.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS2' => 'Click OK to view the new record.', // PR 5651
    'LBL_QUICK_CREATE_SUCCESS3' => 'Click Cancel to return to the Email.', // PR 5651

    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Käytä sähköpostin mallina',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Tämä toiminto korvaa sähköpostin sisällön ja otsikkokentän, haluatko jatkaa?',

    'LBL_MAILBOX_ID' => 'Mailbox ID',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_LAST_SYNCED' => 'Last Synchronised',
    'LBL_ORPHANED' => 'Orphaned',
    'LBL_IMAP_KEYWORDS' => 'IMAP Keywords',
    'LBL_ERROR_NO_FOLDERS' => 'Error: There are no folders available. Please check your email settings.',
    'LBL_ORIGINAL_MESSAGE_SEPERATOR' => '---',


    'LBL_MARK_UNREAD' => 'Mark As Unread',
    'LBL_MARK_READ' => 'Mark As Read',
    'LBL_MARK_FLAGGED' => 'Mark As Flagged',
    'LBL_MARK_UNFLAGGED' => 'Mark As Unflagged',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Opt In Email Sent',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Opt In Email Failed',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Hyväksyntävahvistusviestin tunniste',

    'ERR_NO_RETURN_ID' => 'Attachment not found.',

    'LBL_LIST_DATE_MODIFIED' => 'Muokattu viimeksi',
    'LNK_IMPORT_CAMPAIGNS' => 'Tuo kampanja',
     
     // PR 6728 Email Validation Error messages. Typicaly for Email Validation:
    'ERR_FIELD_FROM_IS_NOT_SET' => 'From field is not set.',
    'ERR_FIELD_FROM_IS_EMPTY' => 'From field is empty.',
    'ERR_FIELD_FROM_IS_INVALID' => 'From field is invalid.',
    'ERR_FIELD_FROM_ADDR_IS_NOT_SET' => 'From address is not set.',
    'ERR_FIELD_FROM_ADDR_IS_EMPTY' => 'From address is empty.',
    'ERR_FIELD_FROM_ADDR_IS_INVALID' => 'From address is invalid.',
    'ERR_FIELD_FROMNAME_IS_NOT_SET' => 'From-name is not set.',
    'ERR_FIELD_FROMNAME_IS_EMPTY' => 'From-name is empty.',
    'ERR_FIELD_FROMNAME_IS_INVALID' => 'From-name is invalid.',
    'ERR_FIELD_FROM_NAME_IS_NOT_SET' => 'From name is not set.',
    'ERR_FIELD_FROM_NAME_IS_EMPTY' => 'From name is empty.',
    'ERR_FIELD_FROM_NAME_IS_INVALID' => 'From name is invalid.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_NOT_SET' => 'From address and name pair is not set.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_EMPTY' => 'From address and name pair is empty.',
    'ERR_FIELD_FROM_ADDR_NAME_IS_INVALID' => 'From address and name pair is invalid.',
    'ERR_FIELD_FROM_ADDR_NAME_DOESNT_MATCH_REGEX' => 'From address and name pair format is incorrect, use "from@emailaddress.org <Name of Person>" format.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_NAME_PART' => 'Invalid name part of From address and name pair.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART' => 'Invalid email address part of From address and name pair.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM' => 'From address and name pair does not match to from name or email address.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_ADDR' => 'From address and name pair does not match to from address.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROMNAME' => 'From address and name pair does not match to from-name.',
    'ERR_FIELD_FROM_ADDR_NAME_INVALID_EMAIL_PART_TO_FIELD_FROM_NAME' => 'From address and name pair does not match to from name.',
);