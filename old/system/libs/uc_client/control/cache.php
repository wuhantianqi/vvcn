<?php

/*
	[UCenter] (C)2001-2099 Comsenz Inc.
	This is NOT a freeware, use is subject to license terms

	$Id: cache.php 9378 2015-03-27 02:07:36Z youyi $
*/

!defined('IN_UC') && exit('Access Denied');

class cachecontrol extends base {

	function __construct() {
		$this->cachecontrol();
	}

	function cachecontrol() {
		parent::__construct();
	}

	function onupdate($arr) {
		$this->load("cache");
		$_ENV['cache']->updatedata();
	}

}

?>