<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:17
         compiled from "18d2f7c6ad688547cd651273908023163c5ccc97" */ ?>
<?php /*%%SmartyHeaderCode:2188359352e45564ab1-90509726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18d2f7c6ad688547cd651273908023163c5ccc97' => 
    array (
      0 => '18d2f7c6ad688547cd651273908023163c5ccc97',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2188359352e45564ab1-90509726',
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
  'unifunc' => 'content_59352e45583eb3_89385603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e45583eb3_89385603')) {function content_59352e45583eb3_89385603($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
                        <div class="index_news_list_text rt">
                            <h3><a class="tit" href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],27);?>
</a></h3>
                            <a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['article_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['desc'],100);?>
<font class="fontcl2">[详情]</font></a>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php }} ?>