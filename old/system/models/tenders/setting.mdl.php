<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: setting.mdl.php 9507 2015-04-01 05:47:59Z wanglei $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Tenders_Setting extends Mdl_Table
{   
  
    protected $_table = 'tenders_setting';
    protected $_pk = 'setting_id';
    protected $_cols = 'setting_id,type,name,orderby';
    protected $_orderby = array('type'=>'ASC', 'orderby'=>'ASC');
    protected $_pre_cache_key = 'tenders_setting';
    protected $_type_means = array(1 => '招标类型', 2 => '喜欢风格', 3 => '预算范围', 4 => '服务需求',5 => '空间户型', 6 => '装修方式');    
    protected $_type = array( 'type' => 1,'style'=> 2, 'budget'=>3, 'service'=>4, 'house_type' => 5, 'way'=>6);    
    
    public function get_type_means()
    {        
        return $this->_type_means;
    }
    
    public function get_type()
    {
        return $this->_type;
    }
    
    //根据TYPE来排序 配置
    public function fetch_all_setting()
    {
        $data = $this->fetch_all();
        $return = array();
        if(empty($data)) return $return;
        foreach($data as $v){ 
            $return[$v['type']][$v['setting_id']] = $v['name'];
        }
        return $return;        
    }

    public function options($type_id)
    {
        $data = $this->fetch_all();
        $return = array();
        if(empty($data)) return $return;
        foreach($data as $v){
            if($v['type'] == $type_id){
                $return[$v['setting_id']] = $v['name'];
            }
        }
        return $return;       

    }
    
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
}