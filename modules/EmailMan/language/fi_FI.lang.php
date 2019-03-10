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
    'LBL_SEND_DATE_TIME' => 'Lähetetty pvm',
    'LBL_IN_QUEUE' => 'Jonossa',
    'LBL_IN_QUEUE_DATE' => 'Jonoonasetuksen pvm',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Vain kokonaislukuarvot sallittu lähetettävien viestien lkm per ajokerta asetuksessa',

    'LBL_ATTACHMENT_AUDIT' => ' lähetettiin.  Paikallista kopiota ei tallennettu levytilan säästämiseksi.',
    'LBL_CONFIGURE_SETTINGS' => 'Sähköpostiasetukset',
    'LBL_CUSTOM_LOCATION' => 'Käyttäjän määrittelemä',
    'LBL_DEFAULT_LOCATION' => 'Oletus',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Poistettaessa viestiä poista myös sen liitteet ja muistiot',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Suostumusasetukset (opt-in)',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automaattisesti lähetä suostumussähköposti',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Suostumuksen hyväksynnän sähköpostimalli',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Lähtevän postin oletukset',
    'LBL_EMAILS_PER_RUN' => 'Lähetettävien viestin lukumäärä per ajokerta:',
    'LBL_ID' => 'Tunnus',
    'LBL_LIST_CAMPAIGN' => 'Kampanja',
    'LBL_LIST_FORM_TITLE' => 'Jono',
    'LBL_LIST_FROM_NAME' => 'Lähettäjä -nimi',
    'LBL_LIST_IN_QUEUE' => 'Jonossa',
    'LBL_LIST_MESSAGE_NAME' => 'Markkinointiviesti',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Vastaanottajan sähköpostiosoite',
    'LBL_LIST_RECIPIENT_NAME' => 'Vastaanottajan nimi',
    'LBL_LIST_SEND_ATTEMPTS' => 'Lähetys yritykset',
    'LBL_LIST_SEND_DATE_TIME' => 'Lähetys aika',
    'LBL_LIST_USER_NAME' => 'Käyttäjätunnus',
    'LBL_LOCATION_ONLY' => 'Sijainti',
    'LBL_LOCATION_TRACK' => 'Kampanjan seurantakoodien tiedostojen sijainti (”campaign_tracker.php” jne.)',
    'LBL_CAMP_MESSAGE_COPY' => 'Säilytä kampanjaviestesitä kopiot:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Haluatko tallentaa täydet kopiot <bold>jokaisesta</bold> lähetetystä sähköpostista kaikkien kampanjoiden aikana? <bold>Oletus, ja suositeltu vaihtoehto, on ”ei”.</bold> ”Ei”-valinnalla säilytetään vain sähköpostien malli sekä yksittäisen viestin luomiseen tarvitut muuttujat.',
    'LBL_MAIL_SENDTYPE' => 'Viestien välitysagentti (MTA):',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Käytä SMTP autentikointia:',
    'LBL_MAIL_SMTPPASS' => 'Salasana:',
    'LBL_MAIL_SMTPPORT' => 'SMTP portti:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP postipalvelin:',
    'LBL_MAIL_SMTPUSER' => 'Käyttäjätunnus:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Valitse sähköpostpalvelun tarjoajasi',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! salasana',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! käyttäjätunnus',
    'LBL_GMAIL_SMTPPASS' => 'Gmail salasana',
    'LBL_GMAIL_SMTPUSER' => 'Gmail sähköpostiosoite',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange salasana',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange käyttäjätunnus',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange palvelimen portti',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange palvelin',
    'LBL_EMAIL_LINK_TYPE' => 'Sähköpostiohjelma',
    'LBL_MARKETING_ID' => 'Markkinointi Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Sähköpostiasetukset',
    'LBL_MODULE_TITLE' => 'Lähtevien viestien jonojen hallinta',
    'LBL_NOTIFICATION_ON_DESC' => 'Kun käytössä, käyttäjille lähetetään sähköposti heihin kohdistetuista tietueista.',
    'LBL_NOTIFY_FROMADDRESS' => '"Lähettäjä" osoite:',
    'LBL_NOTIFY_FROMNAME' => '"Lähettäjä" Nimi:',
    'LBL_NOTIFY_ON' => 'Ilmoitus käyttäjälle osoituksesta',
    'LBL_NOTIFY_TITLE' => 'Sähköpostiasetukset',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Lähtevän postin asetukset',
    'LBL_RELATED_ID' => 'Liittyen Id',
    'LBL_RELATED_TYPE' => 'Liittyen Tyyppi',
    'LBL_SEARCH_FORM_TITLE' => 'Haku jonosta',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php asetusten site_url',
    'TXT_REMOVE_ME_ALT' => 'Poistaaksesi itsesi tästä viestistä mene',
    'TXT_REMOVE_ME_CLICK' => 'Klikkaa tästä',
    'TXT_REMOVE_ME' => 'Poistaaksesi itsesi tältä sähköpostilistalta ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Sähköpostin suojausasetukset',
    'LBL_SECURITY_DESC' => 'Check the following that should NOT be allowed in via InboundEmail or displayed in the Emails module.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Form tag',
    'LBL_SECURITY_FRAME' => 'Frame tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Object tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Select Outlook default minimum security settings (errs on the side of correct display).',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Toggle All Options',
    'LBL_SECURITY_XMP' => 'Xmp tag',
    'LBL_YES' => 'Yes',
    'LBL_NO' => '--None--',
    'LBL_PREPEND_TEST' => '[Testi]:',
    'LBL_SEND_ATTEMPTS' => 'Lähetys yritykset',
    'LBL_OUTGOING_SECTION_HELP' => 'Configure the default outgoing mail server for sending email notifications, including workflow alerts.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts.<br> If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => 'Apua' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Näytä lähtevän sähköpostin tilit',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
