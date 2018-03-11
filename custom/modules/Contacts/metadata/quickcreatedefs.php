<?php

$returnModule = 'default';
if (isset($_REQUEST['return_module'])) {
    $returnModule = $_REQUEST['return_module'];
}

$fields = array();

if ($returnModule === 'Accounts') {
    $fields = array( array(
        array(
            'name' => 'accounts_contacts_contact_name',
        ),
        //), array(
        array(
            'name' => 'accounts_contacts_role_enum',
            'label' => 'LBL_ACCOUNTS_CONTACTS_ROLE',
            'displayParams' =>
            array (
                'idName' => 'role',
            ),
        ),
    ) );
} elseif ($returnModule === 'nlfbr_BusinessRelationships') {
    $fields = array( array(
        array(
            'name' => 'nlfbr_businessrelationships_contacts_1_contact_name',
        ),
        //), array(
        array(
            'name' => 'nlfbr_businessrelationships_contacts_1_role_enum',
            'label' => 'LBL_NLFBR_BUSINESSRELATIONSHIPS_CONTACTS_1_ROLE',
            'displayParams' =>
            array (
                'idName' => 'role',
            ),
        ),
    ) );
} elseif ($returnModule === 'nlfwg_WorkingGroups') {
    $fields = array( array(
        array(
            'name' => 'nlfwg_workinggroups_contacts_1_contact_name',
        ),
        //), array(
        array(
            'name' => 'nlfwg_workinggroups_contacts_1_role_enum',
            'label' => 'LBL_NLFWG_WORKINGGROUPS_CONTACTS_1_ROLE',
            'displayParams' =>
            array (
                'idName' => 'role',
            ),
        ),
    ) );
} elseif ($returnModule === 'nlfal_Alliances') {
    $fields = array( array(
        array(
            'name' => 'nlfal_alliances_contacts_1_contact_name',
        ),
        //), array(
        array(
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
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name" id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 
          array (
            'name' => 'last_name',
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
            'name' => 'phone_work',
          ),
          1 => 
          array (
            'name' => 'phone_other',
            'comment' => 'Other phone number for the contact',
            'label' => 'LBL_OTHER_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'email1',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'account_name',
          ),
        ),
        4 => 
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

$subpanelName = 'default';
$includes = array();

if ($returnModule === 'Accounts') {
    $includes = array( 'file' => 'custom/modules/Contacts/roles_accounts.js' );
    $subpanelName = 'Accounts';
} elseif ($returnModule === 'nlfbr_BusinessRelationships') {
    $includes = array( 'file' => 'custom/modules/Contacts/roles_businessrelationships.js' );
    $subpanelName = 'nlfbr_BusinessRelationships';
} elseif ($returnModule === 'nlfwg_WorkingGroups') {
    $includes = array( 'file' => 'custom/modules/Contacts/roles_workinggroups.js' );
    $subpanelName = 'nlfwg_WorkingGroups';
} elseif ($returnModule === 'nlfal_Alliances') {
    $includes = array( 'file' => 'custom/modules/Contacts/roles_alliances.js' );
    $subpanelName = 'nlfal_Alliances';
}


$viewdefs ['Contacts'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">',
          1 => '<input type="hidden" name="case_id" value="{$smarty.request.case_id}">',
          2 => '<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">',
          3 => '<input type="hidden" name="email_id" value="{$smarty.request.email_id}">',
          4 => '<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">',
          5 => '{if !empty($smarty.request.contact_id)}<input type="hidden" name="reports_to_id" value="{$smarty.request.contact_id}">{/if}',
          6 => '{if !empty($smarty.request.contact_name)}<input type="hidden" name="report_to_name" value="{$smarty.request.contact_name}">{/if}',
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'includes' => array($includes),
    ),
    'panels' => 
    array (
      $subpanelName => $fields,
    ),
  ),
);
?>
