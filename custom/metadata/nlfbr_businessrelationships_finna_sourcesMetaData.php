<?php

$dictionary["nlfbr_businessrelationships_finna_sources"] = array (
    'table' => 'nlfbr_businessrelationships_finna_sources',
    'fields' => array(
        array('name' =>'id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'businessrelationship_id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'source_name', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'backend_system', 'type' =>'text'),
        array('name' =>'harvesting_format', 'type' =>'text'),
        array('name' =>'contact_email', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'restricted_metadata', 'type' =>'bool', 'len'=>'1', 'default'=>'0'),
        array('name' =>'description', 'type' =>'text'),
        array('name' =>'date_modified','type' => 'datetime'),
        array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false),
    ),
    'indices' => array(
        array('name' =>'nlfbr_businessrelationships_finna_sourcespk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' =>'nlfbr_businessrelationships_finna_sources_alt', 'type' =>'alternate_key', 'fields'=>array('businessrelationship_id')),
    ),
);
