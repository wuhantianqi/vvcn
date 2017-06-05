<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:11:54
         compiled from "admin:article/cate/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2837959351fb8009459-29982065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f255dfe286b4eb34e54bb89769c0b115d92193' => 
    array (
      0 => 'admin:article/cate/edit.html',
      1 => 1496653876,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '2837959351fb8009459-29982065',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59351fb806ed71_26239798',
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'cate' => 0,
    'cate_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59351fb806ed71_26239798')) {function content_59351fb806ed71_26239798($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td style="width:30px;" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td></td>
      </tr>
    </table>
</div>
<div class="page-data">
	<form action="?article/cate-edit.html" mini-form="article-form" method="post">
	<input type="hidden" name="cat_id" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['cat_id'];?>
" /> 
	<table width="100%" border="0" cellspacing="0" class="table-data form">
		<tr>
			<th width="150">上级菜单:</th>
			<td><?php if ($_smarty_tpl->tpl_vars['cate']->value['parent_id']){?><?php echo $_smarty_tpl->tpl_vars['cate_list']->value[$_smarty_tpl->tpl_vars['cate']->value['parent_id']]['title'];?>
<?php }else{ ?>顶级分类<?php }?></td>
		</tr>
		<tr><th>分类标题：</th><td><input type="text" name="data[title]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
" class="input w-300"/></td></tr>
		<tr><th>分类拼音(SEO优化用)：</th><td><input type="text" name="data[pname]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['pname'];?>
" class="input w-300"/></td></tr>
		<tr><th>SEO标题：</th><td><input type="text" name="data[seo_title]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['seo_title'];?>
" class="input w-300"/></td></tr>
		<tr><th>SEO关键字：</th><td><input type="text" name="data[seo_keywords]" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['seo_keywords'];?>
" class="input w-300"/></td></tr>
		<tr><th>SEO描述：</th><td><textarea name="data[seo_description]" style="width:300px;height:80px;"><?php echo $_smarty_tpl->tpl_vars['cate']->value['seo_description'];?>
</textarea>
		<tr>
			<th width="150">隐藏：</th>
			<td>
				<label><input type="radio" name="data[hidden]" value="1" <?php if ($_smarty_tpl->tpl_vars['cate']->value['hidden']){?>checked="checked"<?php }?> />是</label>
				<label><input type="radio" name="data[hidden]" value="0" <?php if (!$_smarty_tpl->tpl_vars['cate']->value['hidden']){?>checked="checked"<?php }?> />否</label>
			</td>
		</tr>
		<tr>
			<th width="150">排序：</th>
			<td><input type="text" name="data[orderby]" class="input w-50" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value['orderby']){?><?php echo $_smarty_tpl->tpl_vars['cate']->value['orderby'];?>
<?php }else{ ?>50<?php }?>"></td>
		</tr>
		<tr>
			<th class="form-button-th"></th>
			<td class="form-button-td"><input type="submit" class="bt-big"  value="提  交  数  据" /></td>
		</tr>
	</table>
	</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>