<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:04:12
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\diban.html" */ ?>
<?php /*%%SmartyHeaderCode:247905934135c652552-93711483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c11e78a08d672101a3a5da00ef1cf7bdec00e4' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\diban.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247905934135c652552-93711483',
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
  'unifunc' => 'content_5934135c897526_65668637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5934135c897526_65668637')) {function content_5934135c897526_65668637($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <SCRIPT language=JavaScript type=text/JavaScript>


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
var floornum=0;
var rate=0;
//给各个变量赋值
room_long=form.room_long.value*1000;
room_width=form.room_width.value*1000;
floor_long=form.floor_long.value;
floor_width=form.floor_width.value;
rate=form.rate.value;
//开始计算
floornum=Math.round((room_long/floor_long)*(room_width/floor_width)*rate);
document.getElementById("rt").innerHTML=floornum+ "块";
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
if(CheckNum(form.room_width.value,"房间宽度只能输入数字格式！",form.room_width)==false)
return false;
if(form.floor_long.value==""){
alert("请输入地板的长度");
form.floor_long.focus();
return false;
}
if(CheckNum(form.floor_long.value,"窗户高度只能输入数字格式！",form.floor_long)==false)
return false;
if(form.floor_width.value==""){
alert("请输入地板的宽度");
form.floor_width.focus();
return false;
}
if(CheckNum(form.floor_long.value,"地板的宽度只能输入数字格式！",form.floor_long)==false)
return false;
}
function autoinput(form)
{
switch(parseInt(form.bricktype.value))
{
case 1:
form.floor_long.value=600;
form.floor_width.value=90;
break;
case 2:
form.floor_long.value=750;
form.floor_width.value=90;
break;
case 3:
form.floor_long.value=900;
form.floor_width.value=90;
break;
case 4:
form.floor_long.value=1285;
form.floor_width.value=192;
}
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
</a></li>
            <?php } ?>
		</ul>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="about_rt rt">
		<div class="pding">
        	 <h2 align="center"><?php echo $_smarty_tpl->tpl_vars['tools_array']->value[$_smarty_tpl->tpl_vars['tool']->value];?>
</h2>
        	<form name="floorbrickfrm" action="" method="post"  class="counter">
                 <h3>1、请您输入居室信息</h3>
                 <div>
                    <input name="room_long" class="text" placeholder="房间长度" type="text">米
                    <input name="room_width" class="text" placeholder="房间宽度" type="text">米
                 </div>
                 <h3>2、请输入地板信息</h3>
                 <div>
                    地板长度:<input name="floor_long" class="text" value="600" placeholder="地板长度" type="text">毫米<br>
                    地板宽度:<input name="floor_width" class="text" value="90" placeholder="地板宽度" type="text">毫米<br>
                    或选择标准规格的地板:<select name="bricktype" onchange="autoinput(this.form)" class="text" >
                                        <option selected="selected" value="1">600x90x18</option>
                                        <option value="2">750x90x18</option>
                                        <option value="3">900x90x18</option>
                                        <option value="4">1285x192x8</option>
                                     </select>毫米<br>
									地板类型 : <select name="rate" class="text" id="rate">
                                    <option value="1.08">实木地板</option>
                                    <option selected="selected" value="1.05">复合地板</option>
                                    </select>
                 </div>
				 <div class="counter_btn">你需要的地板数量是：<span id="rt" class="jieguo"></span>
				 <input type="button" onclick="floor_brick(this.form)" value="开始计算" name="Submit" class="btn btn_sub_sm">
				 <input type="reset" value="重新输入" name="Submit" class="btn again_btn">
				
            </form>
 
		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>