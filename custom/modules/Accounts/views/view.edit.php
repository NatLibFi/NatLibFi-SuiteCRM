<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.edit.php');
class CustomAccountsViewEdit extends AccountsViewEdit {

    public function display() {
        if ($this->ev->view === 'QuickCreate') {
            if (isset($this->ev->defs['panels'])) {
                $subpanelName = reset(array_keys($this->ev->defs['panels']));
                if ($subpanelName && $subpanelName !== 'default') {
                    // This order in form name (subpanel + module) is a hack due to Javascript function
                    // inlineSave having hardcoded assumption on the form name
                    $this->ev->formName = 'form_SubpanelQuickCreate_' . $subpanelName . '_' . $this->ev->module;
                }
            }

            $this->ev->defs['templateMeta']['form']['headerTpl'] = 'custom/include/EditView/tpls/header.tpl';
            $this->ev->defs['templateMeta']['form']['footerTpl'] = 'custom/include/EditView/tpls/footer.tpl';

            $this->ev->process();
            $this->ev->defs['templateMeta']['form']['buttons'] = array('SUBPANELADDRELATIONSHIP', 'SUBPANELCANCEL'); // code to remove full form button from quick create view
            echo $this->ev->display($this->showTitle);
            return;
        }

        parent::display();
    
    }

}
