<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:01:05
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\qiangzhuan.html" */ ?>
<?php /*%%SmartyHeaderCode:1159059340491d77486-07908733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d648cf8cfe766359434fc53697c8eb5075507a' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\qiangzhuan.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1159059340491d77486-07908733',
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
  'unifunc' => 'content_59340491e4a535_52675336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340491e4a535_52675336')) {function content_59340491e4a535_52675336($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
<SCRIPT language=JavaScript>
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
function wall_brick(form)
{
 //检查输入
 if(checkInput(form)==false) return;
 var room_long=0,room_width=0,room_height=0,door_height=0,door_width=0,door_num=0;
 var window_height=0,window_width=0,window_num=0,brick_long=0,brick_width=0;
 var bricknum=0;
 var rate=1.05;
 //给各个变量赋值
 room_long=form.room_long.value*1000;
 room_width=form.room_width.value*1000;
 room_height=form.room_height.value*1000;
 
 door_height=form.door_height.value*1000;
 door_width=form.door_width.value*1000;
 door_num=form.door_num.value;
 
 window_height=form.window_height.value*1000;
 window_width=form.window_width.value*1000;
 window_num=form.window_num.value;
 
 brick_long=form.brick_long.value;
 brick_width=form.brick_width.value;
 
 //开始计算
 //用砖数量（块数）=[（房间的长度÷砖长）×（房间高度÷砖宽）×2+ 
 //（房间的宽度÷砖长）×（房间高度÷砖宽）×2—（窗户的长度÷砖长）×
 //（窗户的宽度÷砖宽）×个数—（门的长度÷砖长）×（门的宽度÷砖宽）×个数]×1.05
 bricknum=(room_long/brick_long)*(room_height/brick_width)*2;
 bricknum= parseFloat(bricknum)+parseFloat((room_width/brick_long)*(room_height/brick_width) *2);
 bricknum=parseFloat(bricknum)- parseFloat((window_height/brick_long)*(window_width/brick_width)*window_num);
 bricknum=parseFloat(bricknum)-parseFloat((door_height/brick_long)*(door_width/brick_width)*door_num);
 bricknum=Math.round(bricknum*1.05);
 
//form.wallbricknum.value=bricknum;
 document.getElementById("rt").innerHTML=bricknum+"块";
}
function checkInput(wallbrickfrm)
{
	if(wallbrickfrm.room_long.value==""){
		alert("请输入房间长度");
		wallbrickfrm.room_long.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.room_long.value,"房间长度只能输入数字格式！",wallbrickfrm.room_long)==false)
	return false;

	if(wallbrickfrm.room_width.value==""){
		alert("请输入房间宽度");
		wallbrickfrm.room_width.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.room_width.value,"房间宽度只能输入数字格式！",wallbrickfrm.room_width)==false)
	return false;
	if(wallbrickfrm.room_height.value==""){
		alert("请输入房间高度");
		wallbrickfrm.room_height.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.room_height.value,"房间高度只能输入数字格式！",wallbrickfrm.room_height)==false)
	return false;
	if(wallbrickfrm.door_height.value==""){
		alert("请输入房门高度");
		wallbrickfrm.door_height.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.door_height.value,"房门高度只能输入数字格式！",wallbrickfrm.door_height)==false)
	return false;
	if(wallbrickfrm.door_width.value==""){
		alert("请输入房门宽度");
		wallbrickfrm.door_width.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.door_width.value,"房门宽度只能输入数字格式！",wallbrickfrm.door_width)==false)
	return false;

	if(wallbrickfrm.door_num.value==""){
		alert("请输入房门扇数");
		wallbrickfrm.door_num.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.door_num.value,"房门扇数只能输入数字格式！",wallbrickfrm.door_num)==false)
	return false;
		
	if(wallbrickfrm.window_height.value==""){
		alert("请输入窗户高度");
		wallbrickfrm.window_height.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.window_height.value,"窗户高度只能输入数字格式！",wallbrickfrm.window_height)==false)
	return false;
	if(wallbrickfrm.window_width.value==""){
		alert("请输入窗户宽度");
		wallbrickfrm.window_width.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.window_width.value,"窗户宽度只能输入数字格式！",wallbrickfrm.window_width)==false)
	return false;
	if(wallbrickfrm.window_num.value==""){
		alert("请输入窗户扇数");
		wallbrickfrm.window_num.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.window_num.value,"窗户扇数只能输入数字格式！",wallbrickfrm.window_num)==false)
	return false;
		
	if(wallbrickfrm.brick_long.value==""){
		alert("请输入墙砖长度");
		wallbrickfrm.brick_long.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.brick_long.value,"墙砖长度只能输入数字格式！",wallbrickfrm.brick_long)==false)
	return false;
	if(wallbrickfrm.brick_width.value==""){
		alert("请输入墙砖宽度");
		wallbrickfrm.brick_width.focus();
		return false;
		}
	if(CheckNum(wallbrickfrm.brick_width.value,"墙砖宽度只能输入数字格式！",wallbrickfrm.brick_width)==false)
	return false;
}
function autoinput(form)
{
	//alert(form.bricktype.value);
	switch(parseInt(form.bricktype.value))
	{
		case 0:
		     form.brick_long.value=200;
			 form.brick_width.value=200;
		     break;
		case 1:
		     form.brick_long.value=300;
			 form.brick_width.value=300;
		     break;
		case 2:
			 form.brick_long.value=400;
			 form.brick_width.value=400;
		     break;
		case 3:
			 form.brick_long.value=500;
			 form.brick_width.value=500;
		     break;
		case 4:
			 form.brick_long.value=600;
			 form.brick_width.value=600;
			 break;
		case 5:
			 form.brick_long.value=300;
			 form.brick_width.value=200;
			 break;
		case 6:
			 form.brick_long.value=250;
			 form.brick_width.value=330;
			 break;
		case 7:
			 form.brick_long.value=300;
			 form.brick_width.value=450;
			
	}
}
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
        	 <form action="" method="post" name="form2" class="counter">
               		
                     <h3>1、请输入居室信息</h3>
                     <div>
                        <input name="room_long" class="text" placeholder="房间长度" type="text">米
                        <input name="room_width" class="text" placeholder="房间宽度" type="text">米
                        <input name="room_height" class="text" placeholder="房间高度" type="text">米
                     </div>
                     <h3>2、请您输入室内门窗信息</h3>
                     <div>
                        <input name="door_height" class="text" placeholder="房门高度" type="text">米
                        <input name="window_height" class="text" placeholder="窗户高度" type="text">米
                        <input name="door_width" class="text" placeholder="房门宽度" type="text">米
                    </div>
                     <div>
                        <input name="window_width" class="text" placeholder="窗户宽度" type="text">米
                        <input name="door_num" class="text" placeholder="房门扇数" type="text">个
                        <input name="window_num" class="text" placeholder="窗户扇数" type="text">个
                     </div>
                     <h3>3、请输入配备的单块墙砖信息</h3>
                     <div>
                     	 墙砖长度：<input name="brick_long" class="text" placeholder="墙砖长度" value="200" type="text">毫米<br>
                         墙砖宽度：<input name="brick_width" class="text" placeholder="墙砖宽度" value="200" type="text">毫米<br>
                        或选择标准规格的墙砖:<select name="bricktype" onchange="autoinput(this.form)" class="text">
                                          <option selected="" value="0">200x200</option>
                                          <option value="1">300x300</option>
                                          <option value="2">400x400</option>
                                          <option value="3">500x500</option>
                                          <option value="4">600x600</option>
                                          <option value="5">300x200</option>
                                          <option value="6">250x330</option>
                                          <option value="7">300x450</option>
                                        </select> 毫米
                     </div>
					 <div class="counter_btn">计算结果：<span id="rt" class="jieguo"></span><input type="button" onclick="wall_brick(this.form)" value="开始计算" name="Submit" class="btn btn_sub_sm"><input type="reset" value="重新输入" name="Submit" class="btn again_btn"></div>
             </form>
			             
		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>