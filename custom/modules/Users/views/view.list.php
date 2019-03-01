<?php

require_once 'modules/Users/views/view.list.php';

class CustomUsersViewList extends UsersViewList
{
    public function preDisplay() {
        parent::preDisplay();

        $this->lv->delete = true;
        $this->lv->email = true;
    }
}
