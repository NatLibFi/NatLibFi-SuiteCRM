<?php

require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipDataSourceHelper.php';

function getBRDataSourceWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new BusinessRelationshipDataSourceHelper();

    $prefill = 'false';

    $sourceData = 'new Object()';
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    $sourceDataArr = array();
    if(!empty($id)) {
        $sourceDataArr = $helper->getSourceData($id);
    } else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['brDataSourceWidget'])){
        $widget_id = isset($_REQUEST[$module . '_data_source_widget_id']) ? $_REQUEST[$module . '_data_source_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'brDataSource' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $sourceDataArr[] = array(
                // TODO: fix this!
            );
            $key = $module . $widget_id . 'brDataSource' . ++$count;
        }
    }

    if (isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] === 'true') {
        $sourceDataArr = $helper->resetRecordIds($sourceDataArr);
    }

    if(!empty($sourceDataArr)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $sourceData = $json->encode($sourceDataArr);

        $prefill = !empty($sourceDataArr) ? 'true' : 'false';
    }

    $backendSystemData = 'new Object()';
    $backendSystems = $helper->getAvailableBackendSystems();
    if (!empty($backendSystems)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $backendSystemData = $json->encode($backendSystems);
    }

    $harvestingFormatData = 'new Object()';
    $harvestingFormats = $helper->getAvailableHarvestingFormats();
    if (!empty($harvestingFormats)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $harvestingFormatData = $json->encode($harvestingFormats);
    }

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['data_source1']) && isset($vardefs['data_source1']['required']) && $vardefs['data_source1']['required']) {
        $required = true;
    }
    $smarty->assign('required', $required);

    $smarty->assign('module', $saveModule);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('prefillSourceData', $prefill);
    $smarty->assign('sourceData', $sourceData);
    $smarty->assign('backendSystemList', $backendSystemData);
    $smarty->assign('harvestingFormatList', $harvestingFormatData);
    $smarty->assign('tabindex', $tabindex);
    $smarty->assign('addDefaultDataSource', 'false');

    $form = $view;

    $smarty->assign('dataSourceView', $form);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/DataSourceWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getBRDataSourceWidgetForDetailView($focus) {
    global $mod_strings, $app_strings, $app_list_strings;

    $smarty = new Sugar_Smarty();
    $helper = new BusinessRelationshipDataSourceHelper();

    $sourceData = $helper->getSourceData($focus->id);

    foreach ($sourceData as &$record) {
    //    if (array_key_exists($record['view_status'], $app_list_strings['finnanakyma_status_list'])) {
    //        $record['view_status'] = $app_list_strings['finnanakyma_status_list'][$record['view_status']]; // TODO: 18n
    //    }
    }

    $smarty->assign('sources', $sourceData);
    $smarty->assign('systems', $helper->getAvailableBackendSystems());
    $smarty->assign('formats', $helper->getAvailableHarvestingFormats());
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/DataSourceWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getBRDataSourceWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getBRDataSourceWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getBRDataSourceWidgetForDetailView($focus);
}
