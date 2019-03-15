<?php

// Publicly viewable settings shared across National Library of Finland's
// SuiteCRM instances (ASKI project).
// This file is supposed to be loaded from config.php.
// Config values can be overwritten on an instance-specific basis
// through config_override.php.

$sugar_config['enable_legacy_search'] = array(
);
// Max tabs setting determines number of modules for which the "top menu" is generated.
// The number has to be equal (or greater) to the number of all modules visible in the main menu,
// otherwise modules from the end of the list might miss their "top menu" (i.e. the one with
// options like "Create", "List", "Import"). See also: ASKI-243
$sugar_config['default_max_tabs'] = 16;

// Use Finnish decimal separator and number grouping separator.
// NB! seperator is their typo, not mine, so keep it!
$sugar_config['default_decimal_seperator'] = ',';
// This is UTF-code for non-breaking space:
$sugar_config['default_number_grouping_seperator'] = "\xc2\xa0";                     

$sugar_config['email_sugarclient_listviewmaxselect'] = 200;

// Added in SuiteCRM 7.10:
$sugar_config['email_enable_auto_send_opt_in'] = false;
$sugar_config['email_enable_confirm_opt_in'] = 'not-opt-in';
