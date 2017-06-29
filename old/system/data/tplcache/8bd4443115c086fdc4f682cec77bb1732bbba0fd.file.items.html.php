<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:43:54
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\mall\store\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1710159341caa806b85-53654187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bd4443115c086fdc4f682cec77bb1732bbba0fd' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\mall\\store\\items.html',
      1 => 1434190024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710159341caa806b85-53654187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cate_list' => 0,
    'v' => 0,
    'pager' => 0,
    'items' => 0,
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59341caadbdfb8_49716808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59341caadbdfb8_49716808')) {function content_59341caadbdfb8_49716808($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_KT')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.KT.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="#"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>><a href="#">家居商城</a>><a href="#">商家列表</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="mb10 area pding mall_option hoverno">
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
			<?php if (!$_smarty_tpl->tpl_vars['v']->value['parent_id']){?><a href="<?php echo smarty_function_link(array('ctl'=>'mall/store','arg0'=>$_smarty_tpl->tpl_vars['v']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'arg2'=>1),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']==$_smarty_tpl->tpl_vars['pager']->value['cat_id']){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a><?php }?>
			<?php } ?>
		</div>
		<div class="mb20">
			<h2>商铺列表</h2>
			<div class="sort_box">
				<p class="sort_list hoverno">
					<span class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/store'),$_smarty_tpl);?>
" title="商家列表" class="on"><font class="ico_list sj_on"></font></a>
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall/product'),$_smarty_tpl);?>
" title="商品列表" ><font class="ico_list block_over"></font></a>
				</span>
				</p>
			</div>
			<div class="area">
				<ul class="block_type main_designer_ul">
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li>
						<div class="main_mall main_list">
							<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_url'];?>
" class="lt pic"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" /></a>
							<div class="main_mall_rt main_list_rt rt">
								<h3>
									<p class="lt"><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_url'];?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></b></p>
									<span class="rt">信誉指数：<?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</span>
								</h3>
								<div class="lt">
									<p>联系电话：<?php echo $_smarty_tpl->tpl_vars['item']->value['show_phone'];?>
</p>
									<p>店铺等级：<?php echo $_smarty_tpl->tpl_vars['item']->value['group']['group_name'];?>
</p>
									<p><span>共有商品：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['products'];?>
</font>件 </span><span>浏览量：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</font></span></p>
								</div>
								<div class="rt"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['shop_url'];?>
" class="btn_main_big btn rt">进入店铺</a></div>
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
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"建材招标",'from'=>"TJC"),$_smarty_tpl);?>

		<div class="mb20 area">
			<h3 class="side_tit">热门排行</h3>
			<ul class="mall_ul side_mall_ul pding">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"35",'name'=>"商城商品列表右侧热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"35",'name'=>"商城商品列表右侧热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<{$item.link}>" class="pic"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                    <p><b><a href="<{$item.ext.shop.shop_url}>" class="tit"><{$item.ext.shop.name}></a></b></p>
                    <p><a href="<{$item.link}>"><{$item.name}></a></p>
                    <p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"35",'name'=>"商城商品列表右侧热卖商品",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
	</div>
	<div class="cl"></div>
	<!--主体右边内容结束-->
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>