<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:15:54
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\ask\items.html" */ ?>
<?php /*%%SmartyHeaderCode:171155935214a768122-85236007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2adb3ca7681d17e1f7e40c2b992b1ed1d2aa4605' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\ask\\items.html',
      1 => 1496654150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171155935214a768122-85236007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cat_id' => 0,
    'cate_list' => 0,
    'item' => 0,
    'pager' => 0,
    'items' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5935214a81bc45_31436286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935214a81bc45_31436286')) {function content_5935214a81bc45_31436286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['cat_id']->value),$_smarty_tpl);?>
" >问答列表</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="mb20 area ">
			<h3 class="side_tit nd_answer">
            	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==0){?>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type'],'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['current']=='current'){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php }?>
                <?php } ?>
			</h3>
			<div class="pding article_list nd_answer_list">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']!=0&&$_smarty_tpl->tpl_vars['item']->value['parent_id']==$_smarty_tpl->tpl_vars['pager']->value['parent_id']){?>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['type'],'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['current']=='current'){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                <?php }?>
                <?php } ?>
				<div class="cl"></div>
			</div>
		</div>
		<div class="mb20">
			<ul class="qe_fenlei hoverno">
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>0,'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']==0){?>class="current"<?php }?> >全部问题</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>1,'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']==1){?>class="current"<?php }?>>已解决问题</a></li>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['cat_id'],'arg1'=>2,'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['pager']->value['type']==2){?>class="current"<?php }?>>待解决问题</a></li>
			</ul>
			<div class="area mb10">
				<ul class="pding question_list">                
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?> 
                    <li><a href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['ask_id']),$_smarty_tpl);?>
" class="lt"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],100);?>
</a>
                    <p class="rt graycl"><span>回答(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['answer_num'];?>
</font>)</span><span><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></p>
					</li>
                    <?php } ?>
				</ul>
				<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<!--主体左边内容结束-->
	<?php echo $_smarty_tpl->getSubTemplate ("ask/block/right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>