<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:18:26
         compiled from "e64dcbd76cc4960865119a33499506a01f297b62" */ ?>
<?php /*%%SmartyHeaderCode:419593408a2cd0e81-62567168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64dcbd76cc4960865119a33499506a01f297b62' => 
    array (
      0 => 'e64dcbd76cc4960865119a33499506a01f297b62',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '419593408a2cd0e81-62567168',
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
  'unifunc' => 'content_593408a2efaec6_35323636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408a2efaec6_35323636')) {function content_593408a2efaec6_35323636($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
<?php }else{ ?><?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['producdt_id'],'arg1'=>1),$_smarty_tpl);?>
<?php }?>" class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
					<p class="sp"><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
【<?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['shop']['name'];?>
】</a></b></p>
					<p class="price"><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</b><span>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['market_price'];?>
</span></p>
				</li>
				<?php }} ?>