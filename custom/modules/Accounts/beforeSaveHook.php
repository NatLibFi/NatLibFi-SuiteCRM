<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountBeforeSaveHook
{
    function setAccountName($bean, $event, $arguments)
    {
        $oldName = $bean->name;

        $bean->name = $bean->name_fin_c;

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
}
