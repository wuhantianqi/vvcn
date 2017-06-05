<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:11:29
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\page\404.html" */ ?>
<?php /*%%SmartyHeaderCode:93659352041d62cb9-81758164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5beed49d66f6611e7a6608c9b4a8d6a610a27e09' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\page\\404.html',
      1 => 1429266773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93659352041d62cb9-81758164',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352041d91ac9_25178540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352041d91ac9_25178540')) {function content_59352041d91ac9_25178540($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
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