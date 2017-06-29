<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:59:26
         compiled from "5bd899510665fbffc7ce18e54f13f9d291a73729" */ ?>
<?php /*%%SmartyHeaderCode:179165933f61e60c007-29355848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd899510665fbffc7ce18e54f13f9d291a73729' => 
    array (
      0 => '5bd899510665fbffc7ce18e54f13f9d291a73729',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '179165933f61e60c007-29355848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f61e68bda4_60238289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f61e68bda4_60238289')) {function content_5933f61e68bda4_60238289($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
?> 
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
" class="lt"> <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],50);?>
</a>
                            <span class="graycl rt"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                        </li>
                 <?php }} ?>