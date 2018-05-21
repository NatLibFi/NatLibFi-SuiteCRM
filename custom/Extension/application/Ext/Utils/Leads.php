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

function getLeadsForAccountSubpanelQueryParts($params) {
    $accountId = $params['account_id'];

    $db = $GLOBALS['db'];

    $query = array(
            'select' => 'SELECT leads.*',
            'from' => 'FROM leads',
            'where' => 'WHERE leads.deleted=0 AND (leads.account_id="' . $db->quote($accountId) . '" OR (rel.accounts_leads_1accounts_ida="' . $db->quote($accountId) . '" AND rel.deleted=0))',
            'join' => ' LEFT JOIN accounts_leads_1_c rel ' .
            'ON rel.accounts_leads_1leads_idb=leads.id ',
            'join_tables' => '',
            );

    return $query;
}
