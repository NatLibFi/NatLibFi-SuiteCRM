<?php

class BusinessRelationshipFinnaViewHelper {

    public function getViewData($brId, $useDbDateFormat = false) {
        if (!$brId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT view.id AS view_id, view.view_status AS view_status, view.view_url AS view_url,' .
            'view.admin_access AS admin_access, view.view_production_date AS production_date, ' .
            'view.description AS description ' .
            'FROM nlfbr_businessrelationships_finna_views view ' .
            'JOIN nlfbr_businessrelationships br ' .
            'ON br.id=view.businessrelationship_id ' .
            'WHERE view.businessrelationship_id="' . $db->quote($brId) . '" AND ' .
            'br.deleted=0 AND view.deleted=0 ';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $productionDate = $row['production_date'];
            if (!$useDbDateFormat) {
                $productionDate = $this->convertDateForDisplay($productionDate);
            }

            $data[] = array(
                'record_id' => $row['view_id'],
                'view_status' => $row['view_status'],
                'view_url' => (string)$row['view_url'],
                'admin_access' => (string)($row['admin_access']) === '1',
                'production_date' => $productionDate,
                'description' => (string)$row['description'],
            );
        }

        return $data;
    }

    // Copied from SugarFieldDatetime::getDetailViewSmarty
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

    public function resetRecordIds(array $data) {
        $result = array();
        foreach ($data as $record) {
            $resetRecord = $record;
            $resetRecord['record_id'] = '';
            $result[] = $resetRecord;
        }
        return $result;
    }

    public function getAvailableStatusList() {
        global $app_list_strings;
        return $app_list_strings['finnanakyma_status_list'];
    }

}
