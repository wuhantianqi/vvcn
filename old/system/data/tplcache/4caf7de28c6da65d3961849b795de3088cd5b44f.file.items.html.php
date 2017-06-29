<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:16:22
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tools\items.html" */ ?>
<?php /*%%SmartyHeaderCode:115845934082633ffc7-20246803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4caf7de28c6da65d3961849b795de3088cd5b44f' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tools\\items.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115845934082633ffc7-20246803',
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
  'unifunc' => 'content_593408264fbfd3_68487767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408264fbfd3_68487767')) {function content_593408264fbfd3_68487767($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>

            function IsDigit(cCheck)
            {
                return ((('0' <= cCheck) && (cCheck <= '9')) || cCheck == '.');
            }
    function CheckNum(charValue, alertValue, obj)
    {
        for (var iIndex = 0; iIndex < charValue.length; iIndex++)
        {
            var cCheck = charValue.charAt(iIndex);
            if (!IsDigit(cCheck))
            {
                alert(alertValue);
                obj.focus();
                return false;
            }
        }
    }
    function wall_paint(form)
    {
        //检查输入
        if (checkpaintInput(form) == false)
            return;
        var room_long = 0, room_width = 0, room_height = 0, door_height = 0, door_width = 0, door_num = 0;
        var window_height = 0, window_width = 0, window_num = 0;
        var paintnum = 0;
        var rate = 0;
        //给各个变量赋值
        room_long = form.room_long.value;
        room_width = form.room_width.value;
        room_height = form.room_height.value;

        door_height = form.door_height.value;
        door_width = form.door_width.value;
        door_num = form.door_num.value;

        window_height = form.window_height.value;
        window_width = form.window_width.value;
        window_num = form.window_num.value;
        rate = form.paint.value;
        //开始计算
        paintnum = (parseFloat(room_long) + parseFloat(room_width)) * 2 * room_height + parseFloat(room_long * room_width);
        paintnum = paintnum - parseFloat(window_height * window_width * window_num);
        paintnum = paintnum - parseFloat(door_height * door_width * door_num);
        var actnum = (Math.round(paintnum / rate * 100)) / 100;

        document.getElementById("rt").innerHTML = actnum + "升";
          }
    function checkpaintInput(form)
    {
        if (form.room_long.value == "") {
            alert("请输入房间长度");
            form.room_long.focus();
            return false;
        }
        if (CheckNum(form.room_long.value, "房间长度只能输入数字格式！", form.room_long) == false)
            return false;

        if (form.room_width.value == "") {
            alert("请输入房间宽度");
            form.room_width.focus();
            return false;
        }
        if (CheckNum(form.room_width.value, "房间宽度只能输入数字格式！", form.room_width) == false)
            return false;

        if (form.room_height.value == "") {
            alert("请输入房间高度");
            form.room_height.focus();
            return false;
        }
        if (CheckNum(form.room_height.value, "房间高度只能输入数字格式！", form.room_height) == false)
            return false;

        if (form.door_height.value == "") {
            alert("请输入房门高度");
            form.door_height.focus();
            return false;
        }
        if (CheckNum(form.door_height.value, "房门高度只能输入数字格式！", form.door_height) == false)
            return false;

        if (form.door_width.value == "") {
            alert("请输入房门宽度");
            form.door_width.focus();
            return;
        }
        if (CheckNum(form.door_width.value, "房门宽度只能输入数字格式！", form.door_width) == false)
            return false;

        if (form.door_num.value == "") {
            alert("请输入房门扇数");
            form.door_num.focus();
            return false;
        }

        if (CheckNum(form.door_num.value, "房门扇数只能输入数字格式！", form.door_num) == false)
            return false;

        if (form.window_height.value == "") {
            alert("请输入窗户高度");
            form.window_height.focus();
            return false
        }
        if (CheckNum(form.window_height.value, "窗户高度只能输入数字格式！", form.window_height) == false)
            return false;

        if (form.window_width.value == "") {
            alert("请输入窗户宽度");
            form.window_width.focus();
            return false;
        }
        if (CheckNum(form.window_width.value, "窗户宽度只能输入数字格式！", form.window_width) == false)
            return false;

        if (form.window_num.value == "") {
            alert("请输入窗户扇数");
            form.window_num.focus();
            return false;
        }
        if (CheckNum(form.window_num.value, "窗户扇数只能输入数字格式！", form.window_num) == false)
            return false;
        if (form.paint.value == "") {
            alert("请您输入涂料的覆盖率");
            form.paint.focus();
            return false;
        }
        if (CheckNum(form.paint.value, "涂料的覆盖率只能输入数字格式！", form.paint) == false)
 return false;
} 
</script>

<!--面包屑导航开始-->
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
           		 <h3>1、请您输入居室信息</h3>
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
                 <div> <input name="paint" class="text" placeholder="输入涂料的覆盖率" value="8.6" type="text">平米/升 <span class="graycl">(说明：8.6平米/升是行业标准。如果您知道您所要购买的涂料具体的覆盖率，请输入。)</span></div>
                 <div class="counter_btn">计算结果：<span id="rt" class="jieguo"></span><input type="button" onclick="wall_paint(this.form)" value="开始计算" name="Submit" class="btn btn_sub_sm"><input type="reset" value="重新输入" name="Submit" class="btn again_btn">
				 </div>
            </form>                                                              
		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>