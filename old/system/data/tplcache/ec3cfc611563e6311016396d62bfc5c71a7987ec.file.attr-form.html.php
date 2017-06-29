<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:48
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tenders\attr-form.html" */ ?>
<?php /*%%SmartyHeaderCode:147435933f5bcac8f82-87242257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec3cfc611563e6311016396d62bfc5c71a7987ec' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tenders\\attr-form.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147435933f5bcac8f82-87242257',
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
  'unifunc' => 'content_5933f5bcd4fce3_45289092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5bcd4fce3_45289092')) {function content_5933f5bcd4fce3_45289092($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['attr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['attrs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attr']->key => $_smarty_tpl->tpl_vars['attr']->value){
$_smarty_tpl->tpl_vars['attr']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['v']->index>2){?><?php break 1?><?php }?>
<tr>
    <td class="title"><?php echo $_smarty_tpl->tpl_vars['attr']->value['title'];?>
：</td>
    <td colspan="3">
        <ul class="group-list" style="width:100%">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attr']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?>            
            <?php if ($_smarty_tpl->tpl_vars['attr']->value['multi']=='Y'){?>
            <li style="width:80px;"><label title="<?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
"><input type="checkbox" name="attr[<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value_id'];?>
]"  <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['attr_value_id'],$_smarty_tpl->tpl_vars['data']->value['value'])){?> checked="checked"<?php }?>value="<?php echo $_smarty_tpl->tpl_vars['v']->value['attr_value_id'];?>
"/><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
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