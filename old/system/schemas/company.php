<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: company.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'company_id' => 
  array (
    'field' => 'company_id',
    'label' => 'ID',
    'pk' => true,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'uid' => 
  array (
    'field' => 'uid',
    'label' => '管理者ID',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'group_id' => 
  array (
    'field' => 'group_id',
    'label' => '等级',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),  
  'city_id' => 
  array (
    'field' => 'city_id',
    'label' => '城市',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'city',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'area_id' => 
  array (
    'field' => 'area_id',
    'label' => '地区',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'area',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'domain' => 
  array (
    'field' => 'domain',
    'label' => '个性域名',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),  
  'title' => 
  array (
    'field' => 'title',
    'label' => '名称',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'name' => 
  array (
    'field' => 'name',
    'label' => '公司名称',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'slogan' => 
  array (
    'field' => 'slogan',
    'label' => '服务口号',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'logo' => 
  array (
    'field' => 'logo',
    'label' => '长方形LOGO',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'thumb' => 
  array (
    'field' => 'thumb',
    'label' => '缩略图',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'photo',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'contact' => 
  array (
    'field' => 'contact',
    'label' => '联系人',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'phone' => 
  array (
    'field' => 'phone',
    'label' => '电话',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => true,
    'type' => 'phone',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
    'qq' => 
  array (
    'field' => 'qq',
    'label' => 'QQ',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'qq',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
    'mobile' => 
  array (
    'field' => 'mobile',
    'label' => '手机',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'phone',
    'comment' => '',
    'default' => '',
    'SO' => 'like',
  ),
  'addr' => 
  array (
    'field' => 'addr',
    'label' => '地址',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'xiaobao' => 
  array (
    'field' => 'xiaobao',
    'label' => '保障金',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'score' => 
  array (
    'field' => 'score',
    'label' => '评分',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '50',
    'SO' => false,
  ),
  
  'audit' => 
  array (
    'field' => 'audit',
    'label' => '是否审核',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'radio',
    'comment' => '',
    'default' => '',
    'SO' => '=',
  ),
  'orderby' => 
  array (
    'field' => 'orderby',
    'label' => '排序',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'lng' => 
  array (
    'field' => 'lng',
    'label' => '经度',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'lat' => 
  array (
    'field' => 'lat',
    'label' => '维度',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'text',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'closed' => 
  array (
    'field' => 'closed',
    'label' => '删除',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'bool',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
    'case_num' => 
  array (
    'field' => 'case_num',
    'label' => '案例数',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => true,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
    'score1' => 
    array (
      'field' => 'score1',
      'label' => 'score1',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
     'score2' => 
    array (
      'field' => 'score2',
      'label' => 'score2',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
     'score3' => 
    array (
      'field' => 'score3',
      'label' => 'score3',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
     'score4' => 
    array (
      'field' => 'score4',
      'label' => 'score4',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
    'score5' => 
    array (
      'field' => 'score5',
      'label' => 'score5',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
    'comments' => 
    array (
      'field' => 'comments',
      'label' => '点评数',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
    'tenders_num' => 
    array (
      'field' => 'tenders_num',
      'label' => '投标数',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '0',
      'SO' => '=',
    ),
	'tenders_sign' => 
    array (
      'field' => 'tenders_sign',
      'label' => '签单数',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '0',
      'SO' => '=',
    ),
    'is_vip' => 
    array (
      'field' => 'is_vip',
      'label' => '是否是VIP',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
      'site_num' => 
    array (
      'field' => 'site_num',
      'label' => '工地数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'news_num' => 
    array (
      'field' => 'news_num',
      'label' => '新闻数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'youhui_num' => 
    array (
      'field' => 'youhui_num',
      'label' => '优惠数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'yuyue_num' => 
    array (
      'field' => 'yuyue_num',
      'label' => '预约数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
    'last_case' => 
    array (
      'field' => 'last_case',
      'label' => '最后发布案例时间',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'lasttime' => 
    array (
      'field' => 'lasttime',
      'label' => '结束时间',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'video' => 
	  array (
		'field' => 'video',
		'label' => '视频地址',
		'pk' => false,
		'add' => true,
		'edit' => true,
		'html' => false,
		'empty' => true,
		'show' => false,
		'list' => true,
		'type' => 'text',
		'comment' => '',
		'default' => '',
		'SO' => 'like',
	  ),
    'last_site' => 
    array (
      'field' => 'site_time',
      'label' => '最后发布工地时间',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
     'views' => 
    array (
      'field' => 'views',
      'label' => 'PV数',
      'pk' => false,
      'add' => true,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '0',
      'SO' => '=',
    ), 
    'verify_name' => 
    array (
      'field' => 'verify_name',
      'label' => '验证',
      'pk' => false,
      'add' => false,
      'edit' => true,
      'html' => false,
      'empty' => true,
      'show' => false,
      'list' => true,
      'type' => 'number',
      'comment' => '',
      'default' => '',
      'SO' => '=',
    ),
	'clientip' => 
  array (
    'field' => 'clientip',
    'label' => '创建IP',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'clientip',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'flushtime' => 
  array (
    'field' => 'flushtime',
    'label' => '刷新时间',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => true,
    'show' => true,
    'list' => true,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'dateline' => 
  array (
    'field' => 'dateline',
    'label' => '创建时间',
    'pk' => false,
    'add' => false,
    'edit' => false,
    'html' => false,
    'empty' => false,
    'show' => true,
    'list' => false,
    'type' => 'dateline',
    'comment' => '',
    'default' => '',
    'SO' => 'betweendate',
  ),
    
    
);