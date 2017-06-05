<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: array.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Utility_Array
{
	
	protected $_sort_key = null;

	public function multisort($data, $key, $sort='DESC')
	{
		$this->_sort_key = $key;
		if(strtoupper($sort) == 'ASC'){
			uasort($data, array($this, '_computer_asc'));
		}else{
			uasort($data, array($this, '_computer_desc'));
		}
		return $data;
	}

	protected function _computer_asc($a, $b)
	{
		$aa = intval($a[$this->_sort_key]);
		$bb = intval($b[$this->_sort_key]);
		if($aa == $bb){
			return 0;
		}else if($aa > $bb){
			return 1;
		}else{
			return -1;
		}
	}

	protected function _computer_desc($a, $b)
	{
		$aa = intval($a[$this->_sort_key]);
		$bb = intval($b[$this->_sort_key]);
		if($aa == $bb){
			return 0;
		}else if($aa > $bb){
			return -1;
		}else{
			return 1;
		}
	}
}