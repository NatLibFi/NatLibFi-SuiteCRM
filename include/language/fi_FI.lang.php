<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Suomi (Finnish) - fi_FI',
    'moduleList' => array(
            'Home' => 'Etusivu',
			'ResourceCalendar' => 'Resurssikalenteri',
            'Contacts' => 'Kontaktit',
            'Accounts' => 'Asiakkaat',
            'Opportunities' => 'Myyntimahdollisuudet',
            'Cases' => 'Palvelupyynnöt',
            'Notes' => 'Muistiot',
            'Calls' => 'Puhelut',
            'Emails' => 'Sähköpostit',
            'Meetings' => 'Tapaamiset',
            'Tasks' => 'Tehtävät',
            'Calendar' => 'Kalenteri',
            'Leads' => 'Liidit',
            'Currencies' => 'Valuutat',
            'Activities' => 'Aktiviteetit',
            'Bugs' => 'Bugien seuranta',
            'Feeds' => 'RSS',
            'iFrames' => 'Omat sivut',
            'TimePeriods' => 'Aikajaksot',
            'TaxRates' => 'Verot',
            'ContractTypes' => 'Sopimustyypit',
            'Schedulers' => 'Ajastukset',
            'Project' => 'Projektit',
            'ProjectTask' => 'Projektitehtävät',
            'Campaigns' => 'Kampanjat',
            'CampaignLog' => 'Kampanjaloki',
            'Documents' => 'Dokumentit',
            'DocumentRevisions' => 'Dokumenttiversiot',
            'Connectors' => 'Konnektorit',
            'Roles' => 'Roolit',
            'Notifications' => 'Huomautukset',
            'Sync' => 'Synkronoi',
            'Users' => 'Käyttäjät',
            'Employees' => 'Työntekijät',
            'Administration' => 'Ylläpito',
            'ACLRoles' => 'Roolit',
            'InboundEmail' => 'Saapuneet sähköpostit',
            'Releases' => 'Versiot',
            'Prospects' => 'Prospektit',
            'Queues' => 'Jonot',
            'EmailMarketing' => 'Sähköpostimarkkinointi',
            'EmailTemplates' => 'Sähköpostipohjat',
            'SNIP' => 'Sähköpostin arkistointi',
            'ProspectLists' => 'Kohteet - Listat',
            'SavedSearch' => 'Tallennetut haut',
            'UpgradeWizard' => 'PäivitysWelho',
            'Trackers' => 'Seurantakoodit',
            'TrackerPerfs' => 'Seurantakoodien toiminta',
            'TrackerSessions' => 'Seurantakoodien istunnot',
            'TrackerQueries' => 'Seurantakoodien kyselyt',
            'FAQ' => 'UKK',
            'Newsletters' => 'Uutiskirjeet',
            'SugarFeed' => 'SuiteCRM syöte',
            'SugarFavorites' => 'SuiteCRM suosikit',

            'OAuthKeys' => 'OAuth käyttäjän avaimet',
            'OAuthTokens' => 'OAuth valtuudet',
            'Calls_Reschedule' => 'Calls Reschedule',
        ),

    'moduleListSingular' => array(
            'Home' => 'Etusivu',
            'Dashboard' => 'Kaaviot',
            'Contacts' => 'Kontakti',
            'Accounts' => 'Asiakkaat',
            'Opportunities' => 'Myyntimahdollisuudet',
            'Cases' => 'Palvelupyynnöt',
            'Notes' => 'Muistiot',
            'Calls' => 'Puhelut',
            'Emails' => 'Sähköpostit',
            'Meetings' => 'Tapaamiset',
            'Tasks' => 'Tehtävät',
            'Calendar' => 'Kalenteri',
            'Leads' => 'Liidit',
            'Activities' => 'Aktiviteetit',
            'Bugs' => 'Bugien seuranta',
            'KBDocuments' => 'TKAsiakirja',
            'Feeds' => 'RSS',
            'iFrames' => 'Omat sivut',
            'TimePeriods' => 'Aikajaksot',
            'Project' => 'Projektit',
            'ProjectTask' => 'Projektitehtävät',
            'Prospects' => 'Prospektit',
            'Campaigns' => 'Kampanjat',
            'Documents' => 'Dokumentit',
            'SugarFollowing' => 'SuiteCRM seuraa',
            'Sync' => 'Synkronoi',
            'Users' => 'Käyttäjät',
            'SugarFavorites' => 'SuiteCRM suosikit',

        ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Kyllä',
        '2' => 'Ei',
    ),

    //e.g. en francais 'Analyst'=>'Analyste',
    'account_type_dom' => array(
            '' => '',
            'Analyst' => 'Analysoija',
            'Competitor' => 'Kilpailija',
            'Customer' => 'Asiakas',
            'Integrator' => 'Integraattori',
            'Investor' => 'Sijoittaja',
            'Partner' => 'Partneri',
            'Press' => 'Lehdistä',
            'Prospect' => 'Prospekti',
            'Reseller' => 'Jälleenmyyjä',
            'Other' => 'Muu',
        ),
    //e.g. en espanol 'Apparel'=>'Ropa',
    'industry_dom' => array(
            '' => '',
            'Apparel' => 'Vaate',
            'Banking' => 'Pankki',
            'Biotechnology' => 'Bioteknologia',
            'Chemicals' => 'Kemianteollisuus',
            'Communications' => 'Viestintä',
            'Construction' => 'Rakennusteollisuus',
            'Consulting' => 'Konsultointi',
            'Education' => 'Koulutus',
            'Electronics' => 'Elektroniikkateollisuus',
            'Energy' => 'Energia',
            'Engineering' => 'Tekniikka',
            'Entertainment' => 'Viihdeteollisuus',
            'Environmental' => 'Ympäristö',
            'Finance' => 'Rahoitus',
            'Government' => 'Julkishallinto',
            'Healthcare' => 'Terveydenhuolto',
            'Hospitality' => 'Majoitus',
            'Insurance' => 'Vakuutus',
            'Machinery' => 'Koneteollisuus',
            'Manufacturing' => 'Valmistus',
            'Media' => 'Media',
            'Not For Profit' => 'Voittoa tavoittelematon',
            'Recreation' => 'Vapaa-aika',
            'Retail' => 'Jälleenmyynti',
            'Shipping' => 'Logistiikka',
            'Technology' => 'Teknologia',
            'Telecommunications' => 'Telekommunikaatio',
            'Transportation' => 'Kuljetus',
            'Utilities' => 'Utilities',
            'Other' => 'Muu',
        ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
            '' => '',
            'Cold Call' => 'Uusi soitto',
            'Existing Customer' => 'Vanha asiakas',
            'Self Generated' => 'Itse huomattu',
            'Employee' => 'Työntekijä',
            'Partner' => 'Partneri',
            'Public Relations' => 'Yleiset suhteet',
            'Direct Mail' => 'Posti',
            'Conference' => 'Konfferenssi',
            'Trade Show' => 'Messut',
            'Web Site' => 'Web-sivusto',
            'Word of mouth' => 'Suusta suuhun',
            'Email' => 'Sähköposti',
            'Campaign' => 'Kampanja',
            'Other' => 'Muu',
        ),
    'opportunity_type_dom' => array(
            '' => '',
            'Existing Business' => 'Vanha asiakas',
            'New Business' => 'Uusi asiakas',
        ),
    'roi_type_dom' => array(
            'Revenue' => 'Tuotto',
            'Investment' => 'Investointi',
            'Expected_Revenue' => 'Arvioitu tuotto',
            'Budget' => 'Budjetti',

        ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
            '' => '',
            'Primary Decision Maker' => 'Ensisijainen päättäjä',
            'Business Decision Maker' => 'Business päättäjä',
            'Business Evaluator' => 'Business arvioija',
            'Technical Decision Maker' => 'Tekninen päättäjä',
            'Technical Evaluator' => 'Tekninen arvioija',
            'Executive Sponsor' => 'Päärahoittaja',
            'Influencer' => 'Vaikuttaja',
            'Other' => 'Muu',
        ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
            '' => '',
            'Primary Contact' => 'Ensisijainen kontakti',
            'Alternate Contact' => 'Vaihtoehtoinen kontakti',
        ),
    'payment_terms' => array(
            '' => '',
            'Net 15' => '15 pvää netto',
            'Net 30' => '30 pvää netto',
        ),
    'fts_type' => array(
        '' => '',
        'Elastic' => 'joustava haku',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
            'Prospecting' => 'Prospektointi',
            'Qualification' => 'Arviointi',
            'Needs Analysis' => 'Tarveanalyysi',
            'Value Proposition' => 'Arvolupaus',
            'Id. Decision Makers' => 'Tunnista päättäjät',
            'Perception Analysis' => 'Havaintoanalyysi',
            'Proposal/Price Quote' => 'Tarjous/Tarjouspyyntö',
            'Negotiation/Review' => 'Neuvottelu',
            'Closed Won' => 'Suljettu, voitettu',
            'Closed Lost' => 'Suljettu, hävitty',
        ),
    'in_total_group_stages' => array(
        'Draft' => 'Luonnos',
        'Negotiation' => 'Neuvottelu',
        'Delivered' => 'Toimitettu',
        'On Hold' => 'Pidossa',
        'Confirmed' => 'Vahvistettu',
        'Closed Accepted' => 'suljettu, hyväksytty',
        'Closed Lost' => 'Suljettu, hävitty',
        'Closed Dead' => 'Suljettu, kuollut',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
            'Call' => 'Puhelu',
            'Meeting' => 'Tapaaminen',
            'Task' => 'Tehtävä',
            'Email' => 'Sähköposti',
            'Note' => 'Muistio',
        ),
    'salutation_dom' => array(
            '' => '',
            'Mr.' => 'Hra.',
            'Ms.' => 'Rva.',
            'Mrs.' => 'Nti.',
            'Dr.' => 'Tri.',
            'Prof.' => 'Prof.',
        ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(60 => '1 minuutti ennen',
        300 => '5 minuuttia ennen',
        600 => '10 minuuttia ennen',
        900 => '15 minuuttia ennen',
        1800 => '30 minuuttia ennen',
        3600 => '1 tunti ennen',
        7200 => '2 tuntia ennen',
        10800 => '3 tuntia ennen',
        18000 => '5 tuntia ennen',
        86400 => '1 päivä ennen',
    ),

    'task_priority_default' => 'Normaali',
    'task_priority_dom' => array(
            'High' => 'Korkea',
            'Medium' => 'Normaali',
            'Low' => 'Matala',
        ),
    'task_status_default' => 'Ei aloitettu',
    'task_status_dom' => array(
            'Not Started' => 'Ei aloitettu',
            'In Progress' => 'Käynnissä',
            'Completed' => 'Valmis',
            'Pending Input' => 'Odottaa palautetta',
            'Deferred' => 'Siirretty',
        ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
            'Planned' => 'Suunniteltu',
            'Held' => 'Pidetty',
            'Not Held' => 'Ei pidetty',
        ),
    'extapi_meeting_password' => array(
            'WebEx' => 'WebEx',
        ),
    'meeting_type_dom' => array(
            'Other' => 'Muu',
            'Sugar' => 'SuiteCRM',
        ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
            'Planned' => 'Suunniteltu',
            'Held' => 'Pidetty',
            'Not Held' => 'Ei pidetty',
        ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
            'Inbound' => 'Vastaa',
            'Outbound' => 'Soita',
        ),
    'lead_status_dom' => array(
            '' => '',
            'New' => 'Uusi',
            'Assigned' => 'Vastuuhenkilö valittu',
            'In Process' => 'Käynnissä',
            'Converted' => 'Muuunnettu',
            'Recycled' => 'Kierrätetty',
            'Dead' => 'Kuollut',
        ),
    'gender_list' => array(
            'male' => 'Mies',
            'female' => 'Nainen',
        ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
            'P1' => 'Korkea',
            'P2' => 'Normaali',
            'P3' => 'Matala',
        ),
    'user_type_dom' => array(
            'RegularUser' => 'Käyttäjä',
            'Administrator' => 'Ylläpitäjä',
        ),
    'user_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Inactive' => 'Ei aktiivinen',
        ),
    'employee_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Terminated' => 'Työsuhde päättynyt',
            'Leave of Absence' => 'Lomalla',
        ),
    'messenger_type_dom' => array(
            '' => '',
            'MSN' => 'MSN Messenger',
            'Yahoo!' => 'Yahoo!',
            'AOL' => 'AOL',
        ),
    'project_task_priority_options' => array(
        'High' => 'Korkea',
        'Medium' => 'Normaali',
        'Low' => 'Matala',
    ),
    'project_task_priority_default' => 'Normaali',

    'project_task_status_options' => array(
        'Not Started' => 'Ei aloitettu',
        'In Progress' => 'Käynnissä',
        'Completed' => 'Valmis',
        'Pending Input' => 'Odottaa palautetta',
        'Deferred' => 'Siirretty',
    ),
    'project_task_utilization_options' => array(
        '0' => '-',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Luonnos',
        'In Review' => 'Tarkastettavana',
        'Underway' => 'Tekeillä',
        'On_Hold' => 'Pidossa',
        'Completed' => 'Valmis',
    ),
    'project_status_default' => 'Luonnos',

    'project_duration_units_dom' => array(
        'Days' => 'Päivää',
        'Hours' => 'Tuntia',
    ),

    'activity_status_type_dom' => array(''=>'--Ei mitään--',
        'active' => 'Aktiivinen',
        'inactive' => 'Ei aktiivinen',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Accounts',
    'record_type_display' => array(
            '' => '',
            'Accounts' => 'Asiakkaat',
            'Opportunities' => 'Myyntimahdollisuudet',
            'Cases' => 'Palvelupyynnöt',
            'Leads' => 'Liidit',
            'Contacts' => 'Kontakti', // cn (11/22/2005) added to support Emails

            'Bugs' => 'Bugien seuranta',
            'Project' => 'Projektit',

            'Prospects' => 'Prospektit',
            'ProjectTask' => 'Projektitehtävät',

            'Tasks' => 'Tehtävät',

        ),

    'record_type_display_notes' => array(
            'Accounts' => 'Asiakkaat',
            'Contacts' => 'Kontakti',
            'Opportunities' => 'Myyntimahdollisuudet',
            'Tasks' => 'Tehtävät',
            'Emails' => 'Sähköpostit',

            'Bugs' => 'Bugien seuranta',
            'Project' => 'Projektit',
            'ProjectTask' => 'Projektitehtävät',
            'Prospects' => 'Prospektit',
            'Cases' => 'Palvelupyynnöt',
            'Leads' => 'Liidit',

            'Meetings' => 'Tapaamiset',
            'Calls' => 'Puhelut',
        ),

    'parent_type_display' => array(
            'Accounts' => 'Asiakkaat',
            'Contacts' => 'Kontakti',
            'Tasks' => 'Tehtävät',
            'Opportunities' => 'Myyntimahdollisuudet',

            'Bugs' => 'Bugien seuranta',
            'Cases' => 'Palvelupyynnöt',
            'Leads' => 'Liidit',

            'Project' => 'Projektit',
            'ProjectTask' => 'Projektitehtävät',

            'Prospects' => 'Prospektit',

        ),

    'issue_priority_default_key' => 'Normaali',
    'issue_priority_dom' => array(
            'Urgent' => 'Kiireellinen',
            'High' => 'Korkea',
            'Medium' => 'Normaali',
            'Low' => 'Matala',
        ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Hyväksytty',
            'Duplicate' => 'Duplikaatti',
            'Closed' => 'Suljettu',
            'Out of Date' => 'Vanhentunut',
            'Invalid' => 'Väärä',
        ),

    'issue_status_default_key' => 'Uusi',
    'issue_status_dom' => array(
            'New' => 'Uusi',
            'Assigned' => 'Vastuuhenkilö valittu',
            'Closed' => 'Suljettu',
            'Pending' => 'Odottaa',
            'Rejected' => 'Hylätty',
        ),

    'bug_priority_default_key' => 'Normaali',
    'bug_priority_dom' => array(
            'Urgent' => 'Kiireellinen',
            'High' => 'Korkea',
            'Medium' => 'Normaali',
            'Low' => 'Matala',
        ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
            '' => '',
            'Accepted' => 'Hyväksytty',
            'Duplicate' => 'Duplikaatti',
            'Fixed' => 'Korjattu',
            'Out of Date' => 'Vanhentunut',
            'Invalid' => 'Väärä',
            'Later' => 'Myöhemmin',
        ),
    'bug_status_default_key' => 'Uusi',
    'bug_status_dom' => array(
            'New' => 'Uusi',
            'Assigned' => 'Vastuuhenkilö valittu',
            'Closed' => 'Suljettu',
            'Pending' => 'Odottaa',
            'Rejected' => 'Hylätty',
        ),
    'bug_type_default_key' => 'Bugien seuranta',
    'bug_type_dom' => array(
            'Defect' => 'Vika',
            'Feature' => 'Ominaisuus',
        ),
    'case_type_dom' => array(
            'Administration' => 'Ylläpito',
            'Product' => 'Tuote',
            'User' => 'Käyttäjä',
        ),

    'source_default_key' => '',
    'source_dom' => array(
            '' => '',
            'Internal' => 'Sisäinen',
            'Forum' => 'Foorumi',
            'Web' => 'Verkko',
            'InboundEmail' => 'Saapuneet sähköpostit',
        ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
            '' => '',
            'Accounts' => 'Asiakkaat',
            'Activities' => 'Aktiviteetit',
            'Bugs' => 'Bugien seuranta',
            'Calendar' => 'Kalenteri',
            'Calls' => 'Puhelut',
            'Campaigns' => 'Kampanjat',
            'Cases' => 'Palvelupyynnöt',
            'Contacts' => 'Kontaktit',
            'Currencies' => 'Valuutat',
            'Dashboard' => 'Kaaviot',
            'Documents' => 'Dokumentit',
            'Emails' => 'Sähköpostit',
            'Feeds' => 'Syötteet',
            'Forecasts' => 'Ennusteet',
            'Help' => 'Apua',
            'Home' => 'Etusivu',
            'Leads' => 'Liidit',
            'Meetings' => 'Tapaamiset',
            'Notes' => 'Muistiot',
            'Opportunities' => 'Myyntimahdollisuudet',
            'Outlook Plugin' => 'Outlook liitännäinen',
            'Projects' => 'Projektit',
            'Quotes' => 'Tarjoukset',
            'Releases' => 'Versiot',
            'RSS' => 'RSS',
            'Studio' => 'Studio',
            'Upgrade' => 'Päivitys',
            'Users' => 'Käyttäjät',
        ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
            '' => '',
            'Planning' => 'Suunnittelussa',
            'Active' => 'Aktiivinen',
            'Inactive' => 'Ei aktiivinen',
            'Complete' => 'Valmis',
            //'In Queue' => 'In Queue',
            //'Sending' => 'Sending',
        ),
    'campaign_type_dom' => array(
            '' => '',
            'Telesales' => 'Puhelinmyynti',
            'Mail' => 'Posti',
            'Email' => 'Sähköposti',
            'Print' => 'Printti',
            'Web' => 'Verkko',
            'Radio' => 'Radio',
            'Television' => 'Televisio',
            'NewsLetter' => 'Uutiskirje',
        ),

    'newsletter_frequency_dom' => array(
            '' => '',
            'Weekly' => 'Viikoittain',
            'Monthly' => 'Kuukausittain',
            'Quarterly' => 'Kvartaaleittain',
            'Annually' => 'Vuosittain',
        ),

    'notifymail_sendtype' => array(
            'SMTP' => 'SMTP',
        ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Tammikuu',
        '2' => 'Helmikuu',
        '3' => 'Maaliskuu',
        '4' => 'Huhtikuu',
        '5' => 'Toukokuu',
        '6' => 'Kesäkuu',
        '7' => 'Heinäkuu',
        '8' => 'Elokuu',
        '9' => 'Syyskuu',
        '10' => 'Lokakuu',
        '11' => 'Marraskuu',
        '12' => 'Joulukuu',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Tammi',
        '2' => 'Helmi',
        '3' => 'Maalis',
        '4' => 'Huhti',
        '5' => 'Touko',
        '6' => 'Kesä',
        '7' => 'Heinä',
        '8' => 'Elo',
        '9' => 'Syys',
        '10' => 'Loka',
        '11' => 'Marras',
        '12' => 'Joulu',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Sunnuntai',
        '2' => 'Maanantai',
        '3' => 'Tiistai',
        '4' => 'Keskiviikko',
        '5' => 'Torstai',
        '6' => 'Perjantai',
        '7' => 'Lauantai',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'su',
        '2' => 'ma',
        '3' => 'ti',
        '4' => 'ke',
        '5' => 'to',
        '6' => 'pe',
        '7' => 'la',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'aamupäivä',
        'pm' => 'iltapäivä',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Aamupäivä',
        'PM' => 'Iltapäivä',
    ),

    'dom_report_types' => array(
        'tabular' => 'Rivit ja sarakkeet',
        'summary' => 'Yhteenveto',
        'detailed_summary' => 'Yhteenveto ja rivitiedot',
        'Matrix' => 'Matriisi',
    ),

    'dom_email_types' => array(
        'out' => 'Lähetetty',
        'archived' => 'Arkistoitu',
        'draft' => 'Luonnos',
        'inbound' => 'Saapunut',
        'campaign' => 'Kampanja',
    ),
    'dom_email_status' => array(
        'archived' => 'Arkistoitu',
        'closed' => 'Suljettu',
        'draft' => 'Luonnos',
        'read' => 'Luettu',
        'replied' => 'Vastattu',
        'sent' => 'Lähetetty',
        'send_error' => 'Lähetysvirhe',
        'unread' => 'Lukematta',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arkistoitu',
    ),

    'dom_email_server_type' => array('' => '--Ei mitään--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Ei mitään--',
        'createcase' => 'Luo Palvelupyyntö',
        'bounce' => 'Palautuneiden käsittely',
    ),
    'dom_email_distribution' => array('' => '--Ei mitään--',
        'direct' => 'Suora määrittäminen',
        'roundRobin' => 'Kiertovuorottelu',
        'leastBusy' => 'Vähiten varattu',
    ),
    'dom_email_errors' => array(1 => 'Valitse vain yksi käyttäjä kun kohdistat tekijälle.',
        2 => 'Voit kohdistaa vain valittuja tehtäviä.',
    ),
    'dom_email_bool' => array('bool_true' => 'Tosi',
        'bool_false' => 'Epätosi',
    ),
    'dom_int_bool' => array(1 => 'Kyllä',
        0 => 'Ei',
    ),
    'dom_switch_bool' => array('on' => 'Kyllä',
        'off' => 'Ei',
        '' => '--None--', ),

    'dom_email_link_type' => array('sugar' => 'SuiteCRM sähköposti Client',
        'mailto' => 'Muu sähköposti Client', ),

    'dom_email_editor_option' => array('' => '--None--',
        'html' => 'HTML',
        'plain' => 'Pelkkä teksti', ),

    'schedulers_times_dom' => array('not run' => 'Ei suoritettu',
        'ready' => 'Valmis',
        'in progress' => 'Käynnissä',
        'failed' => 'Epäonnistunut',
        'completed' => 'Valmis',
        'no curl' => 'Ei suoritettu: No cURL available',
    ),

    'scheduler_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Inactive' => 'Ei aktiivinen',
        ),

    'scheduler_period_dom' => array(
            'min' => 'Minuutit',
            'hour' => 'tunnit',
        ),
    'forecast_schedule_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Inactive' => 'Ei aktiivinen',
        ),
    'forecast_type_dom' => array(
            'Direct' => 'Suora',
            'Rollup' => 'Rollup',
        ),
    'document_category_dom' => array(
            '' => '',
            'Marketing' => 'Markkinointi',
            'Knowledege Base' => 'Tietokanta',
            'Sales' => 'Myynti',
        ),

    'document_subcategory_dom' => array(
            '' => '',
            'Marketing Collateral' => 'Markkinointimateriaali',
            'Product Brochures' => 'Tuotekatalogi',
            'FAQ' => 'UKK',
        ),

    'document_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Draft' => 'Luonnos',
            'FAQ' => 'UKK',
            'Expired' => 'Vanhentunut',
            'Under Review' => 'Tarkastettavana',
            'Pending' => 'Odottaa',
        ),
    'document_template_type_dom' => array(
            '' => '',
            'mailmerge' => 'Mail Merge',
            'eula' => 'Loppukäyttäjän lisenssi',
            'nda' => 'Salassapitosopimus',
            'license' => 'Lisenssisopimus',
        ),
    'dom_meeting_accept_options' => array(
            'accept' => 'Hyväksy',
            'decline' => 'Hylkää',
            'tentative' => 'Ehkä',
        ),
    'dom_meeting_accept_status' => array(
            'accept' => 'Hyväksytty',
            'decline' => 'Kieltäytynyt',
            'tentative' => 'Ehkä',
            'none' => 'Ei mitään',
        ),
    'duration_intervals' => array('0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Ei mitään',
        'Daily' => 'Päivittäin',
        'Weekly' => 'Viikoittain',
        'Monthly' => 'Kuukausittain',
        'Yearly' => 'Vuosittain',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'päivä(ä)',
        'Weekly' => 'viikko(a)',
        'Monthly' => 'kuukau(si/tta)',
        'Yearly' => 'vuo(si/tta)',
    ),

    'duration_dom' => array(
        '' => '--None--',
        '900' => '15 minuuttia',
        '1800' => '30 minuuttia',
        '2700' => '45 minuuttia',
        '3600' => '1 tunti',
        '5400' => '1,5 tuntia',
        '7200' => '2 tuntia',
        '10800' => '3 tuntia',
        '21600' => '6 tuntia',
        '86400' => '1 päivä',
        '172800' => '2 päivää',
        '259200' => '3 päivää',
        '604800' => '1 viikko',
    ),

// deferred
    /*// QUEUES MODULE DOMs
    'queue_type_dom' => array(
        'Users' => 'Users',
        'Mailbox' => 'Mailbox',
    ),
    */
//prospect list type dom
    'prospect_list_type_dom' => array(
            'default' => 'Oletus',
            'seed' => 'Siemenvaihe',
            'exempt_domain' => 'Rajoitettu - Domainin mukaan',
            'exempt_address' => 'Rajoitettu - spostiosoitteen mukaan',
            'exempt' => 'Rajoitettu - Id:n mukaan',
            'test' => 'Testi',
        ),

    'email_settings_num_dom' => array(
            '10' => '10',
            '20' => '20',
            '50' => '50',
        ),
    'email_marketing_status_dom' => array(
            '' => '',
            'active' => 'Aktiivinen',
            'inactive' => 'Ei aktiivinen',
        ),

    'campainglog_activity_type_dom' => array(
            '' => '',
            'targeted' => 'Viestit lähetetty/yritetty lähettää',
            'send error' => 'Palautuneet viestit, muu syy',
            'invalid email' => 'Palautuneet viestit, väärä shköpostiosoite',
            'link' => 'Click-thru Linkki',
            'viewed' => 'Viesti katsottu',
            'removed' => 'Poistettu',
            'lead' => 'Liidi luotu',
            'contact' => 'Kontakti luotu',
            'blocked' => 'Rajoitettu sähkäpostin tai domainin mukaan',
        ),

    'campainglog_target_type_dom' => array(
            'Contacts' => 'Kontaktit',
            'Users' => 'Käyttäjät',
            'Prospects' => 'Prospektit',
            'Leads' => 'Liidit',
            'Accounts' => 'Asiakkaat',
        ),
    'merge_operators_dom' => array(
        'like' => 'Sisältää',
        'exact' => 'On',
        'start' => 'Alkaa',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Kyllä',
        'false' => 'Ei',
        'required' => 'Pakollinen',
    ),

    'Elastic_boost_options' => array(
        '0' => 'Ei käytössä',
        '1' => 'Alhainen tehostus',
        '2' => 'Kohtalainen tehostus',
        '3' => 'Korkea tehostus',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Ei käytössä',
        1 => 'Käytössä',
    ),

    'navigation_paradigms' => array(
        'm' => 'Moduulit',
        'gm' => 'Ryhmitellyt moduulit',
    ),

    'projects_priority_options' => array(
        'high' => 'Korkea',
        'medium' => 'Normaali',
        'low' => 'Matala',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Ei aloitettu',
        'inprogress' => 'Käynnissä',
        'completed' => 'Valmis',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Laajenna selite',
        'collapselegend' => 'Supista selite',
        'clickfordrilldown' => 'Klikkaa porautuaksesi',
        'drilldownoptions' => 'Porautumisasetukset',
        'detailview' => 'Lisää tietoja...',
        'piechart' => 'Piiraskaavio',
        'groupchart' => 'Ryhmäkaavio',
        'stackedchart' => 'Pinottu kaavio',
        'barchart' => 'Pylväskaavio',
        'horizontalbarchart' => 'Vaakasuora palkkikaavio',
        'linechart' => 'Viivakaavio',
        'noData' => 'Tietoja ei ole',
        'print' => 'Tulosta',
        'pieWedgeName' => 'osiot',
    ),
    'release_status_dom' => array(
            'Active' => 'Aktiivinen',
            'Inactive' => 'Ei aktiivinen',
        ),
    'email_settings_for_ssl' => array(
            '0' => '',
            '1' => 'SSL',
            '2' => 'TLS',
        ),
    'import_enclosure_options' => array(
            '\'' => 'Heittomerkki (&#39;)',
            '"' => 'Lainausmerkki (&#34;)',
            '' => '--None--',
            'other' => 'Muu:',
        ),
    'import_delimeter_options' => array(
            ',' => ',',
            ';' => ';',
            '\t' => '\t',
            '.' => '.',
            ':' => ':',
            '|' => '|',
            'other' => 'Muu:',
        ),
    'link_target_dom' => array(
            '_blank' => 'Uuteen ikkunaan',
            '_self' => 'Samaan ikkunaan',
        ),
    'dashlet_auto_refresh_options' => array(
            '-1' => 'älä päivitä automaattisesti',
            '30' => '30 sekunnin välein',
            '60' => '1 minuutti',
            '180' => 'Joka 3. minuutti',
            '300' => 'Joka 5. minuutti',
            '600' => 'Joka 10. minuutti',
        ),
    'dashlet_auto_refresh_options_admin' => array(
            '-1' => 'Ei koskaan',
            '30' => '30 sekunnin välein',
            '60' => '1 minuutti',
            '180' => 'Joka 3. minuutti',
            '300' => 'Joka 5. minuutti',
            '600' => 'Joka 10. minuutti',
        ),
    'date_range_search_dom' => array(
            '=' => 'Yhtäsuuri kuin',
            'not_equal' => 'Erisuuri kuin',
            'greater_than' => 'Jälkeen',
            'less_than' => 'Ennen',
            'last_7_days' => 'viimeiset 7 päivää',
            'next_7_days' => 'seuraavat 7 päivää',
            'last_30_days' => 'viimeiset 30 pväivää',
            'next_30_days' => 'seuraavat 30 pväivää',
            'last_month' => 'viimekuussa',
            'this_month' => 'Tässä kuussa',
            'next_month' => 'Seuraava kuukausi',
            'last_year' => 'edellinen vuosi',
            'this_year' => 'Tänävuonna',
            'next_year' => 'seuraavana vuonna',
            'between' => 'Välillä',
        ),
    'numeric_range_search_dom' => array(
            '=' => 'Yhtäsuuri kuin',
            'not_equal' => 'Erisuuri kuin',
            'greater_than' => 'Suurempi kuin',
            'greater_than_equals' => 'Suurempi tai yhtäsuuri',
            'less_than' => 'Pienempi kuin',
            'less_than_equals' => 'Pienempi tai yhtäsuuri',
            'between' => 'Välillä',
        ),
    'lead_conv_activity_opt' => array(
            'copy' => 'Kopioi',
            'move' => 'Siirrä',
            'donothing' => 'Älä tee mitään',
        ),
);

$app_strings = array(
    'LBL_TOUR_NEXT' => 'Seuraava',
    'LBL_TOUR_SKIP' => 'Ohita',
    'LBL_TOUR_BACK' => 'Takaisin',
    'LBL_TOUR_CLOSE' => 'Sulje',
    'LBL_TOUR_TAKE_TOUR' => 'Tutustu',
    'LBL_MY_AREA_LINKS' => 'Alueeni linkit: ' /*for 508 compliance fix*/,
    'LBL_GETTINGAIR' => 'Getting Air' /*for 508 compliance fix*/,
    'LBL_WELCOMEBAR' => 'Tervetuloa' /*for 508 compliance fix*/,
    'LBL_ADVANCEDSEARCH' => 'Tarkennettu haku' /*for 508 compliance fix*/,
    'LBL_MOREDETAIL' => 'Lisää tietoja' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Muokkaa näkymää' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Katso' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Hae' /*for 508 compliance fix*/,
    'LBL_PROJECT_MINUS' => 'Poista' /*for 508 compliance fix*/,
    'LBL_PROJECT_PLUS' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_1' => 'Sarake' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_2' => '2 saraketta' /*for 508 compliance fix*/,
    'LBL_ICON_COLUMN_3' => '3 saraketta' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Tarkennettu haku' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Piilota/Näytä' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_PLUS_INLINE' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Tyhjennä' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Käyntikortti/vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_ADD' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Yrityslogo' /*for 508 compliance fix*/,
    'LBL_JS_CALENDAR' => 'Kalenteri' /*for 508 compliance fix*/,
    'LBL_ADVANCED' => 'Edistynyt',
    'LBL_BASIC' => 'Oletus',
    'LBL_MODULE_FILTER' => 'Suodata',
    'LBL_CONNECTORS_POPUPS' => 'Connectors Popups',
    'LBL_CLOSEINLINE' => 'Sulje',
    'LBL_EDITINLINE' => 'Muokkaa',
    'LBL_VIEWINLINE' => 'Katso',
    'LBL_INFOINLINE' => 'Info',
    'LBL_POWERED_BY_SUGARCRM' => 'Moottorina SugarCRM',
    'LBL_PRINT' => 'Tulosta',
    'LBL_HELP' => 'Apua',
    'LBL_ID_FF_SELECT' => 'Valitse',
    'DEFAULT' => 'Oletus',
    'LBL_SORT' => 'Järjestä',
    'LBL_OUTBOUND_EMAIL_ADD_SERVER' => 'Lisää palvelin...',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Käytä SMTP suojatulla yhteydellä (SSL/TLS)?',
    'LBL_NO_ACTION' => 'Nimettyä toimintaa ei ole.',
    'LBL_NO_SHORTCUT_MENU' => 'Yhtään toimintoa ei ole käytettävissä',
    'LBL_NO_DATA' => 'Ei tietueita',
    'LBL_ROUTING_ADD_RULE' => 'Lisää sääntö',
    'LBL_ROUTING_ALL' => 'Ainakin',
    'LBL_ROUTING_ANY' => 'Mikä vain',
    'LBL_ROUTING_BREAK' => '-',
    'LBL_ROUTING_BUTTON_CANCEL' => 'Peruuta',
    'LBL_ROUTING_BUTTON_SAVE' => 'Tallenna sääntö',

    'LBL_ROUTING_ACTIONS_COPY_MAIL' => 'Kopioi posti',
    'LBL_ROUTING_ACTIONS_DELETE_BEAN' => 'Poista SuiteCRM objekti',
    'LBL_ROUTING_ACTIONS_DELETE_FILE' => 'Poista tiedosto',
    'LBL_ROUTING_ACTIONS_DELETE_MAIL' => 'Poista sähköposti',
    'LBL_ROUTING_ACTIONS_FORWARD' => 'Lähetä edelleen',
    'LBL_ROUTING_ACTIONS_MARK_FLAGGED' => 'Merkitse viesti',
    'LBL_ROUTING_ACTIONS_MARK_READ' => 'Merkitse luetuksi',
    'LBL_ROUTING_ACTIONS_MARK_UNREAD' => 'Merkitse lukemattomaksi',
    'LBL_ROUTING_ACTIONS_MOVE_MAIL' => 'Siirrä viesti',
    'LBL_ROUTING_ACTIONS_PEFORM' => 'Suorita seuraavat toimenpiteet',
    'LBL_ROUTING_ACTIONS_REPLY' => 'Vastaa viestiin',

    'LBL_ROUTING_CHECK_RULE' => 'Virhe:\n',
    'LBL_ROUTING_CHECK_RULE_DESC' => 'Ole hyvä ja tarkasta merkityt kentät.',
    'LBL_ROUTING_CONFIRM_DELETE' => 'Haluatko varmasti poistaa säännön?\nToimenpidettä ei voi peruuttaa.',

    'LBL_ROUTING_FLAGGED' => 'Merkattu',
    'LBL_ROUTING_FORM_DESC' => 'Tallennetut säännöt tulevat välittömästi käyttöön.',
    'LBL_ROUTING_FW' => 'Ed. Lähetys: ',
    'LBL_ROUTING_LIST_TITLE' => 'Säännöt',
    'LBL_ROUTING_MATCH' => 'Jos',
    'LBL_ROUTING_MATCH_2' => 'Seuraavat ehdot täyttyvät:',
    'LBL_NOTIFICATIONS' => 'Huomautukset',
    'LBL_ROUTING_MATCH_CC_ADDR' => 'Kopio',
    'LBL_ROUTING_MATCH_DESCRIPTION' => 'Sisältö',
    'LBL_ROUTING_MATCH_FROM_ADDR' => 'Lähettäjä',
    'LBL_ROUTING_MATCH_NAME' => 'Aihe',
    'LBL_ROUTING_MATCH_PRIORITY_HIGH' => 'Prioriteetti korkea',
    'LBL_ROUTING_MATCH_PRIORITY_NORMAL' => 'Prioriteetti normaali',
    'LBL_ROUTING_MATCH_PRIORITY_LOW' => 'Prioriteetti matala',
    'LBL_ROUTING_MATCH_TO_ADDR' => 'Vastaanottaja:',
    'LBL_ROUTING_MATCH_TYPE_MATCH' => 'Sisältää',
    'LBL_ROUTING_MATCH_TYPE_NOT_MATCH' => 'Ei sisällä',

    'LBL_ROUTING_NAME' => 'Säännön nimi',
    'LBL_ROUTING_NEW_NAME' => 'Uusi sääntö',
    'LBL_ROUTING_ONE_MOMENT' => 'Hetkinen...',
    'LBL_ROUTING_ORIGINAL_MESSAGE_FOLLOWS' => 'Alkuperäinen viesti seuraa.',
    'LBL_ROUTING_RE' => 'VS: ',
    'LBL_ROUTING_SAVING_RULE' => 'Tallennetaan sääntöä',
    'LBL_ROUTING_SUB_DESC' => 'Merkityt säännöt ovat aktiivisia. Klikkaa nimeä muokataksesi.',
    'LBL_ROUTING_TO' => 'Vastaanottaja',
    'LBL_ROUTING_TO_ADDRESS' => 'Vastaanottajan osoite',
    'LBL_ROUTING_WITH_TEMPLATE' => 'Mallipohjan kanssa',
    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Tietue sisältää tällä hetkellä Puhelin ja Osoite-kenttien arvot. Korvaa arvot valitsemasi tilin Puhelin ja Osoite-kentillä, valitsemalla "OK". Jos haluat säilyttää nykyiset arvot, valitse "Peruuta".',
    'LBL_DROP_HERE' => '[Pudota tähän]',
    'LBL_EMAIL_ACCOUNTS_EDIT' => 'Muokkaa',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Esitäytä Gmail&#153; oletukset',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nimi',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Lähtevän postin asetukset',
    'LBL_EMAIL_ACCOUNTS_SENDTYPE' => 'Sähköpostin välitysohjelma',
    'LBL_EMAIL_ACCOUNTS_SMTPAUTH_REQ' => 'Käytetäänkö SMTP tunnistusta?',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP salasana',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Portti',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP palvelin',
    'LBL_EMAIL_ACCOUNTS_SMTPSSL' => 'Käytä SSL yhdistettäessä',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP käyttäjätunnus',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Oletus',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Varoitus: Salasana ja käyttäjätunnus puuttuu lähtevää postia varten.',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER_REQD' => 'SMTP käyttäjätunnus vaaditaan',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS_REQD' => 'SMTP salasana vaaditaan',
    'LBL_EMAIL_ACCOUNTS_TITLE' => 'Sähköpostitilin hallinta',
    'LBL_EMAIL_POP3_REMOVE_MESSAGE' => 'POP3 protokollaa sähköpostien välitykseen ei tueta seuraavassa versiossa. Vain IMAP tuetaan.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Aseta sähköpostitili, jotta voit tarkastella saapuneita viestejä.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Anna SMTP mail palvelimen tiedot lähetettäville viesteille.',
    'LBL_EMAIL_ADD' => 'Lisää osoite',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Valmis',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Tyhjennä',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Vastaanottaja:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Kopio:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Piilokopio:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Vast.Ottaja/Kopio/Piilokopio',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_LIST' => 'Uusi lista',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Sähköpostiosoitteet',
    'LBL_EMAIL_ADDRESS_BOOK_ERR_NOT_CONTACT' => 'Ainoastaan kontaktien editointi on tuettu ominaisuus tällä hetkellä.',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Suodata',
    'LBL_EMAIL_ADDRESS_BOOK_FIRST_NAME' => 'Etunimi/asiakkaan nimi',
    'LBL_EMAIL_ADDRESS_BOOK_LAST_NAME' => 'Sukunimi',
    'LBL_EMAIL_ADDRESS_BOOK_MY_CONTACTS' => 'Omat kontaktit',
    'LBL_EMAIL_ADDRESS_BOOK_MY_LISTS' => 'Omat postituslistat',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nimi',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Osoitetta ei löytynyt',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Tallenna ja lisää osoitekirjaan',
    'LBL_EMAIL_ADDRESS_BOOK_SEARCH' => 'Etsi',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Valitse vastaanottaja',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Osoitekirja',
    'LBL_EMAIL_REPORTS_TITLE' => 'Raportit',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', '', null, null, '.gif', 'Address Book').' Osoitekirja',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE_ICON_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_addressbook', 'align=absmiddle border=0', 14, 14, '.gif', ''),
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Varoitus! Yrität poistaa lähtevien tilin joka on liitetty saapuvien tiliin.  Haluatko varmasti jatkaa?',
    'LBL_EMAIL_ADDRESSES' => 'Sähköpostiosoitteet',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Ensisijainen sähköposti',
    'LBL_EMAIL_ADDRESSES_TITLE' => 'Sähköpostiosoitteet',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Tuo SuiteCRM:ään',
    'LBL_EMAIL_ASSIGNMENT' => 'Toimeksianto',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Liitä',
    'LBL_EMAIL_ATTACHMENT' => 'Liitä',
    'LBL_EMAIL_ATTACHMENTS' => 'Omalta koneelta',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM tiedostoista',
    'LBL_EMAIL_ATTACHMENTS3' => 'Mallipohjaliitteet',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Tiedosto',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentti',
    'LBL_EMAIL_ATTACHMENTS_EMBEDED' => 'Upotettu',
    'LBL_EMAIL_BCC' => 'Piilokopio',
    'LBL_EMAIL_CANCEL' => 'Peruuta',
    'LBL_EMAIL_CC' => 'Kopio',
    'LBL_EMAIL_CHARSET' => 'Merkistökoodaus',
    'LBL_EMAIL_CHECK' => 'Tarkasta viestit',
    'LBL_EMAIL_CHECKING_NEW' => 'Haetaan uusia viestejä',
    'LBL_EMAIL_CHECKING_DESC' => 'Hetkinen... <br><br>Jos tarkastat viestejä ensimmäistä kertaa saattaa tarkistus kestää jonkin aikaa.',
    'LBL_EMAIL_CLOSE' => 'Sulje',
    'LBL_EMAIL_COFFEE_BREAK' => 'Tarkastetaan uusia viestejä. <br><br>Suuret sähköpostilit saattavat kestää kauan päivittää.',
    'LBL_EMAIL_COMMON' => 'Yleinen',

    'LBL_EMAIL_COMPOSE' => 'Sähköposti',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Ole hyvä ja lisää vastaanottajat(t).',
    'LBL_EMAIL_COMPOSE_LINK_TO' => 'Linkitä',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Viesti on tyhjä. Lähetetäänkö tästä huolimatta?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Viestissä ei ole aihetta. Lähetetäänkö silti?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(ei aihetta)',
    'LBL_EMAIL_COMPOSE_READ' => 'Lue & luo sähköposteja',
    'LBL_EMAIL_COMPOSE_SEND_FROM' => 'Lähetä tililtä',
    'LBL_EMAIL_COMPOSE_OPTIONS' => 'Asetukset',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Anna validit sähköpostiosoitteet vastaanottaja, kopio ja piilokopio kenttiin',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Sulje viesti?',
    'LBL_EMAIL_CONFIRM_DELETE' => 'Poistetaanko tietueet osoitekirjasta?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Haluatko varmasti poistaa allekirjoituksen?',

    'LBL_EMAIL_CREATE_NEW' => '--Luo uusi tallennettaessa--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multi',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tyhjä',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Lähetys pvm',
    'LBL_EMAIL_DATE_RECEIVED' => 'Vastaanotto pvm',
    'LBL_EMAIL_ASSIGNED_TO_USER' => 'Kohdennettu käyttäjälle',
    'LBL_EMAIL_DATE_TODAY' => 'Tänään',
    'LBL_EMAIL_DATE_YESTERDAY' => 'Eilen',
    'LBL_EMAIL_DD_TEXT' => 'Viestit valittu.',
    'LBL_EMAIL_DEFAULTS' => 'Oletukset',
    'LBL_EMAIL_DELETE' => 'Poista',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Poista valitut?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Viesti poistettu.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Poistetaan viestiä',
    'LBL_EMAIL_DETAILS' => 'Yksityiskohdat',
    'LBL_EMAIL_DISPLAY_MSG' => 'Näytetään viestit(t) {0} - {1} - {2}',
    'LBL_EMAIL_ADDR_DISPLAY_MSG' => 'Näytetään osoitteet {0} - {1} - {2}',

    'LBL_EMAIL_EDIT_CONTACT' => 'Muokkaa kontaktia',
    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Vain ensisijaista osoitetta käyteään kontaktin yhteydessä.',
    'LBL_EMAIL_EDIT_MAILING_LIST' => 'Muokkaa postituslistaa',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Tyhjennetään roskakoria',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Poistetaan lähtevän postin palvelinta',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Tyhjennetään väliakaistiedostoja',
    'LBL_EMAIL_EMPTY_MSG' => 'Ei viestejä.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Ei sähköpostiosoitteita.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Kansion nimen pitää olla uniikki eikä tyhjä. Yritä uudestaan.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kansiota ei voi poistaa. Joko kansiossa tai sen alikansioissa on sähköposteja tai  mail box yhdistettynä siihen.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Sisällöstä ei pystytä määrittämään kohdekansiota. Yritä uudestaan.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Ole hyvä ja tarkasta asetukset.',
    'LBL_EMAIL_ERROR_CONTACT_NAME' => 'Tarkista että syötät sukunimen.',
    'LBL_EMAIL_ERROR_DESC' => 'Virheitä havaittu: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Sinulla ei ole riittäviä oikeuksia tähän alueeseen. Saadaksesi pääsyn alueelle ota yhteys ylläpitäjään.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM kansionimien pitää olla yksilöllisiä.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Kirjoita hakuehdot.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'An error has occured',
    'LBL_EMAIL_ERROR_LIST_NAME' => 'Saman niminen postituslista on jo luotuna',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Viesti on poistettu palvelimelta',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Viesti on poistettu palvelimelta, tai siirretty toiseen kansioon',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Yhteyden muodostaminen sähköpostipalvelimeen epäonnistui. Ota yhteyttä järjestelmänvalvojaan',
    'LBL_EMAIL_ERROR_MOVE' => 'Sähköpostien siirtämistä palvelimien ja/tai sähköpostitilien välillä ei tueta tällä hetkellä.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Siirtovirhe',
    'LBL_EMAIL_ERROR_NAME' => 'Nimi vaaditaan.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Vastaanottajan osoite vaaditaan. Ole hyvä ja anna validi osoite..',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Ole hyvä ja liitä tiedosto.',
    'LBL_EMAIL_ERROR_NO_IMAP_FOLDER_RENAME' => 'IMAP-kansion uudelleennimeämistä ei tueta tällä hetkellä.',
    'LBL_EMAIL_ERROR_SERVER' => 'Postipalvelimen osoite vaaditaan.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Tiliä ei ehkä tallennettu.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Palvelimen kommunikointivirhe.',
    'LBL_EMAIL_ERROR_USER' => 'Käyttäjätunnus vaaditaan.',
    'LBL_EMAIL_ERROR_PASSWORD' => 'Salasana vaaditaan.',
    'LBL_EMAIL_ERROR_PORT' => 'Postipalvelimen portti vaaditaan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Palvelin protokolla vaaditaan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Seuratut kansiot vaaditaan.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Poistetut viestit kansio vaaditaan.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Tietoja ei ole saatavilla',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Lähtevän postin palvelinta ei ole No outgoing mail server specified.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '').'Kansiot',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ACTIONS' => 'Siirrä kansioon',
    'LBL_EMAIL_FOLDERS_ADD' => 'Lisää',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Lisää uusi kansio',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Nimeä kansio uudelleen',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Tallenna',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Lisää kansio kohteeseen',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Kansiota ei voida muuttaa',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Haluatko varmasti poistaa kansion?\nToimintoa ei voida keskeyttää tai peruuttaa.\nKansion poisto poistaa myös kaikki alikansiot.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Uuden kansion nimi',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Valitse kansio ennen toiminnon suorittamista.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Kansioiden hallinta',
    'LBL_EMAIL_FOLDERS_USING_GROUP_USER' => 'Käytetään ryhmää',

    'LBL_EMAIL_FORWARD' => 'Lähetä edelleen',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Ladattu yhteensä[[count]]. Viestejä yhteensä [[total]]',
    'LBL_EMAIL_FOUND' => 'Löydetty',
    'LBL_EMAIL_FROM' => 'Lähettäjä',
    'LBL_EMAIL_GROUP' => 'Ryhmä',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Ryhmä',
    'LBL_EMAIL_HOME_FOLDER' => 'Koti',
    'LBL_EMAIL_HTML_RTF' => 'Lähetä HTML',
    'LBL_EMAIL_IE_DELETE' => 'Poistetaan postitiliä',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Poistetaan allekirjoitusta',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Haluatko varmasti poistaa postitilin?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Poistaminen onnistui.',
    'LBL_EMAIL_IE_SAVE' => 'Tallennetaan posti tilin tietoja',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Tuodaan viestejä',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Tuo SuiteCRM:ään',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Tuontiasetukset',
    'LBL_EMAIL_INVALID' => 'Viallinen',
    'LBL_EMAIL_LOADING' => 'Ladataan...',
    'LBL_EMAIL_MARK' => 'Merkkaa',
    'LBL_EMAIL_MARK_FLAGGED' => 'Seuratuksi',
    'LBL_EMAIL_MARK_READ' => 'Luetuksi',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Pois seurannasta',
    'LBL_EMAIL_MARK_UNREAD' => 'Lukemattomaksi',
    'LBL_EMAIL_ASSIGN_TO' => 'Kohdenna',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Luo kansio',
    'LBL_EMAIL_MENU_COMPOSE' => 'Luo viesti',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Poista kansio',
    'LBL_EMAIL_MENU_EDIT' => 'Muokkaa',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tyhjennä roskakori',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synkronoi',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Tyhjenn䠶älimuisti',
    'LBL_EMAIL_MENU_REMOVE' => 'Poista',
    'LBL_EMAIL_MENU_RENAME' => 'Nimeä uudelleen',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Nimeä kansio uudelleen',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Uudelleennimetään kansiota',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Ole hyvä ja suorita valinta ennen tätä operaatiota.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Luo kansio ( etäkansio tai SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_ARCHIVE' => 'Arkistoi viesti(t) SuiteCRM:ään',
    'LBL_EMAIL_MENU_HELP_COMPOSE_TO_LIST' => 'Lähetä valitut postituslistat',
    'LBL_EMAIL_MENU_HELP_CONTACT_COMPOSE' => 'Lähetä viesti ko. kontaktille',
    'LBL_EMAIL_MENU_HELP_CONTACT_REMOVE' => 'Poista kontakti',
    'LBL_EMAIL_MENU_HELP_DELETE' => 'Poista viesti(t)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Luo kansio (Etäkansio tai SuiteCRM kansio)',
    'LBL_EMAIL_MENU_HELP_EDIT_CONTACT' => 'Muokkaa kontaktia',
    'LBL_EMAIL_MENU_HELP_EDIT_LIST' => 'Muokkaa postituslistaa',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tyhjentää kaikkien tilien roskakorit',
    'LBL_EMAIL_MENU_HELP_MARK_FLAGGED' => 'Merkitse viesti(t) seurantaan ',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Merkitse viesti(t) luetuiksi',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Poistaviesti(t) seurannasta',
    'LBL_EMAIL_MENU_HELP_MARK_UNREAD' => 'Merkitse viesti(t) lukemattomiksi',
    'LBL_EMAIL_MENU_HELP_REMOVE_LIST' => 'Poistaa postituslistat',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Nimeä kansio uudelleen ( etäkansio tai SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_REPLY' => 'Vastaa viesteihin',
    'LBL_EMAIL_MENU_HELP_REPLY_ALL' => 'Vastaa kaikille',

    'LBL_EMAIL_MESSAGES' => 'Viestit',

    'LBL_EMAIL_ML_NAME' => 'Nimi',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Valitut, listatut osoitteet',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Käytettävissä olevat listan osoitteet',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> valitaksesi useita<br />(Mac käyttäjä <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Ei',
    'LBL_EMAIL_NOT_SENT' => 'Järjestelm䠥i kykene prosessoimaan pyyntöä. Ota yhteyttä ylläpitoon.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Hetkinen...',
    'LBL_EMAIL_OPEN_ALL' => 'Avaa useita viestejä',
    'LBL_EMAIL_OPTIONS' => 'Asetukset',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Uusi viesti',
    'LBL_EMAIL_OPT_OUT' => 'Estä lähetys',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Lähetys estetty ja viallinen',
    'LBL_EMAIL_PAGE_AFTER' => 'pois {0}',
    'LBL_EMAIL_PAGE_BEFORE' => 'Sivu',
    'LBL_EMAIL_PERFORMING_TASK' => 'Suoritetaan tehtävää',
    'LBL_EMAIL_PRIMARY' => 'Ensisijainen',
    'LBL_EMAIL_PRINT' => 'tulosta',

    'LBL_EMAIL_QC_BUGS' => 'Bugi',
    'LBL_EMAIL_QC_CASES' => 'Palvelupyyntö',
    'LBL_EMAIL_QC_LEADS' => 'Liidi',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakti',
    'LBL_EMAIL_QC_TASKS' => 'Tehtävä',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Myyntimahdollisuus',
    'LBL_EMAIL_QUICK_CREATE' => 'Luo',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Luodaan kansioita',
    'LBL_EMAIL_RELATE_TO' => 'Liittyen',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Tarkastele relaatioita',
    'LBL_EMAIL_RECORD' => 'Sähköpostitietue',
    'LBL_EMAIL_REMOVE' => 'Poista',
    'LBL_EMAIL_REPLY' => 'Vastaa',
    'LBL_EMAIL_REPLY_ALL' => 'Vastaa kaikille',
    'LBL_EMAIL_REPLY_TO' => 'Vastaa osoitteeseen',
    'LBL_EMAIL_RETRIEVING_LIST' => 'Haetaan postilistaa',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Haetaan viestiä',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Haetaan sähköpostitietuetta',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Ole hyvä ja valitse vain yksi sähköpostitietue',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Palaa edelliseen moduuliin?',
    'LBL_EMAIL_REVERT' => 'Palauta',
    'LBL_EMAIL_RELATE_EMAIL' => 'Liitä/kohdenna sähköposti',

    'LBL_EMAIL_RULES_TITLE' => 'Sääntöjen hallinta',

    'LBL_EMAIL_SAVE' => 'Tallenna',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Tallenna & vastaa',
    'LBL_EMAIL_SAVE_DRAFT' => 'Tallenna luonnos',

    'LBL_EMAIL_SEARCHING' => 'Suoritetaan hakua',
    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_SEARCH_ADVANCED' => 'Tarkennettu haku',
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Aloitus pvm',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Loppu pvm',
    'LBL_EMAIL_SEARCH_FULL_TEXT' => 'Leipäteksti',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Haku ei tuottanut tuloksia.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Hakutulokset',
    'LBL_EMAIL_SEARCH_TITLE' => 'Yksinkertainen haku',
    'LBL_EMAIL_SEARCH__FROM_ACCOUNTS' => 'Hae sähköpostitiliä',

    'LBL_EMAIL_SELECT' => 'Valitse',

    'LBL_EMAIL_SEND' => 'Lähetä',
    'LBL_EMAIL_SENDING_EMAIL' => 'Lähetetään',

    'LBL_EMAIL_SETTINGS' => 'Asetukset',
    'LBL_EMAIL_SETTINGS_2_ROWS' => '2 Riviä',
    'LBL_EMAIL_SETTINGS_3_COLS' => '3 saraketta',
    'LBL_EMAIL_SETTINGS_LAYOUT' => 'Ulkoasun tyyli',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Sähköpostitilit',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tyhjennä lomake',
    'LBL_EMAIL_SETTINGS_AUTO_IMPORT' => 'Tuo tarkasteltava viesti',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Tarkasta uudet viestit',
    'LBL_EMAIL_SETTINGS_COMPOSE_INLINE' => 'Käytä esikatselu ikkunaa',
    'LBL_EMAIL_SETTINGS_COMPOSE_POPUP' => 'Käytä Pop-Up ikkunaa',
    'LBL_EMAIL_SETTINGS_DISPLAY_NUM' => 'Viestejä per sivu',
    'LBL_EMAIL_SETTINGS_EDIT_ACCOUNT' => 'Muokkaa postitiliä',
    'LBL_EMAIL_SETTINGS_FOLDERS' => 'Kansiot',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Lähettäjä',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Sähköpostiosoite testaus viesteille:',
    'LBL_EMAIL_SETTINGS_TO_EMAIL_ADDR' => 'Sähköpostiosoitteeseen',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Lähettäjä',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Vastaa osoitteeseen',
    'LBL_EMAIL_SETTINGS_FULL_SCREEN' => 'Koko ikkuna',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synkronoi kaikki posti tilit',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Viesti lähetettiin annettuun osoitteeseen käyttäen annettuja lähtevän postin asetuksia. Ole hyvä ja tarkasta saapuneet viestit vahvistaaksesi sähköpostiasetukset.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_DESC' => 'Toiminto synkronoi postitilit ja niiden sisällön.',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Suorita täys synkronointi?\nToiminto saattaa kestää useita minuutteja.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Paina vaihto- tai ctrl-painiketta valitaksesi useita kansioita.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Yleiset asetukset',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS' => 'Saatavilla olevat ryhmäkansiot',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Luo ryhmäkansio',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_Save' => 'Tallennetaan ryhmäkansioita',
    'LBL_EMAIL_SETTINGS_RETRIEVING_GROUP' => 'Haetaan ryhmäkansiota',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Muokkaa ryhmäkansiota',

    'LBL_EMAIL_SETTINGS_NAME' => 'Postitilin nimi',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Valitse saapuneet kansion näytettävien viestien lkm per sivu. Asetusten käyttöönotto voi vaatia sivun päivittämistät.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Haetaan posti tiliä',
    'LBL_EMAIL_SETTINGS_RULES' => 'Säännöt',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Asetukset tallennettu.\n\nSinun tulee päivittää sivu, jotta asetukset tulevat voimaan.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Lähetä vain teksimuotoisia sähköposteja',
    'LBL_EMAIL_SETTINGS_SHOW_IN_FOLDERS' => 'Aktiivinen',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Viesti per sivu',
    'LBL_EMAIL_SETTINGS_TAB_POS' => 'Välilehdet sivun alaosaan',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuaaliset asetukset',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Asetukset',
    'LBL_EMAIL_SETTINGS_TOGGLE_ADV' => 'Näytä edistyneet',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Saatavilla olevat käyttäjän kansiot',
    'LBL_EMAIL_ERROR_PREPEND' => 'Virhe:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Lähtevän postin palvelin valitulle tilille on virheellinen.  Tarkista asetukset tai valitse tilille eri sähköpostipalvelin.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Lähtevän postin palvelin ei ole määritetty lähettämään sähköpostia. Määritä lähtevän postin palvelin tai valitse käytettävä palvelin kohdasta Asetukset >> Sähköpostitilit.',
    'LBL_EMAIL_SHOW_READ' => 'Näytä kaikki',
    'LBL_EMAIL_SHOW_UNREAD_ONLY' => 'Näytä vain lukemattomat viestit',
    'LBL_EMAIL_SIGNATURES' => 'Allekirjoitukset',
    'LBL_EMAIL_SIGNATURE_CREATE' => 'Luo allekirjoitus',
    'LBL_EMAIL_SIGNATURE_NAME' => 'Allekirjoituksen nimi',
    'LBL_EMAIL_SIGNATURE_TEXT' => 'Allekirjoituksen teksti',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Muut',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Etäkansiot ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM kansiot ]',
    'LBL_EMAIL_SUBJECT' => 'Aihe',
    'LBL_EMAIL_SUCCESS' => 'Onnistui',
    'LBL_EMAIL_SUGAR_FOLDER' => 'SuiteCRM kansiot',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Sähköpostipohjan sisältö on tyhjä',
    'LBL_EMAIL_TEMPLATES' => 'Mallipohjat',
    'LBL_EMAIL_TEXT_FIRST' => 'Ensimmäinen sivu',
    'LBL_EMAIL_TEXT_PREV' => 'Edellinen sivu',
    'LBL_EMAIL_TEXT_NEXT' => 'Seuraava sivu',
    'LBL_EMAIL_TEXT_LAST' => 'Viimeinen sivu',
    'LBL_EMAIL_TEXT_REFRESH' => 'Päivitä',
    'LBL_EMAIL_TO' => 'Vastaanottaja',
    'LBL_EMAIL_TOGGLE_LIST' => 'Käännä lista',
    'LBL_EMAIL_VIEW' => 'Näkymä',
    'LBL_EMAIL_VIEWS' => 'Näkymät',
    'LBL_EMAIL_VIEW_HEADERS' => 'Näytä otsikot',
    'LBL_EMAIL_VIEW_PRINTABLE' => 'Tulostettava versio',
    'LBL_EMAIL_VIEW_RAW' => 'Näytä käsittelemätön viesti"',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ominaisuus ei ole tuettu POP3 protokollaa käytettäessä.',
    'LBL_DEFAULT_LINK_TEXT' => 'Oletuslinkkiteksti.',
    'LBL_EMAIL_YES' => 'Kyllä',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Lähetä testi viesti',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testi viesti lähetetty',
    'LBL_EMAIL_MESSAGE_NO' => 'Viesti nro',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Tuonti suoritettu',
    'LBL_EMAIL_IMPORT_FAIL' => 'Tuonti epäonnistui, koska viesti on jo tuotu tai poistettu palvelimelta',

    'LBL_LINK_NONE' => 'Ei mitään',
    'LBL_LINK_ALL' => 'Kaikki',
    'LBL_LINK_RECORDS' => 'Tietueet',
    'LBL_LINK_SELECT' => 'Valitse',
    'LBL_LINK_ACTIONS' => 'Toiminnot',
    'LBL_LINK_MORE' => 'lisää',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Vahvista',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Haluatko sulkea #module#?',
    'LBL_CLOSE_ACTIVITY_REMEMBER' => 'älä näytä tätä viestiä uudelleen: &nbsp;',
    'LBL_INVALID_FILE_EXTENSION' => 'Viallinen tiedostomuoto',

    'ERR_AJAX_LOAD' => 'Tapahtui virhe:',
    'ERR_AJAX_LOAD_FAILURE' => 'Pyyntösi käsittelyssä tapahtui virhe, yritä hetken kuluttua uudestaan.',
    'ERR_AJAX_LOAD_FOOTER' => 'Jos tämä virhe toistuu, pyydä ylläpitäjää kytkemään Ajax pois tältä moduulilta',
    'ERR_CREATING_FIELDS' => 'Virhe täytettäessä lisätiedot kenttää: ',
    'ERR_CREATING_TABLE' => 'Virhe luotaessa taulua: ',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Desimaali ja tuhat erotin ei voi olla sama.\n\n  Ole hyvä ja muuta arvot.',
    'ERR_DELETE_RECORD' => 'Tietueen numero on annettava kontaktin poistamiseksi.',
    'ERR_EXPORT_DISABLED' => 'Vientitoiminnot poistettu käytöstä.',
    'ERR_EXPORT_TYPE' => 'Virhe viennissä ',
    'ERR_INVALID_AMOUNT' => 'Anna validi summa.',
    'ERR_INVALID_DATE_FORMAT' => 'Pvm pitää olla muodossa: ',
    'ERR_INVALID_DATE' => 'Anna oikeanmuotoinen päivämäärä.',
    'ERR_INVALID_DAY' => 'Anna validi päivä.',
    'ERR_INVALID_EMAIL_ADDRESS' => 'sähköpostiosoite ei ole kelvollinen.',
    'ERR_INVALID_FILE_REFERENCE' => 'Viallinen tiedostoviite',
    'ERR_INVALID_HOUR' => 'Anna validi tunti.',
    'ERR_INVALID_MONTH' => 'Anna validi kuukausi.',
    'ERR_INVALID_TIME' => 'Anna validi kellonaika.',
    'ERR_INVALID_YEAR' => 'Anna validi 4 numeroinen vuosiluku.',
    'ERR_NEED_ACTIVE_SESSION' => 'Istunnon tulee olla aktiivinen, jotta sisällön vienti on mahdollista.',
    'ERR_NO_HEADER_ID' => 'Toiminne ei ole käytettävissä valitussa teemassa.',
    'ERR_NOT_ADMIN' => 'Sinulla ei ole oikeuksia ylläpito toimintoihin.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Pakollinen kenttä puuttuu:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Väärä arvo pakollisessa kentässä:',
    'ERR_INVALID_VALUE' => 'Väärä arvo:',
    'ERR_NO_SUCH_FILE' => 'Tiedostoa ei löydy järjestelmästä',
    'ERR_NO_SINGLE_QUOTE' => 'Heittomerkkiä ei voida käyttää ',
    'ERR_NOTHING_SELECTED' => 'Ole hyvä ja valitse jokin ennen jatkamista.',
    'ERR_OPPORTUNITY_NAME_DUPE' => 'Myyntimahdollisuus nimellä %s on jo olemassa.  Anna uusi nimi alla.',
    'ERR_OPPORTUNITY_NAME_MISSING' => 'Myyntimahdollisuuden nimeä ei annettu. Anna myyntimahdollisuuden nimi alla.',
    'ERR_POTENTIAL_SEGFAULT' => 'Mahdollinen Apache segmentointi virhe havaittiin.  Ilmoita järjestelmänvalvojalle ongelma jotta hän voi vahvistaa virheen ja ilmoittaa siitä SuiteCRM ohjelmoijille.',
    'ERR_SELF_REPORTING' => 'Käyttäjä ei voi raportoida itselleen.',
    'ERR_SINGLE_QUOTE' => 'Heittomerkin käyttö tässä kentässä ei ole sallittu. Ole hyvä ja muuta arvoa.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Ei vastaavuuksia kentälle: ',
    'ERR_SQS_NO_MATCH' => 'Ei tuloksia',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Määrittele \'key\' indeksi näyttöparametrien attribuutille Meta-Dataa määritystä varten',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Virhe: Portaalinimi esiintyy jo toisella kontaktilla.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Kentän arvon tarkkuus ei ole yhteensopiva arvolle määritetylle tarkkuudelle',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Virhe tallennettaessa ulkopuolista tiliä.',
    'ERR_EXTERNAL_API_UPLOAD_FAIL' => 'Virhe ladattaessa. Tarkista, että ladattu tiedosto ei ole tyhjä.',
    'ERR_NO_DB' => 'Tietokantayhteyttä ei ole. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'ERR_DB_FAIL' => 'Tietokantavirhe. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'ERR_EXTERNAL_API_403' => 'Pääsy estetty. Tiedostotyyppiä ei tueta.',
    'ERR_EXTERNAL_API_NO_OAUTH_TOKEN' => 'OAuth pääsyvaltuutus puuttuu.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} tiedostoja voi käyttää ainoastaan SuiteCRM {1} tietokannan kanssa.',

    'LBL_ACCOUNT' => 'Asiakas',
    'LBL_OLD_ACCOUNT_LINK' => 'Vanha asiakas',
    'LBL_ACCOUNTS' => 'Asiakkaat',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Katso yhteenveto',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Katso yhteenveto',
    'LBL_ADD_BUTTON_KEY' => 'A',
    'LBL_ADD_BUTTON_TITLE' => 'Lisää',
    'LBL_ADD_BUTTON' => 'Lisää',
    'LBL_ADD_DOCUMENT' => 'Lisää dokumentti',
    'LBL_REPLACE_BUTTON' => 'Korvaa',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Lisää kohdelistaan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_TITLE' => 'Lisää kohdelistaan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Yhteystietojen lisääminen kohdeluetteloon',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Napsauta sulkeaksesi',
    'LBL_ADDITIONAL_DETAILS_CLOSE' => 'Sulje',
    'LBL_ADDITIONAL_DETAILS' => 'Lisätiedot',
    'LBL_ADMIN' => 'Ylläpito',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkistoi',
    'LBL_ASSIGNED_TO_USER' => 'Kohdennettu käyttäjälle',
    'LBL_ASSIGNED_TO' => 'Kohdennettu hlölle:',
    'LBL_BACK' => 'Takaisin',
    'LBL_BILL_TO_ACCOUNT' => 'Lasku asiakkaalle',
    'LBL_BILL_TO_CONTACT' => 'Lasku kontaktille',
    'LBL_BILLING_ADDRESS' => 'Laskutusosoite',
    'LBL_QUICK_CREATE_TITLE' => 'Luo',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Avoimen lähdekoodin CRM',
    'LBL_BUGS' => 'Bugit',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'Puhelut',
    'LBL_CALL' => 'Puhelu',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Lähetä jonoon asetetut sähköpostikampanjat',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Lähetä',
    'LBL_CASE' => 'Palvelupyyntö',
    'LBL_CASES' => 'Palvelupyynnöt',
    'LBL_CHANGE_BUTTON_KEY' => 'G',
    'LBL_CHANGE_PASSWORD' => 'Vaihda salasana',
    'LBL_CHANGE_BUTTON_LABEL' => 'Muuta',
    'LBL_CHANGE_BUTTON_TITLE' => 'Muuta',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Tarkista kaikki',
    'LBL_CITY' => 'Kaupunki/kunta',
    'LBL_CLEAR_BUTTON_KEY' => 'C',
    'LBL_CLEAR_BUTTON_LABEL' => 'Tyhjennä',
    'LBL_CLEAR_BUTTON_TITLE' => 'Tyhjennä',
    'LBL_CLEARALL' => 'Tyhjennä kaikki',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sulje',
    'LBL_CLOSE_BUTTON_KEY' => 'Q',
    'LBL_CLOSE_WINDOW' => 'Sulje ikkuna',
    'LBL_CLOSEALL_BUTTON_KEY' => 'Q',
    'LBL_CLOSEALL_BUTTON_LABEL' => 'Sulje kaikki',
    'LBL_CLOSEALL_BUTTON_TITLE' => 'Sulje kaikki',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sulje ja luo uusi',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sulje ja luo uusi',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Avoimet:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Luo sähköposti',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Luo sähköposti',
    'LBL_SEARCH_DROPDOWN_YES' => 'Kyllä',
    'LBL_SEARCH_DROPDOWN_NO' => 'Ei',
    'LBL_CONTACT_LIST' => 'Kontaktilista',
    'LBL_CONTACT' => 'Kontakti',
    'LBL_CONTACTS' => 'Kontaktit',
    'LBL_CONTRACT' => 'Sopimus',
    'LBL_CONTRACTS' => 'Sopimukset',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATE_BUTTON_LABEL' => 'Luo',
    'LBL_CREATED_BY_USER' => 'Tekijä',
    'LBL_CREATED_USER' => 'Tekijä',
    'LBL_CREATED_ID' => 'Tekijä',
    'LBL_CREATED' => 'Tekijä',
    'LBL_CURRENT_USER_FILTER' => 'Omat tietueet:',
    'LBL_CURRENCY' => 'Valuutta:',
    'LBL_DOCUMENTS' => 'Dokumentit',
    'LBL_DATE_ENTERED' => 'Luontipvm:',
    'LBL_DATE_MODIFIED' => 'Muokkauspvm:',
    'LBL_EDIT_BUTTON' => 'Muokkaa',
    'LBL_DUPLICATE_BUTTON' => 'Monista',
    'LBL_DELETE_BUTTON' => 'Poista',
    'LBL_DELETE' => 'Poista',
    'LBL_DELETED' => 'Poistettu',
    'LBL_DIRECT_REPORTS' => 'Suorat raportit',
    'LBL_DONE_BUTTON_KEY' => 'X',
    'LBL_DONE_BUTTON_LABEL' => 'Valmis',
    'LBL_DONE_BUTTON_TITLE' => 'Valmis',
    'LBL_DST_NEEDS_FIXIN' => 'Sovellus edellyttää kesäajan korjauksen soveltamista.  Siirry ylläpitopaneellin <a href="index.php?module=Administration&action=DstFix">Korjaa</a> osioon ja aseta kesäajan korjaus.',
    'LBL_EDIT_AS_NEW_BUTTON_LABEL' => 'Muokkaa uutena',
    'LBL_EDIT_AS_NEW_BUTTON_TITLE' => 'Muokkaa uutena',
    'LBL_FAVORITES' => 'Suosikit',
    'LBL_FILTER_MENU_BY' => 'Suodata valikko',
    'LBL_VCARD' => 'Käyntikortti',
    'LBL_EMPTY_VCARD' => 'Ole hyvä ja valitse käyntikortti',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ei sisällä kaikkia tämän moduulin vaatimia kenttiä. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Ladattavan tiedoston koko ylittää 30000 tavun rajan, joka on määritelty HTML lomakkeella.',
    'LBL_VCARD_ERROR_DEFAULT' => 'vCard tiedoston lähettämisessä tapahtui virhe. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'LBL_IMPORT_VCARD' => 'Tuo käyntikortti:',
    'LBL_IMPORT_VCARD_BUTTON_KEY' => 'I',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Tuo käyntikortti',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Tuo käyntikortti',
    'LBL_VIEW_BUTTON_KEY' => 'V',
    'LBL_VIEW_BUTTON_LABEL' => 'Katso',
    'LBL_VIEW_BUTTON_TITLE' => 'Katso',
    'LBL_VIEW_BUTTON' => 'Katso',
    'LBL_EMAIL_PDF_BUTTON_KEY' => 'M',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Lähetä PDF:nä',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Lähetä PDF:nä',
    'LBL_EMAILS' => 'Sähköpostit',
    'LBL_EMPLOYEES' => 'Työntekijät',
    'LBL_ENTER_DATE' => 'Anna pvm',
    'LBL_EXPORT_ALL' => 'Vie kaikki',
    'LBL_EXPORT' => 'Vie',
    'LBL_FAVORITES_FILTER' => 'Omat suosikit:',
    'LBL_GO_BUTTON_LABEL' => 'Mene',
    'LBL_GS_HELP' => 'Yläpuolella näkyy moduulin haussa käytettävissä olevat kentät.  Korostettu teksti vastaa hakuehtoja.',
    'LBL_HIDE' => 'Piilota',
    'LBL_ID' => 'Tunnus',
    'LBL_IMPORT' => 'Tuo',
    'LBL_IMPORT_STARTED' => 'Tuonti aloitettu: ',
    'LBL_MISSING_CUSTOM_DELIMITER' => 'Muokattu erotin tulee määritellä.',
    'LBL_LAST_VIEWED' => 'Viimeksi katsottu',
    'LBL_SHOW_LESS' => 'Näytä vähemmän',
    'LBL_SHOW_MORE' => 'Näytä enemmän',
    'LBL_TODAYS_ACTIVITIES' => 'Aktiviteetit tänään',
    'LBL_LEADS' => 'Liidit',
    'LBL_LESS' => 'vähemmän',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGNLOG' => 'Kampanjaloki',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanjat',
    'LBL_CAMPAIGN_ID' => 'Kampanja',
    'LBL_CAMPAIGN_NONE' => 'Ei mitään',
    'LBL_SITEMAP' => 'Sivukartta',
    'LBL_THEME' => 'Teema:',
    'LBL_THEME_PICKER' => 'Sivun tyyli',
    'LBL_THEME_PICKER_IE6COMPAT_CHECK' => 'Varoitus: Internet Explorer 6 ei tueta valitulle teemalle. Valitse OK, jos haluat valita sen joka tapauksessa tai Peruuta valitaksesi eri teeman.',
    'LBL_FOUND_IN_RELEASE' => 'Löydetty jakelusta',
    'LBL_FIXED_IN_RELEASE' => 'Korjattu jakelussa',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_ASSIGNED_USER' => 'Käyttäjä',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Kontaktin rooli',
    'LBL_LIST_DATE_ENTERED' => 'Luontipvm',
    'LBL_LIST_EMAIL' => 'Sähköposti',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Puhelin',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_USER_NAME' => 'Käyttäjänimi',
    'LBL_LISTVIEW_MASS_UPDATE_CONFIRM' => 'Haluatko varmasti päivittää koko listan?',
    'LBL_LISTVIEW_NO_SELECTED' => 'Valitse vähintään yksi tietue jatkaaksesi.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Valitse vähintään 2 tietuetta jatkaaksesi.',
    'LBL_LISTVIEW_LESS_THAN_TEN_SELECT' => 'Valitse alle 10 tietuetta jatkaaksesi.',
    'LBL_LISTVIEW_ALL' => 'Kaikki',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Valitut tietueet',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valittu: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Matti',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Mainio',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Tri',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_LOGIN_TO_ACCESS' => 'Ole hyvä ja kirjaudu jatkaaksesi.',
    'LBL_LOGOUT' => 'Kirjaudu ulos',
    'LBL_PROFILE' => 'Profiili',
    'LBL_MAILMERGE_KEY' => 'M',
    'LBL_MAILMERGE' => 'Sulauta sähköpostiin',
    'LBL_MASS_UPDATE' => 'Massapäivitys',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Massapäivityksessä tarvittavaa kenttää ei ole',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Estä ?hetys ensisijaiseen sähköpostiin',
    'LBL_MEETINGS' => 'Tapaamiset',
    'LBL_MEETING' => 'Tapaaminen',
    'LBL_MEETING_GO_BACK' => 'Palaa tapaamiseen',
    'LBL_MEMBERS' => 'Jäsenet',
    'LBL_MEMBER_OF' => 'On seuraavan jäsenorganisaatio',
    'LBL_MODIFIED_BY_USER' => 'Muokkaaja',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_MODIFIED_ID' => 'Muokkaaja',
    'LBL_MORE' => 'lisää',
    'LBL_MY_ACCOUNT' => 'Omat asetukset',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Luo',
    'LBL_NEW_BUTTON_TITLE' => 'Luo',
    'LBL_NEXT_BUTTON_LABEL' => 'Seuraava',
    'LBL_NONE' => '--Ei mitään--',
    'LBL_NOTES' => 'Muistiot',
    'LBL_OPENALL_BUTTON_KEY' => 'O',
    'LBL_OPENALL_BUTTON_LABEL' => 'Avaa kaikki',
    'LBL_OPENALL_BUTTON_TITLE' => 'Avaa kaikki',
    'LBL_OPENTO_BUTTON_KEY' => 'T',
    'LBL_OPENTO_BUTTON_LABEL' => 'Avaa kohteeseen: ',
    'LBL_OPENTO_BUTTON_TITLE' => 'Avaa kohteeseen:',
    'LBL_OPPORTUNITIES' => 'Myyntimahdollisuudet',
    'LBL_OPPORTUNITY_NAME' => 'Myyntimahdollisuuden nimi',
    'LBL_OPPORTUNITY' => 'Myyntimahdollisuus',
    'LBL_OR' => 'TAI',
    'LBL_LOWER_OR' => 'tai',
    'LBL_PANEL_OVERVIEW' => 'Muistion esikatselu',
    'LBL_PANEL_ASSIGNMENT' => 'Muuta',
    'LBL_PANEL_ADVANCED' => 'Lisätietoja',
    'LBL_PARENT_TYPE' => 'Päätyyppi',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_PHASE' => 'Arvoväli',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki/kunta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Maakunta/lääni:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Katuosoite 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Katuosoite 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',

    'LBL_BILLING_STREET' => 'Katuosoite:',
    'LBL_SHIPPING_STREET' => 'Katuosoite:',

    'LBL_PROSPECTS' => 'Mahdollisuudet',
    'LBL_PRODUCT_BUNDLES' => 'Tuotepaketit',
    'LBL_PRODUCTS' => 'Tuotteet',
    'LBL_PROJECT_TASKS' => 'Projektitehtävät',
    'LBL_PROJECTS' => 'Projektit',
    'LBL_QUOTE_TO_OPPORTUNITY_KEY' => 'O',
    'LBL_QUOTE_TO_OPPORTUNITY_LABEL' => 'Luo myyntimahdollisuus tarjouspyynnöstä',
    'LBL_QUOTE_TO_OPPORTUNITY_TITLE' => 'Luo myyntimahdollisuus tarjouspyynnöstä',
    'LBL_QUOTES_SHIP_TO' => 'Tarjoukset lähetettään',
    'LBL_QUOTES' => 'Tarjoukset',

    'LBL_RELATED' => 'Liittyen',
    'LBL_RELATED_INFORMATION' => 'Liittyvä informaatio',
    'LBL_RELATED_RECORDS' => 'Liittyvät tietueet',
    'LBL_REMOVE' => 'Poista',
    'LBL_REPORTS_TO' => 'Raportoi hlölle',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Tarkoittaa pakollista kenttää',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Valmis',
    'LBL_SAVE_AS_BUTTON_KEY' => 'A',
    'LBL_SAVE_AS_BUTTON_LABEL' => 'Tallenna nimellä',
    'LBL_SAVE_AS_BUTTON_TITLE' => 'Tallenna nimellä',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Täys lomake',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Täys lomake',
    'LBL_SAVE_NEW_BUTTON_KEY' => 'V',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Tallenna ja luo uusi',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Tallenna ja luo uusi',
    'LBL_SAVE_OBJECT' => 'Tallenna {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Etsi',
    'LBL_SEARCH_BUTTON_TITLE' => 'Hae',
    'LBL_SEARCH' => 'Etsi',
    'LBL_SEARCH_TIPS' => 'Klikkaa etsi painiketta tai paina enter.',
    'LBL_SEARCH_TIPS_2' => 'Klikkaa etsi painiketta tai paina enter.',
    'LBL_SEARCH_MORE' => 'lisää',
    'LBL_SEE_ALL' => 'Katso kaikki',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Väärä tiedostoformaatti, vain kuvatiedostoja voidaan ladata.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Valitse',
    'LBL_SELECT_BUTTON_TITLE' => 'Valitse',
    'LBL_SELECT_TEAMS_KEY' => 'Z',
    'LBL_SELECT_TEAMS_LABEL' => 'Lisää Tiimi(t)',
    'LBL_SELECT_TEAMS_TITLE' => 'Lisää Tiimit(t)',
    'LBL_BROWSE_DOCUMENTS_BUTTON_KEY' => 'B',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Selaa dokumentteja',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Selaa dokumentteja',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Valitse kontakti',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Valitse kontakti',
    'LBL_GRID_SELECTED_FILE' => 'Valitut tiedostot',
    'LBL_GRID_SELECTED_FILES' => 'Valitut tiedostot',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Valitse raporteista',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Valitse raportit',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Valitse käyttäjä',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Valitse käyttäjä',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Tyhjennä valinta',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Tyhjennä valinta',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Tyhjennä valinta',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Tyhjennä valinta',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Valitse tiedosto',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Valitse tiedosto',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Tyhjennä tiedosto',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Tyhjennä tiedosto',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Valitse käyttäjä',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Valitse käyttäjä',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Tyhjennä käyttäjätiedot',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Tyhjennä käyttäjätiedot',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Valitse asiakas',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Valitse asiakas',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Tyhjennä asiakastiedot',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Tyhjennä asiakastiedot',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Valitse kampanja',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Valitse kampanja',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Tyhjennä kampanja',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Tyhjennä kampanja',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Valitse kontakti',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Valitse kontakti',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Tyhjennä Kontakti',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Tyhjennä Kontakti',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Valitse Ryhmä',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Valitse Ryhmä',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Tyhjennä Ryhmä',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Tyhjennä Ryhmä',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Sivun rakentamiseen käytetyt resurssit (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekuntia.',
    'LBL_SERVER_RESPONSE_TIME' => 'Palvelimen vasteaika:',
    'LBL_SERVER_MEMORY_BYTES' => 'tavua',
    'LBL_SERVER_MEMORY_USAGE' => 'Palvelimen muistinkäyttö: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Käyttö:-moduuli: {0} - toiminto: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Palvelimen maksimi muistinkäyttö: {0} ({1})',
    'LBL_SHIP_TO_ACCOUNT' => 'Lähetä asiakkaalle',
    'LBL_SHIP_TO_CONTACT' => 'Lähetä kontaktille',
    'LBL_SHIPPING_ADDRESS' => 'Toimitusosoite',
    'LBL_SHORTCUTS' => 'Oikopolut',
    'LBL_SHOW' => 'Näytä',
    'LBL_SQS_INDICATOR' => '',
    'LBL_STATE' => 'Maakunta/lääni:',
    'LBL_STATUS_UPDATED' => 'Statuksesi tapahtumaan päivitettiin onnistuneesti!',
    'LBL_STATUS' => 'Tila:',
    'LBL_STREET' => 'Katuosoite',
    'LBL_SUBJECT' => 'Aihe',

    'LBL_INBOUNDEMAIL_ID' => 'Saapuneen viestin ID',

    /* The following version of LBL_SUGAR_COPYRIGHT is intended for Sugar Open Source only. */

    'LBL_SUGAR_COPYRIGHT' => '&copy; 2004-2011 SugarCRM Inc. Ohjelma toimitetaan sellaisenaan, ilman takuuta.  Lisenssillä <a href="LICENSE.txt" target="_blank" class="copyRightLink">AGPLv3</a>.<br />SugarCRM on SugarCRM inc.n tuotemerkki,. Kaikki muut yritys- ja tuotenimet saattavat olla muiden tuotemerkkejä.',

    // The following version of LBL_SUGAR_COPYRIGHT is for Professional and Enterprise editions.

    'LBL_SUGAR_COPYRIGHT_SUB' => '&copy; 2004-2011 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> Kaikki oikeudet pidätetän.<br />SugarCRM on SugarCRM inc.:n tuotemerkki Kaikki muiden yritysten nimen ja tuotemerkit saattavat olla ko. yrityksen omistuksessa olevia tuotemerkkejä.',

    'LBL_SCENARIO_SALES' => 'Myynti',
    'LBL_SCENARIO_MARKETING' => 'Markkinointi',
    'LBL_SCENARIO_FINANCE' => 'Rahoitus',
    'LBL_SCENARIO_SERVICE' => 'Palvelu',
    'LBL_SCENARIO_PROJECT' => 'Projektihallinta',

    'LBL_SCENARIO_SALES_DESCRIPTION'=>'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION'=>'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION'=>'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION'=>'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION'=>'This scenario faciliates the management of project related items',

    'LBL_SYNC' => 'Synkronoi',
    'LBL_TABGROUP_ALL' => 'Kaikki',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteetit',
    'LBL_TABGROUP_COLLABORATION' => 'Yhteistyö',
    'LBL_TABGROUP_HOME' => 'Etusivu',
    'LBL_TABGROUP_MARKETING' => 'Markkinointi',
    'LBL_TABGROUP_MY_PORTALS' => 'Omat sivut',
    'LBL_TABGROUP_OTHER' => 'Muut',
    'LBL_TABGROUP_REPORTS' => 'Raportit',
    'LBL_TABGROUP_SALES' => 'Myynti',
    'LBL_TABGROUP_SUPPORT' => 'Tuki',
    'LBL_TABGROUP_TOOLS' => 'Työkalut',
    'LBL_TASKS' => 'Tehtävät',
    'LBL_TEAMS_LINK' => 'Tiimit',
    'LBL_THEME_COLOR' => 'Väri',
    'LBL_THEME_FONT' => 'Fontti',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_KEY' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkistoi sähköposti',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkistoi sähköposti',
    'LBL_UNAUTH_ADMIN' => 'Ei oikeuksia ylläpitoon',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Palauta',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Palauta',
    'LBL_UNDELETE_BUTTON' => 'Palauta',
    'LBL_UNDELETE' => 'Palauta',
    'LBL_UNSYNC' => 'Poista synkronointi',
    'LBL_UPDATE' => 'Päivitä',
    'LBL_USER_LIST' => 'Käyttäjälista',
    'LBL_USERS_SYNC' => 'Käyttäjien synkronointi',
    'LBL_USERS' => 'Käyttäjät',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Tarkastetaan olevamassa olevia sähköpostiosoitteita...',
    'LBL_VERIFY_PORTAL_NAME' => 'Tarkistetaan olemassaolevia portaalinimiä...',
    'LBL_VIEW_IMAGE' => 'Katso',
    'LBL_VIEW_PDF_BUTTON_KEY' => 'P',
    'LBL_VIEW_PDF_BUTTON_LABEL' => 'Tulosta PDF:nä',
    'LBL_VIEW_PDF_BUTTON_TITLE' => 'Tulosta PDF:nä',

    'LNK_ABOUT' => 'Tietoja',
    'LNK_ADVANCED_SEARCH' => 'Tarkennettu haku',
    'LNK_BASIC_SEARCH' => 'Yksinkertainen haku',
    'LBL_ADVANCED_SEARCH' => 'Tarkennettu haku',
    'LBL_QUICK_SEARCH' => 'Quick Search',
    'LNK_SEARCH_FTS_VIEW_ALL' => 'Katso kaikki tulokset',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Näytä kaikki',
    'LNK_CLOSE' => 'sulje',
    'LBL_MODIFY_CURRENT_SEARCH' => 'Muokkaa nykyistä hakua',
    'LNK_SAVED_VIEWS' => 'Layout asetukset',
    'LNK_DELETE_ALL' => 'Poista kaikki',
    'LNK_DELETE' => 'Poista',
    'LNK_EDIT' => 'Muokkaa',
    'LNK_GET_LATEST' => 'Hae uusin',
    'LNK_GET_LATEST_TOOLTIP' => 'Korvaa uusimmalla versiolla',
    'LNK_HELP' => 'Apua',
    'LNK_CREATE' => 'Luo uusi',
    'LNK_LIST_END' => 'Loppuun',
    'LNK_LIST_NEXT' => 'Seuraava',
    'LNK_LIST_PREVIOUS' => 'Edellinen',
    'LNK_LIST_RETURN' => 'Palaa listaan',
    'LNK_LIST_START' => 'Aloita',
    'LNK_LOAD_SIGNED' => 'Allekirjoita',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Korvaa allekirjoitetulla dokumentilla',
    'LNK_PRINT' => 'Tulosta',
    'LNK_BACKTOTOP' => 'Takaisin alkuun',
    'LNK_REMOVE' => 'Poista',
    'LNK_RESUME' => 'Palaa',
    'LNK_VIEW_CHANGE_LOG' => 'Katso muutoshistoriaa',

    'NTC_CLICK_BACK' => 'Paina selaimen Takaisin nappia ja korjaa virheet.',
    'NTC_DATE_FORMAT' => '(vvvv-kk-pp)',
    'NTC_DATE_TIME_FORMAT' => '(vvvv-kk-pp 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Haluatko varmasti poistaa valitut tietueet?',
    'NTC_TEMPLATE_IS_USED' => 'Pohjaa käytetään ainakin yhdessä sähköposti kampanjassa tai järjestelmä asetuksissa. Haluatko varmasti poistaa?',
    'NTC_TEMPLATES_IS_USED' => 'Seuraavat pohjat ovat sähöposti markkinoinnissa tai järjestelmäasetuksissa. Haluatko varmasti poistaa ne?\n',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Haluatko varmasti poistaa ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Haluatko varmasti päivittää ',
    'NTC_DELETE_SELECTED_RECORDS' => ' Valitut tietueet?',
    'NTC_LOGIN_MESSAGE' => 'Anna käyttäjätunnus ja salasana.',
    'NTC_NO_ITEMS_DISPLAY' => 'Ei tietueita',
    'NTC_REMOVE_CONFIRMATION' => 'Haluatko varmasti poistaa relaation? Vain relaatiot poistetaan. Tietueita ei poisteta.',
    'NTC_REQUIRED' => 'Tarkoittaa pakollista kenttää',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Tervetuloa',
    'NTC_YEAR_FORMAT' => '(vvvv)',
    'LOGIN_LOGO_ERROR' => 'Vaihda SuiteCRM logot.',
    'WARN_ONLY_ADMINS' => 'Vain ylläpitäjät voivat kirjautua.',
    'WARN_UNSAVED_CHANGES' => 'Olet poistumassa tietueesta tallentamatta mahdollisia muutoksia. Haluatko varmasti jatkaa?',
    'ERROR_NO_RECORD' => 'Virhe haettaessa tietuetta.  Tietue voi olla poistettu tai sinulla ei ole oikeuksia tarkastella tietuetta.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Varoitus:</b> Selaimen versiota ei enää tueta tai käytät sealinta jota ei tueta. <p></p> Seuraavia selainversioita suositellaan: <p></p> <ul><li>Internet Explorer 10 (Yhteensopivuusnäkymää ei tueta) <li>Firefox 32,0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Varoitus:</b> Selaimesi on IE compatibility tilassa jota ei tueta.',
    'ERROR_TYPE_NOT_VALID' => 'Virhe. Tämä tyyppi ei ole validi.',
    'ERROR_NO_BEAN' => 'Pavun saanti epäonnistui.',
    'LBL_DUP_MERGE' => 'Etsi duplikaatteja',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Hallitse tilauksia',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Hallitse tilauksiasi ',
    'LBL_SUBSCRIBE' => 'Tilaa',
    'LBL_UNSUBSCRIBE' => 'Poista tilaus',
    // Ajax status strings
    'LBL_LOADING' => 'Ladataan ...',
    'LBL_SEARCHING' => 'Haetaan...',
    'LBL_SAVING_LAYOUT' => 'Tallennetaan Layoutia ...',
    'LBL_SAVED_LAYOUT' => 'Layout tallennettu.',
    'LBL_SAVED' => 'Tallennettu',
    'LBL_SAVING' => 'Tallennetaan',
    'LBL_FAILED' => 'Epäonnistunut!',
    'LBL_DISPLAY_COLUMNS' => 'Näytä kolumnit',
    'LBL_HIDE_COLUMNS' => 'Piilota kolumnit',
    'LBL_SEARCH_CRITERIA' => 'Hakukriteerit',
    'LBL_SAVED_VIEWS' => 'Tallennetut näkymät',
    'LBL_PROCESSING_REQUEST' => 'Käsitellään..',
    'LBL_REQUEST_PROCESSED' => 'Valmis',
    'LBL_AJAX_FAILURE' => 'Ajax virhe',
    'LBL_MERGE_DUPLICATES' => 'Yhdistä',
    'LBL_SAVED_SEARCH_SHORTCUT' => 'Tallennetut haut',
    'LBL_SEARCH_POPULATE_ONLY' => 'Suorita haku käyttäen hakulomaketta',
    'LBL_DETAILVIEW' => 'Yksityiskohtainen näkymä',
    'LBL_LISTVIEW' => 'Lista näkymä',
    'LBL_EDITVIEW' => 'Muokkaus näkymç',
    'LBL_SEARCHFORM' => 'Hakulomake',
    'LBL_SAVED_SEARCH_ERROR' => 'Anna näkymän nimi.',
    'LBL_DISPLAY_LOG' => 'Näytä loki',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Järjestelä',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Istunto vanhentumassa',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Istunto vanhentuu 2 minuutin kuluttua. Ole hyvä ja tallenna työsi.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Istuntosi on vanhentunut.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Tapaaminen',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Puhelu',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Aika: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Paikka: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Kuvaus: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Tila: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Liittyen:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nValitse OK katsoaksesi puhelun tai Peruuta ohittaaksesi tämän viestin.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nValitse OK katsoaksesi tapaamisen tai Peruuta ohittaaksesi tämän viestin.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Tapahtuma',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Tapahtumaa ei ole asetettu.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Sijaintia ei ole asetettu.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Aloituspäivää ei ole määritetty.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Ei hakutuloksia.',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Ei hakutuloksia <item1> haulle',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Luo <item1> uutena <item2>',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Sinulla ei ole tallennettuja dokumentteja. <item2> tai <item3> nyt.',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG' => '<item4>Lisätietoja moduulista <item1>. Saadaksesi lisätietoja, käytä valikon ohje toimintoa.',

    'LBL_CLICK_HERE' => 'Klikkaa tästä',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Lisää omiin suosikkeihin',
    'LBL_MARK_AS_FAVORITES' => 'Merkitse suosikiksi',
    'LBL_CREATE_CONTACT' => 'Luo kontakti',
    'LBL_CREATE_CASE' => 'Luo Palvelupyyntö',
    'LBL_CREATE_NOTE' => 'Luo muistio',
    'LBL_CREATE_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LBL_SCHEDULE_CALL' => 'Kirjaa puhelu',
    'LBL_SCHEDULE_MEETING' => 'Ajoita tapaaminen',
    'LBL_CREATE_TASK' => 'Luo tehtävä',
    'LBL_REMOVE_FROM_FAVORITES' => 'Poista suosikeista',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Luo lomake',
    'LBL_SAVE_WEB_TO_LEAD_FORM' =>'Tallenna Web-lomake',
    'LBL_AVAILABLE_FIELDS'=>'Käytettävissä olevat kentät',
    'LBL_FIRST_FORM_COLUMN'=>'Ensimmäisen lomakkeen sarake',
    'LBL_SECOND_FORM_COLUMN'=>'Toisen lomakkeen sarake',
    'LBL_ASSIGNED_TO_REQUIRED'=>'Puuttuu pakollinen kenttä: Vastuuhenkilö',
    'LBL_RELATED_CAMPAIGN_REQUIRED'=>'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM'=>'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC'=>'Submitting this form will create ',

    'LBL_PLEASE_SELECT' => 'Ole hyvä ja valitse',
    'LBL_REDIRECT_URL' => 'Uudelleenohjauksen URL',
    'LBL_RELATED_CAMPAIGN' => 'Liittyä kampanja',
    'LBL_ADD_ALL_LEAD_FIELDS' => 'Lisää kaikki kentät',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Poista kaikki kentät',
    'LBL_NEXT_BTN' => 'Seuraava',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Vain kuvatyypin tiedosto voidaan upottaa',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_DATABASE_CONN_DROPPED' => 'Virhe suoritettaessa kyselyä. Tietokanta saattoi katkaista yhteyden. Päivitä sivu, voi olla että sinun tulee käynnistää palvelin uudestaan.',
    'ERR_MSSQL_DB_CONTEXT' => 'Tietokannan konteksti vaihdettiin',
    'ERR_MSSQL_WARNING' => 'Varoitus:',

    //Meta-Data framework
    'ERR_MISSING_VARDEF_NAME' => 'Varoitus: kenttä [[field]] ei sisällä mäpättyä kirjausta [moduleDir] vardefs.php tiedostossa',
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Virhe: Tiedostoa [[file]] ei löydy.  Ei voida luoda, koska vastaavaa HTML tiedostoa ei löydy.',
    'ERR_CANNOT_FIND_MODULE' => 'Virhe: Moduulia [module] ei ole.',
    'LBL_ALT_ADDRESS' => 'Vaihtoehtoinen osoite:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',
    'ERR_SMARTY_MISSING_DISPLAY_PARAMS' => 'Indeksi puuttuu displayParams Arraystä: ',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Yleinen',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Suodattimet',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vain omat',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Otsake',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Näytä rivit',

    // MySugar status strings
    'LBL_CREATING_NEW_PAGE' => 'Luodaan uutta sivua ...',
    'LBL_NEW_PAGE_FEEDBACK' => 'Olet luonut uuden sivun. Voit lisätä uutta sisältöä lisää Paneli-valikkokomennon avulla.',
    'LBL_DELETE_PAGE_CONFIRM' => 'Halutko varmasti poistaa sivun?',
    'LBL_SAVING_PAGE_TITLE' => 'Tallennetaan sivun otsikkoa ...',
    'LBL_RETRIEVING_PAGE' => 'Haetaan sivua ...',
    'LBL_MAX_DASHLETS_REACHED' => 'SuiteCRM Panelien enimmäismäärä on saavutettu. Poista joku Paneli lisätäksesi uuden.',
    'LBL_ADDING_DASHLET' => 'Lisätään SuiteCRM paneli ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM paneli lisätty',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Haluatko varmasti poistaa SuiteCRM panelin?',
    'LBL_REMOVING_DASHLET' => 'Poistetaan SuiteCRM paneli...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM paneli poistettu',

    // MySugar Menu Options
    'LBL_ADD_PAGE' => 'Lisää sivu',
    'LBL_DELETE_PAGE' => 'Poista sivu',
    'LBL_CHANGE_LAYOUT' => 'Muuta Layoutia',
    'LBL_RENAME_PAGE' => 'Nimeä sivu uudelleen',

    'LBL_LOADING_PAGE' => 'Sivua ladataan, ole hyvä ja odota...',

    'LBL_RELOAD_PAGE' => 'Ole hyvä ja <a href="javascript: window.location.reload()"> päivitä ikkuna</a> käyttääksesi tätä SuiteCRM Panelia.',
    'LBL_ADD_DASHLETS' => 'Lisää Dashletteja',
    'LBL_CLOSE_DASHLETS' => 'Sulje',
    'LBL_OPTIONS' => 'Asetukset',
    'LBL_NUMBER_OF_COLUMNS' => 'Valitse kolumnien lkm.',
    'LBL_1_COLUMN' => '1 kolumni',
    'LBL_2_COLUMN' => '2 Kolumnia',
    'LBL_3_COLUMN' => '3 Kolumnia',
    'LBL_PAGE_NAME' => 'Sivun nimi',

    'LBL_SEARCH_RESULTS' => 'Hakutulokset',
    'LBL_SEARCH_MODULES' => 'Moduulit',
    'LBL_SEARCH_CHARTS' => 'Kuvaajat',
    'LBL_SEARCH_REPORT_CHARTS' => 'Raporttikuvaajat',
    'LBL_SEARCH_TOOLS' => 'Työkalut',
    'LBL_SEARCH_HELP_TITLE' => 'Hakuvinkit',
    'LBL_SEARCH_HELP_CLOSE_TOOLTIP' => 'Sulje',
    'LBL_SEARCH_RESULTS_FOUND' => 'Löydetyt hakutulokset',
    'LBL_SEARCH_RESULTS_TIME' => 'ms.',
    'ERR_BLANK_PAGE_NAME' => 'Anna sivun nimi.',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Ei kuvaa',

    'LBL_MODULE' => 'Moduuli',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopioi osoite vasemmalta:',
    'LBL_SAVE_AND_CONTINUE' => 'Tallenna ja jatka',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad.  For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Virhe: Seurantaa ei voi luoda, koska metadata tiedosto on tyhjä tai sitä ei ole.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Virhe: Ko. nimellä ei ole konfiguroitua monitorointia',
    'ERR_UNDEFINED_METRIC' => 'Virhe: Määrittelemättömälle metriikalle ei voi asettaa arvoa',
    'ERR_STORE_FILE_MISSING' => 'Virhe: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitoroinnin Id',
    'LBL_USER_ID' => 'Käyttäjä',
    'LBL_MODULE_NAME' => 'Moduulin nimi',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Toiminto',
    'LBL_SESSION_ID' => 'Istunnon Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Tietueet näytetään',
    'LBL_DATE_LAST_ACTION' => 'Viimeisen toimenpiteen pvm',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'Ei aiemmin kuin',
    'MSG_IS_MORE_THAN' => 'on enemmän kuin',
    'MSG_IS_LESS_THAN' => 'on pienempi kuin',
    'MSG_SHOULD_BE' => 'tulisi olla',
    'MSG_OR_GREATER' => 'tai suurempi',

    'LBL_PORTAL_WELCOME_TITLE' => 'Tervetuloa SuiteCRM Porttaaliin',
    'LBL_PORTAL_WELCOME_INFO' => 'SuiteCRM portaali tarjoaa asiakkaille reaaliaikaisen liittymän, palvelupyyntöihin vikoihin sekä uutiskirjeisiin. Tätä SuiteCRM liittymä voidaan käyttää missä tahansa sivustossa.',
    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Luo bugi',
    'LBL_NO_RECORDS_FOUND' => '- 0 Tietuetta löytynyt -',

    'DATA_TYPE_DUE' => 'Viimeistään:',
    'DATA_TYPE_START' => 'Aloita:',
    'DATA_TYPE_SENT' => 'Lähetetty:',
    'DATA_TYPE_MODIFIED' => 'Muokattu:',

    //jchi at 608/06/2008 10913am china time for the bug 12253.
    'LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT' => 'Lukumäärä',
    //jchi #19433
    'LBL_OBJECT_IMAGE' => 'objekti kuva',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Valitse pvm',

    'LBL_VALIDATE_RANGE' => 'Ei ole validilla välillä',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Valitse sekä alku- että loppupvm',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Valitse sekä alku- että loppupvm',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Kaikki',

    'LBL_OPERATOR_IN_TEXT' => 'On joku seuraavista:',
    'LBL_OPERATOR_NOT_IN_TEXT' => 'Ei ole joku seuraavista:',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',
    'LBL_MERGE_CONNECTORS' => 'Hae Tiedot',
    'LBL_MERGE_CONNECTORS_BUTTON_KEY' => '[D]',
    'LBL_REMOVE_MODULE_ENTRY' => 'Are you sure you want to disable connector integration for this module?',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //cma
    'LBL_MASSUPDATE_DELETE_GLOBAL_TEAM' => 'The Global team cannot be deleted.',
    'LBL_MASSUPDATE_DELETE_USER_EXISTS' => 'This private team [{0}] cannot be deleted until the user [{1}] is deleted.',

    //martin #25548
    'LBL_NO_FLASH_PLAYER' => 'You either have Abobe Flash turned off or are using an older version of the Adobe Flash Player. To get the latest version of the Flash Player, <a href="http://www.adobe.com/go/getflashplayer/">click here</a>.',
    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nimi',
    'LBL_COLLECTION_PRIMARY' => 'Ensisijainen',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Tyhjä pakollinen kenttä',
    'LBL_COLLECTION_EXACT' => 'Tarkalleen',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Kohdennettu hlölle',
    'LBL_DESCRIPTION' => 'Kuvaus',

    'LBL_YESTERDAY' => 'eilen',
    'LBL_TODAY' => 'tänän',
    'LBL_TOMORROW' => 'huomenna',
    'LBL_NEXT_WEEK' => 'seuraava viikko',
    'LBL_NEXT_MONDAY' => 'seuraava maanantai',
    'LBL_NEXT_FRIDAY' => 'seuraava perjantai',
    'LBL_TWO_WEEKS' => 'kaksiviikkoa',
    'LBL_NEXT_MONTH' => 'seuraavassa kuussa',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'seuraavan kuun ensimmäinen päivä',
    'LBL_THREE_MONTHS' => 'kolme kuukautta',
    'LBL_SIXMONTHS' => 'kuusi kuukautta',
    'LBL_NEXT_YEAR' => 'seuraava vuosi',
    'LBL_FILTERED' => 'Suodatettu',

    //Datetimecombo fields
    'LBL_HOURS' => 'Tunnit',
    'LBL_MINUTES' => 'Minuutit',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Pvm',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automaattinen päivitys',

    'LBL_DURATION_DAY' => 'päivä',
    'LBL_DURATION_HOUR' => 'tunti',
    'LBL_DURATION_MINUTE' => 'minuutti',
    'LBL_DURATION_DAYS' => 'päivää',
    'LBL_DURATION_HOURS' => 'tuntia',
    'LBL_DURATION_MINUTES' => 'minuttia',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Valitse kuukausi',
    'LBL_ENTER_YEAR' => 'Anna vuosi',
    'LBL_ENTER_VALID_YEAR' => 'Anna validi vuosi',

    //SugarFieldPhone labels
    'LBL_INVALID_USA_PHONE_FORMAT' => 'Please enter a numeric U.S. phone number, including area code.',

    //File write error label
    'ERR_FILE_WRITE' => 'Virhe: Ei voitu kirjoittaa tiedostoon {0}.  Ole hyvä ja tarkasta järjestelmä ja palvelin oikeudet.',
    'ERR_FILE_NOT_FOUND' => 'Virhe: Ei voitu ladata tiedostoa {0}.  Tarkasta järjestelä ja palvellinoikeudet.',

    'LBL_AND' => 'ja',
    'LBL_BEFORE' => 'Ennen',

    // File fields
    'LBL_UPLOAD_FROM_COMPUTER' => 'Lataa omalta tietokoneelta',
    'LBL_SEARCH_EXTERNAL_API' => 'Tiedostoa ulkoisesta lähteestä',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Turvallisuus',
    'LBL_SHARE_PRIVATE' => 'Yksityinen',
    'LBL_SHARE_COMPANY' => 'Yritys',
    'LBL_SHARE_LINKABLE' => 'Linkitettävissä',
    'LBL_SHARE_PUBLIC' => 'Kaikille avoin',

    // Web Services REST RSS
    'LBL_RSS_FEED' => 'RSS Feed',
    'LBL_RSS_RECORDS_FOUND' => 'Tietueita havaittu',
    'ERR_RSS_INVALID_INPUT' => 'RSS is not a valid input_type',
    'ERR_RSS_INVALID_RESPONSE' => 'RSS is not a valid response_type for this method',

    //External API Error Messages
    'ERR_GOOGLE_API_415' => 'Google Docs ei tue antamaasi tiedostomuotoa.',

    'LBL_EMPTY' => 'Tyhjä',
    'LBL_IS_EMPTY' => 'on tyhjä',
    'LBL_IS_NOT_EMPTY' => 'Ei ole tyhjä',
    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Tämä on tuonnin mallitiedosto, jota voidaan käyttää uutta tietoa tuodessa."
"Tiedosto on pilkuin eroteltu .csv-tiedosto,  lainausmerkkejä käytetään kentän merkkeinä."

"Otsikkorivi on ensimmäinen rivi ja sisältää kenttien nimet sovelluksessa."
"Näitä nimiä käytetään yhdistettäessä tiedoston tietoja sovelluksen kenttiin."

"Huom: tietokannan nimiä voidaan käyttää myös otsikkorivillä. Tämä on hyödyllistä käyttäessäsi phpMyAdminia tai muuta tietokanta työkalua."
"Sarakkeiden järjestystä ei ole kriittinen, sillä tuontiprosessi ohjaa tiedon otsikkorivien mukaan oikeisiin kenttiin."


"Käytä tätä tiedostoa mallina seuraavasti:" 
"1. Poista näytteen rivien tiedot" 
"2. Poista ohjeteksti, joita luet nyt"
"3. Syötä tuotavat tiedot oikeisiin sarakkeisiin"
"4. Tallenna tiedosto valitsemaasi kansioon"
"5. Klikkaa sovelluksen toiminnot-valikosta tuonti vaihtoehto  ja valitse ladattava tiedosto"
   ',
    //define labels to be used for overriding local values during import/export
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Vastuuhenkilö',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Vastuuhenkilö',
    'LBL_EXPORT_REPORTS_TO_ID' => 'Raportit ID',
    'LBL_EXPORT_FULL_NAME' => 'Koko nimi',
    'LBL_EXPORT_TEAM_ID' => 'Ryhmä ID',
    'LBL_EXPORT_TEAM_NAME' => 'Tiimit',
    'LBL_EXPORT_TEAM_SET_ID' => 'Ryhmän tunnus',

    'LBL_QUICKEDIT_NODEFS_NAVIGATION' => 'Navigating... ',

    'LBL_PENDING_NOTIFICATIONS' => 'Huomautukset',
    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_ADD_TEAM_ROW' => 'Lisää uusi ryhmärivi',
    'LBL_ALT_REMOVE_TEAM_ROW' => 'Poista ryhmä',
    'LBL_ALT_SPOT_SEARCH' => 'Kohdehaku',
    'LBL_ALT_SORT_DESC' => 'Lajittele laskevasti',
    'LBL_ALT_SORT_ASC' => 'Lajittele nousevasti',
    'LBL_ALT_SORT' => 'Järjestä',
    'LBL_ALT_SHOW_OPTIONS' => 'Näytä valinnat',
    'LBL_ALT_HIDE_OPTIONS' => 'Piilota  valinnat',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Siirrä valitut kohteet vasemmanpuoleiseen listaan',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Siirrä valitut kohteet oikeanpuoleiseen listaan',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Siirrä valittu kohde ylemmäs listalla',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Siirrä valittu kohde alemmass listalla',
    'LBL_ALT_INFO' => 'Tiedot',
    'MSG_DUPLICATE' => 'Olet luomassa {0} tietuetta joka voi olla kaksoiskappale {0}-tietueelle, joka on jo olemassa. {1} tietueita, jotka sisältävät samankaltaisia nimiä on lueteltu alla. <br>Luo {1} jatkaa {0} luomista  tai valitse olemassa oleva {0} alla olevista.',
    'MSG_SHOW_DUPLICATES' => 'Olet luomassa {0} tietuetta, joka voi olla kaksoiskappale olemassa olevalle tietueelle {0}. {1} tietueita, jotka sisältävät samankaltaisia nimiä on lueteltu alla.  Valitse Tallenna {0} luodaksesi uuden tai Peruuta palataksesi moduuliin luomatta {0}.',
    'LBL_EMAIL_TITLE' => 'Sähköposti',
    'LBL_EMAIL_OPT_TITLE' => 'Älä lähetä sähköpostia',
    'LBL_EMAIL_INV_TITLE' => 'virheellinen sähköpostiosoite',
    'LBL_EMAIL_PRIM_TITLE' => 'Ensisijainen sähköpostiosoite',
    'LBL_SELECT_ALL_TITLE' => 'Valitse kaikki',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Valitse tämä rivi',
    'LBL_TEAM_SELECTED_TITLE' => 'Ryhmä valittu',
    'LBL_TEAM_SELECT_AS_PRIM_TITLE' => 'Valitse tehdäksesi tästä ensisijainen ryhmä',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'VIRHE: Virhe lataamisen aikana. Virhekoodi: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'VIRHE: Virhe lataamisen aikana. Virhekoodi: {0} - {1}. Latauksen maksimikoko on {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'VIRHE: Virhe lataamisen aikana, pyydä apua järjestelmänvalvojalta.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Latauksen koko ({0} tavua) ylittää sallitun enimmäismäärän: {1} tavua',
    'UPLOAD_REQUEST_ERROR' => 'On tapahtunut virhe. Päivitä sivu ja yritä uudelleen.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Muokkaa',
    'LBL_EDIT_BUTTON_TITLE' => 'Muokkaa',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Monista',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikaatti',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Poista',
    'LBL_DELETE_BUTTON_TITLE' => 'Poista',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Tallenna',
    'LBL_SAVE_BUTTON_TITLE' => 'Tallenna',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Peruuta',
    'LBL_CANCEL_BUTTON_TITLE' => 'Peruuta',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',
    'LBL_GLOBAL_SEARCH_LNK_KEY' => '0',
    'LBL_KEYBOARD_SHORTCUTS_HELP_TITLE' => 'Pikanäppäimet',
    'LBL_KEYBOARD_SHORTCUTS_HELP' => '<p><strong>Form Functionality - Alt+</strong><br/> I = ed<b>I</b>t (detailview)<br/> U = d<b>U</b>plicate (detailview)<br/> D = <b>D</b>elete (detailview)<br/> A = s<b>A</b>ve (editview)<br/> L = cance<b>L</b> (editview) <br/><br/></p><p><strong>Search and Navigation  - Alt+</strong><br/> 7 = first input on Edit form<br/> 8 = Advanced Search link<br/> 9 = First Search Form input<br/> 0 = Unified search input<br></p>',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array {0} on määritetty väärin tai on tyhjä, eikä sitä voi käyttää.',
    'ERR_SUHOSIN' => 'Suhosin esti latauksen, lisää &quot;upload&quot; suhosin.executor.include.whitelist -tiedostoon (Katso yksityiskohdat suitecrm.log tiedostosta)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Virheellinen vastaus palvelimelta',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Tarjous',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Palvelun hinta',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuaalisesti',
        '5' => '5. minuutti',
        '15' => 'Joka 15. minuutti',
        '30' => 'Joka 30. minuutti',
        '60' => 'Joka tunti',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

);

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['library_type'] = array('Books' => 'Kirja', 'Music' => 'Musiikki', 'DVD' => 'DVD', 'Magazines' => 'Lehdet');
$app_list_strings['moduleList']['EmailAddresses'] = 'Ensisijainen sähköposti';
$app_list_strings['project_priority_default'] = 'Normaali';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Korkea',
    'Medium' => 'Normaali',
    'Low' => 'Matala',
);

$app_list_strings['kbdocument_status_dom'] = array(
    'Draft' => 'Luonnos',
    'Expired' => 'Vanhentunut',
    'In Review' => 'Tarkastettavana',
    'Published' => 'Julkaistu',
);

$app_list_strings['kbadmin_actions_dom'] =
    array(
        '' => '--Admin Actions--',
        'Create New Tag' => 'Luo uusi tagi',
        'Delete Tag' => 'Poisgta tagi',
        'Rename Tag' => 'Nimeä tagi uudelleen',
        'Move Selected Articles' => 'Siirrä valitut artikkelit',
        'Apply Tags On Articles' => 'Ota tagit käyttön artikkeleissa',
        'Delete Selected Articles' => 'Poista valitut artikkelit',
    );

$app_list_strings['kbdocument_attachment_option_dom'] =
    array(
        '' => '',
        'some' => 'Sisältää liitteitä',
        'none' => 'Ei mitään',
        'mime' => 'Mime Tyyppi',
        'name' => 'Nimi',
    );

$app_list_strings['moduleList']['KBDocuments'] = 'Tietokanta';
$app_strings['LBL_CREATE_KB_DOCUMENT'] = 'Create Article';
$app_list_strings['kbdocument_viewing_frequency_dom'] =
    array(
        '' => '',
        'Top_5' => 'Top 5',
        'Top_10' => 'Top 10',
        'Top_20' => 'Top 20',
        'Bot_5' => 'Bottom 5',
        'Bot_10' => 'Bottom 10',
        'Bot_20' => 'Bottom 20',
    );

$app_list_strings['kbdocument_canned_search'] =
    array(
        'all' => 'Kaikki',
        'added' => 'Lisätty viimeisen 30 päivän aikana',
        'pending' => 'Odottaa minun hyväksyntää',
        'updated' => 'Päivitetty viimeisen 30 aikana',
        'faqs' => 'FAQs',
    );
$app_list_strings['kbdocument_date_filter_options'] =
    array(
        '' => '',
        'on' => 'On',
        'before' => 'Ennen',
        'after' => 'Jälkeen',
        'between_dates' => 'Välillä',
        'last_7_days' => 'viimeiset 7 päivää',
        'next_7_days' => 'seuraavat 7 päivää',
        'last_month' => 'viimekuussa',
        'this_month' => 'Tässä kuussa',
        'next_month' => 'Seuraava kuukausi',
        'last_30_days' => 'viimeiset 30 pväivää',
        'next_30_days' => 'seuraavat 30 pväivää',
        'last_year' => 'edellinen vuosi',
        'this_year' => 'Tänävuonna',
        'next_year' => 'seuraavana vuonna',
        'isnull' => 'On tyhjä',
    );

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELGIUM',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
    'CEVLON' => 'CEVLON',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'CZECH REPUBLIC',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DENMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANCE',
    'FRENCH GUIANA' => 'FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREECE',
    'GREENLAND' => 'GREENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ICELAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRELAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALY',
    'IVORY COAST' => 'IVORY COAST',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, SOUTH',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITHUANIA',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MOROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORWAY',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTHER',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSIA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SOUTH AFRICA',
    'SOUTH YEMEN' => 'SOUTH YEMEN',
    'SPAIN' => 'SPAIN',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SWEDEN',
    'SWITZERLAND' => 'SWITZERLAND',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKEY',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'UNITED KINGDOM',
    'UPPER VOLTA' => 'UPPER VOLTA',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATICAN CITY',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'WESTERN SAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Ababa',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europe/London',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['moduleList']['Sugar_Favorites'] = 'Suosikit';
$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google kontaktit',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Pyyntö',
    2 => 'Käyttöoikeus',
    3 => 'Viallinen',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanja',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
);
$app_strings ['documentation'] = array(
    'LBL_DOCS' => 'Dokumentaatio',
    'ULT' => '02_Sugar_Ultimate',
    'ENT' => '02_Sugar_Enterprise',
    'CORP' => '03_Sugar_Corporate',
    'PRO' => '04_Sugar_Professional',
    'COM' => '05_Sugar_Community_Edition',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Tietokanta';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Luonnos';
$app_list_strings['aok_status_list']['Expired'] = 'Vanhentunut';
$app_list_strings['aok_status_list']['In_Review'] = 'Tarkastettavana';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Yksityinen';
$app_list_strings['aok_status_list']['published_public'] = 'Kaikille avoin';

$app_list_strings['moduleList']['FP_events'] = 'Tapahtumat';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Sijainnit';
$app_list_strings['invite_template_list'][''] = '';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Kutsuttu';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Ei kutsuttu';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Osallistui';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Ei osallistunut';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Hyväksytty';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Kieltäytynyt';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Ei vastausta';

$app_strings['LBL_STATUS_EVENT'] = 'Kutsun tila';
$app_strings['LBL_ACCEPT_STATUS'] = 'Hyväksynnän tila';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Valitse tämä sivu';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Valitse kaikki';
$app_strings['LBL_LISTVIEW_NONE'] = 'Poista kaikki valinnat';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indeksin tapahtuma';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeksi';

$app_list_strings['moduleList']['AOP_AOP_Case_Events'] = 'Palvelupyyntö tapahtumat';
$app_list_strings['moduleList']['AOP_AOP_Case_Updates'] = 'Palvelupyynnön päivitykset';
$app_list_strings['moduleList']['AOP_Case_Events'] = 'Palvelupyyntö tapahtumat';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Palvelupyynnön päivitykset';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Vastaa tämän rivin yläpuolelle ===';



//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Opened',
        'Closed' => 'Suljettu',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Uusi',
        'Open_Assigned' => 'Osoitettu',
        'Closed_Closed' => 'Suljettu',
        'Open_Pending Input' => 'Odottaa palautetta',
        'Closed_Rejected' => 'Hylätty',
        'Closed_Duplicate' => 'Duplikaatti',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Yksittäinen käyttäjä',
        'Account' => 'Tilin käyttäjä',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Käytä AOP -oletusta',
    'singleUser' => 'Yksittäinen käyttäjä',
    'roundRobin' => 'Kiertovuorottelu',
    'leastBusy' => 'Vähiten varattu',
    'random' => 'Satunnainen',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raportit';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Raportin hakuehdot';
$app_list_strings['moduleList']['AOR_Charts'] = 'Raporttikuvaajat';
$app_list_strings['moduleList']['AOR_Fields'] = 'Raporttiin tulevat kentät';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Ajastetut raportit';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Erisuuri kuin';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Suurempi kuin';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Pienempi kuin';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Suurempi tai yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Pienempi tai yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Contains'] = 'Sisältää';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Alkaa';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Päättyy';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'V-k-p';
$app_list_strings['aor_format_options']['Ymd'] = 'Vkp';
$app_list_strings['aor_format_options']['Y-m'] = 'V-k';
$app_list_strings['aor_format_options']['d/m/Y'] = 'p/k/V';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'ja';
$app_list_strings['aor_condition_operator_list']['OR'] = 'TAI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Arvo';
$app_list_strings['aor_condition_type_list']['Field'] = 'Kenttä';
$app_list_strings['aor_condition_type_list']['Date'] = 'Pvm';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Yksi kohteista';
$app_list_strings['aor_condition_type_list']['Period'] = 'Kausi';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Nykyinen käyttäjä';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuutit';
$app_list_strings['aor_date_type_list']['hour'] = 'Tuntia';
$app_list_strings['aor_date_type_list']['day'] = 'Päivää';
$app_list_strings['aor_date_type_list']['week'] = 'Viikkoa';
$app_list_strings['aor_date_type_list']['month'] = 'Kuukautta';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Aukioloaika';
$app_list_strings['aor_date_options']['now'] = 'Nyt';
$app_list_strings['aor_date_options']['field'] = 'Tämä kenttä';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Nouseva';
$app_list_strings['aor_sort_operator']['DESC'] = 'Laskeva';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Lukumäärä';
$app_list_strings['aor_function_list']['MIN'] = 'Vähintään';
$app_list_strings['aor_function_list']['MAX'] = 'Enintään';
$app_list_strings['aor_function_list']['SUM'] = 'Summa';
$app_list_strings['aor_function_list']['AVG'] = 'Keskiarvo';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Lukumäärä';
$app_list_strings['aor_total_options']['SUM'] = 'Summa';
$app_list_strings['aor_total_options']['AVG'] = 'Keskiarvo';
$app_list_strings['aor_chart_types']['bar'] = 'Pylväskaavio';
$app_list_strings['aor_chart_types']['line'] = 'Viivakaavio';
$app_list_strings['aor_chart_types']['pie'] = 'Piiraskaavio';
$app_list_strings['aor_chart_types']['radar'] = 'Säteittäinen kaavio';
$app_list_strings['aor_chart_types']['polar'] = 'Polaarikaavio';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Kuukausittain';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Viikoittain';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Päivittäin';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktiivinen';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Ei aktiivinen';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Sähköpostit';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Käyttäjä';
$app_list_strings['aor_email_type_list']['Users'] = 'Käyttäjät';
$app_list_strings['aor_assign_options']['all'] = 'KAIKKI käyttäjät';
$app_list_strings['aor_assign_options']['role'] = 'KAIKKI käyttäjät, joiden rooli on';
$app_list_strings['aor_assign_options']['security_group'] = 'KAIKKI käyttäjät Turvaryhmässä';
$app_list_strings['date_time_period_list']['today'] = 'Tänään';
$app_list_strings['date_time_period_list']['yesterday'] = 'Eilen';
$app_list_strings['date_time_period_list']['this_week'] = 'Tällä viikolla';
$app_list_strings['date_time_period_list']['last_week'] = 'Viime viikko';
$app_list_strings['date_time_period_list']['last_month'] = 'viimekuussa';
$app_list_strings['date_time_period_list']['this_month'] = 'Tässä kuussa';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Tämä kvartaali';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Viime kvartaali';
$app_list_strings['date_time_period_list']['this_year'] = 'Tänä vuonna';
$app_list_strings['date_time_period_list']['last_year'] = 'Viime vuonna';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = ' ';
$app_strings['LBL_CRON_AT'] = ' ';
$app_strings['LBL_CRON_RAW'] = 'Edistynyt';
$app_strings['LBL_CRON_MIN'] = 'Minuutti';
$app_strings['LBL_CRON_HOUR'] = 'Tunti';
$app_strings['LBL_CRON_DAY'] = 'Päivä';
$app_strings['LBL_CRON_MONTH'] = 'Kuukausi';
$app_strings['LBL_CRON_DOW'] = 'Arkipäivinä';
$app_strings['LBL_CRON_DAILY'] = 'Päivittäin';
$app_strings['LBL_CRON_WEEKLY'] = 'Viikoittain';
$app_strings['LBL_CRON_MONTHLY'] = 'Kuukausittain';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Sopimukset';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Laskut';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Tuotteet';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Tuotteet , tarjoukset';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Tuoterivien ryhmät';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Tarjoukset';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyytikko';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Kilpailija';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Asiakas';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integraattori';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Sijoittaja';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Yhteistyökumppani';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Lehdistö';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Jälleenmyyjä';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Muu';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Luonnos';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Neuvottelu';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Toimitettu';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Pidossa';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Vahvistettu';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'suljettu, hyväksytty';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Suljettu, hävitty';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Suljettu, kuollut';
$app_list_strings['quote_term_dom']['Net 15'] = '15 päivää netto';
$app_list_strings['quote_term_dom']['Net 30'] = '30 päivää netto';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Hyväksytty';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Hylätty';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '9.0';
$app_list_strings['vat_list']['7.5'] = '13.0';
$app_list_strings['vat_list']['17.5'] = '23.0';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Prosentti';
$app_list_strings['discount_list']['Amount'] = 'Summa';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyytikko';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Kilpailija';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Asiakas';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integraattori';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Sijoittaja';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Yhteistyökumppani';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Lehdistö';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Jälleenmyyjä';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Muu';
$app_list_strings['invoice_status_dom']['Paid'] = 'Maksettu';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'MAksamatta';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Peruutettu';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Ei laskutettu';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Laskutettu';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Kannettavat tietokoneet';
$app_list_strings['product_category_dom']['Desktops'] = 'Pöytäkoneet';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Tuote';
$app_list_strings['product_type_dom']['Service'] = 'Palvelu';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Tarjoukset';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Laskut';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Sopimukset';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Tarjoukset';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Laskut';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Sopimukset';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Accounts';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontaktit';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Liidit';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Ei aloitettu';
$app_list_strings['contract_status_list']['In Progress'] = 'Käynnissä';
$app_list_strings['contract_status_list']['Signed'] = 'Allekirjoitettu';
$app_list_strings['contract_type_list']['Type'] = 'Tyyppi';
$app_strings['LBL_GENERATE_LETTER'] = 'Generoi kirje';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Ole hyvä ja valitse mallipohja';
$app_strings['LBL_NO_TEMPLATE'] = 'VIRHE\nMallipohjia ei löytynyt.\nOle hyvä ja mene PDF-pohjat moduuliin ja luo uusi';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Työnkulku';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Työnkulun ehdot';
$app_list_strings['moduleList']['AOW_Processed'] = 'Prosessin tarkistus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Työnkulun toiminnot';
$app_list_strings['aow_status_list']['Active'] = 'Aktiivinen';
$app_list_strings['aow_status_list']['Inactive'] = 'Ei aktiivinen';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Yhtäsuuri kuin';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Erisuuri kuin';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Suurempi kuin';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Pienempi kuin';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Suurempi tai yhtäsuuri kuin';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Pienempi tai yhtäsuuri kuin';
$app_list_strings['aow_operator_list']['Contains'] = 'Sisältää';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Alkaa';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Päättyy';
$app_list_strings['aow_operator_list']['is_null'] = 'On tyhjä';
$app_list_strings['aow_sql_operator_list']['Equal_To'] = '=';
$app_list_strings['aow_sql_operator_list']['Not_Equal_To'] = '!=';
$app_list_strings['aow_sql_operator_list']['Greater_Than'] = '>';
$app_list_strings['aow_sql_operator_list']['Less_Than'] = '<';
$app_list_strings['aow_sql_operator_list']['Greater_Than_or_Equal_To'] = '>=';
$app_list_strings['aow_sql_operator_list']['Less_Than_or_Equal_To'] = '<=';
$app_list_strings['aow_sql_operator_list']['Contains'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Starts_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['Ends_With'] = 'LIKE';
$app_list_strings['aow_sql_operator_list']['is_null'] = 'IS NULL';
$app_list_strings['aow_process_status_list']['Complete'] = 'Valmis';
$app_list_strings['aow_process_status_list']['Running'] = 'Menossa';
$app_list_strings['aow_process_status_list']['Pending'] = 'Odottaa';
$app_list_strings['aow_process_status_list']['Failed'] = 'Epäonnistunut';
$app_list_strings['aow_condition_operator_list']['And'] = 'ja';
$app_list_strings['aow_condition_operator_list']['OR'] = 'TAI';
$app_list_strings['aow_condition_type_list']['Value'] = 'Arvo';
$app_list_strings['aow_condition_type_list']['Field'] = 'Kenttä';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Mikä tahansa muutos';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Turvallisuusryhmässä';
$app_list_strings['aow_condition_type_list']['Date'] = 'Pvm';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Yksi kohteista';
$app_list_strings['aow_action_type_list']['Value'] = 'Arvo';
$app_list_strings['aow_action_type_list']['Field'] = 'Kenttä';
$app_list_strings['aow_action_type_list']['Date'] = 'Pvm';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Kiertovuorottelu';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Vähiten varattu';
$app_list_strings['aow_action_type_list']['Random'] = 'Satunnainen';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Arvo';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Kenttä';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuutit';
$app_list_strings['aow_date_type_list']['hour'] = 'Tuntia';
$app_list_strings['aow_date_type_list']['day'] = 'Päivää';
$app_list_strings['aow_date_type_list']['week'] = 'Viikkoa';
$app_list_strings['aow_date_type_list']['month'] = 'Kuukautta';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Aukioloaika';
$app_list_strings['aow_date_options']['now'] = 'Nyt';
$app_list_strings['aow_date_options']['today'] = 'Tänään';
$app_list_strings['aow_date_options']['field'] = 'Tämä kenttä';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'KAIKKI käyttäjät';
$app_list_strings['aow_assign_options']['role'] = 'KAIKKI käyttäjät, joiden rooli on';
$app_list_strings['aow_assign_options']['security_group'] = 'KAIKKI käyttäjät Turvaryhmässä';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Sähköpostit';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Tietueen sähköposti';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Liittyvä kenttä';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Käyttäjä';
$app_list_strings['aow_email_type_list']['Users'] = 'Käyttäjät';
$app_list_strings['aow_email_to_list']['to'] = 'Vastaanottaja:';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopio';
$app_list_strings['aow_email_to_list']['bcc'] = 'Piilokopio';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Kaikki tietueet';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Uudet tietueet';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Muokatut tietueet';
$app_list_strings['aow_run_when_list']['Always'] = 'aina';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Vain tallennettaessa';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Vain ajoitettaessa';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Projektin tehtävän mallit';
$app_list_strings['relationship_type_list']['FS'] = 'Lopusta alkuun';
$app_list_strings['relationship_type_list']['SS'] = 'Alusta alkuun';
$app_list_strings['moduleList']['AM_ProjectHolidays'] = 'Projektin lomapäivät';
$app_list_strings['holiday_resource_dom']['Contacts'] = 'Kontaktit';
$app_list_strings['holiday_resource_dom']['Users'] = 'Käyttäjät';
$app_list_strings['duration_unit_dom']['Days'] = 'Päivää';
$app_list_strings['duration_unit_dom']['Hours'] = 'Tuntia';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Katso Gantt-kaavio';
$app_strings['LBL_GANTT_BUTTON_TITLE'] = 'Katso Gantt-kaavio';
$app_strings['LBL_CREATE_PROJECT'] = 'Luo projekti';

//gmaps
$app_strings['LBL_MAP'] = 'Kartta';
$app_strings['LBL_MAPS'] = 'Kartat';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Pituuspiiri';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Leveyspiiri';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocoden tila';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Osoite';
$app_strings['LBL_BUG_FIX'] = 'Virheenkorjaus';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kartat';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['map_unit_type_list']['mi'] = 'Mailit';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometrit';

$app_list_strings['map_module_type_list']['Accounts'] = 'Accounts';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontaktit';
$app_list_strings['map_module_type_list']['Cases'] = 'Palvelupyynnöt';
$app_list_strings['map_module_type_list']['Leads'] = 'Liidit';
$app_list_strings['map_module_type_list']['Meetings'] = 'Tapaamiset';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Myyntimahdollisuudet';
$app_list_strings['map_module_type_list']['Project'] = 'Projektit';
$app_list_strings['map_module_type_list']['Prospects'] = 'Prospektit';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Asiakkaat';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakti';
$app_list_strings['map_relate_type_list']['Cases'] = 'Palvelupyynnöt';
$app_list_strings['map_relate_type_list']['Leads'] = 'Liidit';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Tapaamiset';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Myyntimahdollisuudet';
$app_list_strings['map_relate_type_list']['Project'] = 'Projektit';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Prospektit';

$app_list_strings['marker_image_list']['accident'] = 'Tapahtuma';
$app_list_strings['marker_image_list']['administration'] = 'Ylläpito';
$app_list_strings['marker_image_list']['agriculture'] = 'Maatalous';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Lentokone pieni';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Lentoturismia';
$app_list_strings['marker_image_list']['airport'] = 'Lentokenttä';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphiteatteri';
$app_list_strings['marker_image_list']['apartment'] = 'Huoneisto';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvaario';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Pankki';
$app_list_strings['marker_image_list']['bank_euro'] = 'Europankki';
$app_list_strings['marker_image_list']['bank_pound'] = 'Puntapankki';
$app_list_strings['marker_image_list']['bar'] = 'Baari';
$app_list_strings['marker_image_list']['beach'] = 'Ranta';
$app_list_strings['marker_image_list']['beautiful'] = 'Kaunis';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Polkupyöräpysäköinti';
$app_list_strings['marker_image_list']['big_city'] = 'Suuri kaupunki';
$app_list_strings['marker_image_list']['bridge'] = 'Silta';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderni museo';
$app_list_strings['marker_image_list']['bus'] = 'Bussi';
$app_list_strings['marker_image_list']['cable_car'] = 'Kaapelivaunu';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Autovuokraamo';
$app_list_strings['marker_image_list']['carrepair'] = 'Autokorjaamo';
$app_list_strings['marker_image_list']['castle'] = 'Linna';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedraali';
$app_list_strings['marker_image_list']['chapel'] = 'Kappeli';
$app_list_strings['marker_image_list']['church'] = 'Kirkko';
$app_list_strings['marker_image_list']['city_square'] = 'Kaupungin keskusta';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Coffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Yritys';
$app_list_strings['marker_image_list']['conference'] = 'Konfferenssi';
$app_list_strings['marker_image_list']['construction'] = 'Rakennusteollisuus';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Pyöräily';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['days_dim'] = 'Days Dim';
$app_list_strings['marker_image_list']['days_dom'] = 'Days Dom';
$app_list_strings['marker_image_list']['days_jeu'] = 'Days Jeu';
$app_list_strings['marker_image_list']['days_jue'] = 'Days Jue';
$app_list_strings['marker_image_list']['days_lun'] = 'Days Lun';
$app_list_strings['marker_image_list']['days_mar'] = 'Days Mar';
$app_list_strings['marker_image_list']['days_mer'] = 'Days Mer';
$app_list_strings['marker_image_list']['days_mie'] = 'Days Mie';
$app_list_strings['marker_image_list']['days_qua'] = 'Days Qua';
$app_list_strings['marker_image_list']['days_qui'] = 'Days Qui';
$app_list_strings['marker_image_list']['days_sab'] = 'Days Sab';
$app_list_strings['marker_image_list']['days_sam'] = 'Days Sam';
$app_list_strings['marker_image_list']['days_seg'] = 'Days Seg';
$app_list_strings['marker_image_list']['days_sex'] = 'Days Sex';
$app_list_strings['marker_image_list']['days_ter'] = 'Days Ter';
$app_list_strings['marker_image_list']['days_ven'] = 'Days Ven';
$app_list_strings['marker_image_list']['days_vie'] = 'Days Vie';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment Store';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Falling Rocks';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forest';
$app_list_strings['marker_image_list']['fountain'] = 'Fountain';
$app_list_strings['marker_image_list']['friday'] = 'Perjantai';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Etusivu';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Library';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Maanantai';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palace';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Kuva';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Portti';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Rain';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Ravintola';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant African';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fish';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Greek';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japanese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Korean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterranean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turkish';
$app_list_strings['marker_image_list']['right'] = 'Right';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Oikealle sitten ylös';
$app_list_strings['marker_image_list']['satursday'] = 'Lauantai';
$app_list_strings['marker_image_list']['school'] = 'Koulu';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Sight';
$app_list_strings['marker_image_list']['small_city'] = 'Small City';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Nopeus 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Nopeus 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Nopeus 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Nopeus 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Nopeus 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Nopeus 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Nopeus 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Nopeus 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Nopeus 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Nopeus 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Nopeus 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Nopeus 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam Train';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'su';
$app_list_strings['marker_image_list']['sunday'] = 'Sunnuntai';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarketti';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Puhelin';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'Torstai';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Juna';
$app_list_strings['marker_image_list']['tram'] = 'Raitiovaunu';
$app_list_strings['marker_image_list']['truck'] = 'Kuorma-auto';
$app_list_strings['marker_image_list']['tuesday'] = 'Tiistai';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Käänny vasemmalle';
$app_list_strings['marker_image_list']['turn_right'] = 'Käänny oikealle';
$app_list_strings['marker_image_list']['university'] = 'Yliopisto';
$app_list_strings['marker_image_list']['up'] = 'Ylös';
$app_list_strings['marker_image_list']['up_left'] = 'Ylävasemmalle';
$app_list_strings['marker_image_list']['up_right'] = 'Yläoikealle';
$app_list_strings['marker_image_list']['up_then_left'] = 'Ylös ja vasemmalle';
$app_list_strings['marker_image_list']['up_then_right'] = 'Ylös ja oikealle';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'Keskiviikko';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Eläintarha';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Poissa toimistolta';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Kokousessa';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Valitse uusi ajankohta';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Syötä tiedot uudesta ajankohdasta';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Pvm:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Syy:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Syötä päivämäärä oikein';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Valitse syy';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Valitse uusi ajankohta';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Aiemmat soittoyritykset';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Soittoyritykset';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Turvaryhmien hallinta';
$app_strings['LBL_LOGIN_AS'] = 'Kirjaudu nimellä';
$app_strings['LBL_LOGOUT_AS'] = 'Kirjaudu ulos nimellä';
$app_strings['LBL_SECURITYGROUP'] = 'Turvaryhmä';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_FACEBOOK_USER_C'] = 'Facebook-käyttäjä';
$app_strings['LBL_TWITTER_USER_C'] = 'Twitter käyttäjä';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sosiaalisen syötteen yksityiskohdat';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Suodata';

$app_strings['LBL_QUICK_ACCOUNT'] = 'Luo asiakas';
$app_strings['LBL_QUICK_CONTACT'] = 'Luo kontakti';
$app_strings['LBL_QUICK_OPPORTUNITY'] = 'Luo myyntimahdollisuus';
$app_strings['LBL_QUICK_LEAD'] = 'Luo liidi';
$app_strings['LBL_QUICK_DOCUMENT'] = 'Luo dokumentti';
$app_strings['LBL_QUICK_CALL'] = 'Kirjaa puhelu';
$app_strings['LBL_QUICK_TASK'] = 'Luo tehtävä';
$app_strings['LBL_COLLECTION_TYPE'] = 'Tyyppi';

$app_strings['LBL_ADD_TAB'] = 'Lisää välilehti';
$app_strings['LBL_EDIT_TAB'] = 'Muokkaa välilehtiä';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRMn kojelauta';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Anna kojelaudan nimi:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Sarakkeiden määrä:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Haluatko varmasti poistaa';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'kojelaudan?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Lisää kojelaudan sivu';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Poista nykyinen kojelaudan sivu';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Nimeä kojelaudan sivu uudelleen';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Toiminnot';
$app_strings['LBL_DISCOVER_SUITECRM'] = 'Tutustu SuiteCRM:ään';

$app_list_strings['collection_temp_list'] = array('Tasks' => 'Tehtävät', 'Meetings' => 'Tapaamiset', 'Calls' => 'Puhelut', 'Notes' => 'Muistiot', 'Emails' => 'Sähköpostit');

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Myynti',
    'getAccountsSpotsData' => 'Accounts',
    'getLeadsSpotsData' => 'Liidit',
    'getServiceSpotsData' => 'Palvelu',
    'getMarketingSpotsData' => 'Markkinointi',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktiviteetit',
    'getQuotesSpotsData' => 'Tarjoukset'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Aukioloaika';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'Maanantai';
$app_list_strings['day_list']['Tuesday'] = 'Tiistai';
$app_list_strings['day_list']['Wednesday'] = 'Keskiviikko';
$app_list_strings['day_list']['Thursday'] = 'Torstai';
$app_list_strings['day_list']['Friday'] = 'Perjantai';
$app_list_strings['day_list']['Saturday'] = 'Lauantai';
$app_list_strings['day_list']['Sunday'] = 'Sunnuntai';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Pysty';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Vaaka';