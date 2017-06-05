<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:54:06
         compiled from "widget:article/cate_options.html" */ ?>
<?php /*%%SmartyHeaderCode:3091059352a3ef0d953-05719445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0beab58a21577a5a1988df6b3fb3501d2f1a19' => 
    array (
      0 => 'widget:article/cate_options.html',
      1 => 1430718955,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '3091059352a3ef0d953-05719445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'vv' => 0,
    'vvv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352a3f029175_66383473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352a3f029175_66383473')) {function content_59352a3f029175_66383473($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"<?php if ((is_array($_smarty_tpl->tpl_vars['data']->value['value'])&&in_array($_smarty_tpl->tpl_vars['v']->value['cat_id'],$_smarty_tpl->tpl_vars['data']->value['value']))||$_smarty_tpl->tpl_vars['v']->value['cat_id']==$_smarty_tpl->tpl_vars['data']->value['value']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['vv']->value['cat_id'];?>
"<?php if ((is_array($_smarty_tpl->tpl_vars['data']->value['value'])&&in_array($_smarty_tpl->tpl_vars['vv']->value['cat_id'],$_smarty_tpl->tpl_vars['data']->value['value']))||$_smarty_tpl->tpl_vars['vv']->value['cat_id']==$_smarty_tpl->tpl_vars['data']->value['value']){?>selected="selected"<?php }?>>&nbsp;&nbsp;├─<?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</option>
<?php  $_smarty_tpl->tpl_vars['vvv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vvv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['vv']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vvv']->key => $_smarty_tpl->tpl_vars['vvv']->value){
$_smarty_tpl->tpl_vars['vvv']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['vvv']->value['cat_id'];?>
"<?php if ((is_array($_smarty_tpl->tpl_vars['data']->value['value'])&&in_array($_smarty_tpl->tpl_vars['vvv']->value['cat_id'],$_smarty_tpl->tpl_vars['data']->value['value']))||$_smarty_tpl->tpl_vars['vvv']->value['cat_id']==$_smarty_tpl->tpl_vars['data']->value['value']){?>selected="selected"<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;├─<?php echo $_smarty_tpl->tpl_vars['vvv']->value['title'];?>
</option>
<?php } ?>
<?php } ?>
<?php } ?><?php }} ?>