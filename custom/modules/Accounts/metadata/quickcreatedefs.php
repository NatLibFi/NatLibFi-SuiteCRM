<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$returnModule = 'default';
if (isset($_REQUEST['return_module'])) {
    $returnModule = $_REQUEST['return_module'];
}

$fields = array();

if ($returnModule === 'Contacts') {
    $fields = array( array(
        array(
            'name' => 'accounts_contacts_account_enum',
            'label' => 'LBL_ACCOUNTS_CONTACTS_ACCOUNT_TITLE',
            'displayParams' => array( 'idName' => 'account_id' ),
        ),
        /*), array(*/ array(
            'name' => 'accounts_contacts_role_enum',
            'label' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
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
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
          ),
          1 => 
          array (
            'name' => 'phone_office',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'industry',
          ),
          1 => 
          array (
            'name' => 'account_type',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
          ),
        ),
      );
}

$includes = array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      );

if ($returnModule === 'Contacts') {
    $includes[] = array( 'file' => 'custom/modules/Accounts/roles_accounts.js' );
}

$viewdefs ['Accounts'] =
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'includes' => $includes,
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => $fields,
    ),
  ),
);
?>
