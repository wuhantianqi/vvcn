<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:25:43
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\blog\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:156895933fc47c6e046-86612487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38d4e7ef8de56f1ac5d02dc120434a327532bf3' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\blog\\detail.html',
      1 => 1438785582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156895933fc47c6e046-86612487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'designer' => 0,
    'company' => 0,
    'comment_list' => 0,
    'pager' => 0,
    'item' => 0,
    'member_list' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933fc47dd99f4_11443153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933fc47dd99f4_11443153')) {function content_5933fc47dd99f4_11443153($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_modifier_cutstr')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\modifier.format.php';
?><?php $_smarty_tpl->tpl_vars["curr_home"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="area pding sub_designer">
	<div class="mb10 designer_inrto">
		<p class="title"><span class="lt">个人简介</span><a href="<?php echo smarty_function_link(array('ctl'=>'blog:about','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" class="rt"><span class="ico_list de_list"></span>详情</a></p>
		<p><span>所在公司：<?php echo $_smarty_tpl->tpl_vars['company']->value['name'];?>
</span><span>联系方式：<?php echo $_smarty_tpl->tpl_vars['designer']->value['show_phone'];?>
</span></p>
		<p><span>所在地区：<?php echo $_smarty_tpl->tpl_vars['designer']->value['city_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['designer']->value['area_name'];?>
</span><span>设计理念：<?php echo $_smarty_tpl->tpl_vars['designer']->value['slogan'];?>
</span></p>
		个人简介:<?php echo $_smarty_tpl->tpl_vars['designer']->value['about'];?>

	</div>
	<div class="mb10 ">
		<p class="title"><span class="lt">案例展示</span><a href="<?php echo smarty_function_link(array('ctl'=>'blog:cases','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" class="rt"><span class="ico_list de_list"></span>更多</a></p>
		<ul class="designer_case">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"case/case",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>3,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"case/case",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>3,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li<{if $first}> class="first"<{/if}>>
                <div class="case_aterfall_li">
                    <div class="opacity_img hoverno">
                        <a href="<{link ctl='case:detail' arg0=$item.case_id}>"  class="pic"><img src="<{$pager.img}>/<{$item.photo}>" /></a>
                        <span class="bg"></span>
                        <span class="text"><a href="<{link ctl='case:detail' arg0=$item.case_id}>">免费户型设计</a></span>
                    </div>
                    <p class="tit"><a href="<{link ctl='case:detail' arg0=$item.case_id}>"><{$item.title}></a></p>
                    <p><span><font class="index_ico like_ico"></font><{$item.likes}>人喜欢</span><span><font class="index_ico person_ico"></font><{$item.views}>人已浏览 </span></p>
                </div>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"case/case",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>3,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
		
		</ul>
	</div>
	<div class="mb10">
		<p class="title"><span class="lt">他的文章</span><a href="<?php echo smarty_function_link(array('ctl'=>'blog:article','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" class="rt"><span class="ico_list de_list"></span>更多</a>
		</p>
		<ul class="news">
		    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/article",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>5,'noext'=>true)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/article",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>5,'noext'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><p class="lt"><span class="ico_list news_ico"></span><a href="<{link ctl='blog:showinfo' arg0=$item.article_id}>"><{$item.title}></a></p><span class="rt">发布于 <{$item.dateline|format:"Y-m-d"}></span></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/article",'uid'=>$_smarty_tpl->tpl_vars['designer']->value['uid'],'limit'=>5,'noext'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</ul>
	</div>
	<div class="new_pinglun disigner_pinglun mb10">
		<p class=" title"><span class="lt">他的评论</span><a href="<?php echo smarty_function_link(array('ctl'=>'blog:comments','arg0'=>$_smarty_tpl->tpl_vars['designer']->value['uid']),$_smarty_tpl);?>
" class="rt"><span class="ico_list de_list"></span>更多</a></p>
		<ul>                 
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        	<li>
                <div class="lt">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['face'];?>
" class="lt" /><br />
                <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['member_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'],6,'');?>

                </div>
                <div class="rt">
                    <p class="graycl">
                        <span class="lt"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['k']->value];?>
&nbsp;&nbsp;&nbsp;<?php } ?></span>
                        <span class="rt"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span>
                    </p>
                    <p><?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
<?php }else{ ?><p class="tips"><span class="lock">该评论正在审核中</span></p><?php }?></p>
                </div>
            </li>
            <?php } ?>
		</ul>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>