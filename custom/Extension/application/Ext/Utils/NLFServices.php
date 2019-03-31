<?php

function getActiveServices()
{
    $query = 'SELECT id, name FROM nlfse_services WHERE deleted=0 ORDER BY name ASC';
    $db = DBManagerFactory::getInstance();
    $result = $db->query($query);

    $list = array();
    while ($row = $db->fetchByAssoc($result)) {
        $list[$row['id']] = $row['name'];
    }

    return $list;
}
