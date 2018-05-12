<?php

function getLeadAccountEmailAddressWidget($focus, $field, $value, $view) {
    $sea = new SugarEmailAddress();
    $sea->setView($view);

    if($view == 'EditView' || $view == 'QuickCreate' || $view == 'ConvertLead') {
        $module = 'LeadAccount';
        return $sea->getEmailAddressWidgetEditView($focus->id, $module, false,'');
    }
    $clone = clone $focus;
    $clone->module_dir = 'LeadAccount';
    return $sea->getEmailAddressWidgetDetailView($clone);
}
