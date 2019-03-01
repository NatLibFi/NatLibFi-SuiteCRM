<?php

require_once 'custom/modules/Leads/ServiceMailLinkHelper.php';

function getLeadServiceMailLinkWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new ServiceMailLinkHelper();

    $prefill = 'false';

    $linkData = 'new Object()';
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    $linkDataArr = array();
    if(!empty($id)) {
        $linkDataArr = $helper->getLinkData($id);
    } else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['serviceMailLinkWidget'])){
        $widget_id = isset($_REQUEST[$module . '_service_mail_link_widget_id']) ? $_REQUEST[$module . '_service_mail_link_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'serviceMailLink' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $linkDataArr[] = array(
                // TODO: fix this!
            );
            $key = $module . $widget_id . 'serviceMailLink' . ++$count;
        }
    }

    if (isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] === 'true') {
        $linkDataArr = $helper->resetRecordIds($linkDataArr);
    }

    if(!empty($linkDataArr)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $linkData = $json->encode($linkDataArr);

        $prefill = !empty($linkDataArr) ? 'true' : 'false';
    }

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['service_mail_link1']) && isset($vardefs['service_mail_link1']['required']) && $vardefs['service_mail_link1']['required']) {
        $required = true;
    }
    $smarty->assign('required', $required);

    $smarty->assign('module', $saveModule);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('prefillLinkData', $prefill);
    $smarty->assign('linkData', $linkData);
    $smarty->assign('tabindex', $tabindex);
    $smarty->assign('addDefaultServiceMailLink', 'false');

    $form = $view;

    $smarty->assign('serviceMailLinkView', $form);

    $templateFile = 'custom/modules/Leads/tpls/ServiceMailLinkWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getLeadServiceMailLinkWidgetForDetailView($focus) {
    global $mod_strings, $app_strings, $app_list_strings;

    $smarty = new Sugar_Smarty();
    $helper = new ServiceMailLinkHelper();

    $linkData = $helper->getLinkData($focus->id);

    $smarty->assign('links', $linkData);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/Leads/tpls/ServiceMailLinkWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getLeadServiceMailLinkWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getLeadServiceMailLinkWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getLeadServiceMailLinkWidgetForDetailView($focus);
}
