<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:57:52
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\case\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:291345933f5c03831a1-13612532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '512cf83b2c9325b0e267fc9c3edd047c8541fd4c' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\case\\detail.html',
      1 => 1433122060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291345933f5c03831a1-13612532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'photos' => 0,
    'pager' => 0,
    'item' => 0,
    'comment_yz' => 0,
    'items' => 0,
    'user_list' => 0,
    'company' => 0,
    'designer' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f5c08a0684_98510800',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f5c08a0684_98510800')) {function content_5933f5c08a0684_98510800($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/small-header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="mb10 subwd sub_topnav">
	<p><span class="ico_list breadna"></span>您的位置：<a href="index"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
		&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'case:items'),$_smarty_tpl);?>
">装修案例</a>
		&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
	</p>
</div>
<div class="subwd">
	<div class="sub_case_lt lt">
		<div class="mb10 pding area sub_case_top">
			<h3>
                <a href="<?php echo smarty_function_link(array('ctl'=>'case:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
" class="lt"><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</a>
                <span class="rt">
                    <label><a like="<?php echo $_smarty_tpl->tpl_vars['detail']->value['case_id'];?>
"><font class="index_ico like_ico"></font><?php echo $_smarty_tpl->tpl_vars['detail']->value['likes'];?>
人喜欢</a></label>
                    <label><font class="index_ico person_ico"></font><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
人浏览</label>
                </span>
                </h3>
			<p class="cl"></p>
			<div class="case_pic_top area pding mb10" style="height:600px;" id="galleria">
                <ul>
                     <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['photos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
" class="img_a"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
_small.jpg" data-big="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
"/></a></li>
                     <?php } ?>
                 </ul>
			</div>
		</div>
        <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['comment']['case_type']=='sns'){?>
        <?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['comment']['snscomment'];?>

        <?php }elseif($_smarty_tpl->tpl_vars['CONFIG']->value['comment']['case_type']=='comment'){?>
		<div class="mb20 pding area">
			<h3>评论(共<font class="fontcl2"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
</font>条)</h3>
			<form class="pinglun" id='comment_form'>				
				<div>
					<textarea class="text" name="content" placeholder="随便说点什么..."></textarea><br />
                    <?php if ($_smarty_tpl->tpl_vars['comment_yz']->value){?>
                        验证码:
                                <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                <img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>
                            
                    <?php }?>
					<input type="submit" mini-submit='#comment_form' action="<?php echo smarty_function_link(array('ctl'=>'case:comment','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
" name="fbpl" value="发表评论" class="text btn rt pinglun_btn" />
				</div>
				<div class="cl"></div>
			</form>            
			<div class="new_pinglun">
				<p class="tit">最新评论</p>
				<ul>
                	 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <li>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_32'];?>
" class="lt" />
                            <div class="rt">
                                <p><span class="lt name"><?php echo $_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</span><span class="rt graycl"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></p>
                                <p><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']==0){?><p class="tips"><span class="lock">该评论正在审核中</span></p><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<?php }?></p>
                            </div>
                        </li>
                     <?php } ?>
                     <?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
				</ul>
			</div>
		</div>
        <?php }?>
	</div>
	<div class="side_content rt">
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

        <div class="mb10 area">
            <div class="pding">
                <div class="sub_case_yuyue">
                    <?php if ($_smarty_tpl->tpl_vars['company']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['company']->value['thumb'];?>
" /></a>
                    <div class="lt">
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['company']->value['company_url'];?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</a></p>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'gs:yuyue','arg0'=>$_smarty_tpl->tpl_vars['company']->value['company_id'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="免费预约" class="btn  btn_main_sm">免费预约</a>
                    </div>
                    <?php }elseif($_smarty_tpl->tpl_vars['designer']->value){?>
                    <a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" class="lt"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['designer']->value['face_80'];?>
" /></a>
                    <div class="lt">
                        <p><a href="<?php echo smarty_function_link(array('ctl'=>'blog','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['designer_id']),$_smarty_tpl);?>
" class="tit"><?php echo $_smarty_tpl->tpl_vars['designer']->value['name'];?>
</a></p>
                        <a href="<?php echo smarty_function_link(array('ctl'=>'designer:yuyue','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'http'=>'ajax'),$_smarty_tpl);?>
" mini-load="免费预约" class="btn  btn_main_sm">免费预约</a>
                    </div>       
                    <?php }?>
                    <div class="cl"></div>
                </div>
            </div>
            <div class="pding case_linian colorbg"><p>设计理念:<?php echo $_smarty_tpl->tpl_vars['detail']->value['intro'];?>
</p></div>
            <div class="pding"><?php echo smarty_function_widget(array('id'=>"attr/attr",'from'=>'zx:case','value'=>$_smarty_tpl->tpl_vars['detail']->value['attrvalues'],'tpl'=>'show.html'),$_smarty_tpl);?>
</div>
        </div>        
		
        <div class="mb10 area">
            <h3 class="side_tit">装修公司排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{$item.company_url}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>8), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        <div class="mb20 pding area">
			<h3>相关案例</h3>
			<div class="sub_case_rtpic">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'order'=>"views:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>9)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'order'=>"views:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>9), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a href="<{link ctl='case-detail' arg0=$item.case_id}>"><img src="<{$pager.img}>/<{$item.photo}>" /></a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'order'=>"views:DESC",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>9), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</div>
		</div>
	</div>
	<div class="cl"></div>	
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/galleria/galleria-1.3.5.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/galleria/galleria.classic.min.js"></script>
<script type="text/javascript">
(function(K, $){
$(document).ready(function(){Galleria.run('#galleria');});
$("[like]").click(function(){
    var case_id = $(this).attr("like");
    $.getJSON("<?php echo smarty_function_link(array('ctl'=>'case:like','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['case_id']),$_smarty_tpl);?>
", function(ret){
        if(ret.error){
            Widget.MsgBox.error(ret.message.join(","));
        }else{
            Widget.MsgBox.success(ret.message.join(","));
        }
    });
});
})(window.KT, window.jQuery);
    
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/small-footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>