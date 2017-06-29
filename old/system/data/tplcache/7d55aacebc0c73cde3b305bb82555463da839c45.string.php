<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:26
         compiled from "7d55aacebc0c73cde3b305bb82555463da839c45" */ ?>
<?php /*%%SmartyHeaderCode:274985933f7fe9c5639-63968302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d55aacebc0c73cde3b305bb82555463da839c45' => 
    array (
      0 => '7d55aacebc0c73cde3b305bb82555463da839c45',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '274985933f7fe9c5639-63968302',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7fea35824_51103425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7fea35824_51103425')) {function content_5933f7fea35824_51103425($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span class="ico_list news_ico"></span><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"  target="_blank"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12);?>
]</b> <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],30);?>
</a></li>
                    <?php }} ?>