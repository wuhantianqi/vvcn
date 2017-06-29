<?php /* Smarty version Smarty-3.1.8, created on 2017-06-04 20:07:25
         compiled from "D:\wwwroot\xineecn\wwwroot\themes\default\article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13205933f7fde48df0-33864308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a963d80103e1c374fe44e89d443d131c3a840bf' => 
    array (
      0 => 'D:\\wwwroot\\xineecn\\wwwroot\\themes\\default\\article\\index.html',
      1 => 1439885378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13205933f7fde48df0-33864308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONFIG' => 0,
    'request' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5933f7fe4ce821_51725045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5933f7fe4ce821_51725045')) {function content_5933f7fe4ce821_51725045($_smarty_tpl) {?><?php if (!is_callable('smarty_function_link')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_function_adv')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_block_KT')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.KT.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\wwwroot\\xineecn\\wwwroot\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!--面包屑导航开始-->
<div class="main_topnav mb20">
    <div class="mainwd">
        <p><span class="ico_list breadna"></span>您的位置：<a href="<?php echo smarty_function_link(array('ctl'=>'index'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['CONFIG']->value['site']['title'];?>
</a> &gt;<a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
">学装修</a></p>
    </div>
</div>
<!--面包屑导航结束-->
<div class="mainwd">
    <h1>热点推荐</h1>
    <div class="area pding mb20">
        <div class="lt xue_lunz"><?php echo smarty_function_adv(array('id'=>"25",'name'=>"装修学堂热点推荐左广告",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
        <div class="lt content_top">
            <ul class="content_top_t">
               <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"14",'name'=>"学装修首页热点推荐-置顶",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"14",'name'=>"学装修首页热点推荐-置顶",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <h2><{$item.title|cutstr:50}></h2>
                    <p><a href="<{link ctl='article:detail' arg0=$item.article_id}>"><{$item.desc|cutstr:150}><font class="fontcl2">[阅读全文]</font></a></p>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"14",'name'=>"学装修首页热点推荐-置顶",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"2"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="content_top_list">
                <ul class="content_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"43",'name'=>"学装修首页热点推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"43",'name'=>"学装修首页热点推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="ico_list news_ico"></span><a href="<{link ctl='article:detail' arg0=$item.article_id}>"  target="_blank"><b>[<{$item.cat_title|cutstr:12}>]</b> <{$item.title|cutstr:30}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"43",'name'=>"学装修首页热点推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
				<div class="cl"></div>
            </div>
        </div>
        <div class="rt xue_ad"><?php echo smarty_function_adv(array('id'=>"8",'name'=>"学装修首页热点推荐右侧图片B1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>1),$_smarty_tpl);?>
</div>
        <div class="cl"></div>
    </div>
    <h1 class="article_in_title"><span class="lt">装修流程</span><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>8,'arg1'=>1),$_smarty_tpl);?>
" target="_blank" class="rt">更多</a></h1>
    <div class="area  mb20">
        <ul class="lt content_liucheng article_list">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>8,'from'=>'article')); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>8,'from'=>'article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <{if $index<3}>
            <li>
                <h2><{$item.title}></h2>
                <{calldata mdl='article/cate' hidden='0' parent_id=$item.cat_id}><{if $index<8}><a href="<{link ctl='article:items' arg0=$item.cat_id arg1=1}>"><{$item.title|cutstr:5:""}></a><{/if}><{/calldata}>
            </li>
            <{/if}>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'article/cate','hidden'=>'0','parent_id'=>8,'from'=>'article'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"23",'name'=>"学装修装修流程-收房准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"23",'name'=>"学装修装修流程-收房准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"23",'name'=>"学装修装修流程-收房准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">                
                <p class="title"><span>收房准备</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"24",'name'=>"学装修装修流程-收房准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"24",'name'=>"学装修装修流程-收房准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12}>]</b><{$item.title|cutstr:20}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"24",'name'=>"学装修装修流程-收房准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>        
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"25",'name'=>"学装修装修流程-装修准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"25",'name'=>"学装修装修流程-装修准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"25",'name'=>"学装修装修流程-装修准备图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>装修准备</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"26",'name'=>"学装修装修流程-装修准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"26",'name'=>"学装修装修流程-装修准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="ico_list news_ico"></span><a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12:''}>]</b> <{$item.title|cutstr:20}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"26",'name'=>"学装修装修流程-装修准备",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </li>
                </ul>
            </div>
        </div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"27",'name'=>"学装修装修流程-装修阶段图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"27",'name'=>"学装修装修流程-装修阶段图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"27",'name'=>"学装修装修流程-装修阶段图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>装修阶段</span></p>
                <ul class="content_list lt">
                     <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"28",'name'=>"学装修装修流程-装修阶段",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"28",'name'=>"学装修装修流程-装修阶段",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="ico_list news_ico"></span><a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12:''}>]</b><{$item.title|cutstr:20}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"28",'name'=>"学装修装修流程-装修阶段",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"29",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"29",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"29",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>软装配饰</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"30",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"30",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12}>]</b><{$item.title|cutstr:20}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"30",'name'=>"学装修装修流程-软装配饰图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="cl"></div>
    </div>
    <h1 class="article_in_title"><span class="lt">装修学堂</span><a href="<?php echo smarty_function_link(array('ctl'=>'article:items','arg0'=>9,'arg1'=>1),$_smarty_tpl);?>
" target="_blank" class="rt">更多</a></h1>
    <div class="area mb20">
        <div class="rt pding xue_ad"><?php echo smarty_function_adv(array('id'=>"9",'name'=>"学装修装修学堂右侧广告B2",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"15",'name'=>"学装修装修学堂-建材常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"15",'name'=>"学装修装修学堂-建材常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"15",'name'=>"学装修装修学堂-建材常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>建材常识</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"16",'name'=>"学装修装修学堂-建材常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"16",'name'=>"学装修装修学堂-建材常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="ico_list news_ico"></span><a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12:''}>]</b> <{$item.title|cutstr:20}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"16",'name'=>"学装修装修学堂-建材常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>10), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"17",'name'=>"学装修装修学堂-验收常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"17",'name'=>"学装修装修学堂-验收常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"17",'name'=>"学装修装修学堂-验收常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>验收常识</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"18",'name'=>"学装修装修学堂-验收常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"18",'name'=>"学装修装修学堂-验收常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12}>]</b><{$item.title|cutstr:20}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"18",'name'=>"学装修装修学堂-验收常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>11), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"19",'name'=>"学装修装修学堂-施工常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"19",'name'=>"学装修装修学堂-施工常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"19",'name'=>"学装修装修学堂-施工常识图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
                
            </div>
            <div class="content_liuc_title study_list_img">
                <p class="title"><span>施工常识</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"20",'name'=>"学装修装修学堂-施工常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"20",'name'=>"学装修装修学堂-施工常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12}>]</b><{$item.title|cutstr:20}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"20",'name'=>"学装修装修学堂-施工常识",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>14), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="content_liuc_list">
            <div class="opacity_img lt study_list_img">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"21",'name'=>"学装修装修学堂-设计风水图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"21",'name'=>"学装修装修学堂-设计风水图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><img src="<{$pager.img}>/<{$item.thumb}>" /></a>
                <p class="bg"></p><p class="text"><{$item.title|cutstr:20}></p>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"21",'name'=>"学装修装修学堂-设计风水图",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
            <div class="content_liuc_title">
                <p class="title"><span>设计风水</span></p>
                <ul class="content_list lt">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"22",'name'=>"学装修装修学堂-设计风水",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15)); $_block_repeat=true; echo smarty_block_KT(array('id'=>"22",'name'=>"学装修装修学堂-设计风水",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <span class="ico_list news_ico"></span>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><b>[<{$item.cat_title|cutstr:12}>]</b><{$item.title|cutstr:20}></a>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"22",'name'=>"学装修装修学堂-设计风水",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'cat_id'=>15), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="cl"></div>
    </div>
</div>
<!--底部内容开始-->
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>