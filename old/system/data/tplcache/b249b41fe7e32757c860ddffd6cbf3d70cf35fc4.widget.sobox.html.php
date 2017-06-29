<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:48
         compiled from "widget:public/sobox.html" */ ?>
<?php /*%%SmartyHeaderCode:186905933f2b05d6830-19064765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b249b41fe7e32757c860ddffd6cbf3d70cf35fc4' => 
    array (
      0 => 'widget:public/sobox.html',
      1 => 1429266712,
      2 => 'widget',
    ),
  ),
  'nocache_hash' => '186905933f2b05d6830-19064765',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'v' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b0687373_01855247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b0687373_01855247')) {function content_5933f2b0687373_01855247($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><form method="post" action="<?php echo smarty_function_link(array('ctl'=>$_smarty_tpl->tpl_vars['data']->value['sotype']['ctl']),$_smarty_tpl);?>
" id="top-search">
    <div class="search_cont">
        <a href="javascript:void(0);" id="top_select" class="lt"><?php echo $_smarty_tpl->tpl_vars['data']->value['sotype']['title'];?>
<span class="search_ico index_ico"></span></a>
        <div class="search_cont_list none">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['all_sotype']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <a href="javascript:void(0);" rel="<?php echo smarty_function_link(array('ctl'=>$_smarty_tpl->tpl_vars['v']->value['ctl']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a>
            <?php } ?>
        </div>
    </div>
    <input type="text" name="kw" class="text lt" placeholder="请输入你要搜索的关键字" value="<?php echo $_smarty_tpl->tpl_vars['pager']->value['sokw'];?>
"  x-webkit-speech speech/>
    <input type="submit" class="btn rt" value="搜索"/>
</form>
<script type="text/javascript">
(function(K, $){
    $(".search_box .search_cont").mouseover(function(){
        var o = $("#top_select").offset();
        $(this).find(".search_cont_list").css({left:o.left-2,top:o.top+36}).show();
    }).mouseleave(function(){
        $(this).find(".search_cont_list").hide();
    });
    $(".search_cont_list a").click(function(){
        $(".search_box .search_cont #top_select").html($(this).text()+'<span class="search_ico index_ico"></span>');
        $(".search_box form").attr('action',$(this).attr('rel'));
        $(".search_box .search_cont_list").hide();
    });
    //绿色头部搜索框
    $(".search_cont").mouseover(function(){
        $(this).find(".search_cont_list").show();
    }).mouseleave(function(){
        $(this).find(".search_cont_list").hide();
    });
})(window.KT, window.jQuery);
</script><?php }} ?>