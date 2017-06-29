<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:31:38
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\mall\coupon\items.html" */ ?>
<?php /*%%SmartyHeaderCode:3057959340bba339fb1-82763846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9894938681adb109811e37d22052627c7f21e5bd' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\mall\\coupon\\items.html',
      1 => 1438785582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3057959340bba339fb1-82763846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'item' => 0,
    'pager' => 0,
    'items' => 0,
    'index' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340bba60cfc5_56372192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340bba60cfc5_56372192')) {function content_59340bba60cfc5_56372192($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
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
			><a href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon-items'),$_smarty_tpl);?>
">优惠券</a>
		</p>
	</div>
</div>
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="main_activity_choose hoverno mb10">
            <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['type'])){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon:items','arg0'=>0,'arg1'=>1),$_smarty_tpl);?>
" >全部</a>
            <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']==1){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon:items','arg0'=>1,'arg1'=>1),$_smarty_tpl);?>
" >未过期</a>
			<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']==2){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon:items','arg0'=>2,'arg1'=>1),$_smarty_tpl);?>
" >已过期</a>
		</div>
		<div class="mb20">
			<div class="area pding">
				<ul class="line_type main_coupon">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li <?php if ($_smarty_tpl->tpl_vars['index']->value%2==0){?>style="float:left"<?php }?>>
					<div class="main_coupon_box lt">
						<p class="price"><b class="lt">¥ <?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
</b><span class="rt">全店通用</span></p>
						<p class="cl"></p>
						<p>使用条件：满<?php echo $_smarty_tpl->tpl_vars['item']->value['min_amount'];?>
元减<?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
元</p>
                        <p>有效时间：<?php if ($_smarty_tpl->tpl_vars['item']->value['ltime']){?><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['stime'],"Y-m-d");?>
 至 <?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['ltime'],"Y-m-d");?>
<?php }else{ ?>永久有效<?php }?></p>
					</div>
					<div class="rt main_coupon_box_intro">
						<h3><b>满<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['mini_amount'];?>
</font>元减<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
</font>元优惠券</b></h3>
						<p>适用范围：全场通用，除个别商品外</p>
						<p>已领取数：<?php echo $_smarty_tpl->tpl_vars['item']->value['downloads'];?>
</p>
                        <p>有效期至：<?php if ($_smarty_tpl->tpl_vars['item']->value['ltime']){?><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['ltime'],"Y-m-d");?>
<?php }else{ ?>永久有效<?php }?></p>
						<p><?php if ($_smarty_tpl->tpl_vars['item']->value['ltime']!=0&&$_smarty_tpl->tpl_vars['item']->value['ltime']<time()){?><a href="#" class="youhui_over_btn btn">已经过期</a><?php }else{ ?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['coupon_id']),$_smarty_tpl);?>
" class="btn_sub_sm btn">点击领取</a><?php }?>
						</p>
					</div>
					<div class="cl"></div>
					</li>
					<?php } ?>
				</ul>
				<div class="cl"></div>
				<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
			</div>
		</div>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="side_content rt">
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TZX"),$_smarty_tpl);?>

		<div class="mb10 area">
			<h3 class="side_tit">装修公司排行榜</h3>
			<ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a></span>
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
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a></span>
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
<script type="text/javascript">
(function(K, $){
    //活动列表页头部切换
    $(".main_activity_choose a").click(function(){
         $(".main_activity_choose a").siblings().removeClass('current');
         $(this).addClass('current');
    });
})(window.KT, window.jQuery);
</script>            

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>