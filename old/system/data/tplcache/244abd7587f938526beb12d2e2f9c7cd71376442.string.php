<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:00:05
         compiled from "244abd7587f938526beb12d2e2f9c7cd71376442" */ ?>
<?php /*%%SmartyHeaderCode:2726159340455cd6073-06850980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244abd7587f938526beb12d2e2f9c7cd71376442' => 
    array (
      0 => '244abd7587f938526beb12d2e2f9c7cd71376442',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '2726159340455cd6073-06850980',
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
  'unifunc' => 'content_59340455d07e46_75678149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59340455d07e46_75678149')) {function content_59340455d07e46_75678149($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
                    <li>
                        <div class="opacity_img">
                            <a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
                            <p class="bg"></p>
                            <p class="text"><?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
</p>
                        </div>
                    </li>
                    <?php }} ?>