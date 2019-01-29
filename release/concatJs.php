<?php

define('sugarEntry',TRUE);

require_once('include/utils/sugar_file_utils.php');

$dir = dirname(__DIR__);

$forceReb = false;

$js_groupings = array();

require('jssource/JSGroupings.php');
require_once('jssource/minify_utils.php');
require_once('jssource/jsmin.php');

//iterate through array of grouped files
$grp_array = $js_groupings;//from JSGroupings.php;

//for each item in array, concatenate the source files
foreach($grp_array as $grp){
    foreach($grp as $original =>$concat){
        $concat = sugar_cached($concat);
        //make sure both files are still valid
        if(is_file($original)  &&  is_file($concat)){
            //if individual file has been modifed date later than modified date of
            //concatenated file, then force a rebuild
            if(filemtime($original) > filemtime($concat)){
                $forceReb = true;
                //no need to continue, we will rebuild
                break;
            }
        }else{
            //if files are not valid, rebuild as one file could have been deleted
            $forceReb = true;
            //no need to continue, we will rebuild
            break;
        }
    }
}

if($forceReb){
    $_REQUEST['root_directory'] = $dir;
    ConcatenateFiles("$dir");
}
