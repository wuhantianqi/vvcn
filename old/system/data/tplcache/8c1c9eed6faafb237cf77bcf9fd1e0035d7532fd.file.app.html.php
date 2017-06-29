<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:30:40
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\app\app.html" */ ?>
<?php /*%%SmartyHeaderCode:1715559341990e72624-50108536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c1c9eed6faafb237cf77bcf9fd1e0035d7532fd' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\app\\app.html',
      1 => 1436751452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1715559341990e72624-50108536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59341991154d33_18324055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59341991154d33_18324055')) {function content_59341991154d33_18324055($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<div class="appBanner">
	<div style="width:100%; height:580px; position:absolute; z-index:2; background:#3492e3 url(<?php echo smarty_function_adv(array('name'=>"APP页面广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
) center center no-repeat;">
		<div class="mainwd">
			<div class="appBanner_tact">
				<div class="appBanner_tact_lt lt"> <a href="<?php echo smarty_function_link(array('ctl'=>'app:iphone','http'=>'www'),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/appBtn1.jpg" alt="苹果下载" title="苹果下载" /></a> <a href="<?php echo smarty_function_link(array('ctl'=>'app:android','http'=>'www'),$_smarty_tpl);?>
" target="_blank"><img src="/themes/default/static/images/appBtn2.jpg" alt="安卓下载" title="安卓下载" /></a> </div>
				<div class="appBanner_tact_rt lt">
					<p>手机扫描二维码快速下载</p>
					<img src="http://qr.liantu.com/api.php?&bg=ffffff&fg=666666&w=255&text=<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['mobile']['url'];?>
"  width="140" height="140"/> </div>
				<div class="cl"></div>
			</div>
		</div>
	</div>
</div>
<div class="appcontent_bg1">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg1.jpg" /> </div>
</div>
<div class="appcontent_bg2">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg2.jpg" /> </div>
</div>
<div class="appcontent_bg3">
	<div class="mainwd"> <img src="/themes/default/static/images/appImg3.jpg" /> </div>
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>