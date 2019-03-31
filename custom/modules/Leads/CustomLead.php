<?php

require_once 'modules/Leads/Lead.php';
require_once 'modules/Accounts/Account.php';

class CustomLead extends Lead
{
    public function _create_proper_name_field()
    {
        parent::_create_proper_name_field();
    }
}
