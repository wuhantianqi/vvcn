<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:12:30
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\tenders\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:195705934073e4b3b42-95991611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097ba1fdab37126ba94ddfffa1328c3a0974254c' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\tenders\\detail.html',
      1 => 1432555702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195705934073e4b3b42-95991611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'look_list' => 0,
    'item' => 0,
    'member_list' => 0,
    'pager' => 0,
    'company_list' => 0,
    'MEMBER' => 0,
    'shop_list' => 0,
    'designer_list' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5934073e9ecf94_87365057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5934073e9ecf94_87365057')) {function content_5934073e9ecf94_87365057($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'tenders'),$_smarty_tpl);?>
">我要装修</a>
		&gt;招标详情 </p>
</div>
<!--面包屑导航结束-->
<div class="subwd">
	<!--主体左边内容开始-->
	<div class="sub_content lt">
		<div class="mb10 area">
			<div class="colorbg tenters_detail_top pding">
				<div class="lt tenters_de_top_lt ico_list">
					<p>招标数</p>
					<p><b class="pointcl"><?php echo $_smarty_tpl->tpl_vars['detail']->value['looks'];?>
</b><span>位</span></p>
				</div>
				<div class="rt">
					<h2><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
<?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?><span class="ico_list tender_over">招标结束</span><?php }else{ ?><span class="ico_list tender_ing">招标中</span><?php }?></h2>
					<p><span>发布者：<?php echo $_smarty_tpl->tpl_vars['detail']->value['contact'];?>
</span><span>发布时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</span></p>
				</div>
				<div class="cl"></div>
			</div>
			<div class="pding tenters_de_intro">
				<p>招标方式：<?php echo $_smarty_tpl->tpl_vars['detail']->value['way_title'];?>
</p>
				<p>招标类型：<?php echo $_smarty_tpl->tpl_vars['detail']->value['type_title'];?>
</p>
				<p>服务需求：<?php echo $_smarty_tpl->tpl_vars['detail']->value['service_title'];?>
</p>
				<p>装修风格：<?php echo $_smarty_tpl->tpl_vars['detail']->value['style_title'];?>
</p>
				<p>房屋户型：<span class="pointcl"><?php echo $_smarty_tpl->tpl_vars['detail']->value['house_type_title'];?>
</span></p>
				<p>预算总价：<span class="pointcl"><?php echo $_smarty_tpl->tpl_vars['detail']->value['budget_title'];?>
</span></p>
				<p>所在区域：<?php echo $_smarty_tpl->tpl_vars['detail']->value['city_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['detail']->value['area_name'];?>
</p>
				<?php if ($_smarty_tpl->tpl_vars['detail']->value['home_name']){?>
				<p>小区名称：<?php echo $_smarty_tpl->tpl_vars['detail']->value['home_name'];?>
</p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['detail']->value['addr']){?>
				<p>详细地址：<?php echo $_smarty_tpl->tpl_vars['detail']->value['addr'];?>
</p>
				<?php }?>
				<p>建筑面积：<span class="pointcl"><?php echo $_smarty_tpl->tpl_vars['detail']->value['house_mj'];?>
平米</span></p>
				<?php if ($_smarty_tpl->tpl_vars['detail']->value['zx_time']){?>
				<p>装修时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['zx_time'],'Y-m-d');?>
</p>
				<?php }?>
				<p>具体要求：<?php echo $_smarty_tpl->tpl_vars['detail']->value['comment'];?>
</p>
			</div>
		</div>
		<div class="mb20 area">
			<h3 class="side_tit tender_tit"><span class="lt">参与竞标公司</span><a href="<?php echo smarty_function_link(array('ctl'=>'tenders:look','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['tenders_id'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="立即投标" mini-width="400" class="rt btn btn_sub_sm">我要投标</a>
			</h3>
			<ul class="tender_menu">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['look_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li>
					<?php if ($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='company'){?>
					<div class="tender_de_com">
						<div class="tender_de_com_lt lt">
							<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['thumb'];?>
" class="lt pic" />
							<p class="tit"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'];?>
</p>
						</div>
						<div class="tender_de_com_rt lt">
							<p class="line">
								<span>投标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_num'];?>
</font></span>
								<span>投标时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
								<span>信誉：<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['score'];?>
</span>
								<span>中标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_sign'];?>
</font></span>
								<?php if (!$_smarty_tpl->tpl_vars['detail']->value['sign_uid']&&$_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?><span>业主评标：<a href="#" class="btn btn_sub_smler">中标</a>
								</span><?php }?>
							</p>
							<div class="pding liuyan">
								<p>留言：<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
							</div>
						</div>
						<div class="cl"></div>
					</div>
                    <?php }?>
					<?php if ($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='shop'){?>
					<div class="tender_de_com">
						<div class="tender_de_com_lt lt">
							<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['logo'];?>
" class="lt pic" />
							<p class="tit">投标者：<?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'];?>
</p>
						</div>
						<div class="tender_de_com_rt lt">
							<p class="line">
								<span>投标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_num'];?>
</font></span>
								<span>投标时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
								<span>信誉：<?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['credits'];?>
</span>
								<span>中标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_sign'];?>
</font></span>
								<?php if (!$_smarty_tpl->tpl_vars['detail']->value['sign_uid']&&$_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?><span>业主评标：<a href="#" class="btn btn_sub_smler">中标</a>
								</span><?php }?>
							</p>
                            <div class="pding liuyan">
								<p>留言：<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
							</div>
						</div>
						<div class="cl"></div>
					</div>
                    <?php }?>
					<?php if ($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['from']=='designer'){?>
					<div class="tender_de_com">
						<div class="tender_de_com_lt lt">
							<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_80'];?>
" class="lt pic" />
							<p class="tit"><?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'];?>
</p>
						</div>
						<div class="tender_de_com_rt lt">
							<p class="line">
							<span>投标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_num'];?>
</font></span>
							<span>投标时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
							<span>信誉：<?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['credits'];?>
</span>
							<span>中标次数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['tenders_sign'];?>
</font></span>
							<?php if (!$_smarty_tpl->tpl_vars['detail']->value['sign_uid']&&$_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']){?><span>业主评标：<a href="#" class="btn btn_sub_smler">中标</a>
							</span><?php }?>
						</p>
                       		<div class="pding liuyan">
								<p>留言：<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
							</div>
						</div>
						<div class="cl"></div>
					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']==$_smarty_tpl->tpl_vars['item']->value['uid']){?>
					<div class="tender_suspend"><img src="/themes/default/static/images/tender_zb.png" /></div>
					<?php }?>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="side_content rt">
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修招标"),$_smarty_tpl);?>

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
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>