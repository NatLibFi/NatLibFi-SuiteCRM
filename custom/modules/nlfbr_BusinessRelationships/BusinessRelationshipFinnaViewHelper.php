<?php

class BusinessRelationshipFinnaViewHelper {

    public function getViewData($brId) {
        if (!$brId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT view.id AS view_id, view.view_status AS view_status, view.view_url AS view_url,' .
            'view.admin_access AS admin_access, view.description AS description ' .
            'FROM nlfbr_businessrelationships_finna_views view ' .
            'JOIN nlfbr_businessrelationships br ' .
            'ON br.id=view.businessrelationship_id ' .
            'WHERE view.businessrelationship_id="' . $db->quote($brId) . '" AND ' .
            'br.deleted=0 AND view.deleted=0 ';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $data[] = array(
                'record_id' => $row['view_id'],
                'view_status' => $row['view_status'],
                'view_url' => $row['view_url'],
                'admin_access' => (string)($row['admin_access']) === '1',
                'description' => $row['description'],
            );
        }

        return $data;
    }

    public function getAvailableStatusList() {
        global $app_list_strings;
        return $app_list_strings['finnanakyma_status_list'];
    }

}
