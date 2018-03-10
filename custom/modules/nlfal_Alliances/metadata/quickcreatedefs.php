<?php

$returnModule = 'default';
if (isset($_REQUEST['return_module'])) {
    $returnModule = $_REQUEST['return_module'];
}

$fields = array();

if ($returnModule === 'Contacts') {
    $fields = array( array(
        array(
            'name' => 'nlfal_alliances_contacts_1_alliance_enum',
            'label' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ALLIANCE_TITLE',
            'displayParams' => array( 'idName' => 'nlfal_alliances_contacts_1nlfal_alliances_ida' ),
        ),
        /*), array(*/ array(
            'name' => 'nlfal_alliances_contacts_1_role_enum',
            'label' => 'LBL_NLFAL_ALLIANCES_CONTACTS_1_ROLE',
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
          1 => 
          array (
            'name' => 'status_c',
            'label' => 'LBL_STATUS',
          ),
        ),
        1 => 
        array (
          1 => 
          array (
            'name' => 'sektorit_c',
            'label' => 'LBL_SEKTORIT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      );
}

$module_name = 'nlfal_Alliances';
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
         $returnModule === 'Contacts' ? array( 'file' => 'custom/modules/nlfal_Alliances/roles_alliances.js' ) : array(),
      ),
    ),
    'panels' => 
    array (
      'default' => $fields,
    ),
  ),
);
?>
