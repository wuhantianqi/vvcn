<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:11
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\company\index.html" */ ?>
<?php /*%%SmartyHeaderCode:215175933f5d3bd3cd5-37745740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6224a2cd704ce4463d2b0c6defe5133708190f4b' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\company\\index.html',
      1 => 1438266310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215175933f5d3bd3cd5-37745740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'calldata_count' => 0,
    'pager' => 0,
    'comment_list' => 0,
    'item' => 0,
    'member_list' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5d438bc45_59265224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5d438bc45_59265224')) {function content_5933f5d438bc45_59265224($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("company/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--装修公司头部结束-->
<div class="subwd">
	<!--主体左边内容开始-->
	<div class="sub_com_lt lt">
		<div class="mb10 com_banner">
			<div bxSlider="company_banner">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/banner",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/banner",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<div class="slider"><a href="<{$item.link}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>" width="720" height="250"></a></div>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/banner",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php if ($_smarty_tpl->tpl_vars['calldata_count']->value<1){?><div class="slider"><a><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/default/company_banner.jpg" width="720" height="250"></a></div><?php }?>
			</div>
		</div>
		<div class="mb10">
			<div class="com_intro_top lt">
				<h3 class="com_title"><b class="lt">公司简介</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">详情<span class="com_ico more_ico"></span></a></h3>
				<p class="cl"></p>
				<div class="com_box pding"><a href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['company']->value['desc'],260);?>
</a></div>
			</div>
			<div class="com_intro_top rt">
				<h3 class="com_title"><b class="lt">企业新闻</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
				<p class="cl"></p>
				<div class="com_box pding">
					<ul>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'company/news','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>5,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'company/news','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>5,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li><span class="ico_list news_ico"></span><a href="<{link ctl='news:detail' arg0=$item.news_id}>"><{$item.title|cutstr:50}></a></li>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'company/news','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>5,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
			</div>
			<div class="cl"></div>
		</div>
		<div class="mb10 ">
			<h3 class="com_title"><b class="lt">业主评价</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:comment','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
			<p class="cl"></p>
			<div class="new_pinglun com_box com_pinglun">
				<ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li>
						<div class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_80'];?>
" class="lt" /><br /></div>
						<div class="rt">
							<p class="graycl"><span class="lt"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['company']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value){?><label><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['k']->value];?>
<?php }?><?php } ?></span><span class="rt time"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></p>
							<p class="cl"></p>
							<p><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</a>
							</p>
						</div>
					</li>
                    <?php } ?>
				</ul>
			</div>
		</div>
		<div class="mb10 ">
			<h3 class="com_title"><b class="lt">设计团队</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
			<p class="cl"></p>
			<div class="com_box pding">
				<ul class="sub_com_design">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'designer/designer','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'designer/designer','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
						<a href="<{link ctl='blog' arg0=$item.uid}>"><img src="<{$pager.img}>/<{$item.face}>" /></a>
						<p><b><a href="<{link ctl='blog' arg0=$item.uid}>" class="lt tit"><{$item.name}></a></b><span class="rt"><{$item.group_name}></span></p>
						<p><a href="<{link ctl='designer:yuyue' arg0=$item.uid http='ajax'}>"  mini-width='500' mini-load="我要预约" class="btn">我要预约</a></p>
					</li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'designer/designer','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<div class="cl"></div>
			</div>
		</div>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="sub_com_rt rt">
		<div class="mb10">
			<table cellpadding="0" cellspacing="0" class="sub_com_list">
				<tr>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['case_num'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>图库案例</p></td>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['tenders_num'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>签约数</p></td>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['site_num'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>在建工地</p></td>
				</tr>
				<tr>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['news_num'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>企业新闻</p></td>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['yuyue_num'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>预约数</p></td>
					<td><p><b><?php echo (($tmp = @$_smarty_tpl->tpl_vars['company']->value['comments'])===null||$tmp==='' ? '0' : $tmp);?>
</b></p><p>业主评价</p></td>
				</tr>
			</table>
		</div>
		<div class="mb10 area sub_com_add">
			<p><span class="com_ico com_add"></span><b class="tit">公司地址:</b></p>
			<p><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['company']->value['addr'],60);?>
</p>
		</div>
		<p class="sub_com_tpbt">
			<?php if ($_smarty_tpl->tpl_vars['company']->value['group']['allow_yuyue']>0){?>
			<a href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="免费预约装修公司" mini-width="400" class="btn_sub_tuan btn">免费预约</a>
			<?php }else{ ?>
			<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:fast','http'=>'ajax'),$_smarty_tpl);?>
" mini-load="免费发布装修招标" mini-width="500"  class="btn_sub_tuan btn">免费招标</a>
			<?php }?>
			您是<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['company']->value['views'];?>
</font>位访客</p>
		<div class="mb10">
			<h3 class="com_title"><b class="lt">优惠活动</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
			<p class="cl"></p>
			<div class="com_box com_youhui pding">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'company/youhui','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>1,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'company/youhui','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>1,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<div class="opacity_img lt">
                    <a href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>"><img src="<{$pager.img}>/<{$item.photo}>" /></a>
					<p class="bg"></p>
					<p class="text"><{$item.title|cutstr:15}></p>
				</div>
				<div class="rt">
					<p><{if $item.ltime>time() && $item.stime<time()}><span class="ico_list sub_youhui_time"></span><{else}><span class="ico_list sub_over_time_ico"></span><{/if}>
                    <p><span  remaintime="<{$item.ltime}>"></span></p>
					<p><a href="<{link ctl='youhui:detail' arg0=$item.youhui_id}>" class="btn btn_sub_sm">去看看</a>
					</p>
				</div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'company/youhui','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>1,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="cl"></div>
			</div>
		</div>
        <?php if ($_smarty_tpl->tpl_vars['company']->value['video']){?>
		<div class="mb10">
			<h3><b>视频简介</b></h3>
			<div class="video"><embed src="<?php echo $_smarty_tpl->tpl_vars['company']->value['video'];?>
" quality="high" width="260" height="200" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed></div>
		</div>
        <?php }?>
		<div class="mb10">
			<h3 class="com_title"><b class="lt">最新预约</b></a>
			</h3>
			<p class="cl"></p>
			<p class="com_yuyue_title tit"><span>业主</span><span class="mid">电话</span><span>日期</span>
				</li>
			<div class="com_box com_yuyue_box">
				<ul class="com_yuyue">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/yuyue",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/yuyue",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><span><{$item.contact|cutstr:3:'**'}></span><span  class="mid"><{$item.mobile|cutstr:6:'****'}></span><span><{$item.dateline|format:'m-d'}></span></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/yuyue",'company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
	<div class="mb10">
		<h3 class="com_title"><b class="lt">装修案例</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:cases','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id']),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
		<p class="cl"></p>
		<div class="com_box">
			<ul class="com_case">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'case/case','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'case/case','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<div class="opacity_img"><a href="<{link ctl='case:detail' arg0=$item.case_id arg1=1}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
						<a href="<{link ctl='case:yuyue' arg0=$item.case_id}>" class="yuyue">免费预约设计</a>
						<p class="bg"></p>
						<p class="text"><span class="lt"><{$item.title}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.views}></span></p>
					</div>
				</li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'case/case','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>4,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20">
		<h3 class="com_title"><b class="lt">在建工地</b><a href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
" class="rt">更多<span class="com_ico more_ico"></span></a></h3>
		<p class="cl"></p>
		<div class="com_box pding">
			<ul class="com_site">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'home/site','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>3,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'home/site','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>3,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<div class="main_site main_list">
						<a href="<{link ctl='site:detail' arg0=$item.site_id}>" class="lt pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
						<div class="main_site_rt main_list_rt rt">
							<h3><p class="lt"><b><a <{if $item.home_id}>href="<{link ctl='home:detail' arg0=$item.home_id}>"<{/if}>><{$item.home_name}></a></b></p></h3>
							<div class="main_site_rt_top">
								<div class="lt">
									<p><span class="ico_list fengge_ico"></span>价格：<{$item.price}>万元</p>
									<p><span class="ico_list company_ico"></span>小区：<{$item.home_name}></p>
								</div>
								<a href="<{link ctl='site:yuyue' arg0=$item.site_id http='ajax'}>" mini-width='500' mini-load="我要参观工地" class="btn_sub_sm btn rt">我要参观</a>
							</div>
							<div class="cl"></div>
							<div class="site_step">
								<p class="step bar"><span class="bar step_color step<{$item.status}>"></span></p>
								<p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
							</div>
						</div>
						<div class="cl"></div>
					</div>
				</li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'home/site','company_id'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'limit'=>3,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
(function(K, $){
    $(function(){
    var dateTime = new Date();
    var difference = dateTime.getTime() - <?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
*1000;	
    setInterval(function(){
      $("[remaintime]").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('remaintime')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
        var myH=Math.floor(nMS/(1000*60*60)) % 24;
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
			var str = myD+"天"+myH+"小时"+myM+"分"+myS+"."+myMS+"秒";
        }else{
			var str = "真遗憾您来晚了，抢购已经结束。";	
		}
		obj.html(str);
      });
    }, 100);
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("company/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>