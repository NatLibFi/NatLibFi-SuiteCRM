<?php

$subpanelName = 'default';
// Defaults to no related module
$relatedModuleField = array();
$roleField = array();

if (isset($_REQUEST['subpanel_name'])) {
    $subpanelName = $_REQUEST['subpanel_name'];
}

if ($subpanelName === 'contacts_roles_accounts') {
  $relatedModuleField = array(
    'name' => 'nlfro_roles_accounts_enum',
    'label' => 'LBL_ACCOUNTS_NLFRO_ROLES_1_FROM_ACCOUNTS_TITLE',
    'displayParams' =>
    array(
      'idName' => 'accounts_nlfro_roles_1accounts_ida',
    ),
  );
  $roleField = array (
    'name' => 'account_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'contacts_roles_working_groups') {
  $relatedModuleField = array(
    'name' => 'nlfro_roles_nlfwg_working_groups_enum',
    'label' => 'LBL_NLFWG_WORKINGGROUPS_NLFRO_ROLES_1_FROM_NLFWG_WORKINGGROUPS_TITLE',
    'displayParams' =>
    array(
      'idName' => 'nlfwg_workinggroups_nlfro_roles_1nlfwg_workinggroups_ida',
    ),
  );
  $roleField = array (
    'name' => 'working_group_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'contacts_roles_business_relationships') {
  $relatedModuleField = array (
    'name' => 'nlfro_roles_nlfbr_businessrelationships_enum',
   // 'name' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
  //  'type' => 'enum',
   // 'function' => array( 'name' => 'getAllActiveAccountsHtml', 'returns' => 'html' ),
//'options' => 'finna_contact_role_list',
//'default' => true,
//    'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_ACCOUNTS_TITLE',
    'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
    'displayParams' =>
    array (
      'idName' => 'nlfbr_busi78f6onships_ida',
     // 'idName' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
//      'field' => array( 'onChange' => 'alert("changed")' ),
//'javascript' => 'onchange=alert("changed");',
    ),
  );
  $roleField = array (
    'name' => 'business_relationship_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'contacts_roles_alliances') {
  $relatedModuleField = array(
    'name' => 'nlfro_roles_nlfal_alliances_enum',
    'label' => 'LBL_NLFAL_ALLIANCES_NLFRO_ROLES_1_FROM_NLFAL_ALLIANCES_TITLE',
    'displayParams' =>
    array(
      'idName' => 'nlfal_alliances_nlfro_roles_1nlfal_alliances_ida',
    ),
  );
  $roleField = array (
    'name' => 'alliance_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}


if ($subpanelName === 'accounts_roles_contacts') {
  $relatedModuleField = array(
    'name' => 'contacts_nlfro_roles_1_name',
  );
  $roleField = array (
    'name' => 'account_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'business_relationships_roles_contacts') {
  $relatedModuleField = array (
    'name' => 'contacts_nlfro_roles_1_name',
  );
  $roleField = array (
    'name' => 'business_relationship_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'working_groups_roles_contacts') {
  $relatedModuleField = array (
    'name' => 'contacts_nlfro_roles_1_name',
  );
  $roleField = array (
    'name' => 'working_group_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}
if ($subpanelName === 'alliances_roles_contacts') {
  $relatedModuleField = array(
    'name' => 'contacts_nlfro_roles_1_name',
  );
  $roleField = array (
    'name' => 'alliance_role',
    'label' => 'LBL_ROLES_ROLE',
    'displayParams' =>
    array(
      'idName' => 'role_c',
    ),
  );
}


$maxColumns = $subpanelName === 'contacts_roles_business_relationships' ? 3 : 2;

$columnWidths = array (
  0 => 
  array (
    'label' => '10',
    'field' => '30',
  ),
  1 => 
  array (
    'label' => '10',
    'field' => '30',
  ),
);
if ($subpanelName === 'contacts_roles_business_relationships') {
  $columnWidths = array (
    0 => 
    array (
      'label' => '10', 
      'field' => '20', 
    ),
    1 => 
    array (
      'label' => '10', 
      'field' => '30', 
    ),
    2 => 
    array (
      'label' => '10', 
      'field' => '20', 
    ),
  );
}

$fields = array();
if ($subpanelName === 'contacts_roles_business_relationships') { 
  $fields[] = array (
   // 'name' => 'nlfro_roles_nlfbr_businessrelationships_enum',
    'name' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
  //  'type' => 'enum',
   // 'function' => array( 'name' => 'getAllActiveAccountsHtml', 'returns' => 'html' ),
//'options' => 'finna_contact_role_list',
//'default' => true,
    'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_ACCOUNTS_TITLE',
//    'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
    'displayParams' =>
    array (
     // 'idName' => 'nlfbr_busi78f6onships_ida',
      //'idName' => 'nlfro_roles_nlfbr_businessrelationships_accounts_enum',
      'idName' => 'businessrelationship_account',
//      'field' => array( 'onChange' => 'alert("changed")' ),
//'javascript' => 'onchange=alert("changed");',
    ),
  );
}

$fields[] = $relatedModuleField;
/*$fields[] = array (
  'name' => 'role_c',
  'studio' => 'visible',
  'label' => 'LBL_ROLES_ROLE',
);*/
$fields[] = $roleField;

$panels = array (
  //'default' => 
  $subpanelName => 
  array (
    0 => $fields,
  ),
);

$module_name = 'nlfro_Roles';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      /*'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SUBPANELSAVE',
          1 => 'SUBPANELCANCEL',
        ),
      ),*/
      'maxColumns' => $maxColumns,
      'widths' => $columnWidths,
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'includes' => array(
         $subpanelName === 'contacts_roles_business_relationships' ? array( 'file' => 'custom/modules/nlfro_Roles/roles_businessrelationships_accounts.js' ) : array(), 
      ),
    ),
    'panels' => $panels,
  ),
);
?>
