<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:52:53
         compiled from "widget:attr/attr-form.html" */ ?>
<?php /*%%SmartyHeaderCode:187775933f4954346e1-10518998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17322fec1564fdcd3f91310d15d3a484370e7a21' => 
    array (
      0 => 'widget:attr/attr-form.html',
      1 => 1429266712,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '187775933f4954346e1-10518998',
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
  'unifunc' => 'content_5933f4954c62a8_30283222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4954c62a8_30283222')) {function content_5933f4954c62a8_30283222($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
<tr>
	<th><?php echo $_smarty_tpl->tpl_vars['attr']->value['title'];?>
：</th>
	<td<?php if ($_smarty_tpl->tpl_vars['data']->value['colspan']){?> colspan="<?php echo $_smarty_tpl->tpl_vars['data']->value['colspan'];?>
"<?php }?>>
		<ul class="group-list">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['attr']->value['multi']=='Y'){?>
			<li><label title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><input type="checkbox" name="attr[<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value_id'];?>
]"  <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['attr_value_id'],$_smarty_tpl->tpl_vars['data']->value['value'])){?> checked="checked"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value_id'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</label></li>
			<?php }else{ ?>
			<li><label title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><input type="radio" name="attr[<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_id'];?>
][]"  <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['attr_value_id'],$_smarty_tpl->tpl_vars['data']->value['value'])){?> checked="checked"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value_id'];?>
"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</label></li>
			<?php }?>
			<?php } ?>
			<div style="clear:both;"></div>
		</ul>
	</td>
</tr>
<?php } ?><?php }} ?>