<?php /* Smarty version Smarty-3.1.8, created on 2017-06-05 18:11:16
         compiled from "D:\phpStudy\WWW\vvcn\themes\default\index.html" */ ?>
<?php /*%%SmartyHeaderCode:220959352e449ae2a3-66511126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5a4095df2f2ce7497f0a6c8d2cf3653467e409' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\vvcn\\themes\\default\\index.html',
      1 => 1432369697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220959352e449ae2a3-66511126',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request' => 0,
    'pager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59352e44b6b808_56346607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59352e44b6b808_56346607')) {function content_59352e44b6b808_56346607($_smarty_tpl) {?><?php if (!is_callable('smarty_function_adv')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.adv.php';
if (!is_callable('smarty_function_link')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\function.link.php';
if (!is_callable('smarty_block_KT')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.KT.php';
if (!is_callable('smarty_block_calldata')) include 'D:\\phpStudy\\WWW\\vvcn\\system\\plugins/smarty\\block.calldata.php';
?><?php echo $_smarty_tpl->getSubTemplate ("block/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript"  src="/themes/default/static/js/index.js"></script>
<!--头部内容结束-->
<div class="mainwd">
    <!--banner内容开始-->
    <?php echo $_smarty_tpl->getSubTemplate ("index/top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--banner内容结束-->
    <!--通栏广告位开始-->
    <div class="mb20"><?php echo smarty_function_adv(array('id'=>"4",'name'=>"网站首页通栏广告A1",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
    <!--通栏广告位结束-->
    <div class="mb20">
        <!--1F左边装修公司开始-->
        <div class="index_area pding  index_lt index_1floor">
            <h2 class="index_tit"><font class="lt"><b class="fontcl1">1F</b> 推荐装修公司</font><a href="<?php echo smarty_function_link(array('ctl'=>'gs'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a></h2>
            <ul class="index_company">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li><a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.logo}>" alt="<{$item.name}>"/></a></li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"2",'name'=>"网站首页1F推荐装修公司",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="cl"></div>
        </div>
        <!--1F左边装修公司结束-->
        <!--1F右边装修公司排行开始-->
        <div class="area index_rt_all index_paih rt index_1floor_rt">
            <p class="tit"><a href="javascript:;" class="first">最新签单榜</a><a href="javascript:;" >最新加入</a></p>
            <div class="index_paihang">
                <ul class="pding paihang">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="paihang_num <{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></span><a href="<{$item.company_url}>"><{$item.name}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"tenders_num:DESC",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
                <ul class="pding paihang">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"5")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span class="paihang_num <{if $iteration<=3}> ph_num_cl<{/if}>"><{$iteration}></span><a href="<{$item.company_url}>"><{$item.name}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"company/company",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'order'=>"new",'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <!--1F右边装修公司排行结束-->
        <div class="cl"></div>
    </div>
    <div class="mb20">
        <!--2F左边找我家开始-->
        <div class="index_area pding  index_lt">
            <h2 class="index_tit"><font class="lt"><b class="fontcl1">2F</b> 找小区楼盘</font><a href="<?php echo smarty_function_link(array('ctl'=>'home'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a></h2>
            <ul class="line_type index_home">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"3",'name'=>"网站首页2F找我家设计方案",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"3",'name'=>"网站首页2F找我家设计方案",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <{if $iteration mod 5 == 1}>
                <li class="first">
                <{else}>
                <li>
                <{/if}>
                    <a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a>
                    <p><b><a href="<{$item.link}>" class="tit"><{$item.title}></a></b></p>
                    <p>设计方案：<font class="fontcl2"><{$item.case_num}>套</font></p>
                </li>                
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"3",'name'=>"网站首页2F找我家设计方案",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="cl"></div>
        </div>
        <!--2F左边找我家结束-->
        <!--2F右边装修工具开始-->
        <div class="rt index_area index_rt_all index_tool">
            <h2><b>装修工具</b></h2>
            <ul>
                <li>
                    <p><span class="tool_ico tl_ico1"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:tuliao'),$_smarty_tpl);?>
">涂料计算器</a></p>
                </li>
                <li>
                    <p><span class="tool_ico tl_ico2"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:diban'),$_smarty_tpl);?>
">地板计算器</a></p>
                </li>
                <li>
                    <p><span class="tool_ico tl_ico3"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:bizhi'),$_smarty_tpl);?>
">壁纸计算器</a></p>
                </li>
                <li>
                    <p><span class="tool_ico tl_ico4"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:qiangzhuan'),$_smarty_tpl);?>
">墙砖计算器</a></p>
                </li>
                <li>
                    <p><span class="tool_ico tl_ico5"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:chuanlian'),$_smarty_tpl);?>
">窗帘计算器</a></p>
                </li>
                <li>
                    <p><span class="tool_ico tl_ico6"></span></p>
                    <p><a href="<?php echo smarty_function_link(array('ctl'=>'tools:dizhuan'),$_smarty_tpl);?>
">地砖计算器</a></p>
                </li>
            </ul>
        </div>
        <!--2F右边装修工具结束-->
        <div class="cl"></div>
    </div>
    <div class="mb20 index_area pding">
        <!--3F团装活动开始-->
        <h2 class="index_tit"><font class="lt"><b class="fontcl1">3F</b> 团装活动</font><a href="<?php echo smarty_function_link(array('ctl'=>'home:tuan'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a>
        </h2>
        <ul class="line_type index_tuanz">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <li>
                <div class="opacity_img">
                    <a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a>
                    <p class="bg"></p>
                    <p class="text"><span class="index_ico time_ico"></span><font remaintime="<{$item.ltime}>"></font></p>
                </div>
                <div class="index_tuanz_btm">
                    <p><b><a href="<{$item.link}>" class="tit"><{$item.title}></a></b></p>
                    <p class="colorbg"><span class="lt tit">立省<b class="fontcl1">￥<{$item.jieyue}></b>元</span><a href="<{link ctl='home:tuanDetail' arg0=$item.tuan_id}>" class="btn_sub_sm rt btn">立即参团</a>
                    </p>
                    <p><font class="fontcl2"><{$item.sign_num}></font>人已参团</p>
                </div>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"40",'name'=>"网站首页3F小区团装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="cl"></div>
        <!--3F团装活动结束-->
    </div>
    <div class="mb20">
        <!--4F热门案例开始-->
        <div class="index_area pding index_case  index_lt">
            <h2 class="index_tit"><font class="lt"><b class="fontcl1">4F</b> 热门案例</font><span class="tit_list hoverno lt"><a href="#">风格</a>
                <a>空间</a>
                <a>别墅</a>
                <a>小户型</a>
                <a>公装</a>
                </span><a href="<?php echo smarty_function_link(array('ctl'=>'case'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a>
            </h2>
            <ul class="index_case_list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"4",'name'=>"网站首页4F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"4",'name'=>"网站首页4F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first}> class="first"<{/if}>>
                    <div class="opacity_img"><a href="<{$item.link}>">
                        <img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"4",'name'=>"网站首页4F热门案例-风格",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <ul class="index_case_list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"5",'name'=>"网站首页4F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"5",'name'=>"网站首页4F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first}> class="first"<{/if}>>
                    <div class="opacity_img"><a href="<{$item.link}>">
                        <img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"5",'name'=>"网站首页4F热门案例-空间",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <ul class="index_case_list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"6",'name'=>"网站首页4F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"6",'name'=>"网站首页4F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first}> class="first"<{/if}>>
                    <div class="opacity_img"><a href="<{$item.link}>">
                        <img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"6",'name'=>"网站首页4F热门案例-别墅",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <ul class="index_case_list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"7",'name'=>"网站首页4F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"7",'name'=>"网站首页4F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first}> class="first"<{/if}>>
                    <div class="opacity_img"><a href="<{$item.link}>">
                        <img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"7",'name'=>"网站首页4F热门案例-小户型",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <ul class="index_case_list">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"8",'name'=>"网站首页4F热门案例-公装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"8",'name'=>"网站首页4F热门案例-公装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first}> class="first"<{/if}>>
                    <div class="opacity_img"><a href="<{$item.link}>">
                        <img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a><p class="bg"></p>
                        <p class="text"><span class="lt"><{$item.title|cutstr:20}></span><span class="rt"><span class="index_ico like_ico"></span><{$item.likes}></span></p>
                    </div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"8",'name'=>"网站首页4F热门案例-公装",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"7"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="cl"></div>
        </div>
        <!--4F热门案例结束-->
        <!--4F右边最新发布订单开始-->
        <div class="rt index_area index_rt_all index_new_order">
            <h2 class="index_tit"><font class="lt">最新招标</font><a href="<?php echo smarty_function_link(array('ctl'=>'tenders','http'=>'base'),$_smarty_tpl);?>
" class="fontcl1 rt">我要申请</a>
            </h2>
            <p class="new_order_tit"><span class="long">发布日期</span><span>业主</span><span>风格</span><span>预算</span></p>
            <div class="index_nwod_box">
                <ul class="index_nwod_list">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><span  class="long"><{$item.dateline|format:"m-d"}></span><span><{$item.contact|cutstr:3}></span><span><{$item.style_title}></span><span><{$item.budget_title}></span></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>"tenders/tenders",'order'=>"dateline",'limit'=>"15"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <!--4F右边最新发布订单结束-->
        <div class="cl"></div>
    </div>
    <div class="mb20 index_area pding ">
        <!--5F设计师开始-->
        <h2 class="index_tit"><font class="lt"><b class="fontcl1">5F</b> 优秀设计师</font><a href="<?php echo smarty_function_link(array('ctl'=>'designer'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a></h2>
        <ul class="line_type index_designer">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"9",'name'=>"网站首页5F优秀设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"9")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"9",'name'=>"网站首页5F优秀设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"9"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <{if $first}>
            <li class="first">
            <{else}>
            <li>
            <{/if}>
                <a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.name}>"/></a>
                <p><b>头衔：<{$item.group_name}></b></p>
                <p><a href="<{$item.link}>"><{$item.name}></a></p>
            </li>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"9",'name'=>"网站首页5F优秀设计师",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"9"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </ul>
        <div class="cl"></div>
        <!--5F设计师结束-->
    </div>
    <div class="mb20">
        <!--6F左边建材商城开始-->
        <div class="index_area pding  index_lt">
            <h2 class="index_tit"><font class="lt"><b class="fontcl1">6F</b> 建材商城</font><a href="<?php echo smarty_function_link(array('ctl'=>'mall/store'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a></h2>
            <ul class="index_company index_shop">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"41",'name'=>"网站首页6F建材商城",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"41",'name'=>"网站首页6F建材商城",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li<{if $first || $index==5}> class="first"<{/if}>><a href="<{$item.link}>"><img src="<{$pager.img}>/<{$item.logo}>" alt="<{$item.name}>"/></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"41",'name'=>"网站首页6F建材商城",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="cl"></div>
        </div>
        <!--6F左边建材商城结束-->
        <!--6F右边广告位开始-->
        <div class="shop_rt_ad rt"><?php echo smarty_function_adv(array('id'=>"19",'name'=>"网站首页6F右侧广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
        <!--6F右边广告位结束-->
        <div class="cl"></div>
    </div>
    <div class="mb20">
        <!--7F左边在建工地开始-->
        <div class="index_area pding index_lt">
            <h2 class="index_tit"><font class="lt"><b class="fontcl1">7F</b> 在建工地</font><a href="<?php echo smarty_function_link(array('ctl'=>'site'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a>
            </h2>
            <ul class="index_site">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"10",'name'=>"网站首页7F在建工地",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5")); $_block_repeat=true; echo smarty_block_KT(array('id'=>"10",'name'=>"网站首页7F在建工地",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li>
                    <div class="index_site_list">
                        <span>工地名称：<a href="<{link ctl='site:detail' arg0=$item.site_id}>"><{$item.title}></a></span>
                        <span>面积：<{$item.house_mj}>平米</span>
                        <{if $item.designer_id}><span>设计师：<a href="<{link ctl='designer:detail' arg0=$item.designer_id}>"><{$item.designer}></a></span><{/if}>
                        <span>进度：<font class="fontcl2"><{$item.status_title|default:'未开工'}></font></span>
                    </div>
                    <div class="index_site_hover">
                        <a href="<{link ctl='site:detail' arg0=$item.site_id}>" class="lt"><img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a>
                        <div class="rt index_site_mid">
                            <p>
                                <span>工地名称：<a href="<{link ctl='site:detail' arg0=$item.site_id}>"><{$item.title}></a></span>
                                <span>面积：<{$item.house_mj}>平米</span>
                                <{if $item.designer_id}><span>设计师：<a href="<{link ctl='designer:detail' arg0=$item.designer_id}>"><{$item.designer}></a></span><{/if}>
                                </span><a href="<{link ctl='site:detail' arg0=$item.site_id}>" class="btn_main_big btn">我要参观</a>
                            </p>
                            <div class="site_step">
                                <p class="step bar"><span class="bar step_color step<{$item.status}>"></span></p>
                                <p><{foreach $site_status_list as $k=>$v}><span class="step"><{$v}></span><{/foreach}></p>
                            </div>
                        </div>
                    </div>
                    <div class="cl"></div>
                </li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"10",'name'=>"网站首页7F在建工地",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"5"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
            <div class="cl"></div>
        </div>
        <!--7F左边在建工地结束-->
        <!--7F右边申请参观开始-->
        <div class="index_apply_box pding index_rt">
            <h2><b>查看工地进度详情</b></h2>
            <h2><b>进一步了解家装流程</b></h2>
            <form action="<?php echo smarty_function_link(array('ctl'=>'tenders:save','http'=>'base'),$_smarty_tpl);?>
" mini-form="site_tenders" method="post" class="index_apply_form pding">
                <input type="hidden" name="data[from]" value="TZB" />
                <p><span class="index_ico ico_name"></span><input type="text" name="data[contact]" class="text" placeholder="请输入您的姓名"/></p>
                <p><span class="index_ico ico_tel"></span><input type="text" name="data[mobile]" class="text" placeholder="请输入您的联系方式"/></p>
                <p><span class="index_ico ico_add"></span><input type="text" name="data[content]" class="text" placeholder="请输入您要参观的小区" /></p>
                <input type="submit" value="免费申请参观" class="btn_sub_apply btn" />
            </form>
        </div>
        <!--7F右边申请参观结束-->
        <div class="cl"></div>
    </div>
    <div class="mb20 index_area pding ">
        <!--8F装修学堂开始-->
        <h2 class="index_tit"><font class="lt"><b class="fontcl1">8F</b> 装修学堂</font><a href="<?php echo smarty_function_link(array('ctl'=>'article'),$_smarty_tpl);?>
" class="rt">更多<span class="index_ico"></span></a></h2>
        <div class="index_study">
            <div class="index_study_ad lt"><?php echo smarty_function_adv(array('id'=>"20",'name'=>"网站首页装修学堂广告位",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']),$_smarty_tpl);?>
</div>
            <div class="index_study_news lt">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"39",'name'=>"网站首页8F装修学堂-头条",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"39",'name'=>"网站首页8F装修学堂-头条",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="index_study_news_top">
                    <h3><a href="<{$item.link}>"><{$item.title|cutstr:35}></a></h3>
                    <a href="<{$item.link}>"><{$item.desc|cutstr:100}><font class="fontcl2">[详情]</font></a>
                </div>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"39",'name'=>"网站首页8F装修学堂-头条",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"11",'name'=>"网站首页8F装修学堂-推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"11",'name'=>"网站首页8F装修学堂-推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li><a href="<{$item.link}>"><font class="fontcl2">[<{$item.cat_title}>]</font> | <{$item.title|cutstr:46}></a></li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"11",'name'=>"网站首页8F装修学堂-推荐",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
            <div class="index_news_list rt">
                <ul>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('KT', array('id'=>"12",'name'=>"网站首页8F装修学堂-右侧图文",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'])); $_block_repeat=true; echo smarty_block_KT(array('id'=>"12",'name'=>"网站首页8F装修学堂-右侧图文",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <li>
                        <a href="<{link ctl='article:detail' arg0=$item.article_id}>" class="lt"><img src="<{$pager.img}>/<{$item.thumb}>" alt="<{$item.title}>"/></a>
                        <div class="index_news_list_text rt">
                            <h3><a class="tit" href="<{link ctl='article:detail' arg0=$item.article_id}>"><{$item.title|cutstr:27}></a></h3>
                            <a href="<{link ctl='article:detail' arg0=$item.article_id}>"><{$item.desc|cutstr:100}><font class="fontcl2">[详情]</font></a>
                        </div>
                        <div class="cl"></div>
                    </li>
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_KT(array('id'=>"12",'name'=>"网站首页8F装修学堂-右侧图文",'city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </ul>
            </div>
        </div>
        <div class="cl"></div>
        <!--8F装修学堂结束-->
    </div>
    <div class="mb20">
        <!--友情链接开始-->
        <div class="index_area pding" style="min-height:100px;">
            <div>
            <h2 class="index_tit"><font class="lt">友情链接</font></h2>
            <ul class="yq_link">
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('calldata', array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10")); $_block_repeat=true; echo smarty_block_calldata(array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <li><a href="<{$item.link}>"><{$item.title}></a></li>
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_calldata(array('mdl'=>'market/links','city_id'=>$_smarty_tpl->tpl_vars['request']->value['city_id'],'limit'=>"10"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </ul>
        </div>
        </div>  
        <div class="cl"></div>
        <!--友情链接结束-->   
    </div>
</div>
<!--底部内容开始-->
<script type="text/javascript">
(function(K, $){
$(function(){
    var dateTime = new Date();
    var difference = dateTime.getTime() - <?php echo $_smarty_tpl->tpl_vars['pager']->value['dateline'];?>
*1000; 
    setInterval(function(){
      $("[remaintime]").each(function(){
        var obj = $(this);
        var endTime = new Date(parseInt(obj.attr('remaintime')) * 1000);
        var nowTime = new Date();
        var nMS=endTime.getTime() - nowTime.getTime() + difference;
        var myD=Math.floor(nMS/(1000 * 60 * 60 * 24));
        var myH=Math.floor(nMS/(1000*60*60)) % 24;
        var myM=Math.floor(nMS/(1000*60)) % 60;
        var myS=Math.floor(nMS/1000) % 60;
        var myMS=Math.floor(nMS/100) % 10;
        if(myD>= 0){
            var str = myD+"天"+myH+"小时"+myM+"分"+myS+"."+myMS+"秒";
        }else{
            var str = "真遗憾您来晚了，抢购已经结束。";    
        }
        obj.html(str);
      });
    }, 100);
});
})(window.KT, window.jQuery);
</script>
<?php echo $_smarty_tpl->getSubTemplate ("block/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>