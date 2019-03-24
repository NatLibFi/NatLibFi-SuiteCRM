<?php

// Hackily add JS files to override some method to allow custom Account column in the Address Book search

$indexes = array();

foreach ($js_groupings as $index => $grouping) {
    if (array_key_exists('modules/Emails/javascript/EmailUICompose.js', $grouping)) {
        $indexes[$index] = $grouping['modules/Emails/javascript/EmailUICompose.js'];
    }
}

foreach ($indexes as $index => $groupedFile) {
    //$js_groupings[$index]['include/javascript/yui/build/dom/dom-min.js'] = $groupedFile;
    //$js_groupings[$index]['include/javascript/yui/build/yahoo-dom-event/yahoo-dom-event.js'] = 'include/javascript/sugar_grp_emails.js';
    //$js_groupings[$index]['include/javascript/yui/build/dragdrop/dragdrop-min.js'] = 'include/javascript/sugar_grp_emails.js';
    $js_groupings[$index]['custom/modules/Emails/javascript/EmailUICompose.js'] = $groupedFile;
}

//$sugar_grp_emails['custom/modules/Emails/javascript/EmailUICompose.js'] = 'include/javascript/sugar_grp_emails.js';
//$sugar_grp_quick_compose['custom/modules/Emails/javascript/EmailUICompose.js'] = 'include/javascript/sugar_grp_emails.js';
