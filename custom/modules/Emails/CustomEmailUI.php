<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'modules/Emails/EmailUI.php';

/**
 * Based closely on EmailUI, adds a possibility to choose working groups
 * from the address book, and changes the behaviour for accounts (as well
 * as for working groups): email addresses of related contacts are used.
 */
class CustomEmailUI extends EmailUI {

    function getRelatedEmail($beanType, $whereArr, $relatedBeanInfoArr = '') {
        //return parent::getRelatedEmail($beanType, $whereArr, $relatedBeanInfoArr);
    	global $beanList, $current_user, $app_strings, $db;
    	$finalQuery = '';
		$searchBeans = null;
		if($beanType === 'LBL_DROPDOWN_LIST_ALL') {
			$searchBeans = array(
                "users",
                "contacts",
                "leads",
                //"prospects",
                "accounts",
                'nlfwg_workinggroups',
                'nlfbr_businessrelationships',
                'nlfal_alliances',
            );
        }

    	if ($relatedBeanInfoArr == '' || empty($relatedBeanInfoArr['related_bean_type']) )
    	{
			if ($searchBeans != null)
			{
				$q = array();
				foreach ($searchBeans as $searchBean)
				{
				    $searchq = $this->findEmailFromBeanIds('', $searchBean, $whereArr);
				    if(!empty($searchq)) {
					    $q[] = "($searchq)";
				    }
				}
				if (!empty($q))
    			    $finalQuery .= implode("\n UNION ALL \n", $q);
			}
			else
				$finalQuery = $this->findEmailFromBeanIds('', $beanType, $whereArr);
    	}
    	else
    	{
    	    $class = $beanList[$relatedBeanInfoArr['related_bean_type']];
    	    $focus = new $class();
    	    $focus->retrieve($relatedBeanInfoArr['related_bean_id']);
    	    if ($searchBeans != null)
    	    {
    	        $q = array();
    	        foreach ($searchBeans as $searchBean)
    	        {
                    // NLF custom: custom module relationships have less fancy names
                    $relationship = $searchBean;
                    if ($relatedBeanInfoArr['related_bean_type'] === 'nlfwg_WorkingGroups') {
                        if ($searchBean === 'contacts') {
                            $relationship = 'nlfwg_workinggroups_contacts_1';
                        }
                    } elseif ($relatedBeanInfoArr['related_bean_type'] === 'nlfbr_BusinessRelationships') {
                        if ($searchBean === 'contacts') {
                            $relationship = 'nlfbr_businessrelationships_contacts_1';
                        }
                    } elseif ($relatedBeanInfoArr['related_bean_type'] === 'nlfal_Alliances') {
                        if ($searchBean === 'contacts') {
                            $relationship = 'nlfal_alliances_contacts_1';
                        }
                    }
                    // For Leads, take the other relationship so contacts of unconverted leads are also included in search
                    if ($relatedBeanInfoArr['related_bean_type'] === 'Leads') {
                        if ($searchBean === 'contacts') {
                            $relationship = 'contacts_leads_1';
                        }
                    }

    	            if ($focus->load_relationship($relationship))
    	            {
    	                $data = $focus->$relationship->get();
    	                if (count($data) != 0)
    	                $q[] = '('.$this->findEmailFromBeanIds($data, $searchBean, $whereArr).')';
    	            }
    	        }
    	        if (!empty($q))
    	        $finalQuery .= implode("\n UNION ALL \n", $q);
    	    }
    	    else
    	    {
                // NLF custom: custom module relationships have less fancy names
                $relationship = $beanType;
                if ($relatedBeanInfoArr['related_bean_type'] === 'nlfwg_WorkingGroups') {
                    if ($beanType === 'contacts') {
                        $relationship = 'nlfwg_workinggroups_contacts_1';
                    }
                } elseif ($relatedBeanInfoArr['related_bean_type'] === 'nlfbr_BusinessRelationships') {
                    if ($searchBean === 'contacts') {
                        $relationship = 'nlfbr_businessrelationships_contacts_1';
                    }
                } elseif ($relatedBeanInfoArr['related_bean_type'] === 'nlfal_Alliances') {
                    if ($searchBean === 'contacts') {
                        $relationship = 'nlfal_alliances_contacts_1';
                    }
                }
                // For Leads, take the other relationship so contacts of unconverted leads are also included in search
                if ($relatedBeanInfoArr['related_bean_type'] === 'Leads') {
                    if ($searchBean === 'contacts') {
                        $relationship = 'contacts_leads_1';
                    }
                }

    	        if ($focus->load_relationship($relationship))
    	        {
    	            $data = $focus->$relationship->get();
    	            if (count($data) != 0)
    	            $finalQuery = $this->findEmailFromBeanIds($data, $beanType, $whereArr);
    	        }
    	    }
    	}
    	$countq = "SELECT count(people.id) c from ($finalQuery) people";
	   	return array('query' => $finalQuery, 'countQuery' => $countq);
    }

    function findEmailFromBeanIds($beanIds, $beanType, $whereArr) {
    	global $current_user;
		$q = '';
		$whereAdd = "";
		$relatedIDs = '';
		if ($beanIds != '') {
			foreach ($beanIds as $key => $value) {
				$beanIds[$key] = '\''.$value.'\'';
			}
			$relatedIDs = implode(',', $beanIds);
		}

        // NLF custom: working groups also have a single name. For those also search against contact's name (first and last)
		if ($beanType === 'accounts' || $beanType === 'nlfwg_workinggroups' || $beanType === 'nlfbr_businessrelationships' || $beanType === 'nlfal_alliances') {
			if (isset($whereArr['first_name'])) {
				$whereArr[$beanType . '.name'] = $whereArr['first_name'];
				$whereArr['contacts.first_name'] = $whereArr['first_name'];
			}
			if (isset($whereArr['last_name'])) {
				$whereArr['contacts.last_name'] = $whereArr['last_name'];
			}
			unset($whereArr['last_name']);
			unset($whereArr['first_name']);
		} elseif ($beanType === 'leads') {
			if (isset($whereArr['first_name'])) {
                $whereArr['name'] = $whereArr['first_name'];
            }
			/*if (isset($whereArr['first_name'])) {
				$whereArr['leads.account_name'] = $whereArr['first_name'];
				$whereArr['contacts.first_name'] = $whereArr['first_name'];
				$whereArr['contacts_conv.first_name'] = $whereArr['first_name'];
				$whereArr['leads.first_name'] = $whereArr['first_name'];
			}
			if (isset($whereArr['last_name'])) {
				$whereArr['leads.last_name'] = $whereArr['last_name'];
				$whereArr['contacts.last_name'] = $whereArr['last_name'];
				$whereArr['contacts_conv.last_name'] = $whereArr['last_name'];
			}*/
			unset($whereArr['last_name']);
			unset($whereArr['first_name']);
            // TODO: also search in the related account name (add join to acccount any way to get contact's account(s)
        }

        $contactRole = false;
        // NLF-Custom
        if (isset($whereArr['contactRole'])) {
            $contactRole = true;
            unset($whereArr['contactRole']);
        }

		foreach($whereArr as $column => $clause) {
			if(!empty($whereAdd)) {
				$whereAdd .= " OR ";
			}
            $clause = $current_user->db->quote($clause);
            $whereAdd .= "{$column} LIKE '{$clause}%'";
		}
        // NLF custom:
        if ($beanType === 'leads') {
            $whereAdd = '';
        }

		$table = $beanType;
		$module = ucfirst($table);
	    $class = substr($module, 0, strlen($module) - 1);
        // NLF custom: custom modules do not follow the plural name pattern
        if ($module === 'Nlfwg_workinggroups') {
            $module = 'nlfwg_WorkingGroups';
            $class = 'nlfwg_WorkingGroups';
        } elseif ($module === 'Nlfbr_businessrelationships') {
            $module = 'nlfbr_BusinessRelationships';
            $class = 'nlfbr_BusinessRelationships';
        } elseif ($module === 'Nlfal_alliances') {
            $module = 'nlfal_Alliances';
            $class = 'nlfal_Alliances';
        }

	    require_once("modules/{$module}/{$class}.php");
	    $person = new $class();
		if ($person->ACLAccess('list')) {
			if ($relatedIDs != '') {
				$where = "({$table}.deleted = 0 AND eabr.primary_address = 1 AND {$table}.id in ($relatedIDs))";
			} else {
				$where = "({$table}.deleted = 0 AND eabr.primary_address = 1)";
			}

			if (ACLController::requireOwner($module, 'list')) {
				$where = $where . " AND ({$table}.assigned_user_id = '{$current_user->id}')";
			} // if
			if(!empty($whereAdd)) {
				$where .= " AND ({$whereAdd})";
			}

            // NLF custom: use emails of contacts related to accounts and working groups
            $contactJoin = '';
            if ($beanType === 'accounts' || $beanType === 'nlfwg_workinggroups' || $beanType === 'nlfbr_businessrelationships' || $beanType === 'nlfal_alliances') {
                if ($beanType === 'accounts') {
                    $relTable = 'accounts_contacts';
                    $moduleColumn = 'account_id';
                    $contactColumn = 'contact_id';
                } elseif ($beanType === 'nlfwg_workinggroups') {
                    $relTable = 'nlfwg_workinggroups_contacts_1_c';
                    $moduleColumn = 'nlfwg_workinggroups_contacts_1nlfwg_workinggroups_ida';
                    $contactColumn = 'nlfwg_workinggroups_contacts_1contacts_idb';
                } elseif ($beanType === 'nlfbr_businessrelationships') {
                    $relTable = 'nlfbr_businessrelationships_contacts_1_c';
                    $moduleColumn = 'nlfbr_busic409onships_ida';
                    $contactColumn = 'nlfbr_businessrelationships_contacts_1contacts_idb';
                } elseif ($beanType === 'nlfal_alliances') {
                    $relTable = 'nlfal_alliances_contacts_1_c';
                    $moduleColumn = 'nlfal_alliances_contacts_1nlfal_alliances_ida';
                    $contactColumn = 'nlfal_alliances_contacts_1contacts_idb';
                }

                $contactJoin = "JOIN {$relTable} con_rel ON {$table}.id=con_rel.{$moduleColumn} " .
                    "JOIN contacts ON contacts.id=con_rel.{$contactColumn} ";
                if ($contactRole) {
                    $contactJoin .= ' AND con_rel.role IS NOT NULL AND con_rel.role NOT LIKE "%' . $current_user->db->quote('_ei_tiedossa') . '%" ';
                }
                $contactJoin .= "JOIN contacts_cstm ON (contacts.id=contacts_cstm.id_c AND contacts_cstm.no_mailing_c=0) ";
                $where .= " AND (con_rel.deleted=0 AND contacts.deleted=0) ";
            } elseif ($beanType === 'leads') {
                $contactJoin = " JOIN accounts_contacts con_rel ON leads.account_id=con_rel.account_id " .
                    " JOIN contacts ON contacts.id=con_rel.contact_id " .
                $contactJoin .= " JOIN contacts_cstm ON (contacts.id=contacts_cstm.id_c AND contacts_cstm.no_mailing_c=0) ";
                $where .= " AND (con_rel.deleted=0 AND contacts.deleted=0) ";
            } elseif ($beanType === 'contacts') {
                $contactJoin = "JOIN contacts_cstm ON (contacts.id=contacts_cstm.id_c AND contacts_cstm.no_mailing_c=0) ";
            }
            // NLF custom: get account of the Contact related to the searched item
            $accountJoin = '';
            if ($beanType !== 'accounts' && $beanType !== 'users' && $beanType !== 'leads') {
                $accountJoin = 'JOIN accounts_contacts acc_con_rel ON contacts.id=acc_con_rel.contact_id ' .
                    'JOIN accounts ON accounts.id=acc_con_rel.account_id ';
                $where .= ' AND (acc_con_rel.deleted=0 AND accounts.deleted=0) ';
            } elseif ($beanType === 'leads') {
                $accountJoin = 'JOIN accounts_contacts acc_con_rel ON (leads.account_id=acc_con_rel.account_id AND contacts.id=acc_con_rel.contact_id) ' .
                    'JOIN accounts ON accounts.id=acc_con_rel.account_id ';
                $where .= ' AND (acc_con_rel.deleted=0 AND accounts.deleted=0) ';
            }
            // NLF custom: also show related service name for Leads and Business Relationships
            $serviceJoin = '';
            if ($beanType === 'nlfbr_businessrelationships') {
                $serviceJoin = "JOIN nlfse_services_nlfbr_businessrelationships_1_c ser_rel ON {$table}.id=ser_rel.nlfse_serva51aonships_idb " .
                    'JOIN nlfse_services services ON ser_rel.nlfse_services_nlfbr_businessrelationships_1nlfse_services_ida=services.id ';
                $where .= ' AND (ser_rel.deleted=0 AND services.deleted=0) ';
            } elseif ($beanType === 'leads') {
                $serviceJoin = "JOIN nlfse_services_leads_1_c ser_rel ON {$table}.id=ser_rel.nlfse_services_leads_1leads_idb " .
                    'JOIN nlfse_services services ON ser_rel.nlfse_services_leads_1nlfse_services_ida=services.id ';
                $where .= ' AND (ser_rel.deleted=0 AND services.deleted=0) ';
            }

            // NLF custom: for accounts and also working groups get the name of the Contact but include the name of he Account/Working Group
            // Also include a contact role name if the relevant search type was used.
            if ($beanType === 'accounts') {
				$t = "SELECT {$table}.id, contacts.first_name first_name, contacts.last_name last_name, {$table}.name account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
                if ($contactRole) {
                    $t .= ' , con_rel.role contact_role ';
                }
            } elseif ($beanType === 'nlfwg_workinggroups') {
                $accountName = "CONCAT(accounts.name, ' (', {$table}.name, ')')";
				$t = "SELECT {$table}.id, contacts.first_name first_name, contacts.last_name last_name, {$accountName} account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
                if ($contactRole) {
                    $t .= ' , con_rel.role contact_role ';
                }
            } elseif ($beanType === 'nlfbr_businessrelationships') {
                $accountName = "CONCAT(accounts.name, ' (', services.name, ')')";
				$t = "SELECT {$table}.id, contacts.first_name first_name, contacts.last_name last_name, {$accountName} account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
                if ($contactRole) {
                    $t .= ' , con_rel.role contact_role ';
                }
            } elseif ($beanType === 'nlfal_alliances') {
                $accountName = "CONCAT(accounts.name, ' (', {$table}.name, ')')";
				$t = "SELECT {$table}.id, contacts.first_name first_name, contacts.last_name last_name, {$accountName} account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
                if ($contactRole) {
                    $t .= ' , con_rel.role contact_role ';
                }
			} elseif ($beanType === 'leads') {
                $accountName = "CONCAT(accounts.name, ' (', services.name, ')')";
				$t = "SELECT {$table}.id, contacts.first_name first_name, contacts.last_name last_name, {$accountName} account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
			} elseif ($beanType === 'users') {
				$t = "SELECT {$table}.id, {$table}.first_name, {$table}.last_name, '' account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
			} else { // This should mean Contacts
				$t = "SELECT {$table}.id, {$table}.first_name, {$table}.last_name, accounts.name account_name, eabr.primary_address, ea.email_address, '{$module}' module ";
			}

			$t .= "FROM {$table} ";
            // NLF custom
            if ($contactJoin) {
                $t .= $contactJoin;
            }
            if ($accountJoin) {
                $t .= $accountJoin;
            }
            if ($serviceJoin) {
                $t .= $serviceJoin;
            }

            // NLF custom: match contact addresses not of the account/working group
            if ($beanType === 'accounts' || $beanType === 'nlfwg_workinggroups' || $beanType === 'nlfbr_businessrelationships' || $beanType === 'nlfal_alliances' || $beanType === 'leads') {
                $t .= "JOIN email_addr_bean_rel eabr ON (contacts.id = eabr.bean_id and eabr.deleted=0) ";
            } else {
                $t .= "JOIN email_addr_bean_rel eabr ON ({$table}.id = eabr.bean_id and eabr.deleted=0) ";
            }
			$t .= "JOIN email_addresses ea ON (eabr.email_address_id = ea.id) ";

            // NLF custom:
            if ($beanType === 'leads') {
				$clause = $current_user->db->quote($whereArr['name']);
                $where .= " AND (contacts.first_name LIKE '{$clause}%' OR contacts.last_name LIKE '{$clause}%' OR accounts.name LIKE '{$clause}%' OR email_address LIKE '{$clause}%') ";
                $where .= " AND (leads.status='Converted') ";
            }

			$t .= " WHERE {$where}";

            if ($beanType === 'leads') {
                $convertedLeadsQuery = $t;
				$clause = $current_user->db->quote($whereArr['name']);
                $notConvertedLeadsQuery = "SELECT leads.id, leads.first_name first_name, leads.last_name last_name, leads.account_name account_name, eabr.primary_address, ea.email_address, 'Leads' module " .
                'FROM leads ' .
                'LEFT JOIN contacts_leads_1_c con_rel ON leads.id=con_rel.contacts_leads_1leads_idb ' .
                'JOIN email_addr_bean_rel eabr ON (leads.id = eabr.bean_id and eabr.deleted=0) ' .
                'JOIN email_addresses ea ON (eabr.email_address_id = ea.id) ' .
                'WHERE (leads.deleted = 0 AND eabr.primary_address = 1) ' . 
                "AND (leads.first_name LIKE '{$clause}%' OR leads.last_name LIKE '{$clause}%' OR leads.account_name LIKE '{$clause}%' OR email_address LIKE '{$clause}%') " .
                "AND (leads.status='New' AND (leads.account_id IS NULL OR leads.account_id='') AND (leads.contact_id IS NULL OR leads.contact_id='') AND con_rel.contacts_leads_1leads_idb IS NULL)";

                $notConvertedButContactLeadsQuery = "SELECT leads.id, contacts.first_name first_name, contacts.last_name last_name, accounts.name account_name, eabr.primary_address, ea.email_address, 'Leads' module " .
                'FROM leads ' .
                'JOIN contacts_leads_1_c con_rel ON leads.id=con_rel.contacts_leads_1leads_idb ' .
                'JOIN contacts ON contacts.id=con_rel.contacts_leads_1contacts_ida ' .
                'JOIN contacts_cstm ON (contacts.id=contacts_cstm.id_c AND contacts_cstm.no_mailing_c=0) ' .
                'JOIN accounts_contacts acc_con_rel ON contacts.id=acc_con_rel.contact_id ' .
                'JOIN accounts ON accounts.id=acc_con_rel.account_id ' .
                'JOIN email_addr_bean_rel eabr ON (contacts.id = eabr.bean_id and eabr.deleted=0) ' .
                'JOIN email_addresses ea ON (eabr.email_address_id = ea.id) ' .
                'WHERE (leads.deleted = 0 AND eabr.primary_address = 1) ' . 
                'AND contacts.deleted=0 AND con_rel.deleted=0 AND acc_con_rel.deleted=0 AND accounts.deleted=0 ' .
                "AND (contacts.first_name LIKE '{$clause}%' OR contacts.last_name LIKE '{$clause}%' OR accounts.name LIKE '{$clause}%' OR email_address LIKE '{$clause}%') " .
                "AND (leads.status='New') ";
                $t = "SELECT * FROM (({$convertedLeadsQuery}) UNION ({$notConvertedLeadsQuery}) UNION ({$notConvertedButContactLeadsQuery})) AS lds ";
            }
			/* BEGIN - SECURITY GROUPS */
			//this function may not even be used anymore. Seems like findEmailFromBeanIds is preferred now
			if($person->bean_implements('ACL') && ACLController::requireSecurityGroup($module, 'list') )
			{
				require_once('modules/SecurityGroups/SecurityGroup.php');
				global $current_user;
				$owner_where = $person->getOwnerWhere($current_user->id);
				$group_where = SecurityGroup::getGroupWhere($table,$module,$current_user->id);
				$t .= " AND (".  $owner_where." or ".$group_where.") ";
			}
			/* END - SECURITY GROUPS */

		} // if
		return $t;
    }

    function _generateComposeConfigData($type = "email_compose_light" ) {
        global $app_list_strings, $mod_strings, $app_strings;

        parent::_generateComposeConfigData($type);

        // NLF custom: add own items to module selection list,and remove Prospects
        $moduleString = get_select_options_with_id(array('LBL_DROPDOWN_LIST_ALL' => $app_strings['LBL_DROPDOWN_LIST_ALL']), '');
        $moduleString .= get_select_options_with_id(array('users' => $app_list_strings['moduleList']['Users']), '');
        $moduleString .= get_select_options_with_id(array('contacts' => $app_list_strings['moduleList']['Contacts']), '');
        $moduleString .= get_select_options_with_id(array('leads' => $app_list_strings['moduleList']['Leads']), '');
        $moduleString .= get_select_options_with_id(array('accounts' => $app_list_strings['moduleList']['Accounts']), '');
        $moduleString .= get_select_options_with_id(array('nlfwg_workinggroups' => $app_list_strings['moduleList']['nlfwg_WorkingGroups']), '');
        $moduleString .= get_select_options_with_id(array('nlfbr_businessrelationships' => $app_list_strings['moduleList']['nlfbr_BusinessRelationships']), '');
        $moduleString .= get_select_options_with_id(array('nlfal_alliances' => $app_list_strings['moduleList']['nlfal_Alliances']), '');
        $moduleString .= get_select_options_with_id(array('accounts_role' => translate('RECIPIENT_ACCOUNT_CONTACT_ROLE', 'Emails')), '');
        $moduleString .= get_select_options_with_id(array('nlfwg_workinggroups_role' => translate('RECIPIENT_WORKING_GROUP_CONTACT_ROLE', 'Emails')), '');
        $moduleString .= get_select_options_with_id(array('nlfbr_businessrelationships_role' => translate('RECIPIENT_BUSINESS_RELATIONSHIP_CONTACT_ROLE', 'Emails')), '');
        $moduleString .= get_select_options_with_id(array('nlfal_alliances_role' => translate('RECIPIENT_ALLIANCE_CONTACT_ROLE', 'Emails')), '');

        $this->smarty->assign('listOfPersons', $moduleString);
    }

}
