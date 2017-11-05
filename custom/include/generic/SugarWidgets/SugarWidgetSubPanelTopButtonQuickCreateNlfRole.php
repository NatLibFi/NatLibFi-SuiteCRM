<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'include/generic/SugarWidgets/SugarWidgetSubPanelTopButtonQuickCreate.php';
class SugarWidgetSubPanelTopButtonQuickCreateNlfRole extends SugarWidgetSubPanelTopButtonQuickCreate {
    /*function get_subpanel_relationship_name($defines) {
$GLOBALS['log']->fatal('getting relname');
        $relationship_name = '';
        if(!empty($defines)) {
            $relationship_name = isset($defines['relationship']) ? $defines['relationship'] : '';
        }
$GLOBALS['log']->fatal('final relname: ' . $relationship_name);
        return $relationship_name;
    }*/

	function &_get_form($defines, $additionalFormFields = null, $asUrl = false)
	{
		global $app_strings;
		global $currentModule;

		// Create the additional form fields with real values if they were not passed in
		if(empty($additionalFormFields) && $this->additional_form_fields)
		{
			foreach($this->additional_form_fields as $key=>$value)
			{
				if(!empty($defines['focus']->$value))
				{
					$additionalFormFields[$key] = $defines['focus']->$value;
				}
				else
				{
					$additionalFormFields[$key] = '';
				}
			}
		}

		if(!empty($this->module))
		{
			$defines['child_module_name'] = $this->module;
		}
		else
		{
			$defines['child_module_name'] = $defines['module'];
		}

		$defines['parent_bean_name'] = get_class( $defines['focus']);

		$relationship_name = $this->get_subpanel_relationship_name($defines);

                // This is the only changed compared to method in the parent class
		//$form = 'form' . $relationship_name;
		$form = $this->getFormId($defines);;
		$button = '<form onsubmit="return SUGAR.subpanelUtils.sendAndRetrieve(this.id, \'subpanel_' . $defines['subpanel_definition']->name . '\', \'' . addslashes($app_strings['LBL_LOADING']) . '\');" action="index.php" method="post" name="form" id="form' . $form . "\">\n";

		//module_button is used to override the value of module name
		$button .= "<input type='hidden' name='target_module' value='".$defines['child_module_name']."'>\n";
		$button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_id' value='".$defines['focus']->id."'>\n";

		if(isset($defines['focus']->name))
		{
			$button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_name' value='".$defines['focus']->name."'>";
			#26451,add these fields for custom one-to-many relate field.
            if(!empty($defines['child_module_name'])){
            	$button .= "<input type='hidden' name='". $relationship_name ."_name' value='".$defines['focus']->name."'>";
            	$childFocusName = !empty($GLOBALS['beanList'][$defines['child_module_name']]) ? $GLOBALS['beanList'][$defines['child_module_name']] : "";
            	if(!empty($GLOBALS['dictionary'][ $childFocusName ]["fields"][$relationship_name .'_name']['id_name'])){
            		$button .= "<input type='hidden' name='". $GLOBALS['dictionary'][ $childFocusName ]["fields"][$relationship_name .'_name']['id_name'] ."' value='".$defines['focus']->id."'>";
            	}
            }
            
            //Set the return_name form variable that will allow EditView2.php 
            $additionalFormFields['return_name'] = $defines['focus']->name;
		}
		
		if(!empty($defines['view']))
		$button .= '<input type="hidden" name="target_view" value="'. $defines['view'] . '" />';
		$button .= '<input type="hidden" name="to_pdf" value="true" />';
        $button .= '<input type="hidden" name="tpl" value="QuickCreate.tpl" />';
		$button .= '<input type="hidden" name="return_module" value="' . $currentModule . "\" />\n";
		$button .= '<input type="hidden" name="return_action" value="' . $defines['action'] . "\" />\n";
		$button .= '<input type="hidden" name="return_id" value="' . $defines['focus']->id . "\" />\n";
		$button .= '<input type="hidden" name="return_relationship" value="' . $relationship_name . "\" />\n";
		$button .= '<input type="hidden" name="record" value="" />';

		// TODO: move this out and get $additionalFormFields working properly
		if(empty($additionalFormFields['parent_type']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_type'] = 'Accounts';
			}
			else {
				$additionalFormFields['parent_type'] = $defines['focus']->module_dir;
			}
		}
		if(empty($additionalFormFields['parent_name']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_name'] = $defines['focus']->account_name;
				$additionalFormFields['account_name'] = $defines['focus']->account_name;
			}
			else {
				$additionalFormFields['parent_name'] = $defines['focus']->name;
			}
		}
		if(empty($additionalFormFields['parent_id']))
		{
			if($defines['focus']->object_name=='Contact') {
				$additionalFormFields['parent_id'] = $defines['focus']->account_id;
				$additionalFormFields['account_id'] = $defines['focus']->account_id;
			}
			else {
				$additionalFormFields['parent_id'] = $defines['focus']->id;
			}
		}

        if(strtolower($defines['child_module_name']) =='contracts') {
            //set variables to account name, or parent account name
            if(strtolower($defines['parent_bean_name']) == 'account' ){
                //if account is parent bean, then get focus id/focus name
                if(isset($defines['focus']->id))$additionalFormFields['account_id'] = $defines['focus']->id;
                if(isset($defines['focus']->name))$additionalFormFields['account_name'] = $defines['focus']->name;
            }elseif(strtolower($defines['parent_bean_name']) == 'quote' ){
                //if quote is parent bean, then get billing_account_id/billing_account_name
                if(isset($defines['focus']->billing_account_id))$additionalFormFields['account_id'] = $defines['focus']->billing_account_id;
                if(isset($defines['focus']->billing_account_name))$additionalFormFields['account_name'] = $defines['focus']->billing_account_name;
            }else{
                if(isset($defines['focus']->account_id))$additionalFormFields['account_id'] = $defines['focus']->account_id;
                if(isset($defines['focus']->account_name))$additionalFormFields['account_name'] = $defines['focus']->account_name;
            }
        }

		$button .= '<input type="hidden" name="action" value="SubpanelCreates" />' . "\n";
		$button .= '<input type="hidden" name="module" value="Home" />' . "\n";
		$button .= '<input type="hidden" name="target_action" value="QuickCreate" />' . "\n";

		// fill in additional form fields for all but action
		foreach($additionalFormFields as $key => $value)
		{
			if($key != 'action')
			{
				$button .= '<input type="hidden" name="' . $key . '" value=\'' . $value . '\' />' . "\n";
			}
		}

		return $button;
	}

    private function getFormId($defines) {
        $formName = 'form' . $this->get_subpanel_relationship_name($defines);
        if (isset($defines['subpanel_definition']->name)) {
            $formName = 'form' . $defines['subpanel_definition']->name;
        }
        return $formName;
    }

    //function &_get_form($defines, $additionalFormFields = null, $asUrl = false)
    function display($defines, $additionalFormFields = null, $nonbutton = false)
    {
        global $app_strings;

        $this->module = 'nlfro_Roles';
        $this->title = $app_strings['LBL_CONTACT_ROLE_ADD_NEW_TITLE'];
        $this->form_value = translate('LBL_CONTACT_ROLE_ADD_NEW_TITLE', 'nlfro_Roles');
       /*if (!isset($defines['subpanel_definition']->name)) {
            $GLOBALS['log']->fatal('no subpanel defs');
            //return parent::_get_form($defines, $additionalFormFields, $asUrl);
            return parent::display($defines, $additionalFormFields, $nonbutton);
        }*/

        if (!is_array($additionalFormFields)) {
            $additionalFormFields = array();
        }

        if (isset($defines['subpanel_definition']->name)) {
            $additionalFormFields['subpanel_name'] = $defines['subpanel_definition']->name;
             //$this->form_value = $defines['subpanel_definition']->name . '_' . translate('LBL_QUICK_CREATE_TITLE', 'nlfro_Roles');
        }
        //$GLOBALS['log']->fatal('aprenta: ');
        //$GLOBALS['log']->fatal(parent::&_get_form($defines, $additionalFormFields, $asUrl));

   //return 'Fooo';
        //return parent::_get_form($defines, $additionalFormFields, $asUrl);
        return parent::display($defines, $additionalFormFields, $nonbutton);
    }
}
