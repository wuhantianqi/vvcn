<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:26
         compiled from "f18f6e69b48986030992cb7777b94e17e70dfae5" */ ?>
<?php /*%%SmartyHeaderCode:19575933f7feae6467-16334092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18f6e69b48986030992cb7777b94e17e70dfae5' => 
    array (
      0 => 'f18f6e69b48986030992cb7777b94e17e70dfae5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19575933f7feae6467-16334092',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7feb44410_59380183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7feb44410_59380183')) {function content_5933f7feb44410_59380183($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
<?php } ?>
<?php }} ?>