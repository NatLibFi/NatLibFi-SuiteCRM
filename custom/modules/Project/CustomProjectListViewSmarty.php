<?php

require_once('modules/Project/ProjectListViewSmarty.php');

class CustomProjectListViewSmarty extends ProjectListViewSmarty {

    protected function buildMassUpdateLink($loc = 'top')
    {
        global $app_strings;

        $onClick = "document.getElementById('massupdate_form').style.display = ''; var yLoc = YAHOO.util.Dom.getY('massupdate_form'); window.scroll(0,yLoc);";
        return "<a href='javascript:void(0)' id=\"massupdate_listview_". $loc ."\" onclick=\"$onClick\">{$app_strings['LBL_MASS_UPDATE']}</a>";

    }

}

?>