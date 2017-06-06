<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Weixin_Coupon extends Ctl_Weixin
{
	public function index()
    {
        exit();
    }

	public function detail($coupon_id=null)
    {
		if(!($coupon_id = (int)$coupon_id) && !($coupon_id = $this->GP('coupon_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('weixin/coupon')->detail($coupon_id)){
            $this->err->add('该优惠券不存在或已经删除', 212);
        }else{
			if(empty($openid)){
				$openid = $this->access_openid();
			}
			$client = $this->wechat_client();
			$wx_info = $client->getUserInfoById($openid);
			
			$list = K::M('weixin/couponsn')->items(array('coupon_id'=>$coupon_id,'openid'=>$openid));
			K::M('weixin/coupon')->update_count($coupon_id, 'views', 1);
			$this->pagedata['my_sn_list'] = $list;
			$this->pagedata['detail'] = $detail;
			$condition = array ();
			$detail ['max_count'] > 0 && $condition [] = '每人最多可领取' . $detail ['max_count'] . '张';
			$detail ['follower_condtion'] == 1 && $condition [] = '必须微信关注后才能领取';
			$detail ['member_condtion'] == 1 && $condition [] = '必须是平台会员才能领取';

			$this->pagedata['condition'] = $condition;

			$member =  K::M('member/weixin')->detail_by_openid($openid);

			if (!empty ( $detail ['ltime'] ) && $detail ['ltime'] <= time ()) {
				$error = '您来晚啦';
			} else if ($detail ['num']<=$detail['down_count']) {
				$error = '优惠券已经领取光啦';
			}else if ($detail ['max_count'] > 0 && $detail ['max_count'] <= count($list)) {
				$error = '您的领取名额已用完啦';
			} else if ($detail ['follower_condtion'] == 1 && $wx_info['subscribe'] == 0) {
				switch ($detail ['follower_condtion']) {
					case 1 :
						$error = '关注后才能领取';
						break;
				}
			}else if ($detail ['member_condtion'] == 1 && !$member['uname']) {
				$error = '用户注册后才能领取';
			}
			$this->pagedata['error'] = $error;
			$this->tmpl = 'weixin/coupon/detail.html';
		}
    }

	public function preview($wx_id)
	{
        if(!$wx_id){
            $this->err->add('未指定内容ID', 211);
        }else if(!$items = K::M('weixin/coupon')->items(array('wx_id'=>$wx_id))){
            $this->err->add('该商家优惠券不存在', 212);
        }else{
			$this->pagedata['items'] = $items;
			$this->pagedata['time'] = time();


			if(empty($openid)){
				$openid = $this->access_openid();
			}
			//$openid = '999999';
			
			$list1 = K::M('weixin/couponsn')->items(array('wx_id'=>$wx_id,'openid'=>$openid,'is_use'=>1));
			$list2 = K::M('weixin/couponsn')->items(array('wx_id'=>$wx_id,'openid'=>$openid,'is_use'=>0));
			$this->pagedata['list1'] = $list1;
			$this->pagedata['list2'] = $list2;
			$this->tmpl = 'weixin/coupon/prev.html';
		}
	}

    public function preview1($wx_id=null)
	{
		$url = $this->request['city']['siteurl'].'/weixin/coupon-preview-'.$wx_id.'.html';
		echo '<img alt="模式一扫码支付" src="/qrcode?data='.urlencode($url).'&size=13"/>';
		exit;
	}
    public function preview2($coupon_id=null)
	{
		$url = $this->request['city']['siteurl'].'/weixin/coupon-detail-'.$coupon_id.'.html';
		echo '<img alt="模式一扫码支付" src="/qrcode?data='.urlencode($url).'&size=13"/>';
		exit;
	}
	public function sign($coupon_id=null)
	{
		if(!($coupon_id = (int)$coupon_id) && !($coupon_id = $this->GP('coupon_id'))){
            $this->err->add('未指定要修改的内容ID', 211);
        }else if(!$detail = K::M('weixin/coupon')->detail($coupon_id)){
            $this->err->add('该优惠券不存在或已经删除', 212);
        }else{
			///*
			if(empty($openid)){
				$openid = $this->access_openid();
			}
			$client = $this->wechat_client();
			$wx_info = $client->getUserInfoById($openid);
			
			$member =  K::M('member/weixin')->detail_by_openid($openid);
			//*/
			$openid = '999999';
			$wx_info['nickname'] = 'xxxxx';

			$list = K::M('weixin/couponsn')->items(array('coupon_id'=>$coupon_id,'openid'=>$openid));
			
			if (! empty ( $detail ['ltime'] ) && $detail ['ltime'] <= time ()) {
				$error = '您来晚啦';
			} else if ($detail ['max_count'] > 0 && $detail ['max_count'] <= count($list)) {
				$error = '您的领取名额已用完啦';
			} else if ($detail ['num']<=$detail['down_count']) {
				$error = '优惠券已经领取光啦';
			}else if ($detail ['follower_condtion'] && $wx_info['subscribe'] == 0) {
				switch ($detail ['follower_condtion']) {
					case 1 :
						$error = '关注后才能领取';
						break;
				}
			}else if ($detail ['member_condtion'] == 1 && !$member['uname']) {
				$error = '用户注册后才能领取';
			}else{
				$data ['sn'] = uniqid ();
				$data ['uid'] = $member['uid'];
				$data['wx_id'] = $detail['wx_id'];
				$data['coupon'] = $coupon_id;
				$data['openid'] = $openid;
				$data['nickname'] = $wx_info['nickname'];
				if($sn = K::M('weixin/couponsn')->create($data)){
					K::M('weixin/coupon')->update_count($coupon_id, 'down_count', 1);
					header('Location: coupon-show-'.$sn);
				}else {
					$error = '领取会员卡后才能领取';
				}
			}
			if($error){
				$this->pagedata['error'] = $error;
				$this->tmpl = 'weixin/coupon/over.html';
			}
		}
	}

	public function show($sn)
	{
		if(!($sn = (int)$sn) && !($sn = $this->GP('sn'))){
            $this->err->add('非法访问', 211);
        }else if(!$detail = K::M('weixin/couponsn')->detail($sn)){
            $this->err->add('非法访问', 212);
        }else if(!$coupon = K::M('weixin/coupon')->detail($detail['coupon'])){
            $this->err->add('非法访问', 212);
        }else{
			$this->pagedata['detail'] = $detail;
			$condition = array ();
			$coupon ['max_count'] > 0 && $condition [] = '每人最多可领取' . $coupon ['max_count'] . '张';
			$coupon ['follower_condtion'] == 1 && $condition [] = '必须微信关注后才能领取';
			$coupon ['member_condtion'] == 1 && $condition [] = '必须是平台会员才能领取';
			$this->pagedata['coupon'] = $coupon;
			$this->pagedata['condition'] = $condition;
			$this->pagedata['detail'] = $detail;
			$this->tmpl = 'weixin/coupon/show.html';
		}
	}
}