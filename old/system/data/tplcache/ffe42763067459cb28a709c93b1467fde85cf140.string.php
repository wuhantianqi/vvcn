<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:50
         compiled from "ffe42763067459cb28a709c93b1467fde85cf140" */ ?>
<?php /*%%SmartyHeaderCode:89525933f2b209ade6-82105496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe42763067459cb28a709c93b1467fde85cf140' => 
    array (
      0 => 'ffe42763067459cb28a709c93b1467fde85cf140',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '89525933f2b209ade6-82105496',
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
  'unifunc' => 'content_5933f2b20d7d34_00382858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b20d7d34_00382858')) {function content_5933f2b20d7d34_00382858($_smarty_tpl) {?>
            <?php if ($_smarty_tpl->tpl_vars['first']->value){?>
            <li class="first">
            <?php }else{ ?>
            <li>
            <?php }?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"/></a>
                <p><b>头衔：<?php echo $_smarty_tpl->tpl_vars['item']->value['group_name'];?>
</b></p>
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a></p>
            </li>
            <?php }} ?>