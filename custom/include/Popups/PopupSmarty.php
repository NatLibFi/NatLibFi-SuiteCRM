<?php

require_once 'include/Popups/PopupSmarty.php';
require_once 'custom/include/SearchForm/ContactRoleAwareSearchForm.php';

class CustomPopupSmarty extends PopupSmarty {

	public function __construct($seed, $module){
		parent::__construct($seed, $module);
        $this->searchForm = new ContactRoleAwareSearchForm($seed, $module);
	}
}
