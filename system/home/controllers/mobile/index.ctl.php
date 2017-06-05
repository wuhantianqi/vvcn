<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: index.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Mobile_Index extends Ctl_Mobile
{
    
    public function index()
    {
        $this->seo->init('mobile');
        $this->tmpl = 'mobile/index.html';
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