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

function getLeadsForContactSubpanelQueryParts($params) {
    $contactId = $params['contact_id'];

    $db = $GLOBALS['db'];

    $query = array(
            'select' => 'SELECT leads.*',
            'from' => 'FROM leads',
            'where' => 'WHERE leads.deleted=0 AND (leads.contact_id="' . $db->quote($contactId) . '" OR (rel.contacts_leads_1contacts_ida="' . $db->quote($contactId) . '" AND rel.deleted=0))',
            'join' => ' LEFT JOIN contacts_leads_1_c rel ' .
            'ON rel.contacts_leads_1leads_idb=leads.id ',
            'join_tables' => '',
            );

    return $query;
}


function getLeadRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedRoles = array();

    // TODO: no more logic really needed until no quick create form on the Contact side!

    return makeHtmlOfEnumOptions($app_list_strings['contact_business_relationship_role_list'], $selectedRoles, $view);;
}

function getLeadRolesForContact($contactId = null, $leadId = null) {
    if ($contactId === null) {
        return array();
    }

    if ($leadId === null) {
        return array();
    }

    $roles = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT rel.role FROM contacts_leads_2_c rel ' .
        'WHERE rel.deleted=0 AND ' .
        'rel.contacts_leads_2leads_idb="' . $db->quote($leadId) . '" AND ' .
        'rel.contacts_leads_2contacts_ida="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $roles = unencodeMultienum($row['role']);
        $roles = array_flip($roles); // Could also do array_flip($roles) probably
    }

    return $roles;
}


