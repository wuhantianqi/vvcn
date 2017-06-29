<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:31
         compiled from "6503b7dc86b15c448bf4aa7c3764f205e67fd4ac" */ ?>
<?php /*%%SmartyHeaderCode:182365933f803513533-40727540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6503b7dc86b15c448bf4aa7c3764f205e67fd4ac' => 
    array (
      0 => '6503b7dc86b15c448bf4aa7c3764f205e67fd4ac',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '182365933f803513533-40727540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f8035686a4_31677951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f8035686a4_31677951')) {function content_5933f8035686a4_31677951($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?>
				<li>
					<h3><span class="ico_list shu_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/cate",'hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/cate",'hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='article:items' arg0=$item.cat_id}>"<{if $cate.cat_id==$item.cat_id}>  class="current"<{/if}>><{$item.title}></a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/cate",'hidden'=>'0','parent_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</li>
				<?php }} ?>