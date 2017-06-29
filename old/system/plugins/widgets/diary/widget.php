<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: widget.php 9378 2015-03-27 02:07:36Z youyi $
 */

class Widget_Diary extends Model
{
    
    public function newitems(&$params){
        $data['cfg_status'] = K::M('home/site')->get_status();
        $params['tpl'] = 'newitems.html'; 
        return $data;
    }
    
    public function index(&$params)
    {
		$data['limit'] = $params['limit'] ? $params['limit'] : 5;
     
        $filter = array('audit'=>1);
        if($params['city_id']){
            $filter['city_id'] = (int)$params['city_id'];
        }
        
        $diary = K::M('diary/diary')->items($filter,array('diary_id'=>'DESC') , 1,$data['limit']);
        $company_ids = array();
        foreach($diary as $val){
            if(!empty($val['company_id'])) $company_ids[$val['company_id']] = $val['company_id'];
        }
        if(!empty($company_ids)) $data['diary_company_list'] = K::M('company/company')->items_by_ids($company_ids);
        $data['diary'] = $diary;
        $params['tpl'] = 'index.html'; 
        return $data;
        
    }
    
    public function right(&$params){
        $data['limit'] = $params['limit'] ? $params['limit'] : 5;
     
        $filter = array('audit'=>1);
        if($params['city_id']){
            $filter['city_id'] = (int)$params['city_id'];
        }
        
        $diary = K::M('diary/diary')->items($filter,array('diary_id'=>'DESC') , 1,$data['limit']);
        $company_ids = array();
        foreach($diary as $val){
            if(!empty($val['company_id'])) $company_ids[$val['company_id']] = $val['company_id'];
        }
        if(!empty($company_ids)) $data['diary_company_list'] = K::M('company/company')->items_by_ids($company_ids);
        $data['diary'] = $diary;
        $params['tpl'] = 'right.html'; 
        return $data;
    }

}