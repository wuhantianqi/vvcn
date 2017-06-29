<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:50
         compiled from "22d98a5c3e829e6509d5b85f8fa222691017a98c" */ ?>
<?php /*%%SmartyHeaderCode:53335933f2b2acd835-95252706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '53335933f2b2acd835-95252706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b2afdcb3_65857434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b2afdcb3_65857434')) {function content_5933f2b2afdcb3_65857434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><font class="fontcl2">[<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_title'];?>
]</font> | <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['title'],46);?>
</a></li>
                    <?php }} ?>