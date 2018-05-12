<?php

$dictionary['Lead']['fields']['account_email'] = array(
    'name' => 'account_email',
    'vname' => 'LBL_ACCOUNT_EMAIL_ADDRESS',
    'type' => 'varchar',
    'function' => array(
        'name' => 'getLeadAccountEmailAddressWidget',
        'returns' => 'html',
    ),
    'source' => 'non-db',
    'group' => 'account_email',
    'merge_filter' => 'enabled',
    'studio' => array('editview' => true, 'searchview' => false, 'popupsearch' => false),
    'full_text_search' => array('boost' => 3, 'analyzer' => 'whitespace'),
);
