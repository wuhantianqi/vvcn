<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:18:25
         compiled from "b0e91355d39c471e695eae9afc5834dccbf334b3" */ ?>
<?php /*%%SmartyHeaderCode:12490593408a1a0def8-90824539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0e91355d39c471e695eae9afc5834dccbf334b3' => 
    array (
      0 => 'b0e91355d39c471e695eae9afc5834dccbf334b3',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '12490593408a1a0def8-90824539',
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
  'unifunc' => 'content_593408a1b8d8d7_76692546',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408a1b8d8d7_76692546')) {function content_593408a1b8d8d7_76692546($_smarty_tpl) {?><ul id="<?php echo $_smarty_tpl->tpl_vars['adv']->value['GUID'];?>
">
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<li class="slider"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['clickurl'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['a_attr'];?>
><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" <?php echo $_smarty_tpl->tpl_vars['item']->value['item_attr'];?>
/></a></li>
<?php } ?>
</ul>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){$('#<?php echo $_smarty_tpl->tpl_vars['adv']->value['GUID'];?>
').bxSlider({minSlides: 4, maxSlides: 4, slideWidth: 360, slideMargin: 5,pager:false});});
})(window.KT, window.jQuery);
</script><?php }} ?>