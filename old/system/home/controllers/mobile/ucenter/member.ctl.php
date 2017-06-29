<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: member.ctl.php 9372 2015-03-26 06:32:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}
class Ctl_Mobile_Ucenter_Member extends Ctl_Mobile_Ucenter
{

	public function tenderDetail($tenders_id)
	{
		if(!$tenders_id = (int)$tenders_id){
            $this->error(404);
        }else if(!$detail = K::M('tenders/tenders')->detail($tenders_id)){
            $this->err->add('查看的招标不存在或已经删除', 211);
        }else if($detail['uid'] != $this->uid){
            $this->err->add('您没有权限查看该招标', 212);
        }else{
            if($look_list = K::M('tenders/look')->items_by_tenders($tenders_id)){
                $uids = array();
                foreach($look_list as $k=>$v){
                    $uids[$v['uid']] = $v['uid'];
                }
                $this->pagedata['look_list'] = $look_list;
                if($uids){
                    if($member_list = K::M('member/member')->items_by_ids($uids)){
                        $company_uids = array();
                        foreach($member_list as $v){
                            $company_uids[$v['uid']]  = $v['uid'];
                        }
                        if($company_uids){
                            $this->pagedata['company_list'] = K::M('company/company')->items_by_uids($company_uids);
                        }
                    }
                }
            }
			$pager['backurl'] = $this->mklink('mobile/ucenter');
            $this->pagedata['pager'] = $pager;
            $this->pagedata['detail'] = $detail;
            $this->tmpl = 'mobile/ucenter/member/tenderDetail.html';
        }
	}

	public function signLook($look_id)
    {
        if(!$look_id = (int)$look_id){
            $this->error(404);
        }else if(!$look = K::M('tenders/look')->detail($look_id)){
            $this->err->add('竞标不存在或已经删除', 211);
        }else if(!$tenders = K::M('tenders/tenders')->detail($look['tenders_id'])){
            $this->err->add('招标不存或已经删除', 212);
        }else if($tenders['uid'] != $this->uid){
            $this->err->add('你没有权限操作该招标信息', 213);
        }else if(empty($tenders['audit'])){
            $this->err->add('该招标还在审核中，不可操作', 214);
        }else if($tenders['sign_uid']){
            $this->err->add('已经有中标者，不可重复设置', 215);
        }else if(K::M('tenders/look')->sign($look_id)){
            $this->err->add('设置中标成功');
        }
    }
}