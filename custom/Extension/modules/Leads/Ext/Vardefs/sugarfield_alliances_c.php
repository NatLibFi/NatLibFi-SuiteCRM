<?php
 // created: 2017-12-19 00:02:10
$dictionary['Lead']['fields']['alliances_c']['inline_edit']='1';
$dictionary['Lead']['fields']['alliances_c']['labelValue']='Asiakassuhteessa yhteenliittymän jäsenenä';

unset($dictionary['Lead']['fields']['alliances_c']['options']);
$dictionary['Lead']['fields']['alliances_c']['function'] = 'getAllActiveAlliances';
$dictionary['Lead']['fields']['alliances_c']['linkModule'] = 'nlfal_Alliances';
