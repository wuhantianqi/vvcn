<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:26:03
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\site\items.html" */ ?>
<?php /*%%SmartyHeaderCode:1303559352e4b1b0bc2-79821050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de45a575139f2e13e704051a1b800757b35b0fd' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\site\\items.html',
      1 => 1496719560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1303559352e4b1b0bc2-79821050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e4b2aac02_01152592',
  'variables' => 
  array (
    'CONFIG' => 0,
    'pager' => 0,
    'area_list' => 0,
    'v' => 0,
    'order_list' => 0,
    'items' => 0,
    'item' => 0,
    'company_list' => 0,
    'designer_list' => 0,
    'designer' => 0,
    'request' => 0,
    'tpl_head_append' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e4b2aac02_01152592')) {function content_59352e4b2aac02_01152592($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'site:index'),$_smarty_tpl);?>
">在建工地</a>
		</p>
	</div>
</div>
	<iframe id="miniframe" name="miniframe" style="display:none;"></iframe>
	<div class="container">
		<style>
			.attr-list .current-s {
				color: #00b371;
			}

		</style>
		<!-- 广告图 -->
		<div style="width: 1200px;height: 100px;margin: 0 auto;"><img src="picture/site-top-adv.png" /></div>
		<!-- 左侧 -->
		<div style="float: left;width: 910px;">
			<!-- 设计师属性列表 -->
			<div class="attr-list">
				<dl>
					<dt>选择区域</dt>
					<dd>
						<a  href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>0,'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'arg2'=>1),$_smarty_tpl);?>
" <?php if (empty($_smarty_tpl->tpl_vars['pager']->value['area_id'])){?>class="current"<?php }?>>不限</a>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'site:items','arg0'=>$_smarty_tpl->tpl_vars['v']->value['area_id'],'arg1'=>$_smarty_tpl->tpl_vars['pager']->value['order'],'arg2'=>1),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['area_id']==$_smarty_tpl->tpl_vars['pager']->value['area_id']){?>class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['area_name'];?>
</a>
                        <?php } ?>
					</dd>
				</dl>
			</div>
			<div>
				<!-- 默认排序/浏览最多 -->
				<h2 class="sort-list w-870">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<span <?php if ($_smarty_tpl->tpl_vars['v']->value['checked']){?>class="sort_ico ico_list sort_on_ico"<?php }else{ ?>class="sort_ico ico_list"<?php }?>></span></a>
                <?php } ?> 
				<a class="issue-tender" target="_blank" href="">发布招标</a>
				</h2>
				<div>
					<ul>
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" class="pic fl"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['home_name'];?>
" href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['item']->value['home_name'],77);?>
</a></h2>
											<?php if ($_smarty_tpl->tpl_vars['company_list']->value){?>
                                            	承接公司：<a href="<?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['company_url'];?>
"  target="_blank"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['company_list']->value[$_smarty_tpl->tpl_vars['item']->value['company_id']]['name'];?>
 </font></a>
                                            <?php }elseif($_smarty_tpl->tpl_vars['designer_list']->value){?>
                                            	承接设计师：<a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
"  target="_blank"><font class="fontcl2"> <?php echo $_smarty_tpl->tpl_vars['designer_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['name'];?>
 </font></a>
                                            <?php }?>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：<?php echo $_smarty_tpl->tpl_vars['item']->value['status_title'];?>
</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step2"></span>
										</p>
										<div class="site_step">
                                        <p class="step bar"> <span class="bar step_color step<?php echo $_smarty_tpl->tpl_vars['item']->value['status'];?>
"></span></p>
                                        <p><span class="step">开工大吉</span><span class="step">水电改造</span><span class="step">泥瓦阶段</span><span class="step">木工阶段</span><span class="step">油漆阶段</span><span class="step">安装阶段</span><span class="step">验收完成</span></p>
                                    </div>
									</div>
									<div class="site-detail">
										<p class="fr"><a href="<?php echo smarty_function_link(array('ctl'=>'site:detail','arg0'=>$_smarty_tpl->tpl_vars['item']->value['site_id']),$_smarty_tpl);?>
" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<?php } ?>
						<!-- <li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-908.html" target="_blank" title="清江山水水电隐蔽工程验收" class="pic fl"><img src="picture/20170526_96860662d55f37f3d4c4e55ad200f191.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="清江山水水电隐蔽工程验收" href="http://wh.mjia.cc/site-detail-908.html">清江山水水电隐蔽工程验收</a></h2>
											<p>装修公司：<a target="_blank" title="众意（北京）家居装饰有限公司" href="http://wh.mjia.cc/company-1602.html">众意（北京）家居装饰有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：水电改造</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step2"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-907.html" target="_blank" title="华生城市广场" class="pic fl"><img src="picture/20170525_48e33ebaa009d6aab6d7a1a97aa3fec2.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="华生城市广场" href="http://wh.mjia.cc/site-detail-907.html">华生城市广场</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-906.html" target="_blank" title="荣冠花园" class="pic fl"><img src="picture/20170525_d13651b8e8298504d9488b0a2569395a.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="荣冠花园" href="http://wh.mjia.cc/site-detail-906.html">荣冠花园</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：水电改造</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step2"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-905.html" target="_blank" title="开发区枫桦苇岸" class="pic fl"><img src="picture/20170525_e3c06e777514ebd9dd4ab61a3a023556.png" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="开发区枫桦苇岸" href="http://wh.mjia.cc/site-detail-905.html">开发区枫桦苇岸</a></h2>
											<p>装修公司：<a target="_blank" title="武汉优家我佳装饰工程有限公司" href="http://wh.mjia.cc/company-1656.html">武汉优家我佳装饰工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：油漆阶段</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step5"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-904.html" target="_blank" title="福星惠誉东湖城" class="pic fl"><img src="picture/20170525_ffdf424500f657b2994a7dc9022e0640.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="福星惠誉东湖城" href="http://wh.mjia.cc/site-detail-904.html">福星惠誉东湖城</a></h2>
											<p>装修公司：<a target="_blank" title="武汉嘉年华装饰设计工程有限公司" href="http://wh.mjia.cc/company-1690.html">武汉嘉年华装饰设计工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：泥瓦工阶段</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step3"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-903.html" target="_blank" title="保利清能西海岸" class="pic fl"><img src="picture/20170523_44d55334008d94b2cbbf7b9ef363143e.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="保利清能西海岸" href="http://wh.mjia.cc/site-detail-903.html">保利清能西海岸</a></h2>
											<p>装修公司：<a target="_blank" title="武汉嘉年华装饰设计工程有限公司" href="http://wh.mjia.cc/company-1690.html">武汉嘉年华装饰设计工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：木工阶段</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step4"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-892.html" target="_blank" title="绿地中央广场" class="pic fl"><img src="picture/20170522_7c3f1e710de878d156493ca0d8750ea0.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="绿地中央广场" href="http://wh.mjia.cc/site-detail-892.html">绿地中央广场</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-891.html" target="_blank" title="磨山港湾小区" class="pic fl"><img src="picture/20170522_cd211b0c1b83aeafa6e487d5d71651a9.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="磨山港湾小区" href="http://wh.mjia.cc/site-detail-891.html">磨山港湾小区</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：水电改造</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step2"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-890.html" target="_blank" title="中海琴台华府" class="pic fl"><img src="picture/20170522_6d0cd77ab344961146c29cbae0d31638.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="中海琴台华府" href="http://wh.mjia.cc/site-detail-890.html">中海琴台华府</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-889.html" target="_blank" title="和昌森林湖小区" class="pic fl"><img src="picture/20170522_ee060c134b3471e209f93658b44ed7af.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="和昌森林湖小区" href="http://wh.mjia.cc/site-detail-889.html">和昌森林湖小区</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：油漆阶段</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step5"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-886.html" target="_blank" title="汉阳区枫桦苇岸" class="pic fl"><img src="picture/20170519_1086ac20e1a784d890b41a85a14f09c3.png" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="汉阳区枫桦苇岸" href="http://wh.mjia.cc/site-detail-886.html">汉阳区枫桦苇岸</a></h2>
											<p>装修公司：<a target="_blank" title="武汉优家我佳装饰工程有限公司" href="http://wh.mjia.cc/company-1656.html">武汉优家我佳装饰工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-883.html" target="_blank" title="蔡甸区锦绣星城-9栋4单元701室" class="pic fl"><img src="picture/20170518_c4f0495f5bb734552ed794e09f4f664c.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="蔡甸区锦绣星城-9栋4单元701室" href="http://wh.mjia.cc/site-detail-883.html">蔡甸区锦绣星城-9栋4单元701室</a></h2>
											<p>装修公司：<a target="_blank" title="湖北好邻帮装饰设计有限公司" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰设计有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-882.html" target="_blank" title="汉阳区七里庙和谐家园" class="pic fl"><img src="picture/20170517_722a87f63f265dcf0d9a7036f72dfa89.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="汉阳区七里庙和谐家园" href="http://wh.mjia.cc/site-detail-882.html">汉阳区七里庙和谐家园</a></h2>
											<p>装修公司：<a target="_blank" title="武汉优家我佳装饰工程有限公司" href="http://wh.mjia.cc/company-1656.html">武汉优家我佳装饰工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li>
						<li style="padding: 30px 20px;">
							<div class="main-site clearfix">
								<a href="http://wh.mjia.cc/site-detail-881.html" target="_blank" title="汉阳区玫瑰新苑9栋1单元102室" class="pic fl"><img src="picture/20170517_5a864bfc23c921588ea1af32e9ba622a.jpg" alt="" style="width: 270px;height: 180px;border-radius: 4px;" /></a>
								<div class="main-site-rt main-list-rt fr">
									<div class="clearfix">
										<div class="site-com">
											<h2><a target="_blank" title="汉阳区玫瑰新苑9栋1单元102室" href="http://wh.mjia.cc/site-detail-881.html">汉阳区玫瑰新苑9栋1单元102室</a></h2>
											<p>装修公司：<a target="_blank" title="武汉优家我佳装饰工程有限公司" href="http://wh.mjia.cc/company-1656.html">武汉优家我佳装饰工程有限公司</a></p>
										</div>
										<a href="javascript:;" title="" class="msr-current">当前进度：开工大吉</a>
									</div>
									<div class="step-bar">
										<p class="step">
											<span class="step-color step1"></span>
										</p>
										<p class="step-font">
											<span>开工大吉</span>
											<span>水电改造</span>
											<span>泥瓦阶段</span>
											<span>木工阶段</span>
											<span>油漆阶段</span>
											<span>安装阶段</span>
											<span>验收完成</span>
										</p>
									</div>
									<div class="site-detail">
										<p class="fl"><span class="sd1">风格：简约</span><span class="sd2">户型：两室两厅一厨一卫</span></p>
										<p class="fr"><a href="javascript:;" class="sd3">免费预约参观</a></p>
									</div>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
				<div class="pager"><?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?></div>
			</div>
		</div>
		<!-- 右侧 -->
		<div class="w-260 mt-30 fr">
			<div class="main-sidebar-form">
				<div class="side-form-box">
					<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

				</div>
				<div class="side-icon w-238px">
					<ul>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon1"></em>免费量房</a></li>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon2"></em>免费验房</a></li>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon3"></em>免费设计</a></li>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon4"></em>免费监理</a></li>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon5"></em>免费报价</a></li>
						<li><a href="" target="_blank" class="w-79"><em class="side-icon6"></em>免费保障</a></li>
					</ul>
				</div>
			</div>
			<!-- 最新工地 -->
			<div class="main-sidebar-bor h-374 mt-30">
				<div class="bar-tit">
					<h2>装修公司排行榜</h2>
				</div>
				<div class="plr-20">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-910.html"><{$iteration}></a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1717.html"><{$item.name|cutstr:35}></a></p>
							</div>
						</li>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<!-- <li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-909.html">六合荣盛龙湖</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1873.html">南京豪舒装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-908.html">清江山水水电隐蔽工程验收</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1602.html">众意（北京）家居装饰有限公司</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-907.html">华生城市广场</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-906.html">荣冠花园</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1540.html">湖北好邻帮装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-905.html">开发区枫桦苇岸</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1656.html">武汉优家我佳装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-904.html">福星惠誉东湖城</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1690.html">武汉嘉年华装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-903.html">保利清能西海岸</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1690.html">武汉嘉年华装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-902.html">裕达大厦</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1881.html">云图装饰</a></p>

							</div>
						</li>
						<li>
							<div class="ptb-15">
								<h2><em></em><a target="_blank" href="http://wh.mjia.cc/site-detail-901.html">北海公园</a></h2>
								<p>施工单位：<a target="_blank" href="http://wh.mjia.cc/company-1881.html">云图装饰</a></p>

							</div>
						</li> -->

					</ul>
				</div>
			</div>
			<!-- 右侧广告一 -->
			<div style="margin-top: 30px;width: 260px;height: 200px;border: 1px solid #e5e5e5;border-radius: 4px;">
				<a href="javascript:;" target="_blank"><img src="picture/content-diary-adv1_1.png" alt="" style="width: 260px;height: 200px;" /></a>
			</div>
			<!-- 施工常识 -->
			<div style="margin-top: 30px;width: 258px;height: 415px;border: 1px solid #e5e5e5;border-radius: 4px;">
				<div style="position: relative;padding: 10px 20px;width: 218px;border-bottom: 1px solid #e5e5e5;">
					<h2 style="padding-left: 10px;height: 30px;line-height: 30px;font-weight: bold;color: #333;">施工常识</h2>
				</div>
				<div style="padding:10px 20px;width: 218px;height: 344px;">
					<ul>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-1826.html" style="margin-left: 10px;font-size: 14px;color: #333;">玄关是什么  玄关是在那个位置</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-1625.html" style="margin-left: 10px;font-size: 14px;color: #333;">石材结晶处理方法，石材结晶工艺流程</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-1226.html" style="margin-left: 10px;font-size: 14px;color: #333;">卫生间和厨房要不要做门槛石</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-1216.html" style="margin-left: 10px;font-size: 14px;color: #333;">智能马桶的安装步骤</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-712.html" style="margin-left: 10px;font-size: 14px;color: #333;">严格把关水路施工注意项</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-678.html" style="margin-left: 10px;font-size: 14px;color: #333;">电线的应用及操作标准</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-649.html" style="margin-left: 10px;font-size: 14px;color: #333;">家庭装修如何选购电线</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-513.html" style="margin-left: 10px;font-size: 14px;color: #333;">装修施工过程控制11大要点</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-434.html" style="margin-left: 10px;font-size: 14px;color: #333;">墙面装修问题的补救措施</a>
						</li>
						<li style="height: 34px;line-height: 34px;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;"><em style="display:inline-block;width: 5px;height: 5px;background: url('images/css-sprite-1_1.png') no-repeat;background-position: -63px 0;vertical-align: middle;"></em><a target="_blank" href="http://www.mjia.cc/content-detail-431.html" style="margin-left: 10px;font-size: 14px;color: #333;">新年卧室装修篇</a>
						</li>

					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- 底部 -->

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['tpl_head_append']->value;?>

<?php }} ?>