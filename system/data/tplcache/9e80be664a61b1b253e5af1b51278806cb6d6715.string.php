<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:16
         compiled from "9e80be664a61b1b253e5af1b51278806cb6d6715" */ ?>
<?php /*%%SmartyHeaderCode:336559352e44ecebd0-29690438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e80be664a61b1b253e5af1b51278806cb6d6715' => 
    array (
      0 => '9e80be664a61b1b253e5af1b51278806cb6d6715',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '336559352e44ecebd0-29690438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'first' => 0,
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e44efd9e1_85101909',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e44efd9e1_85101909')) {function content_59352e44efd9e1_85101909($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                <li<?php if ($_smarty_tpl->tpl_vars['first']->value){?> class="first"<?php }?>>
                    <div class="opacity_img"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],20);?>
</span><span class="rt"><span class="index_ico like_ico"></span><?php echo $_smarty_tpl->tpl_vars['item']->value['likes'];?>
</span></p>
                    </div>
                </li>
                <?php }} ?>