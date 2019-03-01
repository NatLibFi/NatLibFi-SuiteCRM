<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

// Mostly copied from include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php
// The only custom part is getting email address not from the module itself but from
// related Contact(s), that are connected to the module through Roles.

require_once 'include/generic/SugarWidgets/SugarWidgetSubPanelTopComposeEmailButton.php';
require_once 'custom/include/GroupEmailHelper.php';

class SugarWidgetSubPanelTopComposeGroupEmailButton extends SugarWidgetSubPanelTopComposeEmailButton
{
	function display($defines, $additionalFormFields = null, $nonbutton = false)
	{
		if((ACLController::moduleSupportsACL($defines['module'])  && !ACLController::checkAccess($defines['module'], 'edit', true) ||
			$defines['module'] == "Activities" & !ACLController::checkAccess("Emails", 'edit', true))){
			$temp = '';
			return $temp;
		}
		
		global $app_strings,$current_user,$sugar_config,$beanList,$beanFiles;
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
		if($client != 'sugar') {
			$bean = $defines['focus'];
                        $to_addrs = 'foo@TODO.test'; // TODO: add code grabbing email(s) from contact(s)
			$button = "<input class='button' type='button'  value='$value'  id='". $this->getWidgetId() . "'  name='".preg_replace('[ ]', '', $value)."'   title='$title' onclick=\"location.href='mailto:$to_addrs';return false;\" />";
		} else {
			//Generate the compose package for the quick create options.
    			$composeData = array("parent_id" => $parent_id, "parent_type"=>$parent_type);
			$emailHelper = new GroupEmailHelper();
			$quickComposeOptions = $emailHelper->generateComposePackageForQuickCreate($composeData, http_build_query($composeData));

			$button = "<input title='$title'  id='". $this->getWidgetId()."'  onclick='SUGAR.quickCompose.init($quickComposeOptions);' class='button' type='submit' name='".preg_replace('[ ]', '', $value)."_button' value='$value' />";
		}
		return $button;
	}
}
