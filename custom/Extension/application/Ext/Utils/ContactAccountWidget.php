<?php

require_once("include/JSON.php");

require_once 'custom/modules/Contacts/ContactAccountHelper.php';

function getContactAccountWidgetForEditView($id, $module, $view, $tabindex='0') {
    $smarty = new Sugar_Smarty();

    global $app_strings, $dictionary, $beanList;

    $accountDataHelper = new ContactAccountHelper();

    $prefill = 'false';

    $accountData = 'new Object()';
    $passedModule = $module;
    $saveModule = $module;
    if(isset($_POST['is_converted']) && $_POST['is_converted']==true){
        $id=$_POST['return_id'];
        $module=$_POST['return_module'];
    }
    $accountDataArr = array();
    if(!empty($id)) {
        $accountDataArr = $accountDataHelper->getAccountDataForContact($id);
        //When coming from convert leads, sometimes module is Contacts while the id is for a lead.
        //if (empty($accountDataArr) && $module == "Contacts")
        //    $accountDataArr = $this->getAddressesByGUID($id, "Leads");
    } else if(isset($_REQUEST['full_form']) && !empty($_REQUEST['contactAccountWidget'])){
        $widget_id = isset($_REQUEST[$module . '_account_widget_id']) ? $_REQUEST[$module . '_account_widget_id'] : '0';
        $count = 0;
        $key = $module . $widget_id . 'contactAccount' . $count;
        while(isset($_REQUEST[$key])) {
            $name = $_REQUEST[$key];
            $accountDataArr[] = array(
                'account_name' => $name,
                /*'primary_address'=>isset($_REQUEST['emailAddressPrimaryFlag']) && $_REQUEST['emailAddressPrimaryFlag'] == $key,
                'invalid_email'=>isset($_REQUEST['emailAddressInvalidFlag']) && in_array($key, $_REQUEST['emailAddressInvalidFlag']),
                'opt_out'=>isset($_REQUEST['emailAddressOptOutFlag']) && in_array($key, $_REQUEST['emailAddressOptOutFlag']),
                'reply_to_address'=>false*/
            );
            $key = $module . $widget_id . 'contactAccount' . ++$count;
        } //while
    }

    if(!empty($accountDataArr)) {
        $accountDataHelper->addRelateHtmlToAccountData($accountDataArr);

        $json = new JSON(JSON_LOOSE_TYPE);
        $accountData = $json->encode($accountDataArr);

        $prefill = !empty($accountDataArr) ? 'true' : 'false';
    }

    $required = false;
    $vardefs = $dictionary[$beanList[$passedModule]]['fields'];
    if (!empty($vardefs['account1']) && isset($vardefs['account1']['required']) && $vardefs['account1']['required'])
        $required = true;
    $smarty->assign('required', $required);

    $smarty->assign('module', $saveModule);
    //$this->smarty->assign('index', $this->index);
    //$this->smarty->assign('app_strings', $app_strings);
    $smarty->assign('prefillAccountData', $prefill);
    $smarty->assign('accountData', $accountData);
    $smarty->assign('tabindex', $tabindex);
    $smarty->assign('addDefaultAccount', 'true');

    $smarty->assign('newRowData', $accountDataHelper->getRelateHtmlDataForNewRow());

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

    $smarty->assign('accountView', $form);

    $templateFile = 'custom/modules/Contacts/tpls/AccountsWidgetEditView.tpl';

    return $smarty->fetch($templateFile);
}

function getContactAccountWidgetForDetailView($focus) {
    global $mod_strings, $app_strings;

    $smarty = new Sugar_Smarty();
    $helper = new ContactAccountHelper();

    $accountData = $helper->getAccountDataForContact($focus->id);

    $smarty->assign('accounts', $accountData);
    $smarty->assign('mod_strings', $mod_strings);
    $smarty->assign('app_strings', $app_strings);

    $templateFile = 'custom/modules/Contacts/tpls/AccountsWidgetDetailView.tpl';

    return $smarty->fetch($templateFile);
}

function getContactAccountWidget($focus, $field, $value, $view) {
    if ($view === 'EditView' || $view === 'QuickCreate') { // TODO: convert lead too?
        return getContactAccountWidgetForEditView($focus->id, $focus->module_name, $view);
    }

    return getContactAccountWidgetForDetailView($focus);
}
