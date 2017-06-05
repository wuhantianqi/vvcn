<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:12:28
         compiled from "admin:page/miniframe.html" */ ?>
<?php /*%%SmartyHeaderCode:314765935207c365847-38770246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e12af4c871d9c2864673b02be3e0fba987b2d78' => 
    array (
      0 => 'admin:page/miniframe.html',
      1 => 1429266742,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '314765935207c365847-38770246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5935207c3a4052_05247418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935207c3a4052_05247418')) {function content_5935207c3a4052_05247418($_smarty_tpl) {?><!DOCTYPE html>
<html>
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MiniFrame</title>
</head>
 <body></body>
<script type="text/javascript">
window.Widget = parent.window.Widget;
(function(K, $){
	<?php if ($_smarty_tpl->tpl_vars['pager']->value['error']&&$_smarty_tpl->tpl_vars['pager']->value['error']!=200){?>
	Widget.MsgBox.error("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
	parent.window.__MINI_LOAD = false;
	<?php }elseif($_smarty_tpl->tpl_vars['pager']->value['noreload']){?>
	parent.window.__MINI_LOAD = false;
	Widget.MsgBox.success("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
	<?php }else{ ?>
	Widget.MsgBox.success("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
",function(){});
	setTimeout(function(){<?php if ($_smarty_tpl->tpl_vars['pager']->value['link']){?>parent.window.location = "<?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
";<?php }else{ ?>parent.window.location.reload(true);<?php }?>},800);
	<?php }?>
})(parent.window.KT, parent.window.jQuery);
</script>
</html>
<?php }} ?>