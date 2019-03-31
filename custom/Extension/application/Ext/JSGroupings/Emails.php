<?php

// Hackily add JS files to override some method to allow custom Account column in the Address Book search

$indexes = array();

foreach ($js_groupings as $index => $grouping) {
    if (array_key_exists('modules/Emails/javascript/EmailUICompose.js', $grouping)) {
        $indexes[$index] = $grouping['modules/Emails/javascript/EmailUICompose.js'];
    }
}

foreach ($indexes as $index => $groupedFile) {
    $js_groupings[$index]['custom/modules/Emails/javascript/EmailUICompose.js'] = $groupedFile;
}
