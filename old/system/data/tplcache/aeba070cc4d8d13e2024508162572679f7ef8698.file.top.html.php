<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:44:48
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\index\top.html" */ ?>
<?php /*%%SmartyHeaderCode:157915933f2b074b627-60826514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeba070cc4d8d13e2024508162572679f7ef8698' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\index\\top.html',
      1 => 1433122060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157915933f2b074b627-60826514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COUNT' => 0,
    'CONFIG' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f2b0b57ff7_40676311',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f2b0b57ff7_40676311')) {function content_5933f2b0b57ff7_40676311($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
?><div class="mb20 index_banner">
    <div class="index_banner_lt lt">
        <span class="banner_mf_ico index_ico"></span>
        <p class="orhid hoverno index_banner_tit">
            <a class="first current">装修第一步</a>
            <a>设计是难题</a>
            <a>看不懂预算</a>
            <a>没空管装修</a>
            <a>免费招标</a>
            <a class="last">材料最低价</a>
        </p>
        <div class="index_menu_con">
            <div class="index_menu_list" lay="tenders-form1">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>免费招标</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form1' method="post">
                    <input type="hidden" name="data[from]" value="TZX" />  
					<div class="text">  
				  		<p><b>免费登记，坐等方案送上门</b></p>
                        <p>装修公司免费上门测量，3天出设计方案。</p>        
                    </div>        
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd><input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/></dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd><input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/></dd>
                    </dl>
					<div class="cl"></div>
                    <div class="menu_list_ep">
                          <input type="button" value="免费申请" mini-tenders="tenders-form1" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
            <div class="index_menu_list none" lay="tenders-form2">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>申请免费设计</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form2' method="post">
                    <input type="hidden" name="data[from]" value="TZX" />     
					<div class="text">  
                        <p><b>免费登记，坐等方案送上门</b></p>
                        <p>装修公司免费上门测量，3天出设计方案。</p>        
                    </div>                    
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd>
                            <input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/>
                        </dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd>
                            <input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/>
                        </dd>						
                    </dl>
                    <div class="menu_list_ep">                       
                       <input type="button" value="免费申请" mini-tenders="tenders-form2" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
            <div class="index_menu_list none" lay="tenders-form3">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>申请在线报价</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form3' method="post">
                    <input type="hidden" name="data[from]" value="TZX" />					
					<div class="text">  
					  		<p><b>填写房屋信息，免费获得报价清单</b></p>
                            <p>装修公司免费上门测量，3天出设计方案。</p>        
					</div>                       
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd>
                            <input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/>
                        </dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd>
                            <input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/>
                        </dd>
                    </dl>
                    <div class="menu_list_ep">                       
                        <input type="button" value="免费申请" mini-tenders="tenders-form3" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
            <div class="index_menu_list none" lay="tenders-form4">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>免费监理</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form4' method="post">
                    <input type="hidden" name="data[from]" value="TZX" />       
						<div class="text">  
					  		<p><b>资深监理师，为业主督促工程质量</b></p>
                            <p>无须支付任何费用，免费第三方监理上门协助调解纠纷</p>        
					</div>                 
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd><input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/></dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd><input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/></dd>
						
                    </dl>
                    <div class="menu_list_ep">                        
                        <input type="button" value="免费申请" mini-tenders="tenders-form4" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
            <div class="index_menu_list none" lay="tenders-form5">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>免费招标</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form5' method="post">
                    <input type="hidden" name="data[from]" value="TZX" /> 
					<div class="text">  
                        <p><b>装修满意后再付款</b></p>
                        <p>钱在业主手上，完全享受主动。</p>        
					</div>                          
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd>
                            <input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/>
                        </dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd>
                            <input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/>
                        </dd>
                    </dl>
                    <div class="menu_list_ep">                      
                         <input type="button" value="免费申请" mini-tenders="tenders-form5" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
			
            <div class="index_menu_list none" lay="tenders-form6">
                <div class="pding menu_list_top">
                    <p class="tp"><i class="tit lt"><span class="index_ico head_sq_ico"></span>全城最低价</i><span class="rt">目前已帮助<b class="fontcl1"><?php echo $_smarty_tpl->tpl_vars['COUNT']->value['tenders'];?>
</b>位业主</span></p>
                    <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" id='tenders-form6' method="post">
                    <input type="hidden" name="data[from]" value="TZX" />      
					<div class="text">  
					  		<p><b>保证同品牌、同型号、同产品全城最低价</b></p>
                            <p>一分钟咨询，立省一天工资。</p>        
					</div>                
                    <dl>
                        <dt><span class="index_ico ico_name"></span></dt>
                        <dd>
                            <input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/>
                        </dd>
                        <dt><span class="index_ico ico_tel"></span></dt>
                        <dd>
                            <input type="text" name="data[mobile]" class="text" placeholder="请输入您的电话"/>
                        </dd>
						                     </dl>
                    <div class="menu_list_ep">
                        
                         <input type="button" value="免费申请" mini-tenders="tenders-form6" class="btn_sub_big btn" /><span>或拨打<b class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['phone'];?>
</b></span>
                    </div>
                    <div class="cl"></div>
                    </form>
                </div>
                <div class="colorbg menu_list_bottom">
                    <p>声明：此服务不收取任何费用！如觉满意，可为<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
向您的朋友圈进行口碑宣传，我们将对此向您表示感谢！</p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner_lunz rt"><?php echo smarty_function_adv(array('id'=>"1",'name'=>"网站首页头部轮转广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
    <div class="cl"></div>
</div>
<script type="text/tmpl" id="tenders_ok">
    <div class="menu_list_ok_top">
            <h1 class="fontcl1"> <span class="index_ico lt"></span>恭喜您，申请成功！</h1>
            <p><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
客服将于24小时内与您联系！</p>
        	<div class="erweima_box none"><img src="/themes/default/static/images/weixin.jpg" /><p>扫一扫，查看装修进度</p></div>
    </div>
    <div class="menu_list_ok_bottom">
        <ul>
            <li class="first">
                <a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" class="btn btn_main_sm">立即查看</a>
            </li>
            <li class="last">
                <a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="btn btn_main_sm">立即查看</a>
            </li>
        </ul>
    </div>
</script>
<script type="text/javascript">
(function(K, $){
$("[mini-tenders]").click(function(){
    Widget.MsgBox.load("数据处理中。。。");
    var ident = $(this).attr("mini-tenders");
    $.post("<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
", $("#"+ident).serialize(), function(ret){
        if(ret.error){
            Widget.MsgBox.error(ret.message.join(","));
        }else{
            $("[lay='"+ident+"']").html($("#tenders_ok").html());
            if(ret.wx_tenders_qr){
                $("[lay='"+ident+"'] .erweima_box img").attr("src", ret.wx_tenders_qr);
                $("[lay='"+ident+"'] .erweima_box").show();
            }
			Widget.MsgBox.hide();
        }
        
    }, 'json');
});

})(window.KT, window.jQuery);
	
</script>
<script>
$("[verify]").click(function(){
	$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
});
</script><?php }} ?>