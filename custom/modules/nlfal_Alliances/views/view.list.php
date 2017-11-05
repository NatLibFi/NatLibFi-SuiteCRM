<?php

require_once 'custom/include/MVC/View/views/view.list.php';
require_once 'custom/modules/nlfal_Alliances/CustomAlliancesListViewSmarty.php';

class nlfal_AlliancesViewList extends CustomViewList {

    public function preDisplay() {
        parent::preDisplay();

        $this->lv = new CustomAlliancesListViewSmarty();
    }

}
