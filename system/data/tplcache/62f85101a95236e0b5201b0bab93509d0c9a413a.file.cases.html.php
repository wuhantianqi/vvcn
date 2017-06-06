<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:23
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\blog\cases.html" */ ?>
<?php /*%%SmartyHeaderCode:3028259361effb6bb28-66366123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f85101a95236e0b5201b0bab93509d0c9a413a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\blog\\cases.html',
      1 => 1429266753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3028259361effb6bb28-66366123',
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
  'unifunc' => 'content_59361effc07f44_80365953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361effc07f44_80365953')) {function content_59361effc07f44_80365953($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["curr_case"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="area pding sub_designer">
    <ul class="designer_case">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
?>                 
        <li<?php if ($_smarty_tpl->tpl_vars['item']->index%3==0){?> class="first"<?php }?>>
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
                <p>
                    <span><font class="index_ico like_ico"></font><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
人喜欢</span>
                    <span><font class="index_ico person_ico"></font><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
人已浏览 </span>
                </p>
            </div>
        </li>
        <?php } ?>
    </ul>
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>