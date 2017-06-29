<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:10:15
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\shop\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29779593406b7b9ef94-42669086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f94d57b291ec0bb8582acac91deee5be79df8e71' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\shop\\index.html',
      1 => 1432290026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29779593406b7b9ef94-42669086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_593406b7df3ec2_32621022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593406b7df3ec2_32621022')) {function content_593406b7df3ec2_32621022($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("shop/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--左边主体内容开始-->
<div class="rt shop_rt mb20">
    <?php if ($_smarty_tpl->tpl_vars['shop']->value['group']['priv']['allow_banner']>0){?>
    <div bxSlider="shop_banner">
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/banner",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/banner",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <{if $calldata_count<1}><div class="slider"><a><img src="<{$pager.img}>/default/shop_banner.jpg" width="780" height="200"></a></div><{else}>
    <div class="slider"><a href="<{$item.link}>" title="<{$item.title}>" target="_blank"><img src="<{$pager.img}>/<{$item.photo}>" width="780" height="200"></a></div><{/if}>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/banner",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>
    <?php }?>
    <div class="mb10">
        <div class="area shop_box pding lt">
            <p class="shop_tit"><b class="lt">商家介绍</b><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:info','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" class="rt">更多<span class="shop_ico"></span></a></p>
            <div class="cl"></div>
            <p>商家名称：<?php echo $_smarty_tpl->tpl_vars['shop']->value['title'];?>
</p>
            <p>联系人：<?php echo $_smarty_tpl->tpl_vars['shop']->value['contact'];?>
</p>
            <p>联系方式：<?php echo $_smarty_tpl->tpl_vars['shop']->value['show_phone'];?>
</p>
            <p>主营行业：<?php echo $_smarty_tpl->tpl_vars['shop']->value['cat_title'];?>
</p>
            <p>所在地点：<?php echo $_smarty_tpl->tpl_vars['shop']->value['addr'];?>
</p>
        </div>
        <div class="area shop_box pding rt">
            <p class="shop_tit"><b class="lt">活动资讯</b><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop:news','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'shop'=>$_smarty_tpl->tpl_vars['shop']->value),$_smarty_tpl);?>
" class="rt">更多<span class="shop_ico"></span></a></p>
             <ul class="content_list shop_news">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/news",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"6",'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/news",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"6",'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <a href="<{link ctl='mall/shop:newsdetail' arg0=$item.news_id shop=$shop}>" class="lt"><span class="ico_list news_ico"></span><{$item.title|cutstr:35}></a><span class="graycl rt"><{$item.dateline|format}></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/news",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>"6",'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="cl"></div>
    </div>
    <div class="area pding mb10">
        <p class="shop_tit"><b class="lt">热门优惠券</b></p>
        <ul class="coupon hoverno">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"shop/coupon",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>3)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>3), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <a href="<{link ctl='mall/coupon:detail' arg0=$item.coupon_id}>">
                <div class="coupon_box">
                    <p class="price"><b class="lt">¥ <{$item.money}></b><span class="rt">全店通用</span></p>
                    <p class="cl"></p>
                    <p>使用条件：满<{$item.min_amount}>元减<{$item.money}>元</p>
                    <p>有效时间：<{$item.expire_label}></p>
                </div>
                </a>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"shop/coupon",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>3), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="cl"></div>
    </div>
    <div class="area pding">
        <p class="shop_tit"><b class="lt">所有商品</b><a href="#" class="rt">更多<span class="shop_ico"></span></a></p>
        <ul class="mall_ul line_type shop_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"product/product",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>9,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"product/product",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>9,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>" class="pic"><img src="<{$pager.img}>/<{$item.photo}>_thumb.jpg" /></a>
                <p><a href="<{link ctl='mall/product:detail' arg0=$item.product_id}>"><{$item.name}></a></p>
                <p class="price"><b class="fontcl2">￥<{$item.price}></b><span>￥<{$item.market_price}></span></p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"product/product",'shop_id'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id'],'limit'=>9,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
					
        </ul>
        <div class="cl"></div>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("shop/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>