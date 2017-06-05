<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: booking.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'max_look' => 
  array (
    'label' => ' 最大投标数',
    'field' => 'max_look',
    'type' => 'number',
    'default' => '',
    'comment' => '一个预约最多可多少商家查看',
    'html' => false,
    'empty' => false,
  ),
  'look_gold' => 
  array (
    'label' => '默认金币',
    'field' => 'look_gold',
    'type' => 'number',
    'default' => '',
    'comment' => '查看预约所花的金币',
    'html' => false,
    'empty' => false,
  ),
);