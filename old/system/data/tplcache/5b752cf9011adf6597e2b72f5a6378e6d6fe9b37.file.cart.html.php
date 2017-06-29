<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 22:12:21
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\trade\order\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:15033593415453078f8-71704576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b752cf9011adf6597e2b72f5a6378e6d6fe9b37' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\trade\\order\\cart.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15033593415453078f8-71704576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'item' => 0,
    'pager' => 0,
    'shop_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_593415458774d8_39085601',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593415458774d8_39085601')) {function content_593415458774d8_39085601($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<!--购物流程图开始-->
<div class="subwd">
	<div class="shop_liuch">
		<p class="liuch_intro"><span class="first">购物车</span><span>填写核对订单信息</span><span>成功提交订单</span><span>等待付款</span><span>等待发货</span><span class="last">订单已完成</span></p>
		<p class="sp_liuch shop1"></p>
	</div>
	<h2>我的购物车</h2>
	<div class="area mb20">
		<table class="shop_car" cellpadding="0" cellspacing="0">
			<tr class="title">
				<td class="first">商品信息</td><td>商品单价</td><td>运费</td><td>数量</td><td>小计</td><td>操作</td>
			</tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<tr>
				<td class="first">
					<a class="lt" href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'arg1'=>1),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" /></a>
					<p class="rt"><a href="<?php echo smarty_function_link(array('ctl'=>'mall/product:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'arg1'=>1),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php if ($_smarty_tpl->tpl_vars['item']->value['spec']){?>【<?php echo $_smarty_tpl->tpl_vars['item']->value['spec']['spec_name'];?>
】<?php }?></p>
					<p class="rt">商家 : <?php echo $_smarty_tpl->tpl_vars['shop_list']->value[$_smarty_tpl->tpl_vars['item']->value['shop_id']]['name'];?>
</p>
				</td>
				<td><b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['product_price'];?>
</b></td>
				<td><b class="fontcl2"><?php if ($_smarty_tpl->tpl_vars['item']->value['freight']){?>￥<?php echo $_smarty_tpl->tpl_vars['item']->value['freight'];?>
<?php }else{ ?>包邮<?php }?></b></td>
				<td><p class="buy_count"><a class="jian" quantity="-/<?php echo $_smarty_tpl->tpl_vars['item']->value['cart_key'];?>
">▁</a><input type="text" number="<?php echo $_smarty_tpl->tpl_vars['item']->value['cart_key'];?>
" id="product_number_<?php echo $_smarty_tpl->tpl_vars['item']->value['cart_key'];?>
" class="buy_count_text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
" /><a class="jia" quantity="+/<?php echo $_smarty_tpl->tpl_vars['item']->value['cart_key'];?>
">+</a></p>
                </td>
				<td><b class="fontcl2">￥<?php echo ($_smarty_tpl->tpl_vars['item']->value['product_price']*$_smarty_tpl->tpl_vars['item']->value['num']+$_smarty_tpl->tpl_vars['item']->value['freight']);?>
</b></td>
				<td><a href="<?php echo smarty_function_link(array('ctl'=>'trade/cart:delete','arg0'=>$_smarty_tpl->tpl_vars['item']->value['product_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['spec_id']),$_smarty_tpl);?>
" mini-act="confirm:您确定要从购物车中移除该商品？">删除</a></td>
			</tr>
            <?php } ?>
			<tr class="last">
				<td colspan="6">
				<a href="<?php echo smarty_function_link(array('ctl'=>'mall/index'),$_smarty_tpl);?>
" class="lt btn gray_btn">继续购买</a>
				<p class="rt"><span>共计<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['cart']->value['product_count'];?>
</b>件商品</span><span>合计（含运费）：<b class="fontcl2">￥<?php echo $_smarty_tpl->tpl_vars['cart']->value['total_amount'];?>
</b></span><a href="<?php echo smarty_function_link(array('ctl'=>'trade/cart:checkout'),$_smarty_tpl);?>
" class=" btn btn_sub_big">去结算</a></p>
				</td>
			</tr>
		</table>
	</div>
</div>
<!--购物流程图结束-->
<script type="text/javascript">
(function(K, $){
    $("[quantity]").click(function(e){
        e.stopPropagation();e.preventDefault();
        var a = $(this).attr("quantity").split("/");
        var number = parseInt($("#product_number_"+a[1]).val(), 10);
        Widget.MsgBox.success("正在更新购物车");
        Widget.MsgBox.load("正在更新购物车");
        if('-' == a[0]){
            if(number < 2){
                Widget.MsgBox.error("数量不能小于1");
                return false;
            }else{
                number = number -1;
                $("#product_number_"+a[1]).val(number);
                var link = "<?php echo smarty_function_link(array('ctl'=>'trade/cart:update','arg0'=>'#sk#','arg1'=>'#num#'),$_smarty_tpl);?>
&<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
";
                $.getJSON(link.replace("#sk#", a[1]).replace("#num#", number), function(ret){
                    if(ret.error){
                        Widget.MsgBox.error(ret.message.join(","));
                    }else{
                        Widget.MsgBox.success("更新购物车成功");
                        setTimeout(function(){window.location.reload(true);}, 1500);
                    }
                });
            }
        }else{
            $("#product_number_"+a[1]).val(number+1);
            var link = "<?php echo smarty_function_link(array('ctl'=>'trade/cart:add','arg0'=>'#sk#','arg1'=>'1'),$_smarty_tpl);?>
&<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
";
            $.getJSON(link.replace("#sk#", a[1]), function(ret){
                if(ret.error){
                    Widget.MsgBox.error(ret.message.join(","));
                }else{
                    Widget.MsgBox.success("更新购物车成功");
                    setTimeout(function(){window.location.reload(true);}, 1500);
                }
            });
        }
    });
    $("[number]").change(function(){
        var pid = $(this).attr("number");
        var number = parseInt($(this).val(), 10);
        if(number < 1){
            number = 1;
        }
        Widget.MsgBox.success("正在更新购物车");
        Widget.MsgBox.load("正在更新购物车");
        var link = "<?php echo smarty_function_link(array('ctl'=>'trade/cart:update','arg0'=>'#pid#','arg1'=>'#num#'),$_smarty_tpl);?>
&<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
";
        $.getJSON(link.replace("#pid#", pid).replace("#num#", number), function(ret){
            if(ret.error){
                Widget.MsgBox.error(ret.message.join(","));
            }else{
                Widget.MsgBox.success("更新购物车成功");
                setTimeout(function(){window.location.reload(true);}, 1500);
            }
        });        
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>