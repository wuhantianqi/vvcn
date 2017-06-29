<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:32:39
         compiled from "c71bfaac8814b066ade819eec514fd7af94a611b" */ ?>
<?php /*%%SmartyHeaderCode:1272959340bf772df57-34118395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71bfaac8814b066ade819eec514fd7af94a611b' => 
    array (
      0 => 'c71bfaac8814b066ade819eec514fd7af94a611b',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1272959340bf772df57-34118395',
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
  'unifunc' => 'content_59340bf77a3082_07511930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340bf77a3082_07511930')) {function content_59340bf77a3082_07511930($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li>
                        <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a></span>
                        <span class="rt">信誉度：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['score'];?>
</font></span>
                    </li>
                <?php }} ?>