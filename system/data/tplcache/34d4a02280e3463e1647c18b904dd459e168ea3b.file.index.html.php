<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 19:25:14
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\tenders\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2513259353f9a2047c8-90628020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34d4a02280e3463e1647c18b904dd459e168ea3b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\tenders\\index.html',
      1 => 1433122058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2513259353f9a2047c8-90628020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'COUNT' => 0,
    'request' => 0,
    'tender_yz' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59353f9a331497_43464218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59353f9a331497_43464218')) {function content_59353f9a331497_43464218($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--我要装修头部头部开始-->
<div class="tenders_header mb20">
	<div class="mainwd">
		<h3><span class="lt"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</font>全心致力于打造<font class="fontcl2">中国第一装修平台</font>，做您的贴心管家！</span><span class="rt">目前已帮助<font class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</font>户业主</span></h3>
	</div>
</div>
<!--我要装修头部头部开始-->
<div class="mainwd">
	<div class="mb20 tenders_zb">
			<ul class="tenders_zb_list">
				<li rel="TZB">免费招标</li>
				<li rel="TJC">建材招标</li>
				<li rel="TSJ">免费设计</li>
				<li rel="TBJ">免费报价</li>
				<li rel="TLF">免费量房</li>
			</ul>
			<div class="cl"></div>
			<div class="tenders_zb_box">
				<div class="tenders_zb_box_con">
					<img src="/themes/default/static/images/tenders_pic1.jpg" class="lt" />
					<div class="tenders_zb_form pding rt">
						<h3>我要招标</h3>
						<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form='tenders_tzx' id="tenders-tzx" method="post">
                            <input type="hidden" name="data[from]" value="TZX" />
							<table>
								<tr>
									<td class="title"><font class="pointcl">*</font>您的姓名</td>
									<td><input type="text" name="data[contact]" class="text long" placeholder="请输入您的姓名" /></td>
									<td class="title"><font class="pointcl">*</font>联系电话</td>
									<td><input type="text"  name="data[mobile]" class="text long" placeholder="请输入您的联系方式" /></td>
								</tr>
								<tr>
									<td class="title">招标类型</td>
									<td><select name="data[type_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"type"),$_smarty_tpl);?>
</select></td>
									<td class="title">装修预算</td>
                                    <td><select name="data[budget_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"budget"),$_smarty_tpl);?>
</select></td>
								</tr>
								<tr>
									<td class="title">装修面积</td>
									<td><input type="text" name="data[house_mj]" class="text long" placeholder="请输入装修面积，单位为平米" /></td>
									<td class="title">小区名称</td>
									<td><input type="text" name="data[home_name]" class="text long" placeholder="请输入小区名称"/></td>
								</tr>
								<tr>
									<td class="title">所在地区</td>
									<td colspan="3"><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text short"),$_smarty_tpl);?>
</td>
								</tr>
								<tr>
									<td class="title">详细地址</td>
									<td colspan="3"><input name="data[addr]" type="text" class="text all" /></td>
								</tr>
								<tr>
									<td class="title">备注要求</td>
									<td colspan="3"><textarea name="data[comment]" class="text"></textarea></td>
								</tr>
                                <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
                                    <tr>
                                        <td class="title">验证码</td>
                                        <td colspan="3">
                                            <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                             <img verify="#tzx-verify" id="tzx-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" class="pass-verify"/>
                                        </td>
                                        
                                    </tr>
                                <?php }?>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input type="file" name="huxing"/><p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p></td>
								</tr>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input class="btn_sub_tuan btn" type="submit" value="免费发布招标" /><span class="tel">或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con">
					<img src="/themes/default/static/images/tenders_pic2.jpg" class="lt" />
					<div class="tenders_zb_form pding rt">
						<h3>建材招标</h3>
						<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form='tenders_tjc' id="tenders-tjc" method="post">
                            <input type="hidden" name="data[from]" value="TJC" />
							<table>
								<tr>
									<td class="title"><font class="pointcl">*</font>您的姓名</td>
									<td><input type="text" name="data[contact]" class="text long" placeholder="请输入您的姓名" /></td>
									<td class="title"><font class="pointcl">*</font>联系电话</td>
									<td><input type="text"  name="data[mobile]" class="text long" placeholder="请输入您的联系方式" /></td>
								</tr>
								<?php echo smarty_function_widget(array('id'=>"attr/form",'from'=>'tenders:TJC','tpl'=>'tenders/attr-form.html'),$_smarty_tpl);?>

								<tr>
									<td class="title">装修面积</td>
									<td><input type="text" name="data[house_mj]" class="text long" placeholder="请输入装修面积，单位为平米" /></td>
									<td class="title">小区名称</td>
									<td><input type="text" name="data[home_name]" class="text long" placeholder="请输入小区名称"/></td>
								</tr>
								<tr>
									<td class="title">所在地区</td>
									<td colspan="3"><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text short"),$_smarty_tpl);?>
</td>
								</tr>
								<tr>
									<td class="title">详细地址</td>
									<td colspan="3"><input type="text" class="text all" /></td>
								</tr>
                                
								<tr>
									<td class="title">备注要求</td>
									<td colspan="3"><textarea name="data[comment]" class="text"></textarea></td>
								</tr>
                                 <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
                                    <tr>
                                        <td class="title">验证码</td>
                                        <td colspan="3">
                                            <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                             <img verify="#tjc-verify" id="tjc-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" class="pass-verify"/>
                                        </td>
                                        
                                    </tr>
                                <?php }?>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input class="btn_sub_tuan btn" type="submit" value="免费发布招标" /><span class="tel">或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con">
					<img src="/themes/default/static/images/tenders_pic3.jpg" class="lt" />
					<div class="tenders_zb_form pding rt">
						<h3>免费设计</h3>
						<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form='tenders_tsj' id="tenders-tsj" method="post">
                            <input type="hidden" name="data[from]" value="TSJ" />
							<table>
								<tr>
									<td class="title"><font class="pointcl">*</font>您的姓名</td>
									<td><input type="text" name="data[contact]" class="text long" placeholder="请输入您的姓名" /></td>
									<td class="title"><font class="pointcl">*</font>联系电话</td>
									<td><input type="text" name="data[mobile]" class="text long" placeholder="请输入您的联系方式" /></td>
								</tr>
								<tr>
									<td class="title">招标类型</td>
									<td><select name="data[type_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"way"),$_smarty_tpl);?>
</select></td>
									<td class="title">装修预算</td>
                                    <td><select name="data[budget_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"budget"),$_smarty_tpl);?>
</select></td>
								</tr>
								<tr>
									<td class="title">装修面积</td>
									<td><input type="text" name="data[house_mj]" class="text long" placeholder="请输入装修面积，单位为平米" /></td>
									<td class="title">小区名称</td>
									<td><input type="text" name="data[home_name]" class="text long" placeholder="请输入小区名称"/></td>
								</tr>
								<tr>
									<td class="title">所在地区</td>
									<td colspan="3"><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text short"),$_smarty_tpl);?>
</td>
								</tr>
								<tr>
									<td class="title">详细地址</td>
									<td colspan="3"><input type="text" class="text all" /></td>
								</tr>
								<tr>
									<td class="title">备注要求</td>
									<td colspan="3"><textarea name="data[comment]" class="text"></textarea></td>
								</tr>
                                 <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
                                    <tr>
                                        <td class="title">验证码</td>
                                        <td colspan="3">
                                            <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                             <img verify="#tsj-verify" id="tsj-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" class="pass-verify"/>
                                        </td>
                                        
                                    </tr>
                                <?php }?>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input type="file" name="huxing"/><p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p></td>
								</tr>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input class="btn_sub_tuan btn" type="submit" value="免费发布招标" /><span class="tel">或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con">
					<img src="/themes/default/static/images/tenders_pic4.jpg" class="lt" />
					<div class="tenders_zb_form pding rt">
						<h3>免费报价</h3>
						<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form='tenders_tbj' id="tenders_tbj" method="post">
                            <input type="hidden" name="data[from]" value="TBJ" />
							<table>
								<tr>
									<td class="title"><font class="pointcl">*</font>您的姓名</td>
									<td><input type="text" name="data[contact]" class="text long" placeholder="请输入您的姓名" /></td>
									<td class="title"><font class="pointcl">*</font>联系电话</td>
									<td><input type="text" name="data[mobile]" class="text long" placeholder="请输入您的联系方式" /></td>
								</tr>
								<tr>
									<td class="title">招标类型</td>
									<td><select name="data[type_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"way"),$_smarty_tpl);?>
</select></td>
									<td class="title">装修预算</td>
                                    <td><select name="data[budget_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"budget"),$_smarty_tpl);?>
</select></td>
								</tr>
								<tr>
									<td class="title">装修面积</td>
									<td><input type="text" name="data[house_mj]" class="text long" placeholder="请输入装修面积，单位为平米" /></td>
									<td class="title">小区名称</td>
									<td><input type="text" name="data[home_name]" class="text long" placeholder="请输入小区名称"/></td>
								</tr>
								<tr>
									<td class="title">所在地区</td>
									<td colspan="3"><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text short"),$_smarty_tpl);?>
</td>
								</tr>
								<tr>
									<td class="title">详细地址</td>
									<td colspan="3"><input type="text" class="text all" /></td>
								</tr>
								<tr>
									<td class="title">备注要求</td>
									<td colspan="3"><textarea name="data[comment]" class="text"></textarea></td>
								</tr>
                                 <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
                                    <tr>
                                        <td class="title">验证码</td>
                                        <td colspan="3">
                                            <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                             <img verify="#tbj-verify" id="tbj-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" class="pass-verify"/>
                                        </td>
                                        
                                    </tr>
                                <?php }?>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input type="file" name="huxing"/><p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p></td>
								</tr>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input class="btn_sub_tuan btn" type="submit" value="免费发布招标" /><span class="tel">或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></td>
								</tr>								
							</table>
						</form>
					</div>
				</div>
				<div class="tenders_zb_box_con">
					<img src="/themes/default/static/images/tenders_pic5.jpg" class="lt" />
					<div class="tenders_zb_form pding rt">
						<h3>免费量房</h3>
						<form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form='tenders_tlf' id="tenders-tlf" method="post">
                            <input type="hidden" name="data[from]" value="TLF" />
							<table>
								<tr>
									<td class="title"><font class="pointcl">*</font>您的姓名</td>
									<td><input type="text" name="data[contact]" class="text long" placeholder="请输入您的姓名" /></td>
									<td class="title"><font class="pointcl">*</font>联系电话</td>
									<td><input type="text" name="data[mobile]" class="text long" placeholder="请输入您的联系方式" /></td>
								</tr>
								<tr>
									<td class="title">招标类型</td>
									<td><select name="data[type_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"way"),$_smarty_tpl);?>
</select></td>
									<td class="title">装修预算</td>
                                    <td><select name="data[budget_id]" class="text long"><?php echo smarty_function_widget(array('id'=>"tenders/setting",'type'=>"budget"),$_smarty_tpl);?>
</select></td>
								</tr>
								<tr>
									<td class="title">装修面积</td>
									<td><input type="text" name="data[house_mj]" class="text long" placeholder="请输入装修面积，单位为平米" /></td>
									<td class="title">小区名称</td>
									<td><input type="text" name="data[home_name]" class="text long" placeholder="请输入小区名称"/></td>
								</tr>
								<tr>
									<td class="title">所在地区</td>
									<td colspan="3"><?php echo smarty_function_widget(array('id'=>"data/region",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'class'=>"text short"),$_smarty_tpl);?>
</td>
								</tr>
								<tr>
									<td class="title">详细地址</td>
									<td colspan="3"><input type="text" class="text all" /></td>
								</tr>
								<tr>
									<td class="title">备注要求</td>
									<td colspan="3"><textarea name="data[comment]" class="text"></textarea></td>
								</tr>
                                 <?php if ($_smarty_tpl->tpl_vars['tender_yz']->value){?>
                                    <tr>
                                        <td class="title">验证码</td>
                                        <td colspan="3">
                                            <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                            <img verify="#tlf-verify" id="tlf-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" class="pass-verify"/>
                                        </td>
                                        
                                    </tr>
                                <?php }?>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input type="file" name="huxing"/><p class="pro">上传户型图，报价更精准！并可提前一天获得报价方案！</p></td>
								</tr>
								<tr>
									<td class="title"></td>
									<td colspan="3"><input class="btn_sub_tuan btn" type="submit" value="免费发布招标" /><span class="tel">或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span></td>
								</tr>								
							</table>								
						</form>
					</div>
				</div>
				<div class="cl"></div>
			</div>
		</div>
	<div class="mb20 tenders_step">
			<ul>
				<li>
					<h3><b>免费发布招标</b></h3>
					<p>免费发布招标，获得<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
全程装修管家服务</p>
				</li>
				<li>
					<h3><b>3套方案PK</b></h3>
					<p>业主对比3套设计方案，选出最优方案</p>
				</li>
				<li>
					<h3><b>3家公司免费量房</b></h3>
					<p>3家公司上门免费量房并提供设计预算方案</p>
				</li>
				<li>
					<h3><b>选择签订公司</b></h3>
					<p>选择方案最优，价格合理的公司签定装修合同</p>
				</li>
				<li class="last">
					<p class="tel"><b><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></p>
					<h3><b>获得装修保障</b></h3>
					<p>提交合同或拨打<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
热线电话获得装修保障</p>
				</li>
			</ul>
	</div>
	<div class="mb20">
		<h2><b>最新装修招标订单</b></h2>
		<div class="tenders_order">
			<p class="tenders_order_tit tit"><span>发布日期</span><span>业主</span><span>类型</span><span class="long">标情况</span><span>预算</span><span>查看详情</span></p>
			<div class="tenders_order_box">
				<ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li>
                        <span><{$item.dateline|format:"m-d"}></span><span><{$item.contact}></span><span><{$item.from_title}></span>
                        <span class="long"><{$item.title|cutstr:50}></span><span><{$item.budget_title}></span><a href="<{link ctl='tenders:detail' arg0=$item.tenders_id}>"  target="_blank"><span class="fontcl2">查看</span></a>
					</li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
(function(K, $){
	//我要装修页面招标切换
	 $("ul.tenders_zb_list li[rel]").click(function(){
		var index=$(this).index();
		 $("ul.tenders_zb_list li").each(function(a){	
			if(a == index){
				$(this).addClass('current');
				$('.tenders_zb').find('.tenders_zb_box_con').eq(a).show();
			}
			else{
				 $(this).removeClass('current');
				 $('.tenders_zb').find('.tenders_zb_box_con').eq(a).hide();
			 }
		 })				   
	});
	var m = null;
	if(m = location.href.match("tenders.html#([A-Z]+)")){
		console.log($("ul.tenders_zb_list li[rel='"+m[1]+"']").html());
		$("ul.tenders_zb_list li[rel='"+m[1]+"']").click();
	}else{
		$("ul.tenders_zb_list li[rel]").eq(0).click();
	}
	//我要装修页面 最新订单文字无缝滚动效果
	$(function(){
		$("div.tenders_order_box").myScroll({
			speed:40, //数值越大，速度越慢
			rowHeight:45 //li的高度
		});
	});		
})(window.KT, window.jQuery);
</script>
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>