<?php

function getAllContactRoleString($contactId) {
    global $app_list_strings;

    if (!$contactId) {
        return '';
    }

    $db = DBManagerFactory::getInstance();

    $query = 'SELECT rel.role AS role, acc.name AS account_name FROM accounts_contacts rel  ' .
        'JOIN accounts acc ON acc.id=rel.account_id ' .
        'WHERE rel.deleted=0 AND acc.deleted=0 AND contact_id="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $accRoles = array();
    if ($row = $db->fetchByAssoc($result)) {
        $rawRoles = unencodeMultienum($row['role']);
        $accName = $row['account_name'];
        foreach ($rawRoles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_account_role_list'])) {
                $accRoles[] = $app_list_strings['contact_account_role_list'][$role] . ' ' . translate('LBL_ROLE_IN_ACCOUNT_INFIX') . ': ' . $accName;
            } else {
                $accRoles[] = $role . ' ' . translate('LBL_ROLE_IN_ACCOUNT_INFIX') . ': ' . $accName;
            }
        }
    }

    $query = 'SELECT br.name AS br_name, br_rel.role AS role, br.nlfbr_businessrelationships_account_alliances as br_alliances FROM nlfbr_businessrelationships br ' .
        'JOIN nlfbr_businessrelationships_contacts_1_c br_rel ' .
        'ON br_rel.nlfbr_busic409onships_ida=br.id ' .
        'WHERE br.deleted=0 AND br_rel.deleted=0 ' .
        'AND br_rel.nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $brRoles = array();
    while ($row = $db->fetchByAssoc($result)) {
        $brName = $row['br_name'];
        if ($row['br_alliances']) {
            $allianceIds = unencodeMultienum($row['br_alliances']);
            $allianceNames = getAllianceNameString($allianceIds);
            if ($allianceNames) {
                $brName .= ' (' . $allianceNames . ')';
            }
        }
        $brRoles[$brName] = unencodeMultienum($row['role']);
    }

    $allRoles = $accRoles;

    foreach ($brRoles as $brName => $roles) {
        foreach ($roles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_business_relationship_role_list'])) {
                $allRoles[] = $app_list_strings['contact_business_relationship_role_list'][$role] . ' ' . translate('LBL_ROLE_IN_BUSINESSRELATIONSHIP_INFIX') . ': ' . $brName;
            } else {
                $allRoles[] = $role . ' ' . translate('LBL_ROLE_IN_BUSINESSRELATIONSHIP_INFIX') . ': ' . $brName;
            }
        }
    }

    $query = 'SELECT alliance.name AS alliance_name, rel.role AS role FROM nlfal_alliances alliance ' .
        'JOIN nlfal_alliances_contacts_1_c rel ' .
        'ON rel.nlfal_alliances_contacts_1nlfal_alliances_ida=alliance.id ' .
        'WHERE alliance.deleted=0 AND rel.deleted=0 ' .
        'AND rel.nlfal_alliances_contacts_1contacts_idb="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $allianceRoles = array();
    while ($row = $db->fetchByAssoc($result)) {
        $allianceName = $row['alliance_name'];
        $allianceRoles[$allianceName] = unencodeMultienum($row['role']);
    }

    foreach ($allianceRoles as $allianceName => $roles) {
        foreach ($roles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_alliance_role_list'])) {
                $allRoles[] = $app_list_strings['contact_alliance_role_list'][$role] . ' ' . translate('LBL_ROLE_IN_ALLIANCE_INFIX') . ': ' . $allianceName;
            } else {
                $allRoles[] = $role . ' ' . translate('LBL_ROLE_IN_ALLIANCE_INFIX') . ': ' . $allianceName;
            }
        }
    }

    $query = 'SELECT wg.name AS wg_name, rel.role AS role FROM nlfwg_workinggroups wg ' .
        'JOIN nlfwg_workinggroups_contacts_1_c rel ' .
        'ON rel.nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida=wg.id ' .
        'WHERE wg.deleted=0 AND rel.deleted=0 ' .
        'AND rel.nlfwg_workinggroups_contacts_1contacts_idb="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $wgRoles = array();
    while ($row = $db->fetchByAssoc($result)) {
        $wgName = $row['wg_name'];
        $wgRoles[$wgName] = unencodeMultienum($row['role']);
    }

    foreach ($wgRoles as $wgName => $roles) {
        foreach ($roles as $role) {
            if (array_key_exists($role, $app_list_strings['contact_working_group_role_list'])) {
                $allRoles[] = $app_list_strings['contact_working_group_role_list'][$role] . ' ' . translate('LBL_ROLE_IN_WORKING_GROUP_INFIX') . ': ' . $wgName;
            } else {
                $allRoles[] = $role . ' ' . translate('LBL_ROLE_IN_WORKING_GROUP_INFIX') . ': ' . $wgName;
            }
        }
    }

    $query = 'SELECT lead.account_name AS lead_name, acc.name AS lead_name_alt, rel.role AS role FROM leads lead ' .
        'JOIN contacts_leads_2_c rel ' .
        'ON rel.contacts_leads_2leads_idb=lead.id ' .
        'JOIN accounts_leads_1_c acc_rel ' .
        'ON acc_rel.accounts_leads_1leads_idb=lead.id ' .
        'JOIN accounts acc ' .
        'ON acc.id=acc_rel.accounts_leads_1accounts_ida ' . 
        'WHERE lead.deleted=0 AND rel.deleted=0 AND acc.deleted=0 AND acc_rel.deleted=0 ' .
        'AND rel.contacts_leads_2contacts_ida="' . $db->quote($contactId) . '"';

    $result = $db->query($query);

    $leadRoles = array();
    while ($row = $db->fetchByAssoc($result)) {
        $leadName = $row['lead_name'];
        if (!$leadName) {
            $leadName = $row['lead_name_alt'];
        }
        $leadRoles[$leadName] = unencodeMultienum($row['role']);
    }

    $allLeadRoles = getLeadContactRoles();
    foreach ($leadRoles as $leadName => $roles) {
        foreach ($roles as $role) {
            if (array_key_exists($role, $allLeadRoles)) {
                $allRoles[] = $allLeadRoles[$role] . ' ' . translate('LBL_ROLE_IN_LEAD_INFIX') . ': ' . $leadName;
            } else {
                $allRoles[] = $role . ' ' . translate('LBL_ROLE_IN_LEAD_INFIX') . ': ' . $leadName;
            }
        }
    }

    return implode(', ' , $allRoles);
}


function getContactRolesForAllianceSearchForm()
{
    global $app_list_strings, $app_strings;

    return array_merge(
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_ALLIANCE'] . ')'; },
            $app_list_strings['contact_alliance_role_list']
        ),
        array_map(
            function($x) use ($app_strings) { return $x . ' (' . $app_strings['LBL_ROLE_LIST_SUFFIX_BUSINESS_RELATIONSHIP'] . ')'; },
            $app_list_strings['contact_business_relationship_role_list']
        )
    );
}
