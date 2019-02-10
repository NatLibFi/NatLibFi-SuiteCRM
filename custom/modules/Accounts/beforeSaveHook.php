<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountBeforeSaveHook
{
    function setAccountName($bean, $event, $arguments)
    {
        $oldName = $bean->name;

        $bean->name = isset($bean->name_fin_c) ? $bean->name_fin_c : '';

        $defaultLang = isset($this->name_default_lang_c) ? $this->name_default_lang_c : 'fin';
        $bean->name_default_lang_c = $defaultLang;

        if ($bean->name_default_lang_c === 'swe') {
            $bean->name = $bean->name_swe_c;
        } elseif ($bean->name_default_lang_c === 'eng') {
            $bean->name = $bean->name_eng_c;
        } elseif ($bean->name_default_lang_c === 'other') {
            $bean->name = $bean->name_other_c;
        }

        // Handle cases when original SuiteCRM code sets only 'name'
        // In such cases, name gets overwritten with empty string above.
        // If so happens, use the name provided, and assume it is Finnish one
        if (!$bean->name && $oldName) {
            $bean->name = $oldName;
            $bean->name_fin_c = $oldName;
        }
        if (!$bean->name_default_lang_c) {
            $bean->name_default_lang_c = 'fin';
        }
    }

    public function setInitialBackendSystems($bean, $event, $arguments)
    {
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'Accounts') {
            return;
        }

        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'Save') {
            return;
        }

        if (!isset($_REQUEST['record']) || $_REQUEST['record'] !== '') {
            return;
        }

        if (!isset($_REQUEST['accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb'])) {
            return;
        }

        if (!$bean->load_relationship('accounts_nlfbs_backendsystems_1')) {
            return;
        }

        foreach ($_REQUEST['accounts_nlfbs_backendsystems_1nlfbs_backendsystems_idb'] as $id) {
            $bean->{'accounts_nlfbs_backendsystems_1'}->add($id, array());
        }
    }
}
