<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:46:13
         compiled from "admin:tenders/tenders/items.html" */ ?>
<?php /*%%SmartyHeaderCode:49365933f305b2eab3-07857283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e589a67b34ad774ab3c70fb4485031438d265857' => 
    array (
      0 => 'admin:tenders/tenders/items.html',
      1 => 1433724484,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '49365933f305b2eab3-07857283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f305ec0244_55647283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f305ec0244_55647283')) {function content_5933f305ec0244_55647283($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/tenders:create",'class'=>"button",'title'=>"添加"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"tenders/tenders:so",'load'=>"mini:搜索内容",'width'=>"mini:500",'class'=>"button",'title'=>"搜索"),$_smarty_tpl);?>
</td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">	
	<form id="items-form">
    <table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr>
        <th class="w-100">ID</th><th>类型</th><th>城市</th><th>标题</th><th>联系人</th>
        <th>小区名</th><th>装修时间</th><th>提醒跟踪</th>
        <th class="w-100">发布时间</th><th class="w-100">是否签单</th><th class="w-150">操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>
        <td><label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_id'];?>
" name="tenders_id[]" CK="PRI"/><?php echo $_smarty_tpl->tpl_vars['item']->value['tenders_id'];?>
<?php if (!$_smarty_tpl->tpl_vars['item']->value['audit']){?><font class="red">&nbsp;new!</font><?php }?><label></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['from_title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['city_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['contact'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['zx_time'],"Y-m-d");?>
</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['tx_time'],"Y-m-d");?>
</td>
        <td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
        <td><?php if (!$_smarty_tpl->tpl_vars['item']->value['audit']){?><b class="red">待审</b><?php }elseif($_smarty_tpl->tpl_vars['item']->value['sign_uid']){?><b class="green">已签</b><?php }else{ ?><b>未签</b><?php }?></td>
        <td>
            <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:detail",'args'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id'],'class'=>"button",'title'=>"查看"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:edit",'args'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id'],'title'=>"修改",'class'=>"button"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:delete",'args'=>$_smarty_tpl->tpl_vars['item']->value['tenders_id'],'act'=>"mini:删除",'confirm'=>"mini:确定要删除吗？",'title'=>"删除",'class'=>"button"),$_smarty_tpl);?>

        </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
    <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
    </table>
	</form>
	<div class="page-bar">
		<table>
			<tr>
			<td class="w-100"><label><input type="checkbox" CKA="PRI"/>&nbsp;&nbsp;全选</label></td>
			<td colspan="10" class="left"><?php echo smarty_function_link(array('ctl'=>"tenders/tenders:delete",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量删除选中的内容吗?",'priv'=>"hide",'value'=>"批量删除"),$_smarty_tpl);?>
&nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"tenders/tenders:doaudit",'type'=>"button",'submit'=>"mini:#items-form",'confirm'=>"mini:确定要批量审核选中的内容吗?",'priv'=>"hide",'value'=>"批量审核"),$_smarty_tpl);?>
</td>
			<td class="page-list"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</td>
		</tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>