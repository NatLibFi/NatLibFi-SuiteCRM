<?php

class BusinessRelationshipFinnaLinkHelper {

    public function getLinkData($brId) {
        if (!$brId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT link.id AS link_id, link.link_url AS link_url,' .
            'link.description AS description ' .
            'FROM nlfbr_businessrelationships_finna_links link ' .
            'JOIN nlfbr_businessrelationships br ' .
            'ON br.id=link.businessrelationship_id ' .
            'WHERE link.businessrelationship_id="' . $db->quote($brId) . '" AND ' .
            'br.deleted=0 AND link.deleted=0 ';

        $result = $db->query($query);

        $data = array();

        while ($row = $db->fetchByAssoc($result)) {
            $data[] = array(
                'record_id' => $row['link_id'],
                'link_url' => (string)$row['link_url'],
                'description' => (string)$row['description'],
            );
        }

        return $data;
    }

}
