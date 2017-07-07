<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

class Ctl_Tuku extends Ctl
{

	public function index(){
        $pager = $filter = $attrs = $attr_ids = $attr_vids = $attr_value_ids = $attr_value_titles = array();
        $order = 0;
        $attr_values = K::M('data/attr')->attrs_by_from('zx:case', true);
        $uri = $this->request['uri'];
        if(preg_match('/items-([\d\-]+)?(-(\d+)).html/i', $uri, $m)){
            $page = (int)$m[3];
            if($m[1]){
                $attr_vids = explode('-', trim($m[1], '-'));
                $order = $attr_vids ? array_pop($attr_vids) : 0;
            }
        }
        foreach($attr_values as $k=>$v){
            if($v['filter']){
                $attr_value_ids[$k] = 0;
                foreach($attr_vids as $vv){
                    if($v['values'][$vv]){
                        $attr_value_ids[$k] = $vv;
                        $attr_ids[$k] = $vv;
                        $attrs[$k] = $v['values'][$vv];
                        $attr_value_titles[$k] = $v['values'][$vv]['title'];
                    }
                }
            }
        }
        $attr_vids = $attr_ids;    
        foreach($attr_values as $k=>$v){
            $vids = $attr_value_ids;
            $vids[$k] = 0;
            $vids['order'] = $order;
            $vids['page'] = 1;
            $v['link'] = $this->mklink('case:items', array(implode('-', $vids)));
            $v['checked'] = true;
            foreach($v['values'] as $kk=>$vv){
                $vv['checked'] = false;
                if(in_array($kk, $attr_ids)){
                    $v['checked'] = false;
                    $vv['checked'] = true;
                }                
                $vids[$k] = $kk;
                $vv['link'] = $this->mklink('case:items', array(implode('-', $vids)));
                $v['values'][$kk] = $vv;

            }
            $attr_values[$k] = $v;
        }
        $order_list = array(0=>array('title'=>'今日推荐'), 1=>array('title'=>'最受欢迎 '), 2=>array('title'=>'人气排行'));
        $order_list[0]['link'] = $this->mklink('case:items', array(implode('-', $attr_value_ids), 0, 1));
        $order_list[1]['link'] = $this->mklink('case:items', array(implode('-', $attr_value_ids), 1, 1));
        $order_list[2]['link'] = $this->mklink('case:items', array(implode('-', $attr_value_ids), 2, 1));
        $pager = $filter = array();
        $pager['page'] = $page = max((int)$page, 1);
        $pager['order'] = $order;
        $pager['limit'] = $limit = 6;
        $pager['count'] = $count = 0;
        $filter['city_id'] = array($this->request['city_id'], 0);
        $filter['closed'] = 0;
        $filter['audit'] = 1;
        if($attr_ids){
            $filter['attrs'] = $attr_ids;
        }
        if ($kw = $this->GP('kw')) {
            $pager['sokw'] = $kw = htmlspecialchars($kw);
            $params['kw'] = $kw;
            $filter['title'] = "LIKE:%{$kw}%";            
        }
        if($order == 2){
            $orderby = array('likes'=>'DESC');
        }else if($order == 1){
            $orderby = array('views'=>'DESC');
        }else{
            $orderby = NULL;
        }
        if ($items = K::M('case/case')->items($filter, $orderby, $page, $limit, $count)) {
            $lastphotos = array();
            foreach ($items as $k => $val) {
                if ($val['lastphotos']) {
                    $lastphotos[] = $val['lastphotos'];
                    $items[$k]['lastphotos'] = explode(',', $val['lastphotos']);
                }
            }
            if (!empty($lastphotos)) {
                $lastphotos = join(',', $lastphotos);
                $this->pagedata['photos'] = K::M('case/photo')->items_by_ids($lastphotos);
            }
            $pager['count'] = $count;
            $pager['pagebar'] = $this->mkpage($count, $limit, $page, $this->mklink('case:items', array(implode('-', $attr_value_ids), $order, '{page}'), $params));
        }
        $this->pagedata['attr_values'] = $attr_values;
        $this->pagedata['order_list'] = $order_list;
        $this->pagedata['pager'] = $pager;
        $seo = array('attr'=>'', 'page'=>'');
        if($attr_value_titles){
            $seo['attr'] = implode('_', $attr_value_titles);
        }
        if($page > 1){
            $seo['page'] = $page;
        }    
        $this->seo->init('case', $seo);
		$this->tmpl = 'newpage/tuku.html';
	}
	
}