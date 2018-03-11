<?php

$dictionary["nlfbr_businessrelationships_finna_views"] = array (
    'table' => 'nlfbr_businessrelationships_finna_views',
    'fields' => array(
        array('name' =>'id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'businessrelationship_id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'view_status', 'type' =>'varchar', 'len'=>'100', 'default'=>'eitietoa'),
        array('name' =>'view_url', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'admin_access', 'type' =>'bool', 'len'=>'1', 'default'=>'0'),
        array('name' =>'description', 'type' =>'text'),
        array('name' =>'date_modified','type' => 'datetime'),
        array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false),
    ),
    'indices' => array(
        array('name' =>'nlfbr_businessrelationships_finna_viewspk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' =>'nlfbr_businessrelationships_finna_views_alt', 'type' =>'alternate_key', 'fields'=>array('businessrelationship_id')),
    ),
);
