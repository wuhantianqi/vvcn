<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:26
         compiled from "274c415a1af0339a2b1d4dffb6cb72f7e1b801b9" */ ?>
<?php /*%%SmartyHeaderCode:67955933f7fe85a662-54101924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '274c415a1af0339a2b1d4dffb6cb72f7e1b801b9' => 
    array (
      0 => '274c415a1af0339a2b1d4dffb6cb72f7e1b801b9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '67955933f7fe85a662-54101924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7fe8caa02_06497934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7fe8caa02_06497934')) {function content_5933f7fe8caa02_06497934($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
                <li>
                    <h2><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],50);?>
</h2>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],150);?>
<font class="fontcl2">[阅读全文]</font></a></p>
                </li>
                <?php }} ?>