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




/**
 * This file is used to control the authentication process.
 * It will call on the user authenticate and controll redirection
 * based on the users validation
 *
 */


require_once('modules/Users/authentication/SugarAuthenticate/SugarAuthenticate.php');
require_once('modules/Users/authentication/SAMLAuthenticate/lib/onelogin/saml.php');

class SAMLAuthenticate extends SugarAuthenticate {
	var $userAuthenticateClass = 'SAMLAuthenticateUser';
	var $authenticationDir = 'SAMLAuthenticate';

	var $nvVars = '';
	var $session_index = '';
	/**
	 * Constructs SAMLAuthenticate
	 * This will load the user authentication class
	 *
	 * @return SAMLAuthenticate
	 */
	function __construct(){
		parent::__construct();
	}

    /**
     * @deprecated deprecated since version 7.6, PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code, use __construct instead
     */
    function SAMLAuthenticate(){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }

    /**                                                                                                                                                     
     * Authenticates a user based on the username and password                                                                                              
     * returns true if the user was authenticated false otherwise                                                                                           
     * it also will load the user into current user if he was authenticated                                                                                 
     *                                                                                                                                                      
     * @param string $username                                                                                                                              
     * @param string $password                                                                                                                              
     * @return boolean                                                                                                                                      
     */
    function loginAuthenticate($username, $password, $fallback=false, $PARAMS = array ()){
      global $mod_strings;
      unset($_SESSION['login_error']);
      $usr= new user();
      $usr_id=$usr->retrieve_user_id($username);
      $usr->retrieve($usr_id);
      $_SESSION['login_error']='';
      $_SESSION['waiting_error']='';
      $_SESSION['hasExpiredPassword']='0';
      if ($this->userAuthenticate->loadUserOnLogin($username, $password, $fallback, $PARAMS)) {
	require_once('modules/Users/password_utils.php');
	if(hasPasswordExpired($username)) {
	  $_SESSION['hasExpiredPassword'] = '1';
	}
	// now that user is authenticated, reset loginfailed                                                                                    
	if ($usr->getPreference('loginfailed') != '' && $usr->getPreference('loginfailed') != 0) {
	  $usr->setPreference('loginfailed','0');
	  $usr->savePreferencesToDB();
	}

	// NVOLK                                                                                                                                
	if ( isset($this->userAuthenticate->session_index) ) {
	  $this->session_index = $this->userAuthenticate->session_index;
	  $session_index = $this->session_index;
	  //echo "FOO2 <script>alert('$session_index');</script>\n"; exit();                                                                     
	  setcookie("seid",$session_index,time()+3600);
	  setcookie("uname",$username,time()+3600);
	}

	return $this->postLoginAuthenticate();

      }
               else
		 {
		   //if(!empty($usr_id) && $res['lockoutexpiration'] > 0){                                                                                 
		   if(!empty($usr_id)){
		     if (($logout=$usr->getPreference('loginfailed'))=='')
		       $usr->setPreference('loginfailed','1');
                        else
			  $usr->setPreference('loginfailed',$logout+1);
		     $usr->savePreferencesToDB();
		   }
		 }
      if(strtolower(get_class($this)) != 'sugarauthenticate'){
	$sa = new SugarAuthenticate();

	if($sa->loginAuthenticate($username, $password, true, $PARAMS)){
	  return true;
	}
	$_SESSION['login_error'] = $error;
      }


      $_SESSION['login_user_name'] = $username;
      $_SESSION['login_password'] = $password;
      if(empty($_SESSION['login_error'])){
	$_SESSION['login_error'] = translate('ERR_INVALID_PASSWORD', 'Users');
      }

      return false;

    }


    /**
     * pre_login
     *
     * Override the pre_login function from SugarAuthenticate so that user is
     * redirected to SAML entry point if other is not specified
     */
    function pre_login()
    {
        parent::pre_login();

        $this->redirectToLogin($GLOBALS['app']);
    }

    /**
     * Called when a user requests to logout
     *
     * Override default behavior. Redirect user to special "Logged Out" page in
     * order to prevent automatic logging in.
     */
    public function logout() {
    /*
        session_destroy();
        ob_clean();
        header('Location: index.php?module=Users&action=LoggedOut&foo=nvtestphrase');

        sugar_cleanup(true);
*/	

        session_destroy();
        ob_clean();


        require(get_custom_file_if_exists('modules/Users/authentication/SAMLAuthenticate/settings.php'));

        $loginVars = $this->nvVars;
	$session_index = $this->session_index;
	if ( !isset($session_index) || !$session_index ) {
	  $session_index = $_COOKIE['seid'];
	}
	$user_name = $_COOKIE['uname'];
	//echo "FOO ".$session_index. " BAR"; exit();
        // $settings - variable from modules/Users/authentication/SAMLAuthenticate/settings.php
        $settings->assertion_consumer_service_url .= htmlspecialchars($loginVars);

        $authRequest = new SamlAuthRequest($settings);
        $url = $authRequest->create_logout($session_index, $username);


	//        header('Location: index.php?module=Users&action=LoggedOut&foo=nvtestphrase');
      	header("Location: $url");

        sugar_cleanup(true);

    }

    /**
     * Redirect to login page
     *
     * @param SugarApplication $app
     */
    public function redirectToLogin(SugarApplication $app)
    {
        require(get_custom_file_if_exists('modules/Users/authentication/SAMLAuthenticate/settings.php'));

        $loginVars = $app->createLoginVars();

	$this->nvVars = $loginVars;

        // $settings - variable from modules/Users/authentication/SAMLAuthenticate/settings.php
        $settings->assertion_consumer_service_url .= htmlspecialchars($loginVars);

        $authRequest = new SamlAuthRequest($settings);
        $url = $authRequest->create();

        SugarApplication::redirect($url);
    }
}
