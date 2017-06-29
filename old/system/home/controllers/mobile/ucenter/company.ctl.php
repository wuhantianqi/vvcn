<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}
class Ctl_Mobile_Ucenter_Company extends Ctl_Mobile_Ucenter
{
	public function youhuiSign()
	{
		$company = $this->ucenter_company();
        if($items = K::M('company/sign')->items(array('company_id'=>$company['company_id']))){
            $youhui_ids = array();
            foreach($items as $k=>$v){
                $youhui_ids[$v['youhui_id']] = $v['youhui_id'];
            }
            if($youhui_ids){
                $this->pagedata['youhui_list'] = K::M('company/youhui')->items_by_ids($youhui_ids);
            }
            $this->pagedata['items'] = $items;
        }
		$pager['backurl'] = $this->mklink('mobile/ucenter');
		$this->pagedata['pager'] = $pager;
        $this->tmpl = 'mobile/ucenter/company/youhuiSign.html';
	}
}
