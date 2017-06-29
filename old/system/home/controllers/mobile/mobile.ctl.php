<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: mobile.ctl.php 10353 2015-05-20 14:58:12Z xiaorui $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}
define('IN_MOBILE', true);

class Ctl_Mobile extends Ctl 
{
    
    public function __construct(&$system)
    {
        parent::__construct($system);
        $this->system->config->get('mobile');
        $this->err->template("mobile/page/notice.html");
    }

    public function check_login()
    {
        if(!$this->uid){
            if($this->request['XREQ'] || $this->request['MINI']){
                $this->err->add('很抱歉，你还没有登录不能访问', 101);
            }else{
                $this->tmpl = 'mobile/passport/login.html';
            }
            $this->err->response();
            exit();
        }
        return true;
    }

    protected function check_shop(&$shop_id=null)
    {
        if(!$shop_id = (int)$shop_id){
            $this->error(404);
        }else if(!$shop = K::M('shop/shop')->detail($shop_id, true)){
            $this->error(404);
        }else if(empty($shop['audit']) && (empty($this->uid) || ($this->uid != $shop['uid']))){
            $this->err->add('商铺审核中不能访问', 212);
            $this->err->response();
        }
        if($uid = $shop['uid']){
            $shop['member'] = K::M('member/member')->detail($uid);
        }
        if($group_id = $shop['group_id']){
            $shop['group'] = K::M('member/group')->group($group_id);
        }         
        $this->pagedata['shop'] = $shop;
        K::M('shop/shop')->update_count($shop_id, 'views', 1);
        return $shop;
    }

    protected function check_company(&$company_id=null)
    {
        if(!$company_id = (int)$company_id){
            $this->error(404);
        }else if(!$company = K::M('company/company')->detail($company_id, true)){
            $this->error(404);
        }else if(empty($company['audit']) && (empty($this->uid) || ($this->uid != $company['uid']))){
            $this->err->add('商铺审核中不能访问', 212);
            $this->err->response();
        }
        if($uid = $company['uid']){
            $company['member'] = K::M('member/member')->detail($uid);
        }
        if($group_id = $company['group_id']){
            $company['group'] = K::M('member/group')->group($group_id);
        }        
        $this->pagedata['company'] = $company;
        K::M('company/company')->update_count($company_id, 'views', 1);
        return $company; 
    }     

    protected function check_designer($uid)
    {
        if(!$uid = (int)$uid){
            $this->error(404);
        }else if(!$designer = K::M('designer/designer')->detail($uid)){
            $this->error(404);
        }
        if($group_id = $designer['group_id']){
            $designer['group'] = K::M('member/group')->group($group_id);
        }
        $this->pagedata['designer'] = $designer;
        return $designer;
    }

    public function mklink($ctl=null, $args=array(), $params=array(), $http=null, $rewrite=true)
    {
        if(empty($ctl)){
            $ctl = $this->request['ctl'].':'.$this->request['act'];
        }
        if($http === null && !defined('IN_ADMIN')){
            $http = true;
        }
        $mdlpage = K::M('helper/link');
        $mdlpage->page_limit = 3;
        return $mdlpage->mklink($ctl, $args, $params, $http, $rewrite);
    }    

}