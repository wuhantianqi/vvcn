<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:53:16
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\ucenter\member\index.html" */ ?>
<?php /*%%SmartyHeaderCode:170905933f4ac4dda56-36261796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4940cfe80a68a74771290f5dd3ef48e8736bbe53' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\ucenter\\member\\index.html',
      1 => 1429266772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170905933f4ac4dda56-36261796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MEMBER' => 0,
    'tenders_count' => 0,
    'yuyue_company_count' => 0,
    'yuyue_designer_count' => 0,
    'yuyue_mechanic_count' => 0,
    'yuyue_shop_count' => 0,
    'order_count' => 0,
    'CONFIG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f4ac661fa4_13104135',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4ac661fa4_13104135')) {function content_5933f4ac661fa4_13104135($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_iplocal')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.iplocal.php';
?><?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div style="width:923px;padding:12px;margin:0 auto;">
    <div class="index_rt_top">
        <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:index'),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
" width="120" height="120"/></a>
        <div class="shop_top_lt lt">
            <p class="title"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['uname'];?>
</p>
            <p>帐户类型： <?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['from_title'];?>
</p>
            <p>邮箱地址：<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mail'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['mail'];?>
</a><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mail']){?>[已认证]<?php }else{ ?>[未认证]<?php }?></p>
            <p>手机号码：<a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/verify:mobile'),$_smarty_tpl);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['MEMBER']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
</a><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['mobile']){?><?php if ($_smarty_tpl->tpl_vars['MEMBER']->value['verify_mobile']){?>[已认证]<?php }else{ ?>[未认证]<?php }?><?php }?></p>
        </div>
        <div class="shop_top_rt personal_top_rt rt">
            <p>注册时间：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['MEMBER']->value['dateline']);?>
</p>
            <p>最后登录：<?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['MEMBER']->value['lastlogin']);?>
</p>
            <p>登录地点：<font class="green"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['MEMBER']->value['loginip'],6,"******");?>
</font>(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['MEMBER']->value['loginip']);?>
)</p>
        </div>
    </div>
    <div class="index_cont_lt lt">
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon2"></font>交易统计</p>
            <p class="txt">我的预约</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:tenders'),$_smarty_tpl);?>
" class="green">我的招标(<?php echo $_smarty_tpl->tpl_vars['tenders_count']->value;?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:company'),$_smarty_tpl);?>
" class="green">预约公司 (<?php echo $_smarty_tpl->tpl_vars['yuyue_company_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:designer'),$_smarty_tpl);?>
" class="green">预约设计师 (<?php echo $_smarty_tpl->tpl_vars['yuyue_designer_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:mechanic'),$_smarty_tpl);?>
" class="green">预约技工 (<?php echo $_smarty_tpl->tpl_vars['yuyue_mechanic_count']->value;?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/yuyue:shop'),$_smarty_tpl);?>
" class="green">预约商铺 (<?php echo $_smarty_tpl->tpl_vars['yuyue_shop_count']->value;?>
)</a>
            </p> 
            <p class="txt">我的订单</p>
            <p class="txt">
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">新订单 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['new'];?>
) </a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unship'),$_smarty_tpl);?>
" class="green">待收货 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unship'];?>
)</a>
                <a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member/order:index','arg0'=>'unpay'),$_smarty_tpl);?>
" class="green">待付款 (<?php echo $_smarty_tpl->tpl_vars['order_count']->value['unpay'];?>
)</a>            
            </p>
        </div>
        <div class="index_c_lt">
            <p class="title"><font class="index_c_lt_icon3"></font>财务信息</p>
            <p class="txt">我的金币余额：<font class="orange"><?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['gold'];?>
</font></p>
            <p><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:gold'),$_smarty_tpl);?>
" class="green">在线充值 </a><a href="<?php echo smarty_function_link(array('ctl'=>'ucenter/member:logs'),$_smarty_tpl);?>
" class="green">收支明细</a></p>
        </div>
    </div>
    <div class="index_cont_rt rt">
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon1"></font>公告</p>
            <p class="txt"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['bulletin']['member'];?>
</p>
        </div>
        <div class="index_c_rt">
            <p class="title"><font class="index_c_rt_icon2"></font>平台联系方式</p>
            <p class="txt">客服电话: <font class="green"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</font></p>
            <p>服务时间:9:00-18:00(周一至周日)</p>
        </div>
    </div>
 </div>
<?php echo $_smarty_tpl->getSubTemplate ("ucenter/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>