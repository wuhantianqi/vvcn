<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:40:47
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\bizhi.html" */ ?>
<?php /*%%SmartyHeaderCode:1077559340ddfbebc85-36521855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b656d4eaf6492ff1380986083ca18d54d5b95075' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\bizhi.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077559340ddfbebc85-36521855',
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
  'unifunc' => 'content_59340de0235d99_58775133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340de0235d99_58775133')) {function content_59340de0235d99_58775133($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
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


function wall_paper(form)
{
//检查输入
if(checkwallpaperInput(form)==false) return;
var room_long=0,room_width=0,room_height=0,wallpaperpm=0;
var wallpapernum=0;
var rate=1.1;
//给各个变量赋值
room_long=form.room_long.value;
room_width=form.room_width.value;
room_height=form.room_height.value;
// alert("room_width="+room_width);
wallpaperpm=form.wallpaperpm.value;
//开始计算
// <a href="http://ruanzhuang.pchouse.com.cn/bizhi/" target="_blank" class="cmsLink">壁纸</a>用量(卷)＝房间周长×房间高度×1.1÷每卷平米数
wallpapernum=Math.round(((parseFloat(room_long)+parseFloat(room_width))*2*room_height*rate)/wallpaperpm );
//alert((parseFloat(room_long)+parseFloat(room_width))*2*room_height);
document.getElementById("rt").innerHTML=wallpapernum+ "卷";
}
function  checkwallpaperInput(form)
{
if(form.room_long.value==""){
alert("请输入房间长度");
form.room_long.focus();
return false;
}
if(CheckNum(form.room_long.value,"房间长度只能输入数字格式！",form.room_long)==false)
return false;
if(form.room_width.value==""){
alert("请输入房间宽度");
form.room_width.focus();
return false;
}
if(CheckNum(form.room_width.value,"房间宽度只能输入数字格式！",form.room_width)==false)
return false;
if(form.room_height.value==""){
alert("请输入房间高度");
form.room_height.focus();
return false;
}
if(CheckNum(form.room_height.value,"房间高度只能输入数字格式！",form.room_height)==false)
return false;
if(form.wallpaperpm.value==""){
alert("请输入每卷壁纸的平米数");
form.wallpaperpm.focus();
return false;
}
if(CheckNum(form.wallpaperpm.value,"壁纸的平米数只能输入数字格式！",form.wallpaperpm)==false)
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
					<input name="room_long" class="text" placeholder="房间长度" type="text">
					米
					<input name="room_width" class="text" placeholder="房间宽度" type="text">
					米
					<input name="room_height" class="text" placeholder="房间高度" type="text">
					米 </div>
				<h3>2、请输入壁纸规格</h3>
				<div>
					<input id="wallpaperpm" name="wallpaperpm" class="text" placeholder="壁纸每卷平米数" type="text">
					平方米/卷 <span class="graycl">（5.2平米/卷是行业标准。如果你知道你所要购买的壁纸具体的数据，请输入）</span>
				</div>
				<div class="counter_btn">你需要的壁纸数量是：<span id="rt" class="jieguo"></span>
					<input type="button" onclick="wall_paper(this.form)" value="开始计算" name="Submit" class="btn btn_sub_sm">
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