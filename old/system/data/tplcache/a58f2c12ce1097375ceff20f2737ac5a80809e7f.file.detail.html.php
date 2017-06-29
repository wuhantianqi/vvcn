<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:00:04
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\home\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1366559340454e388b0-69985071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58f2c12ce1097375ceff20f2737ac5a80809e7f' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\home\\detail.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1366559340454e388b0-69985071',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'home' => 0,
    'home_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340455671f29_95935016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340455671f29_95935016')) {function content_59340455671f29_95935016($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("home/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!--主体左边内容开始-->
	<div class="sub_home_lt lt">
		<div class="pding area mb10 home_index_top">
			<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['home']->value['thumb'];?>
" class="pic lt" />
			<div class="rt">
				<p>楼盘地址：	<?php echo $_smarty_tpl->tpl_vars['home']->value['addr'];?>
</p>
				<p>竣工时间：	<?php echo $_smarty_tpl->tpl_vars['home']->value['jf_date'];?>
</p>
				<p>参考均价： <font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['home']->value['price'];?>
</font>元/平方米</p>
				<p>开盘时间：	<?php echo $_smarty_tpl->tpl_vars['home']->value['kp_date'];?>
</p>
				<p>开发商： <?php echo $_smarty_tpl->tpl_vars['home']->value['kfs'];?>
 </p>
                <p>小区地址：<?php echo $_smarty_tpl->tpl_vars['home']->value['addr'];?>
</p>
				<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:fast','home_id'=>$_smarty_tpl->tpl_vars['home_id']->value,'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="申请免费设计" mini-width="500" class="btn_sub_tuan btn">申请免费设计</a>
			</div>
			<div class="cl"></div>
		</div>
		<div class="mb10">
			<h2 class="home_title"><span class="lt">设计方案</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:cases','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" class="rt">更多</a></h2>
			<div class="cl"></div>
			<div class="home_box area ">
				<ul class="home_design block_type">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<{link ctl='home:caseDetail' arg0=$item.home_id arg1=$item.case_id}>" class="pic lt"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
                        <div class="rt">
                            <h3><a href="<{link ctl='home:caseDetail' arg0=$item.home_id arg1=$item.case_id}>" class="lt"><{$item.title}></a>
                                <span class="rt"><font class="fontcl2"><{$item.views}></font>人看了此方案</span></h3>
                            <p class="cl"></p>
                            <{if $item.company_id}>
                            <p>方案提供者：<a href="<{link ctl='company' arg0=$item.company_id}>" class="fontcl2"> <{$item.ext.company.name}></a></p>
                            <{else}>
                            <p>方案提供者：<a href="<{link ctl='company' arg0=$item.company_id}>" class="fontcl2">--------</a></p>
                            <{/if}>
                            <p>设计思路：<{$item.intro}></p>
                            <p class="bottom">
                                <span class="lt">
                                    <a href="<{link ctl='home:caseDetail' arg0=$item.home_id arg1=$item.case_id}>#huxin" class="fontcl1">平面布置图</a>
                                    <a href="<{link ctl='home:caseDetail' arg0=$item.home_id arg1=$item.case_id}>#case" class="fontcl1">设计图</a>
                                </span>
                                <a href="<{link ctl='home:caseDetail' arg0=$item.home_id arg1=$item.case_id}>" class="rt btn btn_main_sm">去看看</a>
                            </p>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
	
				</ul>
			</div>
		</div>
		<div class="mb10">
			<h2 class="home_title"><span class="lt">在建工地</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:site','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" class="rt">更多</a>
			</h2>
			<div class="cl"></div>
			<div class="home_box pding area ">
				<ul class="home_pic_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/site",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/site",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="opacity_img">
                            <a href="<{link ctl='site:detail' arg0=$item.site_id}>">
                            <img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                            <p class="bg"></p>
                            <p class="text"><{$item.home_name}></p>
                        </div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/site",'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<div class="cl"></div>
			</div>
		</div>
		<div class="mb10">
			<h2 class="home_title"><span class="lt">户型图</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>1),$_smarty_tpl);?>
" class="rt">更多</a></h2>
			<div class="cl"></div>
			<div class="home_box pding area ">
				<ul class="home_pic_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/photo",'type'=>1,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>1,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button1" rel="fancybox-button1" href="<{$pager.img}>/<{$item.photo}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><{$item.title}></p>
                        </div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>1,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<div class="cl"></div>
			</div>
		</div>
		<div class="mb10">
			<h2 class="home_title"><span class="lt">实景图</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>2),$_smarty_tpl);?>
" class="rt">更多</a></h2>
			<div class="cl"></div>
			<div class="home_box pding area ">
				<ul class="home_pic_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/photo",'type'=>2,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>2,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button2" rel="fancybox-button2" href="<{$pager.img}>/<{$item.photo}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><{$item.title}></p>
                        </div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>2,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<div class="cl"></div>
			</div>
		</div>
		<div class="mb20">
			<h2 class="home_title"><span class="lt">样板间</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>3),$_smarty_tpl);?>
" class="rt">更多</a></h2>
			<div class="cl"></div>
			<div class="home_box pding area ">
				<ul class="home_pic_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"home/photo",'type'=>3,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>3,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button3" rel="fancybox-button3" href="<{$pager.img}>/<{$item.photo}>"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><{$item.title}></p>
                        </div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"home/photo",'type'=>3,'home_id'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'limit'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
				<div class="cl"></div>
			</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
(function(K, $){
	$(".fancybox-button1").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
	$(".fancybox-button2").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
	$(".fancybox-button3").fancybox({
		prevEffect		: 'none',
		nextEffect		: 'none',
		closeBtn		: false,
		helpers		: {
			title	: { type : 'inside' },
			buttons	: {}
		}
	});
})(window.KT, window.jQuery)
</script>
<!--主体左边内容结束-->
<?php echo $_smarty_tpl->getSubTemplate ("home/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>