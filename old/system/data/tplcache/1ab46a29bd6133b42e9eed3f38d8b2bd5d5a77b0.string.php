<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:59:19
         compiled from "1ab46a29bd6133b42e9eed3f38d8b2bd5d5a77b0" */ ?>
<?php /*%%SmartyHeaderCode:219955933f617f21a40-18727399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ab46a29bd6133b42e9eed3f38d8b2bd5d5a77b0' => 
    array (
      0 => '1ab46a29bd6133b42e9eed3f38d8b2bd5d5a77b0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '219955933f617f21a40-18727399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f618041bf2_00584783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f618041bf2_00584783')) {function content_5933f618041bf2_00584783($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?> 
                            <li><a target="_blank" href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
" class="lt"><span class="ico_list over_qe"></span><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],50);?>
</a>
							<span class="rt">回答(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</font>)</span></li>
                         <?php }} ?>