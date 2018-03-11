<?php

require_once 'custom/modules/nlfbr_BusinessRelationships/BusinessRelationshipContractHelper.php';

function getBRContractWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $mod_strings, $dictionary, $beanList, $timedate, $current_user;

    $helper = new BusinessRelationshipContractHelper();

    $prefill = 'false';

    $contractData = 'new Object()';
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    $contractDataArr = array();
    if(!empty($id)) {
        $contractDataArr = $helper->getContractData($id);
    } else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['brContractWidget'])){
        $widget_id = isset($_REQUEST[$module . '_contract_widget_id']) ? $_REQUEST[$module . '_contract_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'brContract' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $contractDataArr[] = array(
                // TODO: fix this!
                //'contract_name' => $name,
                /*'primary_address'=>isset($_REQUEST['emailAddressPrimaryFlag']) && $_REQUEST['emailAddressPrimaryFlag'] == $key,
                'invalid_email'=>isset($_REQUEST['emailAddressInvalidFlag']) && in_array($key, $_REQUEST['emailAddressInvalidFlag']),
                'opt_out'=>isset($_REQUEST['emailAddressOptOutFlag']) && in_array($key, $_REQUEST['emailAddressOptOutFlag']),
                'reply_to_address'=>false*/
            );
            $key = $module . $widget_id . 'brContract' . ++$count;
        }
    }

    if(!empty($contractDataArr)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $contractData = $json->encode(array_reverse($contractDataArr));

        $prefill = !empty($contractDataArr) ? 'true' : 'false';
    }

    $serviceId = null;
    if (isset($_REQUEST['nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida']) && !empty($_REQUEST['nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida'])) {
        $serviceId = 'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida';
    } elseif (!empty($id)) {
        require_once 'modules/nlfbr_BusinessRelationships/nlfbr_BusinessRelationships.php';

        $brBean = new nlfbr_BusinessRelationships();
        $brBean->retrieve($id);
        if ($brBean && isset($brBean->{'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida'}) && !empty($brBean->{'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida'})) {
            $serviceId = $brBean->{'nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida'};
        }
    }

    $allContractData = 'new Object()';
    $allContracts = $helper->getContractList($serviceId);
    if (!empty($allContracts)) {
        $json = new JSON(JSON_LOOSE_TYPE);
        $allContractData = $json->encode($allContracts);
    }

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['contract1']) && isset($vardefs['contract1']['required']) && $vardefs['contract1']['required']) {
        $required = true;
    }
    $smarty->assign('required', $required);

    $smarty->assign('module', $saveModule);
    //$this->smarty->assign('index', $this->index);
    //$this->smarty->assign('app_strings', $app_strings);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('prefillContractData', $prefill);
    $smarty->assign('contractData', $contractData);
    $smarty->assign('allContractData', $allContractData);
    $smarty->assign('tabindex', $tabindex);
    $smarty->assign('addDefaultContract', 'true');

    // Based on modules/Calendar/CalendarDisplay.php
    $smarty->assign('calendarFormat', $timedate->get_cal_date_format());
    $smarty->assign('calendarFdow', $current_user->get_first_day_of_week());

    //$smarty->assign('newRowData', $accountDataHelper->getRelateHtmlDataForNewRow());

    $form = $view;

    //determine if this should be a quickcreate form, or a quick create form under subpanels
    /*if ($this->view == "QuickCreate"){
        // Fixed #1120 - fixed email validation for: Accounts -> Contacts subpanel -> Select -> Create Contact -> Save.
        // If email is required it should highlight this field and show an error message.
        // It didnt because the the form was named form_DCSubpanelQuickCreate_Contacts instead of expected form_SubpanelQuickCreate_Contacts
        if($this->object_name = 'EmailAddress' && $saveModule == 'Contacts') {
            $form = 'form_'.$this->view .'_'.$module;
        } else {
            $form = 'form_DC'.$this->view .'_'.$module;
        }
        if(isset($_REQUEST['action']) && $_REQUEST['action']=='SubpanelCreates' ||  $_REQUEST['action']=='SubpanelEdits'){
            $form = 'form_Subpanel'.$this->view .'_'.$module;
        }
    }*/

    $smarty->assign('contractView', $form);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/ContractsWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
    return '';
}

function getBRContractWidgetForDetailView($focus) {
    global $mod_strings, $app_strings;

    $smarty = new Sugar_Smarty();
    $helper = new BusinessRelationshipContractHelper();

    $contractData = $helper->getContractData($focus->id);

    $smarty->assign('contracts', $contractData);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/nlfbr_BusinessRelationships/tpls/ContractsWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getBRContractWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') {
        return getBRContractWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getBRContractWidgetForDetailView($focus);
}
