<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.edit.php');
class nlfro_RolesViewEdit extends ViewEdit {

    public $useForSubpanel = true;
    public $useModuleQuickCreateTemplate = true;

public function display() {
//$GLOBALS['log']->fatal('ustom edit');
//$GLOBALS['log']->fatal('module: ' . $this->ev->module);
//$GLOBALS['log']->fatal('defs: ' . print_r($this->ev->defs, true));
//$GLOBALS['log']->fatal('defs keys: ' . print_r(array_keys($this->ev->defs), true));
//parent::display();
//$this->ev->formName = 'FOO';
//$GLOBALS['log']->fatal('things: ' . print_r(get_object_vars($this), true));

// Set custom name of the form when in QuickCreate mode, so each
// role-type subpanel uses its own name (important for template cache).
if ($this->ev->view === 'QuickCreate') {
    if (isset($this->ev->defs['panels'])) {
//$GLOBALS['log']->fatal('panels: ' . print_r($this->ev->defs['panels'], true));
        $subpanelName = reset(array_keys($this->ev->defs['panels']));
        if ($subpanelName) {
            //$this->ev->formName .= '_' . $subpanelName;
            // This order in form name (subpanel + module) is a hack due to Javascript function
            // inlineSave having hardcoded assumption on the form name
            $this->ev->formName = 'form_SubpanelQuickCreate_' . $subpanelName . '_' . $this->ev->module;
  //      $GLOBALS['log']->fatal('set form name to: ' . $this->ev->formName);
        }
    }

    $this->ev->defs['templateMeta']['form']['headerTpl'] = 'custom/modules/nlfro_Roles/tpls/header.tpl';
}

// 

$this->ev->process();
$this->ev->defs['templateMeta']['form']['buttons'] = array('SUBPANELSAVE', 'SUBPANELCANCEL'); // code to remove full form button from quick create view
echo $this->ev->display($this->showTitle);
}

}
