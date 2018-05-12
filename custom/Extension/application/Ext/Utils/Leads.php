<?php

function getLeadAccountEmailAddressWidget($focus, $field, $value, $view) {
    $sea = new SugarEmailAddress();
    $sea->setView($view);

    if($view == 'EditView' || $view == 'QuickCreate' || $view == 'ConvertLead') {
        $module = 'LeadAccount';
        $id = $focus->id;
        // Lead conversion case
        // TODO: this is hacky, how to access the ID nicer?
        if ($focus->module_name === 'Accounts' && !$id && $view == 'ConvertLead' && isset($_REQUEST['record'])) {
            $id = $_REQUEST['record'];
        }
        return $sea->getEmailAddressWidgetEditView($id, $module, false,'');
    }
    $clone = clone $focus;
    $clone->module_dir = 'LeadAccount';
    return $sea->getEmailAddressWidgetDetailView($clone);
}
