<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:21
         compiled from "ed15b3f029746739cbd6899d4494f15690acae04" */ ?>
<?php /*%%SmartyHeaderCode:184725933f5ddccc078-74913961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed15b3f029746739cbd6899d4494f15690acae04' => 
    array (
      0 => 'ed15b3f029746739cbd6899d4494f15690acae04',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '184725933f5ddccc078-74913961',
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
  'unifunc' => 'content_5933f5ddededd6_21447337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5ddededd6_21447337')) {function content_5933f5ddededd6_21447337($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <li>
                    <span class="lt"><font class="paihang_num<?php if ($_smarty_tpl->tpl_vars['iteration']->value<=3){?> ph_num_cl<?php }?>"><?php echo $_smarty_tpl->tpl_vars['iteration']->value;?>
</font><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['name'],35);?>
</a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_num'];?>
</font></span>
                </li>
                <?php }} ?>