<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:27
         compiled from "d59459c50feb63c23010cb6a2f6e4a7678ca0dcb" */ ?>
<?php /*%%SmartyHeaderCode:60345933f7ff0ad888-82542760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd59459c50feb63c23010cb6a2f6e4a7678ca0dcb' => 
    array (
      0 => 'd59459c50feb63c23010cb6a2f6e4a7678ca0dcb',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '60345933f7ff0ad888-82542760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7ff12e1e4_99961411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7ff12e1e4_99961411')) {function content_5933f7ff12e1e4_99961411($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                <p class="bg"></p><p class="text"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</p>
                <?php }} ?>