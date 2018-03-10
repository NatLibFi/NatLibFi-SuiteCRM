<?php

require_once 'modules/Leads/views/view.list.php';
require_once 'custom/modules/Leads/CustomLeadsListViewSmarty.php';

class CustomLeadsViewList extends LeadsViewList
{
    public function preDisplay(){
        parent::preDisplay();

        $this->lv = new CustomLeadsListViewSmarty();
    }

}
