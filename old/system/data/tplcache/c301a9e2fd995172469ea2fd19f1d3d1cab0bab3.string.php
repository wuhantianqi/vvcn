<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:48
         compiled from "c301a9e2fd995172469ea2fd19f1d3d1cab0bab3" */ ?>
<?php /*%%SmartyHeaderCode:248335933f2b0beb661-22976133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c301a9e2fd995172469ea2fd19f1d3d1cab0bab3' => 
    array (
      0 => 'c301a9e2fd995172469ea2fd19f1d3d1cab0bab3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '248335933f2b0beb661-22976133',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b0c79ba3_24408201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b0c79ba3_24408201')) {function content_5933f2b0c79ba3_24408201($_smarty_tpl) {?><div bxSlider='<?php echo $_smarty_tpl->tpl_vars['adv']->value['GUID'];?>
'>
   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><div class="slide"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['clickurl'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['a_attr'];?>
><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" text="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['item_attr'];?>
/></a></div><?php } ?>
</div><?php }} ?>