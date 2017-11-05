<?php

require_once 'custom/include/ListView/CustomListViewSmarty.php';

class CustomAlliancesListViewSmarty extends CustomListViewSmarty {

    protected function buildActionsLink($id = 'actions_link', $location = 'top') {
        $actions = parent::buildActionsLink($id, $location);

        foreach ($actions['buttons'] as $index => $button) {
            if (strpos($button, 'massupdate_listview') !== false) {
                unset($actions['buttons'][$index]);
                break;
            }
        }

        return $actions;
    }

}
