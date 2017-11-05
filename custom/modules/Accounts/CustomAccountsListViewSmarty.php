<?php

require_once('modules/Accounts/AccountsListViewSmarty.php');

// Hack to change order of actions in the manu over the account list

class CustomAccountsListViewSmarty extends AccountsListViewSmarty {

        // NOTE: this is quite fragile. This assumes first action is Delete
        // and the second one is Compose Email, and switches them
	protected function buildActionsLink($id = 'actions_link', $location = 'top') {
		$ret = parent::buildActionsLink($id, $location);

		$replaces = array(
			0 => 1,
		);

		foreach($replaces as $i => $j) {
			$tmp = $ret['buttons'][$j];
			$ret['buttons'][$j] = $ret['buttons'][$i];
			$ret['buttons'][$i] = $tmp;
		}

        $ret['buttons'][] = $this->buildComposeEmailToContactsInRoleLink('account_johtaja', $this->data['pageData']['offsets']['total'], $location);
        $ret['buttons'][] = $this->buildComposeEmailToContactsInRoleLink('account_asiantuntija', $this->data['pageData']['offsets']['total'], $location);

		return $ret;
	}

    /**
     * Based on ListViewDisplay::buildComposedEmailLink
     */
	private function buildComposeEmailToContactsInRoleLink($role, $totalCount, $loc = 'top')
	{
		global $app_strings,$dictionary, $mod_strings;

        if (!is_array($this->seed->field_defs)) {
            return '';
        }

		$userPref = $GLOBALS['current_user']->getPreference('email_link_type');
		$defaultPref = $GLOBALS['sugar_config']['email_default_client'];
		if($userPref != '')
			$client = $userPref;
		else
			$client = $defaultPref;

		if($client !== 'sugar') {
            return '';
        }

			$script = "<a href='javascript:void(0)' " .
                    "id=\"composeemail_" . $role . "_listview_". $loc ."\" ".
					'onclick="return sListView.send_form_for_emails_contact_role(true, \''."Emails".'\', \'index.php?module=Emails&action=Compose&ListView=true&contactRole=\',\'' . $role . '\',\''.$app_strings['LBL_LISTVIEW_NO_SELECTED'].'\', \''.$this->seed->module_dir.'\', \''.$totalCount.'\', \''.$app_strings['LBL_LISTVIEW_LESS_THAN_TEN_SELECT'].'\')">' .
					$mod_strings['LBL_EMAIL_COMPOSE_CONTACT_ROLE_' . $role] . '</a>';

        return $script;
	}

    protected function buildMassUpdateLink($loc = 'top')
    {
        global $app_strings;

        $onClick = "document.getElementById('massupdate_form').style.display = ''; var yLoc = YAHOO.util.Dom.getY('massupdate_form'); window.scroll(0,yLoc);";
        return "<a href='javascript:void(0)' id=\"massupdate_listview_". $loc ."\" onclick=\"$onClick\">{$app_strings['LBL_MASS_UPDATE']}</a>";

    }

}

?>
