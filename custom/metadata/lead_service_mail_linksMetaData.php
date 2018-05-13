<?php

$dictionary["lead_service_mail_links"] = array (
    'table' => 'lead_service_mail_links',
    'fields' => array(
        array('name' =>'id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'lead_id', 'type' =>'varchar', 'len'=>'36'),
        array('name' =>'link_url', 'type' =>'varchar', 'len'=>'255'),
        array('name' =>'description', 'type' =>'text'),
        array('name' =>'date_modified','type' => 'datetime'),
        array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'default'=>'0', 'required'=>false),
    ),
    'indices' => array(
        array('name' =>'lead_service_mail_linkspk', 'type' =>'primary', 'fields'=>array('id')),
        array('name' =>'lead_service_mail_links_alt', 'type' =>'alternate_key', 'fields'=>array('lead_id')),
    ),
);
