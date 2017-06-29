<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:58:12
         compiled from "b934215e74eb6cea2a4b1fd659fb0f2909fc8432" */ ?>
<?php /*%%SmartyHeaderCode:213445933f5d4d9f033-11633335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b934215e74eb6cea2a4b1fd659fb0f2909fc8432' => 
    array (
      0 => 'b934215e74eb6cea2a4b1fd659fb0f2909fc8432',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '213445933f5d4d9f033-11633335',
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
  'unifunc' => 'content_5933f5d4e90343_28373316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5d4e90343_28373316')) {function content_5933f5d4e90343_28373316($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
?>
				<li>
					<div class="main_site main_list">
						<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="lt pic"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" /></a>
						<div class="main_site_rt main_list_rt rt">
							<h3><p class="lt"><b><a <?php if ($_smarty_tpl->tpl_vars['item']->value['home_id']){?>href="<?php echo smarty_function_link(array('ctl'=>'home:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['home_id']),$_smarty_tpl);?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
</a></b></p></h3>
							<div class="main_site_rt_top">
								<div class="lt">
									<p><span class="ico_list fengge_ico"></span>价格：<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
万元</p>
									<p><span class="ico_list company_ico"></span>小区：<?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
</p>
								</div>
								<a href="<?php echo smarty_function_link(array('ctl'=>'site:yuyue','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-width='500' mini-load="我要参观工地" class="btn_sub_sm btn rt">我要参观</a>
							</div>
							<div class="cl"></div>
							<div class="site_step">
								<p class="step bar"><span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></span></p>
								<p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
							</div>
						</div>
						<div class="cl"></div>
					</div>
				</li>
                <?php }} ?>