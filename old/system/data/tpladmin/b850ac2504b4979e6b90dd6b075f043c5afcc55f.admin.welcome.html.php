<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:34:15
         compiled from "admin:page/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:107965933fe47c9be47-68784831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b850ac2504b4979e6b90dd6b075f043c5afcc55f' => 
    array (
      0 => 'admin:page/welcome.html',
      1 => 1430718976,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '107965933fe47c9be47-68784831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'ADMIN' => 0,
    'count' => 0,
    'sysinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fe481feb87_73242377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fe481feb87_73242377')) {function content_5933fe481feb87_73242377($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_qq')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.qq.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
        <tr>
            <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
            <th>江湖家居系统管理平台首页</th>
            <td class="right"></td>
            <td width="15"></td>
        </tr>
    </table>
</div>
<div class="page-data">
    <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value['admin_name']=='ijianghu'&&$_smarty_tpl->tpl_vars['ADMIN']->value['passwd']==md5('ijianghu')){?>
    <h4 class="tip-error">老兄！据我所知你使用的还是默认帐号密码，请尽快修改以免发生安全问题</h4>
    <?php }?>
    <table width="100%" border="0" cellspacing="0" class="table-data table">
          <tr><th colspan="4" class="left">平台数据统计</th></tr>
        <tr>

            <td class="w-150 left"><a href="?ctl=company/company&SO[audit]=0">待审核公司:<?php echo $_smarty_tpl->tpl_vars['count']->value['company'];?>
</a></td>
            <td class="w-150 left"><a href="?ctl=designer/designer&SO[audit]=0">待审核设计师:<?php echo $_smarty_tpl->tpl_vars['count']->value['designer'];?>
</a></td>
            <td class="w-150 left"><a href="?ctl=shop/shop&SO[audit]=0">等待审核材料商:<?php echo $_smarty_tpl->tpl_vars['count']->value['shop'];?>
</a></td>
            <td class="w-150 left"><a href="?ctl=mechanic/mechanic&SO[audit]=0">等待审核工人:<?php echo $_smarty_tpl->tpl_vars['count']->value['mechanic'];?>
</a></td>
        </tr>
        <tr>
            <td class="w-150 left"><a href="?ctl=tenders/tenders&SO[audit]=0">总共等待审核的招标:<?php echo $_smarty_tpl->tpl_vars['count']->value['tenders'];?>
</a></td>
            <td class="w-150 left"><a href="?ctl=tenders/tenders&SO[audit]=0">今日等待审核招标:<?php echo $_smarty_tpl->tpl_vars['count']->value['tenders2'];?>
</a></td>
             <td class="w-150 left"><a href="?tenders/track-index.html">今日招标反馈：<?php echo $_smarty_tpl->tpl_vars['count']->value['tracking'];?>
</a></td>
            <td class="w-150 left"><a href="?designer/yuyue-index.html">今日设计师预约:<?php echo $_smarty_tpl->tpl_vars['count']->value['designer_yuyue'];?>
</a></td>            
        </tr>
        <tr>
            <td class="w-150 left"><a href="?shop/yuyue-index.html">今日商铺产品预约:<?php echo $_smarty_tpl->tpl_vars['count']->value['shop_yuyue'];?>
</a></td>
            <td class="w-150 left"><a href="?trade/order-index.html">今日商城订单数:<?php echo $_smarty_tpl->tpl_vars['count']->value['order'];?>
</a></td>
            <td class="w-150 left"><a href="?trade/order-index.html">待审核订单：<?php echo $_smarty_tpl->tpl_vars['count']->value['order2'];?>
</a></td>
            <td class="w-150 left"><a href="?member/verify-audit.html">等待审核的认证:<?php echo $_smarty_tpl->tpl_vars['count']->value['verify'];?>
</a></td>
        </tr>
        <tr>
            <td class="w-150 left"><a href="?company/yuyue-index.html">今日预约公司:<?php echo $_smarty_tpl->tpl_vars['count']->value['company_yuyue'];?>
</a></td>
            <td class="w-150 left"></td>
            <td class="w-150 left"></td>
            <td class="w-150 left"></td>
        </tr>
    </table>
    <div id="ijh-news" class="none"></div>
    <div class="space15"></div>
    <table width="100%" border="0" cellspacing="0" class="table-data table">
        <tr><th colspan="15" class="left">系统信息</th></tr>
        <tr>
            <td class="w-150 left">江湖家居版本：</td>
            <td class="left" colspan="10"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['version'];?>
</td>
        </tr>
        <tr>
            <td class="w-150 left">服务器操作系统：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['server_os'];?>
</td>
            <td class="w-150 left">服务器域名/IP：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['server_domain'];?>
</td>
            <td class="w-150 left">服务器环境：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['web_server'];?>
</td>
        </tr>
        <tr>
            <td class="w-150 left">PHP 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['php_version'];?>
</td>
            <td class="w-150 left">Mysql 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['mysql_version'];?>
</td>
            <td class="w-150 left">GD 版本：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['gd_version'];?>
</td>
        </tr>
        <tr>
            <td class="w-150 left">文件上传限制：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['upload_max_filesize'];?>
</td>
            <td class="w-150 left">最大占用内存：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['memory_limit'];?>
</td>
            <td class="w-150 left">最大执行时间：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['max_execution_time'];?>
</td>
        </tr>
        <tr>
            <td class="w-150 left">安全模式：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['safe_mode'];?>
</td>
            <td class="w-150 left">Zlib支持：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['zlib'];?>
</td>
            <td class="w-150 left">Curl支持：</td><td class="left"><?php echo $_smarty_tpl->tpl_vars['sysinfo']->value['curl'];?>
</td>
        </tr>
    </table>
    <div class="space15"></div>
    <table width="100%" border="0" cellspacing="0" class="table-data table">
        <tr><th colspan="15" class="left">开发团队</th></tr>
        <tr><td class="w-150 left">版权所有：</td><td class="left"><a href="http://www.ijh.cc" target="_blank">合肥江湖信息科技有限公司</a></td></tr>
        <tr><td class="w-150 left">开发团队：</td><td class="left">江湖技术团队</td></tr>
        <tr><td class="w-150 left">联系电话：</td><td class="left">0551-64278115</td></tr>
        <tr><td class="w-150 left">授权咨询：</td><td class="left"><?php echo smarty_modifier_qq("800070067");?>
</td>
        </tr>
    </table> 
</div>
<!--有最新安全漏洞补丁的时候后台提醒请不要删除该JS-->
<script type="text/javascript" src="http://www.ijh.cc/index.php?ctl=patch&act=news&cat=jiaju&version=<?php echo @JH_VERSION;?>
.<?php echo @JH_RELEASE;?>
"></script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>