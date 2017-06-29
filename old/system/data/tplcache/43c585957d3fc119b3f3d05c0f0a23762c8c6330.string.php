<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:31
         compiled from "43c585957d3fc119b3f3d05c0f0a23762c8c6330" */ ?>
<?php /*%%SmartyHeaderCode:226625933f8035f36c7-52851245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43c585957d3fc119b3f3d05c0f0a23762c8c6330' => 
    array (
      0 => '43c585957d3fc119b3f3d05c0f0a23762c8c6330',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '226625933f8035f36c7-52851245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'cate' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f8036afa34_98598657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f8036afa34_98598657')) {function content_5933f8036afa34_98598657($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['cate']->value['cat_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>  class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a><?php }} ?>