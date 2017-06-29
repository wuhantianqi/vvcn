<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:43:54
         compiled from "1d9fdada22099c67ddb04bdd757852a2ae08da31" */ ?>
<?php /*%%SmartyHeaderCode:2787759341caaed5898-31048400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d9fdada22099c67ddb04bdd757852a2ae08da31' => 
    array (
      0 => '1d9fdada22099c67ddb04bdd757852a2ae08da31',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2787759341caaed5898-31048400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59341cab113616_27031197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59341cab113616_27031197')) {function content_59341cab113616_27031197($_smarty_tpl) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                    <p><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['shop_url'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'];?>
</a></b></p>
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
                    <p class="price"><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
                </li>
                <?php }} ?>