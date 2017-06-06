<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:17:12
         compiled from "d00030dd4254c5c5ef2b05233ccb8a812e4819c1" */ ?>
<?php /*%%SmartyHeaderCode:727359361eb8a6d895-73844286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00030dd4254c5c5ef2b05233ccb8a812e4819c1' => 
    array (
      0 => 'd00030dd4254c5c5ef2b05233ccb8a812e4819c1',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '727359361eb8a6d895-73844286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361eb8a8cca8_45706021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361eb8a8cca8_45706021')) {function content_59361eb8a8cca8_45706021($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?>
            <li<?php if ($_smarty_tpl->tpl_vars['first']->value){?> class="first"<?php }?>>
                <div class="case_aterfall_li">
                    <div class="opacity_img hoverno">
                        <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"  class="pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" /></a>
                        <span class="bg"></span>
                        <span class="text"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
">免费户型设计</a></span>
                    </div>
                    <p class="tit"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></p>
                    <p><span><font class="index_ico like_ico"></font><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
人喜欢</span><span><font class="index_ico person_ico"></font><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
人已浏览 </span></p>
                </div>
            </li>
            <?php }} ?>