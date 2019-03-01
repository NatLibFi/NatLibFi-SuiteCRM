<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

if (isset($_REQUEST['emailUIAction']) && $_REQUEST['emailUIAction'] === 'getAddressSearchResults') {

    require_once 'custom/modules/Emails/CustomEmail.php';
    require_once 'modules/InboundEmail/InboundEmail.php';

    $email = new CustomEmail();
    $email->email2init();
    $ie = new InboundEmail();
    $ie->email = $email;

    // Below code is copied unchanged from modules/Emails/EmailUIAjax.php
    // As the code in EmailUIAjax is not reusable, in order to allow
    // searching for contacts related to Accounts and other beans,
    // as required on NLF installation, this custom action address
    // handler substitutes EmailUI instance and then does standard
    // getAddressSearchResults processing.
    // Other AJAX actions are handled using standard file.

        $wheres = array();
        $person = 'contacts';
        $relatedBeanInfo = '';
  		if(isset($_REQUEST['related_bean_id']) && !empty($_REQUEST['related_bean_id'])) {
            $isRelatedSearch = true;
            $relatedBeanInfo['related_bean_id'] = $_REQUEST['related_bean_id'];
            $relatedBeanInfo['related_bean_type'] = ucfirst($_REQUEST['related_bean_type']);
            //NLF custom:
            if ($_REQUEST['related_bean_type'] === 'nlfwg_WorkingGroups') {
                $relatedBeanInfo['related_bean_type'] = $_REQUEST['related_bean_type'];
            }
        }

        if (isset($_REQUEST['search_field'])) {
        	$wheres['first_name'] = $_REQUEST['search_field'];
        	$wheres['last_name'] = $_REQUEST['search_field'];
        	$wheres['email_address'] = $_REQUEST['search_field'];
        }

        if(isset($_REQUEST['person']) && !empty($_REQUEST['person'])) {
            $person = $_REQUEST['person'];
        }
        if(!empty($_REQUEST['start'])) {
            $start = intval($_REQUEST['start']);
        } else {
        	$start = 0;
        }

        // NLF custom: rather hacky way to get emails of contacts related to the given module (e.g. account)
        // which have some role defined in this module
        if (substr($person, -5, strlen('_role')) === '_role') {
            $person = substr($person, 0, -5);
            $wheres['contactRole'] = '1';
        }

        $qArray = $email->et->getRelatedEmail($person, $wheres, $relatedBeanInfo);
        $out = array();
        $count = 0;
        if (!empty($qArray['query'])) {
	        $countq = $qArray['countQuery'];
	        $time = microtime(true);
	        $r = $ie->db->query($countq);
	        $GLOBALS['log']->debug("***QUERY counted in " . (microtime(true) - $time) . " milisec\n");
	        if($row = $GLOBALS['db']->fetchByAssoc($r)){
	            $count = $row['c'];
	        }
	        $time = microtime(true);

	        //Handle sort and order requests
	        $sort = !empty($_REQUEST['sort']) ? $ie->db->getValidDBName($_REQUEST['sort']) : "id";
	        $sort = ($sort == 'bean_id') ? 'id' : $sort;
	        $sort = ($sort == 'email') ? 'email_address' : $sort;
	        $sort = ($sort == 'name') ? 'last_name' : $sort;
	        $direction = !empty($_REQUEST['dir']) && in_array(strtolower($_REQUEST['dir']), array("asc", "desc")) ? $_REQUEST['dir'] : "asc";
	        $order = ( !empty($sort) && !empty($direction) ) ? " ORDER BY {$sort} {$direction}" : "";

	        $r = $ie->db->limitQuery($qArray['query'] . " $order ", $start, 25, true);
	        $GLOBALS['log']->debug("***QUERY Got results in " . (microtime(true) - $time) . " milisec\n");

            //NLF custom
            $allRoles = array_merge(
                $app_list_strings['contact_account_role_list'],
                $app_list_strings['contact_business_relationship_role_list'],
                $app_list_strings['contact_working_group_role_list'],
                $app_list_strings['contact_alliance_role_list']
            );

	        while($a = $ie->db->fetchByAssoc($r)) {
	            $person = array();
	            $person['bean_id'] = $a['id'];
	            $person['bean_module'] = $a['module'];
	            $person['name'] = $locale->getLocaleFormattedName($a['first_name'], $a['last_name'],'');
	            $person['email'] = $a['email_address'];
                // NLF custom
                $person['account_name'] = $a['account_name'];
                if (isset($a['contact_role'])) {
                    $roles = unencodeMultienum($a['contact_role']);
                    $roleString = implode(
                        ', ',
                        array_map(
                            function($r) use ($allRoles) {
                                return isset($allRoles[$r]) ? $allRoles[$r] : $r;
                            },
                            $roles
                        )
                    );
                    if ($roleString) {
                        $person['name'] .= ' ' . '(' . $roleString . ')';
                    }
                }

	            $out[] = $person;
	        }
        }
        $ret = $email->et->jsonOuput(array('out' => $out), 'Person', $count);

        @ob_end_clean();
        ob_start();
        echo $ret;
        ob_end_flush();

    exit;
}

require 'modules/Emails/EmailUIAjax.php';
