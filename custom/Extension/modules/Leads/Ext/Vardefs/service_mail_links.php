<?php

$dictionary["Lead"]["fields"]['service_mail_link1'] = array(
  'name' => 'service_mail_link1',
  'vname' => 'LBL_SERVICE_MAIL_LINK_TITLE',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getLeadServiceMailLinkWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);

// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Lead"]["fields"]['service_mail_link'] = array(
  'name' => 'service_mail_link',
  'vname' => 'LBL_SERVICE_MAIL_LINK_URL_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
// This field is only defined to have a "name" rendered properly in the Audit/Change log popup view
$dictionary["Lead"]["fields"]['service_mail_link_description'] = array(
  'name' => 'service_mail_link_description',
  'vname' => 'LBL_SERVICE_MAIL_LINK_DESCRIPTION_TITLE',
  'type' => 'varchar',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
