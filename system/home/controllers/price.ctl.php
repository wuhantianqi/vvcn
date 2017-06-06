<?php

/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id$
 */


if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

class Ctl_Price extends Ctl
{
   private  $_price_allow_fields ='style_id,house_type_id,way_id,home_name,level,from';

    public function index()
    {
		$this->pagedata['setting'] = k::M('tenders/setting')->fetch_all_setting();
		$this->pagedata['type'] = k::M('tenders/setting')->get_type();
        K::M('helper/seo')->init('tenders',array());
		if($price = K::M('system/cookie')->get('price')){
			$this->pagedata['is_show'] = '1';
		}
		$this->tmpl = 'price/index.html';
        
    }


	public function get_price($mj)
	{
		$filter['city_id'] = $this->request['city_id'];
		if(!$mj = (int) $mj) {
			$this->error(404);
		}else if(!$items = K::M('price/attr')->items($filter)){
			$this->error(404);
		}else{
			$from = K::M('price/attrfrom')->items();
			$tenders = K::M('tenders/tenders')->items();
			$arr  = array();
			$last_price = $cailiao_price  = '';
			$count = 0;
			foreach($items as $k => $v){
				if(strpos($v['per'],'%')){
					$items[$k]['price'] = ($mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"]+$mj*$v['per']*$v["rengong"])/100;
					$items[$k]['mj'] = ($mj*$v['per'])/100;
					$last_price += $items[$k]['price'];
					$cailiao_price += ($mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"])/100;
				}else{
					$items[$k]['price'] = $mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"]+$mj*$v['per']*$v["rengong"];
					$items[$k]['mj'] = $mj*$v['per'];
					$last_price += $items[$k]['price'];
					$cailiao_price += $mj*$v['per']*$v["zhucai"]+$mj*$v['per']*$v["fucai"];
				}
				$count++;
			}
			foreach($items as $k => $v){
				$arr[$v["pricefrom_id"]][] = $v;
			}
			$this->pagedata['cailiao_price'] = $cailiao_price;
			$this->pagedata['last_price'] = $last_price;
			$this->pagedata['arr'] = $arr;
			$this->pagedata['from'] = $from;
			$this->pagedata['tenders'] = $tenders;
			$this->pagedata['mj'] = $mj;
			$this->pagedata['is_show'] = '1';
			return $last_price;
			//$this->tmpl = 'price/get_price.html';
			//return $this->output(true);
		}
	
	}

	

	public function yuyue()
	{
		if(!$data = $this->GP('data')){
			$this->err->add('您的信息没有填写',201);
		}else if(!$data['mj']){
			$this->err->add('请填写建筑面积',202);
		}else{
			$this->pagedata['data'] = $data;
			$this->tmpl = 'price/yuyue.html';
		}
    }

	public function sendsms($mobile)
	{
		if(!$a = K::M('verify/check')->mobile($mobile)){
			$this->err->add('电话号码有误', 212);
		}else{
			$code = rand(100000,999999);
			$session =K::M('system/session')->start();
            $session->set('price_'.$mobile, $code,900); //15分钟缓存
			$smsdata =  array('code'=>$code);
			if(K::M('sms/sms')->send($mobile, 'price', $smsdata) || true){
				$this->err->add('信息发送成功'.$code);
			}
		}
	}

	public function byphone()
	{
		$session =K::M('system/session')->start();
		if($data = $this->checksubmit('data')){
			if($code = $session->get('price_'.$data['mobile'])){
				if($data['code'] == $code){
					K::M('system/cookie')->set('price','1', 9000);
					if($data){
						$data['city_id'] = empty($data['city_id']) ? $this->request['city_id'] : $data['city_id'];
						if($tenders_id = K::M('tenders/tenders')->create($data)){
							$this->err->add('验证通过，请等待跳转');
							$forward = K::M('helper/link')->mklink('price:index',array('mj'=>$data['mj']));
							$this->err->set_data('forward', $forward);
							$this->err->set_data('html', $this->get_price($data['mj']));
							$this->err->json();
						}
					}
				}else{
					$this->err->add('验证码错误或者已经过期', 212);
				}
			}else{
				$this->err->add('请获取验证码', 215);
			}
		}
	}



}