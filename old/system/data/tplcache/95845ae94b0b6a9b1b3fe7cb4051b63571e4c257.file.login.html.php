<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:21:27
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\passport\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3234959340957926628-86463279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95845ae94b0b6a9b1b3fe7cb4051b63571e4c257' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\passport\\login.html',
      1 => 1433122060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3234959340957926628-86463279',
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
  'unifunc' => 'content_59340957b41aa5_76248785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340957b41aa5_76248785')) {function content_59340957b41aa5_76248785($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员登录", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subwd">
	<!--主体内容开始-->
	<div class="login_box">
		<div class="login_lt lt">
		<h2>会员登录</h2>
		<form action="<?php echo smarty_function_link(array('ctl'=>'passport:login'),$_smarty_tpl);?>
" method="post" mini-form="login">
			<table>
				<tr>
					<td class="title">用户名</td>
					<td class="middle">
						<p class="input"><span class="ico_list username_ico lt"></span>
							<input class="text lt"  name="account[uname]" type="text" placeholder="请输入您的用户名" />
						</p>
					</td>
					<td></td>
				</tr>
				<tr>
					<td class="title">密码</td>
					<td class="middle">
						<p class="input"><span class="ico_list password_ico lt"></span>
							<input class="text lt" name="account[passwd]" type="password" placeholder="请输入您的用户密码" />
						</p>
					</td>
					<td></td>
				</tr>
				<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['login']){?>
				<tr>
					<td class="title">验证码</td>
					<td class="middle">
						<p class="input short lt">
							<span class="ico_list yanzheng_ico"></span>
							<input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
						</p>
						<div class="rt"><img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/></div>
				</td>
				<td></td>
				</tr>
				<?php }?>
				<tr>
					<td></td>
					<td class="middle">
						<label class="lt">
						<input type="checkbox" class="check" />
						30天之内自动登录</label>
						<a class="fontcl2 rt"  href="<?php echo smarty_function_link(array('ctl'=>'passport:forgot'),$_smarty_tpl);?>
">忘记密码？</a>
					</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td class="middle">
						<input type="submit" class="btn" value="立即登录" />
					</td>
					<td></td>
				</tr>
			</table>
		</form>
	</div>
	<div class="login_rt rt">
		<h2>没有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport:reg'),$_smarty_tpl);?>
" class="fontcl2">立即注册</a>
		</h2>
		<img src="/themes/default/static/images/login_img.jpg" />
		<h3>第三方账号登录：</h3>
		<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:weibo'),$_smarty_tpl);?>
" class="ico_list weibo_login"></a>
		</p>
		<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport:qqlogin'),$_smarty_tpl);?>
" class="ico_list qq_login"></a>
		</p>
	</div>
	<div class="cl"></div>
</div>
<!--主体内容结束-->
</div>
<!--底边内容开始-->
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>