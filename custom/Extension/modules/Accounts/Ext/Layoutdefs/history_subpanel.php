<?php

// If Notes modules is not shown in the module list in the Menu,
// notes would not be visible in the History panel.
// Make them always shown, regardles of Notes module visibility
global $modListHeader;
global $modules_exempt_from_availability_check;
if (!array_key_exists ('Notes', $modListHeader) || !array_key_exists('Notes', $modules_exempt_from_availability_check)) {
    $modules_exempt_from_availability_check['Notes'] = 'Notes';
}
