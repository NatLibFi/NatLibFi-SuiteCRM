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
    'LBL_ASSIGNED_TO_ID' => 'Vastuuhenkilö ID',
    'LBL_ASSIGNED_TO_NAME' => 'Vastuuhenkilö:',
    'LBL_ID' => 'Tunnus',
    'LBL_DATE_ENTERED' => 'Luonti pvm:',
    'LBL_DATE_MODIFIED' => 'Muokkaus pvm',
    'LBL_MODIFIED' => 'Muokkaaja:',
    'LBL_MODIFIED_NAME' => 'Muokkaaja:',
    'LBL_CREATED' => 'Tekijä',
    'LBL_DESCRIPTION' => 'Kuvaus',
    'LBL_DELETED' => 'Poistettu',
    'LBL_NAME' => 'Nimi',
    'LBL_CREATED_USER' => 'Tekijä:',
    'LBL_MODIFIED_USER' => 'Muokkaaja:',
    'ERR_DELETE_RECORD' => 'Tietueen numero vaaditaan, jotta voit poistaa asiakkaan.',
    'LBL_ACCOUNT_NAME' => 'Nimi',
    'LBL_ACCOUNT' => 'Yritys:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteetit',
    'LBL_ADDRESS_INFORMATION' => 'Osoitetiedot',
    'LBL_ANNUAL_REVENUE' => 'Liikevaihto:',
    'LBL_ANY_ADDRESS' => 'Mikä vain osoite:',
    'LBL_ANY_EMAIL' => 'Mikä vain sähköposti:',
    'LBL_ANY_PHONE' => 'Mikä vain puhelin:',
    'LBL_RATING' => 'Luokitus',
    'LBL_ASSIGNED_USER' => 'Vastuuhenkilö',
    'LBL_BILLING_ADDRESS_CITY' => 'Laskutusosoite Kaupunki/kunta:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Laskutusosoite Maa:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Laskutusosoite Postinumero:',
    'LBL_BILLING_ADDRESS_STATE' => 'Laskutusosoite Maakunta/lääni:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Laskutusosoite Katuosoite 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Laskutusosoite Katuosoite 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Laskutusosoite Katuosoite 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Laskutusosoite Katuosoite:',
    'LBL_BILLING_ADDRESS' => 'Laskutusosoite:',
    'LBL_ACCOUNT_INFORMATION' => 'Kokouksen esikatselu',
    'LBL_CITY' => 'Kaupunki/kunta:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktit',
    'LBL_COUNTRY' => 'Maa:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Asiakkaat',
    'LBL_DUPLICATE' => 'Mahdollinen duplikaatti asiakas',
    'LBL_EMAIL' => 'Sähköposti:',
    'LBL_EMPLOYEES' => 'Työntekijät:',
    'LBL_FAX' => 'Faksi:',
    'LBL_INDUSTRY' => 'Toimiala:',
    'LBL_LIST_ACCOUNT_NAME' => 'Asiakkaan nimi',
    'LBL_LIST_CITY' => 'Kaupunki/kunta',
    'LBL_LIST_EMAIL_ADDRESS' => 'Sähköpostiosoite',
    'LBL_LIST_PHONE' => 'Puhelin',
    'LBL_LIST_STATE' => 'Maakunta/lääni', //For address fields
    'LBL_MEMBER_OF' => 'Kuuluu ryhmään:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Jäsenorganisaatiot',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Toinen sähköposti:',
    'LBL_OTHER_PHONE' => 'Toinen puhelin:',
    'LBL_OWNERSHIP' => 'Omistaja:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Emoyhtiö',
    'LBL_PHONE_ALT' => 'Muu puhelin:',
    'LBL_PHONE_FAX' => 'Puhelinfaksi:',
    'LBL_PHONE_OFFICE' => 'Toimiston puhelin:',
    'LBL_PHONE' => 'Puhelin:',
    'LBL_POSTAL_CODE' => 'Postinumero:',
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
    'LBL_STATE' => 'Alue tai osavaltio:', //For address fields
    'LBL_TICKER_SYMBOL' => 'Pörssi tunniste:',
    'LBL_TYPE' => 'Tyyppi:',
    'LBL_WEBSITE' => 'Kotisivu:',
    'LNK_ACCOUNT_LIST' => 'Asiakkaat',
    'LNK_NEW_ACCOUNT' => 'Luo asiakas',
    'MSG_DUPLICATE' => 'Mahdollinen duplikaatti, valitse asiakas listasta, tai tallenna asiakas tästä huolimatta..',
    'MSG_SHOW_DUPLICATES' => 'Asiakas jota olet luomassa on mahdollinen duplikaatti. Tallentaaksesi asiakkaan silti valitse Tallenna, muussa tapauksessa valitse peruuta.',
    'NTC_DELETE_CONFIRMATION' => 'Haluatko varmasti poistaa tietueen?',
    'LBL_LIST_FORM_TITLE' => 'Laskut',
    'LBL_MODULE_NAME' => 'Laskut',
    'LBL_MODULE_TITLE' => 'Laskut',
    'LBL_HOMEPAGE_TITLE' => 'Omat laskut',
    'LNK_NEW_RECORD' => 'Uusi lasku',
    'LNK_LIST' => 'Laskut',
    'LBL_SEARCH_FORM_TITLE' => 'Hae laskuja',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_NEW_FORM_TITLE' => 'Luo lasku',
    'LBL_TERMS_C' => 'Ehdot',
    'LBL_APPROVAL_ISSUE' => 'Hyväksynnän kuvaus',
    'LBL_APPROVAL_STATUS' => 'Hyväksynnän tila',
    'LBL_BILLING_ACCOUNT' => 'Asiakas',
    'LBL_BILLING_CONTACT' => 'Kontakti',
    'LBL_EXPIRATION' => 'Vanhentumispäivä:',
    'LBL_INVOICE_NUMBER' => 'Laskun numero',
    'LBL_OPPORTUNITY' => 'Myyntimahdollisuus',
    'LBL_TEMPLATE_DDOWN_C' => 'Laskupohjat',
    'LBL_STAGE' => 'Tarjouksen tila',
    'LBL_TERM' => 'Ehdot',
    'LBL_SUBTOTAL_AMOUNT' => 'Nettosumma',
    'LBL_DISCOUNT_AMOUNT' => 'Alennus',
    'LBL_TAX_AMOUNT' => 'Verot',
    'LBL_SHIPPING_AMOUNT' => 'Toimitusmaksu',
    'LBL_TOTAL_AMT' => 'Bruttosumma',
    'VALUE' => 'Nimi',
    'LBL_EMAIL_ADDRESSES' => 'Sähköpostiosoitteet',
    'LBL_LINE_ITEMS' => 'Rivitiedot',
    'LBL_GRAND_TOTAL' => 'Kokonaissumma',
    'LBL_QUOTE_NUMBER' => 'Tarjouksen numero',
    'LBL_QUOTE_DATE' => 'Tarjouksen pvm',
    'LBL_INVOICE_DATE' => 'Laskutuspäivä',
    'LBL_DUE_DATE' => 'Eräpäivä',
    'LBL_STATUS' => 'Tila',
    'LBL_INVOICE_STATUS' => 'Laskun tila',
    'LBL_PRODUCT_QUANITY' => 'Tuotteiden määrä',
    'LBL_PRODUCT_NAME' => 'Tuote',
    'LBL_PART_NUMBER' => 'Osanumero',
    'LBL_PRODUCT_NOTE' => 'Tuotteen huomio',
    'LBL_PRODUCT_DESCRIPTION' => 'Kuvaus',
    'LBL_LIST_PRICE' => 'Listahinta',
    'LBL_DISCOUNT_AMT' => 'Alennus',
    'LBL_UNIT_PRICE' => 'Yksikköhinta',
    'LBL_TOTAL_PRICE' => 'Summa',
    'LBL_VAT' => 'Alv', //VAT
    'LBL_VAT_AMT' => 'Alv:n summa', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Lisää tuoterivi',
    'LBL_SERVICE_NAME' => 'Palvelu',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Hinta',
    'LBL_SERVICE_DISCOUNT' => 'Alennus',
    'LBL_ADD_SERVICE_LINE' => 'Lisää palvelutuoterivi',
    'LBL_REMOVE_PRODUCT_LINE' => 'Poista',
    'LBL_PRINT_AS_PDF' => 'Tulosta PDF:nä',
    'LBL_EMAIL_INVOICE' => 'Lähetä sähköpostilla',
    'LBL_LIST_NUM' => 'Num.',
    'LBL_PDF_NAME' => 'Lasku',
    'LBL_EMAIL_NAME' => 'Lasku',
    'LBL_NO_TEMPLATE' => 'VIRHE\nEi mallipohjia. Ellet ole luonut laskupohjaa, siirry PDF-pohjien moduuliin ja luo pohja',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Välisumma + Verot',//pre shipping
    'LBL_EMAIL_PDF' => 'Lähetä PDF sähköpostilla',
    'LBL_ADD_GROUP' => 'Lisää ryhmä',
    'LBL_DELETE_GROUP' => 'Poista ryhmä',
    'LBL_GROUP_NAME' => 'Ryhmän nimi',
    'LBL_GROUP_TOTAL' => 'Ryhmä yhteensä',
    'LBL_SHIPPING_TAX' => 'Toimituskulujen ALV',
    'LBL_SHIPPING_TAX_AMT' => 'Toimituskulujen vero',
    'LBL_IMPORT_LINE_ITEMS' => 'Tuo rivitiedot',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Yhteensä (Oletusvaluutta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Alennus (oletus valuutta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vero (Oletus valuutta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Toimituskulut (Oletusvaluutta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Yhteensä (Oletus valuutta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Toimituskulujen vero (Oletusvaluutta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Yhteensä (Oletus valuutta)',
    'LBL_INVOICE_TO' => 'Lasku asiakkaalle',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Tuoterivien ryhmät',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
);