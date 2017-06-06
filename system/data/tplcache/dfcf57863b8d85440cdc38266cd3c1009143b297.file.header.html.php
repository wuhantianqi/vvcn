<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:43
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\company\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1822659361f13b6c425-75925271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcf57863b8d85440cdc38266cd3c1009143b297' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\company\\block\\header.html',
      1 => 1429266755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822659361f13b6c425-75925271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'pager' => 0,
    'css' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361f13c2f957_10149926',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361f13c2f957_10149926')) {function content_59361f13c2f957_10149926($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_qq')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.qq.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link type="text/css" rel="stylesheet" href="/themes/default/company/style/default/style.css" />
<?php if ($_smarty_tpl->tpl_vars['company']->value['skin_cfg']){?><?php  $_smarty_tpl->tpl_vars['css'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['company']->value['skin_cfg']['css']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css']->key => $_smarty_tpl->tpl_vars['css']->value){
$_smarty_tpl->tpl_vars['css']->_loop = true;
?><link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['theme'];?>
/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
"/><?php } ?><?php }?>
<!--装修公司头部开始-->
<div class="company_top">
	<div class="subwd">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['logo'];?>
" class="lt pic" />
		<div class="company_top_lt lt">
			<h1><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['company']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['company']->value['verify_name']==2){?>
				<span class="com_rz_ico ico_list"></span>
                <?php }elseif($_smarty_tpl->tpl_vars['company']->value['verify_name']==1){?>
                <span class="ps_rz_ico ico_list"></span>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['is_vip']){?><span class="tuiguang_ico ico_list"></span><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['company']->value['xiaobao']){?><span class="bz_metals"><?php echo $_smarty_tpl->tpl_vars['company']->value['xiaobao'];?>
元<font class="ico_list"></font></span><?php }?>
            </h1>
			<h2>
				<span><font class="com_ico com_tel"></font><?php echo $_smarty_tpl->tpl_vars['company']->value['show_phone'];?>
</span>
				<?php if ($_smarty_tpl->tpl_vars['company']->value['group']['show_phone']&&$_smarty_tpl->tpl_vars['company']->value['mobile']){?><span><font class="com_ico com_phone"></font><?php echo $_smarty_tpl->tpl_vars['company']->value['mobile'];?>
</span><?php }?>
				<span class=""><?php echo smarty_modifier_qq($_smarty_tpl->tpl_vars['company']->value['show_qq']);?>
</span>
			</h2>
		</div>
		<div class="company_top_rt pingfen_bar rt">
			<p class="title">综合评价：<?php echo $_smarty_tpl->tpl_vars['company']->value['avg_score'];?>
</p>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['company']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?><?php if ($_smarty_tpl->tpl_vars['v']->index>2){?><?php break 1?><?php }?>
			<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['company']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
			<?php } ?>
		</div>
		<div class="cl"></div>
	</div>
</div>
<div class="company_nav mb10">
	<div class="subwd">
		<ul class="lt hoverno">
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='detail'){?> class="current"<?php }?>>首页</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:about','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='about'){?> class="current"<?php }?>>企业介绍</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:team','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='team'){?> class="current"<?php }?>>设计团队</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:cases','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='cases'){?> class="current"<?php }?>>装修案例</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:site','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='site'){?> class="current"<?php }?>>在建工地</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:youhui','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='youhui'){?> class="current"<?php }?>>优惠信息</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:news','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='news'){?> class="current"<?php }?>>企业新闻</a></li>
			<li><a href="<?php echo smarty_function_link(array('ctl'=>'company:comment','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'company'=>$_smarty_tpl->tpl_vars['company']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['act']=='comment'){?> class="current"<?php }?>>业主评价</a></li>
		</ul>
		<div class="rt company_nav_rt"><p>信誉：<?php echo $_smarty_tpl->tpl_vars['company']->value['scores'];?>
</p></div>
		<div class="cl"></div>
	</div>
</div><?php }} ?>