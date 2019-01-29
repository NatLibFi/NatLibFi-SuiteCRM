<?php

require_once 'custom/include/ListView/CustomListViewSmarty.php';

class CustomAlliancesListViewSmarty extends CustomListViewSmarty {

    protected function buildActionsLink($id = 'actions_link', $location = 'top') {
        $actions = parent::buildActionsLink($id, $location);

        foreach ($actions['buttons'] as $index => $button) {
            if (strpos($button, 'massupdate_listview') !== false) {
                unset($actions['buttons'][$index]);
                break;
            }
        }

        return $actions;
    }

    protected function buildComposeEmailLink($totalCount, $loc = 'top') {
        global $app_strings;

		$userPref = $GLOBALS['current_user']->getPreference('email_link_type');
		$defaultPref = $GLOBALS['sugar_config']['email_default_client'];
		if ($userPref != '') {
			$client = $userPref;
		} else {
			$client = $defaultPref;
        }

		if ($client == 'sugar') {
			$script = "<a href='javascript:void(0)' " .
                    "class=\"parent-dropdown-action-handler\" id=\"composeemail_listview_". $loc ."\"".
					'onclick="return sListView.send_form_for_emails(true, \''."Emails".'\', \'index.php?module=Emails&action=Compose&ListView=true\',\''.$app_strings['LBL_LISTVIEW_NO_SELECTED'].'\', \''.$this->seed->module_dir.'\', \''.$totalCount.'\', \''.$app_strings['LBL_LISTVIEW_LESS_THAN_TEN_SELECT'].'\')">' .
					$app_strings['LBL_EMAIL_COMPOSE'] . '</a>';
		} else {
			$script = "<a href='javascript:void(0)' " .
                    "class=\"parent-dropdown-action-handler\" id=\"composeemail_listview_". $loc ."\"".
					"onclick=\"return sListView.use_external_mail_client('{$app_strings['LBL_LISTVIEW_NO_SELECTED']}', '{$_REQUEST['module']}');\">" .
					$app_strings['LBL_EMAIL_COMPOSE'] . '</a>';
        }

        return $script;
    }

}
