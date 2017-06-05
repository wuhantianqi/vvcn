<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:16
         compiled from "31e368696827df0c98e1351262faef5006d01010" */ ?>
<?php /*%%SmartyHeaderCode:892859352e44d92504-22903904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e368696827df0c98e1351262faef5006d01010' => 
    array (
      0 => '31e368696827df0c98e1351262faef5006d01010',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '892859352e44d92504-22903904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e44d9e097_03759640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e44d9e097_03759640')) {function content_59352e44d9e097_03759640($_smarty_tpl) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a></li>
            <?php }} ?>