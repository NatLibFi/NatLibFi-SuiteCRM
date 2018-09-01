<?php

class UserPreferenceUpdater {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function updateSetting($settingName, $value) {
        $result = $this->db->query('SELECT id, assigned_user_id, contents FROM user_preferences WHERE category="global" AND deleted = 0');

        $updateData = array();
        while($row = $this->db->fetchByAssoc($result)){
            if (!$row['contents']) {
                continue;
            }

            $preferences = unserialize(base64_decode($row['contents']));


            if (!array_key_exists($settingName, $preferences) || $preferences[$settingName] !== $value) {
                $preferences[$settingName] = $value;
                $updateData[] = array(
                    'id' => $row['id'],
                    'contents' => base64_encode(serialize($preferences)),
                );
            }
        }

        if (empty($updateData)) {
            return;
        }

        foreach ($updateData as $data) {
            $updateQuery = 'UPDATE user_preferences ' .
                'SET contents="' . $this->db->quote($data['contents']) . '" ' .
                'WHERE id="' . $this->db->quote($data['id']) . '"';
            $result = $this->db->query($updateQuery);
        }
    }

}
