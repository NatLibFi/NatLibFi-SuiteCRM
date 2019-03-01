<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');
class nlfal_AlliancesViewEdit extends ViewEdit {

    public $useForSubpanel = true;
    public $useModuleQuickCreateTemplate = true;

    public function display() {
        if ($this->ev->view === 'QuickCreate') {
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
