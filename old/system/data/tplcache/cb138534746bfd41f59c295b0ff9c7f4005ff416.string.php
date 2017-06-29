<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:27
         compiled from "cb138534746bfd41f59c295b0ff9c7f4005ff416" */ ?>
<?php /*%%SmartyHeaderCode:64345933f7ff952d66-56086206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb138534746bfd41f59c295b0ff9c7f4005ff416' => 
    array (
      0 => 'cb138534746bfd41f59c295b0ff9c7f4005ff416',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '64345933f7ff952d66-56086206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7ff98faa7_91018867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7ff98faa7_91018867')) {function content_5933f7ff98faa7_91018867($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><span class="ico_list news_ico"></span><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><b>[<?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['cat_title'],12,'');?>
]</b> <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</a></li>
                    <?php }} ?>