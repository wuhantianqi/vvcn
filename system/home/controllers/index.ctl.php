<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Index extends Ctl 
{
    
    public function index($id=null)
    {
		
		$this->pagedata['setting'] = k::M('tenders/setting')->fetch_all_setting();
		$this->pagedata['type'] = k::M('tenders/setting')->get_type();
		
		$cfg = $this->system->config->get('site');

        $city_list = K::M('data/city')->fetch_all();
        foreach($city_list as $k=>$v){
            if($v['pinyin']){
                $py = strtoupper(substr($v['pinyin'], 0, 1));
                $v['py'] = $py;
                $city[$py][] = $v;
            }
        }
        
		$c = ksort($city);
		$this->pagedata['city_list']  = $city_list;
		$this->pagedata['city'] = $city;
        $this->pagedata['province_list']  =  K::M('data/province')->fetch_all();
		$this->pagedata['cate_list']  =  K::M('shop/cate')->items(array('audit'=>'1','closed'=>'0','parent_id'=>'0'));
		if($id && $id != $this->uid){
			$this->cookie->set('fenxiaoid', $id);
		}
		$this->pagedata['site_status_list'] = K::M('home/site')->get_status();
        $this->seo->init('index');
        $this->tmpl = 'index.html';
    }

    public function force($to='web')
    {
        $site = $this->system->config->get('site');
        if($to == 'web'){
            $this->system->cookie->delete('force_web');
            $this->system->cookie->delete('force_mobile');
            $this->system->cookie->set('force_web', 1);
            header('Location:'.$site['siteurl']);
            exit;
        }else if($site['mobile'] && ($to == 'mobile')){
            $mobile = $this->system->config->get('mobile');
            $this->system->cookie->delete('force_web');
            $this->system->cookie->delete('force_mobile');
            $this->system->cookie->set('force_mobile', 1);
            header('Location:'.$mobile['url']);
            exit;
        }
    } 
}