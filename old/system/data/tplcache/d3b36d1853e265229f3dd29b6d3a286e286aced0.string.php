<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:31
         compiled from "d3b36d1853e265229f3dd29b6d3a286e286aced0" */ ?>
<?php /*%%SmartyHeaderCode:158415933f80343ede3-31457906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3b36d1853e265229f3dd29b6d3a286e286aced0' => 
    array (
      0 => 'd3b36d1853e265229f3dd29b6d3a286e286aced0',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '158415933f80343ede3-31457906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f803469d60_30288132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f803469d60_30288132')) {function content_5933f803469d60_30288132($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
					<li><span class="ico_list news_ico"></span><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],80);?>
</a></li>
                    <?php }} ?>