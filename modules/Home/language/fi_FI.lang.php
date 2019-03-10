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
    'LBL_MODULE_NAME' => 'Etusivu',
    'LBL_NEW_FORM_TITLE' => 'Uusi kontakti',
    'LBL_FIRST_NAME' => 'Etunimi:',
    'LBL_LAST_NAME' => 'Sukunimi:',
    'LBL_LIST_LAST_NAME' => 'Sukunimi',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_EMAIL_ADDRESS' => 'Sähköpostiosoite:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Oma pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline myyntivaiheen mukaan',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline myyntivaiheen mukaan',
    'LNK_NEW_CONTACT' => 'Luo kontakti',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'LNK_NEW_OPPORTUNITY' => 'Luo myyntimahdollisuus',
    'LNK_NEW_LEAD' => 'Luo liidi',
    'LNK_NEW_CASE' => 'Luo palvelupyyntö',
    'LNK_NEW_NOTE' => 'Luo muistio tai liite',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_EMAIL' => 'Arkistoi viesti',
    'LNK_NEW_MEETING' => 'Ajoita kokous',
    'LNK_NEW_TASK' => 'Luo tehtävä',
    'LNK_NEW_BUG' => 'Raportoi bugi',
    'LBL_ADD_BUSINESSCARD' => 'Syötä Käyntikortti',
    'LNK_NEW_SEND_EMAIL' => 'Luo viesti',
    'LBL_NO_ACCESS' => 'Sinulla ei ole riittäviä oikeuksia tähän alueeseen. Saadaksesi pääsyn alueelle ota yhteys ylläpitäjään',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Ei hakutuloksia --',
    'LBL_NO_RESULTS' => '<h2>Ei löytynyt tuloksia. Suorita haku uudelleen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Vinkkejä:</h3> <ul><li>Varmista, että olet valinnut oikean luokat.</li> <li>Laajenna akuehtojasi.</li> <li>Jos et vieläkään löydä tuloksia kokeilla tarkennettua hakua.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Lisätään SuiteCRM paneli',
    'LBL_WEBSITE_TITLE' => 'Www',
    'LBL_RSS_TITLE' => 'Uutis syöte',
    'LBL_CLOSE_DASHLETS' => 'Sulje',
    'LBL_OPTIONS' => 'Asetukset',
    // dashlet search fields
    'LBL_TODAY' => 'Tänään',
    'LBL_YESTERDAY' => 'Eilen',
    'LBL_TOMORROW' => 'Huomenna',
    'LBL_NEXT_WEEK' => 'Seuraava viikko',
    'LBL_LAST_7_DAYS' => 'viimeiset 7 pväivää',
    'LBL_NEXT_7_DAYS' => 'seuraavat 7 pväivää',
    'LBL_LAST_MONTH' => 'Viime kuussa',
    'LBL_NEXT_MONTH' => 'Seuraava kuukausi',
    'LBL_LAST_YEAR' => 'Viime vuosi',
    'LBL_NEXT_YEAR' => 'Seuraava vuosi',
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
        'Miscellaneous' => 'Muut'
    ),
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

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Minun SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'Sulje',

    'LBL_SEARCH' => 'Haku',
    'LBL_CLEAR' => 'Tyhjennä',

    'LBL_BASIC_CHARTS' => 'Peruskaaviot',

    'LBL_DASHLET_SEARCH' => 'Etsi SuiteCRM paneleita',

//ABOUT page
    'LBL_VERSION' => 'Versio',
    'LBL_BUILD' => 'Koontiversio',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - tarjoaa CE kehyksen',

    'LBL_DASHLET_TITLE' => 'Omat sivut',
    'LBL_DASHLET_OPT_TITLE' => 'Otsikko',
    'LBL_DASHLET_INCORRECT_URL' => 'Virheellinen www-sivuston sijainti',
    'LBL_DASHLET_OPT_URL' => 'Web-sivusto sijainti',
    'LBL_DASHLET_OPT_HEIGHT' => 'Panelin korkeus (kuvapisteinä)',
    'LBL_DASHLET_SUGAR_NEWS' => 'SuiteCRM Uutiset',
    'LBL_DASHLET_DISCOVER_SUGAR_PRO' => 'Tutustu SuiteCRM:ään',
    'LBL_BASIC_SEARCH' => 'Pikasuodin' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Tarkempi suodin' /*for 508 compliance fix*/,
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
    'LBL_CONTRIBUTORS' => 'Tekijät',
    'LBL_ABOUT_SUITE' => 'Tietoja SuiteCRM:stä',
    'LBL_PARTNERS' => 'Yhteistyökumppanit',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE ja Reschedule -moduulit toimittaa SalesAgility.',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Avoimen lähdekoodin CRM',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuiten on tehnyt Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Mapsin on tehnyt Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGOn tarjoaa Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Täydennyksiä SuiteCRM 7.3 -julkaisuun: ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'SuiteCRM-käännöksistä',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'SuiteCRM-yhteisön yhteistyönä toteutettu käännös',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Käännös toteutettu Crowdinillä',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM on julkaistu avoimen lähdekoodin lisenssillä - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Kaikki SuiteCRM -projektin hallitsema ja kehittämä lähdekoodi julkaistaan avoimena - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM:n tukea saa ilmaiseksi ja maksettuna vaihtoehtona',

    'LBL_SUITE_PARTNERS' => 'SuiteCRM -projektilla on lojaaleja partnereita, jotka suhtautuvat vapaaseen lähdekoodiin intohimolla. Katso luettelo partnereistamme www-sivuiltamme.',

    'LBL_SAVE_BUTTON' => 'Tallenna',
    'LBL_DELETE_BUTTON' => 'Poista',
    'LBL_APPLY_BUTTON' => 'Hyväksy',
    'LBL_SEND_INVITES' => 'Lähetä kutsut',
    'LBL_CANCEL_BUTTON' => 'Peruuta',
    'LBL_CLOSE_BUTTON' => 'Sulje',

    'LBL_CREATE_NEW_RECORD' => 'Luo tehtävä',
    'LBL_CREATE_CALL' => 'Kirjaa puhelu',
    'LBL_CREATE_MEETING' => 'Ajoita tapaaminen',

    'LBL_GENERAL_TAB' => 'Yksityiskohdat',
    'LBL_PARTICIPANTS_TAB' => 'Kutsutut',
    'LBL_REPEAT_TAB' => 'Toistuvuus',

    'LBL_REPEAT_TYPE' => 'Toista',
    'LBL_REPEAT_INTERVAL' => 'Kuinka usein?',
    'LBL_REPEAT_END' => 'Toisto loppuu',
    'LBL_REPEAT_END_AFTER' => ' ',
    'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
    'LBL_REPEAT_END_BY' => 'Asti',
    'LBL_REPEAT_DOW' => 'Viikonpäivinä',
    'LBL_REPEAT_UNTIL' => 'Toista kunnes',
    'LBL_REPEAT_COUNT' => 'Toistumiskertoja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Pyyntösi aikoi luoda yli $limit tapaamista.',

    //Events PR 5641
    'LNK_EVENT' => 'Tapahtuma',
    'LNK_EVENT_VIEW' => 'Näytä tapahtuma',
    'LBL_DATE' => 'Päivämäärä: ',
    'LBL_DURATION' => 'Kesto: ',
    'LBL_NAME' => 'Otsikko: ',
    'LBL_HOUR_ABBREV' => 'tunti',
    'LBL_HOURS_ABBREV' => 'tuntia',
    'LBL_MINSS_ABBREV' => 'minuttia',
    'LBL_LOCATION' => 'Paikka: ',
    'LBL_STATUS' => 'Tila: ',
    'LBL_DESCRIPTION' => 'Kuvaus: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested Search Engine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
);