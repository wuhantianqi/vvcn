<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:20
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\blog\about.html" */ ?>
<?php /*%%SmartyHeaderCode:3001359361efcee5b31-87598312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bae7d66e517f8175fa2d2fb8942b650d3152de1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\blog\\about.html',
      1 => 1430882499,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3001359361efcee5b31-87598312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company' => 0,
    'designer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361efcf24343_50367489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361efcf24343_50367489')) {function content_59361efcf24343_50367489($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["curr_about"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="area pding sub_designer">
	<div class="mb10 designer_inrto">
		<p class="title"><span class="lt">个人简介</span></p>
		<p><span>所在公司：<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</span><span>联系方式：<?php echo $_smarty_tpl->tpl_vars['designer']->value['show_phone'];?>
</span></p>
		<p><span>所在地区：<?php echo $_smarty_tpl->tpl_vars['designer']->value['city_name'];?>
<?php echo $_smarty_tpl->tpl_vars['designer']->value['area_name'];?>
</span><span>毕业院校：<?php echo $_smarty_tpl->tpl_vars['designer']->value['school'];?>
</span></p>
		个人简介:<?php echo $_smarty_tpl->tpl_vars['designer']->value['about'];?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>