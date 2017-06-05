<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:17
         compiled from "22d98a5c3e829e6509d5b85f8fa222691017a98c" */ ?>
<?php /*%%SmartyHeaderCode:2401959352e45522427-85713123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d98a5c3e829e6509d5b85f8fa222691017a98c' => 
    array (
      0 => '22d98a5c3e829e6509d5b85f8fa222691017a98c',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2401959352e45522427-85713123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e4552dfa9_45560812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e4552dfa9_45560812')) {function content_59352e4552dfa9_45560812($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><font class="fontcl2">[<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
]</font> | <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],46);?>
</a></li>
                    <?php }} ?>