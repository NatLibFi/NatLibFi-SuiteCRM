<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class ServiceProcessRecordHook
{
    public function setAccountCountForSystem($bean, $event, $arguments)
    {
        $id = $bean->id;
        if (!isset($id)) {
            return;
        }

        // Do nothing if this is not fired in the Backend Systems DetailView subpanel
        if (!isset($_REQUEST['module']) || $_REQUEST['module'] !== 'nlfbs_BackendSystems') {
            return;
        }
        if (!isset($_REQUEST['action']) || $_REQUEST['action'] !== 'SubPanelViewer') {
            return;
        }
        if (!isset($_REQUEST['record']) || $_REQUEST['record'] === '') {
            return;
        }

        $systemId = $_REQUEST['record'];

        $db = DBManagerFactory::getInstance();

        $query = 'SELECT COUNT(a_rel.accounts_nlfbr_businessrelationships_1accounts_ida) AS acc_count ' .
            'FROM accounts_nlfbr_businessrelationships_1_c a_rel ' .
            'JOIN nlfbr_businessrelationships_data_sources bs_rel ' .
            'ON a_rel.accounts_n824donships_idb=bs_rel.businessrelationship_id ' .
            'JOIN nlfse_services_nlfbr_businessrelationships_1_c s_rel ' .
            'ON bs_rel.businessrelationship_id=s_rel.nlfse_serva51aonships_idb ' .
            'WHERE a_rel.deleted=0 AND s_rel.deleted=0 AND bs_rel.deleted=0 AND ' .
            's_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida="' . $db->quote($id) . '" AND ' .
            'bs_rel.backend_system like "%^' . $db->quote($systemId) . '^%"';

        $result = $db->query($query);

        $count = 0;
        if ($row = $db->fetchByAssoc($result) ) {
            $count = (int)$row['acc_count'];
        }

        $bean->{'account_count_for_system'} = $count;
     }

}
