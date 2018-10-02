<?php


// Basically copied from modules/Emails/Compose.php
function initFullComposeForCustomCompose($ret)
{
    global $current_user;
    $json = getJSONobj();
    $composeOut = $json->encode($ret);

    //For listview 'Email' call initiated by subpanels, just returned the composePackage data, do not
    //include the entire Emails page
    if (isset($_REQUEST['ajaxCall']) && $_REQUEST['ajaxCall']) {
        echo $composeOut;
    } else {
        //For normal full compose screen
        include('custom/modules/Emails/index.php');
        echo "<script type='text/javascript' language='javascript'>\ncomposePackage = {$composeOut};\n</script>";
    }
}


if (empty($data['listViewExternalClient']) && !isset($data['forQuickCreate'])) {
    if (isset($_REQUEST['ListView'])) {
        require_once 'custom/modules/Emails/CustomEmail.php';

        // NLF custom: pass custom role to be able to send emails to all Account contacts with particular role (ASKI-66)
        $contactRole = '';
        if (isset($_REQUEST['contactRole']) && $_REQUEST['contactRole']) {
            $contactRole = $_REQUEST['contactRole'];
        }

        $ids = explode(",", $_REQUEST['uid']);
        $module = $_REQUEST['action_module'];
        if (isset($_REQUEST['current_post']) && !empty($_REQUEST['current_post'])) {
            $query = json_decode(html_entity_decode($_REQUEST['current_post']), true);

            require_once('include/ListView/ListViewData.php');
            require_once('custom/include/RecordIdListLoader.php');

            $listViewData = new ListViewData();
            $listLoader = new RecordIdListLoader($listViewData);
            $ids = $listLoader->loadRecordIdsMatchingQuery($module, $query);
        }

        $email = new CustomEmail();
        $namePlusEmail = $email->getNamePlusEmailAddressesForCompose($module, $ids, $contactRole);
        $ret = array(
            'to_email_addrs' => $namePlusEmail,
        );

        initFullComposeForCustomCompose($ret);

        exit;
    }
}

require 'modules/Emails/Compose.php';
