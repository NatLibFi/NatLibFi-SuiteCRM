<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

$mod_strings  = array(
    'LBL_MODULE_NAME' => 'Etusivu',
    'LBL_MODULES_TO_SEARCH' => 'Haettavat moduulit',
    'LBL_NEW_FORM_TITLE' => 'Uusi kontakti',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Oma pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline myyntivaiheen mukaan',
		'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline myyntivaiheen mukaan',
    'LBL_CAMPAIGN_ROI_FORM_TITLE' => 'Kampanjan ROI',
    'LBL_MY_CLOSED_OPPORTUNITIES_GAUGE' => 'Voitetut, suljetut myyntimahdollisuuteni',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_EMAIL' => 'Arkistoi sähköposti',
    'LNK_COMPOSE_EMAIL' => 'Luo sähköposti',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_BUG' => 'Raportoi bugi',
    'LBL_ADD_BUSINESSCARD' => 'Syötä Käyntikortti',
    'ERR_ONE_CHAR' => 'Syötä vähintään yksi kirjan tai numero hakuusi ...',
    'LBL_OPEN_TASKS' => 'Avoimet tehtäväni',
    'LBL_SEARCH_RESULTS_IN' => 'in',
    'LNK_NEW_SEND_EMAIL' => 'Luo sähköposti',
    'LBL_NO_ACCESS' => 'Sinulla ei ole riittäviä oikeuksia tähän alueeseen. Saadaksesi pääsyn alueelle ota yhteys ylläpitäjään',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Ei hakutuloksia --',
    'LBL_NO_RESULTS' => '<h2>Ei löytynyt tuloksia. Suorita haku uudelleen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Vinkkejä:</h3> <ul><li>Varmista, että olet valinnut oikean luokat.</li> <li>Laajenna akuehtojasi.</li> <li>Jos et vieläkään löydä tuloksia kokeilla tarkennettua hakua.</li></ul>',

  'LBL_RELOAD_PAGE' => 'Ole hyvä ja <a href="javascript: window.location.reload()"> päivitä ikkuna</a> käyttääksesi tätä SuiteCRM Panelia.',
  'LBL_ADD_DASHLETS' => 'Lisätään SuiteCRM paneli',
  'LBL_ADD_PAGE' => 'Lisää sivu',
  'LBL_DEL_PAGE' => 'Poista sivu',
  'LBL_WEBSITE_TITLE' => 'Www',
  'LBL_RSS_TITLE' => 'Uutis syöte',
  'LBL_DELETE_PAGE' => 'Poista sivu',
  'LBL_CHANGE_LAYOUT' => 'Muuta layoutia',
  'LBL_RENAME_PAGE' => 'Nimeä sivu uudelleen',
  'LBL_CLOSE_DASHLETS' => 'Sulje',
  'LBL_OPTIONS' => 'Asetukset',
  // dashlet search fields
  'LBL_TODAY'=>'Tänään',
  'LBL_YESTERDAY' => 'Eilen',
  'LBL_TOMORROW'=>'Huomenna',
  'LBL_LAST_WEEK'=>'Viime viikko',
  'LBL_NEXT_WEEK'=>'Seuraava viikko',
  'LBL_LAST_7_DAYS'=>'viimeiset 7 pväivää',
  'LBL_NEXT_7_DAYS'=>'seuraavat 7 pväivää',
  'LBL_LAST_MONTH'=>'Viime kuussa',
  'LBL_NEXT_MONTH'=>'Seuraava kuukausi',
  'LBL_LAST_QUARTER'=>'Viime kvartaali',
  'LBL_THIS_QUARTER'=>'Tämä kvartaali',
  'LBL_LAST_YEAR'=>'Viime vuosi',
  'LBL_NEXT_YEAR'=>'Seuraava vuosi',
  'LBL_LAST_30_DAYS' => 'Viimeiset 30 päivää',
  'LBL_NEXT_30_DAYS' => 'Seuraavat 30 päivää',
  'LBL_THIS_MONTH' => 'Tässä kuussa',
  'LBL_THIS_YEAR' => 'Tänä vuonna',

    'LBL_MODULES' => 'Moduulit',
    'LBL_CHARTS' => 'Kaaviot',
    'LBL_TOOLS' => 'Työkalut',
    'LBL_WEB' => 'Verkko',
    'LBL_SEARCH_RESULTS' => 'Hakutulokset',

  // Dashlet Categories
  'dashlet_categories_dom' => array(
      'Module Views' => 'Moduulinäkymät',
      'Portal' => 'Portaali',
      'Charts' => 'Kaaviot',
      'Tools' => 'Työkalut',
      'Miscellaneous' => 'Muut'),
  'LBL_MAX_DASHLETS_REACHED' => 'SuiteCRM-kojeiden enimmäismäärä on saavutettu. Poista jokin koje lisätäksesi uuden.',
  'LBL_ADDING_DASHLET' => 'Lisätään SuiteCRM-koje ...',
  'LBL_ADDED_DASHLET' => 'SuiteCRM-koje lisätty',
  'LBL_REMOVE_DASHLET_CONFIRM' => 'Haluatko varmasti poistaa tämän SuiteCRM-kojeen?',
  'LBL_REMOVING_DASHLET' => 'Poistetaan SuiteCRM-koje...',
  'LBL_REMOVED_DASHLET' => 'SuiteCRM-koje poistettu',
  'LBL_DASHLET_CONFIGURE_GENERAL' => 'Yleiset',
  'LBL_DASHLET_CONFIGURE_FILTERS' => 'Suodattimet',
  'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vain omat',
  'LBL_DASHLET_CONFIGURE_TITLE' => 'Otsikko',
  'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Näytä rivit',

  'LBL_DASHLET_DELETE' => 'Poista SuiteCRM-koje',
  'LBL_DASHLET_REFRESH' => 'Päivitä SuiteCRM-koje',
  'LBL_DASHLET_EDIT' => 'Muokkaa SuiteCRM-kojetta',

    'LBL_TRAINING_TITLE' => 'Koulutus',

  'LBL_CREATING_NEW_PAGE' => 'Luodaan uutta sivua...',
  'LBL_NEW_PAGE_FEEDBACK' => 'Olet luonut uuden sivun. Voit lisätä uutta sisältöä Lisää SuiteCRM-koje valikon avulla.',
  'LBL_DELETE_PAGE_CONFIRM' => 'Haluatko varmasti poistaa sivun?',
  'LBL_SAVING_PAGE_TITLE' => 'Tallennetaan sivun otsikkoa...',
  'LBL_RETRIEVING_PAGE' => 'Haetaan sivua...',

  // Default out-of-box names for tabs
  'LBL_HOME_PAGE_1_NAME' => 'Minun SuiteCRM',
  'LBL_HOME_PAGE_2_NAME' => 'Myynti',
  'LBL_HOME_PAGE_3_NAME' => 'Tuki',
  'LBL_HOME_PAGE_6_NAME' => 'Markkinointi',//bug 16510, separate the support and marketing page from each other
  'LBL_HOME_PAGE_4_NAME' => 'Seuranta',
  'LBL_CLOSE_SITEMAP' => 'Sulje',

    'LBL_SEARCH' => 'Haku',
    'LBL_CLEAR' => 'Tyhjennä',

    'LBL_BASIC_CHARTS' => 'Peruskaaviot',
    'LBL_REPORT_CHARTS' => 'Raporttikaaviot',

    'LBL_MY_FAVORITE_REPORT_CHARTS' => 'Suosikkiraportit',
    'LBL_GLOBAL_REPORT_CHARTS' => 'Globaalit tiimiraportit',
    'LBL_MY_TEAM_REPORT_CHARTS' => 'Oman tiimini raportit',
    'LBL_MY_SAVED_REPORT_CHARTS' => 'Tallennetut raporttini',

  'LBL_DASHLET_SEARCH' => 'Etsi SuiteCRM paneleita',

//ABOUT page
    'LBL_VERSION' => 'Versio',
    'LBL_BUILD' => 'Koontiversio',


    'LBL_VIEWLICENSE_COM' => '<P>Tämä on vapaa ohjelmisto; voit jakaa ja/tai muokata sitä Free Software Foundation:in<a href="LICENSE.txt" target="_blank" class="body"> GNU Affero hankkeen yleisen lisenssin 3. version</a> ehtojen rajoissa, mukaan lukien lisäoikeudet jotka ovat kirjattuna lähdekoodiin.</P>',
    'LBL_ADD_TERM_COM' => '<P>The interactive user interfaces in modified source and object code versions of this program must display Appropriate Legal Notices, as required under Section 5 of the GNU Affero General Public License version 3. In accordance with Section 7(b) of the GNU General Public License version 3, these Appropriate Legal Notices must retain the display of the &quot;Powered by SugarCRM&quot; logo. If the display of the logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices must display the words &quot;Powered by SugarCRM&quot;.</P>',


  'LBL_SUGAR_COMMUNITY_EDITION' => 'Sugar:in Yhteisöversio',
  'LBL_AND' => "ja",
  'LBL_ARE' => "ovat",
  'LBL_TRADEMARKS' => 'tavaramerkit',
  'LBL_OF' => 'of',
  'LBL_FOUNDERS' => 'Perustajat',
  'LBL_JOIN_SUGAR_COMMUNITY' => 'Liity SuiteCRM-yhteisöön',
  'LBL_DETAILS_SUGARFORGE' => 'Tee yhteistyötä ja kehitä SuiteCRM laajennuksia',
  'LBL_DETAILS_SUGAREXCHANGE' => 'Osta ja myy sertifioituja SuiteCRM laajennuksia',
  'LBL_TRAINING' => 'Koulutus',
  'LBL_DETAILS_TRAINING' => 'Opi lisää SuiteCRM käytöstä hyödyntäen verkossa olevaa interaktiivista oppimismateriaalia',
  'LBL_FORUMS' => 'Foorumit',
  'LBL_DETAILS_FORUMS' => 'Keskustele SuiteCRM asiantuntijayhteisön käyttäjien ja kehittäjien kanssa',
  'LBL_WIKI' => 'Wiki',
  'LBL_DETAILS_WIKI' => 'Etsi Tietokannasta käyttäjien ja kehittäjien aiheita',
  'LBL_DEVSITE' => 'Kehittäjäsivusto',
  'LBL_DETAILS_DEVSITE' => 'Löydä resursseja, oppaita ja hyödyllisiä linkkejä, joilla pääset vauhtiin SuiteCRM kehittämisessä',
 'LBL_GET_SUGARCRM_RSS' => 'Tilaa SuiteCRM RSS',
  'LBL_SUGARCRM_NEWS' => 'SuiteCRM Uutiset',
  'LBL_SUGARCRM_TRAINING_NEWS' => 'SuiteCRM koulutus Uutiset',
  'LBL_SUGARCRM_FORUMS' => 'SuiteCRM foorumi',
  'LBL_SUGARFORGE_NEWS' => 'SuiteCRM Uutiset',
  'LBL_ALL_NEWS' => 'Kaikki uutiset',
  'LBL_SOURCE_CODE' => 'Lähdekoodi',
    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - tarjoaa CE kehyksen',
  'LBL_SOURCE_XTEMPLATE' => 'XTemplate - Barnabás Debrecenin kehittämä PHP mallinnusmoottori',
  'LBL_SOURCE_NUSOAP' => 'NuSOAP - joukko PHP luokkia, joiden avulla kehittäjät voivat luoda ja käyttää NuSphere Corporation:in ja Dietrich Ayalan tuottamia verkkopalveluita',
  'LBL_SOURCE_JSCALENDAR' => 'JS Calendar - kalenteri päivämäärien syöttämiseen by Mihai Bazon',
  'LBL_SOURCE_PHPPDF' => 'PHP PDF - kirjasto PDF tiedostojen luomiseen, created by Wayne Munro',
  'LBL_SOURCE_HTTP_WEBDAV_SERVER' => 'HTTP_WebDAV_Server - PHP  WebDAV-palvelin.',
  'LBL_SOURCE_PCLZIP' => 'Pclzip - Vincent Blavetin luoma kirjasto tarjoaa pakkaus- ja purkutoiminnot Zip-formaatin tiedostoille',
  'LBL_SOURCE_SMARTY' => 'Smarty - PHP template engine.',
  'LBL_SOURCE_YAHOO_UI_LIB' => 'Yahoo! User Interface Library - The UI Library Utilities facilitate the implementation of rich client-side features.',
  'LBL_SOURCE_PHPMAILER' => 'PHPMailer - täydellinen email siirtoluokka PHP:lle',
  'LBL_SOURCE_JSHRINK' => 'JShrink - PHP-pohjainen Javascript tiivistin',
  'LBL_SOURCE_CRYPT_BLOWFISH' => 'Crypt_Blowfish - Allows for quick two-way blowfish encryption without requiring the MCrypt PHP extension.',
  'LBL_SOURCE_XML_HTMLSAX3' => 'XML_HTMLSax3 - A SAX parser for HTML and other badly formed XML documents',
  'LBL_SOURCE_YAHOO_UI_LIB_EXT' => 'Yahoo! UI Extensions Library - Extensions to the Yahoo! User Interface Library by Jack Slocum',
  'LBL_SOURCE_SWFOBJECT' => 'SWFObject - Javascript Flash Player detection and embed script.',
  'LBL_SOURCE_TINYMCE' => 'TinyMCE - A WYSIWYG editor control for web browsers that enables the user to edit HTML contents',
  'LBL_SOURCE_EXT' => 'Ext - A client-side JavaScript framework for building web applications.',
  'LBL_SOURCE_RECAPTCHA' => 'reCAPTCHA - A free CAPTCHA service that helps to digitize books, newspapers and old time radio shows.',
  'LBL_SOURCE_TCPDF' => 'TCPDF - A PHP class for generating PDF documents.',
  'LBL_SOURCE_CSSMIN' => 'CssMin - A css parser and minifier.',
  'LBL_SOURCE_PHPSAML' => 'PHP-SAML - A simple SAML toolkit for PHP.',
  'LBL_SOURCE_ISCROLL' => 'iScroll - The overflow:scroll for mobile webkit.  Native scrolling inside a fixed width/height element.',
  'LBL_SOURCE_FLASHCANVAS' => 'FlashCanvas - FlashCanvas is a JavaScript library which adds the HTML5 Canvas support to Internet Explorer. It renders shapes and images via Flash drawing API. It supports almost all Canvas APIs and, in many cases, runs faster than other similar libraries which use VML or Silverlight.',
  'LBL_SOURCE_JIT' => 'JavaScript InfoVis Toolkit - The JavaScript InfoVis Toolkit provides tools for creating Interactive Data Visualizations for the Web.',
  'LBL_SOURCE_ZEND' => 'Zend Framework - An open source, object oriented web application framework for PHP5.',
  'LBL_SOURCE_PARSECSV' => 'parseCSV - CSV data parser for PHP',
  'LBL_SOURCE_PHPJS' => 'php.js - Use PHP functions in JavaScript',
  'LBL_SOURCE_PHPSQL' => 'PHP SQL Parser',
  'LBL_SOURCE_HTMLPURIFIER' => 'HTML Purifier - A standards-compliant HTML filtering library.',
  'LBL_SOURCE_XHPROF' => 'XHProf - A function-level hierarchical profiler for PHP.',
  'LBL_SOURCE_ELASTICA' => 'Elastica - PHP client for the distributed search engine elasticsearch ',
  'LBL_SOURCE_FACEBOOKSDK' => 'Facebook PHP SDK',
  'LBL_SOURCE_JQUERY' => 'jQuery - jQuery is a fast, small, and feature-rich JavaScript library.',
  'LBL_SOURCE_JQUERY_UI' => 'jQuery UI - jQuery UI is a curated set of user interface interactions, effects, widgets, and themes built on top of the jQuery JavaScript Library.',
  'LBL_SOURCE_OVERLIB' => 'OverlibMWS - The overlibmws library uses javascript for DHTML popups that serve as informational and navigational aids for websites.',

  'LBL_DASHLET_TITLE' => 'Omat sivut',
  'LBL_DASHLET_OPT_TITLE' => 'Otsikko',
  'LBL_DASHLET_INCORRECT_URL' => 'Virheellinen www-sivuston sijainti',
  'LBL_DASHLET_OPT_URL' => 'Web-sivusto sijainti',
  'LBL_DASHLET_OPT_HEIGHT' => 'Panelin korkeus (kuvapisteinä)',
  'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM Uutiset',
  'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Tutustu SuiteCRM:ään',
	'LBL_POWERED_BY_SUGAR' => 'Moottorina SugarCRM' /*for 508 compliance fix*/,
	'LBL_MORE_DETAIL' => 'Lisää tietoja' /*for 508 compliance fix*/,
	'LBL_BASIC_SEARCH' => 'Yksinkertainen haku' /*for 508 compliance fix*/,
	'LBL_ADVANCED_SEARCH' => 'Tarkennettu haku' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Kotisivun kuvake',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Nopeasti kotisivulle yhdellä napsautuksella.',
    'LBL_TOUR_MODULES' => 'Moduulit',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Kaikki tärkeät moduulit ovat tässä.',
    'LBL_TOUR_MORE' => 'Lisää moduulit',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Loput Moduulit on tässä.',
    'LBL_TOUR_SEARCH' => 'Tekstihaku',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Hausta tuli juuri paljon parempi.',
    'LBL_TOUR_NOTIFICATIONS' => 'Huomautukset',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM sovelluksen ilmoitukset menisivät tähän.',
    'LBL_TOUR_PROFILE' => 'Profiili',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Käyttöoikeudet, asetukset ja kirjaudu ulos.',
    'LBL_TOUR_QUICKCREATE' => 'Luo',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Luo nopeasti tietueita vaihtamatta paikkaa.',
    'LBL_TOUR_FOOTER' => 'Suljettava alatunniste',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Laajenna tai tiivistä alatunniste helposti.',
    'LBL_TOUR_CUSTOM' => 'Räätälöidyt sovellukset',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Mukautetut integraatiot menevät tänne.',
    'LBL_TOUR_BRAND' => 'Tuotemerkkisi',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Logo tulee tähän. Viemällä hiiren päälle saat lisätietoja.',
    'LBL_TOUR_WELCOME' => 'Tervetuloa SuiteCRM:ään',
    'LBL_TOUR_WATCH' => 'Katso SuiteCRM uutuudet',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Uusi yksinkertaistettu navigaatiovalikko</li><li class="icon-ok">Uusi luhistettava alaviite</li><li class="icon-ok">Parammeltu hakutoiminto</li><li class="icon-ok">Päivitetty Toiminnot-valikko</li></ul><p>ja paljon muuta!</p>',
    'LBL_TOUR_VISIT' => 'Lisätietoja saat käynnistämällä sovelluksen',
    'LBL_TOUR_DONE' => 'Olet valmis!',
    'LBL_TOUR_REFERENCE_1' => 'Voit aina tarkistaa meidän',
    'LBL_TOUR_REFERENCE_2' => '"Tuki" linkistä Profiili-välilehdessä.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentaatio',
    'LBL_TOUR_CALENDAR_URL_1' => 'Jaatko SuiteCRM-kalenterin 3-osapuolen sovellusten, kuten Microsoft Outlook tai Exchange, kanssa? Jos näin on, sinulla on käytettävissä uusi turvallisempi URL-osoite. Uusi URL-osoite sisältää yksilöllisen avaimen, joka estää kalenterin luvatonta julkaisemista.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Nouda uusi jaetun kalenterin URL.',
    'LBL_ABOUT' => 'Tietoja',
    'LBL_CONTRIBUTORS' => 'Tekijät',
    'LBL_ABOUT_SUITE' => 'Tietoja SuiteCRM:stä',
    'LBL_PARTNERS' => 'Yhteistyökumppanit',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE ja Reschedule -moduulit toimittaa SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Avoimen lähdekoodin CRM',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuiten on tehnyt Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Mapsin on tehnyt Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGOn tarjoaa Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Täydennyksiä SuiteCRM 7.3 -julkaisuun: ResponseTap',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_1' => 'SuiteCRM on SugarCRM:n forkki (spinoff). Verkossa on runsaasti artikkeleita SugarCRM:n lähdekoodin haarauttamisen tarpeellisuudesta.',
    'LBL_ABOUT_SUITE_2' => 'SuiteCRM on julkaistu avoimen lähdekoodin lisenssillä - GPL3',
    'LBL_ABOUT_SUITE_3' => 'SuiteCRM on täysin SugarCRM 6.5.x -yhteensopiva',
    'LBL_ABOUT_SUITE_4' => 'Kaikki SuiteCRM -projektin hallitsema ja kehittämä lähdekoodi julkaistaan avoimena - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM:n tukea saa ilmaiseksi ja maksettuna vaihtoehtona',

    'LBL_SUITE_PARTNERS' => 'SuiteCRM -projektilla on lojaaleja partnereita, jotka suhtautuvat vapaaseen lähdekoodiin intohimolla. Katso luettelo partnereistamme www-sivuiltamme.',

);
