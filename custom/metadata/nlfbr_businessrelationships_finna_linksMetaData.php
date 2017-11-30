<?php

$dictionary["nlfbr_businessrelationships_finna_links"] = array (
    'table' => 'nlfbr_businessrelationships_finna_links',
    'fields' => array(
        array('name' =>'id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'businessrelationship_id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'link_url', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'description', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'date_modified','type' => 'datetime'),
        array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false),
    ),
    'indices' => array(
        array('name' =>'nlfbr_businessrelationships_finna_linkspk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' =>'nlfbr_businessrelationships_finna_links_alt', 'type' =>'alternate_key', 'fields'=>array('businessrelationship_id')),
    ),
);
