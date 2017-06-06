<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:17:06
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\designer\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1778359361eb2d526d5-78622467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f30ff60d836257308b80217b45bc8e99245815ac' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\designer\\items.html',
      1 => 1432555700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1778359361eb2d526d5-78622467',
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
    'designers' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361eb2eb5ea5_43347024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361eb2eb5ea5_43347024')) {function content_59361eb2eb5ea5_43347024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">找设计师</a>
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
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
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
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
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
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
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
			<h2><font class="lt">设计师列表</font><span class="rt tit">共<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['pager']->value['count'];?>
</font>位</span></h2>
			<div class="cl"></div>
			<div class="sort_box">
                <p class="sort_list hoverno">
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['pager']->value['order']){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                    <?php } ?> 
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
                            <div class="main_designer main_list">
                                <a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="lt pic"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" /></a>
                                <div class="main_designer_rt main_list_rt rt">
                                    <h3><p class="lt"><b><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"  target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></b></p><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['item']->value['qq'];?>
&amp;site=qq&amp;menu=yes" class="ico_list qq_ico rt"></a></h3>
                                    <div class="lt">
                                        <p><span class="ico_list jiuzhi_ico"></span>毕业院校<?php echo $_smarty_tpl->tpl_vars['designers']->value['avg_score'];?>
：<?php echo $_smarty_tpl->tpl_vars['item']->value['school'];?>
</p>
                                        <p><span class="ico_list case_ico"></span>案例数：<?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
套</p>
                                        <p><span class="ico_list zhuanchang_ico"></span>电话： <?php echo $_smarty_tpl->tpl_vars['item']->value['show_phone'];?>
</p>
                                        <p><span class="ico_list linian_ico"></span>设计理念：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['slogan'],50,'...');?>
</p>
                                    </div>
                                   <div class="rt pingfen_bar">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['item']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['item']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
                                    <?php } ?>
                                         <?php if ($_smarty_tpl->tpl_vars['item']->value['group']<0){?>
                                         	<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:fast','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="立即招标" class="btn_main_big btn rt">立即招标</a>
                                         <?php }else{ ?>
                                       		 <a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="免费预约" class="btn_main_big btn rt">免费预约</a>
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
	<div class="side_content rt">	
    <?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>
	
		<div class="mb10 area">
            <h3 class="side_tit">设计师排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="mb10 area">
            <h3 class="side_tit">装修公司排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
		<div class="mb20 "><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
</div>
<script type="text/javascript">
(function(K, $){
    //设计师列表页头像上图标
    $(".main_designer_ul li").mouseover(function(){
        $(this).find("span.love_span").show();
     }).mouseleave(function(){
        $(this).find("span.love_span").hide();
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>