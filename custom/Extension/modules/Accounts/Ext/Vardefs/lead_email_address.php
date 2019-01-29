<?php

$dictionary["Account"]["fields"]["lead_email_address"] = array (
  'name' => 'lead_email_address',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getLeadAccountEmailAddressWidget',
    'returns' => 'html',
  ),
  'vname' => 'LBL_LEAD_EMAIL_ADDRESS',
  'group' => 'lead_email',
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
