<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:59:25
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\ask\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:73195933f61dbb10c3-80307089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c4dc8bb9a71311676622f6bb1e7e380137ff7c8' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\ask\\detail.html',
      1 => 1433122060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73195933f61dbb10c3-80307089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'detail' => 0,
    'pager' => 0,
    'member_list' => 0,
    'cate_list' => 0,
    'uid' => 0,
    'ask_yz' => 0,
    'answer' => 0,
    'answers' => 0,
    'item' => 0,
    'MEMBER' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f61e4a6b96_55038485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f61e4a6b96_55038485')) {function content_5933f61e4a6b96_55038485($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'ask'),$_smarty_tpl);?>
">知识问答</a>
			><a href="<?php echo smarty_function_link(array('ctl'=>'ask:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
"><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['detail']->value['title'],50);?>
</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="mb10 area ">
		<div class="question_top">
			<h2><?php if (!$_smarty_tpl->tpl_vars['detail']->value['answer_id']){?><span class="ico_list color_qu"></span><?php }else{ ?><span class="ico_list over_qu"></span><?php }?><b><?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['detail']->value['title'],77);?>
</b></h2>
           <?php if (!empty($_smarty_tpl->tpl_vars['detail']->value['thumb'])){?> <p class="buc_tit"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['detail']->value['thumb'];?>
"/></p><?php }?>
            <?php if (!empty($_smarty_tpl->tpl_vars['detail']->value['intro'])){?>
            <p class="buc_tit" style="word-break:break-all"><?php echo nl2br($_smarty_tpl->tpl_vars['detail']->value['intro']);?>
</p>
            <?php }?>
            
			<p><span class="lt"><label>提问者：<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['detail']->value['uid']]['uname'];?>
</label><label>分类：<?php echo $_smarty_tpl->tpl_vars['cate_list']->value[$_smarty_tpl->tpl_vars['detail']->value['cat_id']]['title'];?>
</label><label><font class="ico_list dy_liulan"></font>浏览(<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</font>)</label>
					<label><font class="ico_list dy_pinglun"></font>评论(<font class="fontcl2"><?php if (!$_smarty_tpl->tpl_vars['detail']->value['answer_id']){?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['pager']->value['count']+(($tmp = @1)===null||$tmp==='' ? '0' : $tmp);?>
<?php }?></font>)</label></span><span class="rt graycl"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</span></p>
			<p class="cl"></p>
			<p class="lt">分享到：<?php echo smarty_function_widget(array('id'=>"public/share",'size'=>"small"),$_smarty_tpl);?>
</p>
			<p class="cl"></p>
		</div>
            <?php if (!$_smarty_tpl->tpl_vars['detail']->value['answer_id']){?>
            <?php if ($_smarty_tpl->tpl_vars['uid']->value==$_smarty_tpl->tpl_vars['detail']->value['uid']){?>
			<div class="question_box  qu_buchong">
            	<h2><b>问题补充</b></h2>
                <form  mini-form="ask"  method="post" action="<?php echo smarty_function_link(array('ctl'=>'ask:supply','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
">
                    <textarea class="mb10" name='content' placeholder="请在这里输入您的补充内容"></textarea>
                    	<?php if ($_smarty_tpl->tpl_vars['ask_yz']->value){?>
                            <span style="color:#00F">验证码:</span>
                                <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                <img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>
                                
                        <?php }?>
                    <div class="rt">
                        <input type="submit" class="btn" value="我要补充"  />
                    </div>
                    <div class="cl"></div>
                </form>
                </div>
            <?php }else{ ?>
			<div class="question_box huida_box ">
                <h2><b>我来帮他解答</b></h2>
                <form  mini-form="ask"  method="post" action="<?php echo smarty_function_link(array('ctl'=>'ask:answer','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['ask_id']),$_smarty_tpl);?>
">
                    <textarea class="mb10" name='contents' placeholder="请在这里输入您的答案"></textarea>
                    <?php if ($_smarty_tpl->tpl_vars['ask_yz']->value){?>
                            <span style="color:#00F">验证码:</span>
                                <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                <img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>
                                
                        <?php }?>
                    <div class="rt">
                        <input type="submit" class="btn" value="我要回答"  />
                    </div>
                    <div class="cl"></div>
                </form>
                </div>
            <?php }?>
            
            <?php }else{ ?>
            	<div class="knows_box colorbg">
                    <span class="ico_list caina_ico"></span>
                    <h2><b class="lt">提问者采纳</b><span class="rt graycl"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['answer']->value['dateline']);?>
</span></h2>
                    <p class="cl mb10"></p>
                   		<?php echo nl2br($_smarty_tpl->tpl_vars['answer']->value['contents']);?>

                    <p class="tit"><img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['answer']->value['uid']]['face_32'];?>
" /><span><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['answer']->value['uid']]['uname'];?>
</span></p>
				</div>
             <?php }?>
             <?php if (!empty($_smarty_tpl->tpl_vars['answers']->value)){?>
                <div class="new_pinglun pding">
                    <p class="tit">其他<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pager']->value['count'])===null||$tmp==='' ? '0' : $tmp);?>
条回答</p>
                    <ul>
                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_32'];?>
" class="lt" />
                                    <div class="rt">
                                        <p><span class="lt name"><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</span><span class="rt graycl"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['detail']->value['uid']==$_smarty_tpl->tpl_vars['MEMBER']->value['uid']&&empty($_smarty_tpl->tpl_vars['detail']->value['answer_id'])&&$_smarty_tpl->tpl_vars['item']->value['audit']==1){?><a href="<?php echo smarty_function_link(array('ctl'=>'ask:yes','arg0'=>$_smarty_tpl->tpl_vars['item']->value['answer_id']),$_smarty_tpl);?>
"  mini-act="confirm:您确定要设为最佳答案吗？" class="pbtn red">设为最佳答案</a><?php }?></p>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['audit']==0){?>
                                            <p class="tips"><span class="lock">该内容正在审核中</span></p>
                                        <?php }else{ ?>
                                        	<p><?php echo nl2br($_smarty_tpl->tpl_vars['item']->value['contents']);?>
</p>
                                        <?php }?>
                                    </div>
                                </li>
                                 
                         <?php } ?>
                    </ul>
                </div>
            <?php }?>
		</div>
		<div class="area pding mb20">
			<h2 class="qita_question">其它热门问题</h2>
			<ul class="question_list">
            	 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'audit'=>1,'order'=>"answer_num:desc",'limit'=>"6")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'audit'=>1,'order'=>"answer_num:desc",'limit'=>"6"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                        <li><a href="<{link ctl='ask:detail' arg0=$item.ask_id}>" class="lt"> <{$item.title|cutstr:50}></a>
                            <span class="graycl rt"><{$item.dateline|format}></span>
                        </li>
                 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'audit'=>1,'order'=>"answer_num:desc",'limit'=>"6"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				
			</ul>
		</div>
		<div class="cl"></div>
	</div>
	<!--主体左边内容结束-->
    
    <script>
	jQuery(window).load(function () {
            jQuery(".buc_tit img").each(function () {
                DrawImage(this, 680, 1000);
            });
        });
        function DrawImage(ImgD, FitWidth, FitHeight) {
            var image = new Image();
            image.src = ImgD.src;
            if (image.width > 0 && image.height > 0) {
                if (image.width / image.height >= FitWidth / FitHeight) {
                    if (image.width > FitWidth) {
                        ImgD.width = FitWidth;
                        ImgD.height = (image.height * FitWidth) / image.width;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                } else {
                    if (image.height > FitHeight) {
                        ImgD.height = FitHeight;
                        ImgD.width = (image.width * FitHeight) / image.height;
                    } else {
                        ImgD.width = image.width;
                        ImgD.height = image.height;
                    }
                }
            }
        }
</script>
<script>
	$("[verify]").click(function(){
		$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
	});
	</script>
	<?php echo $_smarty_tpl->getSubTemplate ("ask/block/right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>