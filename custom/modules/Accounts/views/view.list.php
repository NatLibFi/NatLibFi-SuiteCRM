<?php

require_once 'modules/Accounts/views/view.list.php';
require_once 'custom/modules/Accounts/CustomAccountsListViewSmarty.php';

class CustomAccountsViewList extends AccountsViewList
{
    public function preDisplay(){
        echo '<script src="custom/modules/Accounts/contact_role_emails.js"></script>';
        parent::preDisplay();

        $this->lv = new CustomAccountsListViewSmarty();
    }

}
