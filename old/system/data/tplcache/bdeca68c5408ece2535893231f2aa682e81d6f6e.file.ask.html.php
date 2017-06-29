<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 19:59:19
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\ask\ask.html" */ ?>
<?php /*%%SmartyHeaderCode:205775933f617323071-56700005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdeca68c5408ece2535893231f2aa682e81d6f6e' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\ask\\ask.html',
      1 => 1433122060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205775933f617323071-56700005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'cates' => 0,
    'item' => 0,
    'it2' => 0,
    'ask_yz' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f617bb3338_64209211',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f617bb3338_64209211')) {function content_5933f617bb3338_64209211($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
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
		</p>
	</div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
	<!--主体左边内容开始-->
	<div class="main_content lt">
		<div class="mb10 area question_box">			
             <form action="<?php echo smarty_function_link(array('ctl'=>'ask:save','http'=>'ajax'),$_smarty_tpl);?>
" mini-form="ask"  method="post">
               <textarea id='data_title' name='data[content]' class="mb10" placeholder="请在这里输入您的问题，有问必答"></textarea>	
                   <div class="lt">
					<span>问题分类：</span>              
					<select class="text"  id='cate_select' onchange="change(this.value)" >
                    	 <option value="cat_all" id='cat_all' selected="selected">--全部--</option>
						 <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==0){?>
                                    <option value='<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</option>
                            <?php }?>
                        <?php } ?>
					</select>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    	 <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==0){?>
                            <select class="text" id = '<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
' onchange = "changes(this.value)" style="display:none">
                            	 <option class = 'parent_all'  value="parent_all">--全部--</option>
                                 <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['it2']->value['parent_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>
                                            <option  value='<?php echo $_smarty_tpl->tpl_vars['it2']->value['cat_id'];?>
'><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</option>
                                        <?php }?>
                                 <?php } ?>
                            </select>
                         <?php }?>
                    <?php } ?>
                     
                  <input type="hidden" id='cat_value' name="cat_id" value="0" /> 
                 		<?php if ($_smarty_tpl->tpl_vars['ask_yz']->value){?>
                            验证码:
                                    <input class="text short" type="text" name="verifycode" placeholder="请输入验证码"/>
                                    <img verify="#pass-verify" src="<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_=<?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
" id="pass-verify"/>
                                
                        <?php }?>
                    </div>
                    <div class="rt">
                        
                        <input type="submit" class="btn" value="提交问题"  />
                    </div>
                    <div class="cl"></div>
                </form>
                
                <script>
					$(document).ready(function(){
                       $("#cat_all").attr("selected",true);
					   $('#cat_value').val(0);
                    });
					
                	function change(cat_id){
						<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==0){?>
								   if(cat_id == <?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
){
										 $("#"+<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
).show();  
								   }else{
										 $("#"+<?php echo $_smarty_tpl->tpl_vars['item']->value['cat_id'];?>
).hide();  
								   }
                            <?php }?>
						<?php } ?>
						$(".parent_all").attr("selected",true);
						$('#cat_value').val(cat_id);
					}
					
					function changes(val){
						if(isNaN(val)){
							val = 	$('#cate_select option:selected').val();
						}
						$('#cat_value').val(val);
					}
                </script>
		</div>
		<div class="mb20">
			<div class="side_content area lt">
				<h3 class="side_tit">所有问题分类</h3>
				<ul class="question_fenlei pding">
                	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['parent_id']==0){?>
                            <li>
                            	<h3><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['item']->value['cat_id']),$_smarty_tpl);?>
" class="fontcl2"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3>
                                <?php  $_smarty_tpl->tpl_vars['it2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['it2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['it2']->key => $_smarty_tpl->tpl_vars['it2']->value){
$_smarty_tpl->tpl_vars['it2']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['it2']->value['parent_id']==$_smarty_tpl->tpl_vars['item']->value['cat_id']){?>
                                	<a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>$_smarty_tpl->tpl_vars['it2']->value['cat_id']),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['it2']->value['title'];?>
</a>
                                <?php }?>
                                <?php } ?>
                            </li>
                        <?php }?>
                    <?php } ?>
					
				</ul>
			</div>
			<div class="question_show  rt">
				<div class="area mb10">
					<h3 class="side_tit"><font class="lt">已解决问题</font><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>1,'arg1'=>1),$_smarty_tpl);?>
" class="rt">更多</a>
					</h3>
					<ul class="pding question_list">
                    	 <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                            <li><a target="_blank" href="<{link ctl='ask:detail' arg0=$item.ask_id}>" class="lt"><span class="ico_list over_qe"></span><{$item.title|cutstr:50}></a>
							<span class="rt">回答(<font class="fontcl2"><{$item.answer_num}></font>)</span></li>
                         <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'>:0','order'=>"ask_id:desc",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
				</div>
				<div class="area">
					<h3 class="side_tit"><font class="lt">未解决问题</font><a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>1,'arg1'=>2),$_smarty_tpl);?>
" class="rt">更多</a>
					</h3>
					<ul class="pding question_list">
                    		<?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 
                            	<li><a  target="_blank" href="<{link ctl='ask:detail' arg0=$item.ask_id}>" class="lt"><span class="ico_list no_qe"></span><{$item.title|cutstr:50}></a>
							<span class="rt fontcl2"><{$item.dateline|format}></span></li>
                            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"ask/ask",'answer_id'=>'0','order'=>"ask_id:desc",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						
					</ul>
				</div>
			</div>
			<div class="cl"></div>
		</div>
	</div>
	<!--主体左边内容结束-->
    <script>
	$("[verify]").click(function(){
		$($(this).attr("verify")).attr("src", "<?php echo smarty_function_link(array('ctl'=>'magic:verify','http'=>'ajax'),$_smarty_tpl);?>
&_"+Math.random());
	});
	</script>
	<?php echo $_smarty_tpl->getSubTemplate ("ask/block/right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>