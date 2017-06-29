<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:47
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:31995933f2af1500b3-45756266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ed9f37ca4f51e153e136bff3419efc4407916f4' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\block\\header.html',
      1 => 1433315598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31995933f2af1500b3-45756266',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2af78e458_49794480',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2af78e458_49794480')) {function content_5933f2af78e458_49794480($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $_smarty_tpl->getSubTemplate ("block/sheader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body class="pagewd">
<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
<!--头部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/top-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="main_header">
	<div class="mainwd top_bottom">
		<div class="logo lt">
			<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><img src="<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['logo']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['logo'];?>
<?php }else{ ?>/themes/default/static/images/logo.png<?php }?>" class="logo lt" /></a>
			<p class="lt"><font><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/default/static/images/here.png"><?php echo $_smarty_tpl->tpl_vars['request']->value['city']['city_name'];?>
</font>
				<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['site']['multi_city']){?><a href="<?php echo smarty_function_link(array('ctl'=>'city','http'=>'www'),$_smarty_tpl);?>
" class="fontcl1">[切换城市]</a><?php }?>
			</p>
		</div>
		<div class="search_box lt">
			<?php echo smarty_function_widget(array('id'=>"public/sobox",'sokw'=>$_smarty_tpl->tpl_vars['pager']->value['sokw']),$_smarty_tpl);?>

		</div>
		<div class="site_commitment rt">
			<ul>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><span class="index_ico ico1"></span></a></li>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
"><span class="index_ico ico2"></span></a></li>
			</ul>
		</div>
	</div>
	<div class="main_nav">
		<div class="mainwd hoverno">
			<ul>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='index'){?>class="current"<?php }?>>首页</a>
				</li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='tenders'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='gs'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='designer'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='gz'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mechanic'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='youhui'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
">找装修公司</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'mechanic'),$_smarty_tpl);?>
">找工人</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'youhui'),$_smarty_tpl);?>
">优惠信息</a>
						</li>
					</ul>
				</li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='home'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='site'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
">我搜我家</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
">小区楼盘</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'home:map'),$_smarty_tpl);?>
">楼盘地图</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
">在建工地 </a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
">团装小区</a></li>
					</ul>
				</li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='case'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
">装修案例</a></li>
				<li>
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='article'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='diary'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='ask'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">学装修</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'diary'),$_smarty_tpl);?>
">装修日记</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a></li>
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">装修课堂</a></li>
					</ul>
				</li>
				<li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='activity'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/coupon'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'activity'),$_smarty_tpl);?>
">优惠活动</a>
                 
					<ul class="main_nav_son none">
						<li><a  href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon-items'),$_smarty_tpl);?>
">优惠券</a></li>
					</ul>
				</li>
                 <li><a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='news'){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'news'),$_smarty_tpl);?>
">本地新闻</a>
				</li>
				<li class="last">
					<a <?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/index'||$_smarty_tpl->tpl_vars['request']->value['ctl']=='mall/store'){?>class="current"<?php }?>  href="<?php echo smarty_function_link(array('ctl'=>'mall'),$_smarty_tpl);?>
">家居商城</a>
					<ul class="main_nav_son none">
						<li><a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
">商城主页</a></li>
						<li><a  href="<?php echo smarty_function_link(array('ctl'=>'mall/store'),$_smarty_tpl);?>
">商家列表</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {			
	//绿色导航
	$(".main_nav ul li").mouseover(function(){
		$(this).find(".main_nav_son").show();
		$(this).addClass('current');
	}).mouseleave(function(){
		$(this).removeClass('current');
		$(this).find(".main_nav_son").hide();
		
	});
	//头部登录后效果
	$(".top_nav_login li").mouseover(function(){
		$(this).find('.top_nav_login_son').show();
	}).mouseout(function(){
		$(this).find('.top_nav_login_son').hide();
	});	
	$("font.tp_contactus ").mouseover(function(){
		$(this).find('a.over').addClass('on');
		$('font.tp_contactus ').find('.tp_contactus_box').show();
		$('font.tp_contactus ').find('span.con_ico').addClass('con_ico_over');
	}).mouseout(function(){
		$(this).find('a.over').removeClass('on');
		$('font.tp_contactus ').find('.tp_contactus_box').hide();
		$('font.tp_contactus ').find('span.con_ico').removeClass('con_ico_over');
	});	
});
</script><?php }} ?>