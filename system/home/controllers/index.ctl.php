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
        //房屋装修文章
        $filter = array('audit'=>1,'hidden'=>'0', 'closed'=>0, 'ontime'=>'<:1498718200', 'city_id'=>array('0', 'cat_id'=>array('11','84','85','86','87','88','89','90','91','92','93','94','95')));
        $page=1;
        $limit=5;
        $count=0;
        $items = K::M('article/article')->items($filter, null, $page, $limit, $count);
        $pager['count'] = $count;
        $this->pagedata['fwitems'] = $items;
        //装修风格文章
        $filter = array('audit'=>1,'hidden'=>'0', 'closed'=>0, 'ontime'=>'<:1498718200', 'city_id'=>array('0', 'cat_id'=>array('12','96','97','98','99','100','101','102','103','104','105','106','118')));
        $items = K::M('article/article')->items($filter, null, $page, $limit, $count);
        $pager['count'] = $count;
        $this->pagedata['zxitems'] = $items;
        //家居风水文章
        $filter = array('audit'=>1,'hidden'=>'0', 'closed'=>0, 'ontime'=>'<:1498718200', 'city_id'=>array('0', 'cat_id'=>array('13','111','112','113','114','115','116')));
        $items = K::M('article/article')->items($filter, null, $page, $limit, $count);
        $pager['count'] = $count;
        $this->pagedata['jjitems'] = $items;
        //生活家居文章
        $filter = array('audit'=>1,'hidden'=>'0', 'closed'=>0, 'ontime'=>'<:1498718200', 'city_id'=>array('0', 'cat_id'=>array('14','107','108','109','110','119')));
        $items = K::M('article/article')->items($filter, null, $page, $limit, $count);
        $pager['count'] = $count;
        $this->pagedata['shitems'] = $items;


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