<?php

require_once 'include/MVC/View/views/view.list.php';
require_once 'custom/include/ListView/CustomListViewSmarty.php';

class CustomViewList extends ViewList {

    public function preDisplay() {
        parent::preDisplay();

        $this->lv = new CustomListViewSmarty();
    }

}
