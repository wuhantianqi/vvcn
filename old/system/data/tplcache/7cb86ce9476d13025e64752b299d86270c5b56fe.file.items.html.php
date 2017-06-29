<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:22:23
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\diary\items.html" */ ?>
<?php /*%%SmartyHeaderCode:299485933fb7fa9c169-99621658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb86ce9476d13025e64752b299d86270c5b56fe' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\diary\\items.html',
      1 => 1432555702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299485933fb7fa9c169-99621658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'status_all_link' => 0,
    'pager' => 0,
    'status_list' => 0,
    'v' => 0,
    'k' => 0,
    'way_all_link' => 0,
    'way_list' => 0,
    'type_all_link' => 0,
    'type_list' => 0,
    'items' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fb7fd56dc8_28524242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fb7fd56dc8_28524242')) {function content_5933fb7fd56dc8_28524242($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'diary:items'),$_smarty_tpl);?>
">装修日记</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="mb10 pding area choose_option">
			<table>
                <tr>
                    <td class="tit">阶段：</td>
                    <td>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['status_all_link']->value;?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['status'])){?>current<?php }?>">不限</a>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['status_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" class="block_lt<?php if ($_smarty_tpl->tpl_vars['pager']->value['status']==$_smarty_tpl->tpl_vars['k']->value){?> current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
                    <?php } ?>
                    </td>
                </tr>                
				<tr>
					<td class="tit">装修：</td>
					<td>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['way_all_link']->value;?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['way_id'])){?>current<?php }?>">不限</a>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['way_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                       	 <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" class="block_lt  <?php if ($_smarty_tpl->tpl_vars['pager']->value['way_id']==$_smarty_tpl->tpl_vars['k']->value){?>current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
        				<?php } ?>
					</td>
				</tr>
				<tr>
					<td class="tit">户型：</td>
					<td>
                    	<a href="<?php echo $_smarty_tpl->tpl_vars['type_all_link']->value;?>
" class="block_lt <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['type_id'])){?>current<?php }?>">不限</a>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                       	 <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" class="block_lt <?php if ($_smarty_tpl->tpl_vars['pager']->value['type_id']==$_smarty_tpl->tpl_vars['k']->value){?>current<?php }?>"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
        				<?php } ?>
					</td>
				</tr>
			</table>
		</div>
		<div class="mb20">
			<h2>装修日记</h2>
			<div class="sort_box">
				<p class="sort_list hoverno">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'diary:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>1),$_smarty_tpl);?>
">默认  <span <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']!=2&&$_smarty_tpl->tpl_vars['pager']->value['orderby']!=3){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'diary:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>2),$_smarty_tpl);?>
">浏览量<span <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']==2){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'diary:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['status'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type_id'],'arg2'=>$_smarty_tpl->tpl_vars['pager']->value['way_id'],'arg3'=>3),$_smarty_tpl);?>
">评论量<span <?php if ($_smarty_tpl->tpl_vars['pager']->value['orderby']==3){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a> 
				</p>
			</div>
			<div class="area">
				<ul class="block_type">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                	<li>
						<div class="main_diary">
							<div class="lt">
								<a href="<?php echo smarty_function_link(array('ctl'=>'diary:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
							</div>
							<div class="main_diary_rt rt">
								<p class="title"><span class="lt"><a href="<?php echo smarty_function_link(array('ctl'=>'diary:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['diary_id']),$_smarty_tpl);?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>[<?php echo $_smarty_tpl->tpl_vars['item']->value['content_num'];?>
篇]</span><span class="rt"><label><font class="ico_list dy_liulan"></font>浏览(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</font>)</label><label><font class="ico_list dy_pinglun"></font>评论(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['comments'];?>
</font>)</label></span></p>
								<div class="cl"></div>
                                <p class="sp_list"><span>楼盘： <?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['home_name'])===null||$tmp==='' ? '--' : $tmp);?>
</span><span>装修：<?php echo $_smarty_tpl->tpl_vars['item']->value['way_title'];?>
</span><span>户型：<?php echo $_smarty_tpl->tpl_vars['item']->value['type_title'];?>
 </span><span>均价：<?php echo $_smarty_tpl->tpl_vars['item']->value['total_price'];?>
元</span></p>
								
                                <p class="sp_list"><span>开始时间：<?php echo $_smarty_tpl->tpl_vars['item']->value['start_date'];?>
 </span><span>结束时间：<?php echo $_smarty_tpl->tpl_vars['item']->value['end_date'];?>
</span></p>
                                <p class="sp_list"><span>状态：<?php echo $_smarty_tpl->tpl_vars['item']->value['status_title'];?>
 </span><span>时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"Y-m-d");?>
 </span></p>
							</div>
							<div class="cl"></div>
						</div>
					</li>
                <?php } ?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
			</div>
		</div>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="side_content rt">
		<div class="mb10">
			<p class="diary_btn"><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/diary'),$_smarty_tpl);?>
" class="btn"><span class="ico_list write_ico"></span>写日记</a></p>
		</div>
	<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

		<div class="mb10 area">
            <h3 class="side_tit">装修公司排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="mb10 area">
            <h3 class="side_tit">设计师排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
		<div class="mb20"><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
	<!--主体右边内容结束-->
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>