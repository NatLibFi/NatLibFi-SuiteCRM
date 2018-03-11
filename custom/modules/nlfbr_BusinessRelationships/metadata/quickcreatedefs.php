<?php

$subpanelName = 'default';

//if (isset($_REQUEST['subpanel_name'])) {
//    $subpanelName = $_REQUEST['subpanel_name'];
//}

$returnModule = 'default';
if (isset($_REQUEST['return_module'])) {
    $returnModule = $_REQUEST['return_module'];
}

$fields = array();

if ($returnModule === 'Contacts') {
    $fields = array(
        array(
            array(
                'name' => 'nlfbr_businessrelationships_contacts_1_accounts_enum',
                'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ACCOUNT_TITLE',
                'displayParams' => array( 'idName' => 'businessrelationship_account', ),
            ),
        ),
        array (
            array(
                'name' => 'nlfbr_businessrelationships_contacts_1_businessrelationships_enum',
                'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_BUSINESS_RELATIONSHIP_TITLE',
                'displayParams' => array( 'idName' => 'nlfbr_busic409onships_ida' ),
            ),
        ), array (
            array (
            //'name' => 'nlfro_roles_nlfbr_businessrelationships_enum',
            //'name' => 'accounts_nlfbr_businessrelationships_1_name',
            //'name' => 'nlfbr_businessrelationships_contacts_1_role',
                'name' => 'nlfbr_businessrelationships_contacts_1_role_enum',
            //'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_NLFRO_ROLES_1_FROM_NLFBR_BUSINESSRELATIONSHIPS_TITLE',
                'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
                'displayParams' =>
                array (
                    'idName' => 'role',
                ),
            ),
        /*array(
            'name' => 'contacts_nlfro_roles_1_name',
        ),
        array (
            'name' => 'business_relationship_role',
            'label' => 'LBL_ROLES_ROLE',
            'displayParams' =>
            array(
                'idName' => 'role_c',
            ),
        ),*/
        )
    );
}


if (empty($fields)) {
$fields = array (
  0 => 
  array (
    0 => 
    array (
      'name' => 'accounts_nlfbr_businessrelationships_1_name',
      'label' => 'LBL_ACCOUNTS_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_ACCOUNTS_TITLE_SINGULAR',
    ),
    1 => 
    array (
      'name' => 'nlfse_services_nlfbr_businessrelationships_1_name',
      'label' => 'LBL_NLFSE_SERVICES_NLFBR_BUSINESSRELATIONSHIPS_1_FROM_NLFSE_SERVICES_TITLE_SINGULAR',
    ),
  ),
  1 => 
  array (
    0 => 'assigned_user_name',
  ),
);
}

$columnCount = '2';
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
if ($returnModule === 'Contacts') {
    $columnCount = '3';
    $columnWidths = array(
        array (
          'label' => '10',
          'field' => '20',
        ),
        array (
          'label' => '10',
          'field' => '30',
        ),
        array (
          'label' => '10',
          'field' => '20',
        ),
    );
}

$module_name = 'nlfbr_BusinessRelationships';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => $columnCount,
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
         $returnModule === 'Contacts' ? array( 'file' => 'custom/modules/nlfbr_BusinessRelationships/roles_businessrelationships_accounts.js' ) : array(), 
      ),
    ),
    'panels' => array(
        'default' => $fields,
    )
  ),
);
?>
