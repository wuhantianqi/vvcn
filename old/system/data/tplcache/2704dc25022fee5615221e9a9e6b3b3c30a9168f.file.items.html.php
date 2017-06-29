<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:32:39
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\youhui\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1559259340bf72f0987-57788634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2704dc25022fee5615221e9a9e6b3b3c30a9168f' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\youhui\\items.html',
      1 => 1429266754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1559259340bf72f0987-57788634',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'items' => 0,
    'item' => 0,
    'pager' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340bf74feb95_64458003',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340bf74feb95_64458003')) {function content_59340bf74feb95_64458003($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'gs:index'),$_smarty_tpl);?>
">找装修公司</a>><a href="<?php echo smarty_function_link(array('ctl'=>'youhui:items'),$_smarty_tpl);?>
">优惠信息</a>
		</p>
	</div>
</div>
<div class="mainwd">
	<div class="main_content lt">
		<div class="mb20">
			<h2>优惠信息</h2>
			<ul class="line_type main_youhui">
            	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>
                	<?php if ($_smarty_tpl->tpl_vars['item']->index%3==0){?>
                		<li class="first">
                    <?php }else{ ?>
                    	<li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['ltime']>time()&&$_smarty_tpl->tpl_vars['item']->value['stime']<time()){?>
                        <span class="ico_list be_paint"></span>
                    <?php }else{ ?>
                    	<span class="ico_list over_paint"></span>
                    <?php }?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" /></a>
                        <h3><a href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
"  target="_blank"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],25);?>
</a></h3>
                       
                            <p class="colorbg"><span class="lt tit"><font class="youhui_time ico_list"></font><span remaintime="<?php echo $_smarty_tpl->tpl_vars['item']->value['ltime'];?>
"></span></span>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['ltime']>time()&&$_smarty_tpl->tpl_vars['item']->value['stime']<time()){?>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="btn_sub_sm rt btn">立即参团</a>
                                <?php }else{ ?>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'youhui:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['youhui_id']),$_smarty_tpl);?>
" class="youhui_over_btn rt btn">已结束</a></p>
                                <?php }?>
                            </p>
                    </li>
                <?php } ?>
                
			</ul>
			<div class="cl"></div>
			<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
		</div>
	</div>
	
	<div class="side_content rt">
		<div class="mb10 area">
			<h3 class="side_tit">推荐装修公司</h3>
			<ul class="pding paihang">
            	<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'order'=>"score:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'order'=>"score:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a></span>
                        <span class="rt">信誉度：<font class="fontcl2"><{$item.score}></font></span>
                    </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'order'=>"score:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="mb20 "><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/cloud-zoom.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/raty/jquery.raty.js"></script>
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
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>