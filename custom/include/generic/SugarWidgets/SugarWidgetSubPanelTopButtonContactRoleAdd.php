<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreate.php';
class SugarWidgetSubPanelTopButtonContactRoleAdd extends SugarWidgetSubPanelTopButtonQuickCreate
{
    function display($defines, $additionalFormFields = null, $nonbutton = false)
    {
        //This is added because it fatals due to $this->module being an instance of LayoutManager istead of string
        if (!is_string($this->module) && isset($defines['module'])) {
            $this->module = $defines['module'];
        }
        $this->title = 'LBL_CONTACT_ROLE_ADD_BUTTON_TITLE';
        $this->form_value = translate('LBL_CONTACT_ROLE_ADD_BUTTON_TITLE');

        return parent::display($defines, $additionalFormFields, $nonbutton);
    }
}
