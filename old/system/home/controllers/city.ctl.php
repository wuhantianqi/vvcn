<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: city.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */
class Ctl_City extends Ctl
{
    public function  index()
    {
        $cfg = $this->system->config->get('site');
        if(!$cfg['multi_city']){
            header('Location:index.php');
            exit;
        }
        $city_list = K::M('data/city')->fetch_all(); 
        foreach($city_list as $k=>$v){
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $v['py'] = $py;
                $city_list[$k] = $v;
            }
        }
        $this->pagedata['city_list']  = $city_list;
        $this->pagedata['province_list']  =  K::M('data/province')->fetch_all();
        $this->seo->init('city');
        $this->tmpl = 'city/city.html';
    }    
}