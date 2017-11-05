<?php

function getTasksForWorkingGroupActivitySubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT tasks.*',
        'from' => 'FROM tasks',
        'where' => 'WHERE tasks.parent_type="nlfwg_WorkingGroups" AND tasks.parent_id="' . $groupId . '"',
        'join' => '',
        'join_tables' => '',
    );
    
    return $query;
}

function getMeetingsForWorkingGroupActivitySubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT meetings.*',
        'from' => 'FROM meetings',
        'where' => 'WHERE meetings.parent_type="nlfwg_WorkingGroups" AND meetings.parent_id="' . $groupId . '"',
        'join' => '',
        'join_tables' => '',
    );
    
    return $query;
}

function getCallsForWorkingGroupActivitySubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT calls.*',
        'from' => 'FROM calls',
        'where' => 'WHERE calls.parent_type="nlfwg_WorkingGroups" AND calls.parent_id="' . $groupId . '"',
        'join' => '',
        'join_tables' => '',
    );
    
    return $query;
}

function getNotesForWorkingGroupSubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT notes.*',
        'from' => 'FROM notes',
        'where' => 'WHERE notes.parent_type="nlfwg_WorkingGroups" AND notes.parent_id="' . $groupId . '"',
        'join' => '',
        'join_tables' => '',
    );
    
    return $query;
}

function getEmailsForWorkingGroupHistorySubpanelQueryParts($params) {
    $groupId = $params['group_id'];
    
    $query = array(
        'select' => 'SELECT emails.*',
        'from' => 'FROM emails',
        'where' => 'WHERE emails.parent_type="nlfwg_WorkingGroups" AND emails.parent_id="' . $groupId . '"',
        'join' => '',
        'join_tables' => '',
    );
    
    return $query;
}

function getActiveWorkingGroupsHtml2($focus, $name, $value, $view) {
    $activeGroups = array();

    if ($view !== 'DetailView') {
        $activeGroups = getAllActiveWorkingGroups(); // TODO: move here from NLFRoles utils
    }

    return makeHtmlOfEnumOptions($activeGroups, array(), $view);
}

function getWorkingGroupRolesForContactHtml($focus, $name, $value, $view) {
    global $app_list_strings;

    $selectedGroups = array();

    $groupId = null;

    if ($view !== 'DetailView') {
        $activeGroups = getAllActiveWorkingGroups(); // TODO: move here from NLFRoles utils
        if (!empty($activeGroups)) {
            $groupId = reset(array_keys($activeGroups));
        }
    }

    if ($groupId !== null) { 
        $contactId = getContactIdForAddWGRoleForm($_REQUEST);
        if ($contactId !== null) {
            $selectedGroups = getWorkingGroupRolesForContact($contactId, $groupId);
        }
    }

    return makeHtmlOfEnumOptions($app_list_strings['contact_working_group_role_list'], $selectedGroups, $view);
}

function getWorkingGroupRolesForContact($contactId = null, $groupId = null) {
    if ($contactId === null) {
        return array();
    }

    if ($groupId === null) {
        return array();
    }

    $roles = array();

    $db = $GLOBALS['db'];
    $query = 'SELECT roles.role FROM nlfwg_workinggroups_contacts_1_c roles ' .
        'WHERE roles.deleted=0 AND ' .
        'roles.nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida="' . $db->quote($groupId) . '" AND ' .
        'roles.nlfwg_workinggroups_contacts_1contacts_idb="' . $db->quote($contactId) . '"';
    $result = $db->query($query);

    if ($row = $db->fetchByAssoc($result)) {
        $roles = unencodeMultienum($row['role']);
        $roles = array_flip($roles); // Could also do array_flip($roles) probably
    }

    return $roles;
}

function getContactIdForAddWGRoleForm($requestData) {
    if (!isset($requestData['target_module']) || $requestData['target_module'] !== 'nlfwg_WorkingGroups') {
        return null;
    }
    if (!isset($requestData['return_module']) || $requestData['return_module'] !== 'Contacts') {
        return null;
    }
    if (!isset($requestData['target_action']) || $requestData['target_action'] !== 'QuickCreate') {
        return null;
    }
    if (!isset($requestData['contact_id']) || empty($requestData['contact_id'])) {
        return null;
    }

    return $requestData['contact_id'];
}
