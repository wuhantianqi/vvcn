<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:48
         compiled from "widget:data/region.html" */ ?>
<?php /*%%SmartyHeaderCode:128465933f5bc392312-70213922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fda00583e2b113c45153d89096be3e2478c1cd3' => 
    array (
      0 => 'widget:data/region.html',
      1 => 1429266712,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '128465933f5bc392312-70213922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'widget' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5bc713176_24893987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5bc713176_24893987')) {function content_5933f5bc713176_24893987($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\libs\\smarty\\plugins\\function.html_options.php';
?><region id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
">
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" province="<?php echo $_smarty_tpl->tpl_vars['data']->value['province_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_province'])===null||$tmp==='' ? 'province_id' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['provinces'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['province_id']),$_smarty_tpl);?>
</select>
<?php if ($_smarty_tpl->tpl_vars['data']->value['level']>1){?>
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" city="<?php echo $_smarty_tpl->tpl_vars['data']->value['city_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_province'])===null||$tmp==='' ? 'data[city_id]' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['citys'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['city_id']),$_smarty_tpl);?>
</select>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['data']->value['level']>2){?>
<select class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['class'])===null||$tmp==='' ? 'w-150' : $tmp);?>
" area="<?php echo $_smarty_tpl->tpl_vars['data']->value['area_id'];?>
" name="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['name_province'])===null||$tmp==='' ? 'data[area_id]' : $tmp);?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['data']->value['areas'],'selected'=>$_smarty_tpl->tpl_vars['data']->value['area_id']),$_smarty_tpl);?>
</select>
<?php }?>
</region>
<script type="text/javascript">(function(K, $){Widget.Region("<?php echo $_smarty_tpl->tpl_vars['widget']->value['GUID'];?>
");})(window.KT, window.jQuery);</script><?php }} ?>