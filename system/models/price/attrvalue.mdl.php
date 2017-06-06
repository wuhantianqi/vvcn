<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Price_Attrvalue extends Mdl_Table
{   
  
    protected $_table = 'price_attr_value';
    protected $_pk = 'priceattr_value_id';
    protected $_cols = 'priceattr_value_id,priceattr_id,title,order,city_id';
	protected $_pre_cache_key = 'price-attr-list';

    
    public function create($data, $checked=false)
    {
        if(!$checked && !$data = $this->_check_schema($data)){
            return false;
        }
        return $this->db->insert($this->_table, $data, true);
    }

    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$checked && !$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        return $this->db->update($this->_table, $data, $this->field($this->_pk, $pk));
    }

	public function value_by_attr($priceattr_id)
    {
        if(!$priceattr_id = intval($priceattr_id)){
            return false;
        }
        $items = array();
        if($values = $this->fetch_all()){
            foreach($values as $k=>$v){
                if($v['priceattr_id'] == $priceattr_id){
                    $items[$k] = $v;
                }
            }
        }
        return $items;
    }
}