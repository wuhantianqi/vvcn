<?php /* Smarty version Smarty-3.1.8, created on 2017-06-06 11:18:27
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\blog\comments.html" */ ?>
<?php /*%%SmartyHeaderCode:2611959361f03765485-08878045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce4859fe58f6a8858093f88dc7bed8be5c89e99b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\blog\\comments.html',
      1 => 1433122058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2611959361f03765485-08878045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'comment_info' => 0,
    'pager' => 0,
    'designer' => 0,
    'item' => 0,
    'user_list' => 0,
    'CONFIG' => 0,
    'v' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59361f0380d420_79896158',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59361f0380d420_79896158')) {function content_59361f0380d420_79896158($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_cutstr')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.cutstr.php';
if (!is_callable('smarty_modifier_format')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\modifier.format.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
?><?php $_smarty_tpl->tpl_vars["curr_comment"] = new Smarty_variable(true, null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="area pding sub_designer">
	<div class="new_pinglun disigner_pinglun mb10">
		<ul>
    	  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        	<li>
                <div class="lt">
                <img src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['img'];?>
/<?php echo $_smarty_tpl->tpl_vars['designer']->value['face'];?>
" class="lt" /><br />
                <?php echo smarty_modifier_cutstr($_smarty_tpl->tpl_vars['user_list']->value[$_smarty_tpl->tpl_vars['item']->value['uid']]['uname'],6,'');?>

                </div>
                <div class="rt">
                    <p class="graycl">
                   <span class="lt"><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php if ($_smarty_tpl->tpl_vars['v']->value){?><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['k']->value];?>
  <?php }?><?php } ?></span> <span class="rt time"><?php echo smarty_modifier_format($_smarty_tpl->tpl_vars['item']->value['dateline']);?>
</span></p>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['audit']){?><p><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p><?php }else{ ?><p class="tips"><span class="lock">评论审核中</span></p><?php }?>
                </div>
            </li>
            <?php } ?>			
		</ul>
		<?php if ($_smarty_tpl->tpl_vars['pager']->value['pagebar']){?><div class="page hoverno"><?php echo $_smarty_tpl->tpl_vars['pager']->value['pagebar'];?>
</div><?php }?>
		<div class="pingjia_box pding">
			<h3>我要评价</h3>
			<div class="cl"></div>
            <form action="<?php echo smarty_function_link(array('ctl'=>'blog:comment','http'=>'ajax'),$_smarty_tpl);?>
" mini-form="comment" method="post" class="pinglun">
                <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['designer']->value['uid'];?>
" />
               <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONFIG']->value['score']['designer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value){?>
                <span  class="pf"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
：<input type="hidden" name="data[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" id="comment-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="3" /><b comment-score="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" data-score="3"></b></span>
                <?php }?>
                <?php } ?>
                <textarea class="text" name="data[content]" placeholder="您的点评..."></textarea>
                <?php if ($_smarty_tpl->tpl_vars['CONFIG']->value['access']['verifycode']['comment']){?>
                    验证码：<input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                    <img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>                                
                <?php }?>
                <input type="submit" value="发表评论" class="text btn rt pinglun_btn" />
                <div class="cl"></div>
            </form>
		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/cloud-zoom.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['pager']->value['res'];?>
/script/raty/jquery.raty.js"></script>
<script type="text/javascript">
(function(K, $){
	$('b[comment-score]').raty({
		path: "/static/script/raty/img/",
		score: function() {return $(this).attr('data-score');},
		hints: ["差","还行","好","很好","非常好"],
		click: function(score, evt) {$("#comment-"+$(this).attr("comment-score")).val(score);}
	});
    $("[verify]").click(function(){
        $($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
    });
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("blog/block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>