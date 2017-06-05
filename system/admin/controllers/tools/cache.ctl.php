<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: cache.ctl.php 9378 2015-03-27 02:07:36Z youyi $
 */

class Ctl_Tools_Cache extends Ctl
{
    
    public function index()
    {
        
    }

    public function clean()
    {
        if($this->checksubmit()){
            if($this->GP('cache_data')){
                $this->cache->flush();
            }
            $output = K::M('system/frontend');
            if($this->GP('cache_tplcache')){
                $output->clearCompiledTemplate();
            }
            $output->setCompileDir(__CFG::DIR.'data/tpladmin');
            if($this->GP('cache_tpladmin')){
                $output->clearCompiledTemplate();
            }
            $this->err->add('清空数据缓存成功');
            //$this->err->set_data('forward', '?index-welcome.html');            
        }else{
            $this->tmpl = 'admin:tools/cache/index.html';
        }
    }
}