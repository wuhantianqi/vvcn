<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:23
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\site\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1303559352e4b1b0bc2-79821050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de45a575139f2e13e704051a1b800757b35b0fd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\site\\items.html',
      1 => 1432555700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1303559352e4b1b0bc2-79821050',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'area_list' => 0,
    'v' => 0,
    'order_list' => 0,
    'items' => 0,
    'item' => 0,
    'company_list' => 0,
    'designer_list' => 0,
    'designer' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e4b2aac02_01152592',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e4b2aac02_01152592')) {function content_59352e4b2aac02_01152592($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'site:index'),$_smarty_tpl);?>
">在建工地</a>
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
                        <a  href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>0,'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'arg2'=>1),$_smarty_tpl);?>
" <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['area_id'])){?>class="current"<?php }?>>不限</a>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>$_smarty_tpl->tpl_vars['v']->value['area_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['area_id']==$_smarty_tpl->tpl_vars['pager']->value['area_id']){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                        <?php } ?>
					</td>
				</tr>
			</table>
		</div>
		<div class="mb20">
			<h2>建筑工地列表</h2>
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
<span <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                    <?php } ?> 
				</p>
			</div>
			<div class="area">
				<ul class="block_type">
                	 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                     	<li>
                            <div class="main_site main_list">
                                <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="lt pic"  target="_blank"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                                <div class="main_site_rt main_list_rt rt">
                                    <h3>
                                        <p class="lt"><b><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],77);?>
</a>
                                            </b></p>
                                    </h3>
                                    <div class="main_site_rt_top">
                                        <div class="lt">
                                            <p><span class="ico_list fengge_ico"></span>小区名称：<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['home_name'],77);?>
</p>
                                            <p><span class="ico_list company_ico"></span>
                                            	<?php if ($_smarty_tpl->tpl_vars['company_list']->value){?>
                                                	承接公司：<a href="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['company_url'];?>
"  target="_blank"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
 </font></a>
                                                <?php }elseif($_smarty_tpl->tpl_vars['designer_list']->value){?>
                                                	承接设计师：<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"  target="_blank"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'];?>
 </font></a>
                                                <?php }?>
                                            </p>
                                        </div>
                                            <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="btn_main_big btn rt"  target="_blank">我要参观</a>
                                    </div>
                                    <div class="cl"></div>
                                    <div class="site_step">
                                        <p class="step bar"> <span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></span></p>
                                        <p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
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

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>