<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * Author @shzhrui<Anhuike@gmail.com>
 * $Id: alipay.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'pid' => 
  array (
    'label' => 'PID',
    'field' => 'pid',
    'type' => 'text',
    'default' => '',
    'comment' => '支付宝签约的商户号',
    'html' => false,
    'empty' => false,
  ),
  'key' => 
  array (
    'label' => 'KEY',
    'field' => 'key',
    'type' => 'text',
    'default' => '',
    'comment' => '支付宝签约的商户KEY',
    'html' => false,
    'empty' => false,
  ),
  'type' => 
  array (
    'label' => '接口类型',
    'field' => 'type',
    'type' => 'select',
    'default' => '',
    'comment' => '支付接口类型',
    'html' => false,
    'empty' => false,
  ),
  'sell' => 
  array (
    'label' => '卖家账号',
    'field' => 'sell',
    'type' => 'text',
    'default' => '',
    'comment' => '卖家账号',
    'html' => false,
    'empty' => false,
  ),
);