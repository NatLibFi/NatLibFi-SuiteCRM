<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/SecurityGroups/SecurityGroup.php';
class UserProcessRecordHook
{
    const SECURITY_GROUP_REL_FIELD = 'SecurityGroups';
    const SECURITY_GROUP_NAMES_FIELD = 'security_group_names';

    public function setSecurityGroupNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        // Only load data from DB if in Working Group's own view (i.e. not in other module's subpanel)
        if (isset($_REQUEST['module']) && $_REQUEST['module'] === 'Users') {
            $bean->retrieve(); // Load data from DB, including custom tables
        }

        if (!$bean->load_relationship(self::SECURITY_GROUP_REL_FIELD)) {
            return;
        }

        $groupIds = $bean->{self::SECURITY_GROUP_REL_FIELD}->get(true);

        $groupNames = '';
        foreach ($groupIds as $id) {
            $group = new SecurityGroup();
            $group->retrieve($id);

            if (!$group) {
                continue;
            }

            if (!$group->name) {
                continue;
            }

            if ($groupNames !== '') {
                $groupNames .= ', '; // TODO: i18n this
            }
            $groupNames .= $group->name;
        }

        $bean->{self::SECURITY_GROUP_NAMES_FIELD} = $groupNames;
    }
}
