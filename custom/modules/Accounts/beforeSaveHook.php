<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AccountBeforeSaveHook
{
    function setAccountName($bean, $event, $arguments)
    {
        $bean->name = $bean->name_fin_c;

        if ($bean->name_default_lang_c === 'swe') {
            $bean->name = $bean->name_swe_c;
        } elseif ($bean->name_default_lang_c === 'eng') {
            $bean->name = $bean->name_eng_c;
        } elseif ($bean->name_default_lang_c === 'other') {
            $bean->name = $bean->name_other_c;
        }
    }
}
