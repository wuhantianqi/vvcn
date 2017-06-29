<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:49
         compiled from "3d0be714e2c6e47b1f687a2e45135d3caea27546" */ ?>
<?php /*%%SmartyHeaderCode:246205933f2b1d289e4-04646423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d0be714e2c6e47b1f687a2e45135d3caea27546' => 
    array (
      0 => '3d0be714e2c6e47b1f687a2e45135d3caea27546',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '246205933f2b1d289e4-04646423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b1d980f2_83663670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b1d980f2_83663670')) {function content_5933f2b1d980f2_83663670($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span  class="long"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['contact'],3);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['style_title'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span></li>
                    <?php }} ?>