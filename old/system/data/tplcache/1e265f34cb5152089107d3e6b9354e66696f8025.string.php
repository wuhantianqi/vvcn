<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:05:10
         compiled from "1e265f34cb5152089107d3e6b9354e66696f8025" */ ?>
<?php /*%%SmartyHeaderCode:1127659340586cd5392-33828726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e265f34cb5152089107d3e6b9354e66696f8025' => 
    array (
      0 => '1e265f34cb5152089107d3e6b9354e66696f8025',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1127659340586cd5392-33828726',
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
  'unifunc' => 'content_59340586d09489_45700351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340586d09489_45700351')) {function content_59340586d09489_45700351($_smarty_tpl) {?>
                <li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></span>
                    <span class="rt">接单数：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                 <?php }} ?>