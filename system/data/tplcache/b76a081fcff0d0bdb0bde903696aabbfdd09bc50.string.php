<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:16
         compiled from "b76a081fcff0d0bdb0bde903696aabbfdd09bc50" */ ?>
<?php /*%%SmartyHeaderCode:2743959352e44e039a0-95549196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b76a081fcff0d0bdb0bde903696aabbfdd09bc50' => 
    array (
      0 => 'b76a081fcff0d0bdb0bde903696aabbfdd09bc50',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2743959352e44e039a0-95549196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e44e1b0a0_23817659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e44e1b0a0_23817659')) {function content_59352e44e1b0a0_23817659($_smarty_tpl) {?>
                <?php if ($_smarty_tpl->tpl_vars['iteration']->value%5==1){?>
                <li class="first">
                <?php }else{ ?>
                <li>
                <?php }?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
                    <p><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></b></p>
                    <p>设计方案：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
套</font></p>
                </li>                
                <?php }} ?>