<?php
/**
 * Copy Right IJH.CC
 * Each engineer has a duty to keep the code elegant
 * $Id: case_attr.php 9378 2015-03-27 02:07:36Z youyi $
 */

if(!defined('__CORE_DIR')){
    exit("Access Denied");
}

return array (
  'case_id' => 
  array (
    'field' => 'case_id',
    'label' => '案例ID',
    'pk' => true,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'attr_id' => 
  array (
    'field' => 'attr_id',
    'label' => '属性ID',
    'pk' => false,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
  'attr_value_id' => 
  array (
    'field' => 'attr_value_id',
    'label' => '属性值ID',
    'pk' => true,
    'add' => true,
    'edit' => true,
    'html' => false,
    'empty' => false,
    'show' => false,
    'list' => false,
    'type' => 'number',
    'comment' => '',
    'default' => '',
    'SO' => false,
  ),
);