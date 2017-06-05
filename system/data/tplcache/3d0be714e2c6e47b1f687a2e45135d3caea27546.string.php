<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:17
         compiled from "3d0be714e2c6e47b1f687a2e45135d3caea27546" */ ?>
<?php /*%%SmartyHeaderCode:3165359352e4508e512-75827777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '3165359352e4508e512-75827777',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e450a1d97_31792001',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e450a1d97_31792001')) {function content_59352e450a1d97_31792001($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span  class="long"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['contact'],3);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['style_title'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span></li>
                    <?php }} ?>