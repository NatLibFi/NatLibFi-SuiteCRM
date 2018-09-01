<?php

ini_set('error_reporting', E_ALL | E_STRICT);

define('sugarEntry',TRUE);

global $sugar_config, $db;
require_once __DIR__ . '/../include/entryPoint.php';

require_once __DIR__ . '/UserPreferenceUpdater.php';

$db = DBManagerFactory::getInstance();

$updater = new UserPreferenceUpdater($db);

$updater->updateSetting('dec_sep', ',');
$updater->updateSetting('num_grp_sep', "\xc2\xa0");
