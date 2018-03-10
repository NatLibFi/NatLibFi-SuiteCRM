<?php

define('sugarEntry',TRUE);

if (count($argv) !== 2) {
    die("php \$0 custom_fields.sug");
}

require_once __DIR__ . '/../include/utils.php';
require_once __DIR__ . '/../include/modules.php';
require_once __DIR__ . '/../include/entryPoint.php';
//Oddly entry point loads app_strings but not app_list_strings, manually do this here.
$GLOBALS['app_list_strings'] = return_app_list_strings_language($GLOBALS['current_language']);

    $fmd = BeanFactory::getBean('EditCustomFields');

    echo $mod_strings['LBL_ICF_DROPPING'] . '<br>';
    $lines = file($argv[1]);
    $cur = array();
    foreach ($lines as $line) {
        if (trim($line) == 'DONE') {
            $fmd->new_with_id = true;
            echo $mod_strings['LBL_IMPORT_CUSTOM_FIELDS_ADDING'] . ':' . $fmd->custom_module . '-' .
                 $fmd->name . '<br>';
            $fmd->db->query("DELETE FROM $fmd->table_name WHERE id=".$fmd->db->quoted($fmd->id));
            $fmd->save(false);
            $fmd = BeanFactory::getBean('EditCustomFields');
        } else {

            $ln = explode(':::', $line, 2);
            if (sizeof($ln) == 2) {
                $KEY = trim($ln[0]);
                if ($KEY === 'table_name') {
                    continue;
                }
                $fmd->$KEY = trim($ln[1]);
            }
        }
    }
	$_REQUEST['run'] = true;
	$result = $fmd->db->query("SELECT count(*) field_count FROM $fmd->table_name");
	$row = $fmd->db->fetchByAssoc($result);
	echo 'Total Custom Fields :' . $row['field_count'] . '<br>';
	include('modules/Administration/UpgradeFields.php');
