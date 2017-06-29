<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:49
         compiled from "7bafeda9831a897e4c01ea6197a7371e56d6e925" */ ?>
<?php /*%%SmartyHeaderCode:190785933f2b14443c4-29115119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bafeda9831a897e4c01ea6197a7371e56d6e925' => 
    array (
      0 => '7bafeda9831a897e4c01ea6197a7371e56d6e925',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '190785933f2b14443c4-29115119',
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
  'unifunc' => 'content_5933f2b1555446_69769883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b1555446_69769883')) {function content_5933f2b1555446_69769883($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
            <li>
                <div class="opacity_img">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"/></a>
                    <p class="bg"></p>
                    <p class="text"><span class="index_ico time_ico"></span><font remaintime="<?php echo $_smarty_tpl->tpl_vars['item']->value['ltime'];?>
"></font></p>
                </div>
                <div class="index_tuanz_btm">
                    <p><b><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></b></p>
                    <p class="colorbg"><span class="lt tit">立省<b class="fontcl1">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['jieyue'];?>
</b>元</span><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuanDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['tuan_id']),$_smarty_tpl);?>
" class="btn_sub_sm rt btn">立即参团</a>
                    </p>
                    <p><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['sign_num'];?>
</font>人已参团</p>
                </div>
            </li>
            <?php }} ?>