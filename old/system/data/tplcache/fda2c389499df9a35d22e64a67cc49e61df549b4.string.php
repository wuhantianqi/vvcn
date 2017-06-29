<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:12
         compiled from "fda2c389499df9a35d22e64a67cc49e61df549b4" */ ?>
<?php /*%%SmartyHeaderCode:95045933f5d4b0e187-01156999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fda2c389499df9a35d22e64a67cc49e61df549b4' => 
    array (
      0 => 'fda2c389499df9a35d22e64a67cc49e61df549b4',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '95045933f5d4b0e187-01156999',
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
  'unifunc' => 'content_5933f5d4b67825_92844610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5d4b67825_92844610')) {function content_5933f5d4b67825_92844610($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
					<li>
						<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['face'];?>
" /></a>
						<p><b><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid']),$_smarty_tpl);?>
" class="lt tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></b><span class="rt"><?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</span></p>
						<p><a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
"  mini-width='500' mini-load="我要预约" class="btn">我要预约</a></p>
					</li>
                    <?php }} ?>