<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:52:24
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\help\help.html" */ ?>
<?php /*%%SmartyHeaderCode:271905933f478266427-00001442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00bec043c742e310eeb6b7910d1111d013486bc6' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\help\\help.html',
      1 => 1429266764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271905933f478266427-00001442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'cate_list' => 0,
    'item' => 0,
    'items' => 0,
    'it' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f4783acfe4_23969606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4783acfe4_23969606')) {function content_5933f4783acfe4_23969606($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'help','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<div class="subwd mb20">
	<!--主体左边内容开始-->
	<div class="help_lt lt">
		<h2>帮助中心</h2>
        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>   
            <?php if ($_smarty_tpl->tpl_vars['item']->value['from']=='help'&&$_smarty_tpl->tpl_vars['item']->value['parent_id']!=0){?>
                <ul class="help_list">
                    <li class="title"><span class="help_list_ico ico_list"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</li>
                    <?php  $_smarty_tpl->tpl_vars['it'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it']->key => $_smarty_tpl->tpl_vars['it']->value){
$_smarty_tpl->tpl_vars['it']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['it']->value['cat_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>
                        <li>
                             <a <?php if ($_smarty_tpl->tpl_vars['it']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>class="current"<?php }?>  href="<?php echo smarty_function_link(array('ctl'=>'help','arg0'=>$_smarty_tpl->tpl_vars['it']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['it']->value['title'];?>
</a>
                        </li>
                        <?php }?>
                    <?php } ?>
                </ul>
           <?php }?>
        <?php } ?>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="help_rt rt">
		<h2 class="side_tit"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h2>
		<div class="pding">
		<?php echo $_smarty_tpl->tpl_vars['detail']->value['content'];?>

		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>