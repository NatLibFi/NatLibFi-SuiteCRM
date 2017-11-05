<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

require_once("include/EditView/EditView2.php");
require_once 'modules/Leads/views/view.convertlead.php';

/*
NLF custom Convert Lead View. Takes care of passing over the data
of related Account and Service, and Contact, so they're pre-filled in the
convert form.
*/
class CustomViewConvertLead extends ViewConvertLead
{
    protected $fileName = "modules/Leads/metadata/convertdefs.php";

    /**
      * @see SugarView::display()
      */
    public function display()
    {
        if (!empty($_REQUEST['handle']) && $_REQUEST['handle'] == 'save')
        {
        	return $this->handleSave();
        }

    	global $beanList;

    	// get the EditView defs to check if opportunity_name exists, for a check below for populating data
    	$opportunityNameInLayout = false;
    	$editviewFile = 'modules/Leads/metadata/editviewdefs.php';
        $this->medataDataFile = $editviewFile;
        if (file_exists("custom/{$editviewFile}"))
        {
            $this->medataDataFile = "custom/{$editviewFile}";
        }
    	include($this->medataDataFile);
    	foreach($viewdefs['Leads']['EditView']['panels'] as $panel_index => $section){
    	    foreach($section as $row_array){
    	        foreach($row_array as $cell){
        	        if(isset($cell['name']) && $cell['name'] == 'opportunity_name'){
        	            $opportunityNameInLayout = true;
        	        }
    	        }
    	    }
    	}

        $this->medataDataFile = $this->fileName;
        if (file_exists("custom/$this->fileName"))
        {
            $this->medataDataFile = "custom/$this->fileName";
        }
    	$this->loadDefs();
        $this->getRecord();
        $this->checkForDuplicates($this->focus);
        $smarty = new Sugar_Smarty();
        $ev = new EditView();
        $ev->ss = $smarty;
        $ev->view = "ConvertLead";
        echo $this->getModuleTitle();

        require_once("include/QuickSearchDefaults.php");
        $qsd = QuickSearchDefaults::getQuickSearchDefaults();
        $qsd->setFormName("ConvertLead");

        $this->contact = new Contact();
        
        /*
         * Setup filter for Account/Contact popup picker
         */ 
        $filter = '';

        // NLF custom: if there is the existing Account related to the Lead, use its name in the search filter string
        if (!empty($this->focus->{'accounts_leads_1_name'}))
        {
            $filter .= '&name_advanced=' . urlencode($this->focus->{'accounts_leads_1_name'});
        }
        else
        // Check if Lead has an account set
        if (!empty($this->focus->account_name))
        {
            $filter .= '&name_advanced=' . urlencode($this->focus->account_name);
        }
        // NLF custom: if there is an existing Contact related to the Lead, use its first and last name in the search filter string
        if (!empty($this->focus->{'accounts_leads_1_name'}))
        {
            $filter .= '&first_name_advanced=' . urlencode($this->focus->{'contacts_leads_1_first_name'});
            $filter .= '&last_name_advanced=' . urlencode($this->focus->{'contacts_leads_1_last_name'});
        } else {
            // Check if Lead First name is available
            if (!empty($this->focus->first_name))
            {
                $filter .= '&first_name_advanced=' . urlencode($this->focus->first_name);
            }
            // Lead Last Name is always available
            $filter .= '&last_name_advanced=' . urlencode($this->focus->last_name);
        }
        
        $smarty->assign('initialFilter', $filter);
        $smarty->assign('displayParams', array('initial_filter' => '{$initialFilter}'));
        
        $relatedFields = $this->contact->get_related_fields();
        $selectFields = array();
        foreach ($this->defs as $moduleName => $mDefs)
        {   
            if (!empty($mDefs[$ev->view]['select']) && !empty($relatedFields[$mDefs[$ev->view]['select']]))
            {
                $selectFields[$moduleName] = $mDefs[$ev->view]['select'];
                continue;
            }
            foreach ($relatedFields as $fDef)
            {
                if (!empty($fDef['link']) && !empty($fDef['module']) && $fDef['module'] == $moduleName)
                {
                    $selectFields[$moduleName] = $fDef['name'];
                    break;
                }
            }
        }
        
        $smarty->assign('selectFields', $selectFields);

        // NLF custom: if there is an existing Account related to the Lead,
        // prefill its data in the Account form field (by injecting it to contact_def.
        // Note: This is quite a hack!
        if ($this->focus->{'accounts_leads_1accounts_ida'}) {
            $this->contact->field_defs['account_id']['value'] = $this->focus->{'accounts_leads_1accounts_ida'};
            $this->contact->field_defs['account_name']['value'] = $this->focus->{'accounts_leads_1_name'};
        }
        // NLF custom: if there is an existing Contact related to the Lead,
        // prefill its data in the Contact form field (by injecting it to contact_def).
        // Note: This is quite a hack!
        if ($this->focus->{'contacts_leads_1contacts_ida'}) {
            $this->contact->field_defs['reports_to_id']['value'] = $this->focus->{'contacts_leads_1contacts_ida'};
            $this->contact->field_defs['report_to_name']['value'] = $this->focus->{'contacts_leads_1_name'};
        }

        $smarty->assign("contact_def", $this->contact->field_defs);
        $smarty->assign("form_name", "ConvertLead");
        $smarty->assign("form_id", "ConvertLead");
        $smarty->assign("module", "Leads");
        $smarty->assign("view", "convertlead");
        $smarty->assign("bean", $this->focus);
		$smarty->assign("record_id", $this->focus->id);
        global $mod_strings;
        $smarty->assign('MOD', $mod_strings);
        $smarty->display("modules/Leads/tpls/ConvertLeadHeader.tpl");

        echo "<div class='edit view' style='width:auto;'>";

        global $sugar_config, $app_list_strings, $app_strings;
        $smarty->assign('lead_conv_activity_opt', $sugar_config['lead_conv_activity_opt']);
        
        //Switch up list depending on copy or move
        if($sugar_config['lead_conv_activity_opt'] == 'move')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('None'=>$app_strings['LBL_NONE'], 'Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));	
        }
        else if($sugar_config['lead_conv_activity_opt'] == 'copy')
        {
        	$smarty->assign('convertModuleListOptions', get_select_options_with_id(array('Contacts' => $app_list_strings["moduleListSingular"]['Contacts']), ''));
        }
        
        
        foreach($this->defs as $module => $vdef)
        {
            if(!isset($beanList[$module]))
            {
                continue;
            }


            $bean = $beanList[$module];
            $focus = new $bean();

            // skip if we aren't allowed to save this bean
            if (!$focus->ACLAccess('save'))
            {
                continue;
            }

            $focus->fill_in_additional_detail_fields();
            foreach($focus->field_defs as $field => $def)
            {
            	if(isset($vdef[$ev->view]['copyData']) && $vdef[$ev->view]['copyData'])
                {
	                if ($module == "Accounts" && $field == 'name')
	                {
	                    $focus->name = $this->focus->account_name;
	                }
	                else if ($module == "Opportunities" && $field == 'amount')
	                {
	                    $focus->amount = unformat_number($this->focus->opportunity_amount);
	                } 
                 	else if ($module == "Opportunities" && $field == 'name') {
                 		if ($opportunityNameInLayout && !empty($this->focus->opportunity_name)){
                           $focus->name = $this->focus->opportunity_name;
                 		}
                   	}
	                else if ($field == "id")
                    {
						//If it is not a contact, don't copy the ID from the lead
                    	if ($module == "Contacts") {
                    	   $focus->$field = $this->focus->$field;
                        }
                    } else if (is_a($focus, "Company") && $field == 'phone_office')
	                {
	                	//Special case where company and person have the same field with a different name
	                	$focus->phone_office = $this->focus->phone_work;
	                }
					else if (strpos($field, "billing_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */         
					{
						$tmp_field = str_replace("billing_", "primary_", $field);
						$focus->field_defs[$field]["type"] = "text";
                        if (isset($this->focus->$tmp_field)) {
						    $focus->$field = $this->focus->$tmp_field;
                        }
					 }

					else if (strpos($field, "shipping_address") !== false && $focus->field_defs[$field]["type"] == "varchar") /* Bug 42219 fix */
					{
						$tmp_field = str_replace("shipping_", "primary_", $field);
						if (isset($this->focus->$tmp_field)) {
                            $focus->$field = $this->focus->$tmp_field;
                        }
						$focus->field_defs[$field]["type"] = "text";
					}    					
                    else if (isset($this->focus->$field))
                    {
                        $focus->$field = $this->focus->$field;
                    }
                }
            }

            //Copy over email data
            $ev->setup($module, $focus, $this->medataDataFile, "custom/modules/Leads/tpls/ConvertLead.tpl", false);

            // NLF custom: inject the name of the Service related to the Lead, so it can
            // be displayed in the Account "subpanel".
            // Note: This is quite a hack!
            $ev->th->ss->assign('nlf_service_name', $this->focus->{'nlfse_services_leads_1_name'});

            // NLF custom: this is pretty hacky!
            // If there is an existing Account and/or Contact related to the lead
            // do not use "create" as the default action, so the data form (of the new Account/Contact record)
            // is hidden by default.
            if ($module === 'Accounts') {
                 if ($vdef[$ev->view]['default_action'] === 'create' && $this->focus->{'accounts_leads_1accounts_ida'}) {
                     $vdef[$ev->view]['default_action'] = '';
                     $ev->defs['default_action'] = '';
                 }
            } elseif ($module === 'Contacts') {
                 if ($vdef[$ev->view]['default_action'] === 'create' && $this->focus->{'contacts_leads_1contacts_ida'}) {
                     $vdef[$ev->view]['default_action'] = '';
                     $ev->defs['default_action'] = '';
                 }
            }


            $ev->process();
            echo($ev->display(false));
            echo($this->getValidationJS($module, $focus, $vdef[$ev->view]));
        }
        echo "</div>";
        echo ($qsd->getQSScriptsJSONAlreadyDefined());
        // need to re-assign bean as it gets overridden by $ev->display
        $smarty->assign("bean", $this->focus);
        $smarty->display("modules/Leads/tpls/ConvertLeadFooter.tpl");
    }

    /**
     * Copied from modules/Leads/views/view.convertead.php
     * NLF-specific: if there are two options (i.e. $viewdef[select] is non-empty)
     * check whether the value of related radio button changed before toggling the hidden bool field value.
     *
     * Returns the javascript to enable/disable validation of each module's sub-form
     * //TODO: This should probably be on the smarty template
     * @param $module String the target module name.
     * @param $focus SugarBean instance of the target module.
     * @param $focus EditView def for the module.
     * @return String, javascript to echo to page.
     */
    protected function getValidationJS(
        $module,
        $focus,
        $viewdef
        )
    {
        $validateSelect = isset($viewdef['required']) && $viewdef['required'] && !empty($viewdef['select']);
        $jsOut  = "
        <script type='text/javascript'>
            if (!SUGAR.convert)  SUGAR.convert = {requiredFields: {}};
            SUGAR.convert.toggle$module = function(){
                clear_all_errors();
                inputsWithErrors = [];
                if(!SUGAR.convert.{$module}Enabled)
                {";
        if (!empty($viewdef['select'])) {
                    $jsOut .= "if (!YAHOO.util.Dom.get('new{$module}').checked) {
                        return;
                    }";
        }

                    $jsOut .= "for(var i in SUGAR.convert.requiredFields.$module)
                    {
                        addToValidate('ConvertLead', '$module' + i, 'varchar', true, SUGAR.convert.requiredFields.{$module}[i]);
                    }
                    ";
        if ($validateSelect) {
        	$jsOut  .= "
                    removeFromValidate('ConvertLead', '{$viewdef['select']}');";
        }

        $jsOut .= "
                    SUGAR.convert.{$module}Enabled = true;
                } else {";

        if (!empty($viewdef['select'])) {
                    $jsOut .= "if (YAHOO.util.Dom.get('new{$module}').checked) {
                        return;
                    }";
        }

                    $jsOut .= "for(var i in SUGAR.convert.requiredFields.$module)
                    {
                        removeFromValidate('ConvertLead', '$module' + i);
                    }";
        if ($validateSelect) {
            $jsOut  .= "
                addToValidate('ConvertLead', '{$viewdef['select']}', 'varchar', true, '"
            . translate($this->contact->field_defs[$viewdef['select']]['vname']) . "');";
        }
        $jsOut .= "
                    SUGAR.convert.{$module}Enabled = false;
                }
                YAHOO.util.Dom.get('convert_create_{$module}').value = SUGAR.convert.{$module}Enabled;
            };\n";

        if (isset($viewdef['required']) && $viewdef['required'])
        {
            if (!empty($viewdef['select']) && (empty($viewdef['default_action']) || $viewdef['default_action'] != 'create'))
            {
                $jsOut .= "
            SUGAR.convert.{$module}Enabled = true;";
            }
            $jsOut .= "
            YAHOO.util.Event.onDOMReady(SUGAR.convert.toggle$module);";
        } else if (isset($viewdef['default_action'])  && $viewdef['default_action'] == "create")
        {
             $jsOut .= "\n            SUGAR.convert.{$module}Enabled = true;";
        }
        $jsOut .= "
            YAHOO.util.Event.addListener('new$module', 'click', SUGAR.convert.toggle$module);";
        if (!empty($viewdef['select'])) {
            $jsOut .= "YAHOO.util.Event.addListener('useExisting$module', 'click', SUGAR.convert.toggle$module);";
        }
            $jsOut .= "SUGAR.convert.requiredFields.$module = {};";
        foreach($focus->field_defs as $field => $def)
        {
            if (isset($def['required']) && $def['required'])
            {
                $jsOut .= "
            SUGAR.convert.requiredFields.$module.$field = '". translate($def['vname'], $module) . "';\n";
            }
        }

        $jsOut .= "
        </script>";

        return $jsOut;
    }


}
