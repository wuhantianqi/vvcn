<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: interface.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

interface Cache_Interface
{
	public function set($key, $val, $ttl=0);

	public function get($key);

	public function delete($key);

	public function flush();

	//public function update();
}