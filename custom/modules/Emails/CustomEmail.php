<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Emails/Email.php';
require_once 'custom/include/GroupEmailHelper.php';

class CustomEmail extends Email {

    function email2init() {
        require_once('custom/modules/Emails/CustomEmailUI.php');
        $this->et = new CustomEmailUI();
    }

    public function getNamePlusEmailAddressesForCompose($module, $idsArray, $contactRole = '')
    {
        if ($module !== 'Accounts' && $module !== 'Contacts' && $module !== 'Leads' && $module !== 'nlfwg_WorkingGroups'&& $module !== 'nlfbr_BusinessRelationships' && $module !== 'nlfal_Alliances') {
            return parent::getNamePlusEmailAddressesForCompose($module, $idsArray);
        }

        if ($module === 'Contacts') {
            $ids = $this->filterContactsForEmail($idsArray);
            return parent::getNamePlusEmailAddressesForCompose($module, $ids);
        }

        global $locale;
        $result = array();

        $helper = new GroupEmailHelper();
        foreach ($idsArray as $id)
        {
            $emailData = $helper->getRecipientNamesAndAddresses($module, $id, $contactRole);
            foreach ($emailData as $item) {
                $emailAddress = $item['email_address'];
                $fullName = from_html(
                    $locale->getLocaleFormattedName(
                        $item['first_name'],
                        $item['last_name'],
                        $item['salutation'],
                        $item['title']
                    )
                );

                $result[] = $fullName . " <" . from_html($emailAddress) . ">";
            }
        }

        return $this->_arrayToDelimitedString($result);
    }

    private function filterContactsForEmail($ids) {
        if (empty($ids)) {
            return array();
        }

        $filteredIds = array();
        $db = $GLOBALS['db'];

        $idString = implode(',', array_map( function($id) use ($db) {return '"' . $db->quote($id) . '"';}, $ids ) );
        $query = 'SELECT contacts.id FROM contacts ' .
            'JOIN contacts_cstm ON contacts.id=contacts_cstm.id_c ' .
            'WHERE contacts.deleted=0 AND contacts_cstm.no_mailing_c=0 ' .
            'AND contacts.id IN (' . $idString . ')';

        $result = $db->query($query);

        while ($row = $db->fetchByAssoc($result)) {
            $filteredIds[] = $row['id'];
        }

        return $filteredIds;
    }

}
