<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:53
         compiled from "b30dd5aa6726ea4ef6d3a6ad157e108b07bc4ba7" */ ?>
<?php /*%%SmartyHeaderCode:171895933f5c0f2cf98-42196598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b30dd5aa6726ea4ef6d3a6ad157e108b07bc4ba7' => 
    array (
      0 => 'b30dd5aa6726ea4ef6d3a6ad157e108b07bc4ba7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '171895933f5c0f2cf98-42196598',
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
  'unifunc' => 'content_5933f5c10a46f9_32098620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5c10a46f9_32098620')) {function content_5933f5c10a46f9_32098620($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['company_url'];?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                <?php }} ?>