<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once 'custom/modules/Emails/CustomEmail.php';

$focus = new CustomEmail();
$focus->email2init();
$focus->et->preflightUser($current_user);
$out = $focus->et->displayEmailFrame();
echo $out;
echo "<script>var composePackage = null;</script>";

$skipFooters = true;

