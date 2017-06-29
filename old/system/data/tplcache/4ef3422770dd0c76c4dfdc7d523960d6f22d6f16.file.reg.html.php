<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:28:35
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\passport\reg.html" */ ?>
<?php /*%%SmartyHeaderCode:567459340b02ef0a34-15553649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ef3422770dd0c76c4dfdc7d523960d6f22d6f16' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\passport\\reg.html',
      1 => 1429266762,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567459340b02ef0a34-15553649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340b031f3b02_52578221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340b031f3b02_52578221')) {function content_59340b031f3b02_52578221($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("会员注册", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<div class="subwd">
	<!--主体内容开始-->
	<div class="login_box">
		<h2><b class="lt">会员注册</b><span class="rt tit">已有账号？<a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" class="fontcl2">点击登录</a></span></h2>
		<p class="bar register_one"></p>
		<ul class="register_list">
			<li class="first">
				<p class="tit">业主会员<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'member'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li>
			<li>
				<p class="tit">装修工人<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'mechanic'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li>
			<li>
				<p class="tit">设计师<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'designer'),$_smarty_tpl);?>
" class="btn btn_main_big">立即注册</a>
			</li>
			<li class="first">
				<p class="tit">装修公司<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'company'),$_smarty_tpl);?>
" class="btn btn_main_big shangjia_btn">立即注册</a>
			</li>
			<li>
				<p class="tit">建材商家<font class="fontcl2">（注册）</font></p>
				<p>晒晒自己的装修日记，向大家展示自己装修成果，与大家共同分享装修过程。</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'passport:signup','arg0'=>'shop'),$_smarty_tpl);?>
" class="btn btn_main_big shangjia_btn">立即注册</a>
			</li>
          
		</ul>
	</div>
	<!--主体内容结束-->
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>