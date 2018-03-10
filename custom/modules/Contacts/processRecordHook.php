<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ContactProcessRecordHook
{
    const FIELD_ROLE = 'accounts_contacts_role_incl_businessrelationships';
    const ACCOUNT_NAMES_FIELD = 'contact_account_names';
    const SERVICE_NAMES_FIELD = 'contact_service_names';

    // TODO: this could be made function called from vardef instead of using a hook?
    function setAccountAndBusinessRelationshipRole($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $roleString = getAccountAndBRRolesForContactSubpanelHtml($id);
        if ($roleString) {
            $bean->{self::FIELD_ROLE} = $roleString;
        }
    }

    function setContactAccountNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        /*$db = $GLOBALS['db'];

        $query = 'SELECT s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AS service_id ' .
            'FROM nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'JOIN nlfbr_businessrelationships_contacts_1_c c_rel ' .
            'ON s_rel.nlfse_serva51aonships_idb=c_rel.nlfbr_busic409onships_ida ' .
            'WHERE s_rel.deleted=0 AND c_rel.deleted=0 AND c_rel.nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($id) . '"';

        $result = $db->query($query);

        $serviceIds = array();
        while ($row = $db->fetchByAssoc($result) ) {
            $serviceIds[] = $row['service_id'];
        }

        $serviceIds = array_unique($serviceIds);*/
        $bean->load_relationship('accounts');
        $accountIds = $bean->{'accounts'}->get(true);

        $accountNames = '';
        foreach ($accountIds as $accountId) {
            $account = new Account();
            $account->retrieve($accountId);

            if (!$account) {
                continue;
            }

            if (!$account->name) {
                continue;
            }

            if ($accountNames !== '') {
                $accountNames .= ', '; // TODO: i18n this
            }
            $accountNames .= $account->name;
        }

        $bean->{self::ACCOUNT_NAMES_FIELD} = $accountNames;
    }

    function setContactServiceNames($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT s_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida AS service_id ' .
            'FROM nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'JOIN nlfbr_businessrelationships_contacts_1_c c_rel ' .
            'ON s_rel.nlfse_serva51aonships_idb=c_rel.nlfbr_busic409onships_ida ' .
            'WHERE s_rel.deleted=0 AND c_rel.deleted=0 AND c_rel.nlfbr_businessrelationships_contacts_1contacts_idb="' . $db->quote($id) . '"';

        $result = $db->query($query);

        $serviceIds = array();
        while ($row = $db->fetchByAssoc($result) ) {
            $serviceIds[] = $row['service_id'];
        }

        $serviceIds = array_unique($serviceIds);

        $serviceNames = '';
        foreach ($serviceIds as $serviceId) {
            $service = new nlfse_Services();
            $service->retrieve($serviceId);

            if (!$service) {
                continue;
            }

            if (!$service->name) {
                continue;
            }

            if ($serviceNames !== '') {
                $serviceNames .= ', '; // TODO: i18n this
            }
            $serviceNames .= $service->name;
        }

        $bean->{self::SERVICE_NAMES_FIELD} = $serviceNames;
    }
}
