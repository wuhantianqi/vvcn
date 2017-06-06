<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:50
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\company\team.html" */ ?>
<?php /*%%SmartyHeaderCode:3181159361f1aeb99f4-74564546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddcea20b61e257f3444ec67d31bb9725ec2bd719' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\company\\team.html',
      1 => 1429266755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3181159361f1aeb99f4-74564546',
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
  'unifunc' => 'content_59361f1af23181_58204623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361f1af23181_58204623')) {function content_59361f1af23181_58204623($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["seo_sub_title"] = new Smarty_variable("设计团队", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("company/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--装修公司头部结束-->
<div class="subwd">
	<div class="mb20">
		<h3><b>设计团队</b></a></h3>
		<ul class="line_type sub_com_de_list">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
?>
			<li<?php if (!($_smarty_tpl->tpl_vars['item']->iteration % 3)){?> class="first"<?php }?>>
				<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="lt pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" /></a>
				<div class="sub_com_de_rt main_list_rt rt">
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
					<p>等级：<?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</p>
					<p>经验：5-8年</p>
					<p>风格：现代/简约</p>
					<p>案例：<?php echo $_smarty_tpl->tpl_vars['item']->value['case_num'];?>
套</p>
					<p><a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="免费预约设计" mini-width="400" class="btn btn_sub_smler">我要预约</a></p>
				</div>
				<div class="cl"></div>
			</li>
            <?php } ?>
		</ul>
		<div class="cl"></div>
		<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
	</div>
</div>
<!--底边内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("company/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>