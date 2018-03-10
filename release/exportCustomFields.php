<?php

ini_set('error_reporting', E_ALL | E_STRICT);

define('sugarEntry',TRUE);

global $sugar_config, $db;
//require_once __DIR__ . '/../include/utils.php';
//require_once __DIR__ . '/../include/modules.php';
require_once __DIR__ . '/../include/entryPoint.php';

require_once __DIR__ . '/CustomFieldMetadataExporter.php';

$db = DBManagerFactory::getInstance();

$exporter = new CustomFieldMetadataExporter($db);

$data = $exporter->export();

foreach ($data as $fieldMetadata) {
    foreach ($fieldMetadata as $key => $value) {
        echo "$key:::$value\n";
    }
    echo "DONE\n";
}
