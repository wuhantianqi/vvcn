<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:31:38
         compiled from "e2beb34a1851e8aa2f230d41d90a4e86ae19e582" */ ?>
<?php /*%%SmartyHeaderCode:176259340bba718483-47996956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2beb34a1851e8aa2f230d41d90a4e86ae19e582' => 
    array (
      0 => 'e2beb34a1851e8aa2f230d41d90a4e86ae19e582',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '176259340bba718483-47996956',
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
  'unifunc' => 'content_59340bba8a32a3_48084794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340bba8a32a3_48084794')) {function content_59340bba8a32a3_48084794($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
				<li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a></span>
                    <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                <?php }} ?>