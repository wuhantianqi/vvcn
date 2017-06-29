<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:34:48
         compiled from "admin:tenders/look/tongji.html" */ ?>
<?php /*%%SmartyHeaderCode:153595933fe68c98031-45171879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f17a62aed83e0da140c7c8527f019d041b07f3' => 
    array (
      0 => 'admin:tenders/look/tongji.html',
      1 => 1429266728,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '153595933fe68c98031-45171879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'SO' => 0,
    'company' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fe69249c78_61597758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fe69249c78_61597758')) {function content_5933fe69249c78_61597758($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
	<table width="100%" align="center" cellpadding="0" cellspacing="0" >
		<tr>
			<td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
			<th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
			<td align="right"></td>
			<td width="15"></td>
		</tr>
	</table>
</div>
<div class="page-data">
<form action="?tenders/look-tongji.html" id="SO-form" method="post">
<table width="100%" border="0" cellspacing="0" class="table-data form">
 <tr><th class="w-100"><span class="red">*</span>城市：</th><td><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id'],'level'=>"2"),$_smarty_tpl);?>
</td></tr>    
<tr>
    <th>时间：</th>
    <td>
        <input type="text" name="SO[bg_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SO']->value['bg_time'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100" date="bg_time" readonly/>~
        <input type="text" name="SO[end_time]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SO']->value['end_time'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-100" date="end_time" readonly/>
    </td>
</tr> 
<tr><th>公司：</th>
    <td>
        <input type="hidden" name="SO[company_id]" value="<?php echo $_smarty_tpl->tpl_vars['SO']->value['company_id'];?>
" id="select_company_company_id_id" />
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" id="select_company_company_id_name" class="input w-300" readonly/>
        <?php echo smarty_function_link(array('ctl'=>"company/company:dialog",'select'=>"mini:#select_company_company_id_id,#select_company_company_id_name/N/选择装修公司",'title'=>"选择装修公司",'class'=>"button"),$_smarty_tpl);?>

    </td>
</tr>    
<tr><th class="clear-th-bottom"></th>
    <td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="搜 索" /></td>
</tr>
</table>
</form>
<form id="items-form">
<table width="100%" border="0" cellspacing="0" class="table-data table">
    <tr><th class="w-100"></th><th>公司</th><th class="w-100">阶段时间内分单数</th></tr>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <tr>  
        <td><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
" width="100" height="50"/></td>
        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['num'])===null||$tmp==='' ? '0' : $tmp);?>
</td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
     <tr><td colspan="20"><p class="text-align tip-notice">没有数据</p></td></tr>
    <?php } ?>
</table>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>