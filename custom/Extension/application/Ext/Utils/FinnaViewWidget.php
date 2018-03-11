<?php

require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipFinnaViewHelper.php';

function getBRFinnaViewWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new BusinessRelationshipFinnaViewHelper();

    $prefill = 'false';

    $viewData = 'new Object()';
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    $viewDataArr = array();
    if(!empty($id)) {
        $viewDataArr = $helper->getViewData($id);
    } else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['brFinnaViewWidget'])){
        $widget_id = isset($_REQUEST[$module . '_finna_view_widget_id']) ? $_REQUEST[$module . '_finna_view_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'brFinnaView' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $viewDataArr[] = array(
                // TODO: fix this!
            );
            $key = $module . $widget_id . 'brFinnaView' . ++$count;
        }
    }

    if(!empty($viewDataArr)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $viewData = $json->encode($viewDataArr);

        $prefill = !empty($viewDataArr) ? 'true' : 'false';
    }

    $statusListData = 'new Object()';
    $statusList = $helper->getAvailableStatusList();
    if (!empty($statusList)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $statusListData = $json->encode($statusList);
    }

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['finna_view1']) && isset($vardefs['finna_view1']['required']) && $vardefs['finna_view1']['required']) {
        $required = true;
    }
    $smarty->assign('required', $required);

    $smarty->assign('module', $saveModule);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('prefillViewData', $prefill);
    $smarty->assign('viewData', $viewData);
    $smarty->assign('allViewStatusList', $statusListData);
    $smarty->assign('tabindex', $tabindex);
    $smarty->assign('addDefaultFinnaView', 'false');

    $form = $view;

    $smarty->assign('finnaViewView', $form);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/FinnaViewWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getBRFinnaViewWidgetForDetailView($focus) {
    global $mod_strings, $app_strings, $app_list_strings;

    $smarty = new Sugar_Smarty();
    $helper = new BusinessRelationshipFinnaViewHelper();

    $viewData = $helper->getViewData($focus->id);

    foreach ($viewData as &$record) {
        if (array_key_exists($record['view_status'], $app_list_strings['finnanakyma_status_list'])) {
            $record['view_status'] = $app_list_strings['finnanakyma_status_list'][$record['view_status']]; // TODO: 18n
        }
    }

    $smarty->assign('views', $viewData);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/FinnaViewWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getBRFinnaViewWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getBRFinnaViewWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getBRFinnaViewWidgetForDetailView($focus);
}
