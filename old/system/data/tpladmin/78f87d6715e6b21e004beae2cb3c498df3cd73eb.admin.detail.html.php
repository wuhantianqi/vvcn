<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:34:53
         compiled from "admin:tenders/tenders/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:102295933fe6dabd442-03536476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78f87d6715e6b21e004beae2cb3c498df3cd73eb' => 
    array (
      0 => 'admin:tenders/tenders/detail.html',
      1 => 1435743820,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '102295933fe6dabd442-03536476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'look_list' => 0,
    'item' => 0,
    'member_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fe6e4072f6_27347893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fe6e4072f6_27347893')) {function content_5933fe6e4072f6_27347893($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_iplocal')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.iplocal.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right">
            <?php echo smarty_function_link(array('ctl'=>"tenders/look:create",'arg0'=>$_smarty_tpl->tpl_vars['detail']->value['tenders_id'],'load'=>"mini:添加竞标",'width'=>"mini:600",'class'=>"button",'title'=>"添加竞标"),$_smarty_tpl);?>

            <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>

        </td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<h4 class="tip-notice">竞标日志</h4>
<table width="100%" border="0" cellspacing="0" class="table-data table">
<tr>
    <th class="w-100">ID</th><th>预约(联系人:电话:ID)</th><th class="w-150">用户</th><th class="w-100">金币</th>
    <th class="w-150">来源IP</th><th class="w-150">竞标时间</th><th class="w-150">操作</th>
</tr>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['look_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
<tr>
    <td class="left"><label><?php echo $_smarty_tpl->tpl_vars['item']->value['look_id'];?>
<label></td>
    <td class="left"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['contact'])===null||$tmp==='' ? '--' : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value['book_id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
(<?php echo $_smarty_tpl->tpl_vars['item']->value['uid'];?>
)</td><td><?php echo $_smarty_tpl->tpl_vars['item']->value['gold'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['clientip'];?>
(<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['item']->value['clientip']);?>
)</td><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</td>
    <td>
         <?php echo smarty_function_link(array('ctl'=>"tenders/track:create",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'class'=>"button",'title'=>"查看反馈"),$_smarty_tpl);?>
  
         <?php if (!$_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?><?php echo smarty_function_link(array('ctl'=>"tenders/look:update",'act'=>"mini:设为签单",'arg0'=>$_smarty_tpl->tpl_vars['item']->value['look_id'],'class'=>"button",'title'=>"设为签单"),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']==$_smarty_tpl->tpl_vars['item']->value['uid']){?><b class="blue">中标</b><?php }else{ ?><b>淘汰</b><?php }?><?php }?>
    </td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['item']->_loop) {
?>
 <tr><td colspan="20"><p class="text-align">还没有查看预约</p></td></tr>
<?php } ?>
</table>
<table width="100%" border="0" cellspacing="0" class="table-data form">
<tr><th>标题：</th><td colspan="10"><b class="blue"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</b>(ID:<?php echo $_smarty_tpl->tpl_vars['detail']->value['tenders_id'];?>
)</td></tr>
<tr>
    <th class="w-200">类型：</th><td class="w-400"><?php echo $_smarty_tpl->tpl_vars['detail']->value['from'];?>
</td>
    <th class="w-200">状态：</th><td class="w-400"><?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?><b class="">已签约</b><?php }else{ ?>未签约<?php }?></td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['detail']->value['sign_uid']){?>
<tr>
    <th>签约者：</th><td><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['detail']->value['sign_uid']]['uname'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['detail']->value['sign_uid'];?>
)</td>
    <th>签约时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['sign_time']);?>
</td>
</tr>
<?php }?>
<tr>
    <th>联系人：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['contact'])===null||$tmp==='' ? '--' : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['detail']->value['uid']){?>[<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['detail']->value['uid']]['uname'];?>
(UID:<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
)]<?php }?></td>
    <th>电话：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['mobile'])===null||$tmp==='' ? '--' : $tmp);?>
</td>

</tr>
<tr>
    <th>地区：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['city_name'])===null||$tmp==='' ? '--' : $tmp);?>
  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['area_name'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
    <th>地址：</th><td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['addr'])===null||$tmp==='' ? '--' : $tmp);?>
</td>
</tr>
<tr>
    <th>装修时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['zx_time']);?>
</td>
    <th>下次联系时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['tx_time']);?>
</td><td colspan="10"></td>
</tr>
<tr>
    <th>最大查看数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['max_look'];?>
</td>
    <th>售价/金币：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['gold'];?>
</td>
</tr>
<tr>
    <th>已查看数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['looks'];?>
</td>
    <th>收益金币：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['looks']*$_smarty_tpl->tpl_vars['detail']->value['gold'];?>
</td>
</tr>
<tr><th>浏览数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</td></tr>
<tr><th>反馈数：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['tracks'];?>
</td><th>新反馈：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['new_track'];?>
</td>

<tr>
    <th>发布时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</td>
    <th>发布IP：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['clientip'];?>
<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['detail']->value['clientip']);?>
</td>
</tr>
<tr><th></th><td colspan="10"><b class="red">装修需求</b></td></tr>
<tr><th>装修方式：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['way_title'];?>
</td><th>招标类型：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['type_title'];?>
</td></tr>
<tr><th>喜欢风格：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['style_title'];?>
</td><th>预算范围：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['budget_title'];?>
</td></tr>
<tr><th>服务需求：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['service_title'];?>
</td><th>空间户型：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['house_type_title'];?>
</td></tr>
<?php echo smarty_function_widget(array('id'=>"attr/info",'from'=>$_smarty_tpl->tpl_vars['detail']->value['from_attr_key'],'value'=>$_smarty_tpl->tpl_vars['detail']->value['attrvalues']),$_smarty_tpl);?>

<tr><td colspan="10" style="height:5px;"></td></tr>
<tr><th>业主要求：</th><td colspan="10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['comment'])===null||$tmp==='' ? '--' : $tmp);?>
</td></tr><tr>
    <th>状态：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['status_title'];?>
</td>
    <th>审核：</th><td><?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?><b class="blue">通过</b><?php }else{ ?><span class="red">待审</span><?php }?></td>   
    <td colspan="10"></td>
</tr>
<tr><th>管理员备注：</th><td colspan="10"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['remark'])===null||$tmp==='' ? '--' : $tmp);?>
</td></tr>
<tr>
    <th>发布时间：</th><td><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</td>
    <th>发布IP：</th><td><?php echo $_smarty_tpl->tpl_vars['detail']->value['clientip'];?>
<?php echo smarty_modifier_iplocal($_smarty_tpl->tpl_vars['detail']->value['clientip']);?>
</td>
    <td colspan="10"></td>
</tr>
<tr>
    <th class="clear-th-bottom"></th>
    <td class="clear-td-bottom" colspan="10">
        <?php echo smarty_function_link(array('ctl'=>"tenders/tenders:edit",'arg0'=>$_smarty_tpl->tpl_vars['detail']->value['tenders_id'],'class'=>"button",'title'=>"修改预约"),$_smarty_tpl);?>

        <?php echo smarty_function_link(array('ctl'=>"tenders/look:create",'arg0'=>$_smarty_tpl->tpl_vars['detail']->value['tenders_id'],'load'=>"mini:添加竞标",'width'=>"mini:600",'class'=>"button",'title'=>"添加竞标"),$_smarty_tpl);?>

    </td>
</tr>
</table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>