<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: apc.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

Import::I('cache');
class Mdl_Cache_Apc implements Cache_Interface
{
	
	public function set($key, $val, $ttl=0)
	{
	
	}

	public function get($key)
	{
	
	}

	public function remove($key)
	{
	
	}

	public function flush()
	{
	
	}
}