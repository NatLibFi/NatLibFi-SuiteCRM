<?php

class BusinessRelationshipContractHelper {

    public function getContractData($brId, $serviceId = null, $useDbDateFormat = false) {
        if (!$brId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $serviceJoin = '';
        $serviceWhere = '';
        if ($serviceId !== null) {
            $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
                'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
            $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
                'AND rel_services.deleted=0 ';
        }
        $query = 'SELECT rel.id AS rel_id, contract.id AS contract_id, contract.name AS contract_name, ' .
            'rel.active AS active, rel.kronodoc_id AS kronodoc_id, rel.authorizations AS authorizations, ' .
            'rel.year AS bind_year, rel.end_date AS end_date, rel.description AS description ' .
            'FROM aos_contracts contract ' .
            'JOIN nlfbr_businessrelationships_aos_contracts_1_c rel ' .
            'ON contract.id=rel.nlfbr_businessrelationships_aos_contracts_1aos_contracts_idb ' .
            $serviceJoin .
            'WHERE rel.nlfbr_busi9351onships_ida="' . $db->quote($brId) . '" AND ' .
            'contract.deleted=0 AND contract.status!="paattynyt" AND rel.deleted=0 '.
            $serviceWhere .
            'ORDER BY active DESC, end_date DESC, contract_name ASC';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $endDate = $row['end_date'];
            if (!$useDbDateFormat) {
                $endDate = $this->convertDateForDisplay($endDate);
            }

            $data[] = array(
                'record_id' => $row['rel_id'],
                'contract_id' => $row['contract_id'],
                'contract_name' => $row['contract_name'],
                'kronodoc_id' => $row['kronodoc_id'],
                'active' => (string)($row['active']) === '1',
                'authorizations' => $row['authorizations'],
                'bind_year' => $row['bind_year'],
                'end_date' => $endDate,
                'description' => $row['description'],
            );
        }

        return $data;
    }

    // Cpied from SugarFieldDatetime::getDetailViewSmarty
    private function convertDateForDisplay($date) {
        global $timedate,$current_user;

        $user_dateFormat = $timedate->get_date_format();
        if(!empty($date) && !$timedate->check_matching_format( $date, $user_dateFormat)){ 
            $sdt = $timedate->fromString($date, $current_user);

            if (!empty($sdt)) {
                return $timedate->asUserDate($sdt,$current_user);
            }
        }
        return $date;
    }

    public function getAllActiveContracts($serviceId = null) {
        $db = $GLOBALS['db'];
        $serviceJoin = '';
        $serviceWhere = '';
        if ($serviceId !== null) {
            $serviceJoin = 'JOIN nlfse_services_aos_contracts_1_c rel_services ' .
                'ON contract.id=rel_services.nlfse_services_aos_contracts_1aos_contracts_idb ';
            $serviceWhere = 'AND rel_services.nlfse_services_aos_contracts_1nlfse_services_ida="' . $db->quote($serviceId) . '" ' .
                'AND rel_services.deleted=0 ';
        }
        $query = 'SELECT contract.id, contract.name FROM aos_contracts contract ' .
            $serviceJoin .
            'WHERE contract.deleted=0 AND contract.status!="paattynyt" ' .
            $serviceWhere .
            'ORDER BY contract.name ASC';
        $result = $db->query($query);

        $list = array();
        while ($row = $db->fetchByAssoc($result)) {
            $list[$row['id']] = $row['name'];
        }

        return $list;
    }
}
