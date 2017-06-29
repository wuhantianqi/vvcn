<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:18:24
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\mall\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21392593408a06f9b69-58999413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c4cf76400843df5524f9f0b5e24ed23c5a9431' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\mall\\index.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21392593408a06f9b69-58999413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_593408a0c3bbc7_89428854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408a0c3bbc7_89428854')) {function content_593408a0c3bbc7_89428854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_KT')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="mainwd">
	<!--banner内容开始-->
	<div class="mb20 index_banner">
		<div class="lt mall_top"><?php echo $_smarty_tpl->getSubTemplate ("mall/block/mall_cate.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
		<div class="rt mall_banner">
			<div class="mall_banner_top"><?php echo smarty_function_adv(array('id'=>"11",'name'=>"商城首页轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
			<div class="mall_banner_bottom ">
				<div class="mall_banner_bt_lt lt">					
					<div class="mall_banner_bt_lt_ul"><?php echo smarty_function_adv(array('id'=>"12",'name'=>"商城首页轮转下方图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
				</div>
				<div class="mall_banner_bt_rt rt">
					<h3>招商入驻</h3>
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
" class="btn btn_sub_tuan">申请商家入驻</a></p>
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'passport'),$_smarty_tpl);?>
">登录商家管理中心</a></p>
				</div>
			</div>
		</div>
		<div class="cl">
		</div>
	</div>
	<!--banner内容结束-->
	<!--商品分类内容开始-->
	<div class="mb20 mall_list">
		<h2><span class="lt">1F建材基础</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="mall_ad lt"><?php echo smarty_function_adv(array('id'=>"13",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            <?php echo smarty_function_adv(array('id'=>"21",'name'=>"商城首页基础建材图片广告2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            </div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1='1'}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.title}>【<{$item.ext.shop.name}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"31",'name'=>"商城首页1F基础建材",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">2F软装配饰</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="mall_ad lt"><?php echo smarty_function_adv(array('id'=>"14",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            <?php echo smarty_function_adv(array('id'=>"22",'name'=>"商城首页2F软装配饰2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>

            </div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.title}>【<{$item.ext.shop.name}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"32",'name'=>"商城首页2F软装配饰",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">3F家具</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="mall_ad lt"><?php echo smarty_function_adv(array('id'=>"15",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
<?php echo smarty_function_adv(array('id'=>"23",'name'=>"商城首页3F家具2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.title}>【<{$item.ext.shop.name}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"33",'name'=>"商城首页3F家具",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<div class="mb20 mall_list">
		<h2><span class="lt">4F家用电器</span><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" class="rt">更多>></a>
		</h2>
		<div class="cl"></div>
		<div class="mall_box area">
			<div class="mall_ad lt"><?php echo smarty_function_adv(array('id'=>"16",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
<?php echo smarty_function_adv(array('id'=>"24",'name'=>"商城首页4F家用电器2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
			<ul class="line_type mall_ul lt">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<a href="<{if $item.link}><{$item.link}><{else}><{link ctl='mall/product:detail' arg0=$item.producdt_id arg1=1}><{/if}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
					<p class="sp"><b><a href="<{$item.link}>"><{$item.title}>【<{$item.ext.shop.name}>】</a></b></p>
					<p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"34",'name'=>"商城首页4F家用电器",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<div class="cl"></div>
		</div>
	</div>
	<!--商品分类内容结束-->
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>