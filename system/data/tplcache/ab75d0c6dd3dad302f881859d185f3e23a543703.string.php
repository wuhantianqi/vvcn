<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 19:25:14
         compiled from "ab75d0c6dd3dad302f881859d185f3e23a543703" */ ?>
<?php /*%%SmartyHeaderCode:1899859353f9a485265-09279592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab75d0c6dd3dad302f881859d185f3e23a543703' => 
    array (
      0 => 'ab75d0c6dd3dad302f881859d185f3e23a543703',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1899859353f9a485265-09279592',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59353f9a4a4660_41661853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59353f9a4a4660_41661853')) {function content_59353f9a4a4660_41661853($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?>
					<li>
                        <span><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"m-d");?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['from_title'];?>
</span>
                        <span class="long"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],50);?>
</span><span><?php echo $_smarty_tpl->tpl_vars['item']->value['budget_title'];?>
</span><a href="<?php echo smarty_function_link(array('ctl'=>'tenders:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id']),$_smarty_tpl);?>
"  target="_blank"><span class="fontcl2">查看</span></a>
					</li>
                    <?php }} ?>