<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: city.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */

class Ctl_Mobile_City extends Ctl_Mobile
{
    
    public function index($city_id=null)
    {
        if($city_list = K::M('data/city')->fetch_all()){
            $data['limit'] = $params['limit'] ? $params['limit'] : 5;
            $data['citys'] = $city_list;
            $py_list = array();
            foreach($city_list as $k=>$v){
                if($v['pinyin']){
                    $py = strtoupper(substr($v['pinyin'], 0, 1));
                    $py_list[$py][$k] = $v;
                }
            }
            ksort($py_list);
            $this->pagedata['py_city'] = $py_list;
            $this->pagedata['city_list'] = $city_list;
        }
        $pager['backurl'] = $this->mklink('mobile');
        $this->pagedata['pager'] = $pager;
       $this->tmpl = 'mobile/city/index.html'; 
    }

    public function city($city_id=null)
    {
        $site = $this->system->config->get('site');
        $mobile = $this->system->config->get('mobile');
        if($city_id = $city_id){
            $city = K::M('data/city')->city($city_id);
        }
        if(empty($city) && !($city = $oCity->city((int)$site['city_id']))){
            exit('没有开通城市站点');
        }
        if($this->cookie->get('curr_city_id') != $city['city_id']){
            $this->cookie->delete('curr_city_id');
            $this->cookie->set('curr_city_id', $city['city_id']);
        }
        header("Location:{$mobile['url']}");
        exit();
    }
}