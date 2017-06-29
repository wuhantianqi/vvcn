<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:34:59
         compiled from "admin:page/login.html" */ ?>
<?php /*%%SmartyHeaderCode:112505933fe7399f5e8-22481014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c66b93d857459543b1d37f71a25f1f726163f51a' => 
    array (
      0 => 'admin:page/login.html',
      1 => 1429266744,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '112505933fe7399f5e8-22481014',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fe739e72f0_03919705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fe739e72f0_03919705')) {function content_5933fe739e72f0_03919705($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="zh-CN" />
    <title>江湖家居门户系统管理平台 - Powered by IJH.CC</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/style/common.css" type="text/css" charset="utf-8" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <script type="text/javascript">if (window.parent != window){window.top.location.href = location.href;}</script>
</head>
<body style="background:#F3F9FA;">
    <div class="login_enter">
        <form action="?index-login" method="post">
        <table width="53%" border="0" cellspacing="0" cellpadding="0">
            <tr><th height="60" colspan="3" valign="top">用户登陆</th></tr>
            <tr>
                <td width="22%" align="right">用户名：</td>
                <td colspan="2"><input name="admin_name" id="admin_name" type="text" class="login_input" value="" focue style="width:150px;"/></td>
            </tr>
            <tr>
                <td align="right">密&nbsp;&nbsp;&nbsp;码：</td>
                <td colspan="2"><input  name="admin_pwd" type="password" class="login_input" value="" style="width:150px;"/></td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['admin']->value){?>
            <tr>
                <td align="right">验证码：</td>
                <td style="width:60px"><input name="verify_code" type="text" class="login_input" id="textfield3" value="" style="width:40px" maxlength="4" /></td>
                <td><img src="?index-verify" alt="请输入验证码" width="100" height="30" onClick="this.src='?index-verify&_'+Math.random()" /></td>
            </tr>
            <?php }?>
        </table>
        <table width="53%" border="0" cellspacing="0" cellpadding="0">
            <tr><td align="center"><input type="submit" class="login_button" value="点击登陆" /></td></tr>
        </table>
        </form>
        <div class="login_foot"><a href="http://www.ijh.cc" target="_blank">合肥江湖信息科技有限公司 版权所有 @ ijh.cc</a></div>
    </div>
<script type="text/javascript">document.getElementById('admin_name').focus();</script>
</body>
</html>
<?php }} ?>