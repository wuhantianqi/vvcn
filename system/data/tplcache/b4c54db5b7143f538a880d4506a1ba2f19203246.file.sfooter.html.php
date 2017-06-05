<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:15:54
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\block\sfooter.html" */ ?>
<?php /*%%SmartyHeaderCode:213005935214abd10a0-84552775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c54db5b7143f538a880d4506a1ba2f19203246' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\block\\sfooter.html',
      1 => 1430983990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213005935214abd10a0-84552775',
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
  'unifunc' => 'content_5935214abe87b7_03777127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935214abe87b7_03777127')) {function content_5935214abe87b7_03777127($_smarty_tpl) {?><?php if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
?><div class="main_footer_bottom">
<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/article",'from'=>'about','limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/article",'from'=>'about','limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='about' arg0=$item.page}>"><{$item.title}></a> <{if !$last}>|<{/if}> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/article",'from'=>'about','limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
<p>Copyright2012-2112 www.ijh.cc,All Rights Reserved ICP备案：<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['icp'];?>
</p>
<p style="none"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['tongji'];?>
</p>
<p><span class="main_footer_bm_ico index_ico"></span></p>
</div>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.css" type="text/css" />
<script type="text/javascript"  src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/bxslider/jq.bxslider.min.js"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){
    $('[bxSlider]').bxSlider({ mode: 'fade',captions: true,auto:true});
});
if(!placeholderSupport()){   // 判断浏览器是否支持 placeholder
    $('[placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
        }
    }).blur();
};
})(window.KT, window.jQuery);
function placeholderSupport() {
    return 'placeholder' in document.createElement('input');
}
</script><?php }} ?>