<?php

require_once('modules/Leads/LeadsListViewSmarty.php');

class CustomLeadsListViewSmarty extends LeadsListViewSmarty {

    protected function buildMassUpdateLink($loc = 'top')
    {
        global $app_strings;

        $onClick = "document.getElementById('massupdate_form').style.display = ''; var yLoc = YAHOO.util.Dom.getY('massupdate_form'); window.scroll(0,yLoc);";
        return "<a href='javascript:void(0)' id=\"massupdate_listview_". $loc ."\" onclick=\"$onClick\">{$app_strings['LBL_MASS_UPDATE']}</a>";

    }

    // Custom implementation, includes number of item selected in other pages of the list view, instead of always showing zero initially
    function buildSelectLink($id = 'select_link', $total=0, $pageTotal=0, $location="top") {
        $linkData = parent::buildSelectLink($id, $total, $pageTotal, $location);

        $uids = array();
        if (isset($_REQUEST['uid'])) {
            $uids = explode(',', $_REQUEST['uid']);
        }
        $titleButton = '<label class="hidden glyphicon bootstrap-checkbox glyphicon-unchecked"></label>' .
            '<input title="' . $app_strings['LBL_SELECT_ALL_TITLE'] . '" ' .
            'type="checkbox" class="bootstrap-checkbox-hidden checkbox massall" name="massall" id="massall_"' . $location . '" ' .
            'value=" onclick="sListView.check_all(document.MassUpdate, \'mass[]\', this.checked);" />' .
            $this->buildSelectedObjectsSpan(true, count($uids)) . 
            '<a id="' . $id . '" href="javascript: void(0);"></a>';

        $linkData['buttons'][0] = $titleButton;
        return $linkData;
    }

}

?>
