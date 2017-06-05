<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: data.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Mdl_Data_Data extends Model 
{    
    
    public function ttl($k=null)
    {
        static $ttls = array('600'=>'10分钟','900'=>'15分钟','1800'=>'30分钟',
            '3600'=>'1小时', '21600'=>'6小时', '43200'=>'12小时','86400'=>'24小时','0'=>'永不过期','-1'=>'不缓存');
        if($k === null){
            return $ttls;
        }
        return $ttls[$k];
    }

}