<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:17:12
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\blog\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2013959361eb89aa376-90846678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ae1fe4f4d36cf6ae133174ef648cb79403c31f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\blog\\block\\header.html',
      1 => 1429266753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2013959361eb89aa376-90846678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'designer' => 0,
    'pager' => 0,
    'v' => 0,
    'k' => 0,
    'curr_home' => 0,
    'curr_about' => 0,
    'curr_case' => 0,
    'curr_article' => 0,
    'curr_comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361eb8a1f685_78051913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361eb8a1f685_78051913')) {function content_59361eb8a1f685_78051913($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
">设计师列表</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'designer:detail','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['designer']->value['name'];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<!--找工长头部开始-->
<div class="sub_designer_top mb20">
	<div class="subwd">
		<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['designer']->value['face'];?>
" class="lt pic" />
		<div class="sub_designer_top_lt lt">
			<h1><?php echo $_smarty_tpl->tpl_vars['designer']->value['name'];?>
<span class="fr_span"><?php if ($_smarty_tpl->tpl_vars['designer']->value['verify']==1){?><font class="ico_list foreman_rz"></font>已认证</span><?php }?></h1>
			<p class="list"><span>关注数：<b><?php echo $_smarty_tpl->tpl_vars['designer']->value['attention_num'];?>
</b></span><span>预约数：<b><?php echo $_smarty_tpl->tpl_vars['designer']->value['yuyue_num'];?>
</b></span><span>案例：<b><?php echo $_smarty_tpl->tpl_vars['designer']->value['case_num'];?>
</b></span><span>博文数：<b><?php echo $_smarty_tpl->tpl_vars['designer']->value['blog_num'];?>
</b></span></p>
			<p><a href="<?php echo smarty_function_link(array('ctl'=>'designer:attention','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" mini-act="+关注" class="btn">+关注</a>
				<?php if ($_smarty_tpl->tpl_vars['designer']->value['group']['priv']['allow_yuyue']<0){?>
                 	<a href="<?php echo smarty_function_link(array('ctl'=>'tenders:fast','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="立即招标" class="btn">立即招标</a>
                <?php }else{ ?>
                	<a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="委托设计"  class="btn">委托设计</a>
                <?php }?>
                <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_smarty_tpl->tpl_vars['designer']->value['show_qq'];?>
&amp;site=qq&amp;menu=yes" class="ico_list qq_ico"></a>
			</p>
		</div>
		<div class="sub_designer_top_rt pingfen_bar rt">
        	<p class="title">综合评价：<?php echo $_smarty_tpl->tpl_vars['designer']->value['avg_score'];?>
</p>
			 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            	<p><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<span class="bar probar_gray"><span class="bar probar_color bar2" style="width:<?php echo $_smarty_tpl->tpl_vars['designer']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]*20;?>
%"></span></span><?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['designer']->value['avg_scores'][$_smarty_tpl->tpl_vars['k']->value]);?>
</p>
             <?php } ?>
		</div>
		<div class="cl"></div>
	</div>
</div>
<!--找工长头部结束-->
<div class="subwd mb20">
    <!--主体左边内容开始-->
    <div class="sub_designer_lt lt">
        <ul class="designer_nav hoverno">
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['curr_home']->value){?> class="current"<?php }?>>主页</a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'blog:about','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['curr_about']->value){?> class="current"<?php }?>>个人简介</a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'blog:cases','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['curr_case']->value){?> class="current"<?php }?>>案例展示</a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'blog:article','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['curr_article']->value){?> class="current"<?php }?>>他的文章</a></li>
            <li><a href="<?php echo smarty_function_link(array('ctl'=>'blog:comments','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['curr_comment']->value){?> class="current"<?php }?>>他的评价</a></li>
        </ul>
        <div class="cl"></div>
<?php }} ?>