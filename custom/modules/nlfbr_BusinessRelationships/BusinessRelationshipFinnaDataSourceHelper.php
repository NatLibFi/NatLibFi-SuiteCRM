<?php

class BusinessRelationshipFinnaDataSourceHelper {

    public function getSourceData($brId) {
        if (!$brId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT source.id AS source_id, source.source_name AS source_name, source.backend_system AS backend_system,' .
            'source.harvesting_format AS harvesting_format, source.contact_email AS contact_email, ' .
            'source.restricted_metadata AS restricted_metadata, source.description AS description ' .
            'FROM nlfbr_businessrelationships_finna_sources source ' .
            'JOIN nlfbr_businessrelationships br ' .
            'ON br.id=source.businessrelationship_id ' .
            'WHERE source.businessrelationship_id="' . $db->quote($brId) . '" AND ' .
            'br.deleted=0 AND source.deleted=0 ';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $data[] = array(
                'record_id' => $row['source_id'],
                'source_name' => $row['source_name'],
                'backend_system' => unencodeMultienum($row['backend_system']),
                'harvesting_format' => unencodeMultienum($row['harvesting_format']),
                'contact_email' => (string)$row['contact_email'],
                'restricted_metadata' => (string)($row['restricted_metadata']) === '1',
                'description' => (string)$row['description'],
            );
        }

        return $data;
    }

    public function getAvailableBackendSystems() {
        return getAllActiveBackEndSystems();
    }

    public function getAvailableHarvestingFormats() {
        global $app_list_strings;
        return $app_list_strings['haravointiformaatti_list'];
    }

}
