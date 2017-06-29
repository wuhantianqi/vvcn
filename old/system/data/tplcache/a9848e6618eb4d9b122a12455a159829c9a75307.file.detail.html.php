<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:30
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:303975933f8027834d1-11154435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9848e6618eb4d9b122a12455a159829c9a75307' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\article\\detail.html',
      1 => 1433314510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303975933f8027834d1-11154435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cate' => 0,
    'detail' => 0,
    'page' => 0,
    'pager' => 0,
    'request' => 0,
    'MEMBER' => 0,
    'comment_yz' => 0,
    'comment_list' => 0,
    'item' => 0,
    'member_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f8031dff52_71355964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f8031dff52_71355964')) {function content_5933f8031dff52_71355964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_modifier_taglink')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.taglink.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_widget')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
	<div class="mainwd">
		<p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a>
			&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">学装修</a>
			&gt;<a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['cate']->value['title'];?>
</a>
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<div class="main_content lt">
		<div class=" area pding mb10 article_box">
			<h1><?php echo $_smarty_tpl->tpl_vars['detail']->value['title'];?>
</h1>
			<p class="graycl tp">
				<span class="lt"><font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['detail']->value['views'];?>
</font>人已浏览   时间 : <?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['detail']->value['dateline']);?>
</span>
				<span class="rt">
				<div class="bdsharebuttonbox rt"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
				</div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></span>
			</p>
			<div class="cl"></div>
			<p class="colorbg daoyu">导语：<?php echo $_smarty_tpl->tpl_vars['detail']->value['desc'];?>
</p>
			<div class="article_box_text"><?php echo smarty_modifier_taglink($_smarty_tpl->tpl_vars['detail']->value['curr_content']);?>

				<?php if ($_smarty_tpl->tpl_vars['detail']->value['content_count']>1){?>
				<div class="page hoverno"><p><?php $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int)ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['detail']->value['content_count']+1 - (1) : 1-($_smarty_tpl->tpl_vars['detail']->value['content_count'])+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0){
for ($_smarty_tpl->tpl_vars['page']->value = 1, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++){
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?><a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['detail']->value['article_id'],'arg1'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
"<?php if ($_smarty_tpl->tpl_vars['pager']->value['page']==$_smarty_tpl->tpl_vars['page']->value){?> class="current"<?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a><?php }} ?></p></div>
				<?php }?>
			</div>
			<div class="article_box_bottom">
				<p class="tp">
					<?php if ($_smarty_tpl->tpl_vars['pager']->value['prev']){?>
					<a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['prev']['article_id']),$_smarty_tpl);?>
" class="lt fontcl1">上一篇：<?php echo $_smarty_tpl->tpl_vars['pager']->value['prev']['title'];?>
</a>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['pager']->value['next']){?>
					<a href="<?php echo smarty_function_link(array('ctl'=>'article:detail','arg0'=>$_smarty_tpl->tpl_vars['pager']->value['next']['article_id']),$_smarty_tpl);?>
" class="rt fontcl1">下一篇：<?php echo $_smarty_tpl->tpl_vars['pager']->value['next']['title'];?>
</a></p>
					<?php }?>
				<h2>相关推荐：</h2>
				<ul class="ari_xg_tui">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/article','cat_id'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id'],'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/article','cat_id'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id'],'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<li><span class="ico_list news_ico"></span><a href="<{link ctl='article:detail' arg0=$item.article_id}>"><{$item.title|cutstr:80}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/article','cat_id'=>$_smarty_tpl->tpl_vars['cate']->value['cat_id'],'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['detail']->value['allow_comment']){?>
		<?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['comment']['article_type']=='sns'){?>
		<?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['comment']['snscomment'];?>

		<?php }elseif($_smarty_tpl->tpl_vars['CONFIG']->value['comment']['article_type']=='comment'){?>
		<div class="mb20 pding area">
			<h3>评论(共<font class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['detail']->value['comments'];?>
</font>条)</h3>
			<form action="<?php echo smarty_function_link(array('ctl'=>'article:savecomment'),$_smarty_tpl);?>
" mini-form="comment" method="post" class="pinglun">
				<input type="hidden" name="article_id" value="<?php echo $_smarty_tpl->tpl_vars['detail']->value['article_id'];?>
" />
				<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['MEMBER']->value['face'];?>
" width="108" class="lt" />
				<div class="rt">
					<textarea name='content' class="text" placeholder="随便说点什么..."></textarea>
					<br />
					<?php if ($_smarty_tpl->tpl_vars['comment_yz']->value){?>
						验证码:
								<input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
								<img verify="#comment-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="comment-verify"/><a verify="#comment-verify">点击刷新验证码</a>
							
					<?php }?>
					<input type="submit" value="发表评论" class="text btn rt pinglun_btn" />
				</div>
				<div class="cl"></div>
			</form>
			<div class="new_pinglun">
				<p class="tit">最新评论</p>				
				<ul>
					<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<li>
						<img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face_80'];?>
" class="lt" />
						<div class="rt">
							<p><span class="lt name"><?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'];?>
</span><span class="rt graycl"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></p>
							<p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
						</div>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
		<?php }?>
		<?php }?>		
	</div>
	<div class="side_content rt">
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

		<div class="area pding mb10 cont_item_rt">
			<ul class="article_list">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"article/cate",'parent_id'=>8,'from'=>'article','hidden'=>'0')); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>8,'from'=>'article','hidden'=>'0'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<li>
					<h3><span class="ico_list shu_ico"></span><{$item.title}></h3>
					<{calldata mdl="article/cate" hidden='0' parent_id=$item.cat_id}><a href="<{link ctl='article:items' arg0=$item.cat_id}>"<{if $cate.cat_id==$item.cat_id}>  class="current"<{/if}>><{$item.title}></a><{/calldata}>
				</li>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"article/cate",'parent_id'=>8,'from'=>'article','hidden'=>'0'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</ul>
		</div>
		<div class="mb20 "><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>