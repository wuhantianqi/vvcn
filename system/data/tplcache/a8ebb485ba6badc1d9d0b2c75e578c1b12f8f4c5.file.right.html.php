<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 17:15:54
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\ask\block\right.html" */ ?>
<?php /*%%SmartyHeaderCode:68455935214a9d91b3-00499766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ebb485ba6badc1d9d0b2c75e578c1b12f8f4c5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\ask\\block\\right.html',
      1 => 1432555700,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68455935214a9d91b3-00499766',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5935214aa0be42_98888539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5935214aa0be42_98888539')) {function content_5935214aa0be42_98888539($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_widget')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.widget.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.adv.php';
?>
	<!--主体右边内容开始-->
	<div class="side_content rt">
		<div class="mb10 qu_choose">
			<p><span class="ico_list lt"></span>总有一个人能帮您解决装修问题</p>
			<a href="<?php echo smarty_function_link(array('ctl'=>'ask:make'),$_smarty_tpl);?>
" class="tiwen btn">我要提问</a>
			<a href="<?php echo smarty_function_link(array('ctl'=>'ask:items','arg0'=>1,'arg1'=>2),$_smarty_tpl);?>
" class="huida btn">我要回答</a>
		</div>
		<?php echo smarty_function_widget(array('id'=>"tenders/fast",'title'=>"免费装修设计",'from'=>"TSJ"),$_smarty_tpl);?>

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
        <div class="mb10 area">
            <h3 class="side_tit">设计师排行榜</h3>
            <ul class="pding paihang">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5)); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <span class="lt"><font class="paihang_num<{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></font><a href="<{link ctl='blog'  arg0=$item.uid}>"><{$item.name|cutstr:35}></a>
                    </span>
                    <span class="rt">已投标：<font class="fontcl2"><{$item.tenders_num}></font></span>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"designer/designer",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>5), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
		<div class="mb20"><?php echo smarty_function_adv(array('id'=>"10",'name'=>"全站右侧招商图片广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
	</div>
	<div class="cl"></div>
	<!--主体右边内容结束-->
</div>

<?php }} ?>