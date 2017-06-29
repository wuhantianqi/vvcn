<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:48
         compiled from "31e368696827df0c98e1351262faef5006d01010" */ ?>
<?php /*%%SmartyHeaderCode:186065933f2b0dded10-47944204%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '186065933f2b0dded10-47944204',
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
  'unifunc' => 'content_5933f2b0ed7486_90983703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b0ed7486_90983703')) {function content_5933f2b0ed7486_90983703($_smarty_tpl) {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a></li>
            <?php }} ?>