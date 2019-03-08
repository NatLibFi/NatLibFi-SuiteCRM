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
			$script = '<a class="email-link" href="javascript:void(0);"' .
                ' onclick="$(document).openComposeViewModal(this);"' .
                ' data-module="" data-record-id="" data-module-name="" data-email-address="">' .
                $app_strings['LBL_EMAIL_COMPOSE'] .
                '</a>';
		} else {
			$script = "<a href='javascript:void(0)' " .
                    "class=\"parent-dropdown-action-handler\" id=\"composeemail_listview_". $loc ."\"".
					"onclick=\"return sListView.use_external_mail_client('{$app_strings['LBL_LISTVIEW_NO_SELECTED']}', '{$_REQUEST['module']}');\">" .
					$app_strings['LBL_EMAIL_COMPOSE'] . '</a>';
        }

        return $script;
    }

}
