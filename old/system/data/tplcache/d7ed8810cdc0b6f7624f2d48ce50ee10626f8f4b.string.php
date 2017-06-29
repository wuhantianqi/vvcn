<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:18:26
         compiled from "d7ed8810cdc0b6f7624f2d48ce50ee10626f8f4b" */ ?>
<?php /*%%SmartyHeaderCode:1033593408a210fc93-18487283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7ed8810cdc0b6f7624f2d48ce50ee10626f8f4b' => 
    array (
      0 => 'd7ed8810cdc0b6f7624f2d48ce50ee10626f8f4b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1033593408a210fc93-18487283',
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
  'unifunc' => 'content_593408a250a674_33970034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408a250a674_33970034')) {function content_593408a250a674_33970034($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id'],'arg1'=>'1'),$_smarty_tpl);?>
<?php }?>" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
					<p class="sp"><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
【<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'];?>
】</a></b></p>
					<p class="price"><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
				</li>
				<?php }} ?>