<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:42:49
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\about\about.html" */ ?>
<?php /*%%SmartyHeaderCode:1460359340e59b8af61-91323005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b989a155f2c5fdbde5a406aa0fb5f243fbf57e6e' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\about\\about.html',
      1 => 1429266774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1460359340e59b8af61-91323005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'info' => 0,
    'items' => 0,
    'item' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340e59c5a9b8_27644759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340e59c5a9b8_27644759')) {function content_59340e59c5a9b8_27644759($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		><a href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['info']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</a>
	</p>
</div>
<!--面包屑导航结束-->
<div class="subwd mb20">
	<!--主体左边内容开始-->
	<div class="about_lt lt">
		<ul>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            	<li><a <?php if ($_smarty_tpl->tpl_vars['item']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?>class="current"<?php }?> href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
            <?php } ?>
		</ul>
	</div>
	<!--主体左边内容结束-->
	<!--主体右边内容开始-->
	<div class="about_rt rt">
		<div class="pding">
			<h2><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h2>
			<?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

		</div>
	</div>
	<!--主体右边内容结束-->
	<div class="cl"></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>