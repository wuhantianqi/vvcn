<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:15:54
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\block\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:303395935214ab34c88-85493440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e676141fc9bb1aa47a6150e9b9c56b31c5c9b69' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\block\\footer.html',
      1 => 1429266762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303395935214ab34c88-85493440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5935214ab54097_67781115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935214ab54097_67781115')) {function content_5935214ab54097_67781115($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
?><div class="main_footer">
	<div class="main_footer_top">
		<div class="subwd ">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<ul>
				<li><span><{$item.title}></span></li>
				<{calldata mdl='article/article' from="help" city_id=$request.city_id cat_id=$item.cat_id}>
				<li><a href="<{link ctl='help' arg0=$item.page}>"><{$item.title}></a></li>
				<{/calldata}>
			</ul>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>"2",'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<ul>
				<li><span>手机客户端</span></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'app'),$_smarty_tpl);?>
" class="index_ico dowload_ico"></a>
				</li>
			</ul>
			<ul class="main_footer_weixin">
				<li><img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['weixinqr'];?>
<?php }else{ ?>/themes/default/static/images/weixin.jpg<?php }?>" width="86" height="86"/></li>
				<li><span>扫一扫  好礼相赠</span></li>
			</ul>
		</div>
	</div>
	<div class="cl"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("block/sfooter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!--底部内容结束-->
<?php echo smarty_function_widget(array('id'=>"public/kefu"),$_smarty_tpl);?>

</body>
</html>
<?php }} ?>