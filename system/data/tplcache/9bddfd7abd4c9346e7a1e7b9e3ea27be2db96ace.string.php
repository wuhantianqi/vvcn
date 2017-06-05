<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:16
         compiled from "9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace" */ ?>
<?php /*%%SmartyHeaderCode:827859352e44db9611-27622483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace' => 
    array (
      0 => '9bddfd7abd4c9346e7a1e7b9e3ea27be2db96ace',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '827859352e44db9611-27622483',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'iteration' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e44dcce93_38314919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e44dcce93_38314919')) {function content_59352e44dcce93_38314919($_smarty_tpl) {?>
                    <li><span class="paihang_num <?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></li>
                    <?php }} ?>