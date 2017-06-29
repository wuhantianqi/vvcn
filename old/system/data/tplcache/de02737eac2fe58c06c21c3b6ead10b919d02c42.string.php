<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:53:17
         compiled from "de02737eac2fe58c06c21c3b6ead10b919d02c42" */ ?>
<?php /*%%SmartyHeaderCode:320255933f4ad548ac7-42667812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de02737eac2fe58c06c21c3b6ead10b919d02c42' => 
    array (
      0 => 'de02737eac2fe58c06c21c3b6ead10b919d02c42',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '320255933f4ad548ac7-42667812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f4ad5aeb24_27085934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4ad5aeb24_27085934')) {function content_5933f4ad5aeb24_27085934($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
        <a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'about','arg0'=>$_smarty_tpl->tpl_vars['item']->value['page']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
        <?php }} ?>