<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:51
         compiled from "80f2b227b5c97bb06916c18586a61eebd888325d" */ ?>
<?php /*%%SmartyHeaderCode:61155933f2b353ed27-94201437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80f2b227b5c97bb06916c18586a61eebd888325d' => 
    array (
      0 => '80f2b227b5c97bb06916c18586a61eebd888325d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '61155933f2b353ed27-94201437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b36089a2_68832642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b36089a2_68832642')) {function content_5933f2b36089a2_68832642($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'help','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
				<?php }} ?>