<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:51
         compiled from "3cd4e80a6e2dcb84f2c94578872b27a5b92a7926" */ ?>
<?php /*%%SmartyHeaderCode:112705933f2b3443a40-64268867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cd4e80a6e2dcb84f2c94578872b27a5b92a7926' => 
    array (
      0 => '3cd4e80a6e2dcb84f2c94578872b27a5b92a7926',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '112705933f2b3443a40-64268867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b348e766_27520307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b348e766_27520307')) {function content_5933f2b348e766_27520307($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?>
			<ul>
				<li><span><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span></li>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/article','from'=>"help",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id'])); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>"help",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li><a href="<{link ctl='help' arg0=$item.page}>"><{$item.title}></a></li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/article','from'=>"help",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
			<?php }} ?>