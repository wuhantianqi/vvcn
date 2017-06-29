<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:52
         compiled from "widget:attr/show.html" */ ?>
<?php /*%%SmartyHeaderCode:42305933f5c0dcc5b8-71878242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e74b284686b797d091b8c8acb8a4ba286bfc52e2' => 
    array (
      0 => 'widget:attr/show.html',
      1 => 1429266712,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '42305933f5c0dcc5b8-71878242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'attr' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5c0e598d0_19972382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5c0e598d0_19972382')) {function content_5933f5c0e598d0_19972382($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
	<p><?php echo $_smarty_tpl->tpl_vars['attr']->value['title'];?>
：
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['attr_value_id'],$_smarty_tpl->tpl_vars['data']->value['value'])){?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?>
			<?php } ?>
    </p>
<?php } ?><?php }} ?>