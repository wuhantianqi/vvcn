<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:52:52
         compiled from "admin:designer/designer/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:88655933f49488f732-08256471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cb09541262f3756110030b516ce28cb12991186' => 
    array (
      0 => 'admin:designer/designer/edit.html',
      1 => 1429266740,
      2 => 'admin',
    ),
  ),
  'nocache_hash' => '88655933f49488f732-08256471',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pager' => 0,
    'MOD' => 0,
    'detail' => 0,
    'company' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
    'attr' => 0,
    'OATOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f4950f0d14_14552028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f4950f0d14_14552028')) {function content_5933f4950f0d14_14552028($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ("admin:common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="page-title">
    <table width="100%" align="center" cellpadding="0" cellspacing="0" >
      <tr>
        <td width="30" align="right"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['url'];?>
/images/main-h5-ico.gif" alt="" /></td>
        <th><?php echo $_smarty_tpl->tpl_vars['MOD']->value['title'];?>
</th>
        <td align="right"><?php echo smarty_function_link(array('ctl'=>"designer/designer:index",'priv'=>"hidden",'class'=>"button"),$_smarty_tpl);?>
</td>
        <td width="15"></td>
      </tr>
    </table>
</div>
<div class="page-data">
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/widget.YMD.js"></script>
<form action="?designer/designer-edit.html" mini-form="designer-form" method="post" ENCTYPE="multipart/form-data">
<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
"/>
<table width="100%" border="0" cellspacing="0" id="table-info" class="table-data form">
    <tr>
        <th>会员名：</th>
        <td><a ucard="@<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
"><b class="blue"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['uname'])===null||$tmp==='' ? '--' : $tmp);?>
(UID:<?php echo $_smarty_tpl->tpl_vars['detail']->value['uid'];?>
)</b></a> &nbsp;&nbsp;&nbsp;<?php echo smarty_function_link(array('ctl'=>"member/member:edit",'args'=>$_smarty_tpl->tpl_vars['detail']->value['uid'],'title'=>"修改用户信息",'class'=>"button"),$_smarty_tpl);?>
</td>
    </tr>
    <tr><th>名称：</th><td><input type="text" name="data[name]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['name'];?>
" class="input w-300"/></td></tr>
    <tr><th>等级：</th><td><select name="data[group_id]" class="w-150"><?php echo smarty_function_widget(array('id'=>"member/group",'from'=>'designer','value'=>$_smarty_tpl->tpl_vars['detail']->value['group_id']),$_smarty_tpl);?>
</select></td></tr>
    <tr>
        <th>所属公司：</th>
        <td>
            <input type="hidden" name="data[company_id]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['company_id'];?>
" id="designer_company_id"/>
            <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
" id="designer_company_name" class="input w-300" readonly="readonly"/>
            <?php echo smarty_function_link(array('ctl'=>"company/company:dialog",'select'=>"mini:#designer_company_id,#designer_company_name/N/选择装修公司",'class'=>"button"),$_smarty_tpl);?>

        </td>
    </tr>
    <tr><th>QQ：</th><td><input type="text" name="data[qq]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['qq'];?>
" class="input w-300"/></td></tr>
    <tr><th>毕业院校：</th><td><input type="text" name="data[school]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['school'];?>
" class="input w-300"/></td></tr>
    <tr><th>设计理念：</th><td><textarea class="textarea" name="data[slogan]"><?php echo $_smarty_tpl->tpl_vars['detail']->value['slogan'];?>
</textarea></td></tr>
    <tr><th class="w-100"><span class="red">*</span>城市：</th><td><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['detail']->value['city_id'],'area_id'=>$_smarty_tpl->tpl_vars['detail']->value['area_id']),$_smarty_tpl);?>
</td></tr>   
    <tr><th>统计：</th>
        <td>
            <label>浏览数:<input type="text" name="data[views]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['views'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <label>案例数:<input type="text" name="data[case_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['case_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <label>工地数:<input type="text" name="data[blog_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['blog_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <label>预约数:<input type="text" name="data[yuyue_num]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['yuyue_num'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>       
        </td>
    </tr>
    <tr><th>评分：</th>
        <td>
            <label>评论数:<input type="text" name="data[comments]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['comments'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <label>综合&nbsp;&nbsp;:<input type="text" name="data[score]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value['score'])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <label><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
&nbsp;&nbsp;:<input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['detail']->value[$_smarty_tpl->tpl_vars['k']->value])===null||$tmp==='' ? '0' : $tmp);?>
" class="input w-100"/></label>
            <?php } ?>
        </td>
    </tr>
    <?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>"zx:designer",'value'=>$_smarty_tpl->tpl_vars['attr']->value),$_smarty_tpl);?>

    <tr><th>简介：</th><td><textarea name="data[about]" kindeditor="full" style="width:800px;height:350px;"><?php echo $_smarty_tpl->tpl_vars['detail']->value['about'];?>
</textarea></td></tr>
    <tr><th>排序：</th><td><input type="text" name="data[orderby]" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['orderby'];?>
" class="input w-100"/></td></tr>
    <tr><th>审核：</th>
        <td>
            <ul class="group-list">
                <li><label><input type="radio" name="data[audit]" value="0" <?php if (empty($_smarty_tpl->tpl_vars['detail']->value['audit'])){?> checked="checked"<?php }?>>待审核</label></li>
                <li><label><input type="radio" name="data[audit]" value="1" <?php if ($_smarty_tpl->tpl_vars['detail']->value['audit']){?> checked="checked"<?php }?>>已审核</label></li>
                <div class="clear-both"></div>
            </ul>
        </td>
    </tr>
    <tr><th class="clear-th-bottom"></th><td class="clear-td-bottom" colspan="10"><input type="submit" class="bt-big" value="提交数据" /></td></tr>
</table>
</form></div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
(function(K, $){
var editor = KindEditor.create('textarea[kindeditor]', {uploadJson : '?magic/upload-editor.html', extraFileUploadParams:{OATOKEN:"<?php echo $_smarty_tpl->tpl_vars['OATOKEN']->value;?>
"}});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("admin:common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>