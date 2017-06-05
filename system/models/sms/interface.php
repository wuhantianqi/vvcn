<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: interface.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

interface Sms_Interface
{
	//. public $gatewary = '';
	public function send($mobile, $content);
}