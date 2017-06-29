<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: province.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

class Mdl_Data_Province extends Mdl_Table
{   
  
    protected $_table = 'data_province';
    protected $_pk = 'province_id';
    protected $_cols = 'province_id,province_name,orderby,dateline';
    protected $_orderby = array('orderby'=>'ASC', 'province_id'=>'ASC');
    protected $_pre_cache_key = 'data-province-list';
    
    public function create($data)
    {
        if(!$data = $this->_check_schema($data)){
            return false;
        }
        $data['dateline'] = __CFG::TIME;
        if($city_id = $this->db->insert($this->_table, $data, true)){
            $this->flush();
        }
        return $city_id;
    }

    public function update($pk, $data, $checked=false)
    {
        $this->_checkpk();
        if(!$data = $this->_check_schema($data,  $pk)){
            return false;
        }
        unset($data['province_id'], $data['dateline']);
        if($this->db->update($this->_table, $data, $this->field($this->_pk, $pk))){
            $this->flush();
        }
        return true;
    }

    public function options()
    {
    	$options = array();
    	if($citys = $this->fetch_all()){
    		foreach($citys as $k=>$v){
    			$options[$k] = $v['province_name'];
    		}
    	}
    	return $options;
    }

    public function province($province_id)
    {
        if(!$province_id = intval($province_id)){
            return false;
        }else if($items = $this->fetch_all()){
            return $items[$province_id];
        }
        return false;
    }
    
    protected function _check($data, $city_id=null)
    {
        if(isset($data['pinyin'])){
            if($city = $this->city_by_pinyin($data['pinyin'])){
                if(!$city_id || ($city['city_id'] != $city_id)){
                    $this->err->add('城市拼音不能重复', 455);
                    return false;
                }
            }
        }
        return parent::_check($data, $city_id);
    }
}