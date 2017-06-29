<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: passport.ctl.php 10098 2015-05-06 14:44:00Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Mobile_Passport extends Ctl_Mobile
{
    
    public function  index()
	{
		$pager['backurl'] = $this->mklink('mobile');
        $this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile/passport/login.html';
    }

    public function login()
	{
        if(!$this->checksubmit('data')){
            $this->err->add('非法的数据提交', 211);
        }else if(!$data = $this->GP('data')){
            $this->err->add('非法的数据提交', 212);
        }else if(!$uname = $data['uname']){
             $this->err->add('用户名不正确', 213);
        }else if(!$passwd = $data['passwd']){
            $this->err->add('登录密码不正确', 214);
        }else{
			$verifycode_success = true;
			$access = $this->system->config->get('access');
            if($access['verifycode']['login']){
                if(!$verifycode = $this->GP('verifycode')){
                    $verifycode_success = false;
                    $this->err->add('验证码不正确', 212);
                }else if(!K::M('magic/verify')->check($verifycode)){
                    $verifycode_success = false;
                    $this->err->add('验证码不正确', 212);
                }
            }
            if($verifycode_success){
				$keep = $this->GP('keep') ? true : false;
				$a = K::M('verify/check')->mail($uname) ? 'mail' : 'uname';
				if($member = $this->auth->login($uname, $passwd, $a, false, $keep)){
					$this->err->add("{$member['uname']}，欢迎您回来!");
				}
			}
        } 
    }
     //QQ 联合登录
    public function qqlogin()
	{
        if($url = K::M('member/qqlogin')->qqloign_url()){
            header("Location: {$url}");
            die;
        }        
    }
    
    public function qqcallback()
	{
        if(!$code = $this->GP('code')){
            die('回传地址有问题2');
        }elseif(!$state = $this->GP('state')){
            die('回传地址有问题1');
        }elseif(true == K::M('member/qqlogin')->qqcallback($code,$state)){        
            $forward = K::M('helper/link')->mklink('mobile/ucenter:index', array(), array(), 'base');
            header("Location: {$forward}");
           die;
        }     
    }
    
    public function weibo()
	{
        if($url = K::M('member/weibo')->weibo_url()){
            header("Location: {$url}");
            die;
        }        
    }

    public function weibocallback()
	{
        if(!$code = $this->GP('code')){
            die('回传地址有问题2');
        }if(true == K::M('member/weibo')->weibocallback($code)){        
            $forward = K::M('helper/link')->mklink('mobile/ucenter:index', array(), array(), 'base');
            header("Location: {$forward}");
           die;
        }     
    }
    
    public function loginout()
    {
		@header("Expires: -1");
		@header("Cache-Control: no-store, private, post-check=0, pre-check=0, max-age=0", FALSE);
		@header("Pragma: no-cache");
        $this->auth->loginout();
        header("Location: ".$this->mklink('mobile/index',array(),array(),'base'));
        die;
    }

    public function signup()
    {   
		$pager['backurl'] = $this->mklink('mobile/passport');
        $this->pagedata['pager'] = $pager;
        $this->pagedata['fromlist'] = K::M('member/view')->from_list();
    	$this->tmpl = 'mobile/passport/signup.html';
    }
    public function create()
    {	
    	if(!$this->checksubmit('data')){
    		$this->err->add('非法的数据提交', 211);
    	}else if(!$data = $this->GP('data')){
            $this->err->add('非法的数据提交', 212);
        }else if($data['passwd'] != $this->GP('confirmpasswd')){
            $this->err->add('两次输入的密码不相同', 213);
        }else{
			$access = $this->system->config->get('access');
			$verifycode_success = true;
            if($access['verifycode']['signup']){
                if(!$verifycode = $this->GP('verifycode')){
                    $verifycode_success = false;
                    $this->err->add('验证码不正确', 212);
                }else if(!K::M('magic/verify')->check($verifycode)){
                    $verifycode_success = false;
                    $this->err->add('验证码不正确', 212);
                }
            }
			if($verifycode_success){
				if($uid = K::M('member/account')->create($data)){
                    $this->err->set_data('forward', $this->mklink('mobile/ucenter'));
					$this->err->add('恭喜您，注册会成功');
				}
			}
        }
    }
}