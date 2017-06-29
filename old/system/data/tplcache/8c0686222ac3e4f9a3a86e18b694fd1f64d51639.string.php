<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:12
         compiled from "8c0686222ac3e4f9a3a86e18b694fd1f64d51639" */ ?>
<?php /*%%SmartyHeaderCode:260385933f5d4c5ea85-18247126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c0686222ac3e4f9a3a86e18b694fd1f64d51639' => 
    array (
      0 => '8c0686222ac3e4f9a3a86e18b694fd1f64d51639',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '260385933f5d4c5ea85-18247126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5d4d4db65_82678507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5d4d4db65_82678507')) {function content_5933f5d4d4db65_82678507($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<div class="opacity_img"><a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id'],'arg1'=>1),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
						<a href="<?php echo smarty_function_link(array('ctl'=>'case:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="yuyue">免费预约设计</a>
						<p class="bg"></p>
						<p class="text"><span class="lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</span><span class="rt"><span class="index_ico like_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</span></p>
					</div>
				</li>
                <?php }} ?>