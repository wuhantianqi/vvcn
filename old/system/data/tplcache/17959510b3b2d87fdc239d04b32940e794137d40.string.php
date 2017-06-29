<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:10:16
         compiled from "17959510b3b2d87fdc239d04b32940e794137d40" */ ?>
<?php /*%%SmartyHeaderCode:26991593406b8a11264-33318874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17959510b3b2d87fdc239d04b32940e794137d40' => 
    array (
      0 => '17959510b3b2d87fdc239d04b32940e794137d40',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '26991593406b8a11264-33318874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_593406b8a4f366_75451117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593406b8a4f366_75451117')) {function content_593406b8a4f366_75451117($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
            <li>
                <a href="<?php echo smarty_function_link(array('ctl'=>'mall/coupon:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['coupon_id']),$_smarty_tpl);?>
">
                <div class="coupon_box">
                    <p class="price"><b class="lt">¥ <?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
</b><span class="rt">全店通用</span></p>
                    <p class="cl"></p>
                    <p>使用条件：满<?php echo $_smarty_tpl->tpl_vars['item']->value['min_amount'];?>
元减<?php echo $_smarty_tpl->tpl_vars['item']->value['money'];?>
元</p>
                    <p>有效时间：<?php echo $_smarty_tpl->tpl_vars['item']->value['expire_label'];?>
</p>
                </div>
                </a>
            </li>
            <?php }} ?>