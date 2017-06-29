<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:01:15
         compiled from "view:page/miniframe.html" */ ?>
<?php /*%%SmartyHeaderCode:155205933f68b3a31b0-95567343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20a3e24c1cb7fe032c318e13a752343adc2572b' => 
    array (
      0 => 'view:page/miniframe.html',
      1 => 1429266748,
      2 => 'view',
    ),
  ),
  'nocache_hash' => '155205933f68b3a31b0-95567343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MINICALL' => 0,
    'MINIFUNC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f68b89e8e5_18150113',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f68b89e8e5_18150113')) {function content_5933f68b89e8e5_18150113($_smarty_tpl) {?><!DOCTYPE html>
<html>
 <head><title>MiniFrame</title></head>
 <body>
<script type="text/javascript">
window.Widget = parent.window.Widget;
(function(K, $){
    <?php if ($_smarty_tpl->tpl_vars['pager']->value['error']=='101'){?>
        Widget.Login();
    <?php }elseif($_smarty_tpl->tpl_vars['pager']->value['error']&&$_smarty_tpl->tpl_vars['pager']->value['error']!=200){?>
       Widget.MsgBox.error("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
       parent.window.__MINI_LOAD = false;
    <?php }elseif($_smarty_tpl->tpl_vars['MINICALL']->value){?>
        $MINICALL({"error":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['error'];?>
", "message":"<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
"});
    <?php }elseif($_smarty_tpl->tpl_vars['MINIFUNC']->value){?>
        parent.$MINIFUNC;
    <?php }elseif($_smarty_tpl->tpl_vars['pager']->value['show_content']){?>         
        $("#widget-dialog-load-content").dialog("destroy");
        Widget.MsgBox.hide();
        parent.window.__MINI_LOAD = false;
        $('<div title="<?php echo $_smarty_tpl->tpl_vars['pager']->value['show_title'];?>
" id="widget-dialog-miniframe-content">数据加载中....</div>').dialog({width:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['show_width'])===null||$tmp==='' ? 500 : $tmp);?>
,autoOpen:true,modal:true,dialogClass:'ui-hack-widget-dialog',position:{my: "center top",at: "center top+120px",of: parent.window},create:function(event,ui){$("#widget-dialog-miniframe-content").html('<?php echo $_smarty_tpl->tpl_vars['pager']->value['show_content'];?>
');},close:function(event,ui){$(this).dialog("destroy");}});
    <?php }else{ ?>
       Widget.MsgBox.success("<?php echo $_smarty_tpl->tpl_vars['pager']->value['message'];?>
");
       setTimeout(function(){<?php if ($_smarty_tpl->tpl_vars['pager']->value['link']){?>parent.window.location = "<?php echo $_smarty_tpl->tpl_vars['pager']->value['link'];?>
";<?php }else{ ?>parent.window.location.reload(true);<?php }?>}, <?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['timer'])===null||$tmp==='' ? 0 : $tmp);?>
*1000);
    <?php }?>
})(parent.window.KT, parent.window.jQuery);
</script>
<?php if ($_smarty_tpl->tpl_vars['pager']->value['appendjs']){?><?php echo $_smarty_tpl->tpl_vars['pager']->value['appendjs'];?>
<?php }?>
</body>
</html>
<?php }} ?>