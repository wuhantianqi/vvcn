<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:11:29
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\block\small-footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1526059352041ed9d16-64491530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24782e8b14d1ef0cbff518525eb504af73de3dc' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\block\\small-footer.html',
      1 => 1432369697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1526059352041ed9d16-64491530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352041efcf92_10153938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352041efcf92_10153938')) {function content_59352041efcf92_10153938($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
?><div class="sub_footer">
    <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/article",'from'=>'about','limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/article",'from'=>'about','limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a> <{if !$last}>|<{/if}> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/article",'from'=>'about','limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    <p>Copyright2012-2015 www.ijh.cc,All Rights Reserved ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</p>
    <p><span class="main_footer_bm_ico index_ico"></span></p>
</div>
<!--底边内容结束-->
<?php echo smarty_function_widget(array('id'=>"public/kefu"),$_smarty_tpl);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.css" type="text/css" />
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.min.js"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
    $('[bxSlider]').bxSlider({ mode: 'fade',captions: true, auto:true});
});
})(window.KT, window.jQuery);
</script>
<p class="none"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
</p>
</body>
</html><?php }} ?>