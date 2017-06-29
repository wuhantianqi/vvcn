<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:30
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\case\album.html" */ ?>
<?php /*%%SmartyHeaderCode:226695933f5e6acc4d8-63545982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3801f5e59270ff1ae459340ecfcf1606ed764945' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\case\\album.html',
      1 => 1437654706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '226695933f5e6acc4d8-63545982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'attr_values' => 0,
    'v' => 0,
    'vv' => 0,
    'order_list' => 0,
    'pager' => 0,
    'k' => 0,
    'items' => 0,
    'item' => 0,
    'item2' => 0,
    'photos' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5e6e28b43_25025659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5e6e28b43_25025659')) {function content_5933f5e6e28b43_25025659($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'case:items'),$_smarty_tpl);?>
">装修案例</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体内容开始-->
	<div class="mb20 pding area choose_option">
		<table>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                <td class="tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
:</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['v']->value['checked']==true){?> current<?php }?>">不限 </a>                  
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['link'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['vv']->value['checked']==true){?>current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a>
                <?php } ?>
                </td>
            </tr>
            <?php } ?>
		</table>
	</div>
	<div class="mb10">
		<div class="sort_box">
			<p class="sort_list hoverno">
                <span class="lt">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span class="<?php if ($_smarty_tpl->tpl_vars['pager']->value['order']==$_smarty_tpl->tpl_vars['k']->value){?>sort_ico ico_list sort_on_ico<?php }else{ ?>sort_ico ico_list<?php }?>"></span></a>
                    <?php } ?>
                </span> 
                <span class="rt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'case:album'),$_smarty_tpl);?>
" title="专辑模式"  class="on" ><font class="ico_list li_on"></font></a>
				<a href="<?php echo smarty_function_link(array('ctl'=>'case:items'),$_smarty_tpl);?>
"  title="列表模式"><font class="ico_list block_over"></font></a>
				</span>
			</p>
		</div>
	</div>
	<ul class="line_type case_zhuanji">
    	 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>          
        <li <?php if ($_smarty_tpl->tpl_vars['item']->index%5==0){?>class="first"<?php }?>>           
            <?php if ($_smarty_tpl->tpl_vars['item']->value['lastphotos']){?>
                 <?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['lastphotos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item2']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value){
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item2']->key;
 $_smarty_tpl->tpl_vars['item2']->index++;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item2']->index==0){?>
                    <div class="zhuanji_top_img"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_thumb.jpg" /></a></div>
                    <div class="zhuanji_bottom_img">
                    <?php }elseif($_smarty_tpl->tpl_vars['key']->value<4&&$_smarty_tpl->tpl_vars['key']->value==1){?>
                         <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="first"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_small.jpg"  width="72px;" height="72px;" /></a>
                    <?php }elseif($_smarty_tpl->tpl_vars['key']->value<4&&$_smarty_tpl->tpl_vars['key']->value!=1){?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['photos']->value[$_smarty_tpl->tpl_vars['item2']->value]['photo'];?>
_small.jpg"  width="72px;" height="72px;" /></a>
                    <?php }?>
                 <?php } ?>
            <?php }?>               
            </div>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="lt tit"  target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],25);?>
</a><span class="rt"><font class="ico_list zhuanji_ico"></font><?php echo $_smarty_tpl->tpl_vars['item']->value['photos'];?>
</span></p>
            <div class="cl"></div>
        </li>
        <?php } ?>
	</ul>
	<div class="cl"></div>
     <?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>