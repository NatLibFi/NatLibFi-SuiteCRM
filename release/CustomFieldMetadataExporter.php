<?php

class CustomFieldMetadataExporter {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function export() {
        $result = $this->db->query('SELECT * FROM fields_meta_data WHERE deleted = 0');
        $data = array();
        while($row = $this->db->fetchByAssoc($result)){
            $data[] = $row;
        }
        return $data;
    }

}


