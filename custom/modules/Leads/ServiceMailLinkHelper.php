<?php

class ServiceMailLinkHelper {

    public function getLinkData($leadId) {
        if (!$leadId) {
            return array();
        }

        $db = DBManagerFactory::getInstance();

        $query = 'SELECT link.id AS link_id, link.link_url AS link_url,' .
            'link.description AS description ' .
            'FROM lead_service_mail_links link ' .
            'JOIN leads ' .
            'ON leads.id=link.lead_id ' .
            'WHERE link.lead_id="' . $db->quote($leadId) . '" AND ' .
            'leads.deleted=0 AND link.deleted=0 ';

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

    public function resetRecordIds(array $data) {
        $result = array();
        foreach ($data as $record) {
            $resetRecord = $record;
            $resetRecord['record_id'] = '';
            $result[] = $resetRecord;
        }
        return $result;
    }

}
