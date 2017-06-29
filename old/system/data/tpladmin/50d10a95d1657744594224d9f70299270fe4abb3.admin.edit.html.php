<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:35:46
         compiled from "admin:tenders/setting/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:203105933fea28c7832-53560514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d10a95d1657744594224d9f70299270fe4abb3' => 
    array (
      0 => 'admin:tenders/setting/edit.html',
      1 => 1430718976,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '203105933fea28c7832-53560514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fea2a96f72_15372217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fea2a96f72_15372217')) {function content_5933fea2a96f72_15372217($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_html_options')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"tenders/setting:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data"><form action="?tenders/setting-edit.html" mini-form="setting-form" method="post" >
<table width="100%" border="0" cellspacing="0" class="table-data form">
<input type="hidden" name="setting_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['setting_id'];?>
"/>
<tr>
    <th><span class="red">*</span>类型：</th>
    <td><select  name="data[type]" class="w-150"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['type']->value,'selected'=>$_smarty_tpl->tpl_vars['detail']->value['type']),$_smarty_tpl);?>
</select></td>
</tr>
<tr><th><span class="red">*</span>名称：</th><td><input type="text" name="data[name]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['name'])===null||$tmp==='' ? '' : $tmp);?>
" class="input w-200"/></td></tr>
<tr><th><span class="red">*</span>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['orderby'])===null||$tmp==='' ? '50' : $tmp);?>
" class="input w-100"/></td></tr>
<tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>