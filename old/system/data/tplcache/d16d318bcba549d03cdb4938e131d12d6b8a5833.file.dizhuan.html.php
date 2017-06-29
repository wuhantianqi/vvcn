<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:36:46
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\dizhuan.html" */ ?>
<?php /*%%SmartyHeaderCode:358259341afeb49d27-18048436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd16d318bcba549d03cdb4938e131d12d6b8a5833' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\dizhuan.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '358259341afeb49d27-18048436',
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
  'unifunc' => 'content_59341afeca84a9_22480732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59341afeca84a9_22480732')) {function content_59341afeca84a9_22480732($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
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
function floor_brick(form)
{
//检查输入
if(checkfloorbrickInput(form)==false) return;
var room_long=0,room_width=0,floorbrick_long=0,floorbrick_width=0;
var floorbricknum=0;
var rate=1.05;
//给各个变量赋值
room_long=form.room_long.value*1000;
room_width=form.room_width.value*1000;
floorbrick_long=form.floorbrick_long.value;
floorbrick_width=form.floorbrick_width.value;
//开始计算
// 用砖数量（块数）=（房间的长度÷砖长）×（房间宽度÷砖宽）×1.05
floorbricknum=Math.round((room_long/floorbrick_long)*(room_width/floorbrick_width)*rate);
document.getElementById("rt").innerHTML=floorbricknum+ "块";
}
function  checkfloorbrickInput(form)
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
if(CheckNum(form.room_width.value,"房间长度只能输入数字格式！",form.room_width)==false)
return false;
if(form.floorbrick_long.value==""){
alert("请输入地砖的长度");
form.floorbrick_long.focus();
return false;
}
if(CheckNum(form.floorbrick_long.value,"地砖的长度只能输入数字格式！",form.floorbrick_long)==false)
return false;
if(form.floorbrick_width.value==""){
alert("请输入地砖的宽度");
form.floorbrick_width.focus();
return false;
}
if(CheckNum(form.floorbrick_width.value,"地砖的宽度只能输入数字格式！",form.floorbrick_width)==false)
return false;
}
function autoinput(form)
{
//alert(form.bricktype.value);
switch(parseInt(form.bricktype.value))
{
case 1:
form.floorbrick_long.value=300;
form.floorbrick_width.value=300;
break;
case 2:
form.floorbrick_long.value=400;
form.floorbrick_width.value=400;
break;
case 3:
form.floorbrick_long.value=500;
form.floorbrick_width.value=500;
break;
case 4:
form.floorbrick_long.value=600;
form.floorbrick_width.value=600;
}
}

</script>
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
			<form name="floorbrickfrm" action="" method="post" class="counter">
				<h3>1、请输入居室信息</h3>
				<div>
					<input name="room_long" class="text" placeholder="房间长度" type="text">
					米
					<input name="room_width" class="text" placeholder="房间宽度" type="text">
					米 </div>
				<h3>2、请输入地砖信息</h3>
				<div>
					地砖长度:<input name="floorbrick_long" class="text" value="300" placeholder="地砖长度" type="text">
					毫米<br>
					地砖宽度:<input name="floorbrick_width" class="text" value="300" placeholder="地砖宽度" type="text">
					毫米<br>或选择标准规格的地砖:
					<select name="bricktype" onchange="autoinput(this.form)" class="text">
						<option selected="selected" value="1">300x300</option>
						<option value="2">400x400</option>
						<option value="3">500x500</option>
						<option value="4">600x600</option>
					</select>
					毫米 </div>
				<div class="counter_btn">你需要的地砖数量是：<span id="rt" class="jieguo"></span>
					<input type="button" onclick="floor_brick(this.form)" value="开始计算" name="Submit" class="btn btn_sub_sm">
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