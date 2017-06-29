<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: help.ctl.php 14858 2015-08-05 14:39:40Z maoge $
 */

class Ctl_Help extends Ctl 
{
    
     public $_call = 'index';     
     
     public function index($page)
     {
        $page = htmlspecialchars($page);
        $city_id = $this->request['city_id'];
        if(!$detail = K::M('article/article')->item_by_page($page,$city_id)){
            $this->err->add('没有您要查看的内容', 211);
        }else{
            $items =  K::M('article/article')->items(array('from'=>'help','closed'=>0, 'audit'=>1, 'hidden'=>0,'city_id'=>$city_id), null,1,50); 
            $this->pagedata['cate_list'] = K::M('article/cate')->fetch_all();
            $this->pagedata['page'] = $page;
            $this->pagedata['items'] = $items;
            $this->pagedata['detail'] = $detail;
            $cate = K::M('article/cate')->cate($detail['cat_id']);
            $this->seo->init('article_detail',array(
                'title'         =>   $detail['title'],
                'cate_title'        =>$cate['title'],
                'cate_name'        =>$cate['title'],
                'cate_seo_title'    => $cate['seo_title'],
                'cate_seo_keywords' => $cate['seo_keywords'],
                'cate_seo_description' => $cate['seo_description']               
            ));
            if($seo_title = $detail['seo_title']){
                $this->seo->set_title($seo_title);
            }
            if($seo_description = $detail['seo_description']){
                $this->seo->set_description($seo_description);
            }
            if($seo_keywords = $detail['seo_keywords']){
                $this->seo->set_keywords($seo_keywords);
            }
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'help/help.html';
        }
     }    
}