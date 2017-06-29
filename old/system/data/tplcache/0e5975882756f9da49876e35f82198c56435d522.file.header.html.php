<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:53:16
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\ucenter\block\header.html" */ ?>
<?php /*%%SmartyHeaderCode:178445933f4accd4684-19812397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e5975882756f9da49876e35f82198c56435d522' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\ucenter\\block\\header.html',
      1 => 1439189728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178445933f4accd4684-19812397',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MEMBER' => 0,
    'ctlgroup' => 0,
    'HAVE_WEIXIN' => 0,
    'request' => 0,
    'company' => 0,
    'shop' => 0,
    'menu_list' => 0,
    'menu' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f4ad062c71_82924086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4ad062c71_82924086')) {function content_5933f4ad062c71_82924086($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["ucenter_header"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/themes/default/static/css/ucenter.css">
<div id="wrap">
    <div class="head">
		<div class="logo">			
			<span class="lt">管理中心</span>
			<span class="rt">
                <font class="logo_rt_icon"></font>金币：<font class="orange"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</font>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:gold'),$_smarty_tpl);?>
" class="green">充值金币</a>
            </span>
            <div class="cl"></div>
		</div>
		<div class="nav">
			<ul class="lt">
				<li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='member'){?> class="on"<?php }?>>个人中心</a></li>
				<?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/shop:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='shop'){?> class="on"<?php }?>>商铺管理</a></li>
                <?php if ($_smarty_tpl->tpl_vars['HAVE_WEIXIN']->value){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/weixin:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='weixin'){?> class="on"<?php }?>>微信管理</a></li>
                <?php }?>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/company:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='company'){?> class="on"<?php }?>>公司管理</a></li>
                <?php if ($_smarty_tpl->tpl_vars['HAVE_WEIXIN']->value){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/weixin:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='weixin'){?> class="on"<?php }?>>微信管理</a></li>
                <?php }?>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='designer'){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/designer:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='designer'){?> class="on"<?php }?>>设计师管理</a></li>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='mechanic'){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/mechanic:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='mechanic'){?> class="on"<?php }?>>技工管理</a></li>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='gz'){?>
                <li><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/gz:index'),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['ctlgroup']->value=='gz'){?> class="on"<?php }?>>工长管理</a></li>
                <?php }?>
			</ul>
			<span class="rt">
			<?php if ($_smarty_tpl->tpl_vars['request']->value['ctl']!='ucenter/member'){?>
                <?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='company'){?>
                <font class="nav_icon"></font><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" target="_blank">公司主页</a>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='shop'){?>
                <font class="nav_icon"></font><a href="<?php echo smarty_function_link(array('ctl'=>'mall/shop','arg0'=>$_smarty_tpl->tpl_vars['shop']->value['shop_id']),$_smarty_tpl);?>
" target="_blank">店铺主页</a>
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='designer'){?>
                <font class="nav_icon"></font><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['MEMBER']->value['uid']),$_smarty_tpl);?>
" target="_blank">我的博客</a>            
                <?php }elseif($_smarty_tpl->tpl_vars['MEMBER']->value['from']=='mechanic'){?>
                <font class="nav_icon"></font><a href="<?php echo smarty_function_link(array('ctl'=>'mechanic:detail','arg0'=>$_smarty_tpl->tpl_vars['MEMBER']->value['uid']),$_smarty_tpl);?>
" target="_blank">工人主页</a>
                <?php }?>
			<?php }?>
            </span>
		</div>
	</div>
	<div class="content" id="ucenter_main_lay">
		<div class="cont_lt lt" id="ucenter_left_lay">
			<ul class="menu_lay">
                <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['menu']->value['menu']){?>
                    <li class="menu open"><font class="menu_open_icon"></font><a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['menu']->value['title'];?>
</a>
                    <ul class="sub_menu">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['menu']){?>
                        <li><a href="<?php echo smarty_function_link(array('ctl'=>$_smarty_tpl->tpl_vars['item']->value['ctl']),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['request']->value['ctlmap']['ctl']==$_smarty_tpl->tpl_vars['item']->value['ctl']||$_smarty_tpl->tpl_vars['request']->value['ctlmap']['nav']==$_smarty_tpl->tpl_vars['item']->value['ctl']){?> class="on"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
                        <?php }?>
                        <?php } ?>
                    </ul>
                    <?php }?>
                </li>
                <?php } ?>	
            </ul>
		</div>
    <script type="text/javascript">
    (function(K, $){
        $("menu_lay li.menu").click(function(){
            if($(this).hasClass("open")){
                $(this).removeClass("open").addClass("close");
                $(this).next("ul.sub_menu").slideUp("fast");
            }else{
                $(this).removeClass("close").addClass("open");
                $(this).next("ul.sub_menu").slideDown("fast");    
            }
        });
    })(window.KT, window.jQuery);
    </script>
		<div class="cont_rt rt" id="ucenter_right_lay">




<?php }} ?>