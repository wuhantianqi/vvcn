<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:25
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\blog\article.html" */ ?>
<?php /*%%SmartyHeaderCode:1826959361f0184b514-87742963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b460d1905f8f5b72cba46ef2afcbb15f037a40e6' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\blog\\article.html',
      1 => 1429266753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1826959361f0184b514-87742963',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361f018a9124_20795236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361f018a9124_20795236')) {function content_59361f018a9124_20795236($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.format.php';
?><?php $_smarty_tpl->tpl_vars["curr_article"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="area pding sub_designer">
    <ul class="news">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><p class="lt"><span class="ico_list news_ico"></span><a href="<?php echo smarty_function_link(array('ctl'=>'blog:showinfo','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p><span class="rt">发布于<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline'],"Y-m-d");?>
</span></li>
        <?php } ?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>