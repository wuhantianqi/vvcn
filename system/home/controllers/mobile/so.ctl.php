<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: so.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */

class Ctl_Mobile_So extends Ctl_Mobile
{
    
    public function index($city_id=null)
    {
		$pager['backurl'] = $this->mklink('mobile');
		$this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile/so/so.html';
    }
}
?>