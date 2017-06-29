<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:27
         compiled from "04dab7c5e38fc492a86d2a2a9da0ac5901b50cc9" */ ?>
<?php /*%%SmartyHeaderCode:291495933f7ff1d1e75-27292486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04dab7c5e38fc492a86d2a2a9da0ac5901b50cc9' => 
    array (
      0 => '04dab7c5e38fc492a86d2a2a9da0ac5901b50cc9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '291495933f7ff1d1e75-27292486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7ff3c1892_57402222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7ff3c1892_57402222')) {function content_5933f7ff3c1892_57402222($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12);?>
]</b><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</a>
                    </li>
                    <?php }} ?>