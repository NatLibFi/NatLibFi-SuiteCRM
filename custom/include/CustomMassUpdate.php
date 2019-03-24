<?php

require_once 'include/MassUpdate.php';

class CustomMassUpdate extends MassUpdate {

    public function getMassUpdateForm($hideDeleteIfNoFieldsAvailable = false) {
        $module = $this->sugarbean->module_dir;
        $metadataFile = file_exists("custom/modules/{$module}/metadata/editviewdefs.php") ? "custom/modules/{$module}/metadata/editviewdefs.php" : "modules/{$module}/metadata/editviewdefs.php";
        require $metadataFile;

        $panelNames = array_keys($viewdefs[$module]['EditView']['templateMeta']['tabDefs']);
        $fieldsToPanels = $this->getFieldsToPanelsMap($viewdefs[$module]['EditView']['panels']);

        if (count($panelNames) < 2) {
            return parent::getMassUpdateForm($hideDeleteIfNoFieldsAvailable);
        }

        $panelSuffixes = array();
        foreach ($panelNames as $panelName) {
            if ($panelName === 'DEFAULT') {
                $panelSuffixes['DEFAULT'] = '';
                continue;
            }
            $panelSuffixes[$panelName] = '_' . strtolower($panelName);
        }

        global $app_strings;
		global $current_user;

		if($this->sugarbean->bean_implements('ACL') && ( !ACLController::checkAccess($this->sugarbean->module_dir, 'edit', true) || !ACLController::checkAccess($this->sugarbean->module_dir, 'massupdate', true) ) ){
			return '';
		}

		$lang_delete = translate('LBL_DELETE');
		$lang_update = translate('LBL_UPDATE');
		$lang_confirm= translate('NTC_DELETE_CONFIRMATION_MULTIPLE');
		$lang_sync = translate('LBL_SYNC_CONTACT');
		$lang_oc_status = translate('LBL_OC_STATUS');
		$lang_unsync = translate('LBL_UNSYNC');
		$lang_archive = translate('LBL_ARCHIVE');
		$lang_optout_primaryemail = $app_strings['LBL_OPT_OUT_FLAG_PRIMARY'];

		$field_count = 0;

		$html = "<div id='massupdate_form' style='display:none;'><table width='100%' cellpadding='0' cellspacing='0' border='0' class='formHeader h3Row'><tr><td nowrap><h3><span>" . $app_strings['LBL_MASS_UPDATE']."</h3></td></tr></table>";

        $topHtmlByPanel = array();
        $htmlByPanel = array();
        $evenByPanel = array();

        foreach ($panelSuffixes as $panelName => $suffix) {
            $subtableHeader = '';
            if ($panelName !== 'DEFAULT') {
                $subtableHeader = '<tr><td colspan="2"><h3><span>' . translate($panelName) . '</span></h3></td></tr>';
            }
		    $topHtmlByPanel[$panelName] = "<div id='mass_update_div$suffix'><table cellpadding='0' cellspacing='1' border='0' width='100%' class='edit view' id='mass_update_table$suffix'>$subtableHeader";
            $htmlByPanel[$panelName] = '';
            $evenByPanel[$panelName] = true;
        }

		if($this->sugarbean->object_name == 'Contact')
		{
			$htmlByPanel['DEFAULT'] .= "<tr><td width='15%' scope='row'>$lang_sync</td><td width='35%' class='dataField'><select name='Sync'><option value=''>{$GLOBALS['app_strings']['LBL_NONE']}</option><option value='false'>{$GLOBALS['app_list_strings']['checkbox_dom']['2']}</option><option value='true'>{$GLOBALS['app_list_strings']['checkbox_dom']['1']}</option></select></td>";
			$evenByPanel['DEFAULT'] = false;
		} else if($this->sugarbean->object_name == 'Employee') {
			$this->sugarbean->field_defs['employee_status']['type'] = 'enum';
			$this->sugarbean->field_defs['employee_status']['massupdate'] = true;
			$this->sugarbean->field_defs['employee_status']['options'] = 'employee_status_dom';
		} else if($this->sugarbean->object_name == 'InboundEmail'){
			$this->sugarbean->field_defs['status']['type'] = 'enum';
			$this->sugarbean->field_defs['status']['options'] = 'user_status_dom';
		}

		//These fields should never appear on mass update form
		static $banned = array('date_modified'=>1, 'date_entered'=>1, 'created_by'=>1, 'modified_user_id'=>1, 'deleted'=>1,'modified_by_name'=>1,);

		foreach($this->sugarbean->field_defs as $field)
		{
            $panelName = 'DEFAULT';
            if (array_key_exists($field['name'], $fieldsToPanels)) {
                $panelName = strtoupper($fieldsToPanels[$field['name']]);
            }
			 if(!isset($banned[$field['name']]) && (!isset($field['massupdate']) || !empty($field['massupdate'])))
			 {
				$newhtml = '';

				if($evenByPanel[$panelName])
				{
					$newhtml .= "<tr>";
				}

				if(isset($field['vname']))
				{
					$displayname = translate($field['vname']);
				}else{
					$displayname = '';
				}

				if(isset($field['type']) && $field['type'] == 'relate' && isset($field['id_name']) && $field['id_name'] == 'assigned_user_id')
				{
					$field['type'] = 'assigned_user_name';
				}

				if(isset($field['custom_type']))
				{
					$field['type'] = $field['custom_type'];
				}

				if(isset($field['type']))
				{
					switch($field["type"])
					{
						case "relate":
    						    // bug 14691: avoid laying out an empty cell in the <table>
    							$handleRelationship = $this->handleRelationship($displayname, $field);
    							if ($handleRelationship != '')
    							{
    								$evenByPanel[$panelName] = !$evenByPanel[$panelName];
    								$newhtml .= $handleRelationship;
    							}
							break;
						case "parent":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .=$this->addParent($displayname, $field); break;
						case "int":
							if(!empty($field['massupdate']) && empty($field['auto_increment']))
							{
								$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .=$this->addInputType($displayname, $field['name']);
							}
							 break;
						case "contact_id":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .=$this->addContactID($displayname, $field["name"]); break;
						case "assigned_user_name":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addAssignedUserID($displayname,  $field["name"]); break;
						case "account_id":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addAccountID($displayname,  $field["name"]); break;
						case "account_name":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addAccountID($displayname,  $field["id_name"]); break;
						case "bool": $evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addBool($displayname,  $field["name"]); break;
						case "enum":
						case "dynamicenum":
						case "multienum":
							if(!empty($field['isMultiSelect']))
							{
								$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addStatusMulti($displayname,  $field["name"], translate($field["options"])); break;
							}else if(!empty($field['options'])) {
								$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addStatus($displayname,  $field["name"], translate($field["options"])); break;
							}else if(!empty($field['function'])){
								$functionValue = $this->getFunctionValue($this->sugarbean, $field);
								$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addStatus($displayname,  $field["name"], $functionValue); break;
							}
							break;
						case "radioenum":
						$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addRadioenum($displayname,  $field["name"] , translate($field["options"])); break;
						case "datetimecombo":
						$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addDatetime($displayname,  $field["name"]); break;
						case "datetime":
						case "date":$evenByPanel[$panelName] = !$evenByPanel[$panelName]; $newhtml .= $this->addDate($displayname,  $field["name"]); break;
                        default:
                            $newhtml .= $this->addDefault($displayname,  $field, $evenByPanel[$panelName]); break;
                            break;
					}
				}

				if($evenByPanel[$panelName])
				{
					$newhtml .="</tr>";
				}

				$field_count++;

				if(!in_array($newhtml, array('<tr>', '</tr>', '<tr></tr>', '<tr><td></td></tr>'))){
					$htmlByPanel[$panelName].=$newhtml;
				}
			}
		}


		if ($this->sugarbean->object_name == 'Contact' ||
			$this->sugarbean->object_name == 'Account' ||
			$this->sugarbean->object_name == 'Lead' ||
			$this->sugarbean->object_name == 'Prospect') {

			$htmlByPanel['DEFAULT'] .= "<tr><td width='15%'  scope='row' class='dataLabel'>$lang_optout_primaryemail</td><td width='35%' class='dataField'><select name='optout_primary'><option value=''>{$GLOBALS['app_strings']['LBL_NONE']}</option><option value='false'>{$GLOBALS['app_list_strings']['checkbox_dom']['2']}</option><option value='true'>{$GLOBALS['app_list_strings']['checkbox_dom']['1']}</option></select></td></tr>";

			}

        foreach ($panelNames as $panelName) {
            if ($htmlByPanel[$panelName] === '') {
                continue;
            }
            $html .= $topHtmlByPanel[$panelName];
            $html .= $htmlByPanel[$panelName];
		    $html .="</table></div>";
        }

		 $html .= "<div><table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td class='buttons'><input onclick='return sListView.send_mass_update(\"selected\", \"{$app_strings['LBL_LISTVIEW_NO_SELECTED']}\")' type='submit' id='update_button' name='Update' value='{$lang_update}' class='button'>&nbsp;<input onclick='javascript:toggleMassUpdateForm();' type='button' id='cancel_button' name='Cancel' value='{$GLOBALS['app_strings']['LBL_CANCEL_BUTTON_LABEL']}' class='button'>";
		// TODO: allow ACL access for Delete to be set false always for users
//		if($this->sugarbean->ACLAccess('Delete', true) && $this->sugarbean->object_name != 'User') {
//			global $app_list_strings;
//			$html .=" <input id='delete_button' type='submit' name='Delete' value='{$lang_delete}' onclick='return confirm(\"{$lang_confirm}\") && sListView.send_mass_update(\"selected\", \"{$app_strings['LBL_LISTVIEW_NO_SELECTED']}\", 1)' class='button'>";
//		}

		// only for My Inbox views - to allow CSRs to have an "Archive" emails feature to get the email "out" of their inbox.
		if($this->sugarbean->object_name == 'Email'
		&& (isset($_REQUEST['assigned_user_id']) && !empty($_REQUEST['assigned_user_id']))
		&& (isset($_REQUEST['type']) && !empty($_REQUEST['type']) && $_REQUEST['type'] == 'inbound')) {
			$html .=<<<eoq
			<input type='button' name='archive' value="{$lang_archive}" class='button' onClick='setArchived();'>
			<input type='hidden' name='ie_assigned_user_id' value="{$current_user->id}">
			<input type='hidden' name='ie_type' value="inbound">
eoq;
		}

		$html .= "</td></tr></table></div></div>";

		$html .= <<<EOJS
<script>
function toggleMassUpdateForm(){
    document.getElementById('massupdate_form').style.display = 'none';
}
</script>
EOJS;

		if($field_count > 0)
		{
			return $html;
		}else{
			//If no fields are found, render either a form that still permits Mass Update deletes or just display a message that no fields are available
			$html = "<div id='massupdate_form' style='display:none;'><table width='100%' cellpadding='0' cellspacing='0' border='0' class='formHeader h3Row'><tr><td nowrap><h3><span>" . $app_strings['LBL_MASS_UPDATE']."</h3></td></tr></table>";
			if($this->sugarbean->ACLAccess('Delete', true) && !$hideDeleteIfNoFieldsAvailable){
				$html .= "<table cellpadding='0' cellspacing='0' border='0' width='100%'><tr><td><input type='submit' name='Delete' value='$lang_delete' onclick=\"return confirm('{$lang_confirm}')\" class='button'></td></tr></table></div>";
			}else{
				$html .= $app_strings['LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE'] . "</div>";
			}
			return $html;
		}
 
    }

    private function getFieldsToPanelsMap(array $panelData) {
        $fieldsToPanels = array();

        foreach ($panelData as $panelName => $panelRows) {
            foreach ($panelRows as $row) {
                foreach ($row as $field) {
                    if (is_array($field)) {
                        $fieldName = $field['name'];
                    } else {
                        $fieldName = $field;
                    }
                    if ($fieldName === '') {
                        continue;
                    }
                    $fieldsToPanels[$fieldName] = $panelName;
                }
            }
        }

        return $fieldsToPanels;
    }

}
