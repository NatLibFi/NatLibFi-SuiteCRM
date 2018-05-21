<?php

function getAllContactRoleString($contactId) {
    global $app_list_strings;

    if (!$contactId) {
        return '';
    }

    $db = $GLOBALS['db'];

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

    return implode(', ' , $allRoles);
}
