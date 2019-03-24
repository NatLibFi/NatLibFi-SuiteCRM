<?php

require_once 'modules/Leads/Lead.php';
require_once 'modules/Accounts/Account.php';

class CustomLead extends Lead
{
    public function _create_proper_name_field()
    {
        parent::_create_proper_name_field();

        /*if (isset($this->accounts_leads_1_name) && $this->accounts_leads_1_name) {
            $this->name = $this->accounts_leads_1_name;
            $this->full_name = $this->accounts_leads_1_name;
        } elseif ($this->account_name) {
            $this->name = $this->account_name;
            $this->full_name = $this->account_name;
        }*/
        $GLOBALS['log']->fatal('name: ' . $this->name);
    }
}
