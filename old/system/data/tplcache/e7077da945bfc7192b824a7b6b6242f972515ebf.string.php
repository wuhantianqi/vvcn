<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:00:06
         compiled from "e7077da945bfc7192b824a7b6b6242f972515ebf" */ ?>
<?php /*%%SmartyHeaderCode:20845934045609dbd0-95991882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7077da945bfc7192b824a7b6b6242f972515ebf' => 
    array (
      0 => 'e7077da945bfc7192b824a7b6b6242f972515ebf',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '20845934045609dbd0-95991882',
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
  'unifunc' => 'content_593404560d3604_51854333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593404560d3604_51854333')) {function content_593404560d3604_51854333($_smarty_tpl) {?>
                    <li>
                        <div class="opacity_img">
                             <a class="fancybox-button2" rel="fancybox-button2" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
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