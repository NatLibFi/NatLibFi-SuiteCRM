<?php

class ContactAccountHelper
{

    public function getAccountDataForContact($contactId)
    {
        /*if ($contact->module_name !== 'Contacts') {
            $GLOBALS['log']->fatal('not a contact');
            return;
        }*/

        if (!$contactId) {
            //$GLOBALS['log']->fatal('no id');
            return;
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT accounts.id AS account_id, accounts.name AS account_name, ' .
            'rel.department AS account_department, rel.address AS account_address, rel.description AS account_description ' .
            'FROM accounts ' .
            'JOIN accounts_contacts rel ' .
            'ON rel.account_id=accounts.id ' .
            'WHERE rel.deleted=0 AND accounts.deleted=0 AND rel.contact_id="' . $db->quote($contactId) . '"';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $data[] = array(
                'account_id' => $row['account_id'],
                'account_name' => $row['account_name'],
                'account_department' => (string)$row['account_department'],
                'account_address' => (string)$row['account_address'],
                'account_description' => (string)$row['account_description'],
            );
        }

        return $data;
    }

    public function addRelateHtmlToAccountData(array &$accountData) {
       foreach ($accountData as $index => &$record) {
            $record['account_html'] = htmlspecialchars($this->getAccountHtmlData($index, $record['account_name'], $record['account_id']));
 //           $record['account_js'] = htmlspecialchars($this->getAutocompleteJsForField('EditView', 'Accounts', 'account_name' . $index, 'account_id' . $index));
        }
    }

    public function getRelateHtmlDataForNewRow() {
        return str_replace("\n", '', htmlspecialchars($this->getAccountHtmlData('__NEW_ROW__', '', '')));
    }

    private function getAccountHtmlData($fieldIndex, $accountName, $accountId) {
        //$relateTpl = 'include/SugarFields/Fields/Relate/EditView.tpl';
        $relateTpl = 'custom/modules/Contacts/tpls/AccountSelectEditView.tpl';
        $smarty = new Sugar_Smarty();

        $smarty->assign('nameField', 'account_name' . $fieldIndex);
        $smarty->assign('nameValue', $accountName);
        $smarty->assign('idField', 'account_id' . $fieldIndex);
        $smarty->assign('idValue', $accountId);

        $smarty->assign('module', 'Accounts');
        $smarty->assign('formName', 'EditView');

        $smarty->assign('tabfieldIndex', '0');
        $smarty->assign('class', 'sqsEnabled yui-ac-input');
        $smarty->assign('popupData', str_replace('"', '&#039;', json_encode(
            array(
                "call_back_function" => "set_return",
                "form_name" => "EditView",
                "field_to_name_array" => array(
                    "id" => "account_id" . $fieldIndex,
                    "name" => "account_name" . $fieldIndex,
                )
            )
        ) ) ); // TODO: figure that out
        $smarty->assign('selectLabel', 'TODO'); // TODO: figure that out
        $smarty->assign('clearLabel', 'TODO'); // TODO: figure that out

        return $smarty->fetch($relateTpl);
     }

}
