<?php

require_once 'modules/Project/views/view.list.php';
require_once 'custom/modules/Project/CustomProjectListViewSmarty.php';

class CustomProjectViewList extends ProjectViewList
{
    public function preDisplay(){
        parent::preDisplay();

        $this->lv = new CustomProjectListViewSmarty();
    }

}
