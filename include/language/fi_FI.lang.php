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



$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Suomi (Finnish) - fi_FI',
    'moduleList' => array(
        'Home' => 'Etusivu',
        'ResourceCalendar' => 'Resurssikalenteri',
        'Contacts' => 'Kontaktit',
        'Accounts' => 'Asiakkaat',
        'Alerts' => 'Hälytykset',
        'Opportunities' => 'Myyntimahdollisuudet',
        'Cases' => 'Palvelupyynnöt',
        'Notes' => 'Muistiot',
        'Calls' => 'Puhelut',
        'TemplateSectionLine' => 'Mallin osion rivi',
        'Calls_Reschedule' => 'Soittojen uudelleenaikataulutus',
        'Emails' => 'Sähköpostit',
        'EAPM' => 'EAPM',
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
        'EmailTemplates' => 'Sähköpostimallit',
        'ProspectLists' => 'Kohteet - Listat',
        'SavedSearch' => 'Tallennetut haut',
        'UpgradeWizard' => 'PäivitysWelho',
        'Trackers' => 'Seurantakoodit',
        'TrackerSessions' => 'Seurantakoodien istunnot',
        'TrackerQueries' => 'Seurantakoodien kyselyt',
        'FAQ' => 'UKK',
        'Newsletters' => 'Uutiskirjeet',
        'SugarFeed' => 'SuiteCRM syöte',
        'SugarFavorites' => 'SuiteCRM suosikit',

        'OAuthKeys' => 'OAuth käyttäjän avaimet',
        'OAuthTokens' => 'OAuth valtuudet',
        'OAuth2Clients' => 'OAuth-asiakasohjelmat',
        'OAuth2Tokens' => 'OAuth valtuudet',
    ),

    'moduleListSingular' => array(
        'Home' => 'Etusivu',
        'Dashboard' => 'Tietopaneeli',
        'Contacts' => 'Kontakti',
        'Accounts' => 'Asiakas',
        'Opportunities' => 'Myyntimahdollisuus',
        'Cases' => 'Palvelupyyntö',
        'Notes' => 'Muistio',
        'Calls' => 'Puhelu',
        'Emails' => 'Sähköposti',
        'EmailTemplates' => 'Viestipohja',
        'Meetings' => 'Tapaaminen',
        'Tasks' => 'Tehtävä',
        'Calendar' => 'Kalenteri',
        'Leads' => 'Liidi',
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
        'Utilities' => 'Palvelut',
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
    'language_dom' => array(
        'af' => 'Afrikaans',
        'ar-EG' => 'Arabia, Egypti',
        'ar-SA' => 'Arabia, Saudi-Arabia',
        'az' => 'Azeri',
        'bg' => 'Bulgaria',
        'bn' => 'Bengali',
        'bs' => 'Bosnia',
        'ca' => 'Katalaani',
        'ceb' => 'Cebuano',
        'cs' => 'Tšekki',
        'da' => 'Tanska',
        'de' => 'Saksa',
        'de-CH' => 'Sveitsin Saksa',
        'el' => 'Kreikka',
        'en-GB' => 'Englanti, Iso-Britannia',
        'en-US' => 'Englanti, Yhdysvallat',
        'es-ES' => 'Espanja',
        'es-MX' => 'Espanja, Meksiko',
        'es-PY' => 'Espanja, Paraguay',
        'es-VE' => 'Espanja, Venezuela',
        'et' => 'Eesti',
        'eu' => 'Baski',
        'fa' => 'Persia',
        'fi' => 'Filippiini',
        'fil' => 'Suomi',
        'fr' => 'Ranska',
        'fr-CA' => 'Ranska, Kanada',
        'gu-IN' => 'Gujarati',
        'he' => 'Heprea',
        'hi' => 'Hindi',
        'hr' => 'Kroaatti',
        'hu' => 'Unkari',
        'hy-AM' => 'Armenia',
        'id' => 'Indonesian kieli',
        'it' => 'Italia',
        'ja' => 'Japani',
        'ka' => 'Georgia',
        'ko' => 'Korea',
        'lt' => 'Liettua',
        'lv' => 'Latvia',
        'mk' => 'Makedonia',
        'nb' => 'Bokmål (Norja)',
        'nl' => 'Hollanti',
        'pcm' => 'Nigerian pidgin-kieli',
        'pl' => 'Puola',
        'pt-BR' => 'Portugali (Brasilia)',
        'pt-PT' => 'Portugali',
        'ro' => 'Romania',
        'ru' => 'Venäjä',
        'si-LK' => 'Sinhala',
        'sk' => 'Slovakki',
        'sl' => 'Sloveeni',
        'sq' => 'Albania',
        'sr-CS' => 'Serbia (latinalainen)',
        'sv-SE' => 'Ruotsi',
        'th' => 'Thai',
        'tl' => 'Tagalog',
        'tr' => 'Turkki',
        'uk' => 'Ukraina',
        'ur-IN' => 'Urdu (Intia)',
        'ur-PK' => 'Urdu (Pakistan)',
        'vi' => 'Vietnami',
        'yo' => 'Joruba',
        'zh-CN' => 'Kiina (yksinkertaistettu)',
        'zh-TW' => 'Kiina (perinteinen)',
        'other' => 'Muu',
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
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospektointi',
        'Qualification' => 'Arviointi',
        'Needs Analysis' => 'Tarveanalyysi',
        'Value Proposition' => 'Arvolupaus',
        'Id. Decision Makers' => 'Tunnistetaan päätöksen tekijät',
        'Perception Analysis' => 'Havaintoanalyysi',
        'Proposal/Price Quote' => 'Tarjous/Tarjouspyyntö',
        'Negotiation/Review' => 'Neuvottelu',
        'Closed Won' => 'Suljettu, voitettu',
        'Closed Lost' => 'Suljettu, hävitty',
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
        'Miss' => 'Neiti',
        'Dr.' => 'Tri.',
        'Prof.' => 'Prof.',
    ),
    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuutti ennen',
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
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Code',
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

    'activity_status_type_dom' => array(
        '' => '--Ei mitään--',
        'active' => 'Aktiivinen',
        'inactive' => 'Ei aktiivinen',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Asiakkaat',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Asiakas',
        'Opportunities' => 'Myyntimahdollisuus',
        'Cases' => 'Palvelupyyntö',
        'Leads' => 'Liidit',
        'Contacts' => 'Kontakti', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Bugien seuranta',
        'Project' => 'Projektit',

        'Prospects' => 'Prospektit',
        'ProjectTask' => 'Projektitehtävät',

        'Tasks' => 'Tehtävä',

    ),
// PR 4606
    'record_type_display_notes' => array(
        'Accounts' => 'Asiakas',
        'Contacts' => 'Kontakti',
        'Opportunities' => 'Myyntimahdollisuus',
        'Campaigns' => 'Kampanjat',
        'Tasks' => 'Tehtävä',
        'Emails' => 'Sähköposti',

        'Bugs' => 'Bugien seuranta',
        'Project' => 'Projektit',
        'ProjectTask' => 'Projektitehtävät',
        'Prospects' => 'Prospektit',
        'Cases' => 'Palvelupyyntö',
        'Leads' => 'Liidit',

        'Meetings' => 'Tapaamiset',
        'Calls' => 'Puhelu',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Asiakas',
        'Contacts' => 'Kontakti',
        'Tasks' => 'Tehtävä',
        'Opportunities' => 'Myyntimahdollisuus',

        'Bugs' => 'Bugien seuranta',
        'Cases' => 'Palvelupyyntö',
        'Leads' => 'Liidit',

        'Project' => 'Projektit',
        'ProjectTask' => 'Projektitehtävät',

        'Prospects' => 'Prospektit',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Tarjoukset',
        'AOS_Invoices' => 'Laskut',
        'AOS_Contracts' => 'Sopimukset',
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
        'InboundEmail' => 'Sähköposti',
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
        'Dashboard' => 'Tietopaneeli',
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

    'dom_email_server_type' => array(
        '' => '--Ei mitään--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Ei mitään--',
        'createcase' => 'Luo Palvelupyyntö',
        'bounce' => 'Palautuneiden käsittely',
    ),
    'dom_email_distribution' => array(
        '' => '--Ei mitään--',
        'direct' => 'Suora määrittäminen',
        'roundRobin' => 'Kiertovuorottelu',
        'leastBusy' => 'Vähiten varattu',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Tosi',
        'bool_false' => 'Epätosi',
    ),
    'dom_int_bool' => array(
        1 => 'Kyllä',
        0 => 'Ei',
    ),
    'dom_switch_bool' => array(
        'on' => 'Kyllä',
        'off' => 'Ei',
        '' => '--None--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM sähköposti Client',
        'mailto' => 'Muu sähköposti Client',
    ),

    'dom_editor_type' => array(
        'none' => 'Suora HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => '--None--',
        'html' => 'HTML',
        'plain' => 'Pelkkä teksti',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Ei suoritettu',
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
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Markkinointi',
        'Knowledege Base' => 'Tietokanta',
        'Sales' => 'Myynti',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arkistoitu',
        // TODO: add more categories here...
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
        'mailmerge' => 'Joukkopostitus',
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
    'duration_intervals' => array(
        '0' => '00',
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


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Oletus',
        'seed' => 'Siemenvaihe',
        'exempt_domain' => 'Rajoitettu - domainin perusteella',
        'exempt_address' => 'Rajoitettu - s-postiosoitteiden perusteella',
        'exempt' => 'Rajoitettu - tunnuksen perusteella',
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

    'custom_fields_merge_dup_dom' => array(
        0 => 'Ei käytössä',
        1 => 'Käytössä',
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
    // PR 6009
    'inboundmail_assign_replies_to_admin' => array(
        'donothing' => 'Älä tee mitään',
        'repliedtoowner' => 'Replied to Email Owner',
        'recordowner' => 'Associated Record Owner',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results', // PR 6522
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.', // PR 6522
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.', // PR 6522
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in', // PR 6522
    'LBL_EMAIL_CODE' => 'Email Code:',
    'LBL_SEND' => 'Lähetä',
    'LBL_LOGOUT' => 'Kirjaudu ulos',
    'LBL_TOUR_NEXT' => 'Seuraava',
    'LBL_TOUR_SKIP' => 'Ohita',
    'LBL_TOUR_BACK' => 'Takaisin',
    'LBL_TOUR_TAKE_TOUR' => 'Tutustu',
    'LBL_MOREDETAIL' => 'Lisää tietoja' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Muokkaa näkymää' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Katso' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Suodata' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Lisää sähköpostiosoite' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Piilota/Näytä' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Tyhjennä' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Käyntikortti/vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Poista' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Poista sähköpostiosoite' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Hyväksynnän peruutus',
    'LBL_ID_FF_OPT_IN' => 'Hyväksyntä',
    'LBL_ID_FF_INVALID' => 'Tee kelpaamattomaksi',
    'LBL_ADD' => 'Lisää' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Yrityslogo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Konnektorien popupit',
    'LBL_CLOSEINLINE' => 'Sulje',
    'LBL_VIEWINLINE' => 'Katso',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Tulosta',
    'LBL_HELP' => 'Apua',
    'LBL_ID_FF_SELECT' => 'Valitse',
    'DEFAULT' => 'Oletus', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SORT' => 'Järjestä',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Käytä SMTP suojatulla yhteydellä (SSL/TLS)?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Yhtään toimintoa ei ole käytettävissä',
    'LBL_NO_DATA' => 'Ei tietueita',

    'LBL_ERROR_UNDEFINED_BEHAVIOR' => 'Tapahtui odottamaton virhe.', //PR 3669
    'LBL_ERROR_UNHANDLED_VALUE' => 'A value has not been handled correctly which is preventing a process from continuing.', //PR 3669
    'LBL_ERROR_UNUSABLE_VALUE' => 'An unusable value was found which is preventing a process from continuing.', //PR 3669
    'LBL_ERROR_INVALID_TYPE' => 'The type of a value is different than what was expected.', //PR 3669

    'LBL_ROUTING_FLAGGED' => 'Merkattu',
    'LBL_NOTIFICATIONS' => 'Huomautukset',

    'LBL_ROUTING_TO' => 'Vastaanottaja',
    'LBL_ROUTING_TO_ADDRESS' => 'Vastaanottajan osoite',
    'LBL_ROUTING_WITH_TEMPLATE' => 'Mallipohjan kanssa',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Tietue sisältää tällä hetkellä Puhelin ja Osoite-kenttien arvot. Korvaa arvot valitsemasi tilin Puhelin ja Osoite-kentillä, valitsemalla "OK". Jos haluat säilyttää nykyiset arvot, valitse "Peruuta".',
    'LBL_DROP_HERE' => '[Pudota tähän]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Esitäytä Gmail&#153; oletukset',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nimi',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Lähtevän postin asetukset',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP salasana',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Portti',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP palvelin',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP käyttäjätunnus',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Oletus',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Varoitus: Salasana ja käyttäjätunnus puuttuu lähtevää postia varten.',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Aseta sähköpostitili, jotta voit tarkastella saapuneita viestejä.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Anna SMTP mail palvelimen tiedot lähetettäville viesteille.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Valmis',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Tyhjennä',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Vastaanottaja:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Kopio:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Piilokopio:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Vast.Ottaja/Kopio/Piilokopio',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Sähköpostiosoitteet',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Suodata',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nimi',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Osoitetta ei löytynyt',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Tallenna ja lisää osoitekirjaan',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Valitse vastaanottaja',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Osoitekirja',
    'LBL_EMAIL_REPORTS_TITLE' => 'Raportit',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Varoitus! Yrität poistaa lähtevien tilin joka on liitetty saapuvien tiliin.  Haluatko varmasti jatkaa?',
    'LBL_EMAIL_ADDRESSES' => 'Sähköpostiosoitteet',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Ensisijainen sähköposti',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Olet antanut markkinointihyväksynnän sähköpostiosoitteellesi: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Sähköpostiosoitetta ei voitu varmentaa',
    'LBL_EMAIL_ARCHIVE_TO_SUGAR' => 'Tuo SuiteCRM:ään',
    'LBL_EMAIL_ASSIGNMENT' => 'Toimeksianto',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Liitä',
    'LBL_EMAIL_ATTACHMENT' => 'Liitä',
    'LBL_EMAIL_ATTACHMENTS' => 'Omalta koneelta',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM tiedostoista',
    'LBL_EMAIL_ATTACHMENTS3' => 'Mallipohjaliitteet',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Tiedosto',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentti',
    'LBL_EMAIL_BCC' => 'Piilokopio',
    'LBL_EMAIL_CANCEL' => 'Peruuta',
    'LBL_EMAIL_CC' => 'Kopio',
    'LBL_EMAIL_CHARSET' => 'Merkistökoodaus',
    'LBL_EMAIL_CHECK' => 'Tarkasta viestit',
    'LBL_EMAIL_CHECKING_NEW' => 'Haetaan uusia viestejä',
    'LBL_EMAIL_CHECKING_DESC' => 'Hetkinen... <br><br>Jos tarkastat viestejä ensimmäistä kertaa saattaa tarkistus kestää jonkin aikaa.',
    'LBL_EMAIL_CLOSE' => 'Sulje',
    'LBL_EMAIL_COFFEE_BREAK' => 'Tarkastetaan uusia viestejä. <br><br>Suuret sähköpostilit saattavat kestää kauan päivittää.',

    'LBL_EMAIL_COMPOSE' => 'Sähköposti',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Ole hyvä ja lisää vastaanottajat(t).',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Viesti on tyhjä. Lähetetäänkö tästä huolimatta?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Viestissä ei ole aihetta. Lähetetäänkö silti?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(ei aihetta)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Anna validit sähköpostiosoitteet vastaanottaja, kopio ja piilokopio kenttiin',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Sulje viesti?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Haluatko varmasti poistaa allekirjoituksen?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Sähköposti lähetetty',

    'LBL_EMAIL_CREATE_NEW' => '--Luo uusi tallennettaessa--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multi',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tyhjä',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Lähetys pvm',
    'LBL_EMAIL_DATE_TODAY' => 'Tänään',
    'LBL_EMAIL_DELETE' => 'Poista',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Poista valitut?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Viesti poistettu.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Poistetaan viestiä',
    'LBL_EMAIL_DETAILS' => 'Yksityiskohdat',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Vain ensisijaista osoitetta käyteään kontaktin yhteydessä.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Tyhjennetään roskakoria',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Poistetaan lähtevän postin palvelinta',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Tyhjennetään väliakaistiedostoja',
    'LBL_EMAIL_EMPTY_MSG' => 'Ei näytettäviä sähköposteja.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Ei näytettäviä sähköpostiosoitteita.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Kansion nimen pitää olla uniikki eikä tyhjä. Yritä uudestaan.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kansiota ei voi poistaa. Joko kansiossa tai sen alikansioissa on sähköposteja tai  mail box yhdistettynä siihen.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Sisällöstä ei pystytä määrittämään kohdekansiota. Yritä uudestaan.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Ole hyvä ja tarkasta asetukset.',
    'LBL_EMAIL_ERROR_DESC' => 'Virheitä havaittu: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Sinulla ei ole riittäviä oikeuksia tähän alueeseen. Saadaksesi pääsyn alueelle ota yhteys ylläpitäjään.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM kansionimien pitää olla yksilöllisiä.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Kirjoita hakuehdot.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'An error has occured',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Viesti on poistettu palvelimelta',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Viesti on poistettu palvelimelta, tai siirretty toiseen kansioon',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Yhteyden muodostaminen sähköpostipalvelimeen epäonnistui. Ota yhteyttä järjestelmänvalvojaan',
    'LBL_EMAIL_ERROR_MOVE' => 'Sähköpostien siirtämistä palvelimien ja/tai sähköpostitilien välillä ei tueta tällä hetkellä.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Siirtovirhe',
    'LBL_EMAIL_ERROR_NAME' => 'Nimi vaaditaan.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Vastaanottajan osoite vaaditaan. Ole hyvä ja anna validi osoite..',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Ole hyvä ja liitä tiedosto.',
    'LBL_EMAIL_ERROR_SERVER' => 'Postipalvelimen osoite vaaditaan.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Tiliä ei ehkä tallennettu.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Palvelimen kommunikointivirhe.',
    'LBL_EMAIL_ERROR_USER' => 'Käyttäjätunnus vaaditaan.',
    'LBL_EMAIL_ERROR_PORT' => 'Postipalvelimen portti vaaditaan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Palvelin protokolla vaaditaan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Seuratut kansiot vaaditaan.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Poistetut viestit kansio vaaditaan.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Tietoja ei ole saatavilla',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Lähtevän postin palvelinta ei ole No outgoing mail server specified.',
    'LBL_EMAIL_ERROR_SENDING' => 'Virhe lähettäessä sähköpostia. Ole hyvä ja ota yhteys ylläpitäjään.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0',        null, null, '.gif', '') . 'Kansiot',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder',        'align=absmiddle border=0', null, null, '.gif', ''),
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

    'LBL_EMAIL_FORWARD' => 'Lähetä edelleen',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Ladattu yhteensä[[count]]. Viestejä yhteensä [[total]]',
    'LBL_EMAIL_FROM' => 'Lähettäjä',
    'LBL_EMAIL_GROUP' => 'Ryhmä',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Ryhmä',
    'LBL_EMAIL_HOME_FOLDER' => 'Koti',
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
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tyhjennä roskakori',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synkronoi',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Tyhjenn䠶älimuisti',
    'LBL_EMAIL_MENU_REMOVE' => 'Poista',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Nimeä kansio uudelleen',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Uudelleennimetään kansiota',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Ole hyvä ja suorita valinta ennen tätä operaatiota.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Luo kansio ( etäkansio tai SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Luo kansio (Etäkansio tai SuiteCRM kansio)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tyhjentää kaikkien tilien roskakorit',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Merkitse viesti(t) luetuiksi',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Poistaviesti(t) seurannasta',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Nimeä kansio uudelleen ( etäkansio tai SuiteCRM)',

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
    'LBL_EMAIL_OPT_IN' => 'Hyväksyntä annettu',
    'LBL_EMAIL_OPT_IN_AND_INVALID' => 'Hyväksyntä annettu, mutta kelpaamaton',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Lähetys estetty ja viallinen',
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
    'LBL_EMAIL_DRAFT_SAVED' => 'Luonnos on tallennettu',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Aloitus pvm',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Loppu pvm',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Haku ei tuottanut tuloksia.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Hakutulokset',

    'LBL_EMAIL_SELECT' => 'Valitse',

    'LBL_EMAIL_SEND' => 'Lähetä',
    'LBL_EMAIL_SENDING_EMAIL' => 'Lähetetään',

    'LBL_EMAIL_SETTINGS' => 'Asetukset',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Sähköpostitilit',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tyhjennä lomake',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Tarkasta uudet viestit',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Lähettäjä',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Sähköpostiosoite testausviestille:',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Lähettäjä',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Vastaa osoitteeseen',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synkronoi kaikki posti tilit',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Viesti lähetettiin annettuun osoitteeseen käyttäen annettuja lähtevän postin asetuksia. Ole hyvä ja tarkasta saapuneet viestit vahvistaaksesi sähköpostiasetukset.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Näytä täysi SMTP-loki',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Suorita täys synkronointi?\nToiminto saattaa kestää useita minuutteja.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Paina vaihto- tai ctrl-painiketta valitaksesi useita kansioita.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Yleiset asetukset',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Luo ryhmäkansio',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Muokkaa ryhmäkansiota',

    'LBL_EMAIL_SETTINGS_NAME' => 'Postitilin nimi',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Valitse saapuneet kansion näytettävien viestien lkm per sivu. Asetusten käyttöönotto voi vaatia sivun päivittämistät.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Haetaan posti tiliä',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Asetukset on tallennettu.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Lähetä vain teksimuotoisia sähköposteja',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Viesti per sivu',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuaaliset asetukset',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Asetukset',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Saatavilla olevat käyttäjän kansiot',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:', // PR 6752
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Lähtevän postin palvelin valitulle tilille on virheellinen.  Tarkista asetukset tai valitse tilille eri sähköpostipalvelin.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Lähtevän postin palvelin ei ole määritetty lähettämään sähköpostia. Määritä lähtevän postin palvelin tai valitse käytettävä palvelin kohdasta Asetukset >> Sähköpostitilit.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Oletusallekirjoitus',
    'LBL_EMAIL_SIGNATURES' => 'Allekirjoitukset',
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
    'LBL_EMAIL_TO' => 'Vastaanottaja',
    'LBL_EMAIL_VIEW' => 'Näkymä',
    'LBL_EMAIL_VIEW_HEADERS' => 'Näytä otsikot',
    'LBL_EMAIL_VIEW_RAW' => 'Näytä käsittelemätön viesti"',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ominaisuus ei ole tuettu POP3 protokollaa käytettäessä.',
    'LBL_DEFAULT_LINK_TEXT' => 'Oletuslinkkiteksti.',
    'LBL_EMAIL_YES' => 'Kyllä',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Lähetä testiviesti',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testisähköposti lähetetty',
    'LBL_EMAIL_MESSAGE_NO' => 'Viesti nro', // Counter. Message number xx
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Tuonti suoritettu',
    'LBL_EMAIL_IMPORT_FAIL' => 'Tuonti epäonnistui, koska viesti on jo tuotu tai poistettu palvelimelta',

    'LBL_LINK_NONE' => 'Ei mitään',
    'LBL_LINK_ALL' => 'Kaikki',
    'LBL_LINK_RECORDS' => 'Tietueet',
    'LBL_LINK_SELECT' => 'Valitse',
    'LBL_LINK_ACTIONS' => 'Toiminnot', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Vahvista',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Haluatko sulkea #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Viallinen tiedostomuoto',

    'ERR_AJAX_LOAD' => 'Tapahtui virhe:',
    'ERR_AJAX_LOAD_FAILURE' => 'Pyyntösi käsittelyssä tapahtui virhe, yritä hetken kuluttua uudestaan.',
    'ERR_AJAX_LOAD_FOOTER' => 'Jos tämä virhe toistuu, pyydä ylläpitäjää kytkemään Ajax pois tältä moduulilta',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Desimaali ja tuhat erotin ei voi olla sama.\n\n  Ole hyvä ja muuta arvot.',
    'ERR_DELETE_RECORD' => 'Tietueen numero on annettava kontaktin poistamiseksi.',
    'ERR_EXPORT_DISABLED' => 'Vientitoiminnot poistettu käytöstä.',
    'ERR_EXPORT_TYPE' => 'Virhe viennissä ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'sähköpostiosoite ei ole kelvollinen.',
    'ERR_INVALID_FILE_REFERENCE' => 'Viallinen tiedostoviite',
    'ERR_NO_HEADER_ID' => 'Toiminne ei ole käytettävissä valitussa teemassa.',
    'ERR_NOT_ADMIN' => 'Sinulla ei ole oikeuksia ylläpito toimintoihin.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Pakollinen kenttä puuttuu:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Väärä arvo pakollisessa kentässä:',
    'ERR_INVALID_VALUE' => 'Väärä arvo:',
    'ERR_NO_SUCH_FILE' => 'Tiedostoa ei löydy järjestelmästä',
    'ERR_FILE_EMPTY' => 'File is empty', // PR 6672
    'ERR_NO_SINGLE_QUOTE' => 'Heittomerkkiä ei voida käyttää ',
    'ERR_NOTHING_SELECTED' => 'Ole hyvä ja valitse jokin ennen jatkamista.',
    'ERR_SELF_REPORTING' => 'Käyttäjä ei voi raportoida itselleen.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Ei vastaavuuksia kentälle: ',
    'ERR_SQS_NO_MATCH' => 'Ei tuloksia',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Määrittele \'key\' indeksi näyttöparametrien attribuutille Meta-Dataa määritystä varten',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Virhe: Portaalinimi esiintyy jo toisella kontaktilla.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Kentän arvon tarkkuus ei ole yhteensopiva arvolle määritetylle tarkkuudelle',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Virhe tallennettaessa ulkopuolista tiliä.',
    'ERR_NO_DB' => 'Tietokantayhteyttä ei ole. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'ERR_DB_FAIL' => 'Tietokantavirhe. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} tiedostoja voi käyttää ainoastaan SuiteCRM {1} tietokannan kanssa.',

    'LBL_ACCOUNT' => 'Asiakas',
    'LBL_ACCOUNTS' => 'Asiakkaat',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Katso yhteenveto',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Katso yhteenveto',
    'LBL_ADD_BUTTON' => 'Lisää',
    'LBL_ADD_DOCUMENT' => 'Lisää dokumentti',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Lisää kohdelistaan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Yhteystietojen lisääminen kohdeluetteloon',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Napsauta sulkeaksesi',
    'LBL_ADDITIONAL_DETAILS' => 'Lisätiedot',
    'LBL_ADMIN' => 'Ylläpito',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkistoi',
    'LBL_ASSIGNED_TO_USER' => 'Kohdennettu käyttäjälle',
    'LBL_ASSIGNED_TO' => 'Kohdennettu hlölle:',
    'LBL_BACK' => 'Takaisin',
    'LBL_BILLING_ADDRESS' => 'Laskutusosoite',
    'LBL_QUICK_CREATE' => 'Luo ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Avoimen lähdekoodin CRM',
    'LBL_BUGS' => 'Bugit',
    'LBL_BY' => '-',
    'LBL_CALLS' => 'Puhelut',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Lähetä jonoon asetetut sähköpostikampanjat',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Lähetä',
    'LBL_CASE' => 'Palvelupyyntö',
    'LBL_CASES' => 'Palvelupyynnöt',
    'LBL_CHANGE_PASSWORD' => 'Vaihda salasana',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Tarkista kaikki',
    'LBL_CITY' => 'Kaupunki/kunta',
    'LBL_CLEAR_BUTTON_LABEL' => 'Tyhjennä',
    'LBL_CLEAR_BUTTON_TITLE' => 'Tyhjennä',
    'LBL_CLEARALL' => 'Tyhjennä kaikki',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sulje', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sulje ja luo uusi', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sulje ja luo uusi', // As in closing a task
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Avoimet:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Luo sähköposti',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Luo viesti',
    'LBL_SEARCH_DROPDOWN_YES' => 'Kyllä',
    'LBL_SEARCH_DROPDOWN_NO' => 'Ei',
    'LBL_CONTACT_LIST' => 'Kontaktilista',
    'LBL_CONTACT' => 'Kontakti',
    'LBL_CONTACTS' => 'Kontaktit',
    'LBL_CONTRACT' => 'Sopimus',
    'LBL_CONTRACTS' => 'Sopimukset',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_CREATE_BUTTON_LABEL' => 'Luo', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_CREATED_BY_USER' => 'Tekijä',
    'LBL_CREATED_USER' => 'Tekijä',
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
    'LBL_DONE_BUTTON_LABEL' => 'Valmis',
    'LBL_DONE_BUTTON_TITLE' => 'Valmis',
    'LBL_FAVORITES' => 'Suosikit',
    'LBL_VCARD' => 'Käyntikortti',
    'LBL_EMPTY_VCARD' => 'Ole hyvä ja valitse käyntikortti',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ei sisällä kaikkia tämän moduulin vaatimia kenttiä. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Ladattavan tiedoston koko ylittää 30000 tavun rajan, joka on määritelty HTML lomakkeella.',
    'LBL_VCARD_ERROR_DEFAULT' => 'vCard tiedoston lähettämisessä tapahtui virhe. Tarkista yksityiskohdat suitecrm.log tiedostosta.',
    'LBL_IMPORT_VCARD' => 'Tuo käyntikortti:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Tuo käyntikortti',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Tuo vCard',
    'LBL_VIEW_BUTTON' => 'Katso',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Lähetä PDF:nä',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Lähetä PDF:nä',
    'LBL_EMAILS' => 'Sähköpostit',
    'LBL_EMPLOYEES' => 'Työntekijät',
    'LBL_ENTER_DATE' => 'Anna pvm',
    'LBL_EXPORT' => 'Vie',
    'LBL_FAVORITES_FILTER' => 'Omat suosikit:',
    'LBL_GO_BUTTON_LABEL' => 'Mene',
    'LBL_HIDE' => 'Piilota',
    'LBL_ID' => 'Tunnus',
    'LBL_IMPORT' => 'Tuo',
    'LBL_IMPORT_STARTED' => 'Tuonti aloitettu: ',
    'LBL_LAST_VIEWED' => 'Viimeksi katsottu',
    'LBL_LEADS' => 'Liidit',
    'LBL_LESS' => 'vähemmän',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_CAMPAIGNS' => 'Kampanjat',
    'LBL_CAMPAIGNLOG' => 'Kampanjalogi',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanjat',
    'LBL_CAMPAIGN_ID' => 'Kampanja',
    'LBL_CAMPAIGN_NONE' => '--None--',
    'LBL_THEME' => 'Teema:',
    'LBL_FOUND_IN_RELEASE' => 'Löydetty jakelusta',
    'LBL_FIXED_IN_RELEASE' => 'Korjattu jakelussa',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_ASSIGNED_USER' => 'Käyttäjä',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktin nimi',
    'LBL_LIST_CONTACT_ROLE' => 'Kontaktin rooli',
    'LBL_LIST_DATE_ENTERED' => 'Luontipvm',
    'LBL_LIST_EMAIL' => 'Sähköposti',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_OF' => '/',
    'LBL_LIST_PHONE' => 'Puhelin',
    'LBL_LIST_RELATED_TO' => 'Liittyen',
    'LBL_LIST_USER_NAME' => 'Käyttäjänimi',
    'LBL_LISTVIEW_NO_SELECTED' => 'Valitse vähintään yksi tietue jatkaaksesi.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Valitse vähintään 2 tietuetta jatkaaksesi.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Valitut tietueet',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valittu: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Matti',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Mainio',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Tri',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Peruuta',
    'LBL_VERIFY' => 'Vahvista',
    'LBL_RESEND' => 'Lähetä uudestaan',
    'LBL_PROFILE' => 'Profiili',
    'LBL_MAILMERGE' => 'Sulauta sähköpostiin',
    'LBL_MASS_UPDATE' => 'Massapäivitys',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Massapäivityksessä tarvittavaa kenttää ei ole',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Estä ?hetys ensisijaiseen sähköpostiin',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Hyväksynnän ensisijainen sähköpostiosoite',
    'LBL_MEETINGS' => 'Tapaamiset',
    'LBL_MEETING_GO_BACK' => 'Palaa tapaamiseen',
    'LBL_MEMBERS' => 'Jäsenet',
    'LBL_MEMBER_OF' => 'On seuraavan jäsenorganisaatio',
    'LBL_MODIFIED_BY_USER' => 'Muokkaaja',
    'LBL_MODIFIED_USER' => 'Muokkaaja',
    'LBL_MODIFIED' => 'Muokkaaja',
    'LBL_MODIFIED_NAME' => 'Muokkaaja',
    'LBL_MORE' => 'lisää',
    'LBL_MY_ACCOUNT' => 'Omat asetukset',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Luo',
    'LBL_NEW_BUTTON_TITLE' => 'Luo uusi',
    'LBL_NEXT_BUTTON_LABEL' => 'Seuraava',
    'LBL_NONE' => '--Ei mitään--',
    'LBL_NOTES' => 'Muistiot',
    'LBL_OPPORTUNITIES' => 'Myyntimahdollisuudet',
    'LBL_OPPORTUNITY_NAME' => 'Myyntimahdollisuuden nimi',
    'LBL_OPPORTUNITY' => 'Myyntimahdollisuus',
    'LBL_OR' => 'TAI',
    'LBL_PANEL_OVERVIEW' => 'Muistion esikatselu', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ASSIGNMENT' => 'Muuta', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PANEL_ADVANCED' => 'Lisätietoja', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_PARENT_TYPE' => 'Päätyyppi',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Kaupunki/kunta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Maa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postinumero:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Maakunta/lääni:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Katuosoite 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Katuosoite 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Katuosoite:',
    'LBL_PRIMARY_ADDRESS' => 'Ensisijainen osoite:',

    'LBL_PROSPECTS' => 'Mahdollisuudet',
    'LBL_PRODUCTS' => 'Tuotteet',
    'LBL_PROJECT_TASKS' => 'Projektitehtävät',
    'LBL_PROJECTS' => 'Projektit',
    'LBL_QUOTES' => 'Tarjoukset',

    'LBL_RELATED' => 'Liittyen',
    'LBL_RELATED_RECORDS' => 'Liittyvät tietueet',
    'LBL_REMOVE' => 'Poista',
    'LBL_REPORTS_TO' => 'Raportoi hlölle',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Tarkoittaa pakollista kenttää',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Valmis',
    'LBL_FULL_FORM_BUTTON_KEY' => 'F',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Koko lomake',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Koko lomake',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Tallenna ja luo uusi',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Tallenna ja luo uusi',
    'LBL_SAVE_OBJECT' => 'Tallenna {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Etsi',
    'LBL_SEARCH_BUTTON_TITLE' => 'Etsi',
    'LBL_FILTER' => 'Suodata',
    'LBL_SEARCH' => 'Etsi',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'lisää',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Väärä tiedostoformaatti, vain kuvatiedostoja voidaan ladata.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Valitse',
    'LBL_SELECT_BUTTON_TITLE' => 'Valitse',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Selaa dokumentteja',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Selaa dokumentteja',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Valitse kontakti',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Valitse kontakti',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Valitse raporteista',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Valitse raportit',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Valitse käyttäjä',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Valitse käyttäjä',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Valitse käyttäjä',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Valitse käyttäjä',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Tyhjennä käyttäjätiedot',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Tyhjennä käyttäjätiedot',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Sivun rakentamiseen käytetyt resurssit (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekuntia.',
    'LBL_SERVER_RESPONSE_TIME' => 'Palvelimen vasteaika:',
    'LBL_SERVER_MEMORY_BYTES' => 'tavua',
    'LBL_SERVER_MEMORY_USAGE' => 'Palvelimen muistinkäyttö: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Käyttö:-moduuli: {0} - toiminto: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Palvelimen maksimi muistinkäyttö: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Toimitusosoite',
    'LBL_SHOW' => 'Näytä',
    'LBL_STATE' => 'Tila:', //Used for Case State, situation, condition
    'LBL_STATUS_UPDATED' => 'Statuksesi tapahtumaan päivitettiin onnistuneesti!',
    'LBL_STATUS' => 'Tila',
    'LBL_STREET' => 'Katuosoite',
    'LBL_SUBJECT' => 'Aihe',

    'LBL_INBOUNDEMAIL_ID' => 'Saapuneen viestin ID',

    'LBL_SCENARIO_SALES' => 'Myynnit',
    'LBL_SCENARIO_MARKETING' => 'Markkinointi',
    'LBL_SCENARIO_FINANCE' => 'Rahoitus',
    'LBL_SCENARIO_SERVICE' => 'Palvelu',
    'LBL_SCENARIO_PROJECT' => 'Projektihallinta',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Tämä skenaario helpottaa myytävien tuotteiden hallintaa',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Tämä skenaario helpottaa markkinoitavien tuotteiden hallintaa',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Tämä skenaario helpottaa rahoitukseen liittyvien tietueiden hallintaa',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Tämä skenaario helpottaa palvelutuotteiden hallintaa',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Tämä skenaario helpottaa projektituotteiden hallintaa',

    'LBL_SYNC' => 'Synkronoi',
    'LBL_TABGROUP_ALL' => 'Kaikki',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteetit',
    'LBL_TABGROUP_COLLABORATION' => 'Yhteistyö',
    'LBL_TABGROUP_MARKETING' => 'Markkinointi',
    'LBL_TABGROUP_OTHER' => 'Muut',
    'LBL_TABGROUP_SALES' => 'Myynti',
    'LBL_TABGROUP_SUPPORT' => 'Tuki',
    'LBL_TASKS' => 'Tehtävät',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkistoi sähköposti',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkistoi viesti',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Palauta',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Palauta',
    'LBL_UNDELETE_BUTTON' => 'Palauta',
    'LBL_UNDELETE' => 'Palauta',
    'LBL_UNSYNC' => 'Poista synkronointi',
    'LBL_UPDATE' => 'Päivitä',
    'LBL_USER_LIST' => 'Käyttäjälista',
    'LBL_USERS' => 'Käyttäjät',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Tarkastetaan olevamassa olevia sähköpostiosoitteita...',
    'LBL_VERIFY_PORTAL_NAME' => 'Tarkistetaan olemassaolevia portaalinimiä...',
    'LBL_VIEW_IMAGE' => 'Katso',

    'LNK_ABOUT' => 'Tietoja',
    'LNK_ADVANCED_FILTER' => 'Tarkempi suodin',
    'LNK_BASIC_FILTER' => 'Pikasuodin',
    'LBL_ADVANCED_SEARCH' => 'Tarkempi suodin',
    'LBL_QUICK_FILTER' => 'Pikasuodin',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Näytä kaikki',
    'LNK_CLOSE' => 'Sulje',
    'LBL_MODIFY_CURRENT_FILTER' => 'Muokkaa nykyistä suodinta',
    'LNK_SAVED_VIEWS' => 'Layout asetukset',
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
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Haluatko varmasti poistaa valitut tietueet?',
    'NTC_TEMPLATE_IS_USED' => 'Pohjaa käytetään ainakin yhdessä sähköposti kampanjassa tai järjestelmä asetuksissa. Haluatko varmasti poistaa?',
    'NTC_TEMPLATES_IS_USED' => 'Seuraavia malleja käytetään sähköpostimarkkinointitietueissa. Poistetaanko silti?' . PHP_EOL,
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
    'WARN_UNSAVED_CHANGES' => 'Olet poistumassa tietueesta tallentamatta mahdollisia muutoksia. Haluatko varmasti jatkaa?',
    'ERROR_NO_RECORD' => 'Virhe haettaessa tietuetta.  Tietue voi olla poistettu tai sinulla ei ole oikeuksia tarkastella tietuetta.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Varoitus:</b> Selaimen versiota ei enää tueta tai käytät sealinta jota ei tueta. <p></p> Seuraavia selainversioita suositellaan: <p></p> <ul><li>Internet Explorer 10 (Yhteensopivuusnäkymää ei tueta) <li>Firefox 32,0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Varoitus:</b> Selaimesi on IE compatibility tilassa jota ei tueta.',
    'ERROR_TYPE_NOT_VALID' => 'Virhe. Tämä tyyppi ei ole validi.',
    'ERROR_NO_BEAN' => 'Pavun saanti epäonnistui.',
    'LBL_DUP_MERGE' => 'Etsi duplikaatteja',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Hallitse tilauksia',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Hallitse tilauksiasi ',
    // Ajax status strings
    'LBL_LOADING' => 'Ladataan ...',
    'LBL_SEARCHING' => 'Etsitään...',
    'LBL_SAVING_LAYOUT' => 'Tallennetaan Layoutia ...',
    'LBL_SAVED_LAYOUT' => 'Layout tallennettu.',
    'LBL_SAVED' => 'Tallennettu',
    'LBL_SAVING' => 'Tallennetaan',
    'LBL_DISPLAY_COLUMNS' => 'Näytä kolumnit',
    'LBL_HIDE_COLUMNS' => 'Piilota kolumnit',
    'LBL_SEARCH_CRITERIA' => 'Hakukriteerit',
    'LBL_SAVED_VIEWS' => 'Tallennetut näkymät',
    'LBL_PROCESSING_REQUEST' => 'Käsitellään..',
    'LBL_REQUEST_PROCESSED' => 'Valmis',
    'LBL_AJAX_FAILURE' => 'Ajax virhe',
    'LBL_MERGE_DUPLICATES' => 'Yhdistä',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Suodattimet',
    'LBL_SEARCH_POPULATE_ONLY' => 'Suorita haku käyttäen hakulomaketta',
    'LBL_DETAILVIEW' => 'Yksityiskohtainen näkymä',
    'LBL_LISTVIEW' => 'Listanäkymä',
    'LBL_EDITVIEW' => 'Muokkaus näkymç',
    'LBL_BILLING_STREET' => 'Katuosoite:',
    'LBL_SHIPPING_STREET' => 'Katuosoite:',
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
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Tuloksia ei löytynyt... Muuta hakuehtoja ja yritä uudelleen?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Ei hakutuloksia <item1> haulle',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Luo <item1> uutena <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'tai muuta hakuehtoja',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Sinulla ei ole tallennettuja tietueita. <item2> tai <item3> nyt.',

    'LBL_CLICK_HERE' => 'Klikkaa tästä',
    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Lisää omiin suosikkeihin',
    'LBL_CREATE_CONTACT' => 'Luo kontakti',
    'LBL_CREATE_CASE' => 'Luo palvelupyyntö',
    'LBL_CREATE_NOTE' => 'Luo muistio',
    'LBL_CREATE_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LBL_SCHEDULE_CALL' => 'Kirjaa puhelu',
    'LBL_SCHEDULE_MEETING' => 'Ajoita tapaaminen',
    'LBL_CREATE_TASK' => 'Luo tehtävä',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Luo lomake',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Tallenna Web-lomake',
    'LBL_AVAILABLE_FIELDS' => 'Käytettävissä olevat kentät',
    'LBL_FIRST_FORM_COLUMN' => 'Ensimmäisen lomakkeen sarake',
    'LBL_SECOND_FORM_COLUMN' => 'Toisen lomakkeen sarake',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Puuttuu pakollinen kenttä: Vastuuhenkilö',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Puuttuu pakollinen kenttä: liittyvä kampanja',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Luotava webbilomake ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Tämän lomakkeen lähettäminen luo ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Lisää kaikki kentät',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Tyhjennä kaikki kentät',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Poista kaikki kentät',
    'LBL_NEXT_BTN' => 'Seuraava',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Vain kuvatyypin tiedosto voidaan upottaa',
    'LBL_TRAINING' => 'Tukifoorumi',
    'ERR_MSSQL_DB_CONTEXT' => 'Tietokannan konteksti vaihdettiin',
    'ERR_MSSQL_WARNING' => 'Varoitus:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Virhe: Tiedostoa [[file]] ei löydy. Luonti ei onnistu, koska vastaavaa HTML-tiedostoa ei löydy.',
    'ERR_CANNOT_FIND_MODULE' => 'Virhe: Moduulia [module] ei ole.',
    'LBL_ALT_ADDRESS' => 'Vaihtoehtoinen osoite:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Virhe: displayParams-taulukossa on erisuuruinen määrä argumentteja elementeissä \'key\' ja \'copy\'.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Yleinen',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Suodattimet',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vain omat',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Otsake',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Näytä rivit',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'SuiteCRM-paneelien enimmäismäärä on saavutettu. Poista joku paneeli lisätäksesi uuden.',
    'LBL_ADDING_DASHLET' => 'Lisätään SuiteCRM-paneeli...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM paneli lisätty',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Haluatko varmasti poistaa SuiteCRM-paneelin?',
    'LBL_REMOVING_DASHLET' => 'Poistetaan SuiteCRM-paneeli...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM paneli poistettu',

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Sivua ladataan, ole hyvä ja odota...',

    'LBL_RELOAD_PAGE' => 'Ole hyvä ja <a href="javascript: window.location.reload()"> päivitä ikkuna</a> käyttääksesi tätä SuiteCRM Panelia.',
    'LBL_ADD_DASHLETS' => 'Lisää Dashletteja',
    'LBL_CLOSE_DASHLETS' => 'Sulje',
    'LBL_OPTIONS' => 'Asetukset',
    'LBL_1_COLUMN' => '1 kolumni',
    'LBL_2_COLUMN' => '2 Kolumnia',
    'LBL_3_COLUMN' => '3 Kolumnia',
    'LBL_PAGE_NAME' => 'Sivun nimi',

    'LBL_SEARCH_RESULTS' => 'Hakutulokset',
    'LBL_SEARCH_MODULES' => 'Moduulit',
    'LBL_SEARCH_TOOLS' => 'Työkalut',
    'LBL_SEARCH_HELP_TITLE' => 'Hakuvinkit',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Ei kuvaa',

    'LBL_MODULE' => 'Moduuli',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopioi osoite vasemmalta:',
    'LBL_SAVE_AND_CONTINUE' => 'Tallenna ja jatka',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad. For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Virhe: Kyselyiden raja $limit täyttynyt moduulille $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Virhe: ResourceObserver->notify() pitää overrideata.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Virhe: Seurantaa ei voi luoda, koska metadata tiedosto on tyhjä tai sitä ei ole.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Virhe: Ko. nimellä ei ole konfiguroitua monitorointia',
    'ERR_UNDEFINED_METRIC' => 'Virhe: Määrittelemättömälle metriikalle ei voi asettaa arvoa',
    'ERR_STORE_FILE_MISSING' => 'Virhe: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitoroinnin Id',
    'LBL_USER_ID' => 'Käyttäjä',
    'LBL_MODULE_NAME' => 'Moduulin nimi',
    'LBL_ITEM_ID' => 'Tietueen tunnus',
    'LBL_ITEM_SUMMARY' => 'Tietueen yhteenveto',
    'LBL_ACTION' => 'Toiminto',
    'LBL_SESSION_ID' => 'Istunnon Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack luotu käyttäjälle {0}',
    'LBL_VISIBLE' => 'Tietueet näytetään',
    'LBL_DATE_LAST_ACTION' => 'Viimeisen toimenpiteen pvm',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'Ei aiemmin kuin',
    'MSG_IS_MORE_THAN' => 'on enemmän kuin',
    'MSG_IS_LESS_THAN' => 'on pienempi kuin',
    'MSG_SHOULD_BE' => 'tulisi olla',
    'MSG_OR_GREATER' => 'tai suurempi',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Luo bugi',

    'LBL_OBJECT_IMAGE' => 'objekti kuva',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Valitse pvm',

    'LBL_VALIDATE_RANGE' => 'Ei ole validilla välillä',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Valitse sekä alku- että loppupvm',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Valitse sekä alku- että loppupvm',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Kaikki',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Virhe: Bean-parametrin listan koko ei vastaa tulosten listan kokoa.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Virhe: moduulilta puuttuu mapping entry.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Virhe: Konnektorista {0} ei voitu noutaa dataa; palvelu saattaa olla alhaalla tai konfigurointi on väärin. Konnektorin virheviesti: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Saavuttaaksesi parhaimman käyttökokemuksen käyttämällä IIS/FastCGI sapi, aseta fastcgi.logging arvoon 0 php.ini tiedostossa.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nimi',
    'LBL_COLLECTION_PRIMARY' => 'Ensisijainen',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Pakollinen kenttä on tyhjä',

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
    'LBL_DURATION_HOURS' => 'Kesto tunneissa',
    'LBL_DURATION_MINUTES' => 'Kesto minuuteissa',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Valitse kuukausi',
    'LBL_ENTER_YEAR' => 'Anna vuosi',
    'LBL_ENTER_VALID_YEAR' => 'Anna validi vuosi',

    //File write error label
    'ERR_FILE_WRITE' => 'Virhe: Ei voitu kirjoittaa tiedostoon {0}. Tarkista järjestelmän ja web-palvelimen tiedosto-oikeudet.',
    'ERR_FILE_NOT_FOUND' => 'Virhe: Ei voitu ladata tiedostoa {0}. Tarkista järjestelmän ja web-palvelimen tiedosto-oikeudet.',

    'LBL_AND' => 'ja',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Tiedosto ulkoisessa lähteessä',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Turvallisuus',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Tämä on tuonnin mallitiedosto, jota voidaan käyttää uutta tietoa tuodessa."
"Tiedosto on pilkuin eroteltu .csv-tiedosto, lainausmerkkejä käytetään kentän merkkeinä."

"Otsikkorivi on ensimmäinen rivi ja sisältää kenttien nimet sovelluksessa."
"Näitä nimiä käytetään yhdistettäessä tiedoston tietoja sovelluksen kenttiin."

"Huom: tietokannan nimiä voidaan käyttää myös otsikkorivillä. Tämä on hyödyllistä käyttäessäsi phpMyAdminia tai muuta tietokantatyökalua."
"Sarakkeiden järjestys ei ole kriittinen, sillä tuontiprosessi ohjaa tiedot otsikkorivien mukaan oikeisiin kenttiin."


"Käytä tätä tiedostoa mallina seuraavasti:" 
"1. Poista esimerkkitietojen rivit" 
"2. Poista ohjeteksti, joita luet nyt"
"3. Syötä tuotavat tiedot oikeisiin sarakkeisiin"
"4. Tallenna tiedosto valitsemaasi kansioon tietokoneellasi"
"5. Klikkaa sovelluksen toiminnot-valikosta tuonti-vaihtoehto ja valitse ladattava tiedosto"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Ei tämänhetkisiä ilmoituksia',
    'LBL_ALT_SORT_DESC' => 'Lajittele laskevasti',
    'LBL_ALT_SORT_ASC' => 'Lajittele nousevasti',
    'LBL_ALT_SORT' => 'Järjestä',
    'LBL_ALT_SHOW_OPTIONS' => 'Näytä valinnat',
    'LBL_ALT_HIDE_OPTIONS' => 'Piilota  valinnat',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Siirrä valitut kohteet vasemmanpuoleiseen listaan',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Siirrä valitut kohteet oikeanpuoleiseen listaan',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Siirrä valittu kohde ylemmäs listalla',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Siirrä valittu kohde alemmas listalla',
    'LBL_ALT_INFO' => 'Tiedot',
    'MSG_DUPLICATE' => 'Olet luomassa {0} tietuetta joka voi olla kaksoiskappale {0}-tietueelle, joka on jo olemassa. {1} tietueita, jotka sisältävät samankaltaisia nimiä on lueteltu alla. <br>Luo {1} jatkaa {0} luomista  tai valitse olemassa oleva {0} alla olevista.',
    'MSG_SHOW_DUPLICATES' => 'Olet luomassa {0} tietuetta, joka voi olla kaksoiskappale olemassa olevalle tietueelle {0}. {1} tietueita, jotka sisältävät samankaltaisia nimiä on lueteltu alla.  Valitse Tallenna {0} luodaksesi uuden tai Peruuta palataksesi moduuliin luomatta {0}.',
    'LBL_EMAIL_TITLE' => 'Sähköposti',
    'LBL_EMAIL_OPT_TITLE' => 'Älä lähetä sähköpostia',
    'LBL_EMAIL_INV_TITLE' => 'virheellinen sähköpostiosoite',
    'LBL_EMAIL_PRIM_TITLE' => 'Määritä ensisijainen sähköposti osoite',
    'LBL_SELECT_ALL_TITLE' => 'Valitse kaikki',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Valitse tämä rivi',

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
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Monista',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Poista',
    'LBL_DELETE_BUTTON_TITLE' => 'Poista',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Massatoiminnot', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'toiminto', //Can be translated in all caps. This string will be used by SuiteP template menu actions
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Tallenna',
    'LBL_SAVE_BUTTON_TITLE' => 'Tallenna',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Peruuta',
    'LBL_CANCEL_BUTTON_TITLE' => 'Peruuta',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

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

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Muistutus on tyhjä tai virheellinen.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Muistutus ei ole määritetty popupille tai sähköpostille.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Ei muistutettavia kutsuttuja.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Muistutus ei sisällä ketään osallistujaa, haluatko poistaa muistutuksen?',
    'LBL_DELETE_REMINDER' => 'Poista muistutus',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Valitse sarakkeet',
    'LBL_COLUMN_CHOOSER' => 'Valitse sarake',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Tallenna muutokset',
    'LBL_DISPLAYED' => 'Näytetään',
    'LBL_HIDDEN' => 'Piilotettu',
    'ERR_EMPTY_COLUMNS_LIST' => 'Ainakin yksi elementti tarvitaan',

    'LBL_FILTER_HEADER_TITLE' => 'Suodata',

    'LBL_CATEGORY' => 'Kategoria',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'ERR_FACTOR_TPL_INVALID' => 'Kaksivaiheisen tunnistautumisen palauttama viesti on virheellinen. Ota yhteyttä ylläpitäjään.',
    'LBL_SUBTHEMES' => 'Tyyli',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Aamunkajo',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Päivä',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Illan ruska',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Yön pimeys',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Poista luonnos',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Tämä toiminto poistaa tämän sähköpostiviestin, haluatko jatkaa?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Käytä sähköpostin mallina',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Tämä toiminto korvaa sähköpostin sisällön ja otsikkokentän, haluatko jatkaa?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Vahvistettu hyväksyntä',
    'LBL_OPT_IN_TITLE' => 'Hyväksyntä',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Vahvistetun hyväksynnän pvm.',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Hyväksynnän vahvistavan viestin lähetyspvm.',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Hyväksynnän vahvistavan viestin epäonnistumisen pvm.',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Hyväksyntävahvistusviestin tunniste',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Markkinointihyväksynnän sähköpostimallia ei ole konfiguroitu; konfiguroi sähköpostiasetuksissa.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Markkinoinnin hyväksyvä sähköpostiosoite on oltava liitettynä asiakkaaseen, kontaktiin, liidiin, tai tavoitteeseen.',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Ei-periytyvä turvaryhmä',
    'LBL_PRIMARY_GROUP' => "Ensisijainen ryhmä",

    // footer
    'LBL_SUITE_TOP' => 'Takaisin alkuun',
    'LBL_SUITE_SUPERCHARGED' => 'Tehostettu SuiteCRM:llä',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM:n on kirjoittanut ja koonnut <a href="https://salesagility.com">SalesAgility</a>. Ohjelma toimitetaan sellaisenaan, ilman takuuta. Ohjelma on lisenssoitu AGPLv3-lisenssillä.',
    'LBL_SUITE_DESC2' => 'Tämä on vapaa ohjelmisto: voit jakaa tai muokata sitä Free Software Foundationin GNU Affero GPL version 3 -lisenssin ehtojen ja lähdekooditiedostojen alussa olevan lisäehdon mukaisesti.',
    'LBL_SUITE_DESC3' => 'SuiteCRM on SalesAgility Ltd:n tavaramerkki. Muut yritys- ja tuotenimet saattavat olla muiden yritysten tavaramerkkejä.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Resetoi salasana',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Lähetä markkinointihyväksynnän vahvistava sähköposti',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Markkinointihyväksynnän vahvistavan sähköpostin lähetys on vain asiakkaille, kontakteille, liideille, ja tavoitteille.',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Markkinointihyväksyntävahvistussähköpostin lähetys epäonnistui.',
    'LBL_CONFIRM_EMAIL_SENT' => 'Markkinointihyväksyntävahvistussähköpostin lähetys onnistui.',
);

$app_list_strings['moduleList']['Library'] = 'Kirjasto';
$app_list_strings['moduleList']['EmailAddresses'] = 'Sähköposti';
$app_list_strings['project_priority_default'] = 'Normaali';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Korkea',
    'Medium' => 'Normaali',
    'Low' => 'Matala',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Suostumus',
    'contract' => 'Sopimus',
    'legal_obligation' => 'Oikeudellinen velvoite',
    'protection_of_interest' => 'Edun suojaus',
    'public_interest' => 'Yleinen etu',
    'legitimate_interest' => 'Oikeutettu etu',
    'withdrawn' => 'Suostumus kumottu',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Www',
    'phone' => 'Puhelin',
    'given_to_user' => 'Suoraan käyttäjälle annettu',
    'email' => 'Sähköposti',
    'third_party' => 'Kolmas osapuoli',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Tietokanta';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERIKAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ETELÄMANNER',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTIINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRAALIA',
    'AUSTRIA' => 'ITÄVALTA',
    'AZERBAIJAN' => 'AZERBAIDŽAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'VALKO-VENÄJÄ',
    'BELGIUM' => 'BELGIA',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET\'NSAARI',
    'BRAZIL' => 'BRASILIA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITTILÄINEN ANTARKTINEN ALUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITTILÄINEN INTIAN VALTAMEREN ALUE',
    'BRITISH VIRGIN ISLANDS' => 'BRITTILÄISET NEITSYTSAARET',
    'BRITISH WEST INDIES' => 'BRITTILÄINEN LÄNSI-INTIA',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODŽA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'KANAVAVYÖHYKE',
    'CANARY ISLAND' => 'KANARIANSAARET',
    'CAPE VERDI ISLANDS' => 'KAP VERDI SAARET',
    'CAYMAN ISLANDS' => 'CAYMANSAARET',
    'CHAD' => 'TŠAD',
    'CHANNEL ISLAND UK' => 'KANAALISAARET ISO-BRITANNIA',
    'CHILE' => 'CHILE',
    'CHINA' => 'KIINA',
    'CHRISTMAS ISLAND' => 'JOULUSAARI',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) SAARI',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'KOMORIT',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KONGO-KINSHASA',
    'COOK ISLANDS' => 'COOKINSAARET',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'KROATIA',
    'CUBA' => 'KUUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'KYPROS',
    'CZECH REPUBLIC' => 'TŠEKKI',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'TANSKA',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINIKAANINEN TASAVALTA',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPTI',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'PÄIVÄNTASAAJAN GUINEA',
    'ESTONIA' => 'VIRO',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'FÄRSAARET',
    'FALKLAND ISLANDS' => 'FALKLANDINSAARET',
    'FIJI' => 'FIDŽI',
    'FINLAND' => 'SUOMI',
    'FRANCE' => 'RANSKA',
    'FRENCH GUIANA' => 'RANSKAN GUIANA',
    'FRENCH POLYNESIA' => 'RANSKAN POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'SAKSA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'KREIKKA',
    'GREENLAND' => 'GRÖNLANTI',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'UNKARI',
    'ICELAND' => 'ISLANTI',
    'IFNI' => 'IFNI',
    'INDIA' => 'INTIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANTI',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'NORSUNLUURANNIKKO',
    'JAMAICA' => 'JAMAIKA',
    'JAPAN' => 'JAPANI',
    'JORDAN' => 'JORDANIA',
    'KAZAKHSTAN' => 'KAZAKSTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'ETELÄ-KOREA',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KIRGISIA',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARD-SAARET',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LIETTUA',
    'LUXEMBOURG' => 'LUXEMBURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAKEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALESIA',
    'MALDIVES' => 'MALEDIIVIT',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEKSIKO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKKO',
    'MOZAMBIQUE' => 'MOSAMBIK',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'ALANKOMAAT',
    'NETHERLANDS ANTILLES' => 'ALANKOMAIDEN ANTILLIT',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ALANKOMAIDEN ANTILLIEN NEUTRAALIVYÖHYKE',
    'NEW CALADONIA' => 'UUSI-KALEDONIA',
    'NEW HEBRIDES' => 'UUDET HEBRIDIT',
    'NEW ZEALAND' => 'UUSI-SEELANTI',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLKSAARI',
    'NORWAY' => 'NORJA',
    'OMAN' => 'OMAN',
    'OTHER' => 'MUUT',
    'PACIFIC ISLAND' => 'TYYNENMERENSAARET',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA UUSI-GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPPIINIT',
    'POLAND' => 'PUOLA',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'ITÄ-TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'VALKO-VENÄJÄN TASAVALTA',
    'REPUBLIC OF SOUTH AFRICA' => 'ETELÄ-AFRIKAN TASAVALTA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'VENÄJÄ',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RIUKIUSAARET',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI-ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLIT',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALIMAA',
    'SOUTH AFRICA' => 'ETELÄ-AFRIKKA',
    'SOUTH YEMEN' => 'ETELÄ-JEMEN',
    'SPAIN' => 'ESPANJA',
    'SPANISH SAHARA' => 'ESPANJAN SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS JA NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'LOUNAIS-AFRIKKA',
    'SWAZILAND' => 'SWAZIMAA',
    'SWEDEN' => 'RUOTSI',
    'SWITZERLAND' => 'SVEITSI',
    'SYRIA' => 'SYYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADŽIKISTAN',
    'TANZANIA' => 'TANSANIA',
    'THAILAND' => 'THAIMAA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKKI',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'YHDISTYNEET ARABIEMIRAATIT',
    'UNITED KINGDOM' => 'ISO-BRITANNIA',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'YHDYSVALTAIN TYYNENMEREN SAARET',
    'US VIRGIN ISLANDS' => 'YHDYSVALTAIN NEITSYTSAARET',
    'USA' => 'YHDYSVALLAT',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKAANIVALTIO',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKESAARI',
    'WEST INDIES' => 'LÄNSI-INTIA',
    'WESTERN SAHARA' => 'LÄNSI-SAHARA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan ja Hongkong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (kyrillinen)',
    'CP1252' => 'CP1252 (länsimainen)',
    'EUC-CN' => 'EUC-CN (yksinkertaistettu kiina, GB2312)',
    'EUC-JP' => 'EUC-JP (japani, Unix)',
    'EUC-KR' => 'EUC-KR (korea)',
    'EUC-TW' => 'EUC-TW (Taiwan)',
    'ISO-2022-JP' => 'ISO-2022-JP (japani)',
    'ISO-2022-KR' => 'ISO-2022-KR (korea)',
    'ISO-8859-1' => 'ISO-8859-1 (länsimainen)',
    'ISO-8859-2' => 'ISO-8859-2 (itä-eurooppa)',
    'ISO-8859-3' => 'ISO-8859-3 (latinalainen 3)',
    'ISO-8859-4' => 'ISO-8859-4 (latinalainen 4)',
    'ISO-8859-5' => 'ISO-8859-5 (kyrillinen)',
    'ISO-8859-6' => 'ISO-8859-6 (arabia)',
    'ISO-8859-7' => 'ISO-8859-7 (kreikka)',
    'ISO-8859-8' => 'ISO-8859-8 (heprea)',
    'ISO-8859-9' => 'ISO-8859-9 (latinalainen 5)',
    'ISO-8859-10' => 'ISO-8859-10 (latinalainen 6)',
    'ISO-8859-13' => 'ISO-8859-13 (latinalainen 7)',
    'ISO-8859-14' => 'ISO-8859-14 (latinalainen 8)',
    'ISO-8859-15' => 'ISO-8859-15 (latinalainen 9)',
    'KOI8-R' => 'KOI8-R (kyrillinen, venäjä)',
    'KOI8-U' => 'KOI8-U (kyrillinen, ukraina)',
    'SJIS' => 'SJIS (japani)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrikka/Alger',
    'Africa/Luanda' => 'Afrikka/Luanda',
    'Africa/Porto-Novo' => 'Afrikka/Porto-Novo',
    'Africa/Gaborone' => 'Afrikka/Gaborone',
    'Africa/Ouagadougou' => 'Afrikka/Ouagadougou',
    'Africa/Bujumbura' => 'Afrikka/Bujumbura',
    'Africa/Douala' => 'Afrikka/Douala',
    'Atlantic/Cape_Verde' => 'Atlantti/Kap Verde',
    'Africa/Bangui' => 'Afrikka/Bangui',
    'Africa/Ndjamena' => 'Afrikka/Ndjamena',
    'Indian/Comoro' => 'Intianmeri/Komorit',
    'Africa/Kinshasa' => 'Afrikka/Kinshasa',
    'Africa/Lubumbashi' => 'Afrikka/Lubumbashi',
    'Africa/Brazzaville' => 'Afrikka/Brazzaville',
    'Africa/Abidjan' => 'Afrikka/Abidjan',
    'Africa/Djibouti' => 'Afrikka/Djibouti',
    'Africa/Cairo' => 'Afrikka/Kairo',
    'Africa/Malabo' => 'Afrikka/Malabo',
    'Africa/Asmera' => 'Afrikka/Asmara',
    'Africa/Addis_Ababa' => 'Afrikka/Addis Abeba',
    'Africa/Libreville' => 'Afrikka/Libreville',
    'Africa/Banjul' => 'Afrikka/Banjul',
    'Africa/Accra' => 'Afrikka/Accra',
    'Africa/Conakry' => 'Afrikka/Conakry',
    'Africa/Bissau' => 'Afrikka/Bissau',
    'Africa/Nairobi' => 'Afrikka/Nairobi',
    'Africa/Maseru' => 'Afrikka/Maseru',
    'Africa/Monrovia' => 'Afrikka/Monrovia',
    'Africa/Tripoli' => 'Afrikka/Tripoli',
    'Indian/Antananarivo' => 'Intianmeri/Antananarivo',
    'Africa/Blantyre' => 'Afrikka/Blantyre',
    'Africa/Bamako' => 'Afrikka/Bamako',
    'Africa/Nouakchott' => 'Afrikka/Nouakchott',
    'Indian/Mauritius' => 'Intianmeri/Mauritius',
    'Indian/Mayotte' => 'Intianmeri/Mayotte',
    'Africa/Casablanca' => 'Afrikka/Casablanca',
    'Africa/El_Aaiun' => 'Afrikka/El Aaiún',
    'Africa/Maputo' => 'Afrikka/Maputo',
    'Africa/Windhoek' => 'Afrikka/Windhoek',
    'Africa/Niamey' => 'Afrikka/Niamey',
    'Africa/Lagos' => 'Afrikka/Lagos',
    'Indian/Reunion' => 'Intianmeri/Réunion',
    'Africa/Kigali' => 'Afrikka/Kigali',
    'Atlantic/St_Helena' => 'Atlantti/St. Helena',
    'Africa/Sao_Tome' => 'Afrikka/Sao Tome',
    'Africa/Dakar' => 'Afrikka/Dakar',
    'Indian/Mahe' => 'Intianmeri/Mahe',
    'Africa/Freetown' => 'Afrikka/Freetown',
    'Africa/Mogadishu' => 'Afrikka/Mogadishu',
    'Africa/Johannesburg' => 'Afrikka/Johannesburg',
    'Africa/Khartoum' => 'Afrikka/Khartum',
    'Africa/Mbabane' => 'Afrikka/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrikka/Dar es Salaam',
    'Africa/Lome' => 'Afrikka/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Afrikka/Kampala',
    'Africa/Lusaka' => 'Afrikka/Lusaka',
    'Africa/Harare' => 'Afrikka/Harare',
    'Antarctica/Casey' => 'Etelämanner/Casey',
    'Antarctica/Davis' => 'Etelämanner/Davis',
    'Antarctica/Mawson' => 'Etelämanner/Mawson',
    'Indian/Kerguelen' => 'Intianmeri/Kerguelen',
    'Antarctica/DumontDUrville' => 'Etelämanner/Durmont d\'Urville',
    'Antarctica/Syowa' => 'Etelämanner/Syowa',
    'Antarctica/Vostok' => 'Etelämanner/Vostok',
    'Antarctica/Rothera' => 'Etelämanner/Rothera',
    'Antarctica/Palmer' => 'Etelämanner/Palmer',
    'Antarctica/McMurdo' => 'Etelämanner/McMurdo',
    'Asia/Kabul' => 'Aasia/Kabul',
    'Asia/Yerevan' => 'Aasia/Jerevan',
    'Asia/Baku' => 'Aasia/Baku',
    'Asia/Bahrain' => 'Aasia/Bahrain',
    'Asia/Dhaka' => 'Aasia/Dhaka',
    'Asia/Thimphu' => 'Aasia/Thimphu',
    'Indian/Chagos' => 'Intianmeri/Chagos',
    'Asia/Brunei' => 'Aasia/Brunei',
    'Asia/Rangoon' => 'Aasia/Yangon',
    'Asia/Phnom_Penh' => 'Aasia/Phnom Penh',
    'Asia/Beijing' => 'Aasia/Peking',
    'Asia/Harbin' => 'Aasia/Harbin',
    'Asia/Shanghai' => 'Aasia/Shanghai',
    'Asia/Chongqing' => 'Aasia/Chongqing',
    'Asia/Urumqi' => 'Aasia/Ürümqi',
    'Asia/Kashgar' => 'Aasia/Kašgar',
    'Asia/Hong_Kong' => 'Aasia/Hongkong',
    'Asia/Taipei' => 'Aasia/Taipei',
    'Asia/Macau' => 'Aasia/Macao',
    'Asia/Nicosia' => 'Aasia/Nikosia',
    'Asia/Tbilisi' => 'Aasia/Tbilisi',
    'Asia/Dili' => 'Aasia/Dili',
    'Asia/Calcutta' => 'Aasia/Kalkutta',
    'Asia/Jakarta' => 'Aasia/Jakarta',
    'Asia/Pontianak' => 'Aasia/Pontianak',
    'Asia/Makassar' => 'Aasia/Makassar',
    'Asia/Jayapura' => 'Aasia/Jayapura',
    'Asia/Tehran' => 'Aasia/Teheran',
    'Asia/Baghdad' => 'Aasia/Bagdad',
    'Asia/Jerusalem' => 'Aasia/Jerusalem',
    'Asia/Tokyo' => 'Aasia/Tokio',
    'Asia/Amman' => 'Aasia/Amman',
    'Asia/Almaty' => 'Aasia/Almaty',
    'Asia/Qyzylorda' => 'Aasia/Qızılorda',
    'Asia/Aqtobe' => 'Aasia/Aqtobe',
    'Asia/Aqtau' => 'Aasia/Aqtau',
    'Asia/Oral' => 'Aasia/Uralsk',
    'Asia/Bishkek' => 'Aasia/Biškek',
    'Asia/Seoul' => 'Aasia/Soul',
    'Asia/Pyongyang' => 'Aasia/Pjongjang',
    'Asia/Kuwait' => 'Aasia/Kuwait',
    'Asia/Vientiane' => 'Aasia/Vientiane',
    'Asia/Beirut' => 'Aasia/Beirut',
    'Asia/Kuala_Lumpur' => 'Aasia/Kuala Lumpur',
    'Asia/Kuching' => 'Aasia/Kuching',
    'Indian/Maldives' => 'Intianmeri/Malediivit',
    'Asia/Hovd' => 'Aasia/Hovd',
    'Asia/Ulaanbaatar' => 'Aasia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Aasia/Choibalsan',
    'Asia/Katmandu' => 'Aasia/Katmandu',
    'Asia/Muscat' => 'Aasia/Masqat',
    'Asia/Karachi' => 'Aasia/Karachi',
    'Asia/Gaza' => 'Aasia/Gaza',
    'Asia/Manila' => 'Aasia/Manila',
    'Asia/Qatar' => 'Aasia/Qatar',
    'Asia/Riyadh' => 'Aasia/Riad',
    'Asia/Singapore' => 'Aasia/Singapore',
    'Asia/Colombo' => 'Aasia/Colombo',
    'Asia/Damascus' => 'Aasia/Damaskos',
    'Asia/Dushanbe' => 'Aasia/Dušanbe',
    'Asia/Bangkok' => 'Aasia/Bangkok',
    'Asia/Ashgabat' => 'Aasia/Ašgabat',
    'Asia/Dubai' => 'Aasia/Dubai',
    'Asia/Samarkand' => 'Aasia/Samarkand',
    'Asia/Tashkent' => 'Aasia/Taškent',
    'Asia/Saigon' => 'Aasia/Saigon',
    'Asia/Aden' => 'Aasia/Aden',
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
    'Indian/Christmas' => 'Intianmeri/Joulusaari',
    'Pacific/Rarotonga' => 'Tyynimeri/Rarotonga',
    'Indian/Cocos' => 'Intianmeri/Cocos',
    'Pacific/Fiji' => 'Tyynimeri/Fidži',
    'Pacific/Gambier' => 'Tyynimeri/Gambier',
    'Pacific/Marquesas' => 'Tyynimeri/Marquesas',
    'Pacific/Tahiti' => 'Tyynimeri/Tahiti',
    'Pacific/Guam' => 'Tyynimeri/Guam',
    'Pacific/Tarawa' => 'Tyynimeri/Tarawa',
    'Pacific/Enderbury' => 'Tyynimeri/Enderbury',
    'Pacific/Kiritimati' => 'Tyynimeri/Kiritimati',
    'Pacific/Saipan' => 'Tyynimeri/Saipan',
    'Pacific/Majuro' => 'Tyynimeri/Majuro',
    'Pacific/Kwajalein' => 'Tyynimeri/Kwajalein',
    'Pacific/Truk' => 'Tyynimeri/Truk',
    'Pacific/Pohnpei' => 'Tyynimeri/Pohnpei',
    'Pacific/Kosrae' => 'Tyynimeri/Kosrae',
    'Pacific/Nauru' => 'Tyynimeri/Nauru',
    'Pacific/Noumea' => 'Tyynimeri/Noumea',
    'Pacific/Auckland' => 'Tyynimeri/Auckland',
    'Pacific/Chatham' => 'Tyynimeri/Chatham',
    'Pacific/Niue' => 'Tyynimeri/Niue',
    'Pacific/Norfolk' => 'Tyynimeri/Norfolk',
    'Pacific/Palau' => 'Tyynimeri/Palau',
    'Pacific/Port_Moresby' => 'Tyynimeri/Port Moresby',
    'Pacific/Pitcairn' => 'Tyynimeri/Pitcairn',
    'Pacific/Pago_Pago' => 'Tyynimeri/Pago Pago',
    'Pacific/Apia' => 'Tyynimeri/Apia',
    'Pacific/Guadalcanal' => 'Tyynimeri/Guadalcanal',
    'Pacific/Fakaofo' => 'Tyynimeri/Fakaofo',
    'Pacific/Tongatapu' => 'Tyynimeri/Tongatapu',
    'Pacific/Funafuti' => 'Tyynimeri/Funafuti',
    'Pacific/Johnston' => 'Tyynimeri/Johnston',
    'Pacific/Midway' => 'Tyynimeri/Midway',
    'Pacific/Wake' => 'Tyynimeri/Wake',
    'Pacific/Efate' => 'Tyynimeri/Efate',
    'Pacific/Wallis' => 'Tyynimeri/Wallis',
    'Europe/London' => 'Eurooppa/Lontoo',
    'Europe/Dublin' => 'Eurooppa/Dublin',
    'WET' => 'Länsi-Euroopan aika (+0/+1)',
    'CET' => 'Keski-Euroopan aika (+1/+2)',
    'MET' => 'Moskovan aika (+3)',
    'EET' => 'Itä-Euroopan aika (+2/+3)',
    'Europe/Tirane' => 'Eurooppa/Tirana',
    'Europe/Andorra' => 'Eurooppa/Andorra',
    'Europe/Vienna' => 'Eurooppa/Wien',
    'Europe/Minsk' => 'Eurooppa/Minsk',
    'Europe/Brussels' => 'Eurooppa/Bryssel',
    'Europe/Sofia' => 'Eurooppa/Sofia',
    'Europe/Prague' => 'Eurooppa/Praha',
    'Europe/Copenhagen' => 'Eurooppa/Kööpenhamina',
    'Atlantic/Faeroe' => 'Atlantti/Färsaaret',
    'America/Danmarkshavn' => 'Amerikka/Danmarkshavn',
    'America/Scoresbysund' => 'Amerikka/Scoresbysund',
    'America/Godthab' => 'Amerikka/Godthab',
    'America/Thule' => 'Amerikka/Thule',
    'Europe/Tallinn' => 'Eurooppa/Tallinna',
    'Europe/Helsinki' => 'Eurooppa/Helsinki',
    'Europe/Paris' => 'Eurooppa/Pariisi',
    'Europe/Berlin' => 'Eurooppa/Berliini',
    'Europe/Gibraltar' => 'Eurooppa/Gibraltar',
    'Europe/Athens' => 'Eurooppa/Ateena',
    'Europe/Budapest' => 'Eurooppa/Budapest',
    'Atlantic/Reykjavik' => 'Atlantti/Reykjavík',
    'Europe/Rome' => 'Eurooppa/Rooma',
    'Europe/Riga' => 'Eurooppa/Riika',
    'Europe/Vaduz' => 'Eurooppa/Vaduz',
    'Europe/Vilnius' => 'Eurooppa/Vilna',
    'Europe/Luxembourg' => 'Eurooppa/Luxemburg',
    'Europe/Malta' => 'Eurooppa/Malta',
    'Europe/Chisinau' => 'Eurooppa/Chișinău',
    'Europe/Monaco' => 'Eurooppa/Monaco',
    'Europe/Amsterdam' => 'Eurooppa/Amsterdam',
    'Europe/Oslo' => 'Eurooppa/Oslo',
    'Europe/Warsaw' => 'Eurooppa/Varsova',
    'Europe/Lisbon' => 'Eurooppa/Lissabon',
    'Atlantic/Azores' => 'Atlantti/Azorit',
    'Atlantic/Madeira' => 'Atlantti/Madeira',
    'Europe/Bucharest' => 'Eurooppa/Bukarest',
    'Europe/Kaliningrad' => 'Eurooppa/Kaliningrad',
    'Europe/Moscow' => 'Eurooppa/Moskova',
    'Europe/Samara' => 'Eurooppa/Samara',
    'Asia/Yekaterinburg' => 'Aasia/Jekaterinburg',
    'Asia/Omsk' => 'Aasia/Omsk',
    'Asia/Novosibirsk' => 'Aasia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Aasia/Krasnojarsk',
    'Asia/Irkutsk' => 'Aasia/Irkutsk',
    'Asia/Yakutsk' => 'Aasia/Jakutsk',
    'Asia/Vladivostok' => 'Aasia/Vladivostok',
    'Asia/Sakhalin' => 'Aasia/Sahalin',
    'Asia/Magadan' => 'Aasia/Magadan',
    'Asia/Kamchatka' => 'Aasia/Kamtšatka',
    'Asia/Anadyr' => 'Aasia/Anadyr',
    'Europe/Belgrade' => 'Eurooppa/Belgrad',
    'Europe/Madrid' => 'Eurooppa/Madrid',
    'Africa/Ceuta' => 'Afrikka/Ceuta',
    'Atlantic/Canary' => 'Atlantti/Kanariansaaret',
    'Europe/Stockholm' => 'Eurooppa/Tukholma',
    'Europe/Zurich' => 'Eurooppa/Zürich',
    'Europe/Istanbul' => 'Eurooppa/Istanbul',
    'Europe/Kiev' => 'Eurooppa/Kiova',
    'Europe/Uzhgorod' => 'Eurooppa/Užhorod',
    'Europe/Zaporozhye' => 'Eurooppa/Zaporižžja',
    'Europe/Simferopol' => 'Eurooppa/Simferopol',
    'America/New_York' => 'Amerikka/New York',
    'America/Chicago' => 'Amerikka/Chicago',
    'America/North_Dakota/Center' => 'Amerikka/North Dakota/Center',
    'America/Denver' => 'Amerikka/Denver',
    'America/Los_Angeles' => 'Amerikka/Los Angeles',
    'America/Juneau' => 'Amerikka/Juneau',
    'America/Yakutat' => 'Amerikka/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'Amerikka/Nome',
    'America/Adak' => 'Amerikka/Adak',
    'Pacific/Honolulu' => 'Tyynimeri/Honolulu',
    'America/Phoenix' => 'Amerikka/Phoenix',
    'America/Boise' => 'Amerikka/Boise',
    'America/Indiana/Indianapolis' => 'Amerikka/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amerikka/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amerikka/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amerikka/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amerikka/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amerikka/Kentucky/Monticello',
    'America/Detroit' => 'Amerikka/Detroit',
    'America/Menominee' => 'Amerikka/Menominee',
    'America/St_Johns' => 'Amerikka/St. Johns',
    'America/Goose_Bay' => 'Amerikka/Goose Bay',
    'America/Halifax' => 'Amerikka/Halifax',
    'America/Glace_Bay' => 'Amerikka/Glace Bay',
    'America/Montreal' => 'Amerikka/Montréal',
    'America/Toronto' => 'Amerikka/Toronto',
    'America/Thunder_Bay' => 'Amerikka/Thunder Bay',
    'America/Nipigon' => 'Amerikka/Nipigon',
    'America/Rainy_River' => 'Amerikka/Rainy River',
    'America/Winnipeg' => 'Amerikka/Winnipeg',
    'America/Regina' => 'Amerikka/Regina',
    'America/Swift_Current' => 'Amerikka/Swift Current',
    'America/Edmonton' => 'Amerikka/Edmonton',
    'America/Vancouver' => 'Amerikka/Vancouver',
    'America/Dawson_Creek' => 'Amerikka/Dawson Creek',
    'America/Pangnirtung' => 'Amerikka/Pangnirtung',
    'America/Iqaluit' => 'Amerikka/Iqaluit',
    'America/Coral_Harbour' => 'Amerikka/Coral Harbour',
    'America/Rankin_Inlet' => 'Amerikka/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amerikka/Cambridge Bay',
    'America/Yellowknife' => 'Amerikka/Yellowknife',
    'America/Inuvik' => 'Amerikka/Inuvik',
    'America/Whitehorse' => 'Amerikka/Whitehorse',
    'America/Dawson' => 'Amerikka/Dawson',
    'America/Cancun' => 'Amerikka/Cancun',
    'America/Merida' => 'Amerikka/Merida',
    'America/Monterrey' => 'Amerikka/Monterrey',
    'America/Mexico_City' => 'Amerikka/Mexico City',
    'America/Chihuahua' => 'Amerikka/Chihuahua',
    'America/Hermosillo' => 'Amerikka/Hermosillo',
    'America/Mazatlan' => 'Amerikka/Mazatlan',
    'America/Tijuana' => 'Amerikka/Tijuana',
    'America/Anguilla' => 'Amerikka/Anguilla',
    'America/Antigua' => 'Amerikka/Antigua',
    'America/Nassau' => 'Amerikka/Nassau',
    'America/Barbados' => 'Amerikka/Barbados',
    'America/Belize' => 'Amerikka/Belize',
    'Atlantic/Bermuda' => 'Atlantti/Bermuda',
    'America/Cayman' => 'Amerikka/Cayman',
    'America/Costa_Rica' => 'Amerikka/Costa Rica',
    'America/Havana' => 'Amerikka/Havanna',
    'America/Dominica' => 'Amerikka/Dominica',
    'America/Santo_Domingo' => 'Amerikka/Santo Domingo',
    'America/El_Salvador' => 'Amerikka/El Salvador',
    'America/Grenada' => 'Amerikka/Grenada',
    'America/Guadeloupe' => 'Amerikka/Guadeloupe',
    'America/Guatemala' => 'Amerikka/Guatemala',
    'America/Port-au-Prince' => 'Amerikka/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerikka/Tegucigalpa',
    'America/Jamaica' => 'Amerikka/Jamaika',
    'America/Martinique' => 'Amerikka/Martinique',
    'America/Montserrat' => 'Amerikka/Montserrat',
    'America/Managua' => 'Amerikka/Managua',
    'America/Panama' => 'Amerikka/Panama',
    'America/Puerto_Rico' => 'Amerikka/Puerto Rico',
    'America/St_Kitts' => 'Amerikka/St. Kitts',
    'America/St_Lucia' => 'Amerikka/St. Lucia',
    'America/Miquelon' => 'Amerikka/Miquelon',
    'America/St_Vincent' => 'Amerikka/St. Vincent',
    'America/Grand_Turk' => 'Amerikka/Grand Turk',
    'America/Tortola' => 'Amerikka/Tortola',
    'America/St_Thomas' => 'Amerikka/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amerikka/Argentiina/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amerikka/Argentiina/Cordoba',
    'America/Argentina/Tucuman' => 'Amerikka/Argentiina/Tucuman',
    'America/Argentina/La_Rioja' => 'Amerikka/Argentiina/La Rioja',
    'America/Argentina/San_Juan' => 'Amerikka/Argentiina/San Juan',
    'America/Argentina/Jujuy' => 'Amerikka/Argentiina/Jujuy',
    'America/Argentina/Catamarca' => 'Amerikka/Argentiina/Catamarca',
    'America/Argentina/Mendoza' => 'Amerikka/Argentiina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerikka/Argentiina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amerikka/Argentiina/Ushuaia',
    'America/Aruba' => 'Amerikka/Aruba',
    'America/La_Paz' => 'Amerikka/La Paz',
    'America/Noronha' => 'Amerikka/Noronha',
    'America/Belem' => 'Amerikka/Belem',
    'America/Fortaleza' => 'Amerikka/Fortaleza',
    'America/Recife' => 'Amerikka/Recife',
    'America/Araguaina' => 'Amerikka/Araguaina',
    'America/Maceio' => 'Amerikka/Maceio',
    'America/Bahia' => 'Amerikka/Bahia',
    'America/Sao_Paulo' => 'Amerikka/São Paulo',
    'America/Campo_Grande' => 'Amerikka/Campo Grande',
    'America/Cuiaba' => 'Amerikka/Cuiaba',
    'America/Porto_Velho' => 'Amerikka/Porto Velho',
    'America/Boa_Vista' => 'Amerikka/Boa Vista',
    'America/Manaus' => 'Amerikka/Manaus',
    'America/Eirunepe' => 'Amerikka/Eirunepe',
    'America/Rio_Branco' => 'Amerikka/Rio Branco',
    'America/Santiago' => 'Amerikka/Santiago',
    'Pacific/Easter' => 'Tyynimeri/Pääsiäissaari',
    'America/Bogota' => 'Amerikka/Bogota',
    'America/Curacao' => 'Amerikka/Curaçao',
    'America/Guayaquil' => 'Amerikka/Guayaquil',
    'Pacific/Galapagos' => 'Tyynimeri/Galapagos',
    'Atlantic/Stanley' => 'Atlantti/Stanley',
    'America/Cayenne' => 'Amerikka/Cayenne',
    'America/Guyana' => 'Amerikka/Guyana',
    'America/Asuncion' => 'Amerikka/Asuncion',
    'America/Lima' => 'Amerikka/Lima',
    'Atlantic/South_Georgia' => 'Atlantti/Etelä-Georgia',
    'America/Paramaribo' => 'Amerikka/Paramaribo',
    'America/Port_of_Spain' => 'Amerikka/Port-of-Spain',
    'America/Montevideo' => 'Amerikka/Montevideo',
    'America/Caracas' => 'Amerikka/Caracas',
);

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
// PR 5464
$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
    'event' => 'Tapahtuma',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanja',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Sähköposti',
    'system' => 'Järjestelä',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Tietokanta'; // Shows in the ALL menu entries
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories'; // Shows in the ALL menu entries
$app_list_strings['aok_status_list']['Draft'] = 'Luonnos';
$app_list_strings['aok_status_list']['Expired'] = 'Vanhentunut';
$app_list_strings['aok_status_list']['In_Review'] = 'Tarkastettavana';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Yksityinen';
$app_list_strings['aok_status_list']['published_public'] = 'Kaikille avoin';

$app_list_strings['moduleList']['FP_events'] = 'Tapahtumat';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Sijainnit';

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

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Palvelupyyntötapahtumat';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Palvelupyyntöpäivitykset';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Vastaa tämän rivin yläpuolelle ===';


//aop PR 5426
$app_list_strings['moduleList']['JAccount'] = 'JAccount';

$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Avattu',
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
        'Closed_Duplicate' => 'Monista',
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
$app_list_strings['moduleList']['AOR_Charts'] = 'Raporttikaaviot';
$app_list_strings['moduleList']['AOR_Fields'] = 'Raporttiin tulevat kentät';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Ajastetut raportit';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Erisuuri kuin';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Suurempi kuin';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Pienempi kuin';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Suurempi tai yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Pienempi tai yhtäsuuri kuin';
$app_list_strings['aor_operator_list']['Contains'] = 'Sisältää';
$app_list_strings['aor_operator_list']['Not_Contains'] = 'Ei sisällä';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Alkaa';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Päättyy';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'V-k-p';
$app_list_strings['aor_format_options']['Ymd'] = 'Vkp';
$app_list_strings['aor_format_options']['Y-m'] = 'V-k';
$app_list_strings['aor_format_options']['d/m/Y'] = 'p/k/V';
$app_list_strings['aor_format_options']['Y'] = 'V';
$app_list_strings['aor_condition_operator_list']['And'] = 'ja';
$app_list_strings['aor_condition_operator_list']['OR'] = 'TAI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Arvo';
$app_list_strings['aor_condition_type_list']['Field'] = 'Kenttä';
$app_list_strings['aor_condition_type_list']['Date'] = 'Pvm';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Yksi kohteista';
$app_list_strings['aor_condition_type_list']['Period'] = 'Kausi';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Nykyinen käyttäjä';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuuttia';
$app_list_strings['aor_date_type_list']['hour'] = 'Tunnit';
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
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Kuukausittain';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Viikoittain';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Päivittäin';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktiivinen';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Ei aktiivinen';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Sähköpostiosoite';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Käyttäjä';
$app_list_strings['aor_email_type_list']['Users'] = 'Käyttäjä';
$app_list_strings['aor_assign_options']['all'] = 'KAIKKI käyttäjät';
$app_list_strings['aor_assign_options']['role'] = 'KAIKKI käyttäjät, joiden rooli on';
$app_list_strings['aor_assign_options']['security_group'] = 'KAIKKI käyttäjät Turvaryhmässä';
$app_list_strings['date_time_period_list']['today'] = 'Tänään';
$app_list_strings['date_time_period_list']['yesterday'] = 'Eilen';
$app_list_strings['date_time_period_list']['this_week'] = 'Tällä viikolla';
$app_list_strings['date_time_period_list']['last_week'] = 'Viime viikko';
$app_list_strings['date_time_period_list']['last_month'] = 'Viime kuussa';
$app_list_strings['date_time_period_list']['this_month'] = 'Tässä kuussa';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Tämä vuosineljännes';
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
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Tuotetarjoukset';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Tuoterivien ryhmät';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Tarjouspyynnöt';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyytikko';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Kilpailija';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Asiakas';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integraattori';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Sijoittaja';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Kumppani';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Lehdistö';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Jälleenmyyjä';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Muuta';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Luonnos';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Neuvottelussa';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Toimitettu';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Odottaa';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Vahvistettu';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Suljettu, hyväksytty';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Suljettu, hylätty';
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
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Kumppani';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Lehdistö';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Jälleenmyyjä';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Muuta';
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
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Tarjouspyynnöt';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Laskut';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Sopimukset';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Tarjouspyynnöt';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Laskut';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Sopimukset';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Asiakkaat';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontaktit';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Liidit';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Ei aloitettu';
$app_list_strings['contract_status_list']['In Progress'] = 'Käynnissä';
$app_list_strings['contract_status_list']['Signed'] = 'Allekirjoitettu';
$app_list_strings['contract_type_list']['Type'] = 'Tyyppi';
$app_strings['LBL_PRINT_AS_PDF'] = 'Tulosta PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Ole hyvä ja valitse mallipohja';
$app_strings['LBL_NO_TEMPLATE'] = 'VIRHE\nMallipohjia ei löytynyt.\nOle hyvä ja mene PDF-pohjat moduuliin ja luo uusi';

//aow PR 5775
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Työnkulku';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Työnkulun ehdot';
$app_list_strings['moduleList']['AOW_Processed'] = 'Prosessin tarkistus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Työnkulun toiminnot';
$app_list_strings['aow_status_list']['Active'] = 'Aktiivinen';
$app_list_strings['aow_status_list']['Inactive'] = 'Ei aktiivinen';
$app_list_strings['aow_operator_list']['Equal_To'] = 'On yhtäkuin';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Erisuuri kuin';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Suurempi kuin';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Pienempi kuin';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Suurempi tai yhtäsuuri kuin';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Pienempi tai yhtäsuuri kuin';
$app_list_strings['aow_operator_list']['Contains'] = 'Sisältää';
$app_list_strings['aow_operator_list']['Not_Contains'] = 'Ei sisällä';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Alkaa';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Päättyy';
$app_list_strings['aow_operator_list']['is_null'] = 'On tyhjä';
$app_list_strings['aow_operator_list']['is_not_null'] = 'Is Not Null';
$app_list_strings['aow_operator_list']['Anniversary'] = 'Anniversary';
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
$app_list_strings['aow_date_type_list']['minute'] = 'Minuuttia';
$app_list_strings['aow_date_type_list']['hour'] = 'Tunnit';
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
$app_list_strings['aow_email_type_list']['Email Address'] = 'Sähköpostiosoite';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Tietueen sähköposti';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Liittyvä kenttä';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Käyttäjä';
$app_list_strings['aow_email_type_list']['Users'] = 'Käyttäjä';
$app_list_strings['aow_email_type_list']['Record Field'] = 'Kenttä';
$app_list_strings['aow_email_to_list']['to'] = 'Vastaanottaja';
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
$app_list_strings['duration_unit_dom']['Days'] = 'Päivää';
$app_list_strings['duration_unit_dom']['Hours'] = 'Tunnit';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Katso Gantt-kaavio';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Luo projekti';

//gmaps
$app_strings['LBL_MAP'] = 'Kartta';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Pituuspiiri';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Leveyspiiri';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocoden tila';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Osoite';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kartat';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Mailit';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometrit';

$app_list_strings['map_module_type_list']['Accounts'] = 'Asiakkaat';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontaktit';
$app_list_strings['map_module_type_list']['Cases'] = 'Palvelupyynnöt';
$app_list_strings['map_module_type_list']['Leads'] = 'Liidit';
$app_list_strings['map_module_type_list']['Meetings'] = 'Katso kokouksia';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Myyntimahdollisuudet';
$app_list_strings['map_module_type_list']['Project'] = 'Projektit';
$app_list_strings['map_module_type_list']['Prospects'] = 'Prospektit';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Asiakas';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontaktit';
$app_list_strings['map_relate_type_list']['Cases'] = 'Palvelupyyntö';
$app_list_strings['map_relate_type_list']['Leads'] = 'Liidi';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Tapaaminen';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Myyntimahdollisuus';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekti';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Prospektit';

$app_list_strings['marker_image_list']['accident'] = 'Tapaturma';
$app_list_strings['marker_image_list']['administration'] = 'Ylläpito';
$app_list_strings['marker_image_list']['agriculture'] = 'Maatalous';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Lentokone pieni';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Lentoturismia';
$app_list_strings['marker_image_list']['airport'] = 'Lentokenttä';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphiteatteri';
$app_list_strings['marker_image_list']['apartment'] = 'Huoneisto';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvaario';
$app_list_strings['marker_image_list']['arch'] = 'Kaari';
$app_list_strings['marker_image_list']['atm'] = 'Pankkiautomaatti';
$app_list_strings['marker_image_list']['audio'] = 'Ääni';
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
$app_list_strings['marker_image_list']['cluster'] = 'Rykelmä';
$app_list_strings['marker_image_list']['cluster_2'] = 'Rykelmä 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Rykelmä 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Rykelmä 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Rykelmä 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kahvi';
$app_list_strings['marker_image_list']['community_centre'] = 'Monitoimitalo';
$app_list_strings['marker_image_list']['company'] = 'Yritys';
$app_list_strings['marker_image_list']['conference'] = 'Konfferenssi';
$app_list_strings['marker_image_list']['construction'] = 'Rakennustyömaa';
$app_list_strings['marker_image_list']['convenience'] = 'Lähikauppa';
$app_list_strings['marker_image_list']['court'] = 'Tuomioistuin';
$app_list_strings['marker_image_list']['cruise'] = 'Risteily';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Valuutanvaihto';
$app_list_strings['marker_image_list']['customs'] = 'Tulli';
$app_list_strings['marker_image_list']['cycling'] = 'Pyöräily';
$app_list_strings['marker_image_list']['dam'] = 'Pato';
$app_list_strings['marker_image_list']['dentist'] = 'Hammaslääkäri';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Tavaratalo';
$app_list_strings['marker_image_list']['disability'] = 'Invalidi';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Invapysäköinti';
$app_list_strings['marker_image_list']['doctor'] = 'Lääkäri';
$app_list_strings['marker_image_list']['dog_leash'] = 'Koiran talutushihna';
$app_list_strings['marker_image_list']['down'] = 'Alas';
$app_list_strings['marker_image_list']['down_left'] = 'Alas vasemmalle';
$app_list_strings['marker_image_list']['down_right'] = 'Alas oikealle';
$app_list_strings['marker_image_list']['down_then_left'] = 'Alas, sitten vasemmalle';
$app_list_strings['marker_image_list']['down_then_right'] = 'Alas, sitten oikealle';
$app_list_strings['marker_image_list']['drugs'] = 'Lääkkeitä';
$app_list_strings['marker_image_list']['elevator'] = 'Hissi';
$app_list_strings['marker_image_list']['embassy'] = 'Suurlähetystö';
$app_list_strings['marker_image_list']['expert'] = 'Asiantuntija';
$app_list_strings['marker_image_list']['factory'] = 'Tehdas';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Putoavia kiviä';
$app_list_strings['marker_image_list']['fast_food'] = 'Pikaruoka';
$app_list_strings['marker_image_list']['festival'] = 'Festivaali';
$app_list_strings['marker_image_list']['fjord'] = 'Vuono';
$app_list_strings['marker_image_list']['forest'] = 'Metsä';
$app_list_strings['marker_image_list']['fountain'] = 'Suihkulähde';
$app_list_strings['marker_image_list']['friday'] = 'Perjantai';
$app_list_strings['marker_image_list']['garden'] = 'Puutarha';
$app_list_strings['marker_image_list']['gas_station'] = 'Huoltoasema';
$app_list_strings['marker_image_list']['geyser'] = 'Geysir';
$app_list_strings['marker_image_list']['gifts'] = 'Lahjoja';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Ruokakauppa';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kampaaja';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopteri';
$app_list_strings['marker_image_list']['highway'] = 'Valtatie';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historiallinen kortteli';
$app_list_strings['marker_image_list']['home'] = 'Koti';
$app_list_strings['marker_image_list']['hospital'] = 'Sairaala';
$app_list_strings['marker_image_list']['hostel'] = 'Hostelli';
$app_list_strings['marker_image_list']['hotel'] = 'Hotelli';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotelli, 1 tähden';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotelli, 2 tähden';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotelli, 3 tähden';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotelli, 4 tähden';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotelli, 5 tähden';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Oikeus';
$app_list_strings['marker_image_list']['lake'] = 'Järvi';
$app_list_strings['marker_image_list']['laundromat'] = 'Pesula';
$app_list_strings['marker_image_list']['left'] = 'Vasen';
$app_list_strings['marker_image_list']['left_then_down'] = 'Vasen, sitten alas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Vasen, sitten ylös';
$app_list_strings['marker_image_list']['library'] = 'Kirjasto';
$app_list_strings['marker_image_list']['lighthouse'] = 'Majakka';
$app_list_strings['marker_image_list']['liquor'] = 'Viina';
$app_list_strings['marker_image_list']['lock'] = 'Lukko';
$app_list_strings['marker_image_list']['main_road'] = 'Päätie';
$app_list_strings['marker_image_list']['massage'] = 'Hieronta';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Kännykkätorni';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderni torni';
$app_list_strings['marker_image_list']['monastery'] = 'Luostari';
$app_list_strings['marker_image_list']['monday'] = 'Maanantai';
$app_list_strings['marker_image_list']['monument'] = 'Monumentti';
$app_list_strings['marker_image_list']['mosque'] = 'Moskeija';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moottoripyörä';
$app_list_strings['marker_image_list']['museum'] = 'Museo';
$app_list_strings['marker_image_list']['music_live'] = 'Livemusiikki';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Öljypumppu';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palatsi';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoraama';
$app_list_strings['marker_image_list']['park'] = 'Puisto';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Liityntäpysäköinti';
$app_list_strings['marker_image_list']['parking'] = 'Pysäköinti';
$app_list_strings['marker_image_list']['photo'] = 'Kuva';
$app_list_strings['marker_image_list']['picnic'] = 'Piknikki';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Vierailemattomat paikat';
$app_list_strings['marker_image_list']['places_visited'] = 'Vieraillut paikat';
$app_list_strings['marker_image_list']['playground'] = 'Leikkikenttä';
$app_list_strings['marker_image_list']['police'] = 'Poliisi';
$app_list_strings['marker_image_list']['port'] = 'Satama';
$app_list_strings['marker_image_list']['postal'] = 'Posti';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Virtalinjapylväs';
$app_list_strings['marker_image_list']['power_plant'] = 'Voimalaitos';
$app_list_strings['marker_image_list']['power_substation'] = 'Sähköala-asema';
$app_list_strings['marker_image_list']['public_art'] = 'Julkinen taideteos';
$app_list_strings['marker_image_list']['rain'] = 'Sadetta';
$app_list_strings['marker_image_list']['real_estate'] = 'Kiinteistö';
$app_list_strings['marker_image_list']['regroup'] = 'Jälleenkokoontuminen';
$app_list_strings['marker_image_list']['resort'] = 'Lomakohde';
$app_list_strings['marker_image_list']['restaurant'] = 'Ravintola';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Ravintola, afrikkalainen';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Ravintola, BBQ';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Ravintola, buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Ravintola, kiinalainen';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Ravintola, kala-';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Ravintola, fish-and-chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ravintola, gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Ravintola, kreikkalainen';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Ravintola, intialainen';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Ravintola, italialainen';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Ravintola, japanilainen';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Ravintola, kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Ravintola, korealainen';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Ravintola, välimeren';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Ravintola, meksikolainen';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Ravintola, romanttinen';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Ravintola, thaimaalainen';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Ravintola, turkkilainen';
$app_list_strings['marker_image_list']['right'] = 'Oikea';
$app_list_strings['marker_image_list']['right_then_down'] = 'Oikealle, sitten alas';
$app_list_strings['marker_image_list']['right_then_up'] = 'Oikealle, sitten ylös';
$app_list_strings['marker_image_list']['saturday'] = 'Lauantai';
$app_list_strings['marker_image_list']['school'] = 'Koulu';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Kauppakeskus';
$app_list_strings['marker_image_list']['shore'] = 'Ranta';
$app_list_strings['marker_image_list']['sight'] = 'Nähtävyys';
$app_list_strings['marker_image_list']['small_city'] = 'Pieni kaupunki';
$app_list_strings['marker_image_list']['snow'] = 'Lumi';
$app_list_strings['marker_image_list']['spaceport'] = 'Avaruuskeskus';
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
$app_list_strings['marker_image_list']['speed_hump'] = 'Töyssy';
$app_list_strings['marker_image_list']['stadium'] = 'Stadioni';
$app_list_strings['marker_image_list']['statue'] = 'Patsas';
$app_list_strings['marker_image_list']['steam_train'] = 'Höyryjuna';
$app_list_strings['marker_image_list']['stop'] = 'Seis';
$app_list_strings['marker_image_list']['stoplight'] = 'Liikennevalo';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Aurinko';
$app_list_strings['marker_image_list']['sunday'] = 'Sunnuntai';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarketti';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taksitie';
$app_list_strings['marker_image_list']['teahouse'] = 'Teehuone';
$app_list_strings['marker_image_list']['telephone'] = 'Puhelin';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindutemppeli';
$app_list_strings['marker_image_list']['terrace'] = 'Terassi';
$app_list_strings['marker_image_list']['text'] = 'Teksti';
$app_list_strings['marker_image_list']['theater'] = 'Teatteri';
$app_list_strings['marker_image_list']['theme_park'] = 'Huvipuisto';
$app_list_strings['marker_image_list']['thursday'] = 'Torstai';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Tiemaksuasema';
$app_list_strings['marker_image_list']['tower'] = 'Torni';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Peltipoliisi';
$app_list_strings['marker_image_list']['train'] = 'Juna';
$app_list_strings['marker_image_list']['tram'] = 'Raitiovaunu';
$app_list_strings['marker_image_list']['truck'] = 'Kuorma-auto';
$app_list_strings['marker_image_list']['tuesday'] = 'Tiistai';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunneli';
$app_list_strings['marker_image_list']['turn_left'] = 'Käänny vasemmalle';
$app_list_strings['marker_image_list']['turn_right'] = 'Käänny oikealle';
$app_list_strings['marker_image_list']['university'] = 'Yliopisto';
$app_list_strings['marker_image_list']['up'] = 'Ylös';
$app_list_strings['marker_image_list']['up_left'] = 'Ylös vasemmalle';
$app_list_strings['marker_image_list']['up_right'] = 'Ylös oikealle';
$app_list_strings['marker_image_list']['up_then_left'] = 'Ylös, sitten vasemmalle';
$app_list_strings['marker_image_list']['up_then_right'] = 'Ylös, sitten oikealle';
$app_list_strings['marker_image_list']['vespa'] = 'Mopo';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Vesi';
$app_list_strings['marker_image_list']['waterfall'] = 'Vesiputous';
$app_list_strings['marker_image_list']['watermill'] = 'Vesimylly';
$app_list_strings['marker_image_list']['waterpark'] = 'Vesipuisto';
$app_list_strings['marker_image_list']['watertower'] = 'Vesitorni';
$app_list_strings['marker_image_list']['wednesday'] = 'Keskiviikko';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Tuulivoimala';
$app_list_strings['marker_image_list']['windmill'] = 'Tuulimylly';
$app_list_strings['marker_image_list']['winery'] = 'Viinitila';
$app_list_strings['marker_image_list']['work_office'] = 'Toimisto';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Maailmanperintökohde';
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
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_LOGIN_AS'] = 'Login as ';
$app_strings['LBL_LOGOUT_AS'] = 'Logout as ';
$app_strings['LBL_SECURITYGROUP'] = 'Turvaryhmä';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sosiaalisen syötteen yksityiskohdat';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Suodata';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tyyppi';

$app_strings['LBL_ADD_TAB'] = 'Lisää välilehti';
$app_strings['LBL_EDIT_TAB'] = 'Muokkaa välilehtiä';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SuiteCRMn kojelauta'; //Can be translated in all caps. This string will be used by SuiteP template menu actions
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Anna kojelaudan nimi:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Sarakkeiden määrä:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Haluatko varmasti poistaa';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'kojelaudan?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Lisää kojelaudan sivu';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Poista nykyinen kojelaudan sivu';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Nimeä kojelaudan sivu uudelleen';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'Toiminnot'; //Can be translated in all caps. This string will be used by SuiteP template menu actions

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Katso tehtäviä',
    'Meetings' => 'Katso kokouksia',
    'Calls' => 'Puhelut',
    'Notes' => 'Muistiinpanot',
    'Emails' => 'Sähköposti'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Myynnit',
    'getAccountsSpotsData' => 'Asiakkaat',
    'getLeadsSpotsData' => 'Liidit',
    'getServiceSpotsData' => 'Palvelu',
    'getMarketingSpotsData' => 'Markkinointi',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktiviteetit',
    'getQuotesSpotsData' => 'Tarjouspyynnöt'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Aukioloaika';
$app_list_strings['business_hours_list']['0'] = '00:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Maanantai';
$app_list_strings['day_list']['Tuesday'] = 'Tiistai';
$app_list_strings['day_list']['Wednesday'] = 'Keskiviikko';
$app_list_strings['day_list']['Thursday'] = 'Torstai';
$app_list_strings['day_list']['Friday'] = 'Perjantai';
$app_list_strings['day_list']['Saturday'] = 'Lauantai';
$app_list_strings['day_list']['Sunday'] = 'Sunnuntai';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'US-Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'US-Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Pysty';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Vaaka';
$app_list_strings['run_when_dom']['When True'] = 'Evaluate On Save'; // PR 6143
$app_list_strings['run_when_dom']['Once True'] = 'Perpetual - (Field must be audited)';
$app_list_strings['sa_status_list']['Complete'] = 'Valmis';
$app_list_strings['sa_status_list']['In_Review'] = 'Tarkastettavana';
$app_list_strings['sa_status_list']['Issue_Resolution'] = 'Issue Resolution';
$app_list_strings['sa_status_list']['Pending_Apttus_Submission'] = 'Pending Apttus Submission';
$app_list_strings['sharedGroupRule']['none'] = 'No Access';
$app_list_strings['sharedGroupRule']['view'] = 'View Only';
$app_list_strings['sharedGroupRule']['view_edit'] = 'View & Edit';
$app_list_strings['sharedGroupRule']['view_edit_delete'] = 'View, Edit & Delete';
$app_list_strings['moduleList']['SharedSecurityRulesFields'] = 'Shared Security Rules Fields';
$app_list_strings['moduleList']['SharedSecurityRules'] = 'Shared Security Rules';
$app_list_strings['moduleList']['SharedSecurityRulesActions'] = 'Shared Security Rules Actions';
$app_list_strings['shared_email_type_list'][''] = '';
$app_list_strings['shared_email_type_list']['Specify User'] = 'Vastuuhenkilö';
$app_list_strings['shared_email_type_list']['Users'] = 'Käyttäjät';
$app_list_strings['aow_condition_type_list']['Value'] = 'Arvo';
$app_list_strings['aow_condition_type_list']['Field'] = 'Kenttä';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Mikä tahansa muutos';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Turvallisuusryhmässä';
$app_list_strings['aow_condition_type_list']['currentUser'] = 'Current Logged in User';
$app_list_strings['aow_condition_type_list']['Date'] = 'Pvm';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Yksi kohteista';


$app_list_strings['moduleList']['SurveyResponses'] = 'Kyselyn vastaukset';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Luonnos';
$app_list_strings['survey_status_list']['Public'] = 'Kaikille avoin';
$app_list_strings['survey_status_list']['Closed'] = 'Suljettu';
$app_list_strings['surveys_question_type']['Text'] = 'Teksti';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Pvm';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Luokitus';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Odottaa hyväksynnän vahvistusta; vahvistussähköpostia ei ole lähetetty';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Odottaa hyväksynnän vahvistusta; vahvistussähköposti on lähetetty';
$app_strings['LBL_OPT_IN'] = 'Hyväksyntä annettu';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Poistettu';
$app_strings['LBL_OPT_IN_INVALID'] = 'Väärä';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Ei käytössä',
    'opt-in' => 'Hyväksyntä',
    'confirmed-opt-in' => 'Vahvistettu hyväksyntä'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Hyväksyntä',
    'confirmed-opt-in' => 'Vahvistettu hyväksyntä'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Unable to send email to %s email address(es), because they are not opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s email address do not have a valid id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Two Factor Authentication failed';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Two Factor Authentication code sent.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Thank you for submitting your interest.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicit',
    'authorization_code' => 'Authorization Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minuttia',
    'hour' => 'tuntia',
    'day' => 'päivää',
    'week' => 'weeks',
    'month' => 'months',
];
/** PR 6222 */
$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];


$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Error';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Error occurred.'; // PR 6752
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Version: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Please ensure you fill in the fields required';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API expects body of the request to be JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Response';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API cannot find resource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API expects the "Accept" header to be application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API expects the "Content-Type" header to be application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Desktop notifications are now enabled for this web browser.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Desktop notifications are disabled for this web browser. Use your browser preferences to enable them again.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'This browser does not support desktop notifications.';

$app_strings['LBL_GOOGLE_SYNC_ERR'] = 'SuiteCRM Google Sync - ERROR'; // PR 6539
$app_strings['LBL_THERE_WAS_AN_ERR'] = 'There was an error: '; // PR 6539

$app_strings['LBL_TO_CONTINUE'] = ' to continue.'; // PR 6539

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".'; // PR 6600 6617
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.'; // PR 6752
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.'; // PR 6600 6617
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error'; // PR 6600 6617

$app_strings['LBL_SEARCH_TITLE']                   = 'Etsi'; // Dev 6543
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Etsi'; // Dev 6543
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Etsi'; // Dev 6543
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: '; // Dev 6543
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per page: '; // Dev 6543
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: '; // Dev 6543
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): '; // Dev PR 6705
$app_strings['LBL_SEARCH_PREV'] = 'Edellinen'; // Dev PR 6705
$app_strings['LBL_SEARCH_NEXT'] = 'Seuraava'; // Dev PR 6705
$app_strings['LBL_SEARCH_PAGE'] = 'Page '; // Dev PR 6705
$app_strings['LBL_SEARCH_OF'] = ' of '; // Usage: Page 1 of 5 - Dev PR 6705

$app_list_strings['LBL_REPORTS_RESTRICTED'] = 'A report you have selected is targeting a module you do not have access to. Please select a report with a target module you have access to.';
