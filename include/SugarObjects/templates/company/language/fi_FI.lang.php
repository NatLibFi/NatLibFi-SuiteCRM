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


$mod_strings = array (
	'ACCOUNT_REMOVE_PROJECT_CONFIRM' => 'Haluatko varmasti poistaa asiakkaan projektista?',
	'ERR_DELETE_RECORD' => 'Anna tietueen numero poistaaksesi asiakkaan.',
	'LBL_ACCOUNT_NAME' => 'Yrityksen nimi:',
	'LBL_ACCOUNT' => 'Asiakas:',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Aktiviteetit',
	'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
	'LBL_ANNUAL_REVENUE' => 'Liikevaihto:',
	'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
	'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_EMAIL_NON_PRIMARY' => 'Toissijaiset sähköpostit',
	'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
	'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
	'LBL_RATING' => 'Luokitus',
	'LBL_ASSIGNED_TO' => 'Kohdennettu hlölle:',
	'LBL_ASSIGNED_USER' => 'Kohdennettu hlölle:',
	'LBL_ASSIGNED_TO_ID' => 'Kohdennettu hlölle:',
	'LBL_BILLING_ADDRESS_CITY' => 'Laskutusosoite Kaupunki/kunta:',
	'LBL_BILLING_ADDRESS_COUNTRY' => 'Laskutusosoite Maa:',
	'LBL_BILLING_ADDRESS_POSTALCODE' => 'Laskutusosoite Postinumero:',
	'LBL_BILLING_ADDRESS_STATE' => 'Laskutusosoite Kaupunki/kunta:',
	'LBL_BILLING_ADDRESS_STREET_2' =>'Laskutusosoite Katuosoite 2',
	'LBL_BILLING_ADDRESS_STREET_3' =>'Laskutusosoite Katuosoite 3',
	'LBL_BILLING_ADDRESS_STREET_4' =>'Laskutusosoite Katuosoite 4',
	'LBL_BILLING_ADDRESS_STREET' => 'Laskutusosoite Katuosoite:',
	'LBL_BILLING_ADDRESS' => 'Laskutusosoite:',
	'LBL_ACCOUNT_INFORMATION' => 'Yritystiedot',
	'LBL_CITY' => 'Kaupunki/kunta:',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
	'LBL_COUNTRY' => 'Maa:',
	'LBL_DATE_ENTERED' => 'Luontipvm:',
	'LBL_DATE_MODIFIED' => 'Muokkauspvm:',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Accounts',
	'LBL_DESCRIPTION_INFORMATION' => 'Kuvaus',
	'LBL_DESCRIPTION' => 'Kuvaus:',
	'LBL_DUPLICATE' => 'Mahdollinen duplikaatti asiakas',
	'LBL_EMAIL' => 'Sähköpostiosoite:',
	'LBL_EMPLOYEES' => 'Työntekijät:',
	'LBL_FAX' => 'Faksi:',
	'LBL_INDUSTRY' => 'Toimiala:',
	'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
	'LBL_LIST_CITY' => 'Kaupunki/kunta',
	'LBL_LIST_EMAIL_ADDRESS' => 'Ensisijainen sähköposti',
	'LBL_LIST_PHONE' => 'Puhelin',
	'LBL_LIST_STATE' => 'Maakunta/lääni',
	'LBL_LIST_WEBSITE' => 'Www',
	'LBL_MEMBER_OF' => 'Jäsen:',
	'LBL_MEMBER_ORG_FORM_TITLE' => 'Jäsenorganisaatiot',
	'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Jäsenorganisaatiot',
	'LBL_NAME'=>'Nimi:',
	'LBL_OTHER_EMAIL_ADDRESS' => 'Toinen sähköpostiosoite:',
	'LBL_OTHER_PHONE' => 'Toinen puhelin:',
	'LBL_OWNERSHIP' => 'Omistaja:',
	'LBL_PARENT_ACCOUNT_ID' => 'Emoyrityksen ID',
	'LBL_PHONE_ALT' => 'Muu puhelin:',
	'LBL_PHONE_FAX' => 'Puhelinfaksi:',
	'LBL_PHONE_OFFICE' => 'toimiston puhelin:',
	'LBL_PHONE' => 'Puhelin:',
    'LBL_EMAIL_ADDRESS' => 'Ensisijainen sähköposti',
	'LBL_EMAIL_ADDRESSES' => 'Sähköpostiosoite/osoitteet',
	'LBL_POSTAL_CODE' => 'Postinumero:',
	'LBL_PUSH_BILLING' => 'Kopioi laskutustiedot',
	'LBL_PUSH_SHIPPING' => 'Kopioi toimitustiedot',
	'LBL_SAVE_ACCOUNT' => 'Tallenna asiakas',
	'LBL_SHIPPING_ADDRESS_CITY' => 'Toimitusosoite Kaupunki/kunta:',
	'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Toimitusosoite Maa:',
	'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Toimitusosoite Postinumero:',
	'LBL_SHIPPING_ADDRESS_STATE' => 'Toimitusosoite Maakunta/lääni:',
	'LBL_SHIPPING_ADDRESS_STREET_2' => 'Toimitusosoite Katuosoite 2',
	'LBL_SHIPPING_ADDRESS_STREET_3' => 'Toimitusosoite Katuosoite 3',
	'LBL_SHIPPING_ADDRESS_STREET_4' => 'Toimitusosoite Katuosoite 4',
	'LBL_SHIPPING_ADDRESS_STREET' => 'Toimitusosoite Katuosoite:',
	'LBL_SHIPPING_ADDRESS' => 'Toimitusosoite:',

	'LBL_STATE' => 'Maakunta/lääni:',
	'LBL_TICKER_SYMBOL' => 'Merkintäsymboli:',
	'LBL_TYPE' => 'Tyyppi:',
	'LBL_USERS_ASSIGNED_LINK'=>'Määritellyt käyttäjät',
	'LBL_USERS_CREATED_LINK'=>'Luotu käyttäjien toimesta',
	'LBL_USERS_MODIFIED_LINK'=>'Muokkaajat',
	'LBL_VIEW_FORM_TITLE' => 'Asiakasnäkymä',
	'LBL_WEBSITE' => 'Kotisivu:',

	'LNK_ACCOUNT_LIST' => 'Asiakkaat',
	'LNK_NEW_ACCOUNT' => 'Luo asiakas',

	'MSG_DUPLICATE' => 'Asiakkaan luonti voi tuottaa kaksoiskappaleen. Voit joko valita asiakkaan alle olevasta listasta tai napsauttaa Luo asiakas -painiketta jatkaaksesi uuden asiakkaan luontia aikaisemmin syötetyn tiedon pohjalta.',
	'MSG_SHOW_DUPLICATES' => 'Uuden asiakkaan luonti voi tuottaa kaksoiskappaleen. Peru toiminto napsauttamalla Peru-painiketta tai luo uusi asiakas napsauttamalla Tallenna-painiketta.',

	'NTC_COPY_BILLING_ADDRESS' => 'Kopioi laskutusosoite postitusosoitteeksi',
	'NTC_COPY_BILLING_ADDRESS2' => 'Kopioi postitusosoitteeksi',
	'NTC_COPY_SHIPPING_ADDRESS' => 'Kopioi postitusosoite laskutusosoitteeksi',
	'NTC_COPY_SHIPPING_ADDRESS2' => 'Kopioi laskutusosoitteeksi',
	'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
	'NTC_REMOVE_ACCOUNT_CONFIRMATION' => 'Haluatko poistaa tämän tietueen?',
	'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => 'Haluatko poistaa tämän jäsenorganisaation?',

    'LBL_EDIT_BUTTON' => 'Edit  ',
    'LBL_REMOVE' => 'Poista',

);


