<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// Mostly copied from include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php
// The only custom part is getting email address not from the module itself but from
// related Contact(s), that are connected to the module through Roles.

require_once 'include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php';
require_once 'custom/include/EmailRecipientProvider.php';

class SugarWidgetSubPanelTopComposeGroupEmailButton extends SugarWidgetSubPanelTopComposeEmailButton
{
	function display($defines, $additionalFormFields = null, $nonbutton = false)
	{
		if((ACLController::moduleSupportsACL($defines['module'])  && !ACLController::checkAccess($defines['module'], 'edit', true) ||
			$defines['module'] == "Activities" & !ACLController::checkAccess("Emails", 'edit', true))){
			$temp = '';
			return $temp;
		}
		
		global $app_strings,$current_user,$sugar_config,$beanList,$beanFiles, $locale;
		$title = $app_strings['LBL_COMPOSE_EMAIL_BUTTON_TITLE'];
		//$accesskey = $app_strings['LBL_COMPOSE_EMAIL_BUTTON_KEY'];
		$value = $app_strings['LBL_COMPOSE_EMAIL_BUTTON_LABEL'];
		$parent_type = $defines['focus']->module_dir;
		$parent_id = $defines['focus']->id;

		//martin Bug 19660
		$userPref = $current_user->getPreference('email_link_type');
		$defaultPref = $sugar_config['email_default_client'];
		if($userPref != '') {
			$client = $userPref;
		} else {
			$client = $defaultPref;
		}
        $bean = $defines['focus'];

		if($client != 'sugar') {
                        $to_addrs = 'foo@TODO.test'; // TODO: add code grabbing email(s) from contact(s)
			$button = "<input class='button' type='button'  value='$value'  id='". $this->getWidgetId() . "'  name='".preg_replace('[ ]', '', $value)."'   title='$title' onclick=\"location.href='mailto:$to_addrs';return false;\" />";
		} else {
            $recipientProvider = new EmailRecipientProvider(DBManagerFactory::getInstance(), $locale);
            $recipientData = $recipientProvider->getRecipientNamesAndAddresses($bean->module_name, [ $bean->id ]);
            $name = '';
            $email = '';
            if (!empty($recipientData)) {
                $name = $recipientData[0]['name'];
                $email = $recipientData[0]['email_address'];
            }

            $button = '<div type="hidden" onclick="$(document).openComposeViewModal(this);" data-module="' .
                $bean->module_name . '" data-record-id="' .
                $bean->id . '" data-module-name="' .
                htmlspecialchars($name) .'" data-email-address="' .
                $email .'">' .
                '<a id="' . $this->getWidgetId() . '">' . $value  . '</a>';
		}
		return $button;
	}
}
