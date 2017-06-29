<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:08
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\page\404.html" */ ?>
<?php /*%%SmartyHeaderCode:141445933f7ec9a8ac0-42626437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87205a68cd01fd27ddcbb881a0be9c4f7211976d' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\page\\404.html',
      1 => 1429266774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141445933f7ec9a8ac0-42626437',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7ecc3afa1_70842085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7ecc3afa1_70842085')) {function content_5933f7ecc3afa1_70842085($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="mainwd">
	<div class="error_box">
		<div class="error_cont hoverno">
			<h1>404!</h1>
			<p>对不起，您所访问的页面出现错误！</p>
			<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" class="btn">返回首页</a><a href="javascript:windows.history.back();" class="btn">返回上一页</a>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>







<?php }} ?>