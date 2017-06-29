<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:00:05
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\home\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1588359340455718ce0-57249020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04da3821bc8a39345c49f2071410d4374fa93881' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\home\\block\\header.html',
      1 => 1429266756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1588359340455718ce0-57249020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'home' => 0,
    'request' => 0,
    'uri' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5934045594a807_00729701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5934045594a807_00729701')) {function content_5934045594a807_00729701($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--头部内容结束-->
<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
    <p><span class="ico_list breadna"></span>您的位置：<a href="index"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
        ><a href="<?php echo smarty_function_link(array('ctl'=>'home:items'),$_smarty_tpl);?>
">小区楼盘</a>
        ><a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
</a>
    </p>
</div>
<!--面包屑导航结束-->
<!--头部导航开始-->
<div class="subwd mb10">
    <h1 class="home_top"><span class="lt"><?php echo $_smarty_tpl->tpl_vars['home']->value['name'];?>
 <font> (<?php echo $_smarty_tpl->tpl_vars['home']->value['views'];?>
人浏览)</font></span><span class="rt">本楼群盘QQ群 : <b class="fontcl1"> <?php echo $_smarty_tpl->tpl_vars['home']->value['qq_qun'];?>
</b></span></h1>
    <div class="cl"></div>
</div>
<div class="home_nav hoverno mb10">
    <div class="subwd">
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'detail')){?>class="current"<?php }?>>楼盘主页</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:cases','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'cases')||strpos($_smarty_tpl->tpl_vars['uri']->value,'caseDetail')){?>class="current"<?php }?>>设计方案</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:info','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'info')){?>class="current"<?php }?>>楼盘详情</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>2),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'photo')&&$_smarty_tpl->tpl_vars['type']->value==2){?>class="current"<?php }?>>实景图</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>1),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'photo')&&$_smarty_tpl->tpl_vars['type']->value==1){?>class="current"<?php }?>>户型图</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:photo','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id'],'arg1'=>3),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'photo')&&$_smarty_tpl->tpl_vars['type']->value==3){?>class="current"<?php }?>>样板间</a>
        <a href="<?php echo smarty_function_link(array('ctl'=>'home:site','arg0'=>$_smarty_tpl->tpl_vars['home']->value['home_id']),$_smarty_tpl);?>
" <?php if (strpos($_smarty_tpl->tpl_vars['request']->value['uri'],'site')){?>class="current"<?php }?>>在建工地</a>
    </div>
</div>
<!--头部导航结束-->
<div class="subwd"><?php }} ?>