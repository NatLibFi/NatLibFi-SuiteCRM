<?php

require_once 'custom/modules/Accounts/AccountNameHelper.php';

function getAccountNameWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new AccountNameHelper();

    $nameData = array();
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    if(!empty($id)) {
        $nameData = $helper->getNames($id);
    }

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

    $templateFile = 'custom/modules/Accounts/tpls/NameWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getAccountNameWidgetForDetailView($focus) {
    global $mod_strings, $app_strings;

    $smarty = new Sugar_Smarty();

    $helper = new AccountNameHelper();

    $nameData = $helper->getNames($focus->id);

    $smarty->assign('name_fin', $nameData['name_fin']);
    $smarty->assign('name_swe', $nameData['name_swe']);
    $smarty->assign('name_eng', $nameData['name_eng']);
    $smarty->assign('name_other', $nameData['name_other']);
    $smarty->assign('name_other_lang', $nameData['other_lang']);
    $smarty->assign('name_default_lang', $nameData['default_lang']);

    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/Accounts/tpls/NameWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getAccountNameWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getAccountNameWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getAccountNameWidgetForDetailView($focus);
}
