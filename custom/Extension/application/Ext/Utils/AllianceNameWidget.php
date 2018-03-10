<?php

require_once 'custom/modules/nlfal_Alliances/AllianceNameHelper.php';

function getAllianceNameWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new AllianceNameHelper();

    $nameData = array();
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    if(!empty($id)) {
        $nameData = $helper->getNames($id);
    }/* else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['brContractWidget'])){
        $widget_id = isset($_REQUEST[$module . '_contract_widget_id']) ? $_REQUEST[$module . '_contract_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'brContract' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $contractDataArr[] = array(
                // TODO: fix this!
                //'contract_name' => $name,
            );
            $key = $module . $widget_id . 'brContract' . ++$count;
        }
    }*/

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['name1']) && isset($vardefs['name1']['required']) && $vardefs['name1']['required']) {
        $required = true;
    }
    $smarty->assign('required', $required);

    $smarty->assign('mod_strings', $mod_strings);

    $smarty->assign('name_fin', $nameData['name_fin']);
    $smarty->assign('name_swe', $nameData['name_swe']);
    $smarty->assign('name_eng', $nameData['name_eng']);
    $smarty->assign('name_other', $nameData['name_other']);
    $smarty->assign('name_other_lang', $nameData['other_lang']);
    $smarty->assign('name_default_lang', $nameData['default_lang']);

    $templateFile = 'custom/modules/nlfal_Alliances/tpls/NameWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getAllianceNameWidgetForDetailView($focus) {
    global $mod_strings, $app_strings;

    $smarty = new Sugar_Smarty();

    $helper = new AllianceNameHelper();

    $nameData = $helper->getNames($focus->id);

    $smarty->assign('name_fin', $nameData['name_fin']);
    $smarty->assign('name_swe', $nameData['name_swe']);
    $smarty->assign('name_eng', $nameData['name_eng']);
    $smarty->assign('name_other', $nameData['name_other']);
    $smarty->assign('name_other_lang', $nameData['other_lang']);
    $smarty->assign('name_default_lang', $nameData['default_lang']);

    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/nlfal_Alliances/tpls/NameWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getAllianceNameWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getAllianceNameWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getAllianceNameWidgetForDetailView($focus);
}
