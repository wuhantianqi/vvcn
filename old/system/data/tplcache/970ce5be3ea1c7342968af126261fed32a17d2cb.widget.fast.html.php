<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:52
         compiled from "widget:tenders/fast.html" */ ?>
<?php /*%%SmartyHeaderCode:322915933f5c09579c0-02069229%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '970ce5be3ea1c7342968af126261fed32a17d2cb' => 
    array (
      0 => 'widget:tenders/fast.html',
      1 => 1429266712,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '322915933f5c09579c0-02069229',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'request' => 0,
    'CONFIG' => 0,
    'widget' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5c0be2729_95036731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5c0be2729_95036731')) {function content_5933f5c0be2729_95036731($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
?><div class="mb10 zbform">
    <h1><?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['title'])===null||$tmp==='' ? "免费装修招标" : $tmp);?>
</h1>
    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>"ajax"),$_smarty_tpl);?>
" mini-form="fast-tenders" method="post">
        <input type="hidden" name="data[from]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['data']->value['from'])===null||$tmp==='' ? 'TZX' : $tmp);?>
" />
        <input type="text" name="data[contact]" class="text full" placeholder="请输入您的姓名" />
        <input type="text" name="data[mobile]" class="text full" placeholder="请输入您的手机号码" />
        <?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['city_id'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['request']->value['city_id'] : $tmp),'class'=>"text short"),$_smarty_tpl);?>

        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['tender']){?>
         <input class="text short lt" type="text" name="verifycode" placeholder="请输入验证码"/><img verify="#<?php echo $_smarty_tpl->tpl_vars['widget']->value['HASH'];?>
" src="/index.php?magic-verify&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['HASH'];?>
" class="yz_pic rt"/>
        <?php }?>
		<div class="cl"></div>
        <p class="ico_btn">
            <input type="submit" value="免费发布" class="btn btn_sub_apply" />
            <span class="ico_list"></span>
        </p>
    </form>
    <script>
	$("[verify]").click(function(){
		$($(this).attr("verify")).attr("src", "/index.php?magic-verify&_"+Math.random());
	});
	</script>
</div><?php }} ?>