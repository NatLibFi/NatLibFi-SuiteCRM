<?php

class AllianceNameHelper {

    public function getNames($allianceId) {
        if (!$allianceId) {
            return array();
        }

        $db = $GLOBALS['db'];

        $query = 'SELECT name_fin_c, name_swe_c, name_eng_c, name_other_c, name_other_lang_c, name_default_lang_c ' .
            'FROM nlfal_alliances_cstm ' .
            'WHERE id_c="' . $db->quote($allianceId) . '"';

        $result = $db->query($query);

        if ($row = $db->fetchByAssoc($result)) {
            return array(
                'name_fin' => $row['name_fin_c'],
                'name_swe' => $row['name_swe_c'],
                'name_eng' => $row['name_eng_c'],
                'name_other' => $row['name_other_c'],
                'other_lang' => $row['name_other_lang_c'],
                'default_lang' => $row['name_default_lang_c'],
            );
        }

        return array();
    }

}
