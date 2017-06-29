<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:09:14
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\chuanlian.html" */ ?>
<?php /*%%SmartyHeaderCode:20135934067a718ca4-16860470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a29a93089d1efe3f306236d409ffe88777f26d' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\chuanlian.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20135934067a718ca4-16860470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'tool' => 0,
    'tools_array' => 0,
    'k' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5934067aa58696_48435438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5934067aa58696_48435438')) {function content_5934067aa58696_48435438($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<SCRIPT>

function IsDigit(cCheck)
{
return ((('0'<=cCheck) && (cCheck<='9'))||cCheck=='.');
}
function CheckNum(charValue,alertValue,obj)
{
for(var iIndex=0;iIndex<charValue.length;iIndex++)
{
var cCheck=charValue.charAt(iIndex);
if(!IsDigit(cCheck))
{
alert(alertValue);
obj.focus();
return false;
}
}
}
function window_cloth(form)
{
//检查输入
if(checkclothInput(form)==false) return;
var window_width=0,window_height=0,clothnum=0,clothwidth=0;
//给各个变量赋值
window_width=form.window_width.value;
window_height=form.window_height.value;
clothwidth=form.clothwidth.value;
//开始计算
//<a href="http://ruanzhuang.pchouse.com.cn/chuanglian/" target="_blank" class="cmsLink">窗帘</a>所需布料（米）= [ （窗户宽+0.15米×2）×2] ÷ 布宽×（0.15米+窗户高+0.5米+0.2米）
clothnum=((parseFloat(window_width)+parseFloat(0.15*2))*2)/clothwidth*(parseFloat(0.15)+parseFloat(window_height)+parseFloat(0.5)+parseFloat(0.2))
document.getElementById("rt").innerHTML=clothnum+ "米";
}
function  checkclothInput(form)
{
if(form.window_height.value==""){
alert("请输入窗户高度");
form.window_height.focus();
return false;
}
if(CheckNum(form.window_height.value,"窗户高度只能输入数字格式！",form.window_height)==false)
return false;
if(form.window_width.value==""){
alert("请输入窗户宽度");
form.window_width.focus();
return false;
}
if(CheckNum(form.window_width.value,"窗户宽度只能输入数字格式！",form.window_width)==false)
return false;
if(form.clothwidth.value==""){
alert("请输入布料宽度");
form.clothwidth.focus();
return false;
}
if(CheckNum(form.clothwidth.value,"布料宽度只能输入数字格式！",form.clothwidth)==false)
return false;
}
//-->
</SCRIPT>
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
    	><a href="<?php echo smarty_function_link(array('ctl'=>'tools','arg0'=>'items'),$_smarty_tpl);?>
">工具箱</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'tools','arg0'=>$_smarty_tpl->tpl_vars['tool']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['tools_array']->value[$_smarty_tpl->tpl_vars['tool']->value];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<div class="subwd mb20">
	<!--主体左边内容开始-->
	<div class="about_lt lt">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tools_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<li><a <?php if ($_smarty_tpl->tpl_vars['tool']->value==$_smarty_tpl->tpl_vars['k']->value){?> class="current" <?php }?> href="<?php echo smarty_function_link(array('ctl'=>'tools','arg0'=>$_smarty_tpl->tpl_vars['k']->value),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="about_rt rt">
		<div class="pding">
			<h2 align="center"><?php echo $_smarty_tpl->tpl_vars['tools_array']->value[$_smarty_tpl->tpl_vars['tool']->value];?>
</h2>
			<form name="wallpaperfrm" action="" method="post"  class="counter">
				<h3>1、请您输入居室信息</h3>
				<div>
					<input name="window_height" class="text" placeholder="窗户高度" type="text">
					米
					<input name="window_width" class="text" placeholder="窗户宽度" type="text">
					米 </div>
				<h3>2、请输入布料信息</h3>
				<div>
					布料宽度 : <input name="wallpaperpm" id="clothwidth" value="1.5" class="text" placeholder="布料宽度" type="text">
					米 </div>
				<div class="counter_btn">您所需要布料是：<span id="rt" class="jieguo"></span>
					<input type="button" value="开始计算" onclick="window_cloth(this.form)" class="btn btn_sub_sm">
					<input type="reset" value="重新输入" name="Submit" class="btn again_btn">
				</div>
			</form>
		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>