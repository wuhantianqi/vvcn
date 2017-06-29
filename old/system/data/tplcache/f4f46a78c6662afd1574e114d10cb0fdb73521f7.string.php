<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 21:19:25
         compiled from "f4f46a78c6662afd1574e114d10cb0fdb73521f7" */ ?>
<?php /*%%SmartyHeaderCode:23857593408dd6c62a2-88950743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4f46a78c6662afd1574e114d10cb0fdb73521f7' => 
    array (
      0 => 'f4f46a78c6662afd1574e114d10cb0fdb73521f7',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '23857593408dd6c62a2-88950743',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_593408ddc281e1_34720967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_593408ddc281e1_34720967')) {function content_593408ddc281e1_34720967($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
                    <li>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="pic lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_thumb.jpg" /></a>
                        <div class="rt">
                            <h3><a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="lt"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                <span class="rt"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['views'];?>
</font>人看了此方案</span></h3>
                            <p class="cl"></p>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['company_id']){?>
                            <p>方案提供者：<a href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['item']->value['ext']['company']['name'];?>
</a></p>
                            <?php }else{ ?>
                            <p>方案提供者：<a href="<?php echo smarty_function_link(array('ctl'=>'company','arg0'=>$_smarty_tpl->tpl_vars['item']->value['company_id']),$_smarty_tpl);?>
" class="fontcl2">--------</a></p>
                            <?php }?>
                            <p>设计思路：<?php echo $_smarty_tpl->tpl_vars['item']->value['intro'];?>
</p>
                            <p class="bottom">
                                <span class="lt">
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
#huxin" class="fontcl1">平面布置图</a>
                                    <a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
#case" class="fontcl1">设计图</a>
                                </span>
                                <a href="<?php echo smarty_function_link(array('ctl'=>'home:caseDetail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id'],'arg1'=>$_smarty_tpl->tpl_vars['item']->value['case_id']),$_smarty_tpl);?>
" class="rt btn btn_main_sm">去看看</a>
                            </p>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php }} ?>