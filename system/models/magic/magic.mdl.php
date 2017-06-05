<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: magic.mdl.php 9378 2015-03-27 02:07:36Z youyi $
 */

class Mdl_Magic_Magic extends Model 
{
    

    public function sitecount()
    {
    	if(!$sitecount = $this->cache->get('site-info-count')){
    		$sitecount = array('member'=>0, 'designer'=>0,'mechanic'=>0, 'company'=>0, 'shop'=>0, 'tenders'=>0, 'product'=>0, 'case'=>0);
    		$sitecount['member'] = K::M('member/member')->count();
            $sitecount['designer'] = K::M('designer/designer')->count();
    		$sitecount['mechanic'] = K::M('mechanic/mechanic')->count();
    		$sitecount['company'] = K::M('company/company')->count();
    		$sitecount['shop'] = K::M('shop/shop')->count();
            $sitecount['tenders'] = K::M('tenders/tenders')->count();
    		$sitecount['product'] = K::M('product/product')->count();
    		$sitecount['case'] = K::M('case/case')->count();
    		$this->cache->set('site-info-count', $sitecount, 86400);
    	}
    	return $sitecount;
    }
}