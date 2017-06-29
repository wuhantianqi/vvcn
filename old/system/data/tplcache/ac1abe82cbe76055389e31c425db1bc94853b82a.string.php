<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:00:05
         compiled from "ac1abe82cbe76055389e31c425db1bc94853b82a" */ ?>
<?php /*%%SmartyHeaderCode:3162759340455ee93f4-94515785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1abe82cbe76055389e31c425db1bc94853b82a' => 
    array (
      0 => 'ac1abe82cbe76055389e31c425db1bc94853b82a',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '3162759340455ee93f4-94515785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59340455f0cae6_76124646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340455f0cae6_76124646')) {function content_59340455f0cae6_76124646($_smarty_tpl) {?>
                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button1" rel="fancybox-button1" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
                            <p class="bg"></p>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
                        </div>
                    </li>
                    <?php }} ?>