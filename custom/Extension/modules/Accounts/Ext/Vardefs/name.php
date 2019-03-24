<?php

$dictionary["Account"]["fields"]['name1'] = array(
  'name' => 'name1',
  'vname' => 'LBL_NAME_TITLE',
  'type' => 'varchar',
  'function' => array(
    'name' => 'getAccountNameWidget',
    'returns' => 'html',
  ),
  'source' => 'non-db',
  'studio' => array('visible' => false),
);
