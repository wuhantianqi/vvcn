<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:11:29
         compiled from "1ce0c2c596acef0e6995564becf790c4cf638148" */ ?>
<?php /*%%SmartyHeaderCode:1976959352041f240a9-55115381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce0c2c596acef0e6995564becf790c4cf638148' => 
    array (
      0 => '1ce0c2c596acef0e6995564becf790c4cf638148',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1976959352041f240a9-55115381',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'last' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352041f2fc29_17819519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352041f2fc29_17819519')) {function content_59352041f2fc29_17819519($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><a href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a> <?php if (!$_smarty_tpl->tpl_vars['last']->value){?>|<?php }?> <?php }} ?>