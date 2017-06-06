<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 19:25:21
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\gs\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1194359353fa1e336a7-93537899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054d6b7151575a849720ef63638395e0ac897dbf' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\gs\\items.html',
      1 => 1434455560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194359353fa1e336a7-93537899',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'area_all_link' => 0,
    'pager' => 0,
    'area_list' => 0,
    'v' => 0,
    'group_list' => 0,
    'group_all_link' => 0,
    'attr_values' => 0,
    'vv' => 0,
    'order_list' => 0,
    'k' => 0,
    'items' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59353fa2035676_70234026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59353fa2035676_70234026')) {function content_59353fa2035676_70234026($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'gs:items'),$_smarty_tpl);?>
">找装修公司</a>
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
					<td class="tit">区域：</td>
					<td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['area_all_link']->value;?>
" <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['area_id'])){?>class="current"<?php }?>>不限</a>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['area_id']==$_smarty_tpl->tpl_vars['pager']->value['area_id']){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                        <?php } ?>
					</td>
				</tr>
                <?php if ($_smarty_tpl->tpl_vars['group_list']->value){?>
                <tr>
                    <td class="tit">等级：</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['group_all_link']->value;?>
" <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['group_id'])){?>class="current"<?php }?>>不限</a>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['group_id']==$_smarty_tpl->tpl_vars['pager']->value['group_id']){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['group_name'];?>
</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php }?>              
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['attr_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
                <tr>
                <td class="tit"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
&nbsp;:&nbsp;</td>
                <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="current"<?php }?>>不限</a>
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                	<a  href="<?php echo $_smarty_tpl->tpl_vars['vv']->value['link'];?>
"  <?php if ($_smarty_tpl->tpl_vars['vv']->value['checked']){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
</a>
                <?php } ?>
                </tr>
                <?php } ?>                
			</table>
		</div>
		<div class="mb20">
			<h2>装修公司列表</h2>
			<div class="sort_box">
				<p class="sort_list hoverno">
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['pager']->value['order']){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                    <?php } ?> 
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
						<div class="main_company main_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
" class="lt pic"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /><?php if ($_smarty_tpl->tpl_vars['item']->value['is_vip']){?><span class="qijian_ico ico_list"></span><?php }?></a>
							<div class="main_com_rt main_list_rt rt">
								<h3><p class="lt"><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></b><?php if ($_smarty_tpl->tpl_vars['item']->value['verify_name']){?><span class="ps_rz_ico ico_list"></span><?php }?><?php if ($_smarty_tpl->tpl_vars['item']->value['xiaobao']){?><span class="bz_metals"><?php echo $_smarty_tpl->tpl_vars['item']->value['xiaobao'];?>
元<font class="ico_list"></font></span><?php }?></p><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['item']->value['show_qq'];?>
&site=qq&menu=yes" class="ico_list qq_ico rt"></a></h3>
								<div class="lt">
									<p><span class="ico_list xinyu_ico"></span>信誉指数：<?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</p>
									<p><span class="ico_list telephone_ico"></span>联系电话：<?php echo $_smarty_tpl->tpl_vars['item']->value['show_phone'];?>
</p>
									<p><span class="ico_list address_ico"></span>地址：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['addr'],70);?>
</p>
									<p class="sp_list"><span>案例：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
</font>套 </span><span>在建工地：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['site_num'];?>
</font>套</span><span>签单数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font>单</span><span>预约数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['yuyue_num'];?>
</font>人</span></p>
								</div>
								<div class="rt pingfen_bar">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['company']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?><?php if ($_smarty_tpl->tpl_vars['v']->index>2){?><?php break 1?><?php }?>
									 <p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['item']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['item']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
                                     <?php } ?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['group']['priv']['allow_yuyue']==1){?>
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="免费预约" class="btn_main_big btn rt">免费预约</a>                                    
                                    <?php }else{ ?>
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'tenders:fast','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="立即招标" class="btn_main_big btn rt">立即招标</a>
                                    <?php }?>
									
								</div>
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
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>