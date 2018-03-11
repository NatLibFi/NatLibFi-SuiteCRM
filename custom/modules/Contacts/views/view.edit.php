<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Contacts/views/view.edit.php';

class CustomContactsViewEdit extends ContactsViewEdit {
    public function display() {
        if ($this->ev->view === 'QuickCreate') { // TODO: maybe some more conditions should be checked? Isn't this breaking some Contact quick create functionality for some other module?
            // TODO: explain
// Setting a custom form name. This is needed as there are different "new" Contact
    // form used on different "Contact role" subpanels. As SuiteCRM caches the HTML
    // of the HTML form using its ID, each of modules using its own Contact rol subpanel
    // must used different ID. Otherwise e.g. the form in the subpanel on Account view
    // shows working group-related form.
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
