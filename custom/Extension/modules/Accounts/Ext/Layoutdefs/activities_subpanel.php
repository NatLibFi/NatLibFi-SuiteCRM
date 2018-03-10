<?php

foreach ($layout_defs['Accounts']['subpanel_setup']['activities']['top_buttons'] as &$buttonDef) {
    if ($buttonDef['widget_class'] === 'SubPanelTopComposeEmailButton') {
        $buttonDef['widget_class'] = 'SubPanelTopComposeGroupEmailButton';
    }
}
//$layout_defs['Accounts']['subpanel_setup']['activities']['top_buttons'][] = array('widget_class' => 'SubPanelTopComposeGroupEmailButton');
