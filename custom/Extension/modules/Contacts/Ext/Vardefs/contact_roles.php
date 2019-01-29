<?php

$dictionary['Contact']["fields"]["contact_roles_all"] = array (
  'name' => 'contact_roles_all',
  'type' => 'enum',
  'function' => 'getAllContactRoles',
  //'relationship' => 'nlfse_services_accounts_1',
  'source' => 'non-db',
  //'module' => 'nlfse_Services',
  //'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_CONTACT_ROLES_ALL',
  //'id_name' => 'nlfse_services_accounts_enum',
);

$dictionary['Contact']["fields"]["contact_roles_all_new"] = array (
  'name' => 'contact_roles_all_new',
  'type' => 'enum',
  'function' => 'getAllContactRoles',
  //'relationship' => 'nlfse_services_accounts_1',
  'source' => 'non-db',
  //'module' => 'nlfse_Services',
  //'bean_name' => 'nlfse_Services',
  'vname' => 'LBL_CONTACT_ROLES_ALL',
  //'id_name' => 'nlfse_services_accounts_enum',
);

$dictionary['Contact']["fields"]["contact_all_role_names"] = array (
  'name' => 'contact_all_role_names',
  'type' => 'varchar',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACT_ALL_ROLE_NAMES',
  'studio' => array('listview' => true, 'editview' => false, 'detailview' => false, 'searchview' => false),
  'sortable' => false,
);


