<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:37
         compiled from "admin:page/miniframe.html" */ ?>
<?php /*%%SmartyHeaderCode:44465933f2a5736744-48528404%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e12af4c871d9c2864673b02be3e0fba987b2d78' => 
    array (
      0 => 'admin:page/miniframe.html',
      1 => 1429266744,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '44465933f2a5736744-48528404',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2a5907356_94851031',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2a5907356_94851031')) {function content_5933f2a5907356_94851031($_smarty_tpl) {?><!DOCTYPE html>
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