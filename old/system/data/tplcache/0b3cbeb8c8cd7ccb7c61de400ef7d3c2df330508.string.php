<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:50
         compiled from "0b3cbeb8c8cd7ccb7c61de400ef7d3c2df330508" */ ?>
<?php /*%%SmartyHeaderCode:179135933f2b25a1791-32199294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b3cbeb8c8cd7ccb7c61de400ef7d3c2df330508' => 
    array (
      0 => '0b3cbeb8c8cd7ccb7c61de400ef7d3c2df330508',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '179135933f2b25a1791-32199294',
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
  'unifunc' => 'content_5933f2b2693568_68859504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b2693568_68859504')) {function content_5933f2b2693568_68859504($_smarty_tpl) {?><ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['clickurl'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['a_attr'];?>
><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['item_attr'];?>
/></a></li>
<?php } ?>
</ul><?php }} ?>