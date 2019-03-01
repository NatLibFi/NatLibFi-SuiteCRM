<?php

$subpanelName = 'default';

$returnModule = 'default';
if (isset($_REQUEST['return_module'])) {
    $returnModule = $_REQUEST['return_module'];
}

$fields = array();

if ($returnModule === 'Contacts') {
    $fields = array( array(
        array(
            'name' => 'nlfwg_workinggroups_contacts_1_workinggroup_enum',
            'label' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_WORKING_GROUP_TITLE',
            'displayParams' => array( 'idName' => 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida' ),
        ),
       /* ), array(*/ array(
            'name' => 'nlfwg_workinggroups_contacts_1_role_enum',
            'label' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
            'displayParams' =>
            array (
                'idName' => 'role',
            ),
        ),
    ) );
}

if (empty($fields)) {
  $fields = array (
     0 => 
     array (
       0 => 'name',
       1 => 'assigned_user_name',
     ),
  );
}

$module_name = 'nlfwg_WorkingGroups';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
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
      ),
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
         $returnModule === 'Contacts' ? array( 'file' => 'custom/modules/nlfwg_WorkingGroups/roles_workinggroups.js' ) : array(), 
      ),
    ),
    'panels' => array(
        'default' => $fields,
    )
  ),
);
