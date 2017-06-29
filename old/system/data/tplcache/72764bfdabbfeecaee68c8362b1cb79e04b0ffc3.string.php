<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:26
         compiled from "72764bfdabbfeecaee68c8362b1cb79e04b0ffc3" */ ?>
<?php /*%%SmartyHeaderCode:323125933f7fed4beb1-43653127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72764bfdabbfeecaee68c8362b1cb79e04b0ffc3' => 
    array (
      0 => '72764bfdabbfeecaee68c8362b1cb79e04b0ffc3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '323125933f7fed4beb1-43653127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'index' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7fedd5a94_45663963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7fedd5a94_45663963')) {function content_5933f7fedd5a94_45663963($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?><?php if ($_smarty_tpl->tpl_vars['index']->value<8){?><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],5,'');?>
</a><?php }?><?php }} ?>