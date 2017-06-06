<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Weixin_Couponsn extends Mdl_Table
{   
  
    protected $_table = 'weixin_couponsn';
    protected $_pk = 'sn_id';
    protected $_cols = 'sn_id,coupon,uid,wx_id,openid,nickname,sn,is_use,use_time,dateline';

    
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

	public function items_by_openid($openid)
    {
       $sql = "SELECT w.*,t.* FROM ".$this->table($this->_table)." w LEFT JOIN ".$this->table('weixin_coupon')." t ON w.coupon=t.coupon_id WHERE w.openid='$openid' ORDER BY t.coupon_id DESC";
        $items = array();
        if($rs = $this->db->Execute($sql)){
            while($row = $rs->fetch()){
                $items[] = $row;
            }
        }
        return $items;       
    }
}